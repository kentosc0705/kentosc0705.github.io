

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_sheet1.css">
        <link rel="stylesheet" href="inquiry.css">
        <title>泉佐野JFCホームページ</title>
    </head>

    <body>
        <header>
            <div class="header01">
                <div class="logo">
                    <a href="index.html">
                        <img src="泉佐野JFCエンブレム.jpg" alt="泉佐野JFC" height=80px>
                        <div class="team_name">
                            <a class="team_name1">IZUMISANO</a>
                            <a class="team_name2">Junior Football Club</a>
                        </div>
                    </a>
                    <nav id="navigation">
                        <ul id="nav_list">
                            <li>
                                <a href="index.html" id="nav_top">HOME</a>
                            </li>
                            <li>
                                <a href="about_team.html" id="nav_about">チーム情報</a>
                            </li>
                            <li>
                                <a href="result.html" id="nav_result">試合結果</a>
                            </li>
                            <li>
                                <a href="gallery.html" id="nav_gallery">ギャラリー</a>
                            </li>
                            <li class="active">
                                <a href="inquiry.html" id="nav_inquiry">お問い合わせ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
        <div class="content">
            <div class="title">
                <h1>Inquiry</h1>
                <h2>お問い合わせ</h2>
            </div>
            <div>
                <?php
                    mb_language("Japanese");
                    mb_internal_encoding("UTF-8");
                    $name = $_POST['name'];
                    $content = $_POST['content'];
                    if(mb_send_mail('kentotvxqbabymetal@gmail.com', $name, $content)){
                        echo "メールを送信しました";
                    } else {
                        echo "メールの送信に失敗しました";
                    };
                ?>
                <p>お名前：<?php echo htmlspecialchars(@$_POST['name'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>メールアドレス：<?php echo htmlspecialchars(@$_POST['email'], ENT_QUOTES, 'UTF-8') ?></p>
                <p>内容：<?php echo htmlspecialchars(@$_POST['content'], ENT_QUOTES, 'UTF-8') ?></p>
            </div>
        </div>

        <footer>
            <div class="inner_footer">
                <div class="club_info">
                    <div class="footer_image">
                        <img src="泉佐野JFCエンブレム.png" alt="泉佐野JFC" height=150px>
                        <h5>泉佐野JFC</h5>
                    </div>
                    <div class="alliances">
                        <h4>加盟団体</h4>
                        <ul id="alliance_list">
                            <li>泉佐野サッカー連盟</li>
                            <li>阪南少年サッカー連盟</li>
                            <li>大阪府サッカー協会（第4種）</li>
                        </ul>
                    </div>
                </div>
                <ul id="footer_list">
                    <li>
                        <a href="index.html" id="nav_top">HOME</a>
                    </li>
                    <li>
                        <a href="about_team.html" id="nav_about">チーム情報</a>
                    </li>
                    <li>
                        <a href="result.html" id="nav_result">試合結果</a>
                    </li>
                    <li>
                        <a href="gallery.html" id="nav_gallery">ギャラリー</a>
                    </li>
                    <li>
                        <a href="inquiry.html" id="nav_inquiry">お問い合わせ</a>
                    </li>
                </ul>
            </div>
            <div class="copyright">
                <small>&copy; 2020 泉佐野JFC</small>
            </div>
        </footer>


    </body>

</html>