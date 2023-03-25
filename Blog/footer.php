<div class="container-fluid">
    <!--<div class="row">-->
    <!--    <div class="ads">-->
    <!--        <h4><span style="color:red;"><a style="text-decoration:none;" href="tel:7894561230">Call</a></span> To Advertise here</h4>-->
    <!--    </div>-->
    <!--</div>-->
</div>
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
                include "config.php";

                $sql = "SELECT * FROM settings"; 

                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)) {
              ?>
                <span><?php echo $row['footerdesc']; ?></span>
              <?php
                }
              }
              ?>
            </div>
        </div>
    </div>
</div>
<script>
window.onscroll = function() {myFunction()};

var menubar = document.getElementById("menubar");
var sticky = menubar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    menubar.classList.add("sticky")
  } else {
    menubar.classList.remove("sticky");
  }
}
</script>
</body>
</html>

