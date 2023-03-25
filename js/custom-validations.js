function trim(str){				
return str.replace(/^\s*|\s*$/g,'');
}	


//////////////////  POP UP VALIDATION //////////////////////


function PopUpFreeRegdValidation(){
	
	

var ev = document.getElementById("join_for_popup");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please choose the option you are making for !");
			document.getElementById("join_for_popup").focus();
			return false;
}
		


var mobno=trim(document.getElementById('join_mobile_popup').value);
if(trim(document.getElementById('join_mobile_popup').value)==""){
	alert("Enter your mobile no.!");
	document.getElementById('join_mobile_popup').focus();
	return false;
}
if(isNaN(document.getElementById('join_mobile_popup').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('join_mobile_popup').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('join_mobile_popup').focus();
	return false;
}


var email=trim(document.getElementById('join_email_popup').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('join_email_popup').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('join_email_popup').focus();
return false;
}

		
  
if(trim(document.getElementById('join_password_popup').value)==""){
	alert("Enter your password !");
	document.getElementById('join_password_popup').focus();
	return false;
 }

}