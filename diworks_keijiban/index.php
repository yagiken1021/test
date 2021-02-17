<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>diworks掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lessen02;host=localhost;","root","");
    $stmt=$pdo->query("select * from diworks_keijiban");
    
    
    ?>

    <header>
        <div class="logo">
            <img src="diblog_logo.jpg">
        </div>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    <main>
        <div class="main_container">
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="40" name="handlename">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="40" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="45" rows="7" name="comments"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="送信する">
                    </div>
                </form>
                <?php

                echo "<div class='kiji'>";
                while($row = $stmt->fetch()){
                    echo "<div class='kiji'>";
                    echo "<div class='contents'>";
                    echo "<h4>".$row['title']."</h4>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
                    ?>

            </div>
        </div>
        <div class="right">
            <h4>人気の記事</h4>
            <p>PHPオススメ本</p>
            <p>PHP　MyAdminの使い方</p>
            <p>今人気のエディタTop5</p>
            <p>HTMLの基礎</p>

            <h4>オススメリンク</h4>
            <p>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</p>
            <p>PHP　MyAdminの使い方</p>
            <p>今人気のエディタTop5</p>
            <p>HTMLの基礎</p>

            <h4>カテゴリ</h4>
            <p>HTML</p>
            <p>PHP</p>
            <p>MySQL</p>
            <p>Javascript</p>

        </div>
        </div>
    </main>
    <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
    </footer>
</body>

</html>
