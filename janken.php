<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>janken</title>
</head>
<body>
    <?php 
        print"<p>じゃんけんしよう</p>";
        $a = rand(1,3);
        if($a == 1) {
            print "<img src='img/gu.png'>";
        }
        if($a == 2) {
            print "<img src='img/choki.png'>";
        }
        if($a == 3) {
            print "<img src='img/pa.png'>";
        }
    ?>
</body>
</html>