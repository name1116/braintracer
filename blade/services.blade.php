<!DOCTYPE html>
<html lang="ko">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, viewport-fit=cover, maximum-scale=1.0, user-scalable=0"
  />

  <title></title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link
    rel="stylesheet"
    href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css"
  />
  <link rel="stylesheet" type="text/css" href="./css/common.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <script src="./js/jquery.js"></script>
  <script src="./js/script.js"></script>
  <body>
    <header id="header" class="services-header">
        @include('client.components.header')
    </header>
    <section class="services-section01">
      <img
        src="./images/service_web.png"
        alt="Services"
        class="services-section01-image"
      />
      <div class="services-section01-text-wrap">
        <h3 class="title font6">Services</h3>
        <p class="text font4">
          감정 분석과 맞춤형 설문을 통해<br class="only-mobile"/> 심리 상태를<br class="only-pc"/>
          모니터링하고<br class="only-mobile"/> 트라우마를 조기에 탐지합니다.
        </p>
      </div>
    </section>

    <section class="services-section02">
      <div class="services-section02-button-wrap">
        <button
          class="services-section02-button able font6"
          data-section="braintracerforall"
        >
          브레인트레이서 For All
        </button>
        <!-- <button
          class="services-section02-button font4"
          data-section="braintracerforptsd"
        >
          브레인트레이서 For PTSD
        </button> --> 
        <!-- 고객요청 주석 -->
      </div>
    </section>
    <!-- 버튼 토글 시 section이 다르게 나옴 -->
    <section class="services-braintracer">
      <div class="services-braintracer-text-wrap">
        <h3 class="title font6">
          <span class="font6">브레인트레이서 For</span> All
        </h3>
        <div class="services-braintracer-title-line"></div>
        <p class="text font6">
          맞춤형 설문과 AI 기반 트라우마<br class="only-mobile" /> 분석을 통해<br class="only-pc"/>
          심리 상태를<br class="only-mobile" /> <span class="font6">실시간으로 모니터링</span>하고
          관리합니다.
        </p>
      </div>
      <div class="services-braintracer-img-wrap">
        <img src="./images/service_3circle.png" alt="Braintracer For All" />
      </div>

      <div class="services-process-text-wrap">
        <p class="text font6">
          측정하고싶은 심리 설문이 아닌<br />
          <span class="font6">나에게 맞춰진 질문</span>을 합니다.
        </p>
      </div>

      <div class="services-process-flex">
        <div class="process" data-step="1">
          <img src="./images/phone.svg" alt="생활  습관 및 성격 기록" />
          <p class="process-text font4">
            생활 습관<br />
            및 성격 기록
          </p>
        </div>
        <div class="next-img-wrap">
          <img src="./images/flex_next.svg" alt="다음" />
        </div>
        <div class="process" data-step="2">
          <img src="./images/comment.svg" alt="결과에 따른 질문 제시" />
          <p class="process-text font4">
            결과에 따른<br />
            질문 제시
          </p>
        </div>
        <div class="next-img-wrap">
          <img src="./images/flex_next.svg" alt="다음" />
        </div>
        <div class="process" data-step="3">
          <img src="./images/analist.svg" alt="AI 분석 모델" />
          <p class="process-text font4">AI 분석 모델</p>
        </div>
        <div class="next-img-wrap">
          <img src="./images/flex_next.svg" alt="다음" />
        </div>
        <div class="process" data-step="4">
          <img src="./images/check.svg" alt="우울증과 기억력 매칭 시" />
          <p class="process-text font4">우울증과<br />기억력 매칭 시</p>
        </div>
        <div class="next-img-wrap">
          <img src="./images/flex_next.svg" alt="다음" />
        </div>
        <div class="process" data-step="5">
          <img src="./images/report.svg" alt="심리적 변곡점 발견" />
          <p class="process-text font4">심리적 변곡점 발견</p>
        </div>
      </div>

      <div class="services-last-text">
        <div class="services-last-text-img-wrap">
          <img
            src="./images/brain_ai.png"
            alt="마음을 돌보는 첫걸음 브레인트레이서에서 시작하세요."
          />
        </div>
        <div class="services-last-text-wrap">
          <h3 class="title font6">
            마음을 돌보는 첫걸음<br />
            브레인트레이서에서 <span class="font6">시작하세요.</span>
          </h3>
          <p class="text font4">
            브레인트레이서는 모든 사람들에게 정신 건강
            관리를 새롭게 제안합니다.<br class="only-pc"/>
            복잡한 자가 측정 방식에서 벗어나 AI 기반의 맞춤형 설문과 실시간
            분석을 통해 나의 상태<br class="only-pc"/>
            를 정확하게 파악하고 변화에 빠르게 대응할 수 있습니다.<br/>
            <br />
            지금의 작은 관심이 큰 변화를 만듭니다.<br class="only-pc"/>
            지속적인 관리와 예방을 통해 정신 건강을 지키고, 더 나은 미래를
            준비하세요.
          </p>
        </div>
      </div>
    </section>

    <section class="services-ptsd">
      <div class="services-ptsd-text-wrap">
        <h3 class="title font6">
          <span class="font6">브레인트레이서 For</span> PTSD
        </h3>
        <div class="services-ptsd-title-line"></div>
        <p class="text font6">
        활동 데이터와 감정 분석을 통해<br class="only-mobile"/>
          <span class="font6">PTSD를 예측</span>하고<br />
          AI 기반 결과를 활용합니다.
        </p>
      </div>
      <div class="services-ptsd-img-wrap">
        <img src="./images/firefighter.png" alt="PTSD예방" />
      </div>
      <div class="services-ptsd-process-wrap">
        <h3 class="title font6">
          <span class="font6">PTSD 예방</span>을 위한<br />
          브레인트레이서
        </h3>

        <div class="services-ptsd-process-flex">
          <div class="process">
            <p class="index font6">01</p>
            <h3 class="title font6">데이터 수집 및 분석 시스템</h3>
            <ul class="content font3">
              <li>
                정신건강, 생체 데이터, 신체 건강 정보를 통합 수집해 실시간으로
                분석합니다.
              </li>
              <li>
                심리 설문, 웨어러블 기기, 의료영상 등을 활용해 개인별 건강
                상태를 추적합니다.
              </li>
              <li>
                AI 기반 분석을 통해 트라우마 위험도와 질환 발생 가능성을
                예측합니다.
              </li>
            </ul>
            <div class="img-wrap">
              <img
                src="./images/ptsd_analist.svg"
                alt="데이터 수집 및 분석 시스템"
              />
            </div>
          </div>
          <div class="process">
            <p class="index font6">02</p>
            <h3 class="title font6">사건 중심 PTSD 예방 시스템</h3>
            <ul class="content font3">
              <li>
              사건 기록과 생체 데이터를 연계해 PTSD 발생 위험을 예측합니다.
              </li>
              <li>
              사건별 트라우마 영향을 분석해 고위험 상황을 조기에
              파악합니다.
              </li>
              <li>
                AI 기반 알고리즘으로 스트레스 변화와 정신건강 악화 지점을 실시간
                모니터링합니다.
              </li>
            </ul>
            <div class="img-wrap">
              <img
                src="./images/ptsd_chart.svg"
                alt="출동 중심 PTSD 예방 시스템"
              />
            </div>
          </div>
          <div class="process">
            <p class="index font6">03</p>
            <h3 class="title font6">생성형 AI 기반 결과 통합</h3>
            <ul class="content font3">
              <li>
                벡터 DB와 파인튜닝된 AI 모델을 활용해 도메인 특화된 맞춤형
                결과를 제공합니다.
              </li>
              <li>
                생성형 AI는 출동 기록과 감정 분석을 결합해 PTSD 위험도를
                예측합니다.
              </li>
              <li>
                이 시스템은 정밀한 트라우마 원인 분석과 맞춤형 관리를 가능하게
                합니다
              </li>
            </ul>
            <div class="img-wrap">
              <img
                src="./images/ptsd_result.svg"
                alt="생성형 AI 기반 결과 통합"
              />
            </div>
          </div>
          <div class="process">
            <p class="index font6">04</p>
            <h3 class="title font6">데이터 활용 및 연계</h3>
            <ul class="content font3">
              <li>
                분석 결과를 비대면 상담 서비스와 연계해 빠른 개입을 도모합니다.
              </li>
              <li>
                정신건강 데이터는 정책 수립과 공공 지원 프로그램 개발에
                활용됩니다.
              </li>
              <li>
              또한 고객사 내부 시스템과 연동해 사건에 대한 심리 상태를
              모니터링합니다.
              </li>
            </ul>
            <div class="img-wrap">
              <img src="./images/ptsd_check.svg" alt="데이터 활용 및 연계" />
            </div>
          </div>
        </div>
      </div>

      <div class="services-ptsd-contact">
        <p class="text font6">
        사건별 트라우마 형성을
        AI 알고리즘으로<br class="only-here"/> 예측하여 PTSD 예방을 지원하는 브레인트레이서
        </p>
        <button class="btn">
          <a href="{{ route("contact_us") }}#contact" class="font6">
            문의하기 <i class="xi-long-arrow-right"></i
          ></a>
        </button>
      </div>
    </section>

    <div id="top_menu">
        @include('client.components.top_menu')
    </div>
    <footer id="footer">
        @include('client.components.footer')
    </footer>
  </body>
  <script>
    function updateImageSrc() {
      const img = document.querySelector(".services-braintracer-img-wrap img");
      if (window.innerWidth <= 767) {
        img.src = "./images/service_3circle_long.png";
      } else {
        img.src = "./images/service_3circle.png";
      }
    }

    // 초기 실행 및 리사이즈 이벤트 추가
    window.addEventListener("load", updateImageSrc);
    window.addEventListener("resize", updateImageSrc);
  </script>

  <script>
    const section01 = document.querySelector(".services-braintracer");
    const section02 = document.querySelector(".services-ptsd");

    // 버튼 클릭 시 해시값 변경 및 섹션 표시
    document
      .querySelectorAll(".services-section02-button")
      .forEach((btn, index, buttons) => {
        btn.addEventListener("click", () => {
          // 버튼 클릭 시 URL 해시 변경
          if (index === 0) {
            location.hash = "braintracerforall";
          } else {
            location.hash = "braintracerforptsd";
          }

          // 버튼 스타일 업데이트 및 섹션 표시
          buttons.forEach((otherBtn, otherIndex) => {
            if (otherIndex !== index) {
              otherBtn.classList.remove("able", "font6");
              otherBtn.classList.add("font4");
              section01.style.display = "block";
              section02.style.display = "none";
            } else {
              // section01.style.display = "none";
              // section02.style.display = "block";
              // 고객요청 주석
            }
          });

          btn.classList.add("able", "font6");
        });
      });

    // 페이지 로드 시 해시값에 따라 초기화
    window.addEventListener("load", () => {
      const hash = location.hash.replace("#", "");

      if (hash === "braintracerforptsd") {
        section01.style.display = "none";
        section02.style.display = "block";

        // 버튼 스타일 업데이트
        document
          .querySelectorAll(".services-section02-button")[0]
          .classList.remove("able", "font6");
        document
          .querySelectorAll(".services-section02-button")[0]
          .classList.add("font4");

        document
          .querySelectorAll(".services-section02-button")[1]
          .classList.add("able", "font6");
      } else {
        section01.style.display = "block";
        section02.style.display = "none";

        // 버튼 스타일 업데이트
        document
          .querySelectorAll(".services-section02-button")[1]
          .classList.remove("able", "font6");
        document
          .querySelectorAll(".services-section02-button")[1]
          .classList.add("font4");

        document
          .querySelectorAll(".services-section02-button")[0]
          .classList.add("able", "font6");
      }
    });

    // 해시값이 변경될 때마다 섹션을 갱신하는 이벤트 리스너 추가
    window.addEventListener("hashchange", () => {
      const hash = location.hash.replace("#", "");

      if (hash === "braintracerforptsd") {
        section01.style.display = "none";
        section02.style.display = "block";

        // 버튼 스타일 업데이트
        document
          .querySelectorAll(".services-section02-button")[0]
          .classList.remove("able", "font6");
        document
          .querySelectorAll(".services-section02-button")[0]
          .classList.add("font4");

        document
          .querySelectorAll(".services-section02-button")[1]
          .classList.add("able", "font6");
      } else {
        section01.style.display = "block";
        section02.style.display = "none";

        // 버튼 스타일 업데이트
        document
          .querySelectorAll(".services-section02-button")[1]
          .classList.remove("able", "font6");
        document
          .querySelectorAll(".services-section02-button")[1]
          .classList.add("font4");

        document
          .querySelectorAll(".services-section02-button")[0]
          .classList.add("able", "font6");
      }
    });
  </script>
</html>
