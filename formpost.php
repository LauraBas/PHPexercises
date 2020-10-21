<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form Information</title>
    <style>
    li{
        font-size: 2em;
    }
    </style>
</head>
<body>
    <main>
        <section>
            <li>Your name is <?php echo $_POST["name"]; ?></li>
            <li>Your email is <?php echo $_POST["email"]; ?></li>    
            <li>Your city is <?php echo $_POST["city"]; ?></li>
            <li>Your are in the F5 bootcamp as <?php echo $_POST["role"]; ?></li>
        </section>
    </main>
    
</body>
</html>