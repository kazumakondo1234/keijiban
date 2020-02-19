<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select*from 4each_keijiban");
        ?>
        
        <div class="logo">
            <img src="4eachblog_logo.jpg">
        </div>
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="main-container">
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
            <div class="nyuuryoku">
                <div class="textnyu">入力フォーム</div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
                <div>
                <label><br>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">   
                </div>
                <div>
                <label><br>コメント</label>
                <br>
                <textarea cols="60" rows="7" name="comments"></textarea>    
                </div>
                <div>
                    <input type="submit" value="投稿する">
                </div>
            </div>    
        </form>   
                <?php
                    while ($row = $stmt->fetch()){
                    
                    echo "<div class='kiji'>";
                    echo "<h4>".$row['title']."</h4>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                        
                    }
                ?>    
                </div>
            </div>
        </main>
    </body>
</html>