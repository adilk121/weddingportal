function getXMLHTTP() {
var xmlhttp=false;	
try{
xmlhttp=new XMLHttpRequest();
}
catch(e){
try{	
xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
}
catch(e){
try{
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e1){
xmlhttp=false;
}
}
}
return xmlhttp;
}

//////////////////////////// CHECKING MEMBER EMAIL /////////////////////
function check_member_email(){

var join_email=document.getElementById('join_email').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_email="+join_email+"&regIDadmin="+regIDadmin;	
	
//alert(param);
var req=new getXMLHTTP();
var str="check-member-email.php?"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('info-area').innerHTML=req.responseText;

}


} 
}
}
req.open("GET",str,true);
req.send(null);
}
//////////////////////////// REGISTER START ////////////////////////////	

function update_regStart(act){

var join_email=document.getElementById('join_email').value;
var join_pass=document.getElementById('join_pass').value;
var join_for=document.getElementById('join_for').value;
var join_mobile=document.getElementById('join_mobile').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_email="+join_email+"&join_pass="+join_pass+"&join_for="+join_for+"&join_mobile="+join_mobile+"&action="+act+"&regIDadmin="+regIDadmin;	
	
//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=reg_start&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){


//alert(req.responseText);

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Login Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);
if(regIDadmin==""){
window.location="add-user.php?editID="+req.responseText;
}

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#location-spot").offset().top-50
}, 1000);
	
}


	
//////////////////////////// REGISTER END ////////////////////////////		
function update_basic_details(){

var join_name=document.getElementById('join_name').value;
var join_gender=document.getElementById('join_gender').value;
var join_dob=document.getElementById('join_dob').value;
var join_age=document.getElementById('join_age').value;
var join_height=document.getElementById('join_height').value;
var join_marital_status=document.getElementById('join_marital_status').value;
var join_mother_tongue=document.getElementById('join_mother_tongue').value;
var join_is_any_disability=document.getElementById('join_is_any_disability').value;
var join_aadhar_number=document.getElementById('join_aadhar_number').value;
var join_profile_manage_by=document.getElementById('join_profile_manage_by').value;
var join_blood_group=document.getElementById('join_blood_group').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_name="+join_name+"&join_gender="+join_gender+"&join_dob="+join_dob+"&join_age="+join_age+"&join_height="+join_height+"&join_marital_status="+join_marital_status+"&join_mother_tongue="+join_mother_tongue+"&join_is_any_disability="+join_is_any_disability+"&join_aadhar_number="+join_aadhar_number+"&join_profile_manage_by="+join_profile_manage_by+"&join_blood_group="+join_blood_group+"&regIDadmin="+regIDadmin;	
	
//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=basic&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Basic Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#location-spot").offset().top-50
}, 1000);
	
}



//////////////////////  LOCATION DETAIL ///////////////////////

function update_location_details(){

var join_country=document.getElementById('join_country').value;
var join_state=document.getElementById('join_state').value;
var join_city=document.getElementById('join_city').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_country="+join_country+"&join_state="+join_state+"&join_city="+join_city+"&regIDadmin="+regIDadmin;	
	
//alert(param);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=location&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Location Detail';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#family-spot").offset().top-50
}, 1000);


}


//////////////////////  FAMILY DETAIL ///////////////////////

function update_family_details(){

var join_father_status=document.getElementById('join_father_status').value;
var join_mother_status=document.getElementById('join_mother_status').value;
var join_siblings=document.getElementById('join_siblings').value;
var join_siblings_marital_status=document.getElementById('join_siblings_marital_status').value;
var join_family_status=document.getElementById('join_family_status').value;
var join_family_type=document.getElementById('join_family_type').value;
var join_family_values=document.getElementById('join_family_values').value;
var join_annual_income=document.getElementById('join_annual_income').value;
var join_family_living_in=document.getElementById('join_family_living_in').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_father_status="+join_father_status+"&join_mother_status="+join_mother_status+"&join_siblings="+join_siblings+"&join_siblings_marital_status="+join_siblings_marital_status+"&join_family_status="+join_family_status+"&join_family_type="+join_family_type+"&join_family_values="+join_family_values+"&join_annual_income="+join_annual_income+"&join_family_living_in="+join_family_living_in+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=family&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Family Detail';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#edu-spot").offset().top-50
}, 1000);

}


//////////////////////  EDUCATION & CAREER DETAIL ///////////////////////

