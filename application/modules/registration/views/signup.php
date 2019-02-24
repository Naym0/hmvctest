<!DOCTYPE html>
<head>

    <title> Sign Up </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/icon.png">

</head>
<body><br>
    
    <p style="margin-left:33rem; font-size: 24px; color: white;"> Already have an account? <a href="<?php echo base_url();?>Login"> Log In </a></p><br>
    <div id="card" class="card bg-light mb-3" style="width: 30rem; align: centre;">
        <h2><u> Registration </u></h2><br>

    <?php echo form_open('Registration/form_validation'); ?>
            
            <form action="<?php echo base_url();?>Registration/form_validation" method="post">
                ID Number:<br>
                    <input type="text" name="ID" value="<?php echo set_value('ID'); ?>" required><br><br>
                Names:<br>
                    <input type="text" name="names" value="<?php echo set_value('names'); ?>" required><br><br>
                Email:<br>
                    <?php echo form_error('email'); ?>
                    <input type="text" name="email" value="<?php echo set_value('email'); ?>" required><br><br>
                Gender:<br>
                    <?php echo form_error('sex'); ?>
                    <input type="radio" name="sex" value="F"> Female <br>
                    <input type="radio" name="sex" value="M"> Male <br><br>
                Date Of Birth:<br>
                    <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" required><br><br>
                Password:<br>
                    <?php echo form_error('pass1'); ?>
                    <input type="password" name="pass1" value="<?php echo set_value('pass1'); ?>" required><br><br>
                Confirm Password:<br>
                    <?php echo form_error('pass2'); ?>
                    <input type="password" name="pass2" value="<?php echo set_value('pass2'); ?>" required><br><br>

                <button type="submit" class="btn btn-outline-info">Submit</button><br>
            </form><br>
    </div>
</body>