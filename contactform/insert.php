<?php 
mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;charset=utf8;","root","");
$pdo->exec("insert into contactform(name,mail,age,comment) values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comment']."');");
?>

<!doctypeHTML>
<html lang="ja">
    <head>  
        <meta charset="utf-8">
        <title>お問合わせフォームを作る</title>
        <link rel="stylesheet"type="text/css" href="style2.css">
    </head>
    
    <body>
        <h1>お問合わせフォーム</h1>
        <div class="confirm">
            <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
            </p>
        </div>
    </body>
</html>