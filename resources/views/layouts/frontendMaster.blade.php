<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>habibstor</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"   ></script>
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="css/blog.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css"/>




<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<link rel="stylesheet" href="css/addcard.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('frontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container-fulied">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="#"><i class="fas fa-shopping-basket"></i>E-Store<i></i> </a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center" >
                    <div class="menu-overlay">
                    </div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('products')}}">Shop</a>
                            </li>
            
                            <li>
                                <a href="{{route('blogs')}}">Blog</a>
      
                             </li> 
                             @if(Session::has('client'))
                             <li>
                                <a href="{{route('logout.user')}}">Logout</a>
      
                             </li> 
                             @else
                             <li>
                                <a href="{{route('login.user')}}">Login</a>
      
                             </li> 
                             @endif
                             <li>
                                <a href="{{route('message.create')}}">Contact</a>
      
                             </li> 
                        </ul> 
                   </nav>

                </div>
                <div class="header-item item-right" >
                    <input type="search" name="" id="">
                    <button id="btn-header-srh"><i class="fas fa-search"></i></button>
                  
                    <a href="#"><i class="far fa-heart"></i></a>
                    <a href="{{route('carts')}}"><i class="fas fa-shopping-cart"></i>{{Session::has('cart') ? Session::get('cart')->totalQty : 0}}</a>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>         
             </div>
           </div>  
</header>               
                                       


 @yield('content')
 
          
<div class="section10">

    <footer>
        <div class="partone">
          <h2>social media:</h2>
          <div class="footermediah">
              <ul><li>
                  <a href=""><i class="fab fa-facebook-messenger" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fab fa-whatsapp" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fas fa-envelope" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fab fa-twitter" ></i></a>
              </li>
              <li>
                  <a href=""><i class="fab fa-telegram" ></i></a>
              </li></ul>
          </div>
        </div>
        <div class="parttwo">

          <div class="container">
              <div class="row">
                <div class="col-sm">
                  <h3>E-store</h3>
                </div>
                <div class="col-sm">
                  <h4>Element</h4>
                  <div class="footerelement">
                      <ul>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                       <li>
                           <a href="">fession</a>
                       </li>
                      </ul>
                  </div>
                  
                </div>
                <div class="col-sm">
                 <h4>Information</h4>
                 <div class="footerinfo">
                  <ul>
                   <li>
                       <a href="">Contact us</a>
                   </li>
                   <li>
                       <a href="">Blog</a>
                   </li>
                   <li>
                       <a href="">About us</a>
                   </li>
                   <li>
                       <a href="">Social contact</a>
                   </li>
                   <li>
                       <a href="">fession</a>
                   </li>
                  </ul>
              </div>
                </div>
                <div class="col-sm">
                 <h4>Shop Cetagory</h4>
                 <div class="footercetagory">
                     <ul>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                      <li>
                          <a href="">fession</a>
                      </li>
                     </ul>
                 </div>
                </div>
              </div>
            </div>

      </div>
      <div class="partend">
           <p>
              Copyright ?? 2021 e-commerce. All rights reserved.
           </p>
      </div>
  </footer>
</div>

      <!-- footer -->
  
      <!-- vendors -->
     
      <script src="assets/vendors/highlight.js"></script>
      <script src="assets/js/app.js"></script>
      
      
   
      <script src="{{(asset(''))}}/js/script.js"></script>
      <script src="js/owl.js"></script>
      <script src="js/code.js"></script>
      <script src="js/slick.js"></script>
      <script src="js/slider.js"></script>
       <script src="js/codeslick.js"></script>
       <script src="js/navbar.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
