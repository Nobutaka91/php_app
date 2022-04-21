<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <p>何かお話ししてください</p>
    <form method="post">
        <input type="text" name="a" />
        <input type="submit" value="送信" />
    </form>
    <?php
        $moji = htmlspecialchars($_POST["a"], ENT_NOQUOTES);
        $f = fopen("chat.txt", "at");
        fwrite($f, $moji."\n");
        fclose($f);
        print "<pre>";
        readfile("chat.txt");
        print "</pre>";
    ?>
    <img src="img/neko.png">
</body>

</html>