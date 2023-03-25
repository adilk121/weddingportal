<div class="col-md-12">
<h4 class="ft-rs">FILTER RESULTS</h4>
<div>
<div id="collapse-menu" class="collapse-container brdr-lft">
      <h3>Active<span class="arrow-r"></span></h3>
      <div style="padding:0px;">
          <p><img src="images/loader.gif" class="lod-img"><a style="cursor:default" href="#" class="mkonl" >Online Now (<?=db_scalar("select COUNT(reg_id) from tbl_registration where reg_is_login='Yes'")?>)</a></p>
      </div>
      
<h3>Suitable Profile <span class="arrow-r"></span></h3>
<div class="pro-typ">
<p>
<a <?php if(!empty($_SESSION['userLoginId'])){?> href="my-matches.php" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> All</a>
</p>
<p><a <?php if(!empty($_SESSION['userLoginId'])){?> href="match-profile-listing.php?match=suitable-match" <?php }else{?> href="Javascript:void(0)" <?php }?> ><i class="fa fa-circle"></i> Suitable Matches</a></p>
</div>
      
      <h3> Profile <span class="arrow-r"></span></h3>
      <div class="pro-typ">
          <p><a <?php if(!empty($_SESSION['userLoginId'])){?> href="my-matches.php" <?php }else{?> href="Javascript:void(0)" <?php }?> ><i class="fa fa-circle"></i> All</a></p>
          <p><a href="#"><i class="fa fa-circle"></i> With Horoscope</a></p>
      </div>
   
      
<!--      <h3>Active Members <span class="arrow-r"></span></h3>
      <div>
          <div class="col-md-10 mp03">
           <select class="age-sel">
           <option>Within 1 Day</option>
              <option>Within 1 Week</option>
                <option>Within 2 Week</option>
                 <option>Within 3 Week</option>
                  <option>Within 1 Month</option>
            </select>
          </div>
          <div class="col-md-2 mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
          <div class="clearfix"></div>
          
      </div>-->
      
<h3>Age <span class="arrow-r"></span></h3>
<div>
<form action="profile-listing.php" method="get">
  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp03">
  
   <select class="age-sel" name="filter">
   
   <?php
    for($i=18;$i<=50;$i++){?>
      <option value="<?=$i?>" <?php if($_REQUEST['filter_type']=="age" && $_REQUEST['filter']==$i){?> selected <?php }?> ><?=$i?></option>  
    <?php }?>

</select>

</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp03">
    
   <select class="age-sel" name="filter2">
   <option value="50">50</option>
   <?php
    for($i=18;$i<=49;$i++){?>
      <option value="<?=$i?>" <?php if($_REQUEST['filter_type']=="age" && $_REQUEST['filter2']==$i){?> selected <?php }?> ><?=$i?></option>  
    <?php }?>

</select>
   
<input type="hidden" name="filter_type" value="age" />         
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
        
          <div class="clearfix"></div>
       </form>   
      </div>
      <h3>Height <span class="arrow-r"></span></h3>
      
<div>
<form action="profile-listing.php" method="get">    
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp03">

<select class="age-sel" name="filter">

<option value="4.5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="4.5"){?> selected <?php }?>>4' 5'' - 134cm</option>
<option value="4.6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
<option value="4.7" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
</select>
</div>

<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 mp03">
<select class="age-sel" name="filter2">

<option value="4.6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="4.6"){?> selected <?php }?>>4' 6'' - 137cm</option>
<option value="4.7" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="4.7"){?> selected <?php }?>>4' 7'' - 139cm</option>
<option value="4.8" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="4.8"){?> selected <?php }?>>4' 8'' - 142cm</option>
<option value="4.9" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="4.9"){?> selected <?php }?>>4' 9'' - 144cm</option>
<option value="5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5"){?> selected <?php }?>>5' - 152cm</option>
<option value="5.1" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.1"){?> selected <?php }?>>5' 1'' - 154cm</option>
<option value="5.2" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.2"){?> selected <?php }?>>5' 2'' - 157cm</option>
<option value="5.3" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.3"){?> selected <?php }?>>5' 3'' - 160cm</option>
<option value="5.4" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.4"){?> selected <?php }?>>5' 4'' - 162cm</option>
<option value="5.5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.5"){?> selected <?php }?>>5' 5'' - 165cm</option>
<option value="5.6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.6"){?> selected <?php }?>>5' 6'' - 167cm</option>
<option value="5.7" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.7"){?> selected <?php }?>>5' 7'' - 170cm</option>
<option value="5.8" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.8"){?> selected <?php }?>>5' 8'' - 172cm</option>
<option value="5.9" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="5.9"){?> selected <?php }?>>5' 9'' - 175cm</option>
<option value="6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6"){?> selected <?php }?>>6' - 182cm</option>
<option value="6.1" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.1"){?> selected <?php }?>>6' 1'' - 185cm</option>
<option value="6.2" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.2"){?> selected <?php }?>>6' 2'' - 187cm</option>
<option value="6.3" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.3"){?> selected <?php }?>>6' 3'' - 190cm</option>
<option value="6.4" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.4"){?> selected <?php }?>>6' 4'' - 193cm</option>
<option value="6.5" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.5"){?> selected <?php }?>>6' 5'' - 195cm</option>
<option value="6.6" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.6"){?> selected <?php }?>>6' 6'' - 198cm</option>
<option value="6.7" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.7"){?> selected <?php }?>>6' 7'' - 200cm</option>
<option value="6.8" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.8"){?> selected <?php }?>>6' 8'' - 203cm</option>
<option value="6.9" <?php if($_REQUEST['filter_type']=="height" && $_REQUEST['filter2']=="6.9"){?> selected <?php }?>>6' 9'' - 205cm</option>
            </select>
