<style>
    .vendor-dropdown {
  position: fixed;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  z-index:10000;
}

.dropbtn {
  background-color: #d45149;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-top-left-radius: 20px 20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #f1f1f1;
}

.vendor-dropdown:hover .dropdown-content {
  display: block;
}

.vendor-dropdown:hover .dropbtn {
  background-color: #d35149;
}

</style>
<div class="vendor-dropdown">
  <button class="dropbtn">Become a vendor</button>
  <div class="dropdown-content">
    <a href="vendor-registration.php">Vendor Registration</a>
    <a href="vendors/">Vendor List</a>
    <!--<a href="#">Link 3</a>-->
  </div>
</div>
