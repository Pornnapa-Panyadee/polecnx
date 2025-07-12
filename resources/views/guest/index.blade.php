<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>CM : เตรียมรับมือน้ำท่วม </title>

    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/icofont.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/style1.css')}}">


    <style type="text/css">
      .text-h{
        padding-left:10px;
        font-size: 18px;
        color:#3d98ff; 
        font-weight: bolder;
      }
      .text-h2{
        padding-left:10px;
        font-size: 14px;
        color:#3d98ff; 
      }
      .text{
        font-size: 14px;
        margin: 5px;
        padding:10px;
        text-indent: 5em;
        text-align:justify;
      }
      .text2{
        font-size: 14px;
        margin: 5px;
        padding:10px;
        /* text-indent: 5em; */
        text-align:justify;
      }
      .cardbox {
        background-color: #1A76D1 ;
        padding:20px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px;
        /* height: 350px; */
      }
    </style>


  </head>

  <body class="horizontal-icon-fixed" >
    @yield('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded" >
      <div class="pcoded-overlay-box"></div>
      
      <div class="pcoded-container navbar-wrapper">
        @include('menu.header')
        @include('menu.slidebar')

        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            
            <!-- Map -->
            <div class="pcoded-content">
              <!-- <div class="card"><h3></h3></div> -->
              <div class="pcoded-inner-content">
                <div class="main-body" style="margin-top:20px">
                  <div class="page-wrapper">
                    <div class="page-body">
                      <div class="row" style="margin-top:20px">
                        <div class="col-md-12">
                          <div class="card table-card">
                            <div class="card-header" style="margin:20px">
                             
                                  <h4>ระบบเตือนภัยน้ำท่วมเขตเมือง จังหวัดเชียงใหม่</h4>
                                  <h4> <b><font style="color:#3d98ff; font-weight: bolder;"> CMFlood </font></b> : Urban Flood Warning Systems in Chiang Mai</h4>
                                <hr>
                                <div class="row">
                                  <div class="col-md-12 col-xl-12">
                                    <center><img  src="{{ asset('images/flood/city.jpg') }}" width=100% >
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 col-xl-4">
                                    <br>
                                    <div class="cardbox">
                                      <div class="Feautes">
                                            <a href="{{ asset('/floodmap') }}" target="_blank" >
                                              <img  src="{{ asset('images/banner/hazardmap.png') }}" width=100% >
                                          </a>
                                     </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 col-xl-4">
                                    <br>
                                    <div class="cardbox">
                                      <div class="Feautes">
                                          <!-- <div class="single-features"> -->
                                            <a href="{{ asset('/pole') }}" target="_blank" >
                                              <img  src="{{ asset('images/banner/pole.png') }}" width=100% >
                                            </a>
                                     </div>
                                    </div>
                                  </div>
                                 
                                  <div class="col-md-12 col-xl-4">
                                    <br>
                                    <div class="cardbox">
                                      <div class="Feautes">
                                        <a href="{{ asset('/flood24') }}" target="_blank" >
                                                 <img  src="{{ asset('images/banner/floodmark.png') }}" width=100% >
                                               </div>
                                            </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                
                                               
                            </div>
                          </div>
                        </div>
                      </div>
                     
                     
                    </div>
                  </div>

                  
                </div>
              </div>

             
            </div>  
          </div>
            @include('menu.foot')
          </div>
          
        </div>

      </div>
    </div>
    
    
    <script src="{{ asset('js/form/jquery.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/form/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-i18next.min.js')}}" ></script>
    <script src="{{ asset('js/form/pcoded.min.js')}}" ></script>
    <script src="{{ asset('js/form/menu-hori-fixed.js')}}" ></script>
    <script src="{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js')}}" ></script>
    <script src="{{ asset('js/form/script.js')}}"></script>
    <script async  src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

</html>
    
    