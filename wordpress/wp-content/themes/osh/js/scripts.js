(function ($) {
    $(document).ready(function () {

        $('form#agfrom input[type="checkbox"]').change(function () {
            $(this).removeClass('req-error');
        });

        $('#user_province').change(function () {
            $(this).removeClass('req-error');
        });
        formSuccess();


        $('#btn-facebook').on('click',function(e){
            e.preventDefault();
            fbPopup();
        });
    });


    function fbPopup(){
        FB.ui(
            {
                method: 'share',
                href: 'http://appstraffik.com/oshkosh/'
            }, function(response){});

    };

    function formSuccess() {
        $(document).on('spam.wpcf7', function () {
            console.log('submit.wpcf7 was triggered!');
        });

        $(document).on('invalid.wpcf7', function () {
            console.log('invalid.wpcf7 was triggered!');
        });

        $(document).on('mailsent.wpcf7', function () {
            console.log('mailsent.wpcf7 was triggered!');
        });


        $(document).on('mailfailed.wpcf7', function () {
            console.log('mailfailed.wpcf7 was triggered!');
        });
        $(".wpcf7").on('wpcf7:submit', function () {
            console.log('mailsent.wpcf7 was triggered!');
        });
    }

    function setFooterHeight() {

        var windowHeight = $(window).height();
        var containerHeight = $("#reg-container").height();

        heightDiff = windowHeight - containerHeight;

        if (windowHeight > containerHeight) {
            $(".footer-container").css({"height": heightDiff + "px"});
        }
        ;

    };

    $(window).load(function () {
        setFooterHeight();
    });

    $(window).resize(function () {
        setFooterHeight();
    });


})(jQuery);