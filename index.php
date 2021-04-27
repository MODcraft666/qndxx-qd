<!doctype html>
<?php
$classes=array("1n4"=>"高一四班","2n2"=>"高二二班","1n1"=>"高一一班","2n5"=>"高二五班");
?>
<html lang="en">
   
   
    <head>


        <!-- META -->
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- PAGE TITLE -->
        <title><?php echo $classes[$_GET['class']]; ?>青年大学习登记系统 - 正式版</title>

        <!-- FAVICON -->
        <link rel="shortcut icon" href="assets/img/favicon.png">

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">


    </head>


    <body>
    
       
        <!-- PRELOADER -->
        <div class="preloader">
           
            <!-- SPINNER -->
            <div class="spinner">
             
              <div class="bounce-1"></div>
              <div class="bounce-2"></div>
              <div class="bounce-3"></div>
              
            </div>
            <!-- /SPINNER -->
            
        </div>
        <!-- /PRELOADER -->


        <!-- HERO -->
        <div class="hero">


            <!-- FRONT CONTENT -->
            <div class="front-content">


                <!-- CONTAINER MID -->
                <div class="container-mid">


                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-down" data-animation-delay="0">
                       
                        <img class="img-responsive logo" src="assets/img/logo.png" alt="image">
                        
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                    
                    
                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-right" data-animation-delay="300">
                        
                        <h1>青年大学习登记系统</h1>
                        
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                    <div class="tlinks">开发者 李岳洋</div>
                    
                    
                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-left" data-animation-delay="600"> 
                       
                        <p class="subline">当你完成每周的青年大学习后,请来到此处登记.</p>
                        
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                    

                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-up" data-animation-delay="900"> 
                       
                        <div class="open-popup">现在登记</div>
                        
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                    

                </div>
                <!-- /CONTAINER MID -->


                <!-- FOOTER -->
                <div class="footer">
                    

                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-up" data-animation-delay="1200">
                       
                        <p>© 2020 | 李岳洋(高一四班) - 独立开发 <a href="./down_none.php?class=<?php echo $_GET['class']; ?>" target="_blank" title="未登记">点击这里查看未登记的同学</a> - 统计未学习同学很累？<a href="./rj.php" title="入驻" target="_blank">我也要使用！</a></p>
                        
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                    

                </div>
                <!-- /FOOTER -->


            </div>
            <!-- /FRONT CONTENT -->


            <!-- BACKGROUND CONTENT -->
            <div class="background-content parallax-on">

                <div class="background-overlay"></div>
                <div class="background-img layer" data-depth="0.05"></div>
                
            </div>
            <!-- /BACKGROUND CONTENT -->


        </div>
        <!-- /HERO -->
        
        
        <!-- POPUP ( SUBSCRIBE ) -->
        <div class="popup">
           
           
            <!-- CARD -->
            <div class="card">
                    
                    
                    <!-- CARD CLOSE BUTTON -->
                    <div class="close-popup close-button"></div>
                   
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h3>登记</h3>
                    <p class="subline">本系统无法代替您进行青年大学习的内容学习，仅做学习情况登记</p>
                   
                    <!-- FORM -->
                    <form action="assets/php/subscribe.php" method="post" class="subscribe-form">

                       
                        <input type="text" name="name" placeholder="* 输入你的姓名" onfocus="this.placeholder = ''" onblur="this.placeholder = '* 输入你的姓名'" class="email form-control">
                        <input type="text" name="number" placeholder="* 输入你的学号" onfocus="this.placeholder = ''" onblur="this.placeholder = '* 输入你的学号'" class="email form-control">

                        <!-- PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) DO NOT REMOVE -->
                        <div class="fhp-input"><input type="text" name="phone" placeholder="* Enter your phone to Subscribe!" class="email form-control"></div>
                        <!-- /PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) DO NOT REMOVE -->
                        <div class="fhp-input"><input type="text" name="class" placeholder="* class" class="email form-control" value="<?php echo $_GET['class']; ?>"></div>
                        
                        <button type="submit" class="btn btn-primary form-control">立即登记(需先完成学习)<i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        
                        <!-- SUCCESS-ERROR MESSAGE -->
                        <div id="emg" class="error-message">*</div>
                        <!-- /SUCCESS-ERROR MESSAGE -->
                        <div id="smg" class="success-message">*</div>
                        

                    </form>
                    <!-- /FORM -->
                    
                
            </div>
            <!-- /CARD -->
            
            
        </div>
        <!-- /POPUP ( SUBSCRIBE ) -->


        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="assets/js/plugins.js?time=<?php echo time() ?>"></script>
        <script type="text/javascript" src="assets/js/main.js?time=<?php echo time() ?>"></script>


    </body> 
    
    
</html>