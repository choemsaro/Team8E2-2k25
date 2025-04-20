<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&family=Dangrek&display=swap"
  rel="stylesheet">
<style>
  .container{
    font-family: "Battambang", system-ui;
  }
  .container::before {
    display: none;
  }
  .container::after {
    display: none;
  }
  .header{
    background-color: royalblue;
    height: 90px;
    box-shadow: 1px 0 0;
  }
  .image1{
    vertical-align: middle;
    margin-top: -31px;
  }
  .top-menu{
    color: white;
    margin-top: -15px;
  }
  .top-menu ul li a {
    text-decoration: none;
    color: white;
    font-size: 16px;
    display: flex
;
    align-items: center;
    justify-content: center;
    gap: 5px;
    padding: 10px 15px;
    transition: background-color 0.3s, color 0.3s;
    height: 100%;
}
.top-menu ul li.active a {
  background-color: white;
  color: royalblue;
  border-radius: 5px;
}

</style>
<div class="header">
  <div class="container">
    <!-- Logo Section -->
    <div class="logo">
      <a href="index.php">
        <img src="./img/logo_khmer.png" width="200" class="image1" height="125" alt="Company Logo">
      </a>
    </div>
    <div class="top-menu">
      <ul>
        <!-- Home Link -->
        <li class="active">
          <a href="index.php" style="font-size:20px">
             ទំព័រដើម
          </a>
        </li>
        <!-- About Link -->
        <li>
          <a href="about.php" style="font-size:20px">
            អំពីខ្ញុំ
          </a>
        </li>
        <!-- Services Link -->
        <li>
          <a href="services.php" style="font-size:20px">
            កញ្ចប់សេវាកម្ម
          </a>
        </li>
        <!-- Request Status Link -->
        <li>
          <a href="status.php" style="font-size:20px">
            ស្នើរចាប់ផ្ដើម
          </a>
        </li>
        <!-- Contact Link -->
        <li>
          <a href="contact.php" style="font-size:20px">
            ចុះឈ្មោះ
          </a>
        </li>
        <!-- Admin Login Link -->
        <li class="admin">
          <a href="admin/login.php" style="font-size:20px">
            អ្នកគ្រប់គ្រង
          </a>
        </li>
      </ul>
    </div>
    <!-- Clearfix to handle floated elements -->
  </div>
</div>