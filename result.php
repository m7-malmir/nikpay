<?php
include_once 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
<titleREsponsiv dashboord</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      
    }
    td, th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 5px;
    }
    
    
    </style>
<body>

<div class="container"> 
    <aside>
        <div class="top">
            <div class="logo">
                <img src="./img/logo.png">
                <h2>MEGA<span class="danger">TOOLs</span></h2>
            </div><!--logo-->
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
            </div><!--close-->
        </div><!--top-->
        <div class="sidebar">
            <a href="#"><span class="material-icons-sharp">grid_view</span>
             <h3>داشبورد</h3>
            </a>
            <a href="index.html" ><span class="material-icons-sharp">person</span>
             <h3>پروفایل</h3>
            </a>
            <a href="read-cart.html" class="active"><span class="material-icons-sharp">receipt_long</span>
             <h3>کارتخوان</h3>
            </a>
            <a href="#"><span class="material-icons-sharp">insights</span>
             <h3>Analytics</h3>
            </a>
            <a href="#"><span class="material-icons-sharp">mail_outline</span>
             <h3>Messages</h3>
             <span class="message-count">21</span>
            </a>
            <a href="#"><span class="material-icons-sharp">inventory</span>
             <h3>Products</h3>
            </a>
            <a href="#"><span class="material-icons-sharp">report</span>
             <h3>Reports</h3>
            </a>
            <a href="#"><span class="material-icons-sharp">settings</span>
             <h3>Settings</h3>
            </a>
            <a href="#"><span class="material-icons-sharp">add</span>
             <h3>Add Product</h3>
            </a>
            <a href="#"><span class="material-icons-sharp">logout</span>
             <h3>Log Out</h3>
            </a>
        </div><!--sidebar-->
    </aside>
    <!--------------------end of aside-------------------------->
<!-- Data list table --> 
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
      <tr>
          <th>شماره</th>
          <th>اسم</th>
          <th>ایمیل</th>
          <th>تلفن</th>
          <th>وضعیت</th>
      </tr>
  </thead>
  <tbody>
 <?php 
  // Fetch records from database 
  $result = $db->query("SELECT * FROM `members` ORDER BY `id` ASC"); 
  if($result->num_rows > 0){ 
      while($row = $result->fetch_assoc()){ 
  ?>
      <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo ($row['status'] == 'active')?'Active':'Inactive'; ?></td>
      </tr>
  <?php } }else{ ?>
      <tr><td colspan="7">No member(s) found...</td></tr>
  <?php } ?>
  </tbody>
</table>

      
</div><!--container-->

</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yekan-font@1.0.0/css/yekan-font.min.css">
<script src="./main.js"></script>
