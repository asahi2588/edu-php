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
        <input type="text" name="todo">
        <input type="submit" value="追加">
    </form>

    <?PHP
    // セッション開始
    session_start();
    // 配列初期化
    $todolist = array();
    // セッションにToDoリストがあるか
    if (isset($_SESSION['data']) == true) {
        //セッションからToDoリストに代入します
        $todolist = $_SESSION['data'];
    }
    // リクエストパラメーターにToDoが入っているかどうか
    if (isset($_POST["todo"]) == true) {
        // ToDoリストに追加
        $todolist[] = $_POST['todo'];
    }
    //✖のボタンを押されたかの判断
    if (isset($_GET['index']) == true) {
        //削除する配列のインデックス番号を変数に代入
        $x = $_GET['index'];
        //

        unset($todolist[$x]);
        $todolist = array_values($todolist);

    }
    // セッション情報にToDoリストを追加
    $_SESSION['data'] = $todolist;

    // ToDoリストの件数分表示する
    for ($i = 0; $i < count($todolist); $i++) {
        if (isset($todolist[$i]) == true) {
            echo "<p>$todolist[$i]<button onclick='location.href =\"todolist.php?index=$i\"'>✖</button></p>";
        }
    }


    ?>
</body>

</html>
