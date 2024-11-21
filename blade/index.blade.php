<!DOCTYPE html>
<html lang="ko">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0" />

<title></title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">

<script src="./js/jquery.js"></script>
<script src="./js/script.js"></script>

<style>
    #header {
        display: none;
    }
</style>

<body>
<div id="header">
    <header id="header">
        @include('client.components.header')
    </header>
</div>
<div id="wrap">


    <!-- 내용 -->
    <div class="main-image" data-speed="clamp(0.5)">
        <img src="images/braintracer_main_picture.png" class="big-image"/>

        <div class="main-text-wrap">

            <div class="main-image-bigText">
                    <span class="font8">Detecting&nbsp;</span>
                    <span class="font8">Changes</span>
                    <span>,&nbsp;</span>
                    <span>Protecting&nbsp;</span>
                    <span>You. </span> <br/>
                    <span class="font8">변화를&nbsp; </span>
                    <span class="font8">감지</span>
                    <span>하고,&nbsp;</span>
                    <span>당신을&nbsp;</span>
                    <span>보호합니다.</span>

            </div>

            <div class="go-homePage">
                <a href="{{ route("main") }}" class="font6">

                    대표홈페이지 바로가기
                </a>
            </div>
        </div>

    </div>

    <footer id="footer">
        @include('client.components.footer')
    </footer>
</div>

</body>
</html>