<input type="hidden" name="filter_type" value="height" />            
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
          <div class="clearfix"></div>
         </form> 
      </div>
      
<!--<h3>Annual income <span class="arrow-r"></span></h3>
<div>
<form action="profile-listing.php" method="get">    
<div class="col-md-10 mp03">
<div class="slidecontainer">
    
<p style="border:solid 1px #CCC; height:30px; padding-top:2px; width:98%">Lakh : <span id="demo"></span></p>
<input type="range" min="1Lakch" max="100Lakch" value="50" class="slider" id="myRange" name="filter">
</div>
<input type="hidden" name="filter_type" value="income" />
</div>
<div class="col-md-2 mp03">
<button type="submit" class="btn-age">Submit</button>
</div>
<div class="clearfix"></div>
</form>
</div>-->
      
<h3>Marital status<span class="arrow-r"></span></h3>
<div class="pro-typ">
<?php
$sql="SELECT * FROM tbl_marital WHERE m_status='Active'";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<p><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=All" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> All</a></p>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){?>

<p <?php if($_REQUEST['filter_type']=="marital" && $_REQUEST['filter']==$recMarital['m_title']){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=marital" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> <?=$recMarital['m_title']?></a></p>
<?php
}
}
?>

<div class="clearfix"></div>

</div>
      
<h3>Mother tongue<span class="arrow-r"></span></h3>
<div class="pro-typ">


<?php
$sql="SELECT * FROM tbl_toung WHERE m_status='Active' LIMIT 0,4";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<p><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=All" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> All</a></p>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){?>
<p <?php if($_REQUEST['filter_type']=="toung" && $_REQUEST['filter']==$recMarital['m_title']){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a  <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=toung" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> <?=$recMarital['m_title']?></a></p>
<?php
}
}
?>

      


<p><a id="orld1" href="javascript:void(0);" onClick='showHide("orld","orld1","orld2")' class="ms-mor"><i class="fa fa-angle-double-right" aria-hidden="true"></i> View More</a></p>
<div id="orld" style="display:none;">

