<?php //header ?><?php //header?>
<div class="wp-styd1">
  <p id="myBtn2"><i class="fa fa-comment-o"></i></p>
</div>
<style>
	.wp-styd1{bottom: 29px !important;}
	#myBtn2{width: 50px;
    height: 50px;
    background-color: #b10a0a;
    border-radius: 100%;
    text-align: center;
    padding-top: 6px;
}
	#myBtn2 i{text-align:center !important; padding-top:2px !important; font-size:30px !important; color:#fff !important;}

.modaldolly {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index:999; /* Sit on top */
  padding-top:20px; /* Location of the box */
  left: 0;
  top: 0;
  overflow:hidden;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* modaldolly Content */
.modaldolly-content2 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width:30%; top:10px;
}

/* The closechat2 Button */
.closechat2 {
  color: #aaaaaa;
  /****float: right;***/
  font-size: 28px;
  font-weight: bold;
  position: relative;
    left: 358px;
    top: -5px;
}

.closechat2:hover,
.closechat2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;

}
</style>


<?php //header?>
<!-- The modaldolly -->
<div id="mymodaldollychat1" class="modaldolly" style="overflow:hidden; z-index:9999;">
  <div class="modaldolly-content2">
      <span class="closechat2">&times;</span>
    <p><iframe src="<?=$compDATA['admin_live_chat_code']?>"   height="500" width="100%" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></p>
  </div>

</div>

<script>
// Get the modaldolly
var modaldolly = document.getElementById("mymodaldollychat1");

// Get the button that opens the modaldolly
var btn = document.getElementById("myBtn2");

// Get the <span> element that closechat2s the modaldolly
var span = document.getElementsByClassName("closechat2")[0];

// When the user clicks the button, open the modaldolly 
btn.onclick = function() {
  modaldolly.style.display = "block";
}

// When the user clicks on <span> (x), closechat2 the modaldolly
span.onclick = function() {
  modaldolly.style.display = "none";
}

// When the user clicks anywhere outside of the modaldolly, closechat2 it
window.onclick = function(event) {
  if (event.target == modaldolly) {
    modaldolly.style.display = "none";
  }
}
</script>



