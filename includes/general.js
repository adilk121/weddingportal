checked=false;
function checkall(frm1){
	var aa= frm1;
	if(checked == false){
		checked = true
	}
	else{
		checked = false
	}
	for (var i =0; i < aa.elements.length; i++){
		aa.elements[i].checked = checked;
	}
}



function select_chk(){
			var chks = document.getElementsByName('arr_ids[]');
			var hasChecked = false;
			for (var i = 0; i < chks.length; i++){
			if (chks[i].checked){
				hasChecked = true;
				break;
				}
			}
			if (hasChecked == false){
			alert("Please Select At Least One.");
			return false;
			}
}





function PopupWindowCenter(URL, title,w,h){
var left = (screen.width/2)-(w/2);
var top = '20px';
var newWin = window.open (URL, title, 'toolbar=no, location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
}
