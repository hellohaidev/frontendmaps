<?php 
ob_start();
?>
<a href="?page=home" class="btn btn-primary" style="margin-bottom:30px;">Back</a>
<table id="data" class="table table-striped" width="100%">
    <thead>
        <tr>
            <th>Nama Lokasi</th>
            <th>Latitude</th>
            <th>Longtitude</th>
            <th>Kode</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        $query = mysqli_query($link,"SELECT tblmaps.id, tblmaps.name,tblmaps.latitude,tblmaps.longtitude,tblmaps.kode FROM tblmaps");
        while($row = mysqli_fetch_array($query)){
        if($row['kode'] == 1){
            $kodeKMD = 'Pusat';
        }elseif($row['kode'] == 2){
            $kodeKMD = 'Regional';
        }elseif($row['kode'] == 3){
            $kodeKMD = 'Cabang';
        }
    ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['latitude'] ?></td>
            <td><?php echo $row['longtitude'] ?></td>
            <td><?php echo $kodeKMD ?></td>
            <td>
                <a href="?page=edit&id=<?php echo $row['id'] ?>">Edit</a> || <a href="?page=delete&id=<?php echo $row['id'] ?>">Delete</a> 
            </td>    
        </tr>

    <?php 
        }
    ?>
        
    </tbody>
</table>

<?php 
$database = ob_get_clean();
?>