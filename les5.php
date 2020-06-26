<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php
 include "config.php";
        $sql= "select * from images";
       $res = mysqli_query($connect, $sql);
        while($data=mysqli_fetch_assoc($res)) {
            echo "Картинка".$data['name'].$data['path'];
        }
       ?>
    </header>
</body>

</html>
