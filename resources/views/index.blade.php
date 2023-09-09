<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hope Kids Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"> 
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href=" {{asset('../css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href=" {{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href=" {{asset('../css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href=" {{asset('css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href=" {{asset('../css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
       @include('layouts.partials.messages')
      <!-- header section start -->   
      <div class="header_section">
         
      </div><nav class="navbar navbar-expand-lg navbar-light bg-light" id='home'>
            <a class="navbar-brand"><a href="#"><img  src=" {{asset('images/logo1.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#vision">Vision and Mision</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#objective">Objective</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#testimonial">Testimonial</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#contact">Contact Us</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <div class="search_icon"><a href="#"><img src=" {{asset('images/search-icon.png')}}"></a></div>
                  <button class="donate_btn" type="submit">Donate Now</button>
               </form>
            </div>
         </nav>
      <!-- header section end -->       
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="banner_taital">HOPE KIDS HOME</h1>
                           <p class="banner_text">To provide a safe and loving home environment for children from disadvantaged backgrounds. </p>
                           <div class="read_bt"><a href="#about">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Child</h1>
                        <p class="banner_text">To ensure the physical, emotional, and educational needs of the children are met.</p>
                        <div class="read_bt"><a href="#about">Read More</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">HOPE KIDS HOME</h1>
                        <p class="banner_text">To promote holistic development by offering educational opportunities, healthcare, and emotional support. </p>
                        <div class="read_bt"><a href="#about">Read More</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">Help Poor Child</h1>
                        <p class="banner_text">To empower the children with vocational training and life skills for their future success. </p>
                        <div class="read_bt"><a href="#about">Read More</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="col-sm-12">
                        <h1 class="banner_taital">HOPE KIDS HOME</h1>
                        <p class="banner_text">To advocate for the rights and well-being of orphaned and vulnerable children in the community. </p>
                        <div class="read_bt"><a href="#about">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="donation_box" id="join">
            <h4 class="donation_taital">Join For Donation</h4>
            <form action="{{url('/')}}" class="d-flex flex-column " method="POST">
               @csrf
            <div class="mail_box">
               <input type="text" required class="mail_text" placeholder="Your Name" name="name">
               <input type="email" required class="mail_text" placeholder="Email" name="email">
               <input type="text" required class="mail_text" placeholder="Phone" name="phone">
            </div>
            <div class="d-flex justify-content-center">
               <button class="btn btn-danger align-middle mx-auto " type="submit">Send</button>

            </div>
            </form>
         </div>
         <div class="fundraise_section">
            <div class="fundraise_section_main">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src=" {{asset('images/icon-1.png')}}"></div>
                        <h4 class="volunteer_text">VOLUNTEERS</h4>
                        <p class="lorem_text">To advocate for the rights and well-being of orphaned and vulnerable children in the community.</p>
                        <div class="join_bt"><a href="#join">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main active">
                        <div class="icon_1"><img src="{{asset('images/icon-2.png')}}"></div>
                        <h4 class="volunteer_text">FUNDRAISE</h4>
                        <p class="lorem_text">To advocate for the rights and well-being of orphaned and vulnerable children in the community.</p>
                        <div class="join_bt"><a href="#join">Join Now</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="box_main">
                        <div class="icon_1"><img src="{{asset('images/icon-3.png')}}"></div>
                        <h4 class="volunteer_text">DONATION</h4>
                        <p class="lorem_text">To advocate for the rights and well-being of orphaned and vulnerable children in the community.</p>
                        <div class="join_bt"><a href="#join">Join Now</a></div>
                     </div>
                  </div>
               </div>           
            </div>
         </div>
      </div>
      </div>
      <!-- banner section end -->
      
      <!-- about section start -->
      <div class="about_section layout_padding" id='about'>
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                  <h2 class="about_taital">About Hope Kids Home</h2>
                  <p class="about_text">Hope Kids Home is an orphanage located in Kerege, along Bagamoyo Road. It is registered under 
                     Charity of Hope Ministry International and is dedicated to making a positive impact on the lives of 
                     children from disadvantaged backgrounds. We provide a safe and nurturing environment where these children 
                     receive love, care, education, and support. </p>
                  <div class="readmore_bt"><a href="#vision">Read more</a></div>
               </div>
               <div class="col-sm-4">
                  <div class="about_img"><img src=" {{asset('images/about-img.png')}}"></div>
               </div>
            </div>
         </div>
      </div>

      
      <!-- about section end -->
      <!-- mission section start -->
      <div class="mission_section layout_padding" id='vision'>
       
   <div class="container mb-5" >   
            <div class="row pt-3">
               <div class="col-sm-12">
                  <h1 class="mission_taital"> Vision</h1>
                  <p class="mission_text">{{$vision->description}}</p>
               </div>
            </div>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="mission_taital">Mission</h1>
                  <p class="mission_text">{{$mission->description}} </p>
               </div>
            </div>
         </div>
            <div class="mission_section_2">
            <div class="row">
               <div class="offset-md-2"></div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="{{asset('images/img-1.png')}}" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Compassion</h4>
                           <p class="alteration_text">We believe in showing empathy, love, and understanding towards every child under our care</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#">Read More</a></div>
                              <div class="donate_bt"><a href="#join">Donate Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src=" {{asset('images/img-2.png')}}" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Integrity </h4>
                           <p class="alteration_text">We uphold honesty, transparency, and professionalism in everything we do.</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#mission">Read More</a></div>
                              <div class="donate_bt"><a href="#join">Donate Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>     
               </div>
            </div>
         </div>
         <div class="mission_section_2" id="mission">
            <div class="row">
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="{{asset('images/img-3.png')}}" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Respect</h4>
                           <p class="alteration_text">We treat every child with dignity, respect their cultural differences, and encourage inclusivity.</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#objective">Read More</a></div>
                              <div class="donate_bt"><a href="#join">Donate Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src=" {{asset('images/img-4.png')}}" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Excellence</h4>
                           <p class="alteration_text">We strive for excellence in providing high-quality care, education, and support for the children.</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#objective">Read More</a></div>
                              <div class="donate_bt"><a href="#join">Donate Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offset-md-2"></div>
            </div>
         </div>
         <div class="mission_section_2">
            <div class="row">
               <div class="offset-md-2"></div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="{{asset('images/img-5.png')}}" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Collaboration </h4>
                           <p class="alteration_text">We actively seek partnerships and collaborations with like-minded organizations, individuals, and government bodies to achieve our goals.</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#objective">Read More</a></div>
                              <div class="donate_bt"><a href="#join">Donate Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="container_main">
                     <img src="{{asset('images/img-6.png')}}" alt="Avatar" class="image">
                     <div class="overlay">
                        <div class="text">
                           <h4 class="some_text">Integrity </h4>
                           <p class="alteration_text">We uphold honesty, transparency, and professionalism in everything we do.</p>
                           <div class="btn_main">
                              <div class="donate_bt"><a href="#objective">Read More</a></div>
                              <div class="donate_bt"><a href="#join">Donate Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mission section end -->   
      <!-- news section start -->
      <div class="news_section layout_padding" id='objective'>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="news_taital">FEATURED CAUSE</h1>
                  <p class="news_text"> To advocate for the rights and well-being of orphaned and vulnerable children in the community.  </p>
               </div>
            </div>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_img"><img src="{{asset('images/news-img.png')}}"></div>
                  </div>
                  <div class="col-md-6">
                     <h1>OBJECTIVES</h1>
                     @foreach ($objs as $obj)
                  <li class="list-group-item">
                    
                      
                        {{$obj->description}}
                      
                  
                     </li>
                     @endforeach
                     
                     <div class="donate_btn_main">
                        <div class="readmore_btn"><a href="#testimonial">Read More</a></div>
                        <div class="readmore_btn_1"><a href="#join">Donate Now</a></div>
                     </div>
                  </div>
               </div>
            </div>                     
         </div>
      </div>
      <!-- news section end -->
   
      <!-- donate section start -->
      <div class="donate_section layout_padding" id='testimonial'>
         <div class="container">
            <h1 class="donate_taital">Testimonial</h1>
            <div class="donate_taital_main">
               <div id="main_slider" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                @foreach($test as $obj)
                <li data-target=".main_slider" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
                  <div class="carousel-inner">
                     @foreach ($test as $obj)
                     
                     <div class="carousel-item row {{ $loop->first ? 'active' : '' }}">
                        <div class="donate_left">
                           <div class="client_img"><img width='120px'  src="{{asset('images/'.$obj->avatar)}}"></div>
                        </div>
                        <div class="donate_right">
                           <h3 class="client_name_text">{{$obj->name}}</h3>
                           <p class="dummy_text">{{$obj->description}}</p>
                        </div>
                     </div>
                      @endforeach

                  </div>

                  <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
                  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- donate section end -->        
      <!-- footer section start -->
      <div class="footer_section layout_padding" id='contact'>
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <div class="footer_logo"><img src="{{asset('images/logo1.png')}}"></div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NAVIGATION</h4>
                  <div class="footer_menu_main">
                    
                     <div class="footer_menu_right">
                        <div class="footer_menu">
                           <ul>
                              <li><a href="#home">Home</a></li>
                              <li><a href="#about">About</a></li>
                              <li><a href="#testimonial">Testimonial</a></li>
                              <li><a href="#vision">Vision and Mision</a></li>
                              <li><a href="#objective">Objective</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">NEWS</h4>
                  <p class="footer_text">By supporting Hope Kids Home, you are making a difference in 
                     the lives of these children and helping to break the cycle of poverty. Together, 
                     we can create hope and change lives for a brighter tomorrow.</p>
              
               </div>
               <div class="col-sm-6 col-md-6 col-lg-3">
                  <h4 class="footer_taital">address</h4>
                  <p class="footer_text">{{$contact->Address}}</p>
                  <p class="footer_text">{{$contact->phone}}</p>
                  <p class="footer_text">{{$contact->email}}</p>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-3">
                     <div class="social_icon">
                        <ul>
                           <li><a href="{{$contact->facebook}}"><img src="{{asset('images/fb-icon.png')}}"></a></li>
                           <li><a href="{{$contact->twitter}}"><img src="{{asset('images/twitter-icon.png')}}"></a></li>
                           <li><a href="{{$contact->linkedin}}"><img src="{{asset('images/linkedin-icon.png')}}"></a></li>
                           <li><a href="{{$contact->instagram}}"><img src="{{asset('images/instagram-icon.png')}}"></a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- <div class="col-sm-8 col-md-8 col-lg-9">
                     <input type="text" class="address_text" placeholder="Enter your Enail" name="text">
                     <button type="button" class="get_bt">SUBSCRIBE</button>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js ')}}"></script>
      <script src="{{asset('js/plugin.js ')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js ')}}"></script>
      <!-- javascript --> 
      <script src="{{asset('js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>

