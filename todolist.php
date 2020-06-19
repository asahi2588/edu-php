<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>今、やるべき事。</h1>
    <form action="todolist.php" method="POST">
    <input type="text" name="todolist">
    <input type="submit" value="追加">
    </form>

    <?PHP
   echo $_POST["todolist"];
    ?>
</body>
</html>