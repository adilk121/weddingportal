<?php

include 'config.php';

$post_id=$_GET['id'];
$cat_id=$_GET['cat_id'];

$sql1="SELECT post_img FROM post WHERE post_id={$post_id}";
$row=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
// print_r($row);
// die();
unlink('upload/'.$row['post_img']);

$sql="DELETE FROM post WHERE post_id={$post_id};";
$sql.="UPDATE category SET post=post-1 WHERE category_id={$cat_id}";

$result=mysqli_multi_query($conn,$sql) or die("Delete query failed");
if($result){
  header("Location:{$hostname}/admin/post.php");
}
else{
  echo "<p>can't delete the record</p>";
}






























  // include "config.php";

  // $post_id = $_GET['id'];
  // $cat_id = $_GET['catid'];

  // $sql1 = "SELECT * FROM post WHERE post_id = {$post_id}";
  // $result = mysqli_query($conn, $sql1) or die("Query Failed : Select");
  // $row = mysqli_fetch_assoc($result);

  // unlink("upload/".$row['post_img']);

  // $sql = "DELETE FROM post WHERE post_id = {$post_id};";
  // $sql .= "UPDATE category SET post= post - 1 WHERE category_id = {$cat_id}";

  // if(mysqli_multi_query($conn, $sql)){
  //   header("location: {$hostname}/admin/post.php");
  // }else{
  //   echo "Query Failed";
  // }
?>
