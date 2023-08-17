<?php
session_start(); 
    $id = $_POST['id'];

    $conn = mysqli_connect('localhost' , 'root' , '@mazingGalaxy1390' , 'crud_db');
    $qu = mysqli_query($conn, "SELECT * FROM `user`");

    // $data = [];
    // while($row = mysqli_fetch_assoc($qu)){
    //     $data[] = $row;
    // }

        $x = mysqli_num_rows($qu);
        for($i = 0; $i < $x ; $i++){
            $data[] = mysqli_fetch_assoc($qu);
        }

    echo '<pre>';
    print_r($data);
    echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
           
        </tr>
        <?php foreach($data as $user): ?>
            <tr>
                <th><?php echo $user['user_id'] ?></th>
                <th><?php echo $user['user_name'] ?></th>
                <th><?php echo $user['user_email'] ?></th>
                <th><?php echo $user['user_password'] ?></th>
                <?php if(!empty($_SESSION['user'])): ?>
                <th>update</th>
                <th>delete</th>
                <?php endif; ?>
            </tr>
           <?php endforeach; ?>
    </table>
    <form method="POST" action="index.php">
        <input type="text" name="id"> 
        <input type="submit" value="log-in" name="log">
    </form>
</body>
</html>