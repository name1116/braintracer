<!DOCTYPE html>
<html lang="ko">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0"
/>

<title></title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
<link
    rel="stylesheet"
    href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css"
/>
<link rel="stylesheet" type="text/css" href="./css/common.css" />
<link rel="stylesheet" href="./css/style.css" />

<body>
<header id="header" class="contact-header">
    @include('client.components.header')
</header>
<section class="contact-section01">
    <div class="img-wrap">
        <img src="./images/contact_us.png" alt="Contact us" class="bg" />
    </div>
    <div class="contact-section01-text-wrap">
        <h3 class="title font6">Contact us</h3>
        <p class="text font4">
            당신의 마음 상태 이제 브레인트레이서에서<br />
            쉽게 관리하세요 외상 탐지부터<br class="only-mobile" />
            치유까지 함께하겠습니다.
        </p>
    </div>
</section>
<section class="contact-section02">
    <div class="contact-section02-button-wrap">
        <button
            class="contact-section02-button able font6"
            data-section="contact"
        >
            문의하기
        </button>
        <button
            class="contact-section02-button font4"
            data-section="directions"
        >
            오시는길
        </button>
    </div>
</section>

<!-- 문의하기 -->
<form action="{{ route('post') }}" method="post" class="contact-form">
    @csrf
    <div class="text-title-wrap">
        <h3 class="title font6">문의하기</h3>
        <p class="info font4"><span>*</span> 필수 입력 항목</p>
    </div>

    <div class="input-wrap-flex">
        <div class="input-wrap">
            <p class="info font6">성함<span>*</span></p>
            <input
                type="text"
                name="name"
                placeholder="성함을 입력해주세요."
                required
            />
        </div>
        <div class="input-wrap">
            <p class="info font6">연락처<span>*</span></p>
            <input
                type="number"
                name="phone"
                placeholder="연락처를 입력해주세요."
                required
            />
        </div>
        <div class="input-wrap">
            <p class="info font6">이메일</p>
            <input
                type="email"
                name="email"
                placeholder="이메일을 입력해주세요."
            />
        </div>
        <div class="input-wrap">
            <p class="info font6">상담분야</p>
            <input
                type="text"
                name="inquiry_category"
                placeholder="상담분야를 입력해주세요."
            />
        </div>
    </div>
    <div class="text-area-wrap">
        <p class="info font6">문의내용</p>
        <textarea
            type="text"
            name="message"
            placeholder="문의내용을 기재해주세요."
            class="text-area"
        ></textarea>
    </div>

    <div class="accept-wrap">
        <p class="title font6">개인정보수집 동의</p>
        <div class="information-wrap">
            <p class="title font4">개인정보 수집 • 이용 내역</p>
            <div class="text-flex-wrap">
                <p class="text-title font3">항목 (필수항목)</p>
                <p class="text-content font3">성명, 연락처</p>
            </div>
            <div class="text-flex-wrap">
                <p class="text-title font3">수집 • 이용 목적</p>
                <p class="text-content font3">
                    고객문의는 최소한의 개인정보만을 수집합니다. 상담내용확인 및
                    상담결과 회신 서비스 제공을 목적으로 개인정보 수집 이용 동의를
                    구합니다.
                </p>
            </div>
            <div class="text-flex-wrap">
                <p class="text-title font3">보유기간</p>
                <p class="text-content font3">
                    개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이
                    파기합니다. (단, 타 법령에 의해 보존의무가 있는 경우 법령이 지정한
                    기간 동안 보존합니다.)
                </p>
            </div>
        </div>
    </div>
    <div class="check-wrap">
        <label for="check">
            <input
                type="checkbox"
                name="agreement"
                id="check"
                class="check-box"
                required
            />

            <p class="check-info font4">
                개인정보 수집 및 이용에 대한 동의 (필수)
            </p>
        </label>
    </div>
    <button type="submit" class="btn-submit font6">문의하기</button>
</form>

