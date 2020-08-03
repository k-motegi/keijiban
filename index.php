<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>4eachblog_keijiban</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=motegi;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");
        
        ?>
        
        <header>
            <img src="4eachblog_logo.jpg">
            <ul class="menu">
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
                        <div>
                            <h3 class="h3class1">入力フォーム</h3>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>
                        
                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>
                        
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="50" rows="7" name="comments"></textarea>
                        </div>
                        
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>
                    
                    
                    <?php
                    
                    while($row = $stmt->fetch()) {
                        echo "<div class='kiji'>";
                            echo "<h3>".$row['title']."</h3>";
                            echo "<div class='contents'>";
                                echo $row['comments'];
                                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                    
                    ?>
                </div>
                
                <div class="right">
                    <h3 class="h3class2">人気の記事</h3>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ　Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    
                    <h3 class="h3class2">オススメリンク</h3>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                    
                    <h3 class="h3class2">カテゴリ</h3>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
            
        </main>
    </body>
    
    <footer>
        copyright©internous|4each blog the which provides At to Z about programming.
    </footer>
</html>