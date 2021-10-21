<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="myStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Sahel_Shiravand</title>

</head>
<body>


<div id="myHeader">
    <div id="header-wrapper">
        <div id="header_right">
            <div id="img_header">
                <img src="images/header_img.png">
            </div>
            <div id="logIn">
                <span id="mehman">خوش آمدی مهمان!</span>
                <span> - </span>
                <span id="vorud">ورود</span>
                <span>/</span>
                <span id="sabtnam">ثبت نام</span>
            </div>
            <div id="sabd_kharid">
                <div id="basket_right">
                    <img id="basket" src="images/basket.png">
                </div>
                <div id="basket_mid">
                    <span id="sabad_kharid_matn">سبد خرید</span>


                    <div id="basket_left">
                        <span id="sabad_kharid_sefr">0</span>

                    </div>
                </div>
            </div>
        </div>
        <div id="hedear_left">
            <div id="search">
                <input id="jostojoo" name="search" placeholder="جستجوی محصول،دسته،برند...">
                <div id="search_left">
                    <img id="search_img" src="images/search.png">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="header_tow">

    <nav>
        <ul id="navigate">
            <li id="one1">صفحه اصلی</li>

            <li class="nav">لپ تاپ استوک</li>

            <li class="nav">سرور استوک و تجهیزات شبکه</li>

            <li class="nav">قطعات لپ تاپ و کامپیوتر</li>

            <li class="nav">اخبار و مقالات</li>

            <li class="nav">درباره ما(تماس با ما)</li>
        </ul>

    </nav>