<?php
$sql="SELECT * FROM tbl_toung WHERE m_status='Active' LIMIT 4,100";
$dataMarital=db_query($sql);
$countMarital=mysqli_num_rows($dataMarital);
if($countMarital){
?>
<?php while($recMarital=mysqli_fetch_array($dataMarital)){?>
<p <?php if($_REQUEST['filter_type']=="toung" && $_REQUEST['filter']==$recMarital['m_title']){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=<?=$recMarital['m_title']?>&filter_type=toung" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> <?=$recMarital['m_title']?></a></p>
<?php
}
}
?>

     <p><a href="javascript:void(0);" onClick='showHide("orld","orld1","orld2")'  id="orld2" class="ms-mor"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Show Less</a></p>
</div>
<div class="clearfix"></div>
</div>
      
<h3>Religion<span class="arrow-r"></span></h3>
<div class="pro-typ">

<?php
$sql="SELECT * FROM  tbl_community WHERE c_status='Active' AND c_parent_id='0' LIMIT 0,4";
$dataReligion=db_query($sql);
$countReligion=mysqli_num_rows($dataReligion);
if($countReligion){
?>
<p><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=All" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> All</a></p>
<?php while($recReligion=mysqli_fetch_array($dataReligion)){?>
<p <?php if($_REQUEST['filter_type']=="religion" && $_REQUEST['filter']==$recReligion['c_title']){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=<?=$recReligion['c_title']?>&filter_type=religion" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> <?=$recReligion['c_title']?></a></p>
<?php
}
}
?>


<p><a id="relg1" href="javascript:void(0);" onClick='showHide("relg","relg1","relg2")' class="ms-mor"><i class="fa fa-angle-double-right" aria-hidden="true"></i> View More</a></p>  
    
<div id="relg" style="display:none;">
<?php
$sql="SELECT * FROM  tbl_community WHERE c_status='Active' AND c_parent_id='0' LIMIT 4,100";
$dataReligion=db_query($sql);
$countReligion=mysqli_num_rows($dataReligion);
if($countReligion){
?>
<?php while($recReligion=mysqli_fetch_array($dataReligion)){?>
<p <?php if($_REQUEST['filter_type']=="religion" && $_REQUEST['filter']==$recReligion['c_title']){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=<?=$recReligion['c_title']?>&filter_type=religion" <?php }else{?> href="Javascript:void(0)"<?php }?> ><i class="fa fa-circle"></i> <?=$recReligion['c_title']?></a></p>
<?php
}
}
?>
     <p><a href="javascript:void(0);" onClick='showHide("relg","relg1","relg2")'  id="relg2" class="ms-mor"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Show Less</a></p>
</div>
<div class="clearfix"></div>              
      </div>
      
      
<h3>Caste<span class="arrow-r"></span></h3>
<div class="pro-typ">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  mp03">
<select class="age-sel"  <?php if(!empty($_SESSION['userLoginId'])){?> onChange="filterByCast(this.value)" <?php }else{?> href="Javascript:void(0)"<?php }?> >
<option value="All">Any</option>
<?php
$sql="SELECT * FROM  tbl_community WHERE c_status='Active' AND c_parent_id!='0' ";
$dataReligion=db_query($sql);
$countReligion=mysqli_num_rows($dataReligion);
if($countReligion){
while($recReligion=mysqli_fetch_array($dataReligion)){ 	
?>
<option value="<?=$recReligion['c_title']?>" <?php if($_REQUEST['filter_type']=="cast" && $_REQUEST['filter']==$recReligion['c_title']){?> selected <?php }?> ><?=$recReligion['c_title']?></option>
<?php
}
}
?>
</select>
          </div>
          
         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
        
          <div class="clearfix"></div>
      </div>
       <h3>occupation<span class="arrow-r"></span></h3>
      <div class="pro-typ">
     
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  mp03">

<select class="age-sel" <?php if(!empty($_SESSION['userLoginId'])){?> onChange="filterByProfession(this.value)" <?php }else{?> href="Javascript:void(0)"<?php }?>  >
<option value="All">Any</option>
<?php
$sql="SELECT * FROM  tbl_search_profession WHERE m_status='Active'  ";
$dataProfession=db_query($sql);
$countProfession=mysqli_num_rows($dataProfession);
if($countProfession){
while($recProfession=mysqli_fetch_array($dataProfession)){ 	
?>
<option value="<?=$recProfession['m_title']?>" <?php if($_REQUEST['filter_type']=="profession" && $_REQUEST['filter']==$recProfession['m_title']){?> selected <?php }?> ><?=$recProfession['m_title']?></option>
<?php
}
}
?>
</select>


          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
       
      
<div class="clearfix"></div>

      </div>
       <h3>Education<span class="arrow-r"></span></h3>
      <div class="pro-typ">
     
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  mp03">
<select class="age-sel" <?php if(!empty($_SESSION['userLoginId'])){?> onChange="filterByEducation(this.value)" <?php }else{?> href="Javascript:void(0)"<?php }?>  >


<option value="0" >-- Select Highest Education--</option>
<optgroup label="Engineering/Design">
<option value="B.E/B.Tech" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.E/B.Tech"){?> selected <?php }?> >-  B.E/B.Tech</option>
<option value="B.Pharma" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.Pharma"){?> selected <?php }?> >-  B.Pharma</option>
<option value="M.E/M.Tech" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.E/M.Tech"){?> selected <?php }?> >-  M.E/M.Tech</option>
<option value="M.Pharma" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Pharma"){?> selected <?php }?> >-  M.Pharma</option>
<option value="M.S. (Engineering)" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.S. (Engineering)"){?> selected <?php }?> >-  M.S. (Engineering)</option>
<option value="B.Arch" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.Arch"){?> selected <?php }?> >-  B.Arch</option>
<option value="M.Arch" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Arch"){?> selected <?php }?> >-  M.Arch</option>
<option value="B.Des" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.Des"){?> selected <?php }?> >-  B.Des</option>
<option value="M.Des" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Des"){?> selected <?php }?> >-  M.Des</option>
      
    </optgroup>
    <optgroup label="Computers:">
     <option value="MCA/PGDCA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MCA/PGDCA"){?> selected <?php }?> >-  MCA/PGDCA</option>
      <option value="BCA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BCA"){?> selected <?php }?> >-  BCA</option>
      <option value="B.IT" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.IT"){?> selected <?php }?> >-  B.IT</option>
    </optgroup>
    
     </optgroup>
    <optgroup label="Finance/Commerce:">
      <option value="B.Com" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.Com"){?> selected <?php }?> >-   B.Com</option>
       <option value="CA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="CA"){?> selected <?php }?> >-  CA</option>
       <option value="CS" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="CS"){?> selected <?php }?> >-   CS</option>
       <option value="ICWA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="ICWA"){?> selected <?php }?> >-  ICWA</option>
       <option value="M.Com" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Com"){?> selected <?php }?> >-   M.Com</option>
      <option value="CFA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="CFA"){?> selected <?php }?> >-  CFA</option>
    </optgroup>
    <optgroup label="Management:">
       <option value="MBA/PGDM" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MBA/PGDM"){?> selected <?php }?> >-  MBA/PGDM</option>
     <option value="BBA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BBA"){?> selected <?php }?> >-   BBA</option>
       <option value="BHM" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BHM"){?> selected <?php }?> >-   BHM</option>
    </optgroup>
    <optgroup label="Medicine:">
      <option value="MBBS" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MBBS"){?> selected <?php }?> >-  MBBS</option>
       <option value="M.D." <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.D."){?> selected <?php }?> >-   M.D.</option>
       <option value="BAMS" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BAMS"){?> selected <?php }?> >-  BAMS</option>
       
         <option value="BHMS" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BHMS"){?> selected <?php }?> >-  BHMS</option>
       <option value="BDS" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BDS"){?> selected <?php }?> >-  BDS</option>
       <option value="M.S. (Medicine)" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.S. (Medicine)"){?> selected <?php }?> >-  M.S. (Medicine)</option>
         <option value="MVSc." <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MVSc."){?> selected <?php }?> >-  MVSc.</option>
       <option value="BVSc." <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BVSc."){?> selected <?php }?> >-  BVSc.</option>
        <option value="MDS" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MDS"){?> selected <?php }?> >-  MDS</option>
         <option value="BPT" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BPT"){?> selected <?php }?> >-   BPT</option>
       <option value="MPT" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MPT"){?> selected <?php }?> >-   MPT</option>
        <option value="DM" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="DM"){?> selected <?php }?> >-  DM</option>
       <option value="MCh" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MCh"){?> selected <?php }?> >-  MCh</option>
    </optgroup>
     <optgroup label="Law:" >
      <option value="BL /LLB" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BL /LLB"){?> selected <?php }?> >-   BL /LLB</option>
       <option value="ML/LLM" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="ML/LLM"){?> selected <?php }?> >-  ML/LLM</option>
       </optgroup>
    <optgroup label="Arts/Science:">
      <option value="B.A." <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.A."){?> selected <?php }?> >-   B.A.</option>
       <option value="B.Sc" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.Sc"){?> selected <?php }?> >-  B.Sc</option>
       <option value="M.Sc" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Sc"){?> selected <?php }?> >-  M.Sc</option>
         <option value="B.Ed" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="B.Ed"){?> selected <?php }?> >-   B.Ed</option>
       <option value="M.Ed" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Ed"){?> selected <?php }?> >-  M.Ed</option>
        <option value="MSW" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MSW"){?> selected <?php }?> >-  MSW</option>
        
         <option value="BFA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BFA"){?> selected <?php }?> >-   BFA</option>
       <option value="MFA" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MFA"){?> selected <?php }?> >-  MFA</option>
        <option value="BJMC" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="BJMC"){?> selected <?php }?> >-  BJMC</option>
         <option value="MJMC" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="MJMC"){?> selected <?php }?> >-  MJMC</option>
    </optgroup>
    
      <optgroup label="Doctorate:">
      <option value="Ph. D" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="Ph. D"){?> selected <?php }?> >-   Ph. D</option>
       <option value="M.Phil" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="M.Phil"){?> selected <?php }?> >-  M.Phil</option>
    </optgroup>
    
     <optgroup label="Non-Graduate:">
      <option value="Diploma" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="Diploma"){?> selected <?php }?> >-   Diploma</option>
       <option value="High School" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="High School"){?> selected <?php }?> >-  High School</option>
        <option value="Trade School" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="Trade School"){?> selected <?php }?> >-   Trade School</option>
       <option value="Other" <?php if($_REQUEST['filter_type']=="edu" && $_REQUEST['filter']=="Other"){?> selected <?php }?> >-  Other</option>
    </optgroup>
  
