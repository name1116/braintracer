<div id="footer" class="footer" data-speed="clamp(0.8)">
  <div class="com-info-div">
    <a href="{{ route("main") }}">
      <img src="./images/main_small_subject.svg" class="com-info-logo" />
    </a>
    <div class="com-info">
      상호명 : 브레인트레이서&nbsp;
      <p class="only-pc">|</p>
      &nbsp;<br class="only-mobile" />대표 : 임재근&nbsp;
      <p class="only-pc">|</p>
      &nbsp;<br class="only-mobile" />이메일 : braintracer@manito.kr <br />
      주소 : 대전광역시 서구 둔지로 60, 4층 457호(둔산동, 35229) 브레인트레이서
    </div>

    <p class="copyright">Copyright 2024 브레인트레이서 All Rights Reserved.</p>
  </div>

  <div class="nav">
    <div class="section">
      <p class="nav-sub font5">About us</p>

      <div class="line"></div>

      <p class="nav-text">
        <a href="{{ route("about_us") }}#aboutcompany" class="font3"> 회사소개 </a>
      </p>
      <p class="nav-text">
        <a href="{{ route("about_us") }}#companyhistory" class="font3"> 연혁 </a>
      </p>
    </div>
    <div class="section">
      <p class="nav-sub font5">Services</p>

      <div class="line"></div>

      <p class="nav-text">
        <a href="{{ route("services") }}#braintracerforall" class="font3">
          브레인트레이서 For all
        </a>
      </p>
      <!-- 요청사항 주석 -->
      <!-- <p class="nav-text">
          <a href="{{ route("services") }}#braintracerforptsd" class="font3">
          브레인트레이서 For PTSD
        </a>
      </p> -->
    </div>
    <div class="section">
      <p class="nav-sub font5">Contact us</p>

      <div class="line"></div>

      <p class="nav-text">
        <a href="{{ route("contact_us") }}#contact" class="font3"> 문의하기 </a>
      </p>
      <p class="nav-text">
          <a href="{{ route("contact_us") }}#directions" class="font3"> 오시는길 </a>
      </p>
    </div>
  </div>
</div>
