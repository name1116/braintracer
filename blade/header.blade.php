<nav id="gnb">
  <a href="{{ route("main") }}">
    <img src="./images/main_small_subject.svg" alt="로고" class="logo" />
  </a>

  <div class="section">
    <div class="link-flex">
      <a href="{{ route("about_us") }}" class="goto-link">About us</a>
      <div class="link-btn-wrap">
        <button class="font3"><a href="{{ route("about_us") }}#aboutcompany">회사소개</a></button>
        <button class="font3"><a href="{{ route("about_us") }}#companyhistory">연혁</a></button>
      </div>
    </div>
    <div class="link-flex">
      <a href="{{ route("services") }}" class="goto-link">Services</a>
      <div class="link-btn-wrap">
        <button class="font3"><a href="{{ route("services") }}#braintracerforall">브레인트레이서 For all</a></button>
        <!-- 요청사항 주석처리 -->
        <!-- <button class="font3"><a href="{{ route("services") }}#braintracerforptsd">브레인트레이서 For PTSD</a></button> -->
      </div>
    </div>
    <div class="link-flex">
      <a href="{{ route("contact_us") }}" class="goto-link">Contact us</a>
      <div class="link-btn-wrap">
        <button class="font3"><a href="{{ route("contact_us") }}#contact">문의하기</a></button>
        <button class="font3"><a href="{{ route("contact_us") }}#directions">오시는길</a></button>
      </div>
    </div>
  </div>

  <button class="ham-menu-btn">
    <i class="xi-bars"></i>
  </button>
</nav>

<section class="ham-menu">
  <div class="ham-wrap">
    <div class="ham-btn-wrap">
      <button class="ham-btn">
        <p class="btn-title font6">About us</p>
        <i class="xi-angle-down"></i>
      </button>
      <div class="ham-btn-detail-wrap">
        <button class="ham-btn-detail font5">
          <a href="{{ route("about_us") }}#aboutcompany">회사소개</a>
        </button>
        <button class="ham-btn-detail font5">
          <a href="{{ route("about_us") }}#companyhistory">연혁</a>
        </button>
      </div>
    </div>

    <div class="ham-btn-wrap">
      <button class="ham-btn">
        <p class="btn-title font6">Services</p>
        <i class="xi-angle-down"></i>
      </button>
      <div class="ham-btn-detail-wrap">
        <button class="ham-btn-detail font5">
          <a href="{{ route("services") }}#braintracerforall"
            >브레인트레이서 For All</a>
        </button>
        <!-- 요청사항 주석처리 -->
        <!-- <button class="ham-btn-detail font5">
          <a href="{{ route("services") }}#braintracerforptsd"
            >브레인트레이서 For PTSD</a>
        </button> -->
      </div>
    </div>

    <div class="ham-btn-wrap">
      <button class="ham-btn">
        <p class="btn-title font6">Contact us</p>
        <i class="xi-angle-down"></i>
      </button>
      <div class="ham-btn-detail-wrap">
        <button class="ham-btn-detail font5">
          <a href="{{ route("contact_us") }}#contact">문의하기</a>
        </button>
        <button class="ham-btn-detail font5">
          <a href="{{ route("contact_us") }}#directions">오시는길</a>
        </button>
      </div>
    </div>
  </div>
</section>

<script>
  const header = document.getElementById("header");
  const mainHamBtn = document.querySelector(".ham-menu-btn");
  const mainIcon = document.querySelector(".ham-menu-btn i");
  const mainMenu = document.querySelector(".ham-menu");
  const hamBtns = document.querySelectorAll(".ham-btn");

  mainHamBtn.addEventListener("click", () => {
    if (mainIcon.className === "xi-bars") {
      header.classList.add("active");
      mainIcon.className = "xi-close";
      mainMenu.style.display = "block";
      mainMenu.style.backgroundColor = "#202020";
    } else {
      header.classList.remove("active");
      mainIcon.className = "xi-bars";
      mainMenu.style.display = "none";
      mainMenu.style.backgroundColor = "";
    }
  });

  hamBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const title = btn.querySelector(".btn-title");
      const icon = btn.querySelector("i");
      const detail = btn
        .closest(".ham-btn-wrap")
        .querySelector(".ham-btn-detail-wrap");
      const isActive = btn.classList.contains("active");

      // 모든 버튼의 색상 및 아이콘 초기화
      hamBtns.forEach((otherBtn) => {
        otherBtn.classList.remove("active");
        const otherTitle = otherBtn.querySelector(".btn-title");
        const otherIcon = otherBtn.querySelector("i");
        const otherDetail = otherBtn
          .closest(".ham-btn-wrap")
          .querySelector(".ham-btn-detail-wrap");
        otherIcon.classList = "xi-angle-down"; // 초기 아이콘으로 설정
        otherTitle.style.color = ""; // 기본 색상으로 초기화
        otherIcon.style.color = ""; // 기본 색상으로 초기화
        otherDetail.style.display = "";
      });

      // 현재 버튼이 활성화 상태가 아니라면 활성화 상태로 설정
      if (!isActive) {
        btn.classList.add("active");
        title.style.color = "#3b6dec"; // 원하는 색상으로 변경
        icon.classList = "xi-angle-up"; // 아이콘을 변경
        icon.style.color = "#3b6dec"; // 원하는 색상으로 변경
        detail.style.display = "flex";

        detail.querySelectorAll(".ham-btn-detail").forEach((detailBtn) => {
          const isDetail = detail.classList.contains("active");
          detailBtn.addEventListener("click", () => {
            detail
              .querySelectorAll(".ham-btn-detail")
              .forEach((otherDetailBtn) => {
                otherDetailBtn.classList.remove("active");
                header.classList.remove("active");
                mainIcon.className = "xi-bars";
                mainMenu.style.display = "none";
                mainMenu.style.backgroundColor = "";
              });
            if (!isDetail) {
              detailBtn.classList.add("active");
            }
          });
        });
      }
    });
  });
</script>
