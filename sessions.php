<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php session_start() ?>
</head>
<body>
    <?php   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $SESSION['username']=$username;
    $SESSION['password']= $password;

    echo 'Session started';
    ?>
    <a href="user_details.php">Click to view user details</a>
</body>
</html>