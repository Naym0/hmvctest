<!DOCTYPE html>
<head>
    <title> Log Up </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Righteous" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="application/modules/registration/assets/style.css">
    <link rel="icon" type="image/png" href="application/modules/registration/assets/favicon.png">

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
        <h2 style = "text-align: center;"><u> Log In </u></h2><br>
            <form action="processes/AutRegistration.php" method="post" style = "text-align: center;">
                ID Number:<br>
                    <input type="text" name="ID" required><br><br>
                Names:<br>
                    <input type="text" name="names" required><br><br>

                <button type="button" class="btn btn-outline-info">Log In</button>
            </form>
    </div>
    </div>
</body>