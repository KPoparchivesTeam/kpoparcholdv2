<?php
        $imgcount = 11;
        ?>
<html lang="ko">

<!-- Meta tags -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="UTF-8">
<meta name="description" content="K-Pop Archives a place to find allot of songs.">
<meta name="keywords"
    content="BlackPink,RedVelvet.Mamamoo,Momoland,Twice,BTS,Psy,YGEntertainment,YG.SMTown,1theK,JYP,JYPEntertainment,Jenniekimm,Jennie">
<meta name="author" content="K-Pop Archives">
<meta property="og:title" content="K-Pop archives" />
<meta property="og:description" content="K-Pop Archives, a place to find allot of K-Pop songs." />
<meta property="og:url" content="https://kpoparchives.com" />
<meta property="og:image" content="" />
<meta name="viewport" content="width=device-width, initial-scale=0.7">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139873498-1"
    type="91c4e5296062db3626d31e60-text/javascript"></script>
<script type="91c4e5296062db3626d31e60-text/javascript">
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-139873498-1');
</script>

<!-- End of Meta tags -->
<!--Title-->
<title>About Me</title>
<!--End of title-->
<!--Css requests-->
<style>
.titleKpop {
    color: white;
    font-style: normal;
    font-weight: bold;
    line-height: normal;
    font-size: 7.5rem;
    margin: 0;
    font-family: 'Ubuntu', sans-serif;
}
</style>
<link rel="stylesheet" href="css/Neet.css">
<link rel="stylesheet" href="css/royal_preloader.css">
<link rel="stylesheet" href="css/headers.css">
<link rel="stylesheet" href="css/Navbar.css">
<link rel="stylesheet" href="css/pictures.css">
<link rel="stylesheet" href="css/fade.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/maintext.css">
<style type="text/css">
/* background image */
.home {
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("pics/Index/bg<?php echo mt_rand(1, $imgcount); ?>.jpg") center;
}


}
</style>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<!--Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8./jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('div.hidden').fadeIn(2000).removeClass('hidden');
});
$(document).ready(function() {
    $('div.hidden2').fadeIn(4000).removeClass('hidden2');
});
$(document).ready(function() {

    /* Every time the window is scrolled ... */
    $(window).scroll(function() {

        /* Check the location of each desired element */
        $('.hideme3').each(function(i) {

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {

                $(this).animate({
                    'opacity': '1'
                }, 1000);

            }

        });

    });

});
</script>


<head>
</head>
<!--Header start-->
<header class="header home main">
    <!--Navbar-->
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="aboutme.php">About Me</a>
    </div>
    <div class="pagecontent">

        <div class="hidden">

            <h1 class="titleKpop">Sample text</h1>

        </div>
        <div class="hidden2">

            <h1 class="Subtitle">Place holder text</h1>

        </div>
</header>

<body>
    <section class="section">

        <h2 class="title"></h2><br>

        
            <div class="Indextext1">
            <div class="hideme3">
            <h2 class="title">1. NaeNae</h2>
            <p>XD</p>
            </div>
        </div>
        <div class="Indextext2">
        </div>
        </div>

    </section>


    </section>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="91c4e5296062db3626d31e60-|49" defer=""></script>
</body>
<div class="footer">
    <div class="footertitle">
        <p>©2019 Kpoparchives & K-Pop singing all rights reserved</p>
    </div>
    <div class="socialmedia">
        <a href="https://www.kpoparchives.com/discord.php" target="_blank">
            <img src="pics/discord-512.png" width="auto" height="55px"></a>
        <a href="https://twitter.com/hike821" target="_blank1">
            <img src="pics/Twitter_Social_Icon_Circle_Color.png" width="auto" height="55px"></a>

    </div>

</div>

</html>