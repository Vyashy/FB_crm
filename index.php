<?
//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("utm_source", $_GET['utm_source'], time() + $period_cookie);
    setcookie("utm_medium", $_GET['utm_medium'], time() + $period_cookie);
    setcookie("utm_term", $_GET['utm_term'], time() + $period_cookie);
    setcookie("utm_content", $_GET['utm_content'], time() + $period_cookie);
    setcookie("utm_campaign", $_GET['utm_campaign'], time() + $period_cookie);
}

if (!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

$price_new = 490;
$sale = 60;
$product_id = 2552;
$product_name = 'Простынь с подогревом. ';
$currency = 'грн';
$marga = 0;
$ga = '';
$price_old = floor(($price_new * 100) / (100 - $sale));

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'ua') {
        $lang = 'ua';
    } else if ($_GET['lang'] == 'ru') {
        $lang = 'ru';
    } else {
        $lang = 'ru';
    }

}
else {
    $lang = 'ru';
}
?>

<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

	<meta charset="UTF-8">
    <link rel="shortcut icon" href="imgs/favicon.svg" type="image/png">
    <title>CRM система для продаж в Facebook</title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/function.css">
	<link rel="stylesheet" href="css/feed.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/arctic-modal.css">
    <link rel="stylesheet" href="css/video.css">
    <link rel="stylesheet" href="css/simple.css">
	<link rel="stylesheet" href="css/change.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<header>
	<div class="wrapper">
		  <div class="header-items">

         <div class="header-item header-logo">
         	<a href="">
         		<svg style="width:70px; height: 70px; fill: #fff" id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-1{ }</style></defs><path class="cls-1000" d="M767,222.28H233.32A36.52,36.52,0,0,0,196.8,258.8V792.48A36.52,36.52,0,0,0,233.32,829H497.48l0-.33V591.77H404.08v-94.1h93.45c-.88-22-.51-44.09.66-66,1.67-31.4,2.45-68.27,22.71-94.14,22.63-28.9,57.54-32.83,91.38-35.24,29.32-2.09,58.83-4.11,88.24-4,1.35,0,17.45-.56,17.45,1.7v88.18c0-2.95-72.35,2.23-78.27,3.05-10.89,1.52-22,5-29.68,12.95-6.23,6.43-9.57,15.17-11.36,23.95-1,4.71-6.73,63.8-3.08,63.8H709.42v93H598.21V829H767a36.52,36.52,0,0,0,36.52-36.52V258.8A36.52,36.52,0,0,0,767,222.28Z"/></svg>
         	</a>

         </div>

         <div class="header-items-right">

            <a href=""><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.11 29.88" style="
    height: 30px;
