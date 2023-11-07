<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="style.css">
    <title> Practice </title>
</head>
<body>
    <h1>Please Sign- Up</h1>
    <form action='connect.php' method="POST">
        <label for="name">Name</label>
        <input type='name' name='name' id="name" required/><br> <br>

        <label for="last">Last Name</label>
        <input type='text' name='last' id="last" required/><br> <br>

        <label for="password">Password</label>
        <input type='text' name='password' id="password" required/><br> <br>

        <input type='submit' name='submit' id="submit"/>

    
    </form>
    
</body>
</html>