function update_edu_details(){

var join_highest_edu=document.getElementById('join_highest_edu').value;
var join_edu_detail=document.getElementById('join_edu_detail').value;
var join_occupation=document.getElementById('join_occupation').value;
var join_member_annual_income=document.getElementById('join_member_annual_income').value;
var join_organization_name=document.getElementById('join_organization_name').value;
var join_working_location=document.getElementById('join_working_location').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_highest_edu="+join_highest_edu+"&join_edu_detail="+join_edu_detail+"&join_occupation="+join_occupation+"&join_member_annual_income="+join_member_annual_income+"&join_organization_name="+join_organization_name+"&join_working_location="+join_working_location+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=edu&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Education & Career';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#lifestyle-spot").offset().top-50
}, 1000);


}



//////////////////////  Religion DETAIL ///////////////////////

function update_religious_details(){

var join_religion=document.getElementById('join_religion').value;
var join_cast=document.getElementById('join_cast').value;
var join_sub_cast=document.getElementById('join_sub_cast').value;
var join_gotra=document.getElementById('join_gotra').value;
var join_namaz=document.getElementById('join_namaz').value;
var join_zakaat=document.getElementById('join_zakaat').value;
var join_fasting=document.getElementById('join_fasting').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_religion="+join_religion+"&join_cast="+join_cast+"&join_sub_cast="+join_sub_cast+"&join_gotra="+join_gotra+"&join_namaz="+join_namaz+"&join_zakaat="+join_zakaat+"&join_fasting="+join_fasting+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=religion&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Religious Background';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#lifestyle-spot").offset().top-50
}, 1000);



}





//////////////////////  Life Style DETAIL ///////////////////////

function update_lifestyle_details(){

var join_appearance=document.getElementById('join_appearance').value;
var join_living_status=document.getElementById('join_living_status').value;
var join_physical_status=document.getElementById('join_physical_status').value;
var join_eating_habits=document.getElementById('join_eating_habits').value;
var join_smoking_habits=document.getElementById('join_smoking_habits').value;
var join_drinking_habits=document.getElementById('join_drinking_habits').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_appearance="+join_appearance+"&join_living_status="+join_living_status+"&join_physical_status="+join_physical_status+"&join_eating_habits="+join_eating_habits+"&join_smoking_habits="+join_smoking_habits+"&join_drinking_habits="+join_drinking_habits+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=lifestyle&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Lifestyle And Habits';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#like-spot").offset().top-50
}, 1000);



}

//////////////////////  LIKE DETAIL ///////////////////////

function update_likes_details(){

var join_hobbies=document.getElementById('join_hobbies').value;
var join_interests=document.getElementById('join_interests').value;
var join_favourite_music=document.getElementById('join_favourite_music').value;
var join_favourite_book=document.getElementById('join_favourite_book').value;
var join_dress_style=document.getElementById('join_dress_style').value;
var join_tv_shows=document.getElementById('join_tv_shows').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_hobbies="+join_hobbies+"&join_interests="+join_interests+"&join_favourite_music="+join_favourite_music+"&join_favourite_book="+join_favourite_book+"&join_dress_style="+join_dress_style+"&join_tv_shows="+join_tv_shows+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=likes&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Likes & Interests';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#contact-spot").offset().top-50
}, 1000);



}


//////////////////////  CONTACT DETAIL ///////////////////////

function update_contact_details(){

var join_member_mobile=document.getElementById('join_member_mobile').value;
var join_member_alt_mobile=document.getElementById('join_member_alt_mobile').value;
var join_member_email=document.getElementById('join_member_email').value;
var join_member_call_time=document.getElementById('join_member_call_time').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_member_mobile="+join_member_mobile+"&join_member_alt_mobile="+join_member_alt_mobile+"&join_member_email="+join_member_email+"&join_member_call_time="+join_member_call_time+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=contact&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Contact Details';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#about-myself-spot").offset().top-50
}, 1000);



}



//////////////////////  MYSELF DETAIL ///////////////////////

function update_myself_details(act){

var join_mem_myself=document.getElementById('join_mem_myself').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_mem_myself="+join_mem_myself+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=myself&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='About Myself';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);


}


} 
}
}
req.open("GET",str,true);
req.send(null);

$('html, body').animate({
        scrollTop: $("#about-myself-spot").offset().top-50
}, 1000);



}



//////////////////////  PHOTO UPDATE ///////////////////////

function update_photo(act){

$("#frmPick").on("submit",function(e){	
    e.preventDefault();

var regIDadmin=document.getElementById('regIDadmin').value;

var query_url="update-regd-details.php?type=photoUpload&regIDadmin="+regIDadmin;	

    $.ajax({
		url: query_url,
		type: "POST",
		data:  new FormData(this),
		contentType: false,
   	    processData:false,		
        success : function(data){	
		

alert(data)		
if(data==1){
			
document.getElementById('area-title').innerHTML='Photo is uploaded successfully.';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();}, 2000);

$('#profile-image-area').fadeOut('slow').load('reload-profile-image.php?regIDadmin='+regIDadmin).fadeIn("slow");

}


		
        }
    });
    return false;
});





}

