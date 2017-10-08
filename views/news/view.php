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
    <link rel="stylesheet" href="/template/css/item-page.css">

    <title>Title</title>

</head>
<body>

<main class="center-item-page">
    <div class="item-bye-with">
        <p>С этим товаром покупают:</p>
        <div class="on1">
            <a href="#"><img src="/template/img/item-bye-with/zu1.jpg" alt=""></a>
            <p><a href="#">Nitecore F1</a></p>
            <p><a href="#">Зарядное устройство + PowerBank</a></p>
        </div>
        <div class="on2">
            <a href="#"><img src="/template/img/item-bye-with/foto2.jpg" alt=""></a>
            <p><a href="#">Плата защиты</a></p>
            <p><a href="#">Для одного Li-Ion аккумулятора 18650</a></p>
        </div>
    </div>
    <div class="center-item-page-photo">
        <div class="foto-1">
            <div class="">
                <p><a href="/template/img/lightBox/foto1.jpg" class="thumbnail">
                        <img src="/template/img/lightBox/foto1-thumb.jpg" alt="" class="img-responsive">
                    </a></p>
            </div>
        </div>
        <div class="fotos">
            <div class="">
                <a href="/template/img/lightBox/foto2.jpg" class="thumbnail" title="San Francisco">
                    <img src="/template/img/lightBox/foto2-thumb.jpg" alt="">
                </a>
            </div>
            <div class="">
                <a href="/template/img/lightBox/foto3.jpg" class="thumbnail" title="Rotterdam">
                    <img src="/template/img/lightBox/foto3-thumb.jpg" alt="">
                </a>
            </div>
            <div class="">
                <a href="/template/img/lightBox/foto4.jpg" class="thumbnail" title="New York">
                    <img src="/template/img/lightBox/foto4-thumb.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
    <div class="page-description">
        <h3 class="akum-brand">Fujitsu (AA)</h3>
        <p class="akum-capicity">Емкость: 2450mAh</p>
        <p class="akum-consist">Химический состав: Ni-MH</p>
        <p class="akum-voltage">Вольтаж: 1.2V</p>
        <p class="akum-else-info"></p>
        <div class="full-item-about-form">
            <button class="btn btn-primary new" type="button">85 грн.</button>
            <button href="#" class="btn btn-default" type="button"><span class="fa fa-cart-arrow-down green "></span> В корзину</button>
        </div>
        <div class="container">
            <ul id="accordion">
                <li>
                    <a class="active">Описание</a>
                    <div class="box active">
                        <h5></h5>
                        <p>Описание описание описание описание описание Описание описание описание описание описание
                            Описание описание описание описание описаниеОписание описание описание описание описание
                            Описание описание описание описание описаниеОписание описание описание описание описание
                            Описание описание описание описание описаниеОписание описание описание описание описание
                        </p>
                    </div>
                </li>
                <li>
                    <a>Технические хар-ки</a>
                    <div class="box">
                        <h5></h5>
                        <p>Технические хар-ки Технические хар-ки Технические хар-ки Технические хар-ки Технические хар-ки</p>
                    </div>
                </li>
            </ul>
        </div>






    </div>
</main>
<div class="page-item-info">Здесь будет описание товара (скорее всего аккордеон)</div>


</div>


<script src="/template/libs/jquery/jquery-3.2.1.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.viewbox.js"></script>
<script>
    $(function () {

        $('.thumbnail').viewbox();
        $('.thumbnail-2').viewbox();

        (function () {
            var vb = $('.popup-link').viewbox();
            $('.popup-open-button').click(function () {
                vb.trigger('viewbox.open');
            });
            $('.close-button').click(function () {
                vb.trigger('viewbox.close');
            });
        })();

    });


    $(document).on('click', '#accordion>li>a', function () {
        $(this).siblings('.box').addClass('active');
        $(this).closest('li').siblings('li').find('.box').removeClass('active');
    })
    $('#accordion').on('click', 'li>a', function () {
        $('#accordion li a.active').removeClass('active');
        $(this).addClass('active');
    })
</script>
</body>
</html>