"><defs><style>.cls-1{stroke:#172643;stroke-miterlimit:10; height: 20px;}</style></defs><title>3Монтажная область 1</title><ellipse class="cls-1" cx="11.26" cy="7.74" rx="5.5" ry="6.5"/><ellipse class="cls-1" cx="24.26" cy="9.74" rx="3.5" ry="4.5"/><path class="cls-1" d="M21.76,24.74c0,5.25-4.2,3.5-10,3.5s-11,1.75-11-3.5,4.7-9.5,10.5-9.5S21.76,19.49,21.76,24.74Z"/><path class="cls-1" d="M24.26,15.24a6.07,6.07,0,0,0-4,1.48,9.06,9.06,0,0,1,3.45,7v1.5h1c3.59,0,6,1,6-3A6.71,6.71,0,0,0,24.26,15.24Z"/></svg></a>
			<a href=""><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-100,.cls-200{}.cls-100{stroke:#172643;stroke-miterlimit:10;}</style></defs><path class="cls-100" d="M724.42,512.51a253,253,0,0,0,4.29-46c0-94.95-52.47-176.81-128.46-215.91.73-17.47,1-123.74-100.65-127.65S398.94,231.85,399.79,250.59c-76,39.09-128.5,121-128.5,215.93a253,253,0,0,0,4.29,46c-56.35,35.9-91.17,85.23-91.17,139.7,0,37.62,16.6,72.8,45.43,102.79H770.15c28.84-30,45.44-65.17,45.44-102.79C815.59,597.74,780.77,548.41,724.42,512.51ZM499.8,154.62c56.89,2.17,51.64,66.3,51.64,66.3H448.59S442.91,152.45,499.8,154.62Z"></path><path class="cls-200" d="M599.66,800.41s-9.85,79.34-99.66,76.66c-94.51-2.82-99.5-76.38-99.66-76.66"></path></svg></a>
            <a href=""><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-111{stroke-miterlimit:10;}</style></defs><path class="cls-111" d="M845.4,755.46,652.6,578.15a282.78,282.78,0,0,0,49.33-160c0-157-127.26-284.24-284.24-284.24S133.46,261.21,133.46,418.19,260.71,702.42,417.69,702.42A282.75,282.75,0,0,0,579.17,652L755.05,844.9c13.2,14.59,32.4,22.71,52,20.89,13.56-1.26,28.7-6.16,41.52-19l.94-1C874.1,820.45,871.49,779.28,845.4,755.46ZM191.68,418.19c0-124.83,101.19-226,226-226s226,101.19,226,226-101.19,226-226,226S191.68,543,191.68,418.19Z"></path></svg></a>
            <a href=""><svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-133{fill:none;stroke-linecap:round;stroke-miterlimit:100;stroke-width:66px;}</style></defs><line class="cls-133" x1="269.19" y1="283.3" x2="730.81" y2="283.3"></line><line class="cls-133" x1="269.19" y1="467.04" x2="730.81" y2="467.04"></line><line class="cls-133" x1="269.19" y1="660.45" x2="730.81" y2="660.45"></line></svg></a>
          </div>
          </div>
    </div>
	</header>



    <img class="img_fonts" src="imgs/fon02.png" style="
    position: absolute;

    display: none;
    width: 100%;
        height: 822px;
    z-index: 50;
">
	<section class="main-content">


		<div class="wrapper">
			<div class="main-content-left">

				<div class="slide telp active" style="display: flex;">
                    <picture>
                        <source type="imgs/webp" srcset="imgs/6f25c9dc20d0157b2409bfd3c33bdaee.webp">
                        <source type="imgs/png" srcset="imgs/6f25c9dc20d0157b2409bfd3c33bdaee.png">
                        <img style="z-index: -1; transition: all 3s ease-in-out 0s;" class="to-remove slide_item active_slide tel" src="imgs/6f25c9dc20d0157b2409bfd3c33bdaee.png">
                    </picture>

				</div>

				<div class="slide" style="display: none;">
                    <picture>
                        <source type="imgs/webp" srcset="imgs/iMac.webp">
                        <source type="imgs/png" srcset="imgs/iMac.png">
                        <img style="z-index: -1; transition: all 3s ease-in-out 0s;" class="to-anim slide_item next_slide animate_slide_img comp" src="imgs/iMac.png">
                    </picture>

				</div>

		</div>



	</div></section>
	<section class="advantages" style="position: relative;">
	   <div class="wrapper" style="width: 1900px;">
	   	<div class="advantages-items">
	   		<div class="advantages-item">

	   			 <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-166{fill:none;stroke-miterlimit:10;stroke-width:19px;}</style></defs><rect class="cls-166" x="356.56" y="214.16" width="286.56" height="571.68" rx="46.44"/><path class="cls-166" d="M422.08,214.16H577.6a0,0,0,0,1,0,0v16a13.2,13.2,0,0,1-13.2,13.2H435.28a13.2,13.2,0,0,1-13.2-13.2v-16A0,0,0,0,1,422.08,214.16Z"/></svg>
	   			<p>Мобильная версия</p>
	   		</div>
	   		<div class="advantages-item">


	   			<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-166i,.cls-266i{fill:none;}.cls-266i{stroke-miterlimit:10;stroke-width:18px;}</style></defs><path class="cls-166i" d="M737.25,763.23c1.38,4.45,3.6,11.73,2.62,18.39a36,36,0,0,1-5.25,13.14"/><path class="cls-266i" d="M696,205.67H212a28.85,28.85,0,0,0-28.85,28.86V573.87A28.85,28.85,0,0,0,212,602.73h55.79V718.16a5.36,5.36,0,0,0,5.37,5.37h26.29a5.37,5.37,0,0,0,3.76-1.53L406.78,620.69a8.77,8.77,0,0,0,2.63-6.26v-11.7H696a28.86,28.86,0,0,0,28.86-28.86V234.53A28.86,28.86,0,0,0,696,205.67Z"/><path class="cls-266i" d="M418.62,668.85l13.66-12.3a8.86,8.86,0,0,1,5.92-2.27H689.93a83.44,83.44,0,0,0,83.44-83.44v-158a11,11,0,0,1,11-11h28.85a11,11,0,0,1,11,11v275.9a17.84,17.84,0,0,1-17.84,17.84H754.91v81.28a6.45,6.45,0,0,1-6.45,6.45h-14a6.41,6.41,0,0,1-4.55-1.89l-69-69a10.18,10.18,0,0,1-3-7.18V705.07H407.48a3.45,3.45,0,0,1-3.45-3.45h0A44.08,44.08,0,0,1,418.62,668.85Z"/></svg>
	   				   			<p>Интеграция с Лид-формой Facebook, Instagram, сайтами, конструкторами </p>
	   		</div>
	   		<div class="advantages-item">
	   			<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-188a{fill:none;stroke-miterlimit:10;stroke-width:18px;}</style></defs><path class="cls-188a" d="M444.67,269.24V432.53H570.93V269.24a12.64,12.64,0,0,1,12.64-12.64h95.14L500.16,78.05,321.61,256.6H432A12.64,12.64,0,0,1,444.67,269.24Z"/><polygon class="cls-188a" points="769.65 708.56 950.16 528.05 769.65 347.54 769.65 708.56"/><polygon class="cls-188a" points="245.58 723.47 245.58 332.63 50.16 528.05 245.58 723.47"/><path class="cls-188a" d="M570.93,779.61V608.47H444.67V779.61A12.64,12.64,0,0,1,432,792.25H314.36l185.8,185.8L686,792.25H583.57A12.64,12.64,0,0,1,570.93,779.61Z"/></svg>
	   			<p>Автоматическое создание <br>ТТН Новой Почты</p>
	   		</div>
	   		<div class="advantages-item">
	   			<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-11,.cls-21{fill:none;}.cls-21{stroke-miterlimit:10;stroke-width:19px;}</style></defs><path class="cls-11" d="M736.75,739.4c1.38,4.46,3.6,11.74,2.62,18.4a36,36,0,0,1-5.25,13.14"/><path class="cls-21" d="M325.25,740.74c46.66-15.53,88.06,25.5,131.13,34,40.14,7.93,85.51,1.92,124.46-9,80.64-22.55,153.41-76.78,192.5-151.53,64-122.36,31.62-287.09-73.73-376.35s-272.93-94.24-383.55-11.61C197.7,314.71,151.15,504.64,237,630.49L192.88,784.87Z"/><polygon class="cls-21" points="301.86 563.66 468.9 385.82 548.82 467.18 697.14 385.82 533.7 566.54 450.18 481.58 301.86 563.66"/></svg>
	   			<p>SMS рассылка </p>
	   		</div>
	   		<div class="advantages-item">
	   			<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-133b{fill:none;stroke-miterlimit:10;stroke-width:18px;}</style></defs><path class="cls-133b" d="M248.72,794.48V508.89H227.36c-16.91,0-24.65-21.07-11.77-32L478.9,253.18a29.31,29.31,0,0,1,38.11.13l83,71.45v-51.7a24.78,24.78,0,0,1,24.79-24.78h75.07a24.78,24.78,0,0,1,24.78,24.78V423.91l58.8,50.15c12.86,11,5.1,32-11.79,32H750.13V794.48a6.2,6.2,0,0,1-6.2,6.19H631.68a6.2,6.2,0,0,1-6.2-6.19V579.71H481V794.48a6.19,6.19,0,0,1-6.19,6.19H254.92A6.2,6.2,0,0,1,248.72,794.48Z"/></svg>
	   			<p>Учет склада и остатков</p>
	   		</div>
	   			<div class="advantages-item">
	   			<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><style>.cls-122ba,.cls-222ba{fill:none;stroke-linejoin:round;stroke-width:18px;}.cls-122ba{stroke-linecap:round;}</style></defs><path class="cls-122ba" d="M467.21,736.3l-59.6,47.64H620.19L524.25,669.28A26.41,26.41,0,0,0,504,659.82H277.07a88.61,88.61,0,0,1-88.61-88.61V309.89a88.61,88.61,0,0,1,88.61-88.61H730.93a88.61,88.61,0,0,1,88.61,88.61V522.58a88.61,88.61,0,0,1-88.61,88.61H296a54.57,54.57,0,0,1-54.57-54.57V325.56A54.57,54.57,0,0,1,296,271h418.2a54.57,54.57,0,0,1,54.57,54.57V619.72a42.51,42.51,0,0,1-42.51,42.51H596.3"/><polygon class="cls-222ba" points="655.91 554.03 655.91 360.56 615.78 360.56 615.78 554.03 606.47 554.03 606.47 392.09 566.34 392.09 566.34 554.03 557.74 554.03 557.74 428.63 518.05 428.63 518.05 554.03 508.3 554.03 508.3 464.46 468.17 464.46 468.17 554.03 458.86 554.03 458.86 504.59 418.73 504.59 418.73 554.03 314.11 554.03 314.11 569.08 693.89 569.08 693.89 553.31 655.91 554.03"/></svg>
	   			<p>Статистика продаж, <br> прибыли, ср. чек</p>
	   		</div>
	   	</div>

	   			<div class="main-content-right">
				<h1> CRM-система</h1>
				<h2>для продаж в <span>facebook</span></h2>
				<p><span>Зарегистрируйтесь и получите 14 дней <br></span>
				БЕСПЛАТНОГО тест-драйва сервиса!</p>
				<form id="inst-send" id="ajax_form" method="post">

				 <div class="wp wrapper-input">

                     <label class="labelX" for="subdomain" style="position: relative;">
                         <div style="display: none;" id="domenTrue" class="succes domen_info">Домен доступен</div>
                         <div style="display: none;" id="domenTrue" class="succes domen_info">Домен доступен</div>
                         <div style="display: none;" id="domenFalse" class="error domen_info">Домен недоступен</div>
                         <span  style="display: none;" id="domenTagLeft" class="domenTag domenTagLeft">http://</span>
                         <span  style="display: none;" id="domenTagRight" class="domenTag domenTagRight">.lp-crm-biz</span>
                         <input id="subdomain" maxlength="40" name="domain" placeholder="Придумайте название CRM-кабинета" class="userInp" type="text">
                     </label>
	         	</div>

				<div class="wrapper-input">


                    <input id="userMail" maxlength="141" name="email" placeholder="Ваш E-mail" class="userInp" type="text">
                </div>
                <div class="wrapper-input">
					<button class="select-country ua" type="button" name="country" title="Укажите Ваш регион"> <span class="select-country__triangle"></span> </button>
					<ul class="select-country__list" style="display: none;">
			            <li class="select-country__item" data-country="ua">Украина ( +380 )</li>
			            <li class="select-country__item" data-country="ru">Россия ( +7 )</li>
			            <li class="select-country__item" data-country="by">Беларусь ( +375 )</li>
			            <li class="select-country__item" data-country="kz">Казахстан ( +7 )</li>
		           </ul>
                   <input id="userTel" name="phone" placeholder="Ваш телефон" class="userInp userInpTel" type="text">

                </div>

				 <div class="wrapper-input">
                	<input id="userName" maxlength="50" name="name" placeholder="Ваше имя" class="userInp" type="text">
				</div>

                <div class="wrapper-btn">
                    <buttom type="submit" id="btn-submit_reg" style="border:none; cursor: pointer; background-color: #4267b2;" href="#" class="button pulse" value="">Регистрация</buttom>
                </div>

                    <input type="hidden" name="utm_source" value="-facebook">
                    <input type="hidden" name="utm_medium" value="">
                    <input type="hidden" name="utm_term" value="">
                    <input type="hidden" name="utm_content" value="">
                    <input type="hidden" name="utm_campaign" value="">


                    <!-- отправка в сапорт црм -->
                    <input type="hidden" name="send_to_crm" value="1">

                    <!-- price -->
                    <input type="hidden" name="s1" value="">
                    <!-- product_id -->
                    <input type="hidden" name="s2" value="5">
                    <!-- comment -->
                    <input type="hidden" name="s3" value="">


                    <input type="hidden" name="server_name" value="lp-crm.biz">
                    <input type="hidden" name="php_self" value="/crm-dlya-facebook/index.php">
                    <input type="hidden" name="ip" value="178.213.0.225">
				</form>

			</div>


	   </div></div>
	</section>

	<section>
        <div class="wrapper">
            <div class="feedback">
                <div class="head__feed"><img src="imgs/icon_video.svg" style="width: 30px;height: 30px;margin-right: 10px;">
                    <p>Видеоотзыв</p></div>
                <div class="main__feed">




                    <input  type="radio" name="myModal" id="noceck">
                    <label  for="noceck"><span class="btn_modal">
                            <div class="img_feed">
                                <span style="
	background-color: transparent;
	width: 47px !important;
	border: none;
	position: absolute;
	top: 45%;
	left: 41%;
	text-shadow: 0 0 black;
	class="ytp-large-play-button ytp-button" id="btn__youtube" aria-label="Play">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" style="
    fill: rgba(255, 255, 255, 0.75);
"></path></svg></span>
                        <picture>
                            <source type="imgs/webp" srcset="imgs/feedbak1.webp">
                            <source type="imgs/png" srcset="imgs/feedbak1.png">
                            <img src="imgs/feedbak1.png" alt="">
                        </picture>


                </div></span></label>


                    <input  type="radio" name="myModal" id="clik">
                    <label  for="clik"><span class="knopka">
                            <div class="img_feed">
                                <span style="
	background-color: transparent;
	width: 47px !important;
	border: none;
	position: absolute;
	top: 45%;
	left: 41%;
	text-shadow: 0 0 black;
	class="ytp-large-play-button ytp-button" id="btn__youtube" aria-label="Play">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" style="
    fill: rgba(255, 255, 255, 0.75);
"></path></svg></span>
                        <picture>
                            <source type="imgs/webp" srcset="imgs/feedbak2.webp">
                            <source type="imgs/png" srcset="imgs/feedbak2.png">
                            <img src="imgs/feedbak2.png" alt="">
                        </picture>


            </div></span></label>


                    <input  type="radio" name="myModal" id="klick">
                    <label  for="klick"><span class="pink">
                            <div class="img_feed">
                                <span style="
	background-color: transparent;
	width: 47px !important;
	border: none;
	position: absolute;
	top: 45%;
	left: 41%;
	text-shadow: 0 0 black;
	class="ytp-large-play-button ytp-button" id="btn__youtube" aria-label="Play">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" class="svg-inline--fa fa-play fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" style="
    fill: rgba(255, 255, 255, 0.75);
"></path></svg></span>
                        <picture>
                            <source type="imgs/webp" srcset="imgs/feedbak3.webp">
                            <source type="imgs/png" srcset="imgs/feedbak3.png">
                            <img src="imgs/feedbak3.png" alt="">
                        </picture>

        </div></span></label>


                    <div class="test">
                        <div class="bgModal"></div><!--ФОН модального окна-->
                        <div class="modalBlock"><!--Блок модального окна-->
                            <div class="offBlock">
                                <input  type="radio" name="myModal" id="noceck2">
                            </div>
                            <div class="blockCont">
                                <div class="wrapper" id="popaps"style="display: flex;max-width: 1024px;margin: 0 auto;margin-bottom: 165px;margin-left: 22%;margin-top: 8%;">
                                    <div class="popap">
                                        <iframe width="650" height="305" src="https://www.youtube.com/embed/bd-KpqIyLUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        <div class="name_feed"><img src="imgs/icon_feed.png"><p>Александр Миколенко</p>
                                            <div class="likes"><span></span><p>1189</p><p>Комментарии 15</p></div></div>
                                        <div class="line"></div>
                                        <div class="vievs1"><p>Просмотры: 1255 - </p><span> месяц назад</span><img src="imgs/users.svg" style="height: 15px;padding-left: 6px;"></div>
                                    </div>
                                    <div class="next">
                                        <p>Далее<div class="close"><label for="noceck2" style="cursor: pointer; padding-left: 243px;"><svg aria-hidden="true" focusable="false" id="xo" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 xo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" style="position: absolute;
    height: 23px;
    top: 6%;
    color: #818182;
    left: 128%;"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class="ix"></path></svg></label></div></p>


                                        <div class="pacuk">
                                            <div class="close"><input  type="radio" name="myModal" id="clik">
                                                <label  for="clik"><span class="knopka"><div class="petuhok">
                                                            <picture>
                                                               <source type="imgs/webp" srcset="imgs/video_feed2.webp">
                                                               <source type="imgs/png" srcset="imgs/video_feed2.png">
                                                               <img src="imgs/video_feed2.png">
                                                           </picture>



                                                        </div></span></label></div>
                                            <div class="close"><input  type="radio" name="myModal" id="clik">
                                                <label  for="clik"><span class="knopka"><div class="papuga"><p>Отзыв LP-CRM от Тараса Левчика. №1 по Трафику</p></span></label></div>
                                            <p style="color: #4c545e;padding-top: 12px;font-size: 13px;">Просмотры : 2546</p>
                                        </div>
                                    </div>


                                    <div class="pacuk">
                                        <div class="close"><input  type="radio" name="myModal" id="klick">
                                            <label  for="klick"><span class="pink"><div class="petuhok">
                                                        <picture>
                                                           <source type="imgs/webp" srcset="imgs/video_feed3.webp">
                                                           <source type="imgs/png" srcset="imgs/video_feed3.png">
                                                           <img src="imgs/video_feed3.png">
                                                       </picture>



                                                    </div></span></label></div>
                                        <div class="close"><input  type="radio" name="myModal" id="klick">
                                            <label  for="klick"><span class="pink"><div class="papuga"><p>Отзыв о LP-CRM от Сергея Данилюка. 3 года с нами!</p></span></label></div>
                                        <p style="color: #4c545e;padding-top: 15px;font-size: 13px;">Просмотры : 2546</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="osnova">
                <div class="fonModal"></div><!--ФОН модального окна-->
                <div class="osnovaBlock"><!--Блок модального окна-->
                    <div class="offBlock">
                        <input  type="radio" name="myModal" id="clik2">
                    </div>
                    <div class="blockCont">
                        <div class="wrapper" style="display: flex;max-width: 1024px;margin: 0 auto;margin-bottom: 165px;margin-left: 22%;margin-top: 8%;">
                            <div class="popap">
                                <iframe width="650" height="305" src="https://www.youtube.com/embed/l5vMacnir7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <div class="name_feed"><img src="imgs/taras.png"><p>Тарас Левчик</p>
                                    <div class="likes"><span></span><p>1189</p><p>Комментарии 15</p></div></div>
                                <div class="line"></div>
                                <div class="vievs1"><p>Просмотры: 1255 - </p><span> месяц назад</span><img src="imgs/users.svg" style="height: 15px;padding-left: 6px;"></div>
                            </div>
                            <div class="next">
                                <p>Далее<div class="close"><label for="clik2" style="cursor: pointer; padding-left: 243px;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" style="position: absolute;
    height: 23px;
    top: 6%;
    color: #818182;
    left: 128%;"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class="ix"></path></svg></label></div></p>


                                <div class="pacuk">
                                    <div class="close"><label  for="noceck"><span class="btn_modal"><div class="petuhok">

                                                    <picture>
                                                       <source type="imgs/webp" srcset="imgs/video_feed.webp">
                                                       <source type="imgs/png" srcset="imgs/video_feed.png">
                                                       <img src="imgs/video_feed.png">
                                                   </picture>

                                                </div></span></label></div>
                                    <div class="close"><label  for="noceck"><span class="btn_modal"><div class="papuga"><p>Отзыв от гуру товарки Александра Миколенко. До 1000 лидов в день</p></span></label></div>
                                    <p style="color: #4c545e;padding-top: 0px;font-size: 13px;">Просмотры : 2546</p>
                                </div>
                            </div>


                            <div class="pacuk">
                                <input  type="radio" name="myModal" id="klick">
                                <div class="close"><label  for="klick"><span class="pink"><div class="petuhok">
                                                <picture>
                                                       <source type="imgs/webp" srcset="imgs/video_feed3.webp">
                                                       <source type="imgs/png" srcset="imgs/video_feed3.png">
                                                       <img src="imgs/video_feed3.png">
                                                   </picture>


                                            </div></span></label></div>
                                <input  type="radio" name="myModal" id="klick">
                                <div class="close"><label  for="klick"><span class="pink"><div class="papuga"><p>Отзыв о LP-CRM от Сергея Данилюка. 3 года с нами!</p></span></label></div>
                                <p style="color: #4c545e;padding-top: 16px;font-size: 13px;">Просмотры : 2546</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        </div>

        <div class="example">
            <div class="fon__Modal"></div><!--ФОН модального окна-->
            <div class="main_modal"><!--Блок модального окна-->
                <div class="offBlock">
                    <input  type="radio" name="myModal" id="paint2">
                </div>
                <div class="blockCont">
                    <div class="wrapper" style="display: flex;max-width: 1024px;margin: 0 auto;margin-bottom: 165px;margin-left: 22%;margin-top: 8%;">
                        <div class="popap">
                            <iframe width="650" height="305" src="https://www.youtube.com/embed/X4UJ36mcSdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            <div class="name_feed"><img src="imgs/sergey.png"><p>Сергей Данилюк</p>
                                <div class="likes"><span></span><p>1189</p><p>Комментарии 15</p></div></div>
                            <div class="line"></div>
                            <div class="vievs1"><p>Просмотры: 1050 - </p><span> месяц назад</span><img src="imgs/users.svg" style="height: 15px;padding-left: 6px;"></div>
                        </div>
                        <div class="next">
                            <p>Далее<div class="close"><label for="noceck2" style="cursor: pointer; padding-left: 243px;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" style="position: absolute;
    height: 23px;
    top: 6%;
    color: #818182;
    left: 128%;"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class="ix"></path></svg></label></div></p>


                            <div class="pacuk">
                                <div class="close"><label  for="clik"><span class="noceck"><div class="petuhok">
                                                <picture>
                                                   <source type="imgs/webp" srcset="imgs/video_feed2.webp">
                                                   <source type="imgs/png" srcset="imgs/video_feed2.png">
                                                   <img src="imgs/video_feed2.png">
                                               </picture>


                                            </div></span></label></div>
                                <div class="close"><label  for="clik"><span class="noceck"><div class="papuga"><p>Отзыв LP-CRM от Тараса Левчика. №1 по Трафику</p></span></label></div>
                                <p style="color: #4c545e;padding-top: 13px;font-size: 13px;">Просмотры : 2546</p>
                            </div>
                        </div>


                        <div class="pacuk">
                            <input  type="radio" name="myModal" id="noceck">
                            <div class="close">   <label  for="noceck"><span class="btn_modal"><div class="petuhok">
                                             <picture>
                                                   <source type="imgs/webp" srcset="imgs/video_feed.webp">
                                                   <source type="imgs/png" srcset="imgs/video_feed.png">
                                                   <img src="imgs/video_feed.png">
                                               </picture>


                                        </div></span></label></div>
                            <input  type="radio" name="myModal" id="noceck">
                            <div class="close">  <label  for="noceck"><span class="btn_modal"><div class="papuga"><p>Отзыв от гуру товарки Александра Миколенко. До 1000 лидов в день</p></span></label></div>
                            <p style="color: #4c545e;padding-top: 0px;font-size: 13px;">Просмотры : 2236</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        </div>
        </div>
				<div class="example">
				    <div class="fon__Modal"></div><!--ФОН модального окна-->
				    <div class="main_modal"><!--Блок модального окна-->
				        <div class="offBlock">
				            <input  type="radio" name="myModal" id="paint2">
				        </div>
				        <div class="blockCont">
		<div class="wrapper" style="display: flex;max-width: 1024px;margin: 0 auto;margin-bottom: 165px;margin-left: 22%;margin-top: 8%;">
			<div class="popap">
				<iframe width="650" height="305" src="https://www.youtube.com/embed/X4UJ36mcSdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<div class="name_feed">
                    <picture>
                        <source type="imgs/webp" srcset="imgs/sergey.webp">
                        <source type="imgs/png" srcset="imgs/sergey.png">
                        <img src="imgs/sergey.png">
                    </picture>


                    <p>Сергей Данилюк</p>
				<div class="likes"><span></span><p>1189</p><p>Комментарии 15</p></div></div>
				<div class="line"></div>
				<div class="vievs1"><p>Просмотры: 1050 - </p><span> месяц назад</span><img src="imgs/users.svg" style="height: 15px;padding-left: 6px;"></div>
			</div>
			<div class="next">
				<p>Далее<div class="close"><label for="noceck2" style="cursor: pointer; padding-left: 243px;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" style="position: absolute;
    height: 23px;
    top: 6%;
    color: #818182;
    left: 128%;"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z" class="ix"></path></svg></label></div></p>


			<div class="pacuk">
				<div class="close"><label  for="clik"><span class="noceck"><div class="petuhok">

                            <picture>
                                <source type="imgs/webp" srcset="imgs/video_feed2.webp">
                                <source type="imgs/png" srcset="imgs/video_feed2.png">
                                <img src="imgs/video_feed2.png">
                            </picture>

                            </div></span></label></div>
				<div class="close"><label  for="clik"><span class="noceck"><div class="papuga"><p>Отзыв LP-CRM от Тараса Левчика. №1 по Трафику</p></span></label></div>
				<p style="color: #4c545e;padding-top: 21px;font-size: 13px;">Просмотры : 2546</p>
				</div>
			</div>


			<div class="pacuk">
				<input  type="radio" name="myModal" id="noceck">
                <div class="close">   <label  for="noceck"><span class="btn_modal"><div class="petuhok">

                            <picture>
                                <source type="imgs/webp" srcset="imgs/video_feed.webp">
                                <source type="imgs/png" srcset="imgs/video_feed.png">
                                <img src="imgs/video_feed.png">
                            </picture>
                            </div></span></label></div>
				<input  type="radio" name="myModal" id="noceck">
                 <div class="close">  <label  for="noceck"><span class="btn_modal"><div class="papuga"><p>Отзыв от гуру товарки Александра Миколенко. До 1000 лидов в день</p></span></label></div>
				<p style="color: #4c545e;padding-top: 0px;font-size: 13px;">Просмотры : 2236</p>
				</div>
			</div>

			</div>

		</div>
				        </div>
				    </div>
				</div>

<style type="text/css">
.pink {
  cursor: pointer;
  color: #fff;
}
.example {
    position:absolute;
    display:none;
}
#klick{display:none;}/* Убирает сам checkbox*/
#klick[type=radio]:checked  ~ .example {
    top:0;
    display:block;
    width:100%;
    height:100%;
    /*animation: onModal  1.5s forwards;*/
    z-index: 100;
}
@keyframes onModal {
    from {opacity:0;}
    to {opacity:1;}
}
.fon__Modal{
  position:fixed;
  width:100%;
  height:100%;
  background:#000;
  opacity:0.7;

}
.main_modal{
    position: fixed;
    background: transparent;
    z-index: 999;
    margin: 0 auto;
}
.offBlock{
}
#paint2{
  display:none;
}
#paint2 + label{
    cursor: pointer;
    /* float: right; */
    /* padding-top: 1px; */
    position: relative;
    margin-left: 116%;
    margin-top: 0%;}
    /* margin-bottom: -11px;
}
.blockCont{
  padding:10px;
}*/
</style>
<style type="text/css">
.knopka {
  cursor: pointer;
  color: #fff;
}
.test {
    position:absolute;
    display:none;
}
#noceck{display:none;}/* Убирает сам checkbox*/
#noceck[type=radio]:checked  ~ .test {
    top:0;
    display:block;
    width:100%;
    height:100%;
    /*animation: onModal  1.5s forwards;*/
    z-index: 100;
}
@keyframes onModal {
    from {opacity:0;}
    to {opacity:1;}
}
.bgModal{
  position:fixed;
  width:100%;
  height:100%;
  background:#000;
  opacity:0.9;

}
.modalBlock{
    position: fixed;
    background: transparent;
    z-index: 999;
    margin: 0 auto;
}
/*.offBlock{*/
/*}*/
#noceck2{
  display:none;
}
#noceck2 + label{
    cursor: pointer;
    /* float: right; */
    /* padding-top: 1px; */
    position: relative;
    margin-left: 116%;
    margin-top: 0%;}
    /* margin-bottom: -11px;
}
.blockCont{
  padding:10px;
}
</style>




<style>

.btn_modal {
  cursor: pointer;
  color: #fff;
}
.osnova {
    position:absolute;
    display:none;
}
#clik{display:none;}/* Убирает сам checkbox*/
#clik[type=radio]:checked  ~ .osnova {
    top:0;
    display:block;
    width:100%;
    height:100%;
    /*animation: onModal  1.5s forwards;*/
    z-index: 100;
}
@keyframes onModal {
    from {opacity:0;}
    to {opacity:1;}
}
.fonModal{
  position:fixed;
  width:100%;
  height:100%;
  background:#000;
  opacity:0.9;

}
.osnovaBlock{
    position: fixed;
    background: transparent;
    z-index: 999;
    margin: 0 auto;
}
/*.off_block{*/
/*}*/
#clik2{
  display:none;
}
#clik2 + label{
    cursor: pointer;
    /* float: right; */
    /* padding-top: 1px; */
    position: relative;
    margin-left: 116%;
    margin-top: 0%;}
    /* margin-bottom: -11px;
}
.blockCont{
  padding:10px;
}*/
</style>

                </div>
            </div>
        </div>
    </section>
	<section>

				<!-- ПЕРВЫЙ БЛОК ОТЗЫВА -->
    <div class="mob_feed_bg" style="background-color: #fff;width: 352px;margin: 0 auto; box-shadow: 0px 6px 7px 0px rgba(0, 0, 0, .4)">

		<div class="mob_feed" style="background-color: #fff;">
            <div class="video__feed_mob">
                <img src="imgs/icon_video.svg" style="width: 20px;height: 30px;margin-right: 10px;">
                <p>Видеоотзывы</p>
            </div>
			<div class="header_feed_mob">
				<div class="mob_img">

                    <picture>
                        <source type="imgs/webp" srcset="imgs/icon_feed.webp">
                        <source type="imgs/png" srcset="imgs/icon_feed.png">
                        <img src="imgs/icon_feed.png" style="border-radius: 50%; width: 50px; height: 50px;">
                    </picture>

                </div>
				<div class="mob_name"><p style="font-size: 16px; font-family: Roboto-Bold;">Александр Миколенко</p>
				<span style="font-family: Roboto-Medium; font-size: 14px; color: #9fa2a9;margin-top: -10px;">22 апр. 2020 г. в 15:47</span></div>
				<div class="more" style="letter-spacing: -4px;margin-left: 75px;font-size: 45px;margin-top: -30px;">...</div>
			</div>
			<div class="main_feed_mob">
				<div class="info_mob">
					<p style="font-family: Roboto-Medium; font-size: 12px; color: #6e6e6e;">Отзыв от гуру товарки Александра Миколенко. До 1000 лидов в день.</p>
				</div>
				<div class="mob_video">
					<div class="modal-video"><iframe width="350" height="240" src="https://www.youtube.com/embed/bd-KpqIyLUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

				</div>
				<div class="mob_like">
					<img src="imgs/like.png" alt=""><img src="imgs/likes.png" alt="">
					<p style="margin-top: 2px; font-size: 11px; color: #abafb4; font-family: Roboto-Medium;">CRM-система для товарного бизнеса  и еще 12 456</p>
				</div>
				<div class="line"></div>
				<div class="footer_mob_feed">
					<p>Нравиться</p>
					<p>Комментировать</p>
					<p>Поделиться</p>

				</div>
			</div>
		</div>

					<!-- ВТОРОЙ БЛОК ОТЗЫВА -->

		<div class="mob_feed">
			<div class="header_feed_mob">
				<div class="mob_img">
                    <picture>
                        <source type="imgs/webp" srcset="imgs/taras.webp">
                        <source type="imgs/png" srcset="imgs/taras.png">
                        <img src="imgs/taras.png" style="border-radius: 50%; width: 50px; height: 50px;">
                    </picture>

                </div>
				<div class="mob_name"><p style="font-size: 16px; font-family: Roboto-Bold;">Тарас Левчук</p>
				<span style="font-family: Roboto-Medium; font-size: 14px; color: #9fa2a9;margin-top: -10px;">28 апр. 2020 г. в 10:17</span></div>
				<div class="more" style="letter-spacing: -4px;margin-left: 101px;font-size: 45px;margin-top: -30px;">...</div>
			</div>
			<div class="main_feed_mob">
				<div class="info_mob">
					<p style="font-family: Roboto-Medium; font-size: 12px; color: #6e6e6e;">Отзыв LP-CRM от Тараса Левчика. №1 по Трафику.
