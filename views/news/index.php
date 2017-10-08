<?php
// подключение библиотек

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/template/css/normalize.css">
    <link rel="stylesheet" href="/template/css/reset.css">
    <link rel="stylesheet" href="/template/css/main.css">

    <link rel="stylesheet" href="/template/css/fonts.css">
    <link rel="stylesheet" href="/template/css/razdel_18650.css">

    <title>Title</title>

</head>
<body>
<div class="wrapper">
    <div class="mini-box">
        <div class="a">
            <a href=""> <img src="/template/img/miniList/KeepPower_18650_200x200.jpg" title="С защитой" alt="С защитой" ><br>С защитой</a>

        </div>
        <div class="b">
            <a href=""> <img src="/template/img/miniList/KeepPower_18650_200x200.jpg" title="Без защиты" alt="Без защиты" ><br>Без защиты </a>
        </div>
        <div class="c">
            <a href=""> <img src="/template/img/miniList/KeepPower_18650_200x200.jpg" title="Высокотоковые (IMR)" alt="Высокотоковые (IMR)"><br>Высокотоковые (IMR)</a>
        </div>
        <div class="d">
            <a href=""> <img src="/template/img/miniList/KeepPower_18650_200x200.jpg" title="Для электронных сигарет и модов" alt="Для электронных сигарет и модов"><br>Для электронных сигарет и модов </a>
        </div>

        <div class="mini_link_razdel">
            <a href="#">Samsung</a>
            <a href="#">Sanyo</a>
            <a href="#">Panasonic</a>
            <a href="#">Sony</a>
            <a href="#">MastAK</a>
            <a href="#">Keeppower</a>
        </div>
    </div>

    <main class="center-single-akumulator">
        <?php foreach ($newsList as $newsItem): ?>
           <div class="single-item">
<!--          во view/News/index.php     в цикле функции getNewsList() определить все переменные-->
                <a href="/news/<?=$newsItem['id']?>"><img src="<?=$newsItem['img']?>" alt=""></a>
                <h3 class="akum-title"><a href="/news/<?=$newsItem['id']?>"><?=$newsItem['title']?></span></a></h3>
                <p class="akum-capicity">34 mAh</p>
                <p class="akum-nominal"></p>
                <p class="akum-info">ni mh 5v</p>
                <div class="full-item-about-form">
                    <button class="btn btn-primary" type="button">77 грн.</button>
                </div>
            </div>
        <?php endforeach;?>

    </main>

</div>


<script src="/template/libs/jquery/jquery-3.2.1.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        function equalHeiht() {
            document.querySelector('.a').style.height = 'auto';
            document.querySelector('.b').style.height = 'auto';
            document.querySelector('.c').style.height = 'auto';
            document.querySelector('.d').style.height = 'auto';

            var bitovie = document.querySelector('.a').offsetHeight;
            var tehnika = document.querySelector('.b').offsetHeight;
            var svinec = document.querySelector('.c').offsetHeight;
            var shurupovert = document.querySelector('.d').offsetHeight;

            var max = Math.max(bitovie, tehnika, svinec, shurupovert);
            document.querySelector('.a').style.height = max+'px';
            document.querySelector('.b').style.height = max+'px';
            document.querySelector('.c').style.height = max+'px';
            document.querySelector('.d').style.height = max+'px';

        }

        equalHeiht();
        window.onresize = equalHeiht;


    });
</script>
</body>
</html>
