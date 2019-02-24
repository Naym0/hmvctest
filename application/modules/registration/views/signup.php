<!DOCTYPE html>
<head>
    <title> Sign Up </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>application/assets/style.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>application/assets/favicon.png">

    <style>
        body, h2{
            font-family: 'Lobster', cursive;
            font-size: 20px;
        }
        h2 {
            font-family: 'Lobster', cursive;
            font-size: 26px;
        }
    </style>

</head>
<body>
    <div class="card">
    <div class="card-body">
        <h2 style = "text-align: center;"><u> Registration </u></h2><br>
            <form action="http://localhost/hmvc/mdl_register/saverecords" method="post" style = "text-align: center;">
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
                    <input type="text" name="pass1" required><br><br>
                Confirm Password:<br>
                    <input type="text" name="pass2" required><br><br>

                <button type="button" class="btn btn-outline-info">Submit</button>
            </form>
    </div>
    </div>
</body>