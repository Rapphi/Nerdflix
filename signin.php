<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>NerdFlix | SignIn</title>
</head>
<body>
    <?php
        include_once 'header.php';
    ?>
    <h2>Sign In to NerdFlix | Nerd Videos by the Thousands</h2>
    <form action="Includes/signin-inc.php" method="post">
        <input type="text" name="fullname" id="fullname" placeholder="enter your fullname"><br>
        <input type="email" name="email" id="email" placeholder="enter your email"><br>
        <input type="text" name="username" id="username" placeholder="choose a username"><br>
        <input type="password" name="password1" id="password1" placeholder="enter your password"><br>
        <input type="password" name="password2" id="password2" placeholder="confirm your password"><br>
        <button type="submit" name="submit">Sign In</button>
    </form>
</body>
</html>


