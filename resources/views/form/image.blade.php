<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>CM : หลักระดับน้ำท่วม </title>

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

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        #map {
            height: 500px;
            width: 100%;
            border: 2px solid #4f4d4d; /* เพิ่มเส้นขอบขนาด 2px สีดำ */
            margin-top: 20px; /* เพิ่มระยะห่างด้านบน */
            margin-bottom: 20px; /* เพิ่มระยะห่างด้านล่าง */
            border-radius: 10px; /* เพิ่มมุมโค้งให้ขอบแผนที่ */
        }
    </style>
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
        font-size: 18px;
        width: 100%;
      }
    </style>
</head>
<body class="horizontal-icon-fixed">
  @yield('content')
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded" >
      <div class="pcoded-overlay-box"></div>
      
      <div class="pcoded-container navbar-wrapper">
        <!-- @include('menu.header')
        @include('menu.slidebar') -->
        @include('menu.header_admin')

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
                              <div class="row" style="text-align: center;" >
                                 <div class="container mt-2">
                                    <br><br>
                                    <h1>หมุดน้ำท่วม 2567 (Flood Mark 2024)</h1><br>
                                    <h3>รหัส : {{$data[0]['code']}} </h3><br>
                                    <h3>สถานที่ : {{$data[0]['place_detail']}}  </h3><br>
                                    <h3>ระดับน้ำท่วม : {{$data[0]['water_level']}} ซม. | โครงสร้างที่ทำเครื่องหมาย : : {{$data[0]['tool']}} </h3><br>

                                    <?php 
                                    if(count($image)!=0){
                                    for($i = 0;$i < count($image);$i++){  ?>
                                      <center><img src="{{ asset($image[$i]['image_path']) }}" width="65%"></center> <br>
                                    <?php } } else{?> 

                                      <br><h4> ---- ไม่มีรูปภาพประกอบ ------ </h4><br>
                                    <?php }?>
                                    
                                    <hr>
                                </div>   
                                                 
                            </div>
                            <div class="row" style="text-align: center;">
                                 <div class="col-md-8 mx-auto">  
                                  <table width="100%" style="text-align: center;">
                                    <tr>
                                      <td width="45%"><a href="{{ url('/flood24/admin/form')}}"><button class="btn btn-primary text">กรอกข้อมูลหมุดน้ำท่วมเพิ่ม</button></a></td>
                                      <td width="10%">
                                      <td width="45%"><a href="{{ url('/flood24/admin/table')}}"><button class="btn btn-success text">ตารางสรุปข้อมูล</button></a><br></td>
                                    </tr>
                                  </table>   
                                    <hr>
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