////////////////////////  UPDATE VERIFIED MOBILE ///////////////////////

function update_verified_mobile(){

var join_member_verified_mobile=document.getElementById('join_member_verified_mobile').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_member_verified_mobile="+join_member_verified_mobile+"&regIDadmin="+regIDadmin;	
	
//alert(param);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=verified_mobile&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){


if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Verified Mobile';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#partner-spot").offset().top-50
}, 1000);
	
}

////////////////////////  UPDATE PARTNER BASIC DETAIL ///////////////////////

function update_preference_basic_details(){

var join_preference_marital_status=document.getElementById('join_preference_marital_status').value;
var join_preference_age=document.getElementById('join_preference_age').value;
var join_preference_height=document.getElementById('join_preference_height').value;
var join_preference_mother_tongue=document.getElementById('join_preference_mother_tongue').value;
var join_preference_religion=document.getElementById('join_preference_religion').value;
var join_preference_gotra=document.getElementById('join_preference_gotra').value;
var join_preference_namaz=document.getElementById('join_preference_namaz').value;
var join_preference_zakaat=document.getElementById('join_preference_zakaat').value;
var join_preference_fasting=document.getElementById('join_preference_fasting').value;
var join_preference_cast=document.getElementById('join_preference_cast').value;
var join_preference_sub_cast=document.getElementById('join_preference_sub_cast').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_preference_marital_status="+join_preference_marital_status+"&join_preference_age="+join_preference_age+"&join_preference_height="+join_preference_height+"&join_preference_mother_tongue="+join_preference_mother_tongue+"&join_preference_religion="+join_preference_religion+"&join_preference_gotra="+join_preference_gotra+"&join_preference_namaz="+join_preference_namaz+"&join_preference_zakaat="+join_preference_zakaat+"&join_preference_fasting="+join_preference_fasting+"&join_preference_cast="+join_preference_cast+"&join_preference_sub_cast="+join_preference_sub_cast+"&regIDadmin="+regIDadmin;	
	
//alert(param);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=preference_basic&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){


if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Basic Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#partner-location-spot").offset().top-50
}, 1000);
	
}


////////////////////  LOCATION UPDATE ///////////////////////////

function update_preference_location_details(){

var join_preference_country_id=document.getElementById('join_preference_country_id').value;
var join_preference_state_id=document.getElementById('join_preference_state_id').value;
var join_preference_city=document.getElementById('join_preference_city').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_preference_country_id="+join_preference_country_id+"&join_preference_state_id="+join_preference_state_id+"&join_preference_city="+join_preference_city+"&regIDadmin="+regIDadmin;

var req=new getXMLHTTP();
var str="update-regd-details.php?type=preference_location&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Location Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#professional-spot").offset().top-50
}, 1000);
	
}



////////////////////  Professional Details UPDATE ///////////////////////////

function update_preference_professional_details(){

var join_preference_highest_edu=document.getElementById('join_preference_highest_edu').value;
var join_preference_occupation=document.getElementById('join_preference_occupation').value;
var join_preference_member_annual_income=document.getElementById('join_preference_member_annual_income').value;
var join_preference_working_location=document.getElementById('join_preference_working_location').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_preference_highest_edu="+join_preference_highest_edu+"&join_preference_occupation="+join_preference_occupation+"&join_preference_member_annual_income="+join_preference_member_annual_income+"&join_preference_working_location="+join_preference_working_location+"&regIDadmin="+regIDadmin;

var req=new getXMLHTTP();
var str="update-regd-details.php?type=preference_professional&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Professional Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#professional-spot").offset().top-50
}, 1000);
	
}


////////////////////  LIFESTYLE Details UPDATE ///////////////////////////

function update_preference_lifestyle_details(){

var join_preference_appearance=document.getElementById('join_preference_appearance').value;
var join_preference_living_status=document.getElementById('join_preference_living_status').value;
var join_preference_physical_status=document.getElementById('join_preference_physical_status').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_preference_appearance="+join_preference_appearance+"&join_preference_living_status="+join_preference_living_status+"&join_preference_physical_status="+join_preference_physical_status+"&regIDadmin="+regIDadmin;

var req=new getXMLHTTP();
var str="update-regd-details.php?type=preference_lifestyle&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Lifestyle Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#habits-spot").offset().top-50
}, 1000);
	
}


