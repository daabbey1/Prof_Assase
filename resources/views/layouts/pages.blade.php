<!DOCTYPE html>
<html>
<head>
 <title> @yield('title')</title>
  <meta charset="utf-8">
<!--   <link href="{{url('/'). '/style.css'}}"> -->
{{-- <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{url('/').'/css/font.css'}}">
  <link rel="stylesheet" href="{{url('/').'/bootstrap-4/css/bootstrap.min.css'}}">
  <script src="{{url('/'). '/bootstrap-4/js/jquery.js'}}"></script>
  <script src="{{url('/'). '/bootstrap-4/js/bootstrap.min.js'}}"></script>

</head>
 <body>
    <div class="container-fluid">
      <div class="row top">
        <div class="container-fluid top-content">
          <div class="row" style="padding-top: 10px">
            <div class="col-md-4 social">
              <img src="{{url('/').'/images/fbweb.png'}}" width="20px" height="20px">
              <img src="{{url('/').'/images/ig-web.png'}}" width="20px" height="20px">
              <img src="{{url('/').'/images/twitter-web.png'}}" width="20px" height="20px">
            </div>
            <div class="col-md-4 name">
              <p>Prof. Assasie</p>
            </div>
            <div class="col-md-4 name">
              <form>
                <div>
                  <center><input class="form-control search-input" type="text" name="" placeholder="SEARCH"></center>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="padding: 0 20px;">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                  <div class="navbar-nav">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    
                    <a href="/projects" class="nav-item nav-link">Projects</a>
                    <a href="/publications" class="nav-item nav-link">Publications</a>
                    <a href="/contacts" class="nav-item nav-link">Contact</a>
                  </div>
        
                 </div>
      
              </nav>
            </div>
          </div>

          
          
        </div>
       
      </div>
      <div class="row">
        <div class="container-fluid top-content">
          @yield('body')
        </div>
      </div>
    </div>


<div class="container-fluid footer">
   <div class="container">
      <hr style="background-color: white; margin-top: 50px;">

      <div class="row footer-items">
        <div class="col-md-4 col-sm-4 col-xs-6">
          <h5>Navigation</h5>
          <div class="navigation-links">
            <div class="single-nav-link"><a href="/">Home</a></div>
            <div class="single-nav-link"><a href="#">About</a></div>
            <div class="single-nav-link"><a href="/projects">Projects</a></div>
            <div class="single-nav-link"><a href="/publications">Publications</a></div>
            <div class="single-nav-link"><a href="/contacts">Contact</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <h5>Useful Links</h5>
          <div class="navigation-links">
            <div class="single-nav-link"><a href="#">Gallery</a></div>
            <div class="single-nav-link"><a href="#">Events</a></div>
            <div class="single-nav-link"> <a href="#">Grants</a></div>
          </div>

        </div>
        <div class="col-md-4">
          <h5 style="text-align: right;"></h5>
          <div class="navigation-links" style="text-align: right;">
            <p> </p>
          </div>

          <div style="text-align: right;">
            <p>Stay connected</p>
          </div>
          <div class="social">
          
            <a href="" style="margin-right: -30px"><img src="{{url('/').'/IMAGES/facebook.png'}}" width="100px" height="100px"></a>
            <a href=""><img src="{{url('/').'/IMAGES/google.png'}}" width="60px" height="60px"></a>
            <a href=""><img src="{{url('/').'/IMAGES/ig.png'}}" width="60px" height="60px"></a>
            <a href=""><img src="{{url('/').'/IMAGES/twitter.png'}}" width="60px" height="60px"></a>
            
          </div>

          <div style="text-align: right;"> 
            <p>Phone:  055 000 0000</p>
          </div>
        </div>
      </div>

      <hr style="background-color: white; margin-left: 10%; margin-right: 10%; margin-bottom: 50px">

      <div class="row copy">
        <span>Copyright &copy profassase.com</span>

        <div class="ml-auto bottom-nav">
          <a href="#">About</a>
          <a href="#">Privacy</a>
          <a href="#">FAQ</a>
          <a href="/contacts">Contact</a>
        </div>
      </div>
    </div>


</div>
     
   
  </body>

</html>















   <!-- navbar -->
    <!-- <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="padding: 20px; background-color: #028977">
      
    </nav> -->