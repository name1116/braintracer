<!DOCTYPE html>
<html lang="ko">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0"
/>
<script src="./js/jquery.js"></script>
<script src="./js/script.js"></script>
<title></title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link
    rel="stylesheet"
    href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css"
/>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="./css/common.css" />
<link rel="stylesheet" href="./css/style.css" />

<body>
<header id="header" class="about-header">
    @include('client.components.header')
</header>

<section class="about-section01">
    <img
        src="./images/about_us_sky.png"
        alt="About us"
        class="about-section01-img"
    />
    <div class="about-section01-text">
        <h3 class="about-section01-title font6">About us</h3>
        <p class="about-section01-content font4">
            최신 딥러닝 기술을 활용하여<br class="only-mobile"/> 사용자의 감정을 분석하고 <br class="only-mobile"/><br class="only-pc"/>
            개인의 심리 상태를 정교하게 파악합니다.
        </p>
    </div>
</section>
<section class="about-section02">
    <div class="about-section02-button-wrap">
        <button
            class="about-section02-button able font6"
            data-section="aboutcompany"
        >
            회사소개
        </button>
        <button
            class="about-section02-button font4"
            data-section="companyhistory"
        >
            연혁
        </button>
    </div>

    <h3 class="about-section02-title font6">회사소개</h3>

    <div class="about-section02-title-line"></div>

    <div class="about-section02-bg">
        <img
            src="./images/main_small_subject.svg"
            alt="braintracer"
            class="about-section02-bg-img"
        />
        <p class="about-section02-bg-text font5">
            고위험 직군의 정신건강을<br class="only-mobile"> 체계적으로 관리하고 <br class="only-pc"/>
            PTSD 예방을 지원하는<br class="only-mobile"> 디지털 헬스케어 솔루션 브레인트레이서
        </p>
    </div>
</section>
<section class="about-section03">
    <h3 class="about-section03-title font6">
        심리 조기 진단과<br />
        맞춤형 치료를 지원합니다.
    </h3>

    <div class="solution-flex">
        <img
            src="./images/together_puzzle.png"
            alt="자동화된 심리 분석 및 맞춤형 솔루션 제공"
            class="solution-image"
        />
        <div class="solution-text-wrap">
            <h3 class="solution-text-title font6">
                자동화된 심리 분석 및<br class="only-mobile">
                <span class="blue font6">맞춤형 솔루션 제공</span>
            </h3>
            <p class="solution-text font4">
                음성·텍스트 데이터를 AI로 분석해 사용자 상태에 맞는 설문과 인지
                게임을 자동으로 제공합니다. 사<br class="only-pc"/>
                용자가 직접 설문을 찾을 필요가 없어 측정의 편의성이 높습니다.
                사용자의 심리 데이터를 기록해 과거<br class="only-pc"/>
                대비 심리 변화를 정량적으로 보여주고, 상태에 따라 적절한 대응 방안을
                제시합니다. 이를 통해 정확<br class="only-pc"/>
                한 진단과 맞춤형 개입이 가능해집니다.
            </p>
        </div>
    </div>

    <div class="solution-flex next">
        <img
            src="./images/networks.png"
            alt="자동화된 심리 분석 및 맞춤형 솔루션 제공"
            class="solution-image"
        />

        <div class="solution-text-wrap">
            <h3 class="solution-text-title font6">
                실시간 모니터링과 <span class="blue font6">조기 예방</span>
            </h3>
            <p class="solution-text font4">
                지속적인 데이터 수집과 분석을 통해 사용자 상태를 실시간
                모니터링합니다. 기존 자가 측정 방식의 단<br class="only-pc"/>발성 한계를 극복해,
                장기적인 심리 변화와 스트레스 경향을 파악 합니다. AI 알고리즘이
                스트레스 악화 <br class="only-pc"/>지점과 PTSD 위험을 사전에 감지하여 문제 발생 전
                빠른 개입을 지원합니다. 특히 고위험 직군의 출동 <br class="only-pc"/>기록과 연계해
                적극적인 트라우마 예방 을 실현합니다.
            </p>
        </div>
    </div>
</section>

<!-- 고객사&협력사 -->
 <!-- 요청사항 주석처리 -->
