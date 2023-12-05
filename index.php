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
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Import data</title>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
</head>
<body>
    
<div class="comtainer">
<h2>member list</h2>

<?php if(!empty($statusMsg)){
 ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>">
    <?php echo $statusMsg; ?>
</div>
</div>

<?php } ?>
<div class="row">
<div class="col-md-12 head">
    <div class="float-right">
        <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');">import</a>
        <a href="exportData.php" class="btn btn-primary">export</a>
    </div>
</div>
<div class="col-md-12" id="importFrm" style="display:none;">
<form action="importData.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="">
<input type="submit" class="btn btn-primary" value="IMPORT">
</form>
</div>

<!-- Export link -->
<div class="col-md-12 head">
    <div class="float-right">
        <a href="exportData.php" class="btn btn-success"><i class="dwn"></i> Export</a>
    </div>
</div>

<!-- Data list table --> 
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
   <?php 
    // Fetch records from database 
    $result = $db->query("SELECT * FROM members ORDER BY id ASC"); 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['country']; ?></td>
            <td><?php echo $row['created']; ?></td>
            <td><?php echo ($row['status'] == 1)?'Active':'Inactive'; ?></td>
        </tr>
    <?php } }else{ ?>
        <tr><td colspan="7">No member(s) found...</td></tr>
    <?php } ?>
    </tbody>
</table>


</div><!--row-->
</div><!--container-->



<script>
    function formToggle(ID){
        var element=document.getElementById(ID);
        if(element.style.display==="none"){
            element.style.display==="block"
        }else{
            element.style.display==="none"
        }
    }
</script>