Создатель курса Traffic Master.</p>
				</div>
				<div class="mob_video">
					<iframe width="350" height="240" src="https://www.youtube.com/embed/l5vMacnir7E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="mob_like">
					<img src="imgs/like.png" alt=""><img src="imgs/likes.png" alt="">
					<p style="margin-top: 2px; font-size: 11px; color: #abafb4; font-family: Roboto-Medium;">CRM-система для товарного бизнеса  и еще 10 276</p>
				</div>
				<div class="line"></div>
				<div class="footer_mob_feed">
					<p>Нравиться</p>
					<p>Комментировать</p>
					<p>Поделиться</p>

				</div>
			</div>
		</div>

					<!-- ТРЕТИЙ БЛОК ОТЗЫВА -->

		<div class="mob_feed">
			<div class="header_feed_mob">
				<div class="mob_img">
                    <picture>
                        <source type="imgs/webp" srcset="imgs/sergey.webp">
                        <source type="imgs/png" srcset="imgs/sergey.png">
                        <img src="imgs/sergey.png" style="border-radius: 50%; width: 50px; height: 50px;">
                    </picture>


                </div>
				<div class="mob_name"><p style="font-size: 16px; font-family: Roboto-Bold;">Срегрей Данилюк</p>
				<span style="font-family: Roboto-Medium; font-size: 14px; color: #9fa2a9;margin-top: -10px;">2 май. 2020 г. в 10:14</span></div>
				<div class="more" style="letter-spacing: -4px;margin-left: 107px;font-size: 45px;margin-top: -30px;">...</div>
			</div>
			<div class="main_feed_mob">
				<div class="info_mob">
					<p style="font-family: Roboto-Medium; font-size: 12px; color: #6e6e6e;">Отзыв о LP-CRM от Сергея Данилюка. 3 года с нами!</p>
				</div>
				<div class="mob_video">
					<iframe width="350" height="240" src="https://www.youtube.com/embed/X4UJ36mcSdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="mob_like">
					<img src="imgs/like.png" alt=""><img src="imgs/likes.png" alt="">
					<p style="margin-top: 2px; font-size: 11px; color: #abafb4; font-family: Roboto-Medium;">CRM-система для товарного бизнеса  и еще 15 774</p>
				</div>
				<div class="line"></div>
				<div class="footer_mob_feed">
					<p>Нравиться</p>
					<p>Комментировать</p>
					<p>Поделиться</p>

				</div>
			</div>
		</div>
    </div>



	</section>


    <div class="wrapper">
        <div class="function">
            <div class="header__function">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 266.3 266.7" style="
    width: 35px;
