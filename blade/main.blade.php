<!DOCTYPE html>
<html lang="ko">
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0"
/>

<title></title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
<link
    rel="stylesheet"
    href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css"
/>
<link rel="stylesheet" type="text/css" href="./css/common.css"/>
<link rel="stylesheet" href="./css/style.css"/>
<!-- <link rel="stylesheet" type="text/css" href="path/to/xeicon/xeicon.min.css" /> -->
<!-- swiper -->
<!-- Link Swiper's CSS -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<!-- AOS 라이브러리 -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>

<script src="./js/jquery.js"></script>
<script src="./js/script.js"></script>

<body>
<header id="header">
    @include('client.components.header')
</header>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($banners as $key => $banner)
            <div class="swiper-slide">
                <div class="bg-video">
                    @if($banner->is_video)
                        <video
                            src="{{ $banner->image }}"
                            class="brain-video"
                            type="video/mp4"
                            autoplay
                            muted
                            playsinline
                            loop
                        ></video>
                    @else
                        <img class="mb-img" src="{{ $banner->image }}" alt="메인 배너">
                    @endif
                    <div class="brain-main-texts">
                        <p class="big-text font6">
                            {!! nl2br(e($banner->title)) !!}
                        </p>
                        <p class="small-text font4">
                            {!! nl2br(e($banner->content)) !!}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 요청사항 삭제 -->
    <!-- <div class="control-wrap">
        <div class="swiper-button-prev"></div>

        <div class="swiper-pagination">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <div class="swiper-button-next"></div>
    </div> -->
</div>
<!-- 쉽고 재미있는 심리측정 -->