</div>
<div id="header_three">

    <div id="header_three_right">
        <div id="header_three_right_top">
            <a class="info"><img src="images/telephone.jpg"></a>
            <a class="info"><img src="images/work-time.jpg"></a>
            <a class="info"><img src="images/pay.jpg"></a>
            <a class="info"><img src="images/ersal.jpg"></a>
            <a class="info"><img src="images/telegram.jpg"></a>
            <a class="info"><img src="images/adress.jpg"></a>
            <a class="info"><img src="images/ghavanin.jpg"></a>
        </div>
        <div id="amargir">
            <div id="amargir_top">
                <span id="amar">آمار</span>
            </div>
            <div class="bazdid">


                <span style="margin-right: -35px;"> تعداد کالا: 630</span>
                <span> بازدید امروز: 4899</span>

                <span>بازدید دیروز: 9309</span>

                <span>بازدید کل: 15423245</span>
            </div>

        </div>


        <div id="mataleb">
            <div id="akhar_matlab">
                <span id="akhar_matlab2">آخرین مطالب</span>
            </div>


            <div id="matlab_bazdid_right">

                <a><img id="img01" src="images/02.jpg"></a>
                <a><img id="img01" src="images/03.jpg"></a>
                <a><img id="img01" src="images/04.jpg"></a>
                <a><img id="img01" src="images/01.jpg"></a>
            </div>
            <div id="matlab_bazdid_left">

                <div id="ax_clock">
                    <span class="matnImg01">  DisplayPortپورتی برای نمایش تصاویر با کیفیت فوق؛</span>
                    <span class="matnImg01_clock">دوشنبه 6 مرداد 1399 - 13:20</span>
                </div>

                <div id="ax_clock">
                    <span class="matnImg01">اطلاعیه شماره 1 استوکالا (اردیبهشت 1399)</span>
                    <span class="matnImg01_clock">سه شنبه 30 اردیبهشت 1399 - 10:06</span>
                </div>

                <div id="ax_clock">
                    <span class="matnImg01">راهنمای جامع خرید مانیتور</span>
                    <span class="matnImg01_clock">شنبه 16 فروردین 1399 - 19:41</span>

                </div>
                <div id="ax_clock">
                    <span class="matnImg01"> ویروس کرونا و آشنایی با روشهای پیشگیری از آن</span>
                    <span class="matnImg01_clock">شنبه 16 فروردین 1399 - 15:59</span>

                </div>
            </div>
        </div>
    </div>


    <div id="header_three_left">
        <div id="mySlider">
            <div id="sliderImg">
                <span id="previous2"></span>
                <span id="next"></span>
                <?php
                $servername='localhost';
                $username='root';
                $pass='';
                $dbname='stokala';
                $conn=new PDO('mysql:host=localhost;dbname=stokala',$username,$pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $sql="select * from tbl_slider";
                $smt=$conn->prepare($sql);
                $smt->execute();
                $result=$smt->fetchAll();
                foreach ($result as $vari){
                    ?>

                <a class="item"><img src="images/slider/<?= $vari['img']; ?>"></a>
<?php } ?>

                <div id="circle111" style="position: absolute;height: 25px;width:60%;float: right;top: 90%;right: 35%">
                    <span style="margin-right: 38px" class="circle11"></span>
                    <span style="margin-right: 12px" class="circle11"></span>
                    <span style="margin-right: 12px" class="circle11"></span>
                    <span style="margin-right: 12px" class="circle11"></span>
                    <span style="margin-right: 12px" class="circle11"></span>

                </div>
            </div>
        </div>

        <div id="towImg">
            <a id="tow_img1"><img src="images/server.jpg"></a>
            <a id="tow_img2"><img src="images/pc.jpg"></a>
        </div>


        <div id="header_three_swiperSlider">
            <div id="matn12">
                <span id="matn">تخفیفی ها</span>
                <span id="matn2">لیست کامل</span>
            </div>

            <div style="position: relative" id="swiperSlider">
                <div id="pre"><span id="previous20"></span></div>
                <div id="nex"><span id="next20"></span></div>

                <ul class="swiper">
                <?php
                $servername='localhost';
                $username='root';
                $pass='';
                $dbname='stokala';
                $conn=new PDO('mysql:host=localhost;dbname=stokala',$username,$pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $sql="select * from tbl_product";
                $smt2=$conn->prepare($sql);
                $smt2->execute();
                $productInfo=$smt2->fetchAll();
                foreach ($productInfo as $vari){
                    ?>
                    <li>
                        <a class="item2"><img id="imgg" src="images/swiper/<?= $vari['img'] ?>">
                            <p class="andazeGheymat"><?= $vari['title'] ?></p></a>

                        <span id="priceId1" class="price"><del><?= number_format($vari['price']) ?></del></span>


                        <?php
                        $x=($vari['price']*$vari['takhfif'])/100;
                        $discount=$vari['price']-$x;
                        ?>
                        <span id="priceId2" class="price"><?=  number_format($discount) ?>تومان</span>

                    </li>

                <?php } ?>
                </ul>
            </div>
        </div>


        <div id="header_three_notswiperSlider">
            <div id="matn12">
                <span id="matn02">جدیدترین ها</span>
                <span id="matn22">لیست کامل</span>
            </div>

            <div id="notswiperSlider">

                <ul class="notswiper">

                    <?php
                    $servername='localhost';
                    $username='root';
                    $pass='';
                    $dbname='stokala';
                    $conn=new PDO('mysql:host=localhost;dbname=stokala',$username,$pass);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    $sql="select * from tbl_notSwiper";
                    $smt2a=$conn->prepare($sql);
                    $smt2a->execute();
                    $productInfo2=$smt2a->fetchAll();
                    foreach ($productInfo2 as $vari){
                        ?>
                        <li>
                            <a class="item22"><img style="margin-top:5px;width: 100%" src="images/notSwiper/<?= $vari['img'] ?>">
                                <p class="andazeGheymat"><?= $vari['title'] ?></p></a>

                            <span id="priceId1" class="price"><del><?= number_format($vari['price']) ?></del></span>


                            <?php
                            $x=($vari['price']*$vari['takhfif'])/100;
                            $discount=$vari['price']-$x;
                            ?>
                            <span id="priceId2" class="price"><?=  number_format($discount) ?>تومان</span>

                        </li>




                    <?php } ?>

                </ul>


                <div id="notswiperSlider">

                    <ul class="notswiper">

                        <?php
                        $servername='localhost';
                        $username='root';
                        $pass='';
                        $dbname='stokala';
                        $conn=new PDO('mysql:host=localhost;dbname=stokala',$username,$pass);
                        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                        $sql="select * from tbl_notSwiper2";
                        $smt2ab=$conn->prepare($sql);
                        $smt2ab->execute();
                        $productInfo2a=$smt2ab->fetchAll();
                        foreach ($productInfo2a as $vari){
                            ?>
                            <li>
                                <a class="item22"><img style="margin-top:5px;width: 100%" src="images/notSwiper2/<?= $vari['img'] ?>">
                                    <p class="andazeGheymat"><?= $vari['title'] ?></p></a>

                                <span id="priceId1" class="price"><del><?= number_format($vari['price']) ?></del></span>


                                <?php
                                $x=($vari['price']*$vari['takhfif'])/100;
                                $discount=$vari['price']-$x;
                                ?>
                                <span id="priceId2" class="price"><?=  number_format($discount) ?>تومان</span>

                            </li>




                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>


        <div id="header_three_swiperSlider2">
            <div id="matn12b">
                <span id="matnb">پر بازدیدترین ها</span>
                <span id="matn2b">لیست کامل</span>
            </div>

            <div style="position: relative" id="swiperSlider2">
                <div id="preb"><span id="previous20b"></span></div>
                <div id="nexb"><span id="next20b"></span></div>

                <ul class="swiper2">


                    <?php
                    $servername='localhost';
                    $username='root';
                    $pass='';
                    $dbname='stokala';
                    $conn=new PDO('mysql:host=localhost;dbname=stokala',$username,$pass);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    $sql="select * from tbl_notSwiper3";
                    $smt2abc=$conn->prepare($sql);
                    $smt2abc->execute();
                    $productInfo2ab=$smt2abc->fetchAll();
                    foreach ($productInfo2ab as $vari){
                        ?>
                        <li>
                            <a class="item2b"><img style="margin-top:5px;width: 100%" src="images/notSwiper3/<?= $vari['img'] ?>">
                                <p class="andazeGheymat2"><?= $vari['title'] ?></p></a>

                            <span id="priceId1b" class="price2"><del><?= number_format($vari['price']) ?></del></span>


                            <?php
                            $x=($vari['price']*$vari['takhfif'])/100;
                            $discount=$vari['price']-$x;
                            ?>
                            <span id="priceId2b" class="price2"><?=  number_format($discount) ?>تومان</span>

                        </li>




                    <?php } ?>

                </ul>
            </div>
        </div>


        <div id="header_three_swiperSlider2c">
            <div id="matn12bc">
                <span id="matnbc">ویژه ها</span>
                <span id="matn2bc">لیست کامل</span>
            </div>

            <div style="position: relative" id="swiperSlider2c">
                <div id="prebc"><span id="previous20bc"></span></div>
                <div id="nexbc"><span id="next20bc"></span></div>

                <ul class="swiper2c">

                    <?php
                    $servername='localhost';
                    $username='root';
                    $pass='';
                    $dbname='stokala';
                    $conn=new PDO('mysql:host=localhost;dbname=stokala',$username,$pass);
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                    $sql="select * from tbl_notSwiper4";
                    $smt2abcd=$conn->prepare($sql);
                    $smt2abcd->execute();
                    $productInfo2abc=$smt2abcd->fetchAll();
                    foreach ($productInfo2abc as $vari){
                        ?>
                        <li>
                            <a class="item2bc"><img style="margin-top:5px;width: 100%" src="images/notSwiper4/<?= $vari['img'] ?>">
                                <p class="andazeGheymat2c"><?= $vari['title'] ?></p></a>

                            <span id="priceId1bc" class="price2c"><del><?= number_format($vari['price']) ?></del></span>


                            <?php
                            $x=($vari['price']*$vari['takhfif'])/100;
                            $discount=$vari['price']-$x;
                            ?>
                            <span id="priceId2bc" class="price2c"><?=  number_format($discount) ?>تومان</span>

                        </li>




                    <?php } ?>


                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div id="foter_top">
        <span class="stokala1" id="stokala1">هر استوکی استوکالا نیست</span>
        <span class="stokala1" id="stokala1">پیگیری سفارش</span>
        <span class="stokala1" id="stokala2">021-91303008</span>
        <span class="stokala1" id="stokala3">info@Stokala.com</span>

    </div>
    <div id="foter_mid">
        <span id="stokala03" class="stokala3"> تحویل اکسپرس</span>
        <span id="stokala003" class="stokala3"> 7 روز ضمانت بازگشت</span>
        <span id="stokala0003" class="stokala3"> پرداخت در محل</span>
        <span id="stokala00003" class="stokala3">ضمانت اصل بودن کالا</span>
    </div>
    <div id="foter_bottom">
        <div id="foter_bottom_right">
            <span id="tozihat">رضایت مشتری الویت اول ماست</span>
            <span id="tozihat2"><h>فروشگاه استوکالا به عنوان اولین و قدیمی ترین سایت مرجع تخصصی معرفی و فروش لپ تاپ استوک ، کیس های کامل و مانیتور استوک ، سیستم های رندرینگ و سرورهای استوک اچ پی در اینترنت و همچنین بیش از 12 سال سابقه فعالیت در قلب بازار کامپیوتر تهران شناخته میشود. خدمات متمایز ، کیفیت بالای محصولات همچنین پشتیبانی و خدمات پس از فروش قوی این مجموعه باعث شده علاوه بر اطمینان روز افزون مشتریان گرامی به این مجموعه ، میزان بازدید این سایت در طی این سال ها ار مرز 15 میلیون نفر عبور کند.</h></span>
        </div>
        <div id="foter_bottom_left">
            <a id="etebar"><img id="etebar2" src="images/logo.aspx.png">
        </div>

        <div id="foter_bottom_left_bottom">
            <a id="etebar3"><img id="etebar4" src="images/telegram2.png">
                <a id="etebar5"><img id="etebar6" src="images/instagram.png">
                    <a id="etebar7"><img id="etebar8" src="images/facebook.png">
                        <a id="etebar9"><img id="etebar10" src="images/twitter.png">
                            <a id="etebar11"><img id="etebar12" src="images/rss.png">
                                <a id="etebar13"><img id="etebar14" src="images/envelope2.png">

                                </a>
        </div>
    </div>
</div>


</body>




<script>
    var sliderscrollb = $("#header_three_swiperSlider2");
    var sliderUlb = sliderscrollb.find('#swiperSlider2 .swiper2');
    var sliderItemsb = sliderUlb.find('li');
    var numlib = sliderItemsb.length;
    var numsliderb = Math.ceil(numlib / 4);
    var maxmarginrightb = -(numsliderb - 1) * 217;

    function slider2b(direction) {

        var marginrightoldb = sliderUl.css('margin-right');
        var marginrightoldb = parseFloat(marginrightoldb);
        var marginrightnewb;
        if (direction == 'right') {
            marginrightnewb = marginrightoldb - 217;

        }
        if (direction == 'left') {
            marginrightnewb = marginrightoldb + 217;
        }
        if (marginrightnewb < maxmarginrightb) {
            marginrightnewb = 0;
        }
        if (marginrightnewb > 0) {
            marginrightnewb = maxmarginrightb;
        }
        sliderUlb.animate({'marginRight': marginrightnewb}, 1500);
    }

    $('#previous20b').click(function () {
        slider2b('right');
    })
    $('#next20b').click(function () {
        slider2b('left');
    })
</script>
<script>
    var sliderscroll = $("#header_three_swiperSlider");
    var sliderUl = sliderscroll.find('#swiperSlider .swiper');
    var sliderItems = sliderUl.find('li');
    var numli = sliderItems.length;
    var numslider = Math.ceil(numli / 4);
    var maxmarginright = -(numslider - 1) * 217;

    function slider2(direction) {

        var marginrightold = sliderUl.css('margin-right');
        var marginrightold = parseFloat(marginrightold);
        var marginrightnew;
        if (direction == 'right') {
            marginrightnew = marginrightold - 217;

        }
        if (direction == 'left') {
            marginrightnew = marginrightold + 217;
        }
        if (marginrightnew < maxmarginright) {
            marginrightnew = 0;
        }
        if (marginrightnew > 0) {
            marginrightnew = maxmarginright;
        }
        sliderUl.animate({'marginRight': marginrightnew}, 1500);
    }

    $('#previous20').click(function () {
        slider2('right');
    })
    $('#next20').click(function () {
        slider2('left');
    })
</script>

<script>
    var sliderscrollbc = $("#header_three_swiperSlider2c");
    var sliderUlbc = sliderscrollbc.find('#swiperSlider2c .swiper2c');
    var sliderItemsbc = sliderUlbc.find('li');
    var numlibc = sliderItemsbc.length;
    var numsliderbc = Math.ceil(numlibc / 4);
    var maxmarginrightbc = -(numsliderbc - 1) * 217;

    function slider2bc(direction) {

        var marginrightoldbc = sliderUlbc.css('margin-right');
        var marginrightoldbc = parseFloat(marginrightoldbc);
        var marginrightnewbc;
        if (direction == 'right') {
            marginrightnewbc = marginrightoldbc - 217;

        }
        if (direction == 'left') {
            marginrightnewbc = marginrightoldbc + 217;
        }
        if (marginrightnewbc < maxmarginrightbc) {
            marginrightnewbc = 0;
        }
        if (marginrightnewbc > 0) {
            marginrightnewbc = maxmarginrightbc;
        }
        sliderUlbc.animate({'marginRight': marginrightnewbc}, 1500);
    }

    $('#previous20bc').click(function () {
        slider2bc('right');
    })
    $('#next20bc').click(function () {
        slider2bc('left');
    })
</script>

<script>


    var sliderTag = $('#mySlider');
    var sliderItem = sliderTag.find('.item');
    var neg = sliderTag.find('#circle111 span');
    var nextSlider = 1;
    var sumItem = sliderItem.length;
    var timeOut = 3000;
    slider();
    var setTime = setInterval(slider, timeOut)

    function slider() {
        if (nextSlider > sumItem) {
            nextSlider = 1;
        }


        if (nextSlider < 1) {
            nextSlider = sumItem;
        }
        sliderItem.hide();
        sliderItem.eq(nextSlider - 1).fadeIn(300);
        neg.removeClass('active');
        neg.eq(nextSlider - 1).addClass('active');
        nextSlider++;
    }

    sliderTag.mouseleave(function () {
        clearInterval(setTime);
        setTime = setInterval(slider, timeOut);
    });
    $('#next').click(function () {
        clearInterval(setTime);
        goto2();


    });
    $('#previous2').click(function () {
        clearInterval(setTime);
        goto1();
    });

    function goto1() {
        slider();
    }

    function goto2() {
        nextSlider = nextSlider - 2;
        slider();
    }


    function gotoSlider(index) {
        nextSlider = index;
        slider();
    }

    $('#circle111 span').click(function () {
        clearInterval(setTime);
        var index = $(this).index();
        gotoSlider(index + 1);


    });

</script>

</html>

