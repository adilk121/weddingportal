/*!
 * Simple Carousel v0.1.0
 * http://www.yaohaixiao.com/simple-carousel/
 *
 * For more easing effects needs jQuery Easing(v1.3) plugin
 * http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Copyright (c) 2014 Robert Yao. All rights reserved.
 * Released under the MIT license
 *
 * Date: 2014-07-30
 */
(function($) {
    "use strict";

    var TXT = {
            ATTR: "attr",
            EMPTY: "",
            V: "V",
            H: "H",
            MINUS: "-",
            PX: "px",
            SWING: "swing",
            FORWARD: "forward",
            BACK: "back",
            NUMBER: "number",
            STRING: "string",
            JSON: "json",
            UNKNOWN_PROPERTY: "is a known property."
        },
        SETTINGS = {
            WRAP: "wrap",
            CONTAINER: "container",
            BEFORE_SWITCH: "beforeSwitch",
            AFTER_SWITCHED: "afterSwitched",
            CAROUSEL: "carousel",
            ITEM: "item",
            ITEMS_PER_STEP: "itemsPerStep",
            DEFAULT_PAGE: "defaultPage",
            PREV_BTN: "prevBtn",
            NEXT_BTN: "nextBtn",
            BUTTON_AVAILABLE: "buttonAvailable",
            PAGINATED: "paginated",
            PLAY_DIRECTION: "playDirection",
            PAGE_DIRECTION: "pageDirection",
            AUTO_PLAY: "autoPlay",
            CYCLE_PLAY: "cyclePlay",
            EASING: "easing",
            ANIMATE_DURATION: "animateDuration",
            PAGE_SWITCH_DELAY: "pageSwitchDelay",
            EMPTY_CASE: "emptyCase",
            AJAX: "ajax",
            REMOVE_EMPTY: "removeEmpty"
        },
        CLS = {
            HIDE: "hide",
            CONTAINER: "carousel-container",
            CAROUSEL: "carousel-list",
            PREV_BTN: "carousel-prev-btn",
            NEXT_BTN: "carousel-next-btn",
            BUTTON_DISABLED: "carousel-button-disabled",
            PAGINATION: "carousel-pagination",
            PAGINATION_TAB: "carousel-pagination-tab",
            PAGINATION_ACTIVE_TAB: "carousel-pagination-active-tab"
        },
        PRE_ID = {
            CONTAINER: "carousel-container-",
            CAROUSEL: "carousel-list-",
            PREV_BTN: "carousel-prev-btn-",
            NEXT_BTN: "carousel-next-btn-",
            PAGINATION: "carousel-pagination-"
        },
        SELECTOR = {
            ID_SELECTOR: "#",
            CLS_SELECTOR: ".",
            WRAP: "#carousel",
            CONTAINER: "#carousel-container",
            CAROUSEL: "#carousel-list",
            PREV_BTN: "#carousel-prev-btn",
            NEXT_BTN: "#carousel-next-btn"
        },
        DEFAULT_VAL = {
            PLAY_DIRECTION: TXT.V,
            EASING: TXT.SWING,
            PAGE_DIRECTION: TXT.FORWARD,
            PAGINATION_TAB_WIDTH: 30,
            ANIMATE_DURATION: 500,
            PAGE_SWITCH_DELAY: 3000
        },
        CSS = {
            TOP: "top",
            VISIBLE: {
                "overflow": "visible"
            }
        },
        TAG = {
            A: "a",
            LI: "li",
            IMG: "img"
        },
        ATTR = {
            ID: "id",
            SRC: "src"
        },
        TEMPLATE = {
            CONTAINER: "<div class='" + CLS.CONTAINER + "'></div>",
            CAROUSEL: "<ul class='" + CLS.CAROUSEL + "'></ul>",
            PREV_BTN: "<a title='Previous Page' class='" + CLS.PREV_BTN + "' href='#prev'>‹</a>",
            NEXT_BTN: "<a title='Next Page' class='" + CLS.NEXT_BTN + "' href='#next'>›</a>",
            EMPTY_ITEM: "<li></li>",
            ITEM_INNER_HTML: "<p><a href='{url}'><img width='{imgWidth}' height='{imgHeight}' alt='{title}' src='{src}'></a></p><h3><a target='_blank' href='{url}'>{title}</a></h3>",
            PAGINATION: "<ul class=" + CLS.PAGINATION + "></ul>",
            PAGINATION_TAB: "<li class=" + CLS.PAGINATION_TAB + "></li>"
        },
        EVENTS = {
            ON: "on",
            TRIGGER: "trigger",
            BEFORE_SWITCH: "beforeSwitch",
            AFTER_SWITCHED: "afterSwitched",
            ITEMS_CHANGE: "itemsChange",
            ATTRIBUTES_CHANGE: "attributesChange"
        },
        toHTMLTemplate = function(json, template){
            $.each(json, function(key, value){
                var templateRegExp = new RegExp("{" + key + "}", "gi");

                template = template.replace(templateRegExp, value);
            });

            return template;
        };

    $.SimpleCarousel = function( config ) {

        // A jQuery Object to stores the configuration values and changed values,
        // and binds 'attributesChange' event on this Object, fires 'attributesChange'
        // when update a new configuration value.
        this.settings = $({
            attributes: {},
            changed: {}
        });

        this.uuid = 0;

        this.timer = null;

        this.scrolling = false;

        this.totalPages = 0;

        this.clipPosition = 0;

        this.currentPage = 0;


        // All UI components
        this.wrap = null;

        this.container = null;

        this.carousel = null;

        this.prevBtn = null;

        this.nextBtn = null;

        this.items = null;

        this.pagination = null;

        this.paginationTabs = null;

        this.paginationLinks = null;

        this.activeTab = null;

        this.lastSelectedTab = null;


        // Extend the 'this.settings.attributes' object
        // with the '$.SimpleCarousel.defaults' value.
        $.extend( this.settings[0].attributes, $.SimpleCarousel.defaults );

        // Update the 'this.settings.attributes' values.
        if ( $.isPlainObject( config ) ) {
            $.extend( this.settings[0].attributes, config );
        }

        return this;
    };

    $.SimpleCarousel.prototype = {

        // -- Public Properties ----------------------------------------------------

        version: "0.1.0",

        constructor: $.SimpleCarousel,

        keys: [],

        length: 0,

        // -- Lifecycle Methods ----------------------------------------------------

        initializer: function () {
            var key,
                prototype = this.constructor.prototype;

            if ( this.isAsync() ) {
                this._ajaxInitializer();

            } else {
                this._initializer();
            }

            for ( key in prototype ) {

                if ( prototype.hasOwnProperty( key ) ) {
                    this.keys.push( key );
                }
            }

            this.keys.sort();
            this.length = this.keys.length;

            return this;
        },

        // -- Protected prototype Methods ----------------------------------------------------

        _initializer: function () {

            // Get all components of the SimpleCarousel
            if ( !this.isAsync() ) {
                this.wrap = $( this.get( SETTINGS.WRAP ) );
                this.container = $( this.get( SETTINGS.CONTAINER ) );
                this.carousel = $( this.get( SETTINGS.CAROUSEL ) );
                this.prevBtn = $( this.get( SETTINGS.PREV_BTN ) );
                this.nextBtn = $( this.get( SETTINGS.NEXT_BTN ) );
            }

            // Initialize
            this._removeEmpty().
                _updateCarouselSize().
                _enableButtons().
                _createPaginationUI().
                _switchToDefaultPage().
                _stylePagination().
                _bind();

            return this;
        },

        _ajaxInitializer: function () {
            var SimpleCarousel = this,
                ajax = this.get( SETTINGS.AJAX );

            this._createMainUI();

            if ( this.isAsync() ) {

                // The 'ajax' setting is the
                $.extend( ajax, {
                    dataType: TXT.JSON,
                    success: function ( data ) {
                        var removePaginationUI = ajax.removePaginationUI,
                            add = ajax.add,
                            remove = ajax.remove,
                            carousel = SimpleCarousel.carousel;

                        // Remove the 'pagination' element
                        if ( $.isFunction( removePaginationUI ) ) {
                            removePaginationUI();
                        }

                        // Remove all items from the 'carousel' element
                        if ( $.trim( carousel.html() ) ) {
                            carousel.html( TXT.EMPTY );
                        }

                        if ( carousel[0] ) {

                            // Create new 'item' and append it to the 'carousel' element
                            $( data ).each( function ( i, json ) {
                                SimpleCarousel.add({
                                    itemJSON: json,
                                    itemInnerHTML: ajax.itemInnerHTML || TEMPLATE.ITEM_INNER_HTML
                                });
                            } );

                            // Add new 'item' to the 'carousel' element after initialize the SimpleCarousel
                            if ( $.isFunction( add ) ) {
                                add();
                            }

                            // remove a item from the 'carousel' after initialize the SimpleCarousel
                            if ( $.isFunction( remove ) ) {
                                remove();
                            }

                            // Initialize the SimpleCarousel after create all UI components
                            SimpleCarousel._initializer();
                        }
                    }
                });

                // Send a ajax request
                $.ajax( ajax );
            }

            return this;
        },

        _reload: function () {

            if ( !this.isAsync() ) {

                // The 'pagination' element will be repainted every time
                // when reload the SimpleCarousel.
                this._unbind().
                    _removePaginationUI().
                    _initializer();
            }

            return this;
        },

        _ajaxReload: function () {
            var SimpleCarousel = this,
                ajax = this.get( SETTINGS.AJAX );

            if ( this.isAsync() ) {

                // The 'pagination' element will be repainted every time
                // when reload the SimpleCarousel.
                $.extend( ajax, {
                    removePaginationUI: function () {
                        SimpleCarousel._unbind()._removePaginationUI();
                    }
                });

                $.ajax( ajax );
            }

            return this;
        },

        _hasId: function( element ) {
            return $.trim( $( element ).attr( ATTR.ID ) ) === TXT.EMPTY;
        },

        _addId: function(element, id) {

            if ( !this._hasId( element ) ) {
                $( element ).attr( ATTR.ID, id + this.guid() );
            }

            return this;
        },

        _createMainUI: function () {
            var wrap = $( this.get( SETTINGS.WRAP ) ),
                container = $( this.get( SETTINGS.CONTAINER ) ),
                carousel = $( this.get( SETTINGS.CAROUSEL ) ),
                prevBtn = $( this.get( SETTINGS.PREV_BTN ) ),
                nextBtn = $( this.get( SETTINGS.NEXT_BTN ) );

            // Add the 'id' attribute to each created main UI components.
            this._addId( container, PRE_ID.CONTAINER ).
                _addId( carousel, PRE_ID.CAROUSEL ).
                _addId( prevBtn, PRE_ID.PREV_BTN ).
                _addId( prevBtn, PRE_ID.NEXT_BTN );

            this.wrap = wrap;
            this.container = container;
            this.carousel = carousel;
            this.prevBtn = prevBtn;
            this.nextBtn = nextBtn;

            // Remove all UI components
            if ( $.trim( wrap.html() ) ) {
                wrap.html( TXT.EMPTY );
            }

            // Append all create UI components to the root element.
            wrap.append( prevBtn ).append( container.append( carousel ) ).append( nextBtn );

            return this;
        },

        _createPaginationUI: function () {
            var SimpleCarousel = this,
                wrap = this.wrap,
                hasPagination = this.hasPagination(),
                pagination = null,
                totalPages = this.totalPages,
                paginationClass = hasPagination.paginationClass,
                paginationItems = hasPagination.paginationItems,
                paginationTop = wrap[0].offsetHeight + 10,
                paginationWidth = totalPages * DEFAULT_VAL.PAGINATION_TAB_WIDTH,
                defaultPage = this.get( SETTINGS.DEFAULT_PAGE ),
                TXT_PX = TXT.PX;

            if ( hasPagination && totalPages >= 2 ) {

                // Create a 'pagination' element
                pagination = $( TEMPLATE.PAGINATION ).attr( ATTR.ID, PRE_ID.PAGINATION + this.guid() ).css({
                    "width": paginationWidth + TXT_PX,
                    "margin-left": TXT.MINUS + (paginationWidth / 2) + TXT_PX
                });

                // Position the 'pagination' element
                if( paginationClass ){

                    // Position it with the 'paginationClass' class
                    pagination.addClass(paginationClass);
                } else {

                    // Position it in the middle bottom of the root element
                    pagination.css(CSS.TOP, paginationTop + TXT_PX);
                }

                this.pagination = pagination;

                // Create page Tabs
                $( new Array(totalPages) ).each(function ( index ) {
                    var itemInnerTemplate = index + 1,
                        pageTab = $( TEMPLATE.PAGINATION_TAB );

                    // Get customized pageTab item inner HTML template.
                    if ( $.isArray( paginationItems ) && paginationItems.length === totalPages ) {
                        itemInnerTemplate = paginationItems[index];
                    }

                    // Add the template in to the pageTab.
                    pageTab.html( "<a href=\"#page-" + index + "\">" + itemInnerTemplate + "</a>" );

                    // Update the 'currentPage'
                    if ( index === defaultPage ) {
                        SimpleCarousel.currentPage = defaultPage;
                    }

                    pagination.append( pageTab );
                });

                wrap.append( pagination );

                if( this.isPaginationOutSideOfWrap() ) {
                    wrap.css( CSS.VISIBLE );
                }

                // Update the 'pagination' element related elements.
                this.paginationTabs = pagination.find( SELECTOR.CLS_SELECTOR + CLS.PAGINATION_TAB );
                this.paginationLinks = pagination.find( TAG.A );
            }

            return this;
        },

        _removePaginationUI: function () {
            var pagination = this.pagination;

            if ( pagination && pagination[0] ) {
                pagination.remove();
            }

            return this;
        },

        // For some reason, you would remove some empty item
        _removeEmpty: function () {
            var carousel = this.carousel,
                itemSelector = this.get( SETTINGS.ITEM ),
                isRemoveEmpty = this.get( SETTINGS.REMOVE_EMPTY ),
                TXT_EMPTY = TXT.EMPTY;

            if ( isRemoveEmpty ) {
                carousel.find( itemSelector ).each(function ( i, item ) {
                    var src = $( item ).find( TAG.IMG ).first().attr( ATTR.SRC ),
                        innerHTML = $( item ).html();

                    if ( $.trim( src ) === TXT_EMPTY || $.trim( innerHTML ) === TXT_EMPTY ) {
                        item.remove();
                    }
                });
            }

            this.items = carousel.find( this.get( SETTINGS.ITEM ) );

            this.totalPages = this.getTotalPages();

            return this;
        },

        _updateCarouselSize: function () {
            var container = this.container,
                carousel = this.carousel,
                playDirection = this.get( SETTINGS.PLAY_DIRECTION ),
                length = this.items.length;

            if ( playDirection === TXT.H ) {
                carousel.width( this.getItemWidth() * length ).height( container.height() );
            } else {

                if ( playDirection === TXT.V ) {
                    carousel.height( this.getItemHeight() * length ).width( container.width() );
                }
            }

            return this;
        },

        _stylePagination: function () {
            var lastSelectedTab = null,
                activeTab = null,
                CLS_ACTIVE_TAB = CLS.PAGINATION_ACTIVE_TAB;

            if ( this.hasPagination() && this.totalPages >= 2 ) {
                lastSelectedTab = this.lastSelectedTab;
                activeTab = this.paginationTabs.eq( this.currentPage );

                if ( lastSelectedTab ) {
                    lastSelectedTab.removeClass( CLS_ACTIVE_TAB );
                }
                activeTab.addClass( CLS_ACTIVE_TAB );

                this.activeTab = activeTab;

                this.lastSelectedTab = this.activeTab;
            }

            return this;
        },

        _switchToDefaultPage: function () {
            var container = this.container,
                defaultPage = this.get( SETTINGS.DEFAULT_PAGE ),
                playDirection = this.get( SETTINGS.PLAY_DIRECTION ),
                scrollValue = 0,
                itemsNumber = 0;

            // Update the 'clipPosition'
            if ( defaultPage > 0 ) {
                itemsNumber = this.getItemsPerStep() * defaultPage;

                if ( this.isCyclePlay() ) {
                    this.moveTheFirstItemsToTheEnd( itemsNumber );

                    this.clipPosition = 0;
                } else {
                    this.clipPosition = defaultPage;
                }
            }

            // Scroll the 'carousel' element to the 'defaultPage'
            if ( playDirection === TXT.V ) {
                scrollValue = this.getItemHeight() * itemsNumber;
                container.scrollTop( scrollValue );
            } else {

                if ( playDirection === TXT.H ) {
                    scrollValue = this.getItemWidth() * itemsNumber;
                    container.scrollLeft( scrollValue );
                }
            }

            this._enableButtons();

            this._timer();

            return this;
        },

        _enableButtons: function () {
            var CLS_HIDE = CLS.HIDE;

            if ( this.totalPages < 2 ) {
                this.prevBtn.addClass( CLS_HIDE );
                this.nextBtn.addClass( CLS_HIDE );
            } else {
                this._enableOrDisablePrevBtnNextBtn();
            }

            return this;
        },

        _enableOrDisablePrevBtnNextBtn: function () {
            var prevBtn = this.prevBtn,
                nextBtn = this.nextBtn,
                CLS_BUTTON_DISABLED = CLS.BUTTON_DISABLED,
                maxPage = this.totalPages - 1,
                clipPosition = this.clipPosition;

            if ( this.isButtonAvailable() ) {

                // Enable the 'prevBtn' or disable the 'prevBtn'
                if ( prevBtn.hasClass( CLS_BUTTON_DISABLED ) && clipPosition > 0 ) {
                    prevBtn.removeClass( CLS_BUTTON_DISABLED );
                } else {

                    if ( clipPosition === 0 ) {
                        prevBtn.addClass( CLS_BUTTON_DISABLED );
                    }
                }

                // Enable the 'nextBtn' or disable the 'nextBtn'
                if ( clipPosition === maxPage ) {
                    nextBtn.addClass( CLS_BUTTON_DISABLED );
                } else {

                    if ( nextBtn.hasClass( CLS_BUTTON_DISABLED ) && clipPosition < maxPage ) {
                        nextBtn.removeClass( CLS_BUTTON_DISABLED );
                    }
                }
            }

            return this;
        },

        _timer: function () {
            var SimpleCarousel = this;

            this.pause();

            this.timer = setTimeout(function () {
                SimpleCarousel.play();
            }, this.get( SETTINGS.PAGE_SWITCH_DELAY ) );

            return this;
        },

        _bindMainUI: function () {
            var SimpleCarousel = this,
                container = this.container,
                prevBtn = this.prevBtn,
                nextBtn = this.nextBtn;

            if ( this.isAutoPlay() ) {

                // Pause 'autoPlay' When mouse over the 'container' element,
                // and 'autoPlay' again when mouse out of the 'container' element,
                container.hover(function ( evt ) {
                    SimpleCarousel.pause();

                    evt.preventDefault();
                    evt.stopPropagation();
                }, function ( evt ) {
                    SimpleCarousel._timer();

                    evt.preventDefault();
                    evt.stopPropagation();
                });

                if ( prevBtn[0] && !this.isPrevBtnAboveContainer() ) {
                    prevBtn.hover(function ( evt ) {
                        SimpleCarousel.stop();

                        evt.preventDefault();
                        evt.stopPropagation();
                    }, function ( evt ) {
                        SimpleCarousel.set( SETTINGS.AUTO_PLAY, true );

                        SimpleCarousel._timer();

                        evt.preventDefault();
                        evt.stopPropagation();
                    });
                }

                if ( nextBtn[0] && !this.isNextBtnAboveContainer() ) {
                    nextBtn.hover(function ( evt ) {
                        SimpleCarousel.stop();

                        evt.preventDefault();
                        evt.stopPropagation();
                    }, function ( evt ) {
                        SimpleCarousel.set( SETTINGS.AUTO_PLAY, true );

                        SimpleCarousel._timer();

                        evt.preventDefault();
                        evt.stopPropagation();
                    });
                }
            }

            // bind 'beforeSwitch' event on the 'container' element
            container.on( EVENTS.BEFORE_SWITCH, function () {
                SimpleCarousel._onBeforeSwitch();
            });

            // bind 'afterSwitched' event on the 'container' element
            container.on( EVENTS.AFTER_SWITCHED, function () {
                SimpleCarousel._onAfterSwitched();
            });

            // bind 'itemsChange' event on the 'carousel' element
            this.carousel.on( EVENTS.ITEMS_CHANGE, function () {
                SimpleCarousel.reload();
            });

            if ( prevBtn[0] ) {
                prevBtn.click(function ( evt ) {
                    SimpleCarousel.prev();

                    evt.preventDefault();
                    evt.stopPropagation();
                });
            }

            if ( nextBtn[0] ) {
                nextBtn.click(function ( evt ) {
                    SimpleCarousel.next();

                    evt.preventDefault();
                    evt.stopPropagation();
                });
            }

            return this;
        },

        _bindPaginationUI: function () {
            var SimpleCarousel = this;

            if ( this.hasPagination() && this.totalPages > 1 ) {

                if( this.paginationTabs ) {
                    this.paginationTabs.each(function ( i, pageTab ) {
                        $( pageTab ).click(function ( evt ) {

                            if ( !$( this ).hasClass( CLS.PAGINATION_ACTIVE_TAB ) ) {
                                SimpleCarousel.pageTo( i );
                            }

                            evt.preventDefault();
                            evt.stopPropagation();
                        });
                    });
                }

                if( this.paginationLinks ) {
                    this.paginationLinks.each(function ( i, pageLink ) {
                        $( pageLink ).focus(function ( evt ) {

                            if ( !$( this ).parent().hasClass( CLS.PAGINATION_ACTIVE_TAB ) ) {
                                SimpleCarousel.pageTo( i );
                            }

                            evt.preventDefault();
                            evt.stopPropagation();
                        });
                    });
                }
            }

            return this;
        },

        _unbindMainUI: function () {
            var prevBtn = this.prevBtn,
                nextBtn = this.nextBtn;

            this.container.unbind();

            this.carousel.unbind();

            if ( prevBtn[0] ) {
                prevBtn.unbind();
            }

            if ( nextBtn[0] ) {
                nextBtn.unbind();
            }

            return this;
        },

        _unbindPaginationUI: function () {

            if ( this.hasPagination() && this.totalPages > 1 ) {

                if( this.paginationTabs ) {
                    this.paginationTabs.each(function ( i, pageTab ) {
                        $( pageTab ).unbind();
                    });
                }

                if( this.paginationLinks ) {
                    this.paginationLinks.each(function ( i, pageLink ) {
                        $( pageLink ).unbind();
                    });
                }
            }

            return this;
        },

        _bindSettings: function () {
            var SimpleCarousel = this;

            this.settings.on( EVENTS.ATTRIBUTES_CHANGE, function(){
                SimpleCarousel.reload();
            });

            return this;
        },

        _unbindSettings: function () {
            this.settings.unbind();

            return this;
        },

        _bind: function () {
            this._bindMainUI()._bindPaginationUI()._bindSettings();

            return this;
        },

        _unbind: function () {
            this._unbindMainUI()._unbindPaginationUI()._unbindSettings();

            return this;
        },

        _onTabClick: function ( tabIndex ) {
            var isCyclePlay = this.isCyclePlay(),
                currentPage = this.currentPage;

            if ( this.hasPagination() && !this.scrolling ) {
                this.pause();

                if ( isCyclePlay ) {
                    this.currentPage = tabIndex;

                    if ( currentPage < tabIndex ) {
                        this.clipPosition = tabIndex - currentPage;

                        this.playForward();
                    } else {

                        if ( currentPage > tabIndex ) {
                            this.clipPosition = currentPage - tabIndex;

                            this.playBack();
                        }
                    }
                } else {

                    if ( !isCyclePlay ) {
                        this.clipPosition = tabIndex;

                        if ( currentPage < tabIndex ) {
                            this.currentPage = tabIndex;

                            this.playForward();
                        } else {

                            if ( currentPage > tabIndex ) {
                                this.currentPage = tabIndex;

                                this.playBack();
                            }
                        }
                    }
                }
            }

            return this;
        },

        _onBeforeSwitch: function () {
            var beforeSwitch = this.get( SETTINGS.BEFORE_SWITCH );

            if ( $.isFunction( beforeSwitch ) ) {
                beforeSwitch();
            } else {

                if ( $.isArray( beforeSwitch ) ) {
                    beforeSwitch = beforeSwitch[this.currentPage];

                    if ( $.isFunction( beforeSwitch ) ) {
                        beforeSwitch();
                    }
                }
            }

            return this;
        },

        _onAfterSwitched: function () {
            var afterSwitched = this.get( SETTINGS.AFTER_SWITCHED );

            this.scrolling = false;

            this._stylePagination();
            this._enableButtons();

            if ( $.isFunction( afterSwitched ) ) {
                afterSwitched();
            } else {

                if ( $.isArray( afterSwitched ) ) {
                    afterSwitched = afterSwitched[this.currentPage];

                    if ( $.isFunction( afterSwitched ) ) {
                        afterSwitched();
                    }
                }
            }

            this._timer();
        },

        // -- Public prototype Methods -------------------------------------------------------

        // Reload the SimpleCarousel
        reload: function ( config ) {

            if ( $.isPlainObject( config ) ) {
                this.set( config, true );
            }

            if ( !this.isAsync() ) {
                this._reload();
            } else {
                this._ajaxReload();
            }

            return this;
        },

        // Create a unique id
        guid: function () {
            this.uuid += 1;

            return this.uuid;
        },

        // Append a new item to the 'carousel' element
        add: function ( config, dynamic ) {
            var SimpleCarousel = this,
                ajax = this.get( SETTINGS.AJAX ),
                template = TXT.EMPTY,
                item = null;

            if ( dynamic ) {
                $.extend( ajax, {
                    add: function () {
                        SimpleCarousel.add( config );
                    }
                });
            } else {

                if ( config.itemJSON ) {
                    template = config.itemInnerHTML || TEMPLATE.ITEM_INNER_HTML;
                    item = $( TEMPLATE.EMPTY_ITEM ).html( toHTMLTemplate( config.itemJSON, template ) );

                    this.carousel.append( item ).trigger( EVENTS.ITEMS_CHANGE );
                }
            }

            return this;
        },

        // Remove a item from the 'carousel' element
        remove: function ( item, dynamic ) {
            var SimpleCarousel = this,
                ajax = this.get( SETTINGS.AJAX );

            if ( dynamic ) {
                $.extend( ajax, {
                    remove: function () {
                        SimpleCarousel.remove( item );
                    }
                });
            } else {

                if ( item.nodeType === 1 && item.tagName ) {
                    $( item ).remove();
                } else {

                    if ( typeof item === TXT.NUMBER ) {
                        this.items.eq( item ).remove();
                    } else {

                        if ( typeof item === TXT.STRING ) {
                            $( item ).remove();
                        }
                    }
                }

                this.carousel.trigger( EVENTS.ITEMS_CHANGE );
            }

            return this;
        },

        moveTheFirstItemsToTheEnd: function ( itemsNumber ) {
            var carousel = this.carousel, i = 0;

            if ( itemsNumber > 0 ) {

                for ( ; i < itemsNumber; i += 1 ) {
                    carousel.append( carousel.find( this.get( SETTINGS.ITEM ) ).first() );
                }
            }

            return this;
        },

        moveTheLastItemsToTheBeginning: function ( itemsNumber ) {
            var carousel = this.carousel,
                itemSelector = this.get( SETTINGS.ITEM ),
                i = 0;

            if ( itemsNumber > 0 ) {

                for ( ; i < itemsNumber; i += 1 ) {
                    carousel.find( itemSelector ).last().insertBefore( carousel.find( itemSelector ).first() );
                }
            }

            return this;
        },

        prev: function () {
            var totalPages = this.totalPages,
                clipPosition = this.clipPosition,
                currentPage = this.currentPage;

            if ( !this.scrolling && !this.prevBtn.hasClass( CLS.BUTTON_DISABLED ) ) {
                this.pause();

                if ( this.isCyclePlay() ) {
                    clipPosition = 1;
                } else {
                    clipPosition -= 1;

                    if ( clipPosition < 0 ) {
                        clipPosition = totalPages - 1;
                    }
                }

                this.clipPosition = clipPosition;

                if ( this.hasPagination() ) {
                    currentPage -= 1;

                    if ( currentPage < 0 ) {
                        currentPage = totalPages - 1;
                    }

                    this.currentPage = currentPage;
                }

                this.playBack();
            }

            return this;
        },

        next: function () {
            var totalPages = this.totalPages,
                clipPosition = this.clipPosition,
                currentPage = this.currentPage;

            if ( !this.scrolling && !this.nextBtn.hasClass( CLS.BUTTON_DISABLED ) ) {
                this.pause();

                if ( this.isCyclePlay() ) {
                    clipPosition = 1;
                } else {
                    clipPosition += 1;

                    if ( clipPosition === totalPages ) {
                        clipPosition = 0;
                    }
                }

                this.clipPosition = clipPosition;

                currentPage += 1;

                if ( currentPage === totalPages ) {
                    currentPage = 0;
                }

                this.currentPage = currentPage;

                this.playForward();
            }

            return this;
        },

        playForward: function () {
            var SimpleCarousel = this,
                container = this.container,
                playDirection = this.get( SETTINGS.PLAY_DIRECTION ),
                animateDuration = this.get( SETTINGS.ANIMATE_DURATION ),
                easing = this.get( SETTINGS.EASING ),
                isCyclePlay = this.isCyclePlay(),
                itemsNumber = this.getItemsPerStep() * this.clipPosition,
                scrollValue = 0;

            if ( !this.scrolling ) {
                this.scrolling = true;
                container.trigger( EVENTS.BEFORE_SWITCH );

                if ( playDirection === TXT.H ) {
                    scrollValue = this.getItemWidth() * itemsNumber;

                    if ( isCyclePlay ) {
                        container.animate({
                            "scrollLeft": scrollValue
                        }, animateDuration, easing, function () {
                            SimpleCarousel.moveTheFirstItemsToTheEnd( itemsNumber );

                            SimpleCarousel.clipPosition = 0;

                            container.scrollLeft( 0 ).trigger( EVENTS.AFTER_SWITCHED );
                        });
                    } else {

                        if ( !isCyclePlay ) {
                            container.animate({
                                "scrollLeft": scrollValue
                            }, animateDuration, easing, function () {
                                container.trigger( EVENTS.AFTER_SWITCHED );
                            });
                        }
                    }
                } else {

                    if ( playDirection === TXT.V ) {
                        scrollValue = this.getItemHeight() * itemsNumber;

                        if ( isCyclePlay ) {
                            container.animate({
                                "scrollTop": scrollValue
                            }, animateDuration, easing, function () {
                                SimpleCarousel.moveTheFirstItemsToTheEnd( itemsNumber );

                                SimpleCarousel.clipPosition = 0;

                                container.scrollTop( 0 ).trigger( EVENTS.AFTER_SWITCHED );
                            });
                        } else {

                            if ( !isCyclePlay ) {
                                container.animate({
                                    "scrollTop": scrollValue
                                }, animateDuration, easing, function () {
                                    container.trigger( EVENTS.AFTER_SWITCHED );
                                });
                            }
                        }
                    }
                }
            }

            return this;
        },

        playBack: function () {
            var container = this.container,
                playDirection = this.get( SETTINGS.PLAY_DIRECTION ),
                animateDuration = this.get( SETTINGS.ANIMATE_DURATION ),
                easing = this.get( SETTINGS.EASING ),
                isCyclePlay = this.isCyclePlay(),
                itemsNumber = this.getItemsPerStep() * this.clipPosition,
                scrollValue = 0;

            if ( !this.scrolling ) {
                this.scrolling = true;

                container.trigger( EVENTS.BEFORE_SWITCH );

                if ( playDirection === TXT.H ) {
                    scrollValue = this.getItemWidth() * itemsNumber;

                    if ( isCyclePlay ) {
                        this.moveTheLastItemsToTheBeginning( itemsNumber );

                        container.scrollLeft( scrollValue ).animate({
                            "scrollLeft": 0
                        }, animateDuration, easing, function () {

                            // 触发 container 节点的 afterSwitched 自定义事件
                            container.trigger( EVENTS.AFTER_SWITCHED );
                        });
                    } else {

                        if ( !isCyclePlay ) {

                            // 滚动位置：scrollValue
                            container.animate({
                                "scrollLeft": scrollValue
                            }, animateDuration, easing, function () {
                                container.trigger( EVENTS.AFTER_SWITCHED );
                            });
                        }
                    }
                } else {

                    if ( playDirection === TXT.V ) {
                        scrollValue = this.getItemHeight() * itemsNumber;

                        if ( isCyclePlay ) {
                            this.moveTheLastItemsToTheBeginning( itemsNumber );

                            container.scrollTop( scrollValue ).animate({
                                "scrollTop": 0
                            }, animateDuration, easing, function () {
                                container.trigger( EVENTS.AFTER_SWITCHED );
                            });
                        } else {

                            if ( !isCyclePlay ) {
                                container.animate({
                                    "scrollTop": scrollValue
                                }, animateDuration, easing, function () {
                                    container.trigger( EVENTS.AFTER_SWITCHED );
                                });
                            }
                        }
                    }
                }
            }

            return this;
        },

        play: function () {
            var pageDirection = this.get( SETTINGS.PAGE_DIRECTION );

            if ( this.isAutoPlay() && this.totalPages > 2 ) {

                if ( pageDirection === TXT.FORWARD ) {
                    this.next();
                } else {

                    if ( pageDirection === TXT.BACK ) {
                       this.prev();
                    }
                }
            }

            return this;
        },

        pause: function () {

            if ( this.timer ) {
                clearTimeout( this.timer );
            }

            return this;
        },

        stop: function () {

            if ( this.isAutoPlay() ) {
                this.pause();

                this.set( SETTINGS.AUTO_PLAY, false, {
                    silent: true
                });
            }

            return this;
        },

        pageTo: function ( page ) {
            this._onTabClick( page );

            return this;
        },

        isAutoPlay: function () {
            return this.get( SETTINGS.AUTO_PLAY );
        },

        isCyclePlay: function () {
            return this.get( SETTINGS.CYCLE_PLAY );
        },

        hasPagination: function () {
            return this.get( SETTINGS.PAGINATED );
        },

        isAsync: function () {
            var url = this.get( SETTINGS.AJAX ).url;

            return $.trim( url );
        },

        isButtonAvailable: function () {
            return this.get( SETTINGS.BUTTON_AVAILABLE );
        },

        isPrevBtnAboveContainer: function () {
            var isAbove = false,
                container = this.container,
                containerOffset = 0,
                containerRight = 0,
                containerBottom = 0,
                prevBtn = this.prevBtn,
                prevBtnOffset = 0,
                prevBtnRight = 0,
                prevBtnBottom = 0;

            if ( prevBtn[0] ) {
                containerOffset = container.offset();
                containerRight = containerOffset.left + container.width();
                containerBottom = containerOffset.top + container.height();

                prevBtnOffset = prevBtn.offset();
                prevBtnRight = prevBtnOffset.left + prevBtn.width();
                prevBtnBottom = prevBtnOffset.top + prevBtn.height();

                if ( prevBtnRight < containerRight && prevBtnBottom < containerBottom ) {
                    isAbove = true;
                }
            }

            return isAbove;
        },

        isNextBtnAboveContainer: function () {
            var isAbove = false,
                container = this.container,
                containerOffset = 0,
                containerRight = 0,
                containerBottom = 0,
                nextBtn = this.nextBtn,
                nextBtnOffset = 0,
                nextBtnRight = 0,
                nextBtnBottom = 0;

            if ( nextBtn[0] ) {
                containerOffset = container.offset();
                containerRight = containerOffset.left + container.width();
                containerBottom = containerOffset.top + container.height();

                nextBtnOffset = nextBtn.offset();
                nextBtnRight = nextBtnOffset.left + nextBtn.width();
                nextBtnBottom = nextBtnOffset.top + nextBtn.height();

                if ( nextBtnRight < containerRight && nextBtnBottom < containerBottom ) {
                    isAbove = true;
                }
            }

            return isAbove;
        },

        isPaginationOutSideOfWrap: function() {
            var isOutSide = false,
                wrap = this.wrap,
                wrapTop = wrap.offset().top,
                wrapRight = 0,
                wrapBottom = 0,
                wrapLeft = wrap.offset().left,
                pagination = this.pagination,
                paginationTop = pagination.offset().top,
                paginationRight = 0,
                paginationBottom = 0,
                paginationLeft = pagination.offset().left;

            if ( pagination[0] ) {
                wrapRight = wrapLeft + wrap.width();
                wrapBottom = wrapTop + wrap.height();

                paginationRight = paginationLeft + pagination.width();
                paginationBottom = paginationTop + pagination.height();

                if (paginationBottom < wrapTop || paginationRight > wrapRight || paginationBottom > wrapBottom || paginationLeft < wrapLeft) {
                    isOutSide = true;
                }

            }

            return isOutSide;
        },

        getItemWidth: function () {
            var width = 0, items = this.items;

            if ( items.length > 0 ) {
                width = items.first().width();
            }

            return width;
        },

        getItemHeight: function () {
            var height = 0, items = this.items;

            if ( items.length > 0 ) {
                height = items.first().height();
            }

            return height;
        },

        getItemsPerPage: function () {
            var container = this.container,
                itemsPerPage = 0,
                playDirection = this.get( SETTINGS.PLAY_DIRECTION );

            if ( playDirection === TXT.H ) {
                itemsPerPage = container.width() / this.getItemWidth();
            } else {

                if ( playDirection === TXT.V ) {
                    itemsPerPage = container.height() / this.getItemHeight();
                }
            }

            return itemsPerPage;
        },

        getItemsPerStep: function () {
            var itemsPerPage = this.getItemsPerPage(),
                itemsPreStep = this.get( SETTINGS.ITEMS_PER_STEP );

            if ( !itemsPreStep || itemsPreStep < 0 || itemsPreStep > itemsPerPage ) {
                itemsPreStep = itemsPerPage;
            }

            return itemsPreStep;
        },

        getTotalPages: function () {
            var totalPages = 0,
                itemsPerStep = this.getItemsPerStep(),
                length = this.items.length;

            if ( length < itemsPerStep ) {
                totalPages = 1;
            } else {
                totalPages = 1 + Math.ceil( (length - itemsPerStep) / itemsPerStep );
            }

            return totalPages;
        },

        // Detective whether the 'this.settings.attributes' object has the 'key' property
        has: function ( attr ) {
            return this.get( attr ) !== undefined;
        },

        // Get value or property of the 'this.settings.attributes' object
        get: function ( attr ) {
            return this.settings[0].attributes[attr];
        },

        // Set value(s) to the 'this.settings.attributes' object
        set: function ( attr, value, options ) {
            var silent,
                SimpleCarousel = this,
                settings = this.settings;

            // 'attr' is required
            if ( attr ) {

                if ( typeof attr === TXT.STRING ) {
                    options || (options = {});

                    this.save( attr, value );
                } else {

                    if ( $.isPlainObject( attr ) ) {
                        options = value || {};

                        $.each( attr, function ( key, val ) {

                            // Update each properties
                            SimpleCarousel.save( key, val );
                        });
                    }
                }

                silent = options.silent;

                // Only fires 'attributesChange' event, if has 'changed' attribute(s)
                // and the 'attr' is not a 'silent' attribute.
                if ( !this.isAsync() && !$.isEmptyObject( settings[0].changed ) && !silent ) {
                    settings.trigger( EVENTS.ATTRIBUTES_CHANGE );
                }
            }

            return this;
        },

        save: function( attr, value ) {
            var settings = this.settings[0];

            if ( this.has( attr ) ) {

                // clean the changed settings
                settings.changed = {};

                // Check whether the 'value' is a new record.
                // And if so, then save it to the 'changed'.
                if ( this.get( attr ) !== value ) {
                    settings.changed[attr] = value;
                }

                settings.attributes[attr] = value;
            }

            return this;
        }
    };


    // Default settings
    $.SimpleCarousel.defaults = {
        wrap: SELECTOR.WRAP,
        container: SELECTOR.CONTAINER,
        carousel: SELECTOR.CAROUSEL,
        item: TAG.LI,
        prevBtn: SELECTOR.PREV_BTN,
        nextBtn: SELECTOR.NEXT_BTN,
        playDirection: DEFAULT_VAL.PLAY_DIRECTION,
        autoPlay: true,
        pageSwitchDelay: DEFAULT_VAL.PAGE_SWITCH_DELAY,
        animateDuration: DEFAULT_VAL.ANIMATE_DURATION,
        easing: DEFAULT_VAL.EASING,
        pageDirection: DEFAULT_VAL.PAGE_DIRECTION,
        cyclePlay: false,
        buttonAvailable: false,
        defaultPage: 0,
        itemsPerStep: 0,
        beforeSwitch: null,
        afterSwitched: null,
        paginated: false,
        removeEmpty: false,
        ajax: {
            url: TXT.EMPTY,
            itemInnerHTML: TEMPLATE.ITEM_INNER_HTML,
            beforeSend: null,
            complete: null,
            error: null
        }
    };


    // Sample Carousel Plugin
    $.fn.extend({
        simpleCarousel: function ( config ) {
            var SimpleCarousel, settings = {};

            if ( $.isPlainObject( config ) ) {
                settings = config;

                if ( !settings.wrap ) {
                    settings.wrap = this[0];
                }

                SimpleCarousel = new $.SimpleCarousel( settings );
                SimpleCarousel.initializer();
            }

            return SimpleCarousel;
        }
    });
})(jQuery);