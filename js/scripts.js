(function ($) {
    $(document).ready(function () {
        $('#enter-button').click(function (e) {
            $('form#agfrom').find('[g_placeholder]').each(function () {
                var input = $(this);
                if (input.val() == input.attr('g_placeholder')) {
                    input.val('');
                }
            });

            var required = reqired_check();
            var age_valid = age_check();

            if (required && age_valid ) {
                // $('form#agfrom').submit();
                e.preventDefault();
                formSubmission();
            }
            else {
            
                $('form#agfrom input').blur();
            }
            return false;
        });
        $("input[g_placeholder]").each(
        	
            function () {
            
                if ($(this).val() == "" && $(this).attr("g_placeholder") != "") {
                    $(this).val($(this).attr("g_placeholder"));
                    $(this).focus(function () {
                  
                        $(this).addClass('nph');
                        $(this).removeClass('req-error');
                        if ($(this).val() == $(this).attr("g_placeholder")) $(this).val("");
                    });
                    $(this).blur(function () {
                        if ($(this).val() == "") {
                            $(this).val($(this).attr("g_placeholder"));
                            $(this).removeClass('nph');
                        }
                        else {
                            $(this).addClass('nph');
                        }
                    });
                }
                
            });
        $('form#agfrom input[type="checkbox"]').change(function () {
            $(this).removeClass('req-error');
        });
        
          $('#user_province').change(function () {
            $(this).removeClass('req-error');
        });
        
		
		
    });

    var reqired_check = function () {

        valid = true;

        $('#agfrom div.required').parent().find('input[type="text"]').each(function () {
            if ($(this).attr('value') == '') {
                $(this).addClass('req-error');
                valid = false;
            }
        });
        $('#agfrom div.required').parent().find('input[type="checkbox"]').each(function () {
            if (!$(this).attr('checked')) {
                $(this).addClass('req-error');
                valid = false;
            }
        });
        $('#agfrom div.required').parent().find('select').each(function () {
            if ($(this).attr('value') == 0) {
                $(this).addClass('req-error');
                valid = false;
            }
        });
        if(!validateEmail($('#user_email').attr('value'))){
            valid = false;
            $('#user_email').addClass('req-error');
        }
        
        var value = $('#user_postal').val();        

        if (validatePostal(value)){           
            
        }else {
            valid = false;
            $('#user_postal').addClass('req-error');            
        }
        
      
		

        return valid;
    };
    
    function validatePostal(value){
        return (/^([A-Z, a-z][0-9][A-Z, a-z])\s*([0-9][A-Z, a-z][0-9])$/).test(value);
    }

    var age_check = function () {
        var age_valid  = true;
        var month_elem = $('#user_birthmonth');
        var day_elem = $('#user_birthday');
        var year_elem = $('#user_birthyear');
        try {
            var year = parseInt(year_elem.attr('value'), 10);
            var day = parseInt(day_elem.attr('value'), 10);
            var month = parseInt(month_elem.attr('value'), 10);
            d1 = new Date(year, month-1, day);
            if (d1.getMonth() != month-1 || d1.getDate() != day || d1.getFullYear() != year) {
                age_valid  = false;
                valid = false;
            } else {
                d2 = new Date();

                var nowyear = d2.getFullYear();
                var age = nowyear - year;
                var nowmonth = d2.getMonth();
                var nowday = d2.getDate();
                var age_month = nowmonth - month;
                var age_day = nowday - day;
                var ageLimit = 19;
                var provinceVal = $('#user_province').val();

                if (provinceVal == "AB" || provinceVal == "MB"){
                    ageLimit = 18;
                }

                if (age < ageLimit || (age == ageLimit && age_month+1 < 0) || (age == ageLimit && age_month+1 == 0 && age_day < 0)) {
                    age_valid = false;
                    valid = false;
                    alert('Must be ' + ageLimit + ' to enter.');
                }
            }
        } catch (e) {
            age_valid  = false;
        }
        if(!age_valid ){
            month_elem.addClass('req-error');
            day_elem.addClass('req-error');
            year_elem.addClass('req-error');
        }
        else{
            month_elem.removeClass('req-error');
            day_elem.removeClass('req-error');
            year_elem.removeClass('req-error');
        }
        return age_valid ;
    };



    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    
    function setFooterHeight(){

        var windowHeight = $(window).height();
        var containerHeight = $("#reg-container").height();

        heightDiff = windowHeight - containerHeight;

        if(windowHeight > containerHeight){
                $(".footer-container").css({"height" : heightDiff + "px"});
        };
        
    };

    $(window).load(function(){
        setFooterHeight();
    });
    
    $(window).resize(function(){
        setFooterHeight();
    });
    
    function formSubmission() {
        $.ajax({
            type : "POST",
            url : "submit.php",
            data : $("#agfrom").serialize(),
            success : function(data) {
            
                _return = jQuery.parseJSON(data);

                if (_return.success) {
                    window.location.replace("thanks.php");
                } else {
window.location.replace("thanks.php");
                    $('#error_field p').html(_return.error);

                }

            },
            error : function(data) {
                console.log('error');
                console.log(data);
            }
        });
    }



})(jQuery);