<div class="black-background">
    <div class="conatainer-1440">
        <div class="text section-01">
            <div class="black-big-text font6">
                <div class="big-text main-title font6" data-aos="fade-down">
                    <span class="easy font6">쉽고 재미있는</span> 심리측정
                </div>
            </div>
        </div>

        <div class="articles">
            <div class="article" data-aos="fade-left">
                <img
                    src="./images/survey.png"
                    alt="자기보고식 설문 제공"
                    class="article-image"
                />

                <p class="title font5">자기보고식 설문 제공</p>
                <p class="content font4">사용자 맞춤형 설문 및 기록</p>
            </div>

            <div class="article" data-aos="fade-up">
                <img
                    src="./images/puzzle.png"
                    alt="개인 맞춤형 심리 모니터링"
                    class="article-image"
                />

                <p class="title font5">개인 맞춤형 심리 모니터링</p>
                <p class="content font4">주기적 사용자 심리 상태 기록</p>
            </div>

            <div class="article" data-aos="fade-right">
                <img
                    src="./images/laptop.png"
                    alt="조기 탐지 시스템"
                    class="article-image"
                />

                <p class="title font5">조기 탐지 시스템</p>
                <p class="content font4">변곡점 발견을 통한 트라우마 원인 분석</p>
            </div>
        </div>

        <div class="show-more-btn" data-aos="fade-up">
            <button class="show-more font6">
                <a href="{{ route("services") }}#braintracerforall">
                    더 알아보기 <i class="xi-long-arrow-right"></i>
                </a>
            </button>
        </div>

        <div class="special-img" data-aos="fade-up">
            <img
                src="./images/special_image.svg"
                alt="브레인트레이서의 특별함"
                class="special_image"
            />
            <p class="title font6">브레인트레이서의 특별함</p>
            <p class="content font5">
                생활습관과 성격을 주 단위로 기록해주세요<br class="only-mobile"/>
                맞춤형 질문을 제시하고<br class="only-pc"/>
                사용자 감정 분석을<br class="only-mobile"/>
                통해 심리 설문과 인지 측정을 매칭합니다.
            </p>
        </div>

        <section class="section-02">
            <div class="text">
                <div class="black-big-text font6" data-aos="fade-left">
                    <h3 class="big-text main-title font6">
                        <span class="easy font6">맞춤형</span> 모니터링 시스템
                    </h3>
                </div>
            </div>
            <div class="main-items-wrap" data-aos="fade-left">
                <ul>
                    <li class="item active">
                        <div class="monitering-bizs">
                            <div class="biz-article">
                                <div class="biz-text">
                                    <div class="biz-title-wrap">
                                        <button class="biz-button">
                                            <p class="biz-title font6">
                                                심리적 외상 조기탐지 시스템
                                            </p>

                                            <i class="xi-angle-up-thin"></i>
                                        </button>
                                    </div>
                                    <p class="biz-content active font4">
                                        사용자의 심리적 외상을 조기에 탐지하는 시스템으로,
                                        딥러닝 기반 음성 및 텍스트 감정 분석을 활용해
                                        심리 상태를 모니터링하고 사용자 상태 변화를 분석해
                                        심리적 악화의 시점을 파악합니다. 이를 바탕으로
                                        대화형 AI를 통해 트라우마 원인 분석을 지원합니다.
                                    </p>

                                    <!-- <hr style="margin-top: 31px; border: 2px solid #484848" /> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="monitering-bizs">
                            <div class="biz-article">
                                <div class="biz-text">
                                    <div class="biz-title-wrap">
                                        <button class="biz-button">
                                            <p class="biz-title font6">
                                                쉽고 재미있는 심리 측정 시스템
                                            </p>

                                            <i class="xi-angle-up-thin"></i>
                                        </button>
                                    </div>
                                    <p class="biz-content font4">
                                        자기보고식 대답을 통해 심리 질환 측정을 자동으로
                                        제공하는 시스템으로 기존 정부 제공 자가 심리 측정은
                                        사용자가 직접 질환을 선택해야 하지만, COGEM은
                                        자동으로 취약한 심리 요소를 분석하고 필요한 설문
                                        및 인지 게임을 제안합니다.
                                    </p>

                                    <!-- <hr style="margin-top: 31px; border: 2px solid #484848" /> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="monitering-bizs">
                            <div class="biz-article">
                                <div class="biz-text">
                                    <div class="biz-title-wrap">
                                        <button class="biz-button">
                                            <p class="biz-title font6">개인 맞춤형 심리 모니터링</p>
                                            <i class="xi-angle-up-thin"></i>
                                        </button>
                                    </div>
                                    <p class="biz-content font4">
                                        개인 맞춤형 심리 모니터링 시스템은 사용자의 심리 상태를
                                        지속적으로 관찰하여 변화나 이상 징후를 조기에 감지할 수
                                        있도록 설계되었습니다. 심리 설문과 인지 기능 측정 등
                                        다양한 데이터를 수집하고, AI 분석을 통해 개인별 맞춤형
                                        심리 지원을 제공합니다.
                                    </p>

                                    <!-- <hr style="margin-top: 31px; border: 2px solid #484848" /> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="monitering-bizs">
                            <div class="biz-article">
                                <div class="biz-text">
                                    <div class="biz-title-wrap">
                                        <button class="biz-button">
                                            <p class="biz-title font6">
                                                딥러닝과 AI 기반 심리 분석 및 기록
                                            </p>
                                            <i class="xi-angle-up-thin"></i>
                                        </button>
                                    </div>
                                    <p class="biz-content font4">
                                        BASE는 사용자의 심리 상태를 주기적으로 모니터링하고,
                                        이를 통해 심리적 외상을 조기에 발견할 수 있도록 돕는 시
                                        스템입니다. COGEM과 연동되어 사용자에게 필요한 심리
                                        측정을 제공하고, 그 결과를 기록함으로써 지속적인 심리
                                        상태 추적이 가능합니다.
                                    </p>

                                    <!-- <hr style="margin-top: 31px; border: 2px solid #484848" /> -->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="biz-img-wrap" data-aos="fade-right">
                    <img
                        src="./images/chair_woman.png"
                        alt="심리적 외상 조기탐지 시스템"
                        class="biz-img active"
                    />
                    <img
                        src="./images/earphone.png"
                        alt="쉽고 재미있는 심리 측정 시스템"
                        class="biz-img"
                    />
                    <img
                        src="./images/write.png"
                        alt="개인 맞춤형 심리 모니터링"
                        class="biz-img"
                    />
                    <img
                        src="./images/PLC.png"
                        alt="딥러닝과 AI 기반 심리 분석 및 기록"
                        class="biz-img"
                    />
                </div>
            </div>
        </section>

        <section class="section-03">
            <div class="black-big-text font6" data-aos="fade-right">
                <h3 class="big-text main-title font6">오시는길</h3>
            </div>
        </section>
    </div>
