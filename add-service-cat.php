<?php
$db = mysqli_connect('localhost','thediann_bestweddinghub','!+.ub,fL$O7Y','thediann_bestweddinghub') or die("Connection Failed");

if(isset($_POST['submit']))
{
  //header
$name = $_POST['name'];

$sql= "INSERT INTO `service_cat`(`name`) VALUES ('$name')";
$result = mysqli_query($db, $sql) or die("Query unsuccessful");

if($result){
echo ("<script>
window.alert('Succesfully Added the Information');
window.location.href='add-service-cat.php';
</script>");
mysqli_close($db);
}else{
echo "Not Successfull";
}
}

?>

<form action="" method="POST">
  <label>Category Name:</label><br>
  <input type="text" id="lname" name="name"><br><br>
  <input type="submit" value="Submit">
</form>
