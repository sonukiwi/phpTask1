<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <input required placeholder="Username" type="text" name="user_name" >
        <input required placeholder="Password" type="text" name="user_password" >
        <button type="submit" style="margin-top:16px;padding:8px 16px;background:green;color:white;
        cursor:pointer;border:none;">Submit</button>
    </form>
    <?php
    include 'connection.php'; 
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $db = new Database(); 
        $user_name = $_POST['user_name']; 
        $user_password = $_POST['user_password']; 
        $db->query("INSERT INTO phptask1(`user_name`,`user_password`) VALUES('$user_name','$user_password')");
    }
    ?>
</body>
</html>