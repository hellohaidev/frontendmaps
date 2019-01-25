<?php 
ob_start();
?>
<a href="?page=home" class="btn btn-primary" style="margin-bottom:20px;">Back</a>
<h3 class="text-center">Pemetaan Lokasi Pusat, Regional, Cabang</h3>
<div style="margin-top:20px;">
<iframe src="http://localhost:5000/" style="width:100%;height:500px;" />
</div>
<?php 
$map = ob_get_clean();
?>