</select>
          </div>
          
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
<div class="clearfix"></div>
</div>
 

<h3>Country<span class="arrow-r"></span></h3>
<div class="pro-typ">
    
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10  mp03">

<select class="age-sel" <?php if(!empty($_SESSION['userLoginId'])){?> onChange="filterByCountry(this.value)" <?php }else{?> href="Javascript:void(0)"<?php }?>  >

<option value="0" >Choose Country</option>

<?php
$sql_country=db_query("select * from tbl_country_master where 1 and status='Active'");
if(mysqli_num_rows($sql_country)>0){
while($data=mysqli_fetch_array($sql_country)){
@extract($data);
?>
<option value="<?=$data['contName']?>" <?php if($_REQUEST['filter_type']=="cnty" && $data['contName']==$_REQUEST['filter']){?> selected <?php }?>>
<?=$data['contName']?>
</option>
<?
}
}
?>

</select>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2  mp03">
<button type="submit" class="btn-age">Submit</button>
</div>
<div class="clearfix"></div>

      </div>
       <h3>State<span class="arrow-r"></span></h3>
      <div class="pro-typ">
     
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 mp03">




          
<select class="age-sel" <?php if(!empty($_SESSION['userLoginId'])){?> onChange="filterByState(this.value)" <?php }else{?> href="Javascript:void(0)"<?php }?> >
<option value="0" >Choose State</option>
<?php
$sql="SELECT * FROM  tbl_search_state WHERE m_status='Active'  ";
$dataProfession=db_query($sql);
$countProfession=mysqli_num_rows($dataProfession);
if($countProfession){
while($recProfession=mysqli_fetch_array($dataProfession)){ 	
?>
<option value="<?=$recProfession['m_title']?>" <?php if($_REQUEST['filter_type']=="state" && $_REQUEST['filter']==$recProfession['m_title']){?> selected <?php }?> ><?=$recProfession['m_title']?></option>
<?php
}
}
?>
            </select>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 mp03">
           <button type="submit" class="btn-age">Submit</button>
          </div>
         
      