<!-- 
<section class="about-section04">
    <h3 class="customer font6">고객사</h3>
    <p class="customer-text font4">
        다양한 기업에서 브레인트레이서의 심리적 외상 조기탐지 시스템을
        도입하여<br class="only-pc">
        조직의 경쟁력을 강화하고 직원들의 정신적 안정과 생산성을 향상시키고
        있습니다.
    </p>


    <div class="swiper-wrap">
        <div class="swiper mySwiper first">
            <div class="swiper-wrapper">
                @foreach($customerFirst as $key => $first_customer)
                    <div class="swiper-slide">
                        <img src="{{ $first_customer->image }}" alt="고객사"/>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="swiper mySwiper second">
            <div class="swiper-wrapper">
                @foreach($customerSecond as $key => $second_customer)
                    <div class="swiper-slide">
                        <img src="{{ $second_customer->image }}" alt="고객사"/>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="swiper mySwiper third">
            <div class="swiper-wrapper">
                @foreach($customerThird as $key => $third_customer)
                    <div class="swiper-slide">
                        <img src="{{ $third_customer->image }}" alt="고객사"/>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <h3 class="partner font6">파트너사</h3>
    <p class="partner-text font4">
        국내 유망 기업들과 협력하여 다양한 솔루션과 서비스를 제휴해 이를 통해
        <br class="only-pc"/>
        고객 맞춤형 최적의 솔루션을 제공하며, 지속적인 혁신과 가치를 실현하고자
        노력하고 있습니다.
    </p>


    <div class="partner-wrap">
        @foreach($partners as $key => $partner)
            <div class="partner-logo">
                <img src="{{ $partner->image }}" alt="파트너사"/>
            </div>
        @endforeach
    </div>
</section> -->

<!-- 브레인트레이서를 선택하는 이유 -->
<section class="about-section05">
    <h3 class="about-section05-title font6">
        브레인트레이서를<br class="only-mobile"/> 선택하는 이유
    </h3>
    <div class="about-section05-content-wrap">
        <div class="about-section05-content first">
            <h4 class="content-index font5">01</h4>
            <h4 class="content-title font6">최고 수준의 정확도와 효율성</h4>
            <p class="content font4">
                기존 룰 기반 시스템이나 단순 머신러닝 알고리즘에 비해 심리적 이상
                조기탐지에서<br class="only-pc"/>
                더 높은 정확도를 제공하며, 대량의 데이터를 효율적으로 처리할 수 있는
                성능을 갖<br class="only-pc"/>추고 있습니다.
            </p>
        </div>
    </div>
    <div class="about-section05-content-wrap">
        <div class="about-section05-content">
            <h4 class="content-index font5">02</h4>
            <h4 class="content-title font6">개인 맞춤형 편의성 제공</h4>
            <p class="content font4">
                소량의 데이터나 초기 학습 데이터 부족으로 인한 문제를 극복하여,
                사용자의 심리<br class="only-pc"/>
                상태에 최적화된 맞춤형 솔루션을 제공합니다. 다양한 분야에서 축적한
                경험을 바탕<br class="only-pc"/>으로 직관적이고 사용하기 쉬운 사용자 경험(UX)을
                구현하여, 설정 과정에서 오는 피<br class="only-pc"/>로감과 노력을 최소화합니다.
            </p>
        </div>
    </div>
    <div class="about-section05-content-wrap">
        <div class="about-section05-content">
            <h4 class="content-index font5">03</h4>
            <h4 class="content-title font6">신뢰할 수 있는 결과 분석</h4>
            <p class="content font4">
                기존의 해석이 어려운 블랙박스 모델과는 달리, 브레인트레이서는 분석
                과정과 결과<br class="only-pc"/>를 명확하게 해석할 수 있어 사용자에게 신뢰성 높은
                심리 분석 결과를 제공합니다.
            </p>
        </div>
    </div>
    <div class="about-section05-content-wrap">
        <div class="about-section05-content">
            <h4 class="content-index font5">04</h4>
            <h4 class="content-title font6">다양한 분야에서의 폭넓은 적용성</h4>
            <p class="content font4">
                브레인트레이서는 이미 다양한 산업 분야에서 심리적 상태 모니터링과
                이상 탐지에<br class="only-pc"/>
                24시간 365일 미션 크리티컬 시스템으로 운영되고 있으며, 각 분야에서
                심리적 안정<br class="only-pc"/>성 및 성과 개선에 기여하고 있습니다.
            </p>
        </div>
    </div>
</section>