" xml:space="preserve">
<style type="text/css">
    .st0{fill:#B4B9C1;stroke:#B4B9C1;stroke-width:17;stroke-miterlimit:10;}
    .st1{fill:none;stroke:#B4B9C1;stroke-width:17;stroke-miterlimit:10;}
</style>
                    <path class="st0" d="M86.5,172.1v-86h169V52c0-22.6-18.3-40.9-40.9-40.9H51.4c-22.6,0-40.9,18.3-40.9,40.9v163.3
	c0,22.6,18.3,40.9,40.9,40.9h119.1v-84H86.5z"/>
                    <path class="st1" d="M255.5,215.3V86.1h-169v86h84v84h44.1C237.2,256.1,255.5,237.8,255.5,215.3z"/>
</svg><p id="FunctionTogle">Функционал</p>
            </div>
            <div class="main__function">
                <div id="videoBlockFunction" class="video-block_function">
                    <div class="ForIMac">

                        <picture>
                            <source type="imgs/webp" srcset="imgs/MacBook.webp">
                            <source type="imgs/png" srcset="imgs/MacBook.png">
                            <img class="compOff" src="imgs/MacBook.png" width="956" height="auto" alt="MacBook">
                        </picture>
                        <div id="screen" class="screen">
                            <picture>
                                <source type="imgs/webp" srcset="imgs/funControls.webp">
                                <source type="imgs/jpg" srcset="imgs/funControls.jpg">
                                <img class="screenImg" id="funControlrsX" style="opacity: 1; transition: all .3s;" src="imgs/funControls.jpg" width="736" height="460" alt="comp">
                            </picture>
                            <picture>
                                <source type="imgs/webp" srcset="imgs/funIntegration.webp">
                                <source type="imgs/jpg" srcset="imgs/funIntegration.jpg">
                                <img class="screenImg" id="funIntegrationX" style="opacity: 0; transition: all .6s;" src="imgs/funIntegration.jpg" width="736" height="460" alt="comp">
                            </picture>
                            <picture>
                                <source type="imgs/webp" srcset="imgs/funMobi.webp">
                                <source type="imgs/jpg" srcset="imgs/funMobi.jpg">
                                <img class="screenImg" id="funMobiX" style="opacity: 0; transition: all .6s;" src="imgs/funMobi.jpg" width="736" height="460" alt="comp">
                            </picture>
                            <picture>
                                <source type="imgs/webp" srcset="imgs/funStats.webp">
                                <source type="imgs/jpg" srcset="imgs/funStats.jpg">
                                <img class="screenImg" id="funStatsX" style="opacity: 0; transition: all .6s;" src="imgs/funStats.jpg" width="736" height="460" alt="comp">
                            </picture>
                            <picture>
                                <source type="imgs/webp" srcset="imgs/funUchet.webp">
                                <source type="imgs/jpg" srcset="imgs/funUchet.jpg">
                                <img class="screenImg" id="funUchetX" style="opacity: 0; transition: all .6s;" src="imgs/funUchet.jpg" width="736" height="460" alt="comp">
                            </picture>

                        </div>
                    </div>
            </div>
        </div>
        <div class="function_tab">
            <div id="FunctionTabs" class="function_tabs">
                <p id="funControls" class="anim borderForText2">Контроль</p>
                <p id="funStats" class="anim">Статистика</p>
                <p id="funUchet" class="anim">Учет</p>
                <p id="funIntegration" class="anim">Интеграция</p>
                <p id="funMobi" class="anim">Мобильность</p>
            </div>

            <div class="LineText2"></div>
        </div>
            <div id="funText" class="fun-text">
                <p>Настраивайте доступ сотрудников к разделам системы,<br>и отслеживайте историю их изменений.</p>
            </div>
        </div>

    </div>
    <div class="wrapper" style="position: relative;width: 1200px;height: 70px;">
        <div class="desc-logo">
            <svg style="width: 160px; margin-left:auto; margin-right: auto; display: block; height: auto; " id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 1000"><defs><style>.cls-1jj{fill:#fe0;}.cls-2jj{fill:#ff0483;}.cls-3jj{fill:#6a91cc;}.cls-4jj{fill-rule:evenodd;}</style></defs><path class="cls-1jj" d="M191.58,400.61s8-67.29,23.89-104.47A266.13,266.13,0,0,1,240,250.53c3.57-5.23,7.42-10.34,12.21-14.47s10.63-7.28,16.92-8c27-3.19,41.33,28.7,49.15,49.32,10,26.25,16.18,54.3,21.11,81.88,10.11,56.64,15.86,115,12.09,172.49-3.92,59.77-11,120.81-32.75,177.07a245.94,245.94,0,0,1-12.51,27.52c-3.74,7-7.92,13.85-13.44,19.55s-12.49,10.23-20.28,11.76c-8.39,1.63-17.25-.35-24.69-4.54-27.38-15.42-36.54-47.51-44.12-75.76-14.88-55.42-7-99-7-99s-2.76,20.68,11.94,59c6.87,17.93,11.63,38.53,24.55,53.3,6.54,7.46,16.51,12.7,26.26,10.91,10.59-1.94,18.12-11.31,23.35-20.72,13.59-24.47,19.26-52.43,24.31-79.7a621.45,621.45,0,0,0,9.49-79.53c3.09-56.55-1.21-114-13.88-169.2a289.65,289.65,0,0,0-12.65-42c-4.89-12.35-10.9-26.58-22.78-33.74a19.37,19.37,0,0,0-11.08-3.13c-6.3.4-11.55,4.88-15.82,9.53C230.4,303.91,223,316.71,217,330c-5.64,12.46-8.77,26-14.29,38.39A306.16,306.16,0,0,0,191.58,400.61Z"></path><path class="cls-2jj" d="M342.91,380.44a208.78,208.78,0,0,1,29.56-5.67c19.06-2.35,39.48-7.81,58.59-3.33,9.65,2.27,19,8.62,21.95,18.08,3.26,10.25-1.48,21.3-7.34,30.33-15.23,23.48-37.27,41.61-59,58.87a623.34,623.34,0,0,1-65.78,45.7C272.43,553.68,219.71,576.81,165,591.54a289.86,289.86,0,0,1-43,8.53c-13.21,1.47-28.59,2.84-40.49-4.29a19.49,19.49,0,0,1-8-8.32c-2.59-5.75-1.1-12.48,1-18.44,4.86-13.82,12.68-26.37,21.59-37.92,8.36-10.83,18.84-19.94,27.2-30.63a306.26,306.26,0,0,1,23.24-24.93s-55.68,38.61-81,70.12a266.29,266.29,0,0,0-28.78,43c-2.94,5.61-5.65,11.41-7,17.58s-1.45,12.8.85,18.7c9.86,25.36,44.73,23,66.61,20.28,27.86-3.53,55.55-11.2,82.21-19.79,54.77-17.64,109-39.94,158-70.25,50.94-31.51,101.5-66.44,141-112a245.83,245.83,0,0,0,18.43-24c4.42-6.59,8.51-13.5,11-21s3.18-15.84.86-23.43c-2.49-8.17-8.39-15.07-15.59-19.68-26.46-16.94-59.09-10-87.6-3.41a267.33,267.33,0,0,0-63.37,23.38"></path><path class="cls-3jj" d="M199.36,376.88c5.92,1,13.8,2.53,22.57,4.67,0,0-8.47-3.58-21.18-8.34Z"></path><path class="cls-3jj" d="M414,503.08c4.34,4.39,9,9.53,13.91,15.51,12.17,14.86,27.7,29.19,34.13,47.74,3.24,9.37,2.85,20.62-3.54,28.21-6.93,8.23-18.8,10.14-29.56,10-28-.31-55.09-9.25-81.27-18.36A623,623,0,0,1,273.84,555c-50.65-25.34-98.39-57.52-140.09-95.9a287.75,287.75,0,0,1-30.19-31.77c-8.31-10.37-17.69-22.64-18-36.51a19.42,19.42,0,0,1,2.76-11.18c3.48-5.27,10-7.61,16.12-9,14.28-3.28,29.06-3.38,43.59-2,13.62,1.27,26.92,5.25,40.42,6.61,0,0,2.48.29,6.7.94l.8-4.76c-21.78-8-53-18.18-76.59-20.87a265.54,265.54,0,0,0-51.74-1.33c-6.32.51-12.66,1.33-18.63,3.44s-11.59,5.62-15.35,10.72c-16.16,21.89,4.44,50.12,18.48,67.13,17.87,21.66,39.15,40.95,60.67,58.9,44.18,36.85,92,70.75,143.85,96,53.85,26.2,110.4,50.26,170,59.28a244.87,244.87,0,0,0,30.11,2.77c7.93.21,15.95,0,23.64-2s15.08-5.78,20.26-11.79c5.58-6.48,8.24-15.16,8.29-23.7.17-31.42-23.16-55.27-43.94-75.86a267.31,267.31,0,0,0-45-35.78"></path><rect class="cls-1jj" x="609.38" y="571.87" width="851.33" height="67.75" rx="28.87"></rect><path class="cls-4jj" d="M892.19,354.84v194h63V491.88H1064.5v56.93h60.44a49.44,49.44,0,0,0,2.6-15.84V518.19a49.64,49.64,0,0,0-42-49,47.45,47.45,0,0,0-7.1-.56,47.46,47.46,0,0,0,7.1-.55,49.65,49.65,0,0,0,42-49V404.37a49.59,49.59,0,0,0-49.36-49.53Zm63,93.29V398.59h84.58a24.77,24.77,0,0,1,0,49.54Z"></path><polygon class="cls-4jj" points="1307.64 485.03 1301.25 470.85 1280.33 424.45 1273.56 409.45 1248.92 354.79 1217.52 354.79 1198.55 354.79 1154.28 354.79 1154.28 548.77 1217.52 548.77 1217.52 409.45 1280.33 548.77 1307.64 548.77 1334.95 548.77 1397.76 409.45 1397.76 548.77 1461 548.77 1461 354.79 1416.73 354.79 1397.76 354.79 1366.35 354.79 1341.71 409.45 1334.95 424.45 1314.03 470.85 1307.64 485.03"></polygon><path class="cls-4jj" d="M672.74,354.84h-7.88A55.36,55.36,0,0,0,611,398.59a54.58,54.58,0,0,0-1.23,11.59v83.3A54.65,54.65,0,0,0,611,505.07a55.35,55.35,0,0,0,53.86,43.74H808.7c30.3,0,55.09-24.9,55.09-55.33V473.69h-63v7.14a24.26,24.26,0,0,1-24.14,24.24H696.89a24.27,24.27,0,0,1-24.15-24.24v-58a24.27,24.27,0,0,1,24.15-24.23h79.78a24.26,24.26,0,0,1,24.14,24.23V430h63V410.18c0-30.43-24.79-55.34-55.09-55.34Z"></path><path d="M649,621.73V590h6.48v26.3h16v5.4Zm99.77,0h-7l-2.77-7.27H726.24l-2.66,7.27h-6.85l12.42-32H736ZM737,609.05l-4.45-11.83-4.31,11.83Zm59.14,12.68v-32h6.27l13.16,21.43V589.76h6v32h-6.48l-12.95-21v21Zm76.11-32H884a23,23,0,0,1,6.08.61,10.66,10.66,0,0,1,4.81,3,14,14,0,0,1,3.05,5.18,24.11,24.11,0,0,1,1,7.56,20.85,20.85,0,0,1-1,6.8,14,14,0,0,1-3.41,5.64,11.37,11.37,0,0,1-4.53,2.57,19.55,19.55,0,0,1-5.71.66H872.22Zm6.48,5.41v21.16h4.8a17.66,17.66,0,0,0,3.88-.3,5.84,5.84,0,0,0,2.61-1.34,6.66,6.66,0,0,0,1.68-3.08,21,21,0,0,0,.65-5.86,19.28,19.28,0,0,0-.65-5.68,7.38,7.38,0,0,0-1.82-3.09,6.14,6.14,0,0,0-3-1.52,31,31,0,0,0-5.28-.29Zm69.41,26.56v-32h6.48v32Zm56.49,0v-32h6.27L1024,611.19V589.76h6v32h-6.47l-12.95-21v21Zm91-11.73v-5.42h13.89v12.77a17.3,17.3,0,0,1-5.87,3.47,21.26,21.26,0,0,1-7.79,1.5,17.44,17.44,0,0,1-8.75-2.11,13.55,13.55,0,0,1-5.59-6,19.72,19.72,0,0,1-1.87-8.54,18.38,18.38,0,0,1,2.09-8.89,14.2,14.2,0,0,1,6.12-6,16.44,16.44,0,0,1,7.65-1.59q6,0,9.3,2.5a11.32,11.32,0,0,1,4.31,6.93l-6.44,1.2a6.65,6.65,0,0,0-2.52-3.73,7.68,7.68,0,0,0-4.66-1.36,8.67,8.67,0,0,0-6.71,2.68c-1.65,1.8-2.49,4.45-2.49,8,0,3.8.84,6.66,2.52,8.55a8.45,8.45,0,0,0,6.63,2.85,11.25,11.25,0,0,0,4-.79,13.73,13.73,0,0,0,3.5-1.94v-4Zm76.14,11.73v-32h10.35a37.68,37.68,0,0,1,7.67.47,8.43,8.43,0,0,1,4.59,3.14,9.84,9.84,0,0,1,1.86,6.22,10.46,10.46,0,0,1-1.06,5,8.85,8.85,0,0,1-2.71,3.15,9.2,9.2,0,0,1-3.34,1.51,36.24,36.24,0,0,1-6.69.47h-4.19v12.05Zm6.48-26.56v9.11h3.51a15.8,15.8,0,0,0,5.08-.52,4.12,4.12,0,0,0,2-1.57,4.35,4.35,0,0,0,.73-2.49,4.21,4.21,0,0,0-1-2.89,4.56,4.56,0,0,0-2.59-1.44,32.51,32.51,0,0,0-4.63-.2Zm92.66,26.56h-7l-2.76-7.27H1248.3l-2.66,7.27h-6.85l12.42-32h6.84ZM1259,609.05l-4.44-11.83-4.32,11.83Zm74,1v-5.42h13.89v12.77a17.1,17.1,0,0,1-5.87,3.47,21.22,21.22,0,0,1-7.79,1.5,17.4,17.4,0,0,1-8.74-2.11,13.52,13.52,0,0,1-5.6-6,19.72,19.72,0,0,1-1.87-8.54,18.38,18.38,0,0,1,2.09-8.89,14.2,14.2,0,0,1,6.12-6,16.46,16.46,0,0,1,7.66-1.59c4,0,7.07.83,9.3,2.5a11.36,11.36,0,0,1,4.31,6.93l-6.44,1.2a6.67,6.67,0,0,0-2.53-3.73,7.64,7.64,0,0,0-4.66-1.36,8.65,8.65,0,0,0-6.7,2.68c-1.66,1.8-2.49,4.45-2.49,8,0,3.8.83,6.66,2.51,8.55a8.45,8.45,0,0,0,6.63,2.85,11.31,11.31,0,0,0,4.06-.79,13.9,13.9,0,0,0,3.5-1.94v-4Zm63.73,11.73v-32h23.68v5.41h-17.2v7.09h16v5.42h-16v8.65h17.82v5.4Z"></path><path d="M986.27,716.84l-11.36-35.36h6.66l6,20.41,2.12,7.59,1.95-7.29,6-20.71h6.52L1009.8,702l1.85,6.74,2.16-6.83,6.49-20.44h6.2l-11.81,35.36h-6.58l-6-21.15-1.51-6.05-7.6,27.2Zm52.32,0-11.36-35.36h6.67l6,20.41,2.14,7.59q.12-.56,1.94-7.29l6-20.71h6.54l5.66,20.53,1.85,6.74,2.16-6.83,6.5-20.44h6.19L1067,716.84h-6.6l-6-21.15-1.51-6.05-7.6,27.2Zm52.33,0-11.37-35.36h6.67l6,20.41,2.12,7.59c.08-.37.74-2.8,2-7.29l6-20.71h6.53l5.66,20.53,1.85,6.74,2.16-6.83,6.5-20.44h6.19l-11.79,35.36h-6.6l-6-21.15-1.53-6.05-7.6,27.2Zm43.38,0V710h7.25v6.81Zm18.17,0V668.05h6.38v48.79Zm16.25,13.56V681.48h5.8v4.65a13.91,13.91,0,0,1,4.63-4,13.34,13.34,0,0,1,6.26-1.36,15.54,15.54,0,0,1,8.49,2.32,14.55,14.55,0,0,1,5.55,6.56,24.06,24.06,0,0,1-.19,19,15,15,0,0,1-6,6.64,16.09,16.09,0,0,1-8.28,2.31,12.58,12.58,0,0,1-5.71-1.26,13.09,13.09,0,0,1-4.16-3.19V730.4Zm5.8-31c0,4.52,1,7.88,2.92,10a9.24,9.24,0,0,0,7.1,3.26,9.41,9.41,0,0,0,7.25-3.37q3-3.37,3-10.43c0-4.51-1-7.87-2.94-10.11a9.1,9.1,0,0,0-7-3.35,9.33,9.33,0,0,0-7.17,3.57C1175.55,691.38,1174.52,694.83,1174.52,699.38Zm32,2.81v-6h19.71v6Zm51.23,1.71,6.23.82a14.86,14.86,0,0,1-5.25,9.45,15.88,15.88,0,0,1-10.36,3.43q-7.71,0-12.38-4.75t-4.69-13.56a23.44,23.44,0,0,1,2-10,13.44,13.44,0,0,1,6.14-6.42,19.06,19.06,0,0,1,9-2.15,16.19,16.19,0,0,1,10,2.91,13.2,13.2,0,0,1,5,8.27l-6.16.88a9.48,9.48,0,0,0-3.15-5.36,8.42,8.42,0,0,0-5.42-1.79,10.21,10.21,0,0,0-7.84,3.24c-2,2.16-3,5.57-3,10.25s1,8.19,2.89,10.34a9.74,9.74,0,0,0,7.57,3.22,9.24,9.24,0,0,0,6.27-2.16C1256.2,709.1,1257.26,706.88,1257.71,703.9Zm11.59,12.94V681.48H1275v5.42a14.52,14.52,0,0,1,4-5,7.28,7.28,0,0,1,4.09-1.21,13.25,13.25,0,0,1,6.56,1.9l-2.27,5.53a9.8,9.8,0,0,0-4.64-1.23,6.32,6.32,0,0,0-3.73,1.18,6.49,6.49,0,0,0-2.35,3.27,22,22,0,0,0-1.06,7v18.47Zm24.2,0V681.48h5.72v5a12.87,12.87,0,0,1,4.71-4.17,13.82,13.82,0,0,1,6.68-1.58,12.83,12.83,0,0,1,6.82,1.63,8.73,8.73,0,0,1,3.76,4.54,13.78,13.78,0,0,1,11.65-6.17c3.74,0,6.64,1,8.64,2.91s3,4.92,3,9v24.24h-6.38V694.59a15.6,15.6,0,0,0-.62-5.17,5,5,0,0,0-2.26-2.54,7.25,7.25,0,0,0-3.83-1,9.21,9.21,0,0,0-6.6,2.48c-1.75,1.66-2.63,4.29-2.63,7.94v20.51h-6.37v-23c0-2.65-.52-4.65-1.55-6s-2.75-2-5.11-2a9.75,9.75,0,0,0-5,1.33,7.63,7.63,0,0,0-3.3,3.89,20.79,20.79,0,0,0-1,7.39v18.32Zm62.17,0V710h7.25v6.81Zm24.19,0h-5.94V668.05h6.38v17.41a12.94,12.94,0,0,1,10.29-4.73,16.71,16.71,0,0,1,6.57,1.3,13.69,13.69,0,0,1,5.1,3.7,17.64,17.64,0,0,1,3.13,5.73,22.08,22.08,0,0,1,1.13,7.17q0,9.06-4.76,14a15.42,15.42,0,0,1-11.47,5,12.19,12.19,0,0,1-10.43-5.21Zm-.08-17.94c0,4.23.63,7.28,1.84,9.17a9.4,9.4,0,0,0,15.34,1.21q3-3.4,3-10.15,0-6.92-2.92-10.2a9.09,9.09,0,0,0-7-3.29,9.32,9.32,0,0,0-7.21,3.4Q1379.79,692.45,1379.78,698.9Zm34.51-24v-6.82h6.38v6.82Zm0,42V681.48h6.38v35.36Zm12.73,0V712l23.81-25.85q-4,.21-7.14.21h-15.23v-4.84h30.65v3.94l-20.38,22.42-3.91,4.17c2.87-.23,5.55-.34,8.06-.34h17.39v5.17Z"></path></svg>

        </div>




        <svg class="mobile-logo" style="width: 160px; margin-left:auto; margin-right: auto; display: block; height: auto; " id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1500 1000"><defs><style>.cls-1jj{fill:#fe0;}.cls-2jj{fill:#ff0483;}.cls-3jj{fill:#6a91cc;}.cls-4jj{fill-rule:evenodd;}</style></defs><path class="cls-1jj" d="M191.58,400.61s8-67.29,23.89-104.47A266.13,266.13,0,0,1,240,250.53c3.57-5.23,7.42-10.34,12.21-14.47s10.63-7.28,16.92-8c27-3.19,41.33,28.7,49.15,49.32,10,26.25,16.18,54.3,21.11,81.88,10.11,56.64,15.86,115,12.09,172.49-3.92,59.77-11,120.81-32.75,177.07a245.94,245.94,0,0,1-12.51,27.52c-3.74,7-7.92,13.85-13.44,19.55s-12.49,10.23-20.28,11.76c-8.39,1.63-17.25-.35-24.69-4.54-27.38-15.42-36.54-47.51-44.12-75.76-14.88-55.42-7-99-7-99s-2.76,20.68,11.94,59c6.87,17.93,11.63,38.53,24.55,53.3,6.54,7.46,16.51,12.7,26.26,10.91,10.59-1.94,18.12-11.31,23.35-20.72,13.59-24.47,19.26-52.43,24.31-79.7a621.45,621.45,0,0,0,9.49-79.53c3.09-56.55-1.21-114-13.88-169.2a289.65,289.65,0,0,0-12.65-42c-4.89-12.35-10.9-26.58-22.78-33.74a19.37,19.37,0,0,0-11.08-3.13c-6.3.4-11.55,4.88-15.82,9.53C230.4,303.91,223,316.71,217,330c-5.64,12.46-8.77,26-14.29,38.39A306.16,306.16,0,0,0,191.58,400.61Z"></path><path class="cls-2jj" d="M342.91,380.44a208.78,208.78,0,0,1,29.56-5.67c19.06-2.35,39.48-7.81,58.59-3.33,9.65,2.27,19,8.62,21.95,18.08,3.26,10.25-1.48,21.3-7.34,30.33-15.23,23.48-37.27,41.61-59,58.87a623.34,623.34,0,0,1-65.78,45.7C272.43,553.68,219.71,576.81,165,591.54a289.86,289.86,0,0,1-43,8.53c-13.21,1.47-28.59,2.84-40.49-4.29a19.49,19.49,0,0,1-8-8.32c-2.59-5.75-1.1-12.48,1-18.44,4.86-13.82,12.68-26.37,21.59-37.92,8.36-10.83,18.84-19.94,27.2-30.63a306.26,306.26,0,0,1,23.24-24.93s-55.68,38.61-81,70.12a266.29,266.29,0,0,0-28.78,43c-2.94,5.61-5.65,11.41-7,17.58s-1.45,12.8.85,18.7c9.86,25.36,44.73,23,66.61,20.28,27.86-3.53,55.55-11.2,82.21-19.79,54.77-17.64,109-39.94,158-70.25,50.94-31.51,101.5-66.44,141-112a245.83,245.83,0,0,0,18.43-24c4.42-6.59,8.51-13.5,11-21s3.18-15.84.86-23.43c-2.49-8.17-8.39-15.07-15.59-19.68-26.46-16.94-59.09-10-87.6-3.41a267.33,267.33,0,0,0-63.37,23.38"></path><path class="cls-3jj" d="M199.36,376.88c5.92,1,13.8,2.53,22.57,4.67,0,0-8.47-3.58-21.18-8.34Z"></path><path class="cls-3jj" d="M414,503.08c4.34,4.39,9,9.53,13.91,15.51,12.17,14.86,27.7,29.19,34.13,47.74,3.24,9.37,2.85,20.62-3.54,28.21-6.93,8.23-18.8,10.14-29.56,10-28-.31-55.09-9.25-81.27-18.36A623,623,0,0,1,273.84,555c-50.65-25.34-98.39-57.52-140.09-95.9a287.75,287.75,0,0,1-30.19-31.77c-8.31-10.37-17.69-22.64-18-36.51a19.42,19.42,0,0,1,2.76-11.18c3.48-5.27,10-7.61,16.12-9,14.28-3.28,29.06-3.38,43.59-2,13.62,1.27,26.92,5.25,40.42,6.61,0,0,2.48.29,6.7.94l.8-4.76c-21.78-8-53-18.18-76.59-20.87a265.54,265.54,0,0,0-51.74-1.33c-6.32.51-12.66,1.33-18.63,3.44s-11.59,5.62-15.35,10.72c-16.16,21.89,4.44,50.12,18.48,67.13,17.87,21.66,39.15,40.95,60.67,58.9,44.18,36.85,92,70.75,143.85,96,53.85,26.2,110.4,50.26,170,59.28a244.87,244.87,0,0,0,30.11,2.77c7.93.21,15.95,0,23.64-2s15.08-5.78,20.26-11.79c5.58-6.48,8.24-15.16,8.29-23.7.17-31.42-23.16-55.27-43.94-75.86a267.31,267.31,0,0,0-45-35.78"></path><rect class="cls-1jj" x="609.38" y="571.87" width="851.33" height="67.75" rx="28.87"></rect><path class="cls-4jj" d="M892.19,354.84v194h63V491.88H1064.5v56.93h60.44a49.44,49.44,0,0,0,2.6-15.84V518.19a49.64,49.64,0,0,0-42-49,47.45,47.45,0,0,0-7.1-.56,47.46,47.46,0,0,0,7.1-.55,49.65,49.65,0,0,0,42-49V404.37a49.59,49.59,0,0,0-49.36-49.53Zm63,93.29V398.59h84.58a24.77,24.77,0,0,1,0,49.54Z"></path><polygon class="cls-4jj" points="1307.64 485.03 1301.25 470.85 1280.33 424.45 1273.56 409.45 1248.92 354.79 1217.52 354.79 1198.55 354.79 1154.28 354.79 1154.28 548.77 1217.52 548.77 1217.52 409.45 1280.33 548.77 1307.64 548.77 1334.95 548.77 1397.76 409.45 1397.76 548.77 1461 548.77 1461 354.79 1416.73 354.79 1397.76 354.79 1366.35 354.79 1341.71 409.45 1334.95 424.45 1314.03 470.85 1307.64 485.03"></polygon><path class="cls-4jj" d="M672.74,354.84h-7.88A55.36,55.36,0,0,0,611,398.59a54.58,54.58,0,0,0-1.23,11.59v83.3A54.65,54.65,0,0,0,611,505.07a55.35,55.35,0,0,0,53.86,43.74H808.7c30.3,0,55.09-24.9,55.09-55.33V473.69h-63v7.14a24.26,24.26,0,0,1-24.14,24.24H696.89a24.27,24.27,0,0,1-24.15-24.24v-58a24.27,24.27,0,0,1,24.15-24.23h79.78a24.26,24.26,0,0,1,24.14,24.23V430h63V410.18c0-30.43-24.79-55.34-55.09-55.34Z"></path><path d="M649,621.73V590h6.48v26.3h16v5.4Zm99.77,0h-7l-2.77-7.27H726.24l-2.66,7.27h-6.85l12.42-32H736ZM737,609.05l-4.45-11.83-4.31,11.83Zm59.14,12.68v-32h6.27l13.16,21.43V589.76h6v32h-6.48l-12.95-21v21Zm76.11-32H884a23,23,0,0,1,6.08.61,10.66,10.66,0,0,1,4.81,3,14,14,0,0,1,3.05,5.18,24.11,24.11,0,0,1,1,7.56,20.85,20.85,0,0,1-1,6.8,14,14,0,0,1-3.41,5.64,11.37,11.37,0,0,1-4.53,2.57,19.55,19.55,0,0,1-5.71.66H872.22Zm6.48,5.41v21.16h4.8a17.66,17.66,0,0,0,3.88-.3,5.84,5.84,0,0,0,2.61-1.34,6.66,6.66,0,0,0,1.68-3.08,21,21,0,0,0,.65-5.86,19.28,19.28,0,0,0-.65-5.68,7.38,7.38,0,0,0-1.82-3.09,6.14,6.14,0,0,0-3-1.52,31,31,0,0,0-5.28-.29Zm69.41,26.56v-32h6.48v32Zm56.49,0v-32h6.27L1024,611.19V589.76h6v32h-6.47l-12.95-21v21Zm91-11.73v-5.42h13.89v12.77a17.3,17.3,0,0,1-5.87,3.47,21.26,21.26,0,0,1-7.79,1.5,17.44,17.44,0,0,1-8.75-2.11,13.55,13.55,0,0,1-5.59-6,19.72,19.72,0,0,1-1.87-8.54,18.38,18.38,0,0,1,2.09-8.89,14.2,14.2,0,0,1,6.12-6,16.44,16.44,0,0,1,7.65-1.59q6,0,9.3,2.5a11.32,11.32,0,0,1,4.31,6.93l-6.44,1.2a6.65,6.65,0,0,0-2.52-3.73,7.68,7.68,0,0,0-4.66-1.36,8.67,8.67,0,0,0-6.71,2.68c-1.65,1.8-2.49,4.45-2.49,8,0,3.8.84,6.66,2.52,8.55a8.45,8.45,0,0,0,6.63,2.85,11.25,11.25,0,0,0,4-.79,13.73,13.73,0,0,0,3.5-1.94v-4Zm76.14,11.73v-32h10.35a37.68,37.68,0,0,1,7.67.47,8.43,8.43,0,0,1,4.59,3.14,9.84,9.84,0,0,1,1.86,6.22,10.46,10.46,0,0,1-1.06,5,8.85,8.85,0,0,1-2.71,3.15,9.2,9.2,0,0,1-3.34,1.51,36.24,36.24,0,0,1-6.69.47h-4.19v12.05Zm6.48-26.56v9.11h3.51a15.8,15.8,0,0,0,5.08-.52,4.12,4.12,0,0,0,2-1.57,4.35,4.35,0,0,0,.73-2.49,4.21,4.21,0,0,0-1-2.89,4.56,4.56,0,0,0-2.59-1.44,32.51,32.51,0,0,0-4.63-.2Zm92.66,26.56h-7l-2.76-7.27H1248.3l-2.66,7.27h-6.85l12.42-32h6.84ZM1259,609.05l-4.44-11.83-4.32,11.83Zm74,1v-5.42h13.89v12.77a17.1,17.1,0,0,1-5.87,3.47,21.22,21.22,0,0,1-7.79,1.5,17.4,17.4,0,0,1-8.74-2.11,13.52,13.52,0,0,1-5.6-6,19.72,19.72,0,0,1-1.87-8.54,18.38,18.38,0,0,1,2.09-8.89,14.2,14.2,0,0,1,6.12-6,16.46,16.46,0,0,1,7.66-1.59c4,0,7.07.83,9.3,2.5a11.36,11.36,0,0,1,4.31,6.93l-6.44,1.2a6.67,6.67,0,0,0-2.53-3.73,7.64,7.64,0,0,0-4.66-1.36,8.65,8.65,0,0,0-6.7,2.68c-1.66,1.8-2.49,4.45-2.49,8,0,3.8.83,6.66,2.51,8.55a8.45,8.45,0,0,0,6.63,2.85,11.31,11.31,0,0,0,4.06-.79,13.9,13.9,0,0,0,3.5-1.94v-4Zm63.73,11.73v-32h23.68v5.41h-17.2v7.09h16v5.42h-16v8.65h17.82v5.4Z"></path><path d="M986.27,716.84l-11.36-35.36h6.66l6,20.41,2.12,7.59,1.95-7.29,6-20.71h6.52L1009.8,702l1.85,6.74,2.16-6.83,6.49-20.44h6.2l-11.81,35.36h-6.58l-6-21.15-1.51-6.05-7.6,27.2Zm52.32,0-11.36-35.36h6.67l6,20.41,2.14,7.59q.12-.56,1.94-7.29l6-20.71h6.54l5.66,20.53,1.85,6.74,2.16-6.83,6.5-20.44h6.19L1067,716.84h-6.6l-6-21.15-1.51-6.05-7.6,27.2Zm52.33,0-11.37-35.36h6.67l6,20.41,2.12,7.59c.08-.37.74-2.8,2-7.29l6-20.71h6.53l5.66,20.53,1.85,6.74,2.16-6.83,6.5-20.44h6.19l-11.79,35.36h-6.6l-6-21.15-1.53-6.05-7.6,27.2Zm43.38,0V710h7.25v6.81Zm18.17,0V668.05h6.38v48.79Zm16.25,13.56V681.48h5.8v4.65a13.91,13.91,0,0,1,4.63-4,13.34,13.34,0,0,1,6.26-1.36,15.54,15.54,0,0,1,8.49,2.32,14.55,14.55,0,0,1,5.55,6.56,24.06,24.06,0,0,1-.19,19,15,15,0,0,1-6,6.64,16.09,16.09,0,0,1-8.28,2.31,12.58,12.58,0,0,1-5.71-1.26,13.09,13.09,0,0,1-4.16-3.19V730.4Zm5.8-31c0,4.52,1,7.88,2.92,10a9.24,9.24,0,0,0,7.1,3.26,9.41,9.41,0,0,0,7.25-3.37q3-3.37,3-10.43c0-4.51-1-7.87-2.94-10.11a9.1,9.1,0,0,0-7-3.35,9.33,9.33,0,0,0-7.17,3.57C1175.55,691.38,1174.52,694.83,1174.52,699.38Zm32,2.81v-6h19.71v6Zm51.23,1.71,6.23.82a14.86,14.86,0,0,1-5.25,9.45,15.88,15.88,0,0,1-10.36,3.43q-7.71,0-12.38-4.75t-4.69-13.56a23.44,23.44,0,0,1,2-10,13.44,13.44,0,0,1,6.14-6.42,19.06,19.06,0,0,1,9-2.15,16.19,16.19,0,0,1,10,2.91,13.2,13.2,0,0,1,5,8.27l-6.16.88a9.48,9.48,0,0,0-3.15-5.36,8.42,8.42,0,0,0-5.42-1.79,10.21,10.21,0,0,0-7.84,3.24c-2,2.16-3,5.57-3,10.25s1,8.19,2.89,10.34a9.74,9.74,0,0,0,7.57,3.22,9.24,9.24,0,0,0,6.27-2.16C1256.2,709.1,1257.26,706.88,1257.71,703.9Zm11.59,12.94V681.48H1275v5.42a14.52,14.52,0,0,1,4-5,7.28,7.28,0,0,1,4.09-1.21,13.25,13.25,0,0,1,6.56,1.9l-2.27,5.53a9.8,9.8,0,0,0-4.64-1.23,6.32,6.32,0,0,0-3.73,1.18,6.49,6.49,0,0,0-2.35,3.27,22,22,0,0,0-1.06,7v18.47Zm24.2,0V681.48h5.72v5a12.87,12.87,0,0,1,4.71-4.17,13.82,13.82,0,0,1,6.68-1.58,12.83,12.83,0,0,1,6.82,1.63,8.73,8.73,0,0,1,3.76,4.54,13.78,13.78,0,0,1,11.65-6.17c3.74,0,6.64,1,8.64,2.91s3,4.92,3,9v24.24h-6.38V694.59a15.6,15.6,0,0,0-.62-5.17,5,5,0,0,0-2.26-2.54,7.25,7.25,0,0,0-3.83-1,9.21,9.21,0,0,0-6.6,2.48c-1.75,1.66-2.63,4.29-2.63,7.94v20.51h-6.37v-23c0-2.65-.52-4.65-1.55-6s-2.75-2-5.11-2a9.75,9.75,0,0,0-5,1.33,7.63,7.63,0,0,0-3.3,3.89,20.79,20.79,0,0,0-1,7.39v18.32Zm62.17,0V710h7.25v6.81Zm24.19,0h-5.94V668.05h6.38v17.41a12.94,12.94,0,0,1,10.29-4.73,16.71,16.71,0,0,1,6.57,1.3,13.69,13.69,0,0,1,5.1,3.7,17.64,17.64,0,0,1,3.13,5.73,22.08,22.08,0,0,1,1.13,7.17q0,9.06-4.76,14a15.42,15.42,0,0,1-11.47,5,12.19,12.19,0,0,1-10.43-5.21Zm-.08-17.94c0,4.23.63,7.28,1.84,9.17a9.4,9.4,0,0,0,15.34,1.21q3-3.4,3-10.15,0-6.92-2.92-10.2a9.09,9.09,0,0,0-7-3.29,9.32,9.32,0,0,0-7.21,3.4Q1379.79,692.45,1379.78,698.9Zm34.51-24v-6.82h6.38v6.82Zm0,42V681.48h6.38v35.36Zm12.73,0V712l23.81-25.85q-4,.21-7.14.21h-15.23v-4.84h30.65v3.94l-20.38,22.42-3.91,4.17c2.87-.23,5.55-.34,8.06-.34h17.39v5.17Z"></path></svg>

    </div>
    <div class="wrapper">
        <div class="price">
            <div class="header__price">
                <img src="imgs/price.png" alt=""><p>Цены</p>
            </div>
            <div class="content__price">
                <div class="start">
                    <span>Старт</span>
                    <p>- 500 заказов<br>- 2 сотрудника<br>- полная интеграция<br>с лендингами и интернет<br> магазинами<br>- массовая рассылка СМС<br>- Модульная система<br>(Нова Пошта, Почта России <br>и т.д.)<br>- IP-телефония<br>- склад<br>- статистика<br>- экспорт, импорт данных<br>- техподдержка</p>
                    <div class="price_order">
                        <span>699₴</span>
                        <a href="">Заказать ></a>
                    </div>
                </div>

                <div class="business">
                    <span>Бизнесс</span>
                    <p>- 1000 заказов<br>- 5 сотрудника<br>- полная интеграция<br>с лендингами и интернет<br> магазинами<br>- массовая рассылка СМС<br>- Модульная система<br>(Нова Пошта, Почта России <br>и т.д.)<br>- IP-телефония<br>- склад<br>- статистика<br>- экспорт, импорт данных<br>- техподдержка</p>
                    <div class="price_order">
                        <span>1199₴</span>
                        <a href="">Заказать ></a>
                    </div>
                </div>

                <div class="vip">
                    <span>Вип</span>
                    <p>- ∞ заказов<br>- ∞ сотрудника<br>- полная интеграция<br>с лендингами и интернет<br> магазинами<br>- массовая рассылка СМС<br>- Модульная система<br>(Нова Пошта, Почта России <br>и т.д.)<br>- IP-телефония<br>- склад<br>- статистика<br>- экспорт, импорт данных<br>- техподдержка</p>
                    <div class="price_order">
                        <span>1699₴</span>
                        <a href="">Заказать ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<footer>
<div class="wrapper">
    <div class="right">
        <div id="openModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Политика конфиденциальности</h3>
                        <a href="#close" title="Close" class="close1">×</a>
                    </div>
                    <div class="modal-body">
                        <p>
                            1. ОБЩИЕ ПОЛОЖЕНИЯ <br/>
                            1.1. Настоящая Политика конфиденциальности (далее – «Политика») касается пользования Веб-сайтом и Сервисами в соответствии с положениями Пользовательского соглашения (далее — «Соглашение») и содержит правила и условиями обращения с вашей персональной информацией.<br/>
                            1.2. Политика действует в отношении всей информации, которую мы можем получить о Пользователе во время использования им Веб-сайта и Сервисом.<br/>
                            1.3. Политика является неотъемлемой частью Соглашения и также как Соглашение является юридически обязательной.<br/>
                            1.4. Пожалуйста, внимательно ознакомьтесь с Соглашением, прежде чем вы начнете использовать Веб-сайт. Текст Политики доступен по ссылке внизу большинства страниц Веб-сайта.<br/>
                            1.5. Пользованием Веб-сайтом и Сервисами вы выражаете свое безоговорочное согласие с настоящей Политикой и указанЙными в ней условиями предоставления, сбора, обработки вашей персональной информации; в случае несогласия с этими условиями Пользователь должен воздержаться от использования Веб-сайта и Сервисов.<br/>
                            1.6. Настоящая Политика описывает практику обращения с персональной информацией Пользователей, применяемой нами в качестве передовой практики, что показывает наше стремление защитить персональные данные Пользователей.<br/>
                            1.7. Термины, используемые в настоящей Политике с большой буквы, и которым не даны определения в настоящей Политике, имеют значения, данные им в Соглашении.<br/><br/>
                            2. СОБИРАЕМАЯ И ОТСЛЕЖИВАЕМАЯ ИНФОРМАЦИЯ<br/>
                            2.1. В настоящей Политике под «персональной информацией» Пользователя понимаются:<br/>
                            2.1.1. персональная информация, которую Пользователь самостоятельно предоставляет о себе при заполнении форм отзыва или обратной связи или при регистрации (создании учётной записи) на Веб-сайте или в процессе использования Веб-сайта и Сервисов, включая персональные данные Пользователя.<br/>
                            2.1.2. данные, которые автоматически передаются в процессе пользования Веб-сайтом и Сервисами с помощью установленного на устройстве Пользователя программного обеспечения, включая IP-адрес, информация из файлов «cookie», информация о браузере Пользователя (или иной программе, с помощью которой осуществляется доступ к Веб-сайту и Сервисам), время доступа, адрес запрашиваемой страницы.<br/>
                            2.1.3. иная информация о Пользователе, сбор и/или предоставление которой происходит в процессе пользования Веб-сайтом и Сервисами.<br/>
                            2.2. Пользованием Веб-сайтом и Сервисами Пользователь выражает свое безоговорочное согласие на предоставление всех видов персональной информации согласно п. 2.1 настоящей Политики и делает это добровольно на свой страх и риск.<br/>
                            2.3. При заполнении форм отзыва или обратной связи или при регистрации (создании учётной записи) на Веб-сайте от Пользователя может запрашиваться следующая информация: полное имя, никнейм, адрес электронной почты, пол, дата рождения, национальность, подробности местонахождения и некоторые подробности о себе, предоставляемые по желанию.<br/>
                            2.4. Зарегистрированные пользователи имеют доступ к информации, предоставленной при регистрации на Веб-сайте, для просмотра и могут вносить в нее изменения или дополнения в своей учетной записи на Веб-сайте.<br/>
                            2.5. Файлы cookie. Для улучшения вашей работы с Веб-сайтом и Сервисами мы используем небольшие файлы «cookie» для сохранения сведений с целью входа Пользователя на Веб-сайт и для обеспечения оптимального использования Пользователем Веб-сайта и Сервисов при помощи временных фалов «cookie» во время каждого сеанса доступа и пользования.<br/>
                            2.6. Реклама третьих лиц. В случае размещения на Веб-сайте рекламы во время вашего посещения Веб-сайта мы используем рекламные компании, являющиеся третьими лицами. Такие компании могут использовать определенную информацию относительно вас (за исключением имени, адреса, адреса электронной почты и номера телефона) о вашем визите на Веб-сайт, а также других веб-сайтов для предоставления рекламных материалов на Веб-сайте и других веб-сайтах о товарах и услугах, которые могут быть вам интересны.<br/>
                            2.7. Файлы «cookie» третьих сторон. В ходе размещения рекламных материалов на данном Веб-сайте, рекламодатель-третья сторона может поместить или распознать в вашем браузере уникальный файл «cookie».<br/>
                            3. СБОР, ХРАНЕНИЕ, ОБРАБОТКА, ИСПОЛЬЗОВАНИЕ И ПЕРЕДАЧА ИНФОРМАЦИИ И ДОСТУП К НЕЙ<br/>
                            3.1. Мы собираем, храним и используем только ту персональную информацию Пользователя, которые необходимы для надлежащего исполнения нами Пользовательского соглашения, предоставления Пользователю возможности пользования Веб-сайтом и Сервисами, оказания необходимой помощи Пользователю, а также для связи с Пользователем.<br/>
                            3.2. В отношении персональной информации Пользователя сохраняется ее конфиденциальность, кроме случаев добровольного предоставления Пользователем информации о себе для общего доступа неограниченному кругу лиц.<br/>
                            3.3. Пользователь соглашается с тем, что мы можем делиться предоставленной вами (или собранной о вас) персональной информацией с нашими материнскими или дочерними структурами или другими организациями и лицами, а именно: передавать определённую персональную информацию по нашему усмотрению материнским или дочерним организациям, организациям-партнерам, или иным привлеченным лицам (например, волонтерами) в целях, для которых эта информация была собрана, с соблюдением такими организациями и лицами наших инструкций, условий настоящей Политики, режима конфиденциальности и безопасности относительно такой информации.<br/>
                            3.4. Пользователь соглашается с тем, что в случае передачи всех (или значительной части) активов, используемых нами для ведения своей деятельности, третьему лицу, мы можем передать доступную нам на такой момент персональную информацию Пользователя такому третьему лицу.<br/>
                            3.5. Используя Веб-сайт и настоящим, Пользователь предоставляет свое согласие на передачу персональной информации о нем лицам, указанным в пп. 3.3, 3.4 настоящей Политики, в порядке и на условиях, предусмотренных теми же пунктом.<br/>
                            3.6. При обработке персональных данных пользователей мы руководствуемся Законом Украины «О защите персональных данных».<br/>
                            3.7. Мы вправе передавать (разглашать) персональную информацию Пользователя третьим лицам так же, если:<br/>
                            3.7.1. Пользователь выразил свое согласие на такие действия;<br/>
                            3.7.2. Передача необходима в рамках использования пользователем Веб-сайта или определенного Сервиса, для оказания услуги или помощи Пользователю или для связи с ним;<br/>
                            3.7.3. Передача предусмотрена законодательством Украины или иным применимым законодательством в рамках установленной правомерной процедуры.<br/>
                            3.8. Мы можем предоставлять третьим лицам общую информацию (статистические данные, обобщенную информацию), которая не содержит персональную информацию и которая не идентифицирует Пользователя индивидуально.<br/>
                            3.9. Мы гарантируем Пользователю соблюдение его прав как субъекта персональных данных согласно действующему законодательству.<br/>
                            4. БЕЗОПАСНОСТЬ<br/>
                            4.1. Персональные данные пользователя хранятся на серверах, которые могут физически находится как в Украине так и за рубежом.<br/>
                            4.2. Пользователь подтверждает и предоставляет нам право перемещать персональные данные через границу Украины в целях, для которой эта информация была собрана. Мы обязуемся предпринимать надлежащие меры безопасности для защиты от неправомерного доступа или неправомерного изменения, разглашения или уничтожения персональных данных Пользователя.<br/>
                            4.3. Мы несем ответственность за безопасность и защиту персональных данных Пользователя, а также за сбор, хранение, и использование его персональных данных.<br/>
                            4.4. Мы применяем необходимые и достаточные организационные и технические меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения, изменения, блокирования, копирования, распространения, а также от иных неправомерных действий с ней третьих лиц. Однако ответственностью каждого Пользователя остаётся следующее:<br/>
                            4.4.1. защищать ваши сведения от несанкционированного доступа;<br/>
                            4.4.2. исключить использование Веб-сайта и Сервисов другими лицами на оборудовании, где Пользователь выполнил вход на Веб-сайт и в Сервисы, или под учетной записью Члена;<br/>
                            4.4.3. выполнять выход или отключаться от Веб-сайта и Сервисов, когда Пользователь не использует Веб-сайт и Сервисы; а также<br/>
                            4.4.4. сохранять в тайне пароль;<br/>
                            4.4.5. не указывать свой адрес, полное имя, место работы или учёбы, номер мобильного телефона или адрес электронной почты или другую идентифицирующую информацию в своём публичном профиле.<br/>
                            5. ИЗМЕНЕНИЕ И УДАЛЕНИЕ ИНФОРМАЦИИ<br/>
                            5.1. При изменении персональной информации Пользователь в любое время может изменить, обновить, а также удалить предоставленную ранее информацию путем отправки соответствующего электронного письма в службу поддержки Веб-сайта.<br/>
                            5.2. При изменении персональной информации Зарегистрированный пользователь может в любое время изменить, обновить, удалить предоставленную ранее информацию, а также удалить или деактивировать свою учетную запись на странице учётной записи на Веб-сайте или путем отправки соответствующего электронного письма в Службу поддержки Веб-сайта.<br/>
                            5.3. Адрес электронной почты Службы поддержки Веб-сайта: info@proactive.fm<br/>
                            6. СВЯЗЬ С НАМИ<br/>
                            6.1. В случае возникновения каких-либо вопросов касательно настоящей Политики, работы Веб-сайта, Сервисов или вашего взаимодействия с нами, вы можете связаться с нами путём направления соответствующего сообщения по электронному адресу: info@proactive.fm<br/>
                            6.2. Обратившись по указанному адресу электронной почты, вы можете также сделать запрос о получении от нас копий персональной информации, которую мы храним о вас или описания этой информации.<br/>
                            6.3. Почтовый адрес для связи с нами:<br/>


                            7. ССЫЛКИ НА ВЕБ-САЙТЫ ТРЕТЬИХ ЛИЦ<br/>
                            Наш Веб-сайт содержит ссылки на другие веб-сайты. Мы не несём ответственность за практику сохранения конфиденциальности и за содержимое таких веб-сайтов.<br/>


                            8. ИЗМЕНЕНИЯ В НАСТОЯЩЕЙ ПОЛИТИКЕ<br/>
                            8.1. В случае принятия нами решения внести изменения в Политику, мы укажем такие изменения в настоящей Политике, на домашней странице Веб-сайта, а также в иных уместных местах, чтобы донести вам то, какую информацию мы собираем, как её используем и при каких обстоятельствах её разглашаем (или не разглашаем).<br/>
                            8.2. Мы оставляем за собой право вносить изменения в настоящую Политику конфиденциальности в любое время, поэтому, пожалуйста, периодически ее просматривайте. В случае внесения существенных изменений в настоящую Политику, мы, по нашему усмотрению, оповестим вас на этой странице Веб-сайта, по электронной почте или путём сообщения об этом на домашней странице Веб-сайта.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="openModal1" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Пользовательское соглашение</h3>
                        <a href="#close" title="Close" class="close1">×</a>
                    </div>
                    <div class="modal-body">
                        <p>Защита личных данных<br />
                            Пользовательское соглавшение<br />
                            Настоящее Соглашение определяет условия использования Пользователями материалов и сервисов сайта lp-crm.biz/best/ (далее — «Сайт»).<br />

                            1.Общие условия<br />

                            1.1. Использование материалов и сервисов Сайта регулируется нормами действующего законодательства Украины.<br />

                            1.2. Настоящее Соглашение является публичной офертой. Получая доступ к материалам Сайта Пользователь считается присоединившимся к настоящему Соглашению.<br />

                            1.3. Администрация Сайта вправе в любое время в одностороннем порядке изменять условия настоящего Соглашения. Такие изменения вступают в силу по истечении 3 (Трех) дней с момента размещения новой версии Соглашения на сайте. При несогласии Пользователя с внесенными изменениями он обязан отказаться от доступа к Сайту, прекратить использование материалов и сервисов Сайта.<br />

                            2. Обязательства Пользователя<br />

                            2.1. Пользователь соглашается не предпринимать действий, которые могут рассматриваться как нарушающие украинское законодательство или нормы международного права, в том числе в сфере интеллектуальной собственности, авторских и/или смежных правах, а также любых действий, которые приводят или могут привести к нарушению нормальной работы Сайта и сервисов Сайта.<br />

                            2.2. Использование материалов Сайта без согласия правообладателей не допускается. Для правомерного использования материалов Сайта необходимо заключение лицензионных договоров (получение лицензий) от Правообладателей.<br />

                            2.3. При цитировании материалов Сайта, включая охраняемые авторские произведения, ссылка на Сайт обязательна.<br />

                            2.4. Комментарии и иные записи Пользователя на Сайте не должны вступать в противоречие с требованиями законодательства Укрианы и общепринятых норм морали и нравственности.<br />

                            2.5. Пользователь предупрежден о том, что Администрация Сайта не несет ответственности за посещение и использование им внешних ресурсов, ссылки на которые могут содержаться на сайте.<br />

                            2.6. Пользователь согласен с тем, что Администрация Сайта не несет ответственности и не имеет прямых или косвенных обязательств перед Пользователем в связи с любыми возможными или возникшими потерями или убытками, связанными с любым содержанием Сайта, регистрацией авторских прав и сведениями о такой регистрации, товарами или услугами, доступными на или полученными через внешние сайты или ресурсы либо иные контакты Пользователя, в которые он вступил, используя размещенную на Сайте информацию или ссылки на внешние ресурсы.<br />

                            2.7. Пользователь принимает положение о том, что все материалы и сервисы Сайта или любая их часть могут сопровождаться рекламой. Пользователь согласен с тем, что Администрация Сайта не несет какой-либо ответственности и не имеет каких-либо обязательств в связи с такой рекламой.<br />

                            3. Прочие условия<br />

                            3.1. Все возможные споры, вытекающие из настоящего Соглашения или связанные с ним, подлежат разрешению в соответствии с действующим законодательством Украины.<br />

                            3.2. Ничто в Соглашении не может пониматься как установление между Пользователем и Администрации Сайта агентских отношений, отношений товарищества, отношений по совместной деятельности, отношений личного найма, либо каких-то иных отношений, прямо не предусмотренных Соглашением.<br />

                            3.3. Признание судом какого-либо положения Соглашения недействительным или не подлежащим принудительному исполнению не влечет недействительности иных положений Соглашения.<br />

                            3.4. Бездействие со стороны Администрации Сайта в случае нарушения кем-либо из Пользователей положений Соглашения не лишает Администрацию Сайта права предпринять позднее соответствующие действия в защиту своих интересов и защиту авторских прав на охраняемые в соответствии с законодательством материалы Сайта.<br />

                            Пользователь подтверждает, что ознакомлен со всеми пунктами настоящего Соглашения и безусловно принимает их.<br /></p>

                    </div>
                </div>
            </div>
        </div>


        <a href="#openModal">Политика конфиденциальности</a> <br>
        <a href="#openModal1">Пользовательское соглашение </a>


    </div>


    <style>
        .modal {
            position: fixed; /* фиксированное положение */
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0,0,0,0.5); /* цвет фона */
            z-index: 1050;
            opacity: 0; /* по умолчанию модальное окно прозрачно */
            -webkit-transition: opacity 200ms ease-in;
            -moz-transition: opacity 200ms ease-in;
            transition: opacity 200ms ease-in; /* анимация перехода */
            pointer-events: none; /* элемент невидим для событий мыши */
            margin: 0;
            padding: 0;
        }
        /* при отображении модального окно */
        .modal:target {
            opacity: 1; /* делаем окно видимым */
            pointer-events: auto; /* элемент видим для событий мыши */
            overflow-y: auto; /* добавляем прокрутку по y, когда элемент не помещается на страницу */
        }
        /* ширина модального окна и его отступы от экрана */
        .modal-dialog {
            position: relative;
            width: auto;
            max-width: 700px;
            margin: 10px;
        }
        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 700px;
                margin: 30px auto; /* для отображения модального окна по центру */
            }
        }
        /* свойства для блока, содержащего контент модального окна */
        .modal-content {
            position: relative;
            color: black;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0,0,0,.2);
            border-radius: .3rem;
            outline: 0;
        }
        @media (min-width: 768px) {
            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0,0,0,.5);
                box-shadow: 0 5px 15px rgba(0,0,0,.5);
            }
        }
        /* свойства для заголовка модального окна */
        .modal-header {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: 15px;
            border-bottom: 1px solid #eceeef;
        }
        .modal-title {
            margin-top: 0;
            margin-bottom: 0;
            line-height: 1.5;
            font-size: 1.25rem;
            font-weight: 500;
        }
        /* свойства для кнопки "Закрыть" */
        .close1 {
            float: right;
            font-family: sans-serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 1;
            color: black;
            text-shadow: 0 1px 0 #fff;
            opacity: .5;
            text-decoration: none;
        }
        /* свойства для кнопки "Закрыть" при нахождении её в фокусе или наведении */
        .close:focus, .close:hover {
            color:black;
            text-decoration: none;
            cursor: pointer;
            opacity: .75;
        }
        /* свойства для блока, содержащего основное содержимое окна */
        .modal-body {
            position: relative;
            font-size: 15px;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 auto;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 15px;
            overflow: auto;
        }



    </style>
    <div class="center">


        <div class="icons" style="padding-top: 15px;">

            <div class="footer-icon">
                <a href="https://www.facebook.com/lpcrm" target="_blank">
                    <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/>
                    </svg>
                </a>
            </div>


            <div class="footer-icon">

                <a href="https://www.instagram.com/lp_crm.biz/" target="_blank">

                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
	 viewBox="0 0 504.4 504.4" style="enable-background:new 0 0 504.4 504.4;" xml:space="preserve">