</div>
<div class="container-1920">
    <!-- * 카카오맵 - 지도퍼가기 -->
    <!-- 1. 지도 노드 -->
    <section
        id="daumRoughmapContainer1730511948647"
        class="root_daum_roughmap root_daum_roughmap_landing"
        data-aos="fade-left"
        style="width: 100%; height: 100%"
    ></section>

    <div class="loc-info" data-aos="fade-up">
        <div class="loc-btn-wrap">
            <button class="loc-info-btn" onclick="locInfoClose()">
                <i class="xi-close"></i>
            </button>
        </div>
        <div class="loc-info-text-wrap">
            <h3 class="loc-info-title font6">대전광역시 서구 둔지로 60</h3>
            <div class="loc-info-detail-wrap">
                <p class="loc-info-detail font4">지번</p>
                <p class="loc-info-detail font4">대전광역시 서구 둔산동 971</p>
            </div>
            <div class="loc-info-detail-wrap">
                <p class="loc-info-detail font3">우편번호</p>
                <p class="loc-info-detail font3">35229</p>
            </div>
        </div>
    </div>

    <div class="company-info only-pc" data-aos="fade-up">
        <h3 class="company-name font6">브레인트레이서</h3>
        <p class="company-loc font4">
            <i class="xi-maker"></i>&nbsp;대전광역시 서구 둔지로 60, <br/>
            &nbsp;&nbsp;&nbsp;&nbsp;4층 457호(둔산동, 35229) 브레인트레이서
        </p>
        <p class="company-mail font4">
            <i class="xi-mail"></i>&nbsp;braintracer@manito.kr
        </p>
    </div>
</div>
<div class="company-info only-mobile" data-aos="fade-up">
    <h3 class="company-name font6">브레인트레이서</h3>
    <p class="company-loc font4">
        <i class="xi-maker"></i>&nbsp;대전광역시 서구 둔지로 60, <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;4층 457호(둔산동, 35229) 브레인트레이서
    </p>
    <p class="company-mail font4">
        <i class="xi-mail"></i>&nbsp;braintracer@manito.kr
    </p>
</div>

<div id="top_menu">
    @include('client.components.top_menu')
</div>
<footer id="footer">
    @include('client.components.footer')
</footer>

<div class="pop-parent" id="popParent">
    <div class="pop">
        <div class="swiper-container">
            <div class="swiper popupSwiper">
                <div class="swiper-wrapper">
                    @foreach($popups as $key => $popup)
                        <a href="{{$popup->link}}" class="swiper-slide" target="_blank">
                            <div class="m-ratioBox-wrap">
                                <div class="m-ratioBox">
                                    <img src="{{$popup->image}}" alt="">
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
        <div class="pop-btns">
            <input type="checkbox" name="oneday" id="oneday_check" onclick="handleOnedayCheck()"/>
            <label for="oneday_check">
                <span class="icon"></span> 오늘하루 보지 않기
            </label>
            <button class="btn-close" onclick="nonePopup()">
                <i class="xi-close"></i>
            </button>
        </div>
    </div>
</div>

<script>
    function updateImageSrc() {
        const img = document.querySelector(".special_image");
        if (window.innerWidth <= 767) {
            img.src = "./images/special_image_small.svg";
        } else {
            img.src = "./images/special_image.svg";
        }
    }

    // 초기 실행 및 리사이즈 이벤트 추가
    window.addEventListener("load", updateImageSrc);
    window.addEventListener("resize", updateImageSrc);
</script>

<!-- 비디오 스탯 -->
<script>
    const video = document.querySelector(".brain-video");
    const overlay = document.querySelectorAll(
        ".swiper-pagination-bullet-active::before"
    );
    video.addEventListener("timeupdate", () => {
        const progress = (video.currentTime / video.duration) * 100;
        overlay.style.width = `${progress}%`;
    });
</script>

<!-- AOS 스크립트 -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- monitering-bizs 버튼 관련 스크립트 -->
<script>
    document.querySelectorAll(".biz-button").forEach((button, index) => {
        button.addEventListener("click", () => {
            const article = button.closest(".item");
            const contentShow = article.querySelector(".biz-content");
            const title = article.querySelector(".biz-title");

            document.querySelectorAll(".item").forEach((item, itemIndex) => {
                if (itemIndex !== index) {
                    item.classList.remove("active");
                    item.querySelector(".biz-content").classList.remove("active");
                    // item.querySelector(".biz-img-wrap").style.display = "none";
                }
            });

            document.querySelectorAll(".biz-img").forEach((img, imgIndex) => {
                if (index !== imgIndex) {
                    img.classList.remove("active");
                } else {
                    img.classList.add("active");
                }
            });

            if (article.classList.contains("active")) {
                article.classList.remove("active");
                contentShow.classList.remove("active");
            } else {
                article.classList.add("active");
                contentShow.classList.add("active");
            }
        });
    });
