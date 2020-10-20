<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form in PHP</title>
    <style>
    #container{
        display: flex;
        justify-content: center;
        padding: 10px;
    }
    </style>
</head>
<body>
    <main >
        <div id="container">
            <form action="formpost.php" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="selector" name="city" placeholder="City">
                </div>
                <div class="form-group">
                <label><input name="role" type="radio"> Teacher</label>
                <label><input name="role" type="radio"> Student</label>
                   
                     
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </main>    
</body>
</html>