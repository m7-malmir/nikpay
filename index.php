<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
<titleREsponsiv dashboord</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
</head>
<body>


<?php if(!empty($statusMsg)){
 ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>">
    <?php echo $statusMsg; ?>
</div>
</div>

<?php } ?>
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
             <h3>Dashboord</h3>
            </a>
            <a href="index.html" class="active"><span class="material-icons-sharp">person</span>
                <h3>پروفایل</h3>
               </a>
               <a href="read-cart.php" ><span class="material-icons-sharp">receipt_long</span>
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
    <main>
        <h1>Dashboord</h1>
        <div class="date">
            <input type="date">
        </div><!--date-->
        <div class="insights">
            <div class="sales">
                <span class="material-icons-sharp">analytics</span>
                <div class="middle">
                     <div class="left">
                     <h3>Total Sales</h3>
                     <h1>$25,032</h1>
                     </div><!--left-->
                     <div class="progress">
                         <svg><circle cx='38' cy='38' r='36'></circle></svg>
                         <div class="number">
                             <p>87%</p>
                         </div><!--number-->
                     </div><!--progress-->
                </div><!--middle-->
                <small class="text-muted">Last 24Hours</small>
            </div><!--sales-->
             <!--------------------end of sales--------------------------> 
              <div class="expenses">
                <span class="material-icons-sharp">bar_chart</span>
                <div class="middle">
                     <div class="left">
                     <h3>Total Expenses</h3>
                     <h1>$5,032</h1>
                     </div><!--left-->
                     <div class="progress">
                         <svg><circle cx='38' cy='38' r='36'></circle></svg>
                         <div class="number">
                             <p>70%</p>
                         </div><!--number-->
                     </div><!--progress-->
                </div><!--middle-->
                <small class="text-muted">Last 32Hours</small>
            </div><!--sales-->
             <!--------------------end of expenses--------------------------> 
              <div class="income">
                <span class="material-icons-sharp">stacked_line_chart</span>
                <div class="middle">
                     <div class="left">
                     <h3>Total Income</h3>
                     <h1>$10,032</h1>
                     </div><!--left-->
                     <div class="progress">
                         <svg><circle cx='38' cy='38' r='36'></circle></svg>
                         <div class="number">
                             <p>57%</p>
                         </div><!--number-->
                     </div><!--progress-->
                </div><!--middle-->
                <small class="text-muted">Last 4Hours</small>
            </div><!--sales-->
             <!--------------------end of income--------------------------> 
        </div><!--insights-->
        <div class="recent-orders">
            <h2>Recent Orders</h2>
            <table>
                <thead>
                  <tr>
                    <th>product name</th>
                    <th>product number</th>
                    <th>payment</th>
                    <th>status</th>
                    <th></th>
                  </tr>
                 </thead>
                 <tbody>
                    <tr>
                      <td>foldable mini dron</td>
                      <td>45674</td>
                      <td>Due</td>
                      <td class="warning">pending</td>
                      <td class="primary">Details</td>
                    </tr>
                    <tr>
                        <td>foldable mini dron</td>
                        <td>45674</td>
                        <td>Due</td>
                        <td class="warning">pending</td>
                        <td class="primary">Details</td>
                      </tr>
                      <tr>
                        <td>foldable mini dron</td>
                        <td>45674</td>
                        <td>Due</td>
                        <td class="warning">pending</td>
                        <td class="primary">Details</td>
                      </tr>
                      <tr>
                        <td>foldable mini dron</td>
                        <td>45674</td>
                        <td>Due</td>
                        <td class="warning">pending</td>
                        <td class="primary">Details</td>
                      </tr>
                      <tr>
                        <td>foldable mini dron</td>
                        <td>45674</td>
                        <td>Due</td>
                        <td class="warning">pending</td>
                        <td class="primary">Details</td>
                      </tr>
                 </tbody>
              </table>
              <a href="" >Show All</a>
        </div><!--recent-order-->
    </main>
    <!--------------------end of main------------------------->
    <div class="right">
        <div class="top">
            <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>
            </button>
            <div class="theme-toggler">
              <span class="material-icons-sharp active">light_mode</span>
              <span class="material-icons-sharp">dark_mode</span>
            </div><!--theme-toggle-->
            <div class="profile">
                <div class="info">
                    <p>Hey, <b>Daniel</b></p>
                    <small class="text-muted">Admin</small>
                </div><!--info-->
                <div class="profile-photo">
                    <img src="./img/male-silluette.jpg">
                </div><!--profile-photo-->
            </div><!---profile--->
        </div><!--top-->
        <div class="recent-updates">
            <h2>Recent Updates</h2>
            <div class="updates">
                
                <div class="update">
                    <div class="profile-photo">
                    <img src="./img/male-silluette.jpg">
                </div><!--profile-photo-->
                <div class="message">
                    <p><b>Mike tyson</b> recieved his order of Night lion tech GPS drone.</p>
                    <small class="text-muted">2 min ago</small>
                </div><!--message-->
                </div><!--update-->
                <div class="update">
                    <div class="profile-photo">
                    <img src="./img/male-silluette.jpg">
                </div><!--profile-photo-->
                <div class="message">
                    <p><b>Mike tyson</b> recieved his order of Night lion tech laptop drone.</p>
                    <small class="text-muted">2 min ago</small>
                </div><!--message-->
                </div><!--update-->
                <div class="update">
                    <div class="profile-photo">
                    <img src="./img/male-silluette.jpg">
                </div><!--profile-photo-->
                <div class="message">
                    <p><b>Mike tyson</b> recieved his order of Night lion tech whatch drone.</p>
                    <small class="text-muted">2 min ago</small>
                </div><!--message-->
                </div><!--update-->
            </div><!--updates-->
        </div><!--recent-updates-->
        <div class="sales-analytics">
            <h2>Sales Analytics</h2>
            <div class="item online">
                <div class="icon"><span class="material-icons-sharp">add_card</span></div><!--icon-->
                <div class="right">
                    <div class="info">
                        <h3>Online Orders</h3>
                        <small class="text-muted">Last 24hours</small>
                    </div><!--info-->
                    <h5 class="success">+39%</h5>
                    <h3>3849</h3>
                </div><!--right-->
            </div><!--item online-->
            <div class="item offline">
                <div class="icon"><span class="material-icons-sharp">local_mall</span></div><!--icon-->
                <div class="right">
                    <div class="info">
                        <h3>Offline Orders</h3>
                        <small class="text-muted">Last 24hours</small>
                    </div><!--info-->
                    <h5 class="danger">-17%</h5>
                    <h3>1100</h3>
                </div><!--right-->
            </div><!--item offline-->
            
<div class="item customers">
                <div class="icon"><span class="material-icons-sharp">person</span></div><!--icon-->
                <div class="right">
                    <div class="info">
                        <h3>New Customers</h3>
                        <small class="text-muted">Last 24hours</small>
                    </div><!--info-->
                    <h5 class="success">+25%</h5>
                    <h3>849</h3>
                </div><!--right-->
            </div><!--item customers-->
            <div class="item add-products">
                <div> <span class="material-icons-sharp">add</span></div>
                <h3>Add Product</h3>
            </div><!--item add-product-->
        </div><!-----sales-analytics---->
    </div><!--right-->
</div><!--container-->

</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yekan-font@1.0.0/css/yekan-font.min.css">
<script src="./main.js"></script>
