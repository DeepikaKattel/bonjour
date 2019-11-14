<!DOCTYPE html>
<html lang="en">
<style>
#text1{
  color:black;
  font-size:18px;
  font-style:italic;
  margin-top:-50px;
  text-shadow: 1px 0px 1px #000000;
}
#text2{
  color:black;
  font-size:15px;
}
#points{
  color:black;
  font-size:15px;
  margin-top:-10px;
  margin-left:20px;
}
#text{
  color:black;
  margin-left:400px;
  margin-top:-40px;
  font-size:18px;
  font-style:italic; 
  text-shadow: 1px 0px 1px #000000;
}
#heading1{
  color:black;
  margin-top:-20px;
  font-size:30px;
  font-weight:bold;

}
#heading{
  color:black;
  margin-top:-70px;
  margin-left:400px;
  font-size:30px;
  font-weight:bold;
}
#visionpic{
  margin-left:570px;
  margin-top:-115px;
}
</style>
<head>
  <meta charset="utf-8">
  <title>Bonjour Management Pvt. Ltd.</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!--reCaptcha-->
  <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <style>
    p{
      color:#000000;
    }
    h4{
      color:#FFFFFF;
      text-align: center;
    }
    ul{
      color:#FFFFFF;
    }

    #header{
      background-color: navy;
      border-color: #0f0f0f;

    }
    #why-us,#services,#careers,#coverage,#contact{
        border:solid;
        border-width: 20px;
        border-color: navy;
    }

    h2{
        margin-top: 30px;
        margin-left: 100px;
        margin-right: -200px;
    }

    </style>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img style="width: 50px;height: 60px;border-style: solid;border-width: 2px;border-color:darkred;" src="{{asset($data->image)}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#contact">Contact</a>

          </li>

          <li class="drop-down"><a href="#why-us">Why us?</a>
            <ul>
              <li><a href="#heading1">Introduction</a></li>
              <li><a href="#heading">Vision & Mission</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#services">Services</a>
            <ul>
              <li><a href="#services">What we do?</a></li>
              <li><a href="#whatWeHave">What we have?</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#coverage">Coverage</a>
            <ul>
              <li><a href="{{route('coverage/gallery')}}">Gallery</a></li>
              <li><a href="{{route('coverage/newscontent')}}">News</a></li>
              <li><a href="{{route('coverage/announcement')}}">Announcements</a></li>
            </ul>
          </li>


          <li class="drop-down"><a href="#careers">Career</a>
            <ul>
              <li><a href="{{route('career/create')}}">Current Openings</a></li>
                <li><a href="{{route('career/create')}}">Drop your CV</a></li>
            </ul>
          </li>
        </ul>  
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">

    <div class="container">

      <div class="intro-img">
        <img style="border-radius: 120px;" src="" alt="" class="img-fluid">
      </div>

      <div class="row" >
            <h2 style="color:#ffffff;font-weight: bold;font-size: 40px;">{{$data->home}}</h2>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us">
      <div class="container">
        <header class="section-header">
            <div class="row">
              <p id="heading1">{{$datas->Heading}}</p>
            </div>
            <p id="text1">{{$datas->Title}}</p>
        </header>

        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <p id="text2">{{$datas->Paragraph}}</p>
            <p id="text2">{{$datas->Paragraph1}}</p>
            <p id="text2">{{$datas->Paragraph2}}</p>
            <p id="text2">{{$datas->Paragraph3}}</p>
            <ul>
                <li>Development of software</li>
                <li>Operation of online aggregator portals</li>
                <li>Business process flow</li>
            </ul>
          </div>
          <div class="col-lg-6 content order-lg-2 order-2" style="height:300px;width:400px;align:center">
                <img src="{{asset('whyus/'.$datas->Image)}}" class="img-fluid">
          </div>
         
        </div>
          <div class="row about-container">
              <div class="col-lg-6 content order-lg-1 order-2">
                @foreach($vis as $vis)
                    <header class="section-header">
                        <p id="heading1">{{$vis->Heading}}</p>
                        <p id="text1">{{$vis->Title}}</p>
                    </header>
                    <div class="column">
                      @foreach($points as $point)
                        <ul id="points">
                          <li>{{$point->Points}}</li>
                        </ul>
                      @endforeach
                </div>
                @endforeach
               </div>
               <div class="col-lg-6 content order-lg-2 order-2">
                    <img src="{{asset('vision/'.$vis->Image)}}" class="img-fluid">
                </div>
          </div>
           
      </div>
    </section>

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <h4 style="color:black">What we do?</h4>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" style="border-style: solid;border-width: 1px;border-color: navy;box-shadow: 2px 2px 2px 2px;">
              <h4 class="title" ><a href="">{{$service->sub_heading1}}</a></h4>
              <div class="row">
                  <p class="description" style="color: black;text-align: justify; text-justify: inter-word;height:200px;width:340px;border-style:none;overflow:auto;margin-left:10px;padding-right:20px;">{{ $service->content1}}</p>
               </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" style="border-style: solid;border-width:1px;border-color: navy;box-shadow: 2px 2px 2px 2px;">
            <h4 class="title"><a href="">{{$service->sub_heading2}}</a></h4>
            <div class="row">
              <p class="description" style="color: black;text-align: justify; text-justify: inter-word;height:200px;width:340px;border-style:none;overflow:auto;margin-left:10px;padding-right:20px;">{{$service->content2}}</p>
             </div>
            </div>
          </div>
        </div>

          <header class="section-header" id="whatWeHave">
            <h4 style="color:black;" >What we have?</h4>
          </header>
        <div class="row">
          <?php $i = 2 ?>
          @foreach($product as $pro)
          @if($i%2 == 0)
         
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            @else
            <div class="col-md-6 col-lg-5  wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s"> 
              @endif
              <?php $i = $i +1 ?>
            <div class="box" style="border-style: solid;border-width: 1px;border-color: navy;box-shadow: 2px 2px 2px 2px;">
            <h4 class="title"><a href="">{{$pro->product}}</a></h4>
            <div class="row">
                <p class="description" style="color: black; text-align: justify; text-justify: inter-word;height:200px;width:340px;border-style:none;overflow:auto;margin-left:10px;padding-right:20px;">{{$pro->description}}</p>
            </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section><!-- #services -->

    <!--==========================
      Coverage
    ============================-->
    <section id="coverage" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Coverage</h3>
        </header>

        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp"  style="border-style: solid;border-color: navy;border-width: 2px;box-shadow: 2px 2px 2px 2px;">
              <div class="card-body">
                <h3 class="card-title">Announcements</h3>
                <p class="card-text">The official announcements are here:</p>
                <a href="{{route('coverage/announcement')}}" class="readmore">Read more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp" style="border-style: solid;border-color: navy;border-width: 2px;box-shadow: 2px 2px 2px 2px;">
              <div class="card-body">
                <h3 class="card-title">News</h3>
                <p class="card-text">The upcoming events and news:</p>
                <a href="{{route('coverage/newscontent')}}" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp" style="border-style: solid;border-color: navy;border-width: 2px;box-shadow: 2px 2px 2px 2px;">
              <div class="card-body">
                <h3 class="card-title">Gallery</h3>
                <p class="card-text">Click here to view images:</p>
                <a href="{{route('coverage/gallery')}}" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
{{--    <section id="portfolio" class="clearfix">--}}
{{--      <div class="container">--}}

