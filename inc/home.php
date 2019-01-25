<?php 
ob_start();

if(isset($_POST['logout'])){
    session_destroy();
    header('location:index.php');
}

if(isset($_POST['save'])){
    $name = mysqli_real_escape_string($link,$_POST['name']);
    $latitude = mysqli_real_escape_string($link,$_POST['latitude']);
    $longtitude = mysqli_real_escape_string($link,$_POST['longtitude']);
    $kode = mysqli_real_escape_string($link,$_POST['kode']);

    $query = mysqli_query($link,"INSERT INTO tblmaps (name,latitude,longtitude,kode)
            VALUES('$name','$latitude','$longtitude','$kode')");

    if($query){
        echo '<script>alert("ok");window.location.assign("http://localhost/komida/komidamap/page.php?page=home")</script>';   
    }else {
        echo '<script>alert("gagal");window.location.assign("http://localhost/komida/komidamap/page.php?page=home")</script>';   
    }
}

?>

    <div class="row" style="margin-top:30px;">
        <div class="col-md-3">
            <div class="card">
                <a data-toggle="modal" href="#myModal" class="btn  btn-primary card-body">
                <i class="fas fa-plus"></i> Data
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <a href="?page=database" class="btn  btn-success card-body">
                <i class="fas fa-database"></i>   Database
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <a href="?page=map" class="btn  btn-dark card-body">
                <i class="fas fa-map-marked-alt"></i>    Map
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <a href="#" class="btn  btn-info card-body">
                <i class="fas fa-user"></i>    Account
                </a>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:30px;">
        <div class="col-md-12">
        <form method="post">
            <div class="card">
                <button type="submit"  class="btn  btn-danger card-body" name="logout">          
                        <i class="fas fa-sign-out-alt"></i>    Logout
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
<!---add modal data-->
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Form Data</h4>
        </div>
        <div class="modal-body">
         
            <div class="form-group">
                <label class="control-label">Nama Lokasi</label>
                <input type="text" name="name" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label">Latitude</label>
                <input type="text" name="latitude" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label">Longtitude</label>
                <input type="text" name="longtitude" class="form-control"/>
            </div>
            <div class="form-group">
                <label class="control-label">Kode Lokasi</label>
                <select class="form-control" name="kode">
                    <option value="1">Pusat</option>
                    <option value="2">Regional</option>
                    <option value="3">Cabang</option>
                </select>
            </div>
          
        </div>
        <div class="modal-footer">
         <button type="submit" class="btn btn-primary" name="save">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  
<?php 
$home = ob_get_clean();
?>