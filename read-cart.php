
<?php 
include_once 'dbConfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
      case 'succ':
        $statusType='alert-success';
        $statusMsg='Members data has been imported';
        break;
      case 'err':
        $statusType='alert-danger';
        $statusMsg='some problem occured, please wait';
        break;
    case 'invalid_file':
            $statusType='alert-danger';
            $statusMsg='please upload correct file';
            break;  
     default:
     $statusType='';
     $statusMsg='';  
    }

}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
<title>REsponsiv dashboord</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./style.css">
</head>
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
            <a href="read-cart.php" class="active"><span class="material-icons-sharp">receipt_long</span>
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
       <div class="options">
        <div class="right-op">
            <a href="result.php">نمایش درخواستها</a>
            <a href="#">تست2</a>
            <a href="#">تست3</a>
            <a href="javascript:void(0);" class="btn btn-success" onClick="formToggle('importFrm');">افزودن</a>
            <div class="col-md-12" id="importFrm" style="display:none;">
            <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="">
            <input type="submit" class="btn btn-primary" value="IMPORT11" name="importSubmit">
            </form>
            </div>
        </div>
        <div class="left-op">
            <a href="#">تست4</a>
            <a href="#">تست5</a>
            <a href="#">تست6</a>
            <a href="exportData.php" class="btn btn-info"><i class="dwn"></i> خروجی</a>
        </div>
       </div>



       <?php if(!empty($statusMsg)){
 ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>">
    <?php echo $statusMsg; ?>
</div>
</div>

<?php } ?>
<div class="row">
<div class="col-md-12 head d-flex">
    <div class="float-right">
       
        
    </div>


<!-- Export link -->
<div class="col-md-12 head">
    <div class="float-right">
        
    </div>
</div>
</div>


    </main>
    <!--------------------end of main------------------------->
   
</div><!--container-->

</body>
</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yekan-font@1.0.0/css/yekan-font.min.css">

<script>
   // alert();
    function formToggle(ID){
        var element=document.getElementById(ID);
        if(element.style.display==="none"){
            element.style.display="block"
        }else{
            element.style.display="none"
        }
    }
</script>