<!-- 브레인트레이서의 비전 -->
<section class="about-section06">
    <h3 class="about-section06-title font6">브레인트레이서의 비전</h3>

    <div class="about-section06-img-wrap">
        <img src="./images/vision.png" alt="브레인트레이서의 비전" />
    </div>

    <div class="about-section06-text-wrap">
        <div class="about-section06-text">
            <p class="text font4">
                브레인트레이서는 개인의 심리적 안정과 복지를 최우선으로 생각합니다.
                사용자<br class="only-pc"/>가 자신의 감정과 심리적 건강을 보다 잘 이해하고 관리할
                수 있도록 돕는 혁신적<br class="only-pc"/>인 솔루션을 지속적으로 개발하고 있습니다.
                우리의 목표는 모든 사용자가 건강한<br class="only-pc"/>
                심리 상태를 유지하며, 보다 행복한 삶을 영위할 수 있도록 지원하는
                것입니다.
            </p>
        </div>
        <div class="about-section06-text">
            <p class="text font4">
                앞으로도 최신 기술과 심리학적 연구를 바탕으로, 사용자의 정신적
                건강을 위한 최<br class="only-pc"/>적의 솔루션을 제공하는 데 최선을 다할 것입니다.
                심리적 웰빙이 중요시되는 시대<br class="only-pc"/>에, 브레인트레이서는 사용자가
                자신의 심리를 깊이 이해하고, 필요할 때 적절한<br class="only-pc"/>
                도움을 받을 수 있도록 하는 길잡이가 되고자 합니다.
            </p>
        </div>
    </div>
</section>

<!-- 회사 연혁 퍼블 -->
<section class="history-section01">
    <h3 class="history-section01-title font6">연혁</h3>
    <div class="history-section01-title-line"></div>
    <div class="history-section01-img-wrap">
        <img src="./images/history_brain.png" alt="braintracer 연혁" />
    </div>

    <?php

    use Carbon\Carbon;

    ?>

    <div class="history-container">
        <ul class="history">
            @foreach($historiesContents as $year => $months)
                @if($year >= Carbon::now()->year - 1)
                    <li class="history-list">
                        <div class="history-circle able">
                            <div class="inner-circle"></div>
                        </div>
                        <div class="history-year-wrap">
                            <h3 class="history-year font6">{{ $year }}</h3>
                        </div>
                        <div class="history-text-wrap on">
                            <div class="history-text">
                                @foreach($months as $month => $histories)
                                    <div class="history-text-detail able">
                                        <h4 class="history-year-detail font4">{{ $year . "." . $month }}</h4>
                                        <p class="detail font4">
                                            @foreach($histories as $history)
                                                {{ $history->content }}
                                            @endforeach
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @else
                    <li class="history-list">
                        <div class="history-circle disable">
                            <div class="inner-circle"></div>
                        </div>
                        <div class="history-year-wrap">
                            <h3 class="history-year font6">{{ $year }}</h3>
                        </div>
                        <div class="history-text-wrap">
                            <div class="history-text">
                                @foreach($months as $month => $histories)
                                    <div class="history-text-detail disable">
                                        <h4 class="history-year-detail font4">{{ $year . "." . $month }}</h4>
                                        <p class="detail font4">
                                            @foreach($histories as $history)
                                                {{ $history->content }}
                                            @endforeach
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</section>

<div id="top_menu">
    @include('client.components.top_menu')
</div>
<footer id="footer">
    @include('client.components.footer')
</footer>

<script>
    // Intersection Observer 설정
    const options = {
        root: null,
        threshold: 0.5,
    };
    const targetSection01 = document.querySelector(".about-section04");
    const targetSection02 = document.querySelector(".about-section03");
    const targetSection03 = document.querySelector(".about-section05");
    const tS03Title = document.querySelector(".content-title");
    const tS02Title = document.querySelector(
        ".solution-flex.next .solution-text-wrap .solution-text-title"
    );
    const tS02Text = document.querySelector(
        ".solution-flex.next .solution-text-wrap .solution-text"
    );

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                targetSection01.style.backgroundColor = "#FFF"; // 도착 시 배경색 변경
                targetSection02.classList.add("white");
                targetSection03.classList.add("white");
                tS02Title.classList.add("white");
                tS02Text.classList.add("white");
                tS03Title.classList.add("white");
            } else {
                targetSection01.style.backgroundColor = ""; // 떠날 시 원래 배경색
                targetSection02.classList.remove("white");
                targetSection03.classList.remove("white");
                tS02Title.classList.remove("white");
                tS02Text.classList.remove("white");
                tS03Title.classList.remove("white");
            }
        });
    }, options);

    observer.observe(targetSection01);
</script>