<g>
	<g>
		<path d="M296.8,219.8c-10-14-26.4-23.2-44.8-23.2c-18.4,0-34.8,9.2-44.8,23.2c-6.4,9.2-10.4,20.4-10.4,32.4
			c0,30.4,24.8,55.2,55.2,55.2c30.4,0,55.2-24.8,55.2-55.2C307.2,240.2,303.2,229,296.8,219.8z"/>
	</g>
</g>
<g>
	<g>
		<path d="M331.6,220.2c4,8,6.4,20.8,6.4,32c0,47.2-38.4,86-86,86c-47.6,0-86-38.4-86-86c0-11.6,2.4-24,6.4-32H124v128.4
			c0,16.8,14.8,31.6,31.6,31.6h192.8c16.8,0,31.6-14.8,31.6-31.6V220.2H331.6z"/>
	</g>
</g>
<g>
	<g>
		<polygon points="365.6,131.4 319.2,131.4 319.2,184.6 372,184.6 372,138.2 372,131 		"/>
	</g>
</g>
<g>
	<g>
		<path d="M377.6,0.2H126.4C56.8,0.2,0,57,0,126.6v251.6c0,69.2,56.8,126,126.4,126H378c69.6,0,126.4-56.8,126.4-126.4V126.6
			C504,57,447.2,0.2,377.6,0.2z M408,219.8L408,219.8l0,128.8c0,33.6-26,59.6-59.6,59.6H155.6c-33.6,0-59.6-26-59.6-59.6V219.8v-64
			c0-33.6,26-59.6,59.6-59.6h192.8c33.6,0,59.6,26,59.6,59.6V219.8z"/>
	</g>
