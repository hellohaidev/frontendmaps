<?php
ob_start();
$id = $_GET['id'];
if(isset($_POST['update'])){
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $latitude = mysqli_real_escape_string($link,$_POST['latitude']);
    $longtitude = mysqli_real_escape_string($link,$_POST['longtitude']);
    $kode = mysqli_real_escape_string($link,$_POST['kode']);

    $query = mysqli_query($link,"UPDATE tblmaps SET 
                                name='$name',
                                latitude='$latitude',
                                longtitude='$longtitude',
                                kode = '$kode'
                                WHERE tblmaps.id = '$id'
                                ");
    if($query){
        echo '<script>alert("ok");window.location.assign("http://localhost/komida/komidamap/page.php?page=database")</script>';   
    }else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/komida/komidamap/page.php?page=database")</script>';   
    }


}
else {

    $data = mysqli_query($link,"SELECT * FROM tblmaps WHERE tblmaps.id='$id'");
    $result = mysqli_fetch_array($data);



?>

<a href="?page=database" class="btn btn-primary" style="margin-bottom:30px;">Back</a>
<form method="post">
            <div class="form-group">
                <label class="control-label">Nama Lokasi</label>
                <input type="text" name="name" class="form-control" value="<?php echo $result['name'] ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label">Latitude</label>
                <input type="text" name="latitude" class="form-control" value="<?php echo $result['latitude'] ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label">Longtitude</label>
                <input type="text" name="longtitude" class="form-control" value="<?php echo $result['longtitude'] ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label">Kode Lokasi</label>
                <select class="form-control" name="kode">
                    <option value="1" <?php if($result['kode']==1){ echo 'selected';}?>>Pusat</option>
                    <option value="2" <?php if($result['kode']==2){ echo 'selected';}?>>Regional</option>
                    <option value="3" <?php if($result['kode']==3){ echo 'selected';}?>>Cabang</option>
                </select>
            </div>
          
        
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
</form>

<?php 
}
$edit = ob_get_clean();
?>