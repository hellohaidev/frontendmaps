<?php
ob_start();

$id = $_GET['id'];
$query = mysqli_query($link,"DELETE FROM tblmaps WHERE tblmaps.id = '$id'");
if($query){
    echo '<script>alert("ok");window.location.assign("http://localhost/komida/komidamap/page.php?page=database")</script>';   
}else {
    echo '<script>alert("gagal");window.location.assign("http://localhost/komida/komidamap/page.php?page=database")</script>';   
}
?>

<?php 
$delete = ob_get_clean();
?>