</g>

</svg>
                </a>

            </div>
            <div class="footer-icon">
                <a href="https://t.me/Lp_crm_biz" target="_blank">
                    <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/>
                    </svg>
                </a>
            </div>
            <div class="footer-icon">
                <a href="https://www.youtube.com/channel/UC4AWG4wh5zmY9hm9qDGT_vQ" target="_blank">

                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80
			c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904
			C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728
			c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816
			c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096
			C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z"/>
	</g>
</g>

</svg>
                </a>

            </div>
             <div class="footer-icon">
                <a href="https://vk.com/lp_crm" target="_blank">
                    <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="m19.915 13.028c-.388-.49-.277-.708 0-1.146.005-.005 3.208-4.431 3.538-5.932l.002-.001c.164-.547 0-.949-.793-.949h-2.624c-.668 0-.976.345-1.141.731 0 0-1.336 3.198-3.226 5.271-.61.599-.892.791-1.225.791-.164 0-.419-.192-.419-.739v-5.105c0-.656-.187-.949-.74-.949h-4.126c-.419 0-.668.306-.668.591 0 .622.945.765 1.043 2.515v3.797c0 .832-.151.985-.486.985-.892 0-3.057-3.211-4.34-6.886-.259-.713-.512-1.001-1.185-1.001h-2.625c-.749 0-.9.345-.9.731 0 .682.892 4.073 4.148 8.553 2.17 3.058 5.226 4.715 8.006 4.715 1.671 0 1.875-.368 1.875-1.001 0-2.922-.151-3.198.686-3.198.388 0 1.056.192 2.616 1.667 1.783 1.749 2.076 2.532 3.074 2.532h2.624c.748 0 1.127-.368.909-1.094-.499-1.527-3.871-4.668-4.023-4.878z"/>
                    </svg>
                </a>
            </div>
            <div class="footer-icon">
                <a href="https://blog.lp-crm.biz/" target="_blank">

                    <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M495.914,189.604c-18.965-15.914-47.343-13.424-63.228,5.506l-42.695,50.523V99.129c0-12.279-5.106-24.17-14.008-32.625
			l-56.978-54.125C310.606,4.4,299.6,0.005,288.015,0.005H44.999C20.187,0.005,0,20.192,0,45.004v421.991
			c0,24.812,20.187,44.999,44.999,44.999h299.994c24.812,0,44.999-20.187,44.999-44.999v-81.961
			C391.835,382.851,501.116,253.407,501.46,253C517.447,233.948,514.969,205.592,495.914,189.604z M299.994,35.695
			c60.013,57.008,55.751,52.841,56.876,54.309h-56.876V35.695z M359.992,466.995c0,8.271-6.729,15-15,15H44.999
			c-8.271,0-15-6.729-15-15V45.004c0-8.271,6.729-15,15-15h224.995v74.998c0,8.284,6.716,15,15,15h74.998v161.129
			c-6.443,7.624-58.178,68.843-63.77,75.46c-4.467,5.324-7.682,11.711-9.296,18.47l-13.94,58.356
			c-1.319,5.526,0.596,11.324,4.948,14.976c4.356,3.656,10.399,4.529,15.607,2.272l55.05-23.862
			c4.133-1.792,7.988-4.226,11.401-7.151V466.995z M324.315,369.827l22.978,19.28l-5.11,6.052c-1.487,1.774-3.398,3.199-5.523,4.12
			l-27.524,11.931l6.971-29.178c0.538-2.253,1.609-4.382,3.064-6.116L324.315,369.827z M366.644,366.184l-22.967-19.271
			c2.33-2.757,77.698-91.943,82.91-98.11l22.919,19.231L366.644,366.184z M478.509,233.682l-9.649,11.43l-22.908-19.222
			l9.682-11.457c5.289-6.303,14.71-7.125,20.997-1.849C483.043,217.963,483.75,227.436,478.509,233.682z"/>
	</g>
