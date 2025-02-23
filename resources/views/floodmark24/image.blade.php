<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>CM Flood Mark 2024 : เครื่องหมายระดับน้ำท่วมเมืองเชียงใหม่ ปี 2567 </title>

    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('fonts/feather/feather.css')}}"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/form/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/icofont.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/buttons.datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/style1.css')}}">

    <style type="text/css">
      .text-h{
        padding-left:10px;
        font-size: 18px;
        color:#3d98ff; 
        font-weight: bolder;
      }
      .text-h2{
        padding-top:10px;
        font-size: 20px;
        color:#3d98ff; 
        font-weight: bolder;
      }
      .text{
        margin-top:15px;
        padding:10px;
        font-size: 20px;
        width: 75%;
      }
      td{
        padding-left:10px;
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
                      <div class="row" style="margin-top:20px" >
                        <div class="col-md-10 mx-auto">
                          <div class="card table-card">
                            <div class="card-header ">
                              <div class="row"  >
                                 <div class="container mt-2">
                                    <br>
                                    <center>
                                      <h2>เครื่องหมายระดับน้ำท่วมเขตตัวเมืองเชียงใหม่ ปี 2567 <br>(CM Flood Mark 2024)</h2><hr><br>
                                      <h3>รหัส : {{$data[0]['code']}} </h3>
                                    </center>
                                    <table border=1 align="center" class="text">
                                      <!-- <tr>
                                        <td colspan="2" align="center"><h3>รหัส : {{$data[0]['code']}} </h3</td>                                        
                                      </tr> -->
                                      <tr>
                                        <td colspan="2">สถานที่ : {{$data[0]['place_detail']}}</td>
                                      </tr>
                                      <tr>
                                        <td width="70%">ตำแหน่งบริเวณน้ำท่วม : {{$data[0]['affected_area']}}</td>
                                        <td width="30%" rowspan="4" align="center">
                                          ระดับน้ำท่วม (ซม.)
                                           <h1>{{$data[0]['water_level']}}</h1>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>โครงสร้างที่ทำเครื่องหมาย : {{$data[0]['tool']}}</td>
                                      </tr>
                                      <tr>
                                        <td>วันที่สำรวจ : {{$data[0]['date_survey']}} </td>
                                      </tr>
                                      <tr>
                                        <td>หมายเหตุ : {{$data[0]['other_detail']}} </td>
                                      </tr>
                                    </table>
                                    <br>

                                    <center>
                                    <?php 
                                    if(count($image)!=0){
                                    for($i = 0;$i < count($image);$i++){  ?>
                                      <img src="{{ asset($image[$i]['image_path']) }}" width="45%">
                                    <?php } } else{?> 

                                      <br><h4> ---- ไม่มีรูปภาพประกอบ ------ </h4><br>
                                    <?php }?>
                                    </center>
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
    

</body>
</html>