////////////////////  HABITS Details UPDATE ///////////////////////////

function update_preference_about_details(){

var join_preference_eating_habits=document.getElementById('join_preference_eating_habits').value;
var join_preference_smoking_habits=document.getElementById('join_preference_smoking_habits').value;
var join_preference_drinking_habits=document.getElementById('join_preference_drinking_habits').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_preference_eating_habits="+join_preference_eating_habits+"&join_preference_smoking_habits="+join_preference_smoking_habits+"&join_preference_drinking_habits="+join_preference_drinking_habits+"&regIDadmin="+regIDadmin;

var req=new getXMLHTTP();
var str="update-regd-details.php?type=preference_habits&"+param;

req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='Habit Detail';	
document.getElementById('for-update-popup').click();
setTimeout(function() { document.getElementById('close-popup').click();}, 1000);

}


} 
}
}
req.open("GET",str,true);
req.send(null);


$('html, body').animate({
        scrollTop: $("#about-spot").offset().top-50
}, 1000);
	
}


//////////////////////  MYSELF DETAIL ///////////////////////

function update_preference_myself_details(){

var join_preference_mem_myself=document.getElementById('join_preference_mem_myself').value;
var regIDadmin=document.getElementById('regIDadmin').value;

var param="join_preference_mem_myself="+join_preference_mem_myself+"&regIDadmin="+regIDadmin;

//alert(myImageId);
var req=new getXMLHTTP();
var str="update-regd-details.php?type=preference_myself&"+param;
//alert(str);
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){

if(req.responseText==0){
alert('Unable to save this detail.');
}else{
	
document.getElementById('area-title').innerHTML='About Partner Detail';	
document.getElementById('for-update-popup').click();
	
setTimeout(function() { document.getElementById('close-popup').click();location.reload();}, 1000);


}


} 
}
}
req.open("GET",str,true);
req.send(null);


}







function byReligion(religion){
	
if(religion=="Hindu"){
$("#hindu").show();	
$("#muslim").hide();	
}else if(religion=="Muslim"){
$("#hindu").hide();	
$("#muslim").show();	
}
	
}

function showstate(stateid){
var req=new getXMLHTTP();
var str="../findstate.php?id="+stateid;
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){
document.getElementById('constate').innerHTML=req.responseText;
  } 
 }
}
req.open("GET",str,true);
req.send(null);
}

function showstateprefer(stateid){
var req=new getXMLHTTP();
var str="../findstate-prefer.php?id="+stateid;
req.onreadystatechange = function() {
if(req.readyState==4){
if(req.status==200){
document.getElementById('constate_preference').innerHTML=req.responseText;
  } 
 }
}
req.open("GET",str,true);
req.send(null);
}



function saveAllDetail(act){

update_basic_details();
update_location_details();
update_family_details();
update_edu_details();
update_religious_details();
update_lifestyle_details();
update_likes_details();
update_contact_details();
update_myself_details(act);

update_preference_basic_details();
update_preference_location_details();
update_preference_professional_details();
update_preference_lifestyle_details();
update_preference_about_details();
update_preference_myself_details();
	
}


	



function trim(str){				
return str.replace(/^\s*|\s*$/g,'');
}	


function FreeRegdValidation(){
	
	

 var ev = document.getElementById("join_for");
        var optionSelIndex = ev.options[ev.selectedIndex].value;
        var optionSelectedText = ev.options[ev.selectedIndex].text;
        if (optionSelIndex == 0) {
            alert("Please choose the option you are making for !");
			document.getElementById("join_for").focus();
			return false;
        }
		


var mobno=trim(document.getElementById('join_mobile').value);
if(trim(document.getElementById('join_mobile').value)==""){
	alert("Enter your mobile no.!");
	document.getElementById('join_mobile').focus();
	return false;
}
if(isNaN(document.getElementById('join_mobile').value)){
	alert("Mobile no. should be no.!");
	document.getElementById('join_mobile').focus();
	return false;
}
if(mobno.length < 10){
    alert("Mobile no. should be 10 digit long !");
	document.getElementById('join_mobile').focus();
	return false;
}


var email=trim(document.getElementById('join_email').value);
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email=='')
  {
	  alert('Please Enter Email Id');
	  document.getElementById('join_email').focus();
	  return false;
  }else if(!email.match(mailformat)){
alert("You have entered an invalid email address!");
document.getElementById('join_email').focus();
return false;
}

		
  
if(trim(document.getElementById('join_pass').value)==""){
	alert("Enter your password !");
	document.getElementById('join_pass').focus();
	return false;
 }

}