<section class="contact-directions">
    <div class="content-wrap">
        <h3 class="title font6">오시는길</h3>
        <div class="text-flex">
            <i class="xi-maker"></i>
            <p class="text font6">브레인트레이서</p>
            <p class="direction font4">
                대전광역시 서구 둔지로 60,<br class="only-mobile"/> 4층 457호(둔산동, 35229) 브레인트레이서
            </p>
        </div>
    </div>

    <div class="container-1920">
        <!-- * 카카오맵 - 지도퍼가기 -->
        <!-- 1. 지도 노드 -->
        <section
            id="daumRoughmapContainer1730511948647"
            class="root_daum_roughmap root_daum_roughmap_landing"
            style="width: 100%; height: 100%;"
        ></section>

        <div class="loc-info">
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

        <div class="company-info">
            <h3 class="company-name font6">브레인트레이서</h3>
            <p class="company-loc font4">
                <i class="xi-maker"></i>&nbsp;대전광역시 서구 둔지로 60, <br />
                &nbsp;&nbsp;&nbsp;&nbsp;4층 457호(둔산동, 35229) 브레인트레이서
            </p>
            <p class="company-mail font4">
                <i class="xi-mail"></i>&nbsp;braintracer@manito.kr
            </p>
        </div>
    </div>
</section>

<div id="top_menu">
    @include('client.components.top_menu')
</div>
<footer id="footer">
    @include('client.components.footer')
</footer>
</body>

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
</script>
<!-- 지도 소스 끝 부분 -->

<!-- 지도 상세 주소 관련 스크립트 -->
<script>
    function locInfoClose() {
        const locClose = document.querySelector(".loc-info");
        locClose.style.display = "none";
    }
</script>

<script>
    const section01 = document.querySelector(".contact-form");
    const section02 = document.querySelector(".contact-directions");

    // 버튼 클릭 시 해시값 변경 및 섹션 표시
    document
        .querySelectorAll(".contact-section02-button")
        .forEach((btn, index, buttons) => {
            btn.addEventListener("click", () => {
                // 버튼 클릭 시 URL 해시 변경
                if (index === 0) {
                    location.hash = "contact";
                } else {
                    location.hash = "directions";
                }

                // 버튼 스타일 업데이트 및 섹션 표시
                buttons.forEach((otherBtn, otherIndex) => {
                    if (otherIndex !== index) {
                        otherBtn.classList.remove("able", "font6");
                        otherBtn.classList.add("font4");
                        section01.style.display = "block";
                        section02.style.display = "none";
                    } else {
                        section01.style.display = "none";
                        section02.style.display = "block";
                    }
                });

                btn.classList.add("able", "font6");
            });
        });

    // 페이지 로드 시 해시값에 따라 초기화
    window.addEventListener("load", () => {
        const hash = location.hash.replace("#", "");

        if (hash === "directions") {
            section01.style.display = "none";
            section02.style.display = "block";

            // 버튼 스타일 업데이트
            document
                .querySelectorAll(".contact-section02-button")[0]
                .classList.remove("able", "font6");
            document
                .querySelectorAll(".contact-section02-button")[0]
                .classList.add("font4");

            document
                .querySelectorAll(".contact-section02-button")[1]
                .classList.add("able", "font6");
        } else {
            section01.style.display = "block";
            section02.style.display = "none";

            // 버튼 스타일 업데이트
            document
                .querySelectorAll(".contact-section02-button")[1]
                .classList.remove("able", "font6");
            document
                .querySelectorAll(".contact-section02-button")[1]
                .classList.add("font4");

            document
                .querySelectorAll(".contact-section02-button")[0]
                .classList.add("able", "font6");
        }
    });

    // 해시값이 변경될 때마다 섹션을 갱신하는 이벤트 리스너 추가
    window.addEventListener("hashchange", () => {
        const hash = location.hash.replace("#", "");

        if (hash === "directions") {
            section01.style.display = "none";
            section02.style.display = "block";

            // 버튼 스타일 업데이트
            document
                .querySelectorAll(".contact-section02-button")[0]
                .classList.remove("able", "font6");
            document
                .querySelectorAll(".contact-section02-button")[0]
                .classList.add("font4");

            document
                .querySelectorAll(".contact-section02-button")[1]
                .classList.add("able", "font6");
        } else {
            section01.style.display = "block";
            section02.style.display = "none";

            // 버튼 스타일 업데이트
            document
                .querySelectorAll(".contact-section02-button")[1]
                .classList.remove("able", "font6");
            document
                .querySelectorAll(".contact-section02-button")[1]
                .classList.add("font4");

            document
                .querySelectorAll(".contact-section02-button")[0]
                .classList.add("able", "font6");
        }
    });
</script>

</html>
