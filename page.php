<?php 
session_start();
error_reporting('E_ALL^E_NOTICE');

if(empty($_SESSION)){
    header('location:index.php');
}

else {
    include 'lib/db.php';
    include 'nav.php';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Papan Informasi Elektronik</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTable.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/> -->
    <link rel="stylesheet" type="text/css" href="assets/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> 
    
</head>
<body>
<div class="container-fluid">

    <div class="text-center">
        <a href="http://localhost/komida/komidamap">
            <img src="assets/img/logo.png"> <br>
        </a>
    </div>

        <div class="container">
            <?php echo $content; ?>
        </div>
            <!-- <form method="post">
                <button type="submit" name="logout" class="btn btn-danger">Logout</button>
            </form> -->


    


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquerydataTable.js"></script>
    <script src="assets/js/popper.js"></script>
    <!-- <script src="../assets/js/dataTable.js"></script> -->
    <script src="assets/js/dataTable.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable({
                scrollX : true
            });
        });
    </script>
</div>
</body>
</html>
<?php 
}
?>