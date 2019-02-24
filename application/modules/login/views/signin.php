<!DOCTYPE html>
<head>

    <title> Log In </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon.png">

</head>
<body><br>
    <div id="card" class="card bg-light mb-3" style="width: 30rem; margin-top:6.5rem; ">
        <h2><u> Log In </u></h2><br>
            <form action="processes/AutRegistration.php" method="post">
                ID Number:<br>
                    <input type="text" name="ID" required><br><br>
                Password:<br>
                    <input type="password" name="pass" required><br><br>

                <button type="button" class="btn btn-outline-info">Log In</button>
            
                <br><br>

                <p>If you dont have an account, register <a href="<?php echo base_url();?>Registration">here </p>
            </form><br>
    </div>
</body>