<script>
    const s2Title = document.querySelector(".about-section02-title");
    const s2TitleLine = document.querySelector(".about-section02-title-line");
    const s2Bg = document.querySelector(".about-section02-bg");

    const s3 = document.querySelector(".about-section03");
    // const s4 = document.querySelector(".about-section04");
    const s5 = document.querySelector(".about-section05");
    const s6 = document.querySelector(".about-section06");
    const h1 = document.querySelector(".history-section01");

    // 섹션 표시 함수
    function showSection(section) {
        if (section === "companyhistory") {
            s2Title.style.display = "none";
            s2TitleLine.style.display = "none";
            s2Bg.style.display = "none";
            s3.style.display = "none";
            // s4.style.display = "none";
            s5.style.display = "none";
            s6.style.display = "none";
            h1.style.display = "block";
        } else {
            s2Title.style.display = "block";
            s2TitleLine.style.display = "block";
            s2Bg.style.display = "block";
            s3.style.display = "block";
            // s4.style.display = "block";
            s5.style.display = "block";
            s6.style.display = "block";
            h1.style.display = "none";
        }
    }

    // 페이지 로드 및 해시 변경 시 섹션 표시
    function updateSectionFromHash() {
        const hash = location.hash.replace("#", "") || "aboutcompany";
        showSection(hash);

        // 해시값에 따라 버튼 스타일 초기화
        document.querySelectorAll(".about-section02-button").forEach((btn) => {
            if (btn.getAttribute("data-section") === hash) {
                btn.classList.add("able", "font6");
                btn.classList.remove("font4");
            } else {
                btn.classList.remove("able", "font6");
                btn.classList.add("font4");
            }
        });
    }

    // 해시값 변경 시마다 updateSectionFromHash 호출
    window.addEventListener("DOMContentLoaded", updateSectionFromHash);
    window.addEventListener("hashchange", updateSectionFromHash);

    // 버튼 클릭 시 해시값 설정 및 섹션 표시
    document.querySelectorAll(".about-section02-button").forEach((btn) => {
        btn.addEventListener("click", () => {
            const section = btn.getAttribute("data-section");
            location.hash = section; // 해시값 설정
        });
    });
</script>

<script>
    let isAnimating = false;

    let slideUp = (target, duration = 500) => {
        target.style.transitionProperty = "height, margin, padding";
        target.style.transitionDuration = duration + "ms";
        target.style.boxSizing = "border-box";
        target.style.height = target.offsetHeight + "px";
        target.offsetHeight;
        target.style.overflow = "hidden";
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;
        window.setTimeout(() => {
            target.style.display = "none";
            target.style.removeProperty("height");
            target.style.removeProperty("padding-top");
            target.style.removeProperty("padding-bottom");
            target.style.removeProperty("margin-top");
            target.style.removeProperty("margin-bottom");
            target.style.removeProperty("overflow");
            target.style.removeProperty("transition-duration");
            target.style.removeProperty("transition-property");
            isAnimating = false;
        }, duration);
    };
    let slideDown = (target, duration = 500) => {
        target.style.removeProperty("display");
        let display = window.getComputedStyle(target).display;

        if (display === "none") display = "block";

        target.style.display = display;
        let height = target.offsetHeight;
        target.style.overflow = "hidden";
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;
        target.offsetHeight;
        target.style.boxSizing = "border-box";
        target.style.transitionProperty = "height, margin, padding";
        target.style.transitionDuration = duration + "ms";
        target.style.height = height + "px";
        target.style.removeProperty("padding-top");
        target.style.removeProperty("padding-bottom");
        target.style.removeProperty("margin-top");
        target.style.removeProperty("margin-bottom");
        window.setTimeout(() => {
            target.style.removeProperty("height");
            target.style.removeProperty("overflow");
            target.style.removeProperty("transition-duration");
            target.style.removeProperty("transition-property");
            isAnimating = false;
        }, duration);
    };

    // ====
    document.querySelectorAll(".history-circle").forEach((circle, index) => {
        const siblingsTextWrap = circle.nextElementSibling.nextElementSibling;

        circle.addEventListener("click", () => {
            if (isAnimating) return;
            isAnimating = true;

            if (circle.classList.contains("able")) {
                circle.classList.remove("able");
                circle.classList.add("disable");

                slideUp(siblingsTextWrap);


            } else {
                circle.classList.remove("disable");
                circle.classList.add("able");

                slideDown(siblingsTextWrap);
                isAnimating = false;

            }
        });
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiperSlides = document.querySelectorAll(
        ".about-section04 .swiper.mySwiper"
    );

    swiperSlides.forEach(function (element, index) {
        element.classList.add("swiper-" + index);
        const swiper = new Swiper(".swiper-" + index, {
            autoplay: {
                delay: 1,
                desableOnInteraction: false,
            },
            speed: 8e3,
            loop: true,
            slidesPerView: "auto",
            freemode: true,
        });
    });
</script>
</html>
