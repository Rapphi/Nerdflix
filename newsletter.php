<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>NerdFlix | Subscribe to our Newsletter</title>
</head>
<body>
<?php include_once 'header.php'; ?>
<h1>Best Nerd movies right into your Mailbox</h1>

<h2>Subscribe to the Best Nerd movies</h2>

<form action="Includes/mailchimp-inc.php" method="post">
    <input type="email" name="emailnews" id="emailnews" placeholder="type your email adress">
    <input type="submit" name="submit" value="Sign Up">
</form>
<main>
   

</main>

<?php include_once 'footer.php'; ?>

</body>
</html>