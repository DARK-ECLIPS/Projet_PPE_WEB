<div class="topbar">
  <div class="toggle" onclick="toggleMenu()"></div>
  <div class="search">
    <label>
      <input type="text" placeholder="Search here">
      <i class="fas fa-search"></i>
    </label>
  </div>
  <div class="user">
    <a href="http://localhost/ProjetPPE/view/userProfile/profile.php">
      <img src="data:image/jpg;charset=ut8;base64,<?php echo base64_encode($_SESSION['userInfo']['avatar']); ?>" />
    </a>
  </div>
</div>