</script>

<!-- 지도 소스 -->
<script
    charset="UTF-8"
    class="daum_roughmap_loader_script"
    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"
></script>
<script charset="UTF-8">
    new daum.roughmap.Lander({
        timestamp: "1730511948647",
        key: "2m4r5",
        mapWidth: "100%",
        mapHeight: "764",
    }).render();

    // 지도 컨테이너 동적 크기 조정
    window.addEventListener("load", function () {
        var mapContainer = document.getElementById(
            "daumRoughmapContainer1730511948647"
        );
        mapContainer.style.width = "100%";
        mapContainer.style.height = "764px"; // 원하는 높이 값
    });

    window.addEventListener("resize", function () {
        var mapContainer = document.getElementById(
            "daumRoughmapContainer1730511948647"
        );
        mapContainer.style.width = "100%"; // 창 크기에 따라 width 100% 적용
    });

    daum.maps.load(function () {
        // 지도 컨테이너를 지정
        var mapContainer = document.getElementById(
            "daumRoughmapContainer1730511948647"
        );

        // 지도 옵션
        var mapOption = {
            center: new daum.maps.LatLng(36.349722, 127.378889), // 지도 중심좌표
            level: 4, // 확대 레벨
        };

        // 지도 생성
        var map = new daum.maps.Map(mapContainer, mapOption);

        // 마커를 설정할 위치
        var markerPosition = new daum.maps.LatLng(36.349722, 127.378889);

        // 마커 생성
        var marker = new daum.maps.Marker({
            position: markerPosition,
        });

        // 마커를 지도에 표시
        marker.setMap(map);

        // 지도 중심을 마커 위치로 설정
        map.setCenter(markerPosition);
    });
</script>
<!-- 지도 소스 끝 부분 -->

<!-- 지도 상세 주소 관련 스크립트 -->
<script>
    function locInfoClose() {
        const locClose = document.querySelector(".loc-info");
        locClose.style.display = "none";
    }
</script>

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // autoplay: {
        //     delay: 4000,
        //     disableOnInteraction: false,
        // },
        autoplay: false,
        allowTouchMove: false,
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>

<script>
    //popup
    function setCookie(name, value, hours) {
        const date = new Date();
        date.setTime(date.getTime() + (hours * 60 * 60 * 1000)); // 시간(밀리초 단위)으로 만료 시간 설정
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // 쿠키 가져오는 함수
    function getCookie(name) {
        const cookieArr = document.cookie.split(";"); // 쿠키 문자열을 배열로 변환
        for (let i = 0; i < cookieArr.length; i++) {
            let cookie = cookieArr[i].trim();
            if (cookie.indexOf(name + "=") === 0) {
                return cookie.substring(name.length + 1, cookie.length); // 쿠키 값 반환
            }
        }
        return null; // 쿠키가 없으면 null 반환
    }

    // 팝업을 숨기는 함수
    function nonePopup() {
        document.getElementById('popParent').style.display = 'none';
    }

    // '오늘 하루 보지 않기' 체크박스 클릭 시 실행되는 함수
    function handleOnedayCheck() {
        if (document.getElementById('oneday_check').checked) {
            // 24시간 동안 유효한 쿠키 설정
            setCookie('hidePopup', 'true', 24);
            nonePopup(); // 팝업 숨기기
        }
    }

    // 페이지 로드 시 쿠키를 확인하고 팝업 표시 여부 결정
    window.onload = function () {
        const hidePopup = getCookie('hidePopup');
        if (hidePopup === 'true') {
            // 쿠키 값이 'true'면 팝업을 숨김
            nonePopup();
        } else {
            // 쿠키가 없으면 팝업을 보여줌
            document.getElementById('popParent').style.display = 'block';
        }
    };

    //

    //popup
    var popupSwiper = new Swiper(".popupSwiper", {
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        loop: true,
    });

    $(".pop-parent .btn-toggle").click(function () {
        $(".pop-parent").toggleClass("active");
    });

    var popupSwiper = new Swiper(".popupSwiper", {
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        loop: true,
    });

    $(".pop-parent .btn-toggle").click(function () {
        $(".pop-parent").toggleClass("active");
    });
</script>
</body>
</html>