{{--        <header class="section-header">--}}
{{--          <h3 class="section-title">Our Portfolio</h3>--}}
{{--        </header>--}}

{{--        <div class="row">--}}
{{--          <div class="col-lg-12">--}}
{{--            <ul id="portfolio-flters">--}}
{{--              <li data-filter="*" class="filter-active">All</li>--}}
{{--              <li data-filter=".filter-app">App</li>--}}
{{--              <li data-filter=".filter-card">Card</li>--}}
{{--              <li data-filter=".filter-web">Web</li>--}}
{{--            </ul>--}}
{{--          </div>--}}
{{--        </div>--}}

{{--        <div class="row portfolio-container">--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">App 1</a></h4>--}}
{{--                <p>App</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">Web 3</a></h4>--}}
{{--                <p>Web</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">App 2</a></h4>--}}
{{--                <p>App</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">Card 2</a></h4>--}}
{{--                <p>Card</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">Web 2</a></h4>--}}
{{--                <p>Web</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">App 3</a></h4>--}}
{{--                <p>App</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">Card 1</a></h4>--}}
{{--                <p>Card</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">Card 3</a></h4>--}}
{{--                <p>Card</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">--}}
{{--            <div class="portfolio-wrap">--}}
{{--              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">--}}
{{--              <div class="portfolio-info">--}}
{{--                <h4><a href="#">Web 1</a></h4>--}}
{{--                <p>Web</p>--}}
{{--                <div>--}}
{{--                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>--}}
{{--                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </div>--}}

{{--      </div>--}}
{{--    </section><!-- #portfolio -->--}}

    <!--==========================
      Clients Section
    ============================-->
   <!-- <section id="testimonials" class="section-bg">
      <div class="container">

        <!-- <header class="section-header">
          <h3>Career</h3>
        </header> -->

        <!-- <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>

            </div>

          </div>
        </div>


      </div>
    </section>
  -->
  <!-- #testimonials -->

    <!-- ==========================
      Team Section
    ============================-->
{{--    <section id="team">--}}
{{--      <div class="container">--}}
{{--        <div class="section-header">--}}
{{--          <h3>Team</h3>--}}
{{--          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>--}}
{{--        </div>--}}

{{--        <div class="row">--}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp">--}}
{{--            <div class="member">--}}
{{--              <img src="img/team-1.jpg" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>Walter White</h4>--}}
{{--                  <span>Chief Executive Officer</span>--}}
{{--                  <div class="social">--}}
{{--                    <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                    <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--            <div class="member">--}}
{{--              <img src="img/team-2.jpg" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>Sarah Jhonson</h4>--}}
{{--                  <span>Product Manager</span>--}}
{{--                  <div class="social">--}}
{{--                    <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                    <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--            <div class="member">--}}
{{--              <img src="img/team-3.jpg" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>William Anderson</h4>--}}
{{--                  <span>CTO</span>--}}
{{--                  <div class="social">--}}
{{--                    <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                    <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--            <div class="member">--}}
{{--              <img src="img/team-4.jpg" class="img-fluid" alt="">--}}
{{--              <div class="member-info">--}}
{{--                <div class="member-info-content">--}}
{{--                  <h4>Amanda Jepson</h4>--}}
{{--                  <span>Accountant</span>--}}
{{--                  <div class="social">--}}
{{--                    <a href=""><i class="fa fa-twitter"></i></a>--}}
{{--                    <a href=""><i class="fa fa-facebook"></i></a>--}}
{{--                    <a href=""><i class="fa fa-google-plus"></i></a>--}}
{{--                    <a href=""><i class="fa fa-linkedin"></i></a>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--        </div>--}}

{{--      </div>--}}
{{--    </section><!-- #team -->--}}

    <!--==========================
      Clients Section
    ============================-->
    <section id="careers" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Careers</h3>
          <p></p>
        </div>
        <div class="row row-eq-height justify-content-center">
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <a href="{{route('career/create')}}">
                  <img src="img/CurrentOpening.jpg" class="img-fluid" alt="">
                  </a>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <a href="{{route('career/create')}}">
                  <img src="img/drop.jpg" class="img-fluid" alt="">
                  </a>
                </div>
            </div>
        </div>
      </div>
    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">
          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.238256336307!2d85.31974471401728!3d27.70992908279086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb195d64b932a1%3A0xf9f777f3696e9747!2sBonjour%20Management%20and%20consulting%20Pvt%20ltd!5e0!3m2!1sen!2snp!4v1567759769168!5m2!1sen!2snp" height="450" width="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p style="color:black;">{{$information->address}}</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p style="color:black;">{{$information->email}}</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p style="color:black;">{{$information->phone}}</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {!! session('success') !!}
                    </div>
                @endif
              <!--<div id="errormessage"></div>-->
              <form action="{{route('contactus.store')}}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                @csrf 
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <span style="color: red">{{$errors->first('name')}}</span>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <span style="color: red">{{$errors->first('email')}}</span>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <span style="color: red">{{$errors->first('subject')}}</span>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <span style="color: red">{{$errors->first('message')}}</span>
                  <div class="validation"></div>
                </div>
                <!--<div class="g-recaptcha" data-sitekey="6LdRPbsUAAAAAM9PKzDdmJWi8bWHmHuTs9eOQFae"></div>-->
      <!--<br/>-->
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
   <div class="footer-top">
       <div class="container">
            <div class="row row-eq-height justify-content-center">
               <div class="col-lg-3 col-md-4 col-xs-6" style="margin-top:40px"> 
                    <ul>
                      <li><a href="{{route('termsview')}}">Terms of service</a></li>
                      <li><a href="{{route('privacyview')}}">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                   <h4 style="margin-right:70px">Contact Us</h4>
                   <p style="color:white";>{{$information->address}}<br><strong>Phone:</strong> {{$information->phone}}<br><strong>Email:</strong> {{$information->email}}<br></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="height:50px">
      <div class="copyright">
        &copy; Copyright <strong>Bonjour</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <a>Developed by Deepika, Bivisha and Ashmin</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
