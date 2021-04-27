jQuery(window).on('load', function() {
      
    
    // HIDE PRELAODER
    $(".preloader").addClass("preloader-hidden");

    // SHOW/ANIMATE ANIMATION CONTAINER
    setTimeout(function(){

        $(".hero .animation-container").each(function(){

            var e = $(this);

            setTimeout(function(){

                e.addClass("run-animation");

            }, e.data("animation-delay") );

        });

    }, 900 );

    
});


jQuery(document).ready(function($) {
	"use strict";
    
    
    $(window).on('load', function() {
        
        // HIDE PRELAODER
        $(".preloader").addClass("preloader-hidden");
        
        // SHOW/ANIMATE ANIMATION CONTAINER
        setTimeout(function(){
            
            $(".hero .animation-container").each(function(){

                var e = $(this);

                setTimeout(function(){
                    
                    e.addClass("run-animation");
                    
                }, e.data("animation-delay") );

            });
            
        }, 900 );
        
    });
    
    
    // INIT PARALLAX PLUGIN
    $(".hero .background-content.parallax-on").parallax({
        scalarX: 24,
        scalarY: 15,
        frictionX: 0.1,
        frictionY: 0.1,
    });
    
    
    // OPEN POPUP SEQUENCE
    $(".open-popup").click(function(){
        
        $(".popup").addClass("show");
        $(".popup").append('<div class="close-popup backface"></div>');
        
    });

    // CLOSE POPUP SEQUENCE
    $(document).on('click', '.close-popup', function(){ 
        
        $(".popup").removeClass("show");
        $(".popup .backface").remove();
        
    });
    
    
    // AJAX SUBSCRIBE FORM
    $('.subscribe-form').submit(function() {

        //var postdata = $('.subscribe-form').serialize();

        /*$.ajax({

            type: 'POST',
            url: 'assets/php/subscribe.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {

                $('.subscribe-form').removeClass("form-error");

                if(json.valid === 0) {
                    
                    $('.subscribe-form').addClass("form-error");
                    
                } else {

                    $('.subscribe-form').addClass("form-success");
                    $('.subscribe-form input,.subscribe-form button').val('').prop('disabled', true);
                    
                }
                
            }

        });*/

        $.ajax({

            type: "POST",//方法类型
            dataType: 'json',//预期服务器返回的数据类型
            url: "addinfo.php" ,//url
            data: $('.subscribe-form').serialize(),
            success: function (result) {
                //提示信息
                $('.subscribe-form').removeClass("form-error");
                if(result['ok'] === 1) {
                    $("#smg").html(result['message']);
                    $('.subscribe-form').addClass("form-success");
                    $('.subscribe-form input,.subscribe-form button').val('').prop('disabled', true);
                }else{
                    $("#emg").html(result['message']);
                    $('.subscribe-form').addClass("form-error");
                }
            },
            error : function() {
                $("#emg").html('信息传输过程中出现异常！');
                $('.subscribe-form').addClass("form-error");
            }
        });

        return false;

    });
    
    
});