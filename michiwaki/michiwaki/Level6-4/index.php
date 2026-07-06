<?php

$cookie_name = "user";

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    try {  
        //例外が起こる可能性
        echo saveName($_POST["name"]);

    } catch (Exception $e) {
        //例外を受けとる
        echo $e->getMessage();

    }finally {
        echo "処理が終了しました\n";
    }
}

if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
} else {
   $cookie_value =""; 
}  

function saveName($name)
{
    if ($name == ""){
        throw new Exception("名前が空です");
    }
    //cookie保存
    setcookie("user", $name, time() + 10);

    return "保存しました\n";

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>P-4課題</title>
</head>
<body>
    <h2>名前を入力してください</h2>
    <form method = "post">
        <p><label>名前<input type="text" name="name"></label></p>
        <p><input type="submit" value="送信"></p>
</form>

<?php
if ($cookie_value !==""){
    echo "クッキーの値「" . $cookie_value . "」\n";
} else {
    echo "クッキーはありません\n";
}
?>

</body>
</html>


