<?php 
session_start();
// Include the database configuration file
include 'dbh.php';

if (isset($_SESSION['u_id'])){
    $sess = $_SESSION['u_id'];
    if ($sess != 7) {
        header("Location: ../run/index.php?Auth=Un-Authorised-Access");
    } else {
        echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>fireathon | Upload File</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="blog-css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Upload File | <a style=" text-decoration: none; " href="index.php">close</a> </h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="upload-sec.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="subject" value="subject" placeholder="subject / Title">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload File</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your image/document or any other relevant file. Max file size 25 MB</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" name="submit" type="submit" value="Upload">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="blog-vendor/jquery/jquery.min.js"></script>
    <!-- Main JS-->
    <script src="blog-js/global.js"></script>

</body>
</html>
        ';
    } 
} else {
    header("Location: ../run/index.php?Auth=Un-Authorised-Access");
}
