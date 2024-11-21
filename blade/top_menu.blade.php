<style>
    .Top_Scroll_btn {
        position: fixed;
        bottom: 80px;
        right: 10%;
        width: 64px;
        height: 64px;
        border-radius: 100%;
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.1);
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: .3s;
    }

    @media screen and (max-width:767px) {
        .Top_Scroll_btn {
            bottom: 40px;
            right: 20px;
            width: 48px;
            height: 48px;
        }
    }

    .Top_Scroll_btn.active {
        opacity: 1;
        z-index: 100;
    }

    .Top_Scroll_btn i {
        font-size: 24px;
        color: #464646;
        z-index: 300;
    }

    .Top_Scroll_btn .progress_bar {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: 100;
    }

    .Top_Scroll_btn .progress_bar::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        height: 90%;
        background-color: #fff;
        border-radius: 100%;
    }
</style>

<div id="side_menu" class="Header_Side_menu">
    <button class="Top_Scroll_btn">
        <i class="xi-arrow-up"></i>
        <div class="progress_bar"></div>
    </button>
</div>


<script>

    $('.Top_Scroll_btn').click(function () {
        $('html').scrollTop(0);
    });

    $(document).scroll(function () {
        if ($(document).scrollTop() > 88) {
            $('.Top_Scroll_btn').addClass('active');
        } else {
            $('.Top_Scroll_btn').removeClass('active');
        }
    });

    $(document).ready(function () {
        $(window).scroll(function () {
            var scrollPercent = ($(window).scrollTop() / ($(document).height() - $(window).height())) * 100;
            var color = getColorFromPercentage(scrollPercent);

            $('.Top_Scroll_btn .progress_bar').css('background', 'conic-gradient(' + color + ' 0% ' + scrollPercent + '%, #fff ' + scrollPercent + '% 100%)');
        });

        function getColorFromPercentage(percentage) {

            var startColor = [256, 256, 256]; // RGB 값으로 작성해야함!
            var endColor = [174, 174, 174];

            var color = [];
            for (var i = 0; i < 3; i++) {
                color[i] = Math.round(startColor[i] + (endColor[i] - startColor[i]) * (percentage / 100));
            }

            return 'rgb(' + color.join(',') + ')';
        }
    });
</script>
