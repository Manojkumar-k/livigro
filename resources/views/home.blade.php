@extends('layouts.app')

@section('content')


<div class="bgded overlay" style="background-image:url('images/bg.png');"> 
  
  <div id="pageintro" class="hoc clear row" style="margin-left: 0px;margin-right: 0px;"> 
    <!-- ################################################################################################ -->
    <!-- <article> -->
      <div class="col-md-7" style="padding-left: 30px">
      <h2 class="heading" style="font-size: 60px !important;">India’s Largest Diagnostics
Company</h2>
      <p>Find the right health check-up plan for you</p>
      <footer>
        <form class="group" method="post" action="#">
          <select id="sel" class="fa fa-map-marker" style="padding-top: 5px">
                        <option>Chennai</option>

            <option>Madurai</option>

          </select>
            <input type="text" id="txt" value="" placeholder="Email Here&hellip;" style="padding-top: 5px">
            <button class="fas fa-sign-in-alt" type="submit" id="sub" title="Submit" style="padding-top: 5px"><em>Submit</em></button>
        </form>
      </footer>
    <!-- </article> --></div>
    <div class="col-md-5">
       <ul class="header_list_top">
<li><em>Order Online</em></li>
<li><em>Free Home Sample Collections</em></li>
<li><em>Certified Diagnostic&nbsp;Partners</em></li>
<li><em>Fully Automated Equipment and Analysers</em></li>
<li><em>Budget Friendly</em></li>
<li><em>Online Report Delivery</em></li>
</ul>
      
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>



<div class="container">
    <h1 class="text-center my-3">Most Popular Packages</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner row w-100 mx-auto">
        <div class="carousel-item col-md-4 active">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 1</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 2</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 3</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 4</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 5</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 6</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item col-md-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Card 7</h4>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is
                a little bit longer.</p>
              <p class="card-text">
                <small class="text-muted">Last updated 3 mins ago</small>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-4">
            <a class="btn btn-outline-secondary mx-1 prev" href="javascript:void(0)" title="Previous">
              <i class="fa fa-lg fa-chevron-left"></i>
            </a>
            <a class="btn btn-outline-secondary mx-1 next" href="javascript:void(0)" title="Next">
              <i class="fa fa-lg fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


<div class="container main">
  <h1 class="text-center my-3">Browse By Risk Area</h1>
  <section class="customer-logos slider slider-nav" style="padding: 10% 0 10% 0">
    <div class="slide"><img src="images/image9.png"></div>
    <div class="slide"><img src="images/image2.png"></div>
    <div class="slide"><img src="images/image3.png"></div>
    <div class="slide"><img src="images/image4.png"></div>
    <div class="slide"><img src="images/image5.png"></div>
    <div class="slide"><img src="images/image6.png"></div>
    <div class="slide"><img src="images/image7.png"></div>
    <div class="slide"><img src="images/image8.png"></div>
  </section>

</div>
<div class="container-fluid">
      <div class="row" style="background-color: rgb(244, 244, 249); padding: 60px 76.6px 60px 76.6px; margin-left: auto; margin-right: auto; border-left: 0px; border-right: 0px;" data-stretch-type="full">
        <div class="container">
        <h2 class="sow-headline"><b>LIVIGRO</b> ECOSYSTEM </h2>
        <h3 class="sow-sub-headline">Through our connected ecosystem with patients, doctors, and labs we will provide a more transparent and cost-effective healthcare delivery. </h3>
        </div>
      <div class="container" style="padding-top: 20px">
        <div class="row">

        <div class="col-sm-3" style="background-color:transparent;">
            <div class="textwidget">
                
                    <h5><center>
                        <div class="sow-icon-image" style="background-image: url(/larapro/public/images/doll1.png); font-size: 24px"></div></center>
                            <a href="#">Personal Health</a>                        
                        </h5>

                    <p>You Will get the Most cost-efficient health tests from Premium Labs at your Home-Office without disturbing your day-to-day activity. You will be offered Free Home Sample Collection, You will receive much faster test results on your phone. All together You will save money, time and energy.</p>

                </div>
        </div>
        <div class="col-sm-3" style="background-color:transparent;">
            <div class="textwidget">
                    <h5><center>
                        <div class="sow-icon-image" style="background-image: url(/larapro/public/images/microscope.png); font-size: 24px"></div></center>
                            <a href="#">For Diagnostics </a>                        
                        </h5>

                    <p>Take your Lab to the next level with Livigro. your Presence online for free. Manage your existing customer base + Make additional customer base with Livigro.</p>

                </div>
        </div>
        <div class="col-sm-3" style="background-color:transparent;">
            <div class="textwidget">
                    <h5><center>
                        <div class="sow-icon-image" style="background-image: url(/larapro/public/images/stethushope.png); font-size: 24px"></div></center>
                            <a href="#">For Doctors  </a>                       
                             </h5>

                    <p>Prime your online presence. Raise test on your Favourite labs. Get connected with more patients, Access and manage health Records. We establishes your Medical Practice available all around India through user-friendly Technology.</p>
                </div>
        </div>
        <div class="col-sm-3" style="background-color:transparent;">
            <div class="textwidget">
                    <h5><center>
                        <div class="sow-icon-image" style="background-image: url(/larapro/public/images/doll4.png); font-size: 24px"></div></center>
                            <a href="#">  For Corporate </a>                        
                        </h5>

                    <p>Livigro corporate is specially designed for corporates, institutions or any organizations that care about their employees’ health. we take care of your employees’ like our kith and kin.</p>

                </div>
        </div>
        </div>
      </div>
      </div>
    </div>

  <script>
    (function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarousel').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarousel").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end 
        if (e.direction == "left") {
          $(".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})(jQuery);



// $(document).ready(function(){
//   $('.customer-logos').slick({
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
//     arrows: false,
//     dots: false,
//     pauseOnHover: false,
//     responsive: [{
//       breakpoint: 768,
//       settings: {
//         slidesToShow: 4
//       }
//     }, {
//       breakpoint: 520,
//       settings: {
//         slidesToShow: 3
//       }
//     }]
//   });
// });



$('.slider-nav').slick({
  
   
   slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    pauseOnHover: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
 });

 </script>
@endsection