<div class="clearfix"></div>

      </div>
      
      <h3>Drinking<span class="arrow-r"></span></h3>
      <div class="pro-typ">
<?php if(!empty($_SESSION['userLoginId'])){?>

<p <?php if($_REQUEST['filter_type']=="drink" && $_REQUEST['filter']=="Doesn't Matter"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Does not Matter&filter_type=drink"><i class="fa fa-circle"></i> Doesn't Matter </a></p>
<p <?php if($_REQUEST['filter_type']=="drink" && $_REQUEST['filter']=="Non-drinker"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Non-drinker&filter_type=drink"><i class="fa fa-circle"></i> Never Drinks</a></p>
<p <?php if($_REQUEST['filter_type']=="drink" && $_REQUEST['filter']=="Occasionally"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Occasionally&filter_type=drink"><i class="fa fa-circle"></i> Occasionally </a></p>
<p <?php if($_REQUEST['filter_type']=="drink" && $_REQUEST['filter']=="Regular"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Regular&filter_type=drink"><i class="fa fa-circle"></i> Regular </a></p>

<?php }else{?>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Doesn't Matter </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Never Drinks</a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Occasionally </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Regular </a></p>


<?php }?>      

</div>
      
       <h3>Smoking<span class="arrow-r"></span></h3>


<div class="pro-typ">
<?php if(!empty($_SESSION['userLoginId'])){?>
<p <?php if($_REQUEST['filter_type']=="smoke" && $_REQUEST['filter']=="Doesn't Matter"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Does not Matter&filter_type=smoke"><i class="fa fa-circle"></i> Doesn't Matter </a></p>

<p <?php if($_REQUEST['filter_type']=="smoke" && $_REQUEST['filter']=="Non-smoker"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Non-smoker&filter_type=smoke"><i class="fa fa-circle"></i> Non Smokers </a></p>

<p <?php if($_REQUEST['filter_type']=="smoke" && $_REQUEST['filter']=="Occasional"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Occasional&filter_type=smoke"><i class="fa fa-circle"></i> Occasional Smokers</a></p>

<p <?php if($_REQUEST['filter_type']=="smoke" && $_REQUEST['filter']=="Regular Smokers"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Regular Smokers&filter_type=smoke"><i class="fa fa-circle"></i> Regular Smokers</a></p>

<?php }else{?>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Doesn't Matter </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Non Smokers </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Occasional Smokers</a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Regular Smokers</a></p>
<?php }?>


      </div>
      
<h3>Eating Habits<span class="arrow-r"></span></h3>
<div class="pro-typ">

<?php if(!empty($_SESSION['userLoginId'])){?>
<p <?php if($_REQUEST['filter_type']=="eating" && $_REQUEST['filter']=="All"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Does not Matter&filter_type=eating"><i class="fa fa-circle"></i> Doesn't Matter </a></p>
<p <?php if($_REQUEST['filter_type']=="eating" && $_REQUEST['filter']=="Vegetarian"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Vegetarian&filter_type=eating"><i class="fa fa-circle"></i>  Vegetarian </a></p>
<p <?php if($_REQUEST['filter_type']=="eating" && $_REQUEST['filter']=="Non-Veg"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Non-Veg&filter_type=eating"><i class="fa fa-circle"></i> Non Vegetarian </a></p>
<p <?php if($_REQUEST['filter_type']=="eating" && $_REQUEST['filter']=="Eggiterian"){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a href="profile-listing.php?filter=Eggiterian&filter_type=eating"><i class="fa fa-circle"></i> Eggiterian </a></p>
<?php }else{?>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Doesn't Matter </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i>  Vegetarian </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Non Vegetarian </a></p>
<p><a href="Javascript:void(0)"><i class="fa fa-circle"></i> Eggiterian </a></p>
<?php }?>

</div>
      
      
      <h3>Profile Created by<span class="arrow-r"></span></h3>

<div class="pro-typ">
<?php
$sql="SELECT * FROM   tbl_search_profile_managed_by WHERE m_status='Active'  ";
$dataProfession=db_query($sql);
$countProfession=mysqli_num_rows($dataProfession);
if($countProfession){
while($recProfession=mysqli_fetch_array($dataProfession)){ 	
?>
<p <?php if($_REQUEST['filter_type']=="manage-by" && $_REQUEST['filter']==$recProfession['m_title']){?> style="border-left:2.5px solid #B10A0A;background-color:rgba(255,229,180,.4);" <?php }?> ><a <?php if(!empty($_SESSION['userLoginId'])){?> href="profile-listing.php?filter=<?=$recProfession['m_title']?>&filter_type=manage-by" <?php }else{?> href="Javascript:void(0)" <?php }?> ><i class="fa fa-circle"></i> <?=$recProfession['m_title']?> </a></p>
<?php
}
}
?>      
      

      </div>
      

  </div>
</div>

</div>


<script>
function filterByCast(cast){
window.location="profile-listing.php?filter="+cast+"&filter_type=cast"
}


function filterByProfession(prof){
window.location="profile-listing.php?filter="+prof+"&filter_type=profession"
}


function filterByEducation(edu){
window.location="profile-listing.php?filter="+edu+"&filter_type=edu"
}

function filterByCountry(cnty){
window.location="profile-listing.php?filter="+cnty+"&filter_type=cnty"
}

function filterByState(state){
window.location="profile-listing.php?filter="+state+"&filter_type=state"
}


</script>


<script>

$(document).mouseup(function(e) 
{
    var container = $("#sildeRegdBox");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        //container.hide();
		
		$(".iq-customizer.opened").removeClass("opened");
            $(".iq-customizer").addClass("closed");
            style_switcher.animate({
                "right": '-' + panelWidth

	
})
}

});
</script>