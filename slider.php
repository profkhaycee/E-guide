<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">

</head>
<body>
  
<!-- <div id="slider" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
        <li data-target="#slider" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active"><img src="images/Banner01.jpg" alt=""></div>
        <div class="carousel-item"><img src="images/Banner02.jpg" alt=""></div>
        <div class="carousel-item"><img src="images/Banner03.jpg" alt=""></div>
        <div class="carousel-item"><img src="images/Banner04.jpg" alt=""></div>
        <div class="carousel-item"><img src="images/Banner06.jpg" alt=""></div>
    </div>
    <a href="#slider" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon" style=" padding:30px; border-radius:10%"></span></a>
    <a href="#slider" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon" style=" padding:30px; border-radius:10%"></span></a>
</div> -->

<div class="w-100" style=" ">
    <div id="bannerslider" class="owl-carousel owl-theme">
      <div class="w-100" style="">
        <img style="" src="images/Banner01.jpg" class="w-100 img-fluid" alt="..." height="">
      </div>
      <div style="" class="w-100">
        <img style="" src="images/Banner02.jpg" class="w-100 img-fluid" alt="..." height="">
      </div>
      
      <div style="" class="w-100">
        <img style="" src="images/Banner03.jpg" class="w-100 img-fluid" alt="..." height="">
      </div>
      <div style="" class="w-100">
        <img style="" src="images/Banner04.jpg" class="w-100 img-fluid" alt="..." height="">
      </div>
      
      <div style="" class="w-100">
        <img style="" src="images/Banner06.jpg" class="w-100 img-fluid" alt="..." height="">
      </div>
    </div>
</div>

<div id="pp"><div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/owl.carousel.js">

<script>
    $(document).ready(function(){
        $('#bannerslider').owlCarousel({
            loop:true,
            dots: true,
            margin:10,
            autoplay:true,
            navText: ["<i class='fas fa-chevron-circle-left' style='font-size:35px;color:black;opacity: 0.7;position: absolute; top:290px;left:40px;'></i>",
                        "<i class='fas fa-chevron-circle-right' style='font-size:35px;color:black;opacity: 0.7; position: absolute; top:290px; right: 40px;'></i>"],
        
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                1000:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });
    });  
</script>
    <script>
      function hh(n){
        if(n==1){
          return 1;
        }else{
          return (n + hh(n-1))
        }
      }

      document.getElementById('pp').innerHTML = hh(4) ;
      // hh(4);

</script>

</body>
</html>