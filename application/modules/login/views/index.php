<!DOCTYPE html>
<head>

    <title> Home </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/icon.png">

    <style>
        p{
            font-size: 24px;
            text-align: center;
        }
        img{
            margin-left: 23rem;
        }
    </style>
</head>
<body>
    <br>
    <h2> Welcome, <?php echo $_SESSION['username'];?> </h2>
    <p> This is the landing page. Thank you for visiting. </p>
    <img src="<?php echo base_url(); ?>assets/gif.gif"><br><br>
    <p> You may now <a href="<?php echo base_url();?>Login/logout" >log out</a> at your own leisure </p>
</body>
</html>