</g>
<g>
	<g>
		<path d="M224.995,90.003H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
			S233.279,90.003,224.995,90.003z"/>
	</g>
</g>
<g>
	<g>
		<path d="M314.993,181.001H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
			S323.277,181.001,314.993,181.001z"/>
	</g>
</g>
<g>
	<g>
		<path d="M314.993,271H74.998c-8.284,0-15,6.716-15,15c0,8.284,6.716,15,15,15h239.995c8.284,0,15-6.716,15-15
			C329.993,277.715,323.277,271,314.993,271z"/>
	</g>
</g>
<g>
	<g>
		<path d="M224.995,360.998H74.998c-8.284,0-15,6.716-15,15s6.716,15,15,15h149.997c8.284,0,15-6.716,15-15
			S233.279,360.998,224.995,360.998z"/>
	</g>
</g>

</svg>
                </a>

            </div>
        </div>
    </div>

       <div class="left">
<!--        <p style="margin-left: 80px;">-->
            <span style="margin-top: 11px; display: inline-block;"><script>
  document.write( new Date().getFullYear());
</script></span> LP-CRM, All Rights Reserved</span>
        </p></span>
        </p>
    </div>
</div>
</footer>
    </div>
</div>

</footer>

    <script src="jquery.min.js"></script>
    <script src="mask_input.js"></script>
    <script src="js/hammer.min.js"></script>
    <script src="script.js"></script>
    <script>

    </script>
<script src="//www.youtube.com/player_api"></script>

</body>

</html>