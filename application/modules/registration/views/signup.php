<!DOCTYPE html>
<head>

    <title> Sign Up </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon.png">

</head>
<body><br>
    <p style="margin-left:34rem; font-size: 24px; color: white;"> Already have an account? <a href="<?php echo base_url();?>Login"> Log In </a></p><br>
    <div id="card" class="card bg-light mb-3" style="width: 30rem; align: centre;">
        <h2 style = "text-align: center;"><u> Registration </u></h2><br>
            <form action="<?php echo base_url(); ?>mdl_register/saverecords" method="post" style = "text-align: center;">
                ID Number:<br>
                    <input type="text" name="ID" required><br><br>
                Names:<br>
                    <input type="text" name="names" required><br><br>
                Email:<br>
                    <input type="text" name="email" required><br><br>
                Gender:<br>
                    <input type="radio" name="sex" value="F"> Female <br>
                    <input type="radio" name="sex" value="M"> Male <br><br>
                Date Of Birth:<br>
                    <input type="date" name="dob" required><br><br>
                Password:<br>
                    <input type="password" name="pass1" required><br><br>
                Confirm Password:<br>
                    <input type="password" name="pass2" required><br><br>

                <button type="button" class="btn btn-outline-info">Submit</button><br>
            </form><br>
    </div>
</body>