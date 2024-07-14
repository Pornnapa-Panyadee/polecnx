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
<style>
  .cardmap {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    height: 400px;
  }

  .cardmap:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .text{
    font-size: 14px;
    margin: 5px;
    padding:10px;
  }
  .text2{
        font-size: 12px;
        margin: 5px;
        padding:5px;
        text-indent: 2em;
        text-align:justify;
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
                             
                                <h4>แผนที่เสี่ยงภัยน้ำท่วม (Flood Hazard Map)</h4><hr>
                                <div class="row">
                                  <div class="col-md-12 col-xl-3">
                                    <br>
                                    สร้างแผนที่เสี่ยงภัยน้ำท่วมของเหตุการณ์น้ำท่วม ใหญ่ที่ผ่านมาในอดีตและเหตุการณ์โดยการจำลองขนาดน้ำท่วมเป้าหมาย ซึ่งเป็นแผนที่แสดงสภาพและข้อมูลการท่วม ได้แก่พื้นที่ที่คาดการณ์ว่าน้ำจะท่วม ความลึกของน้ำที่ท่วม รวมทั้งข้อมูลสำหรับการอพยพ เช่น จุดอพยพ เส้นทางการอพยพ จุดอันตรายในเส้นทางอพยพ เป็นต้น ข้อมูลเหล่านี้จะแสดงในรูปแบบของรูปภาพที่เข้าใจง่าย โดยมีเป้าหมายหลักเพื่อให้สามารถอพยพประชาชนไปอยู่ ในที่ปลอดภัยได้อย่างเหมาะสม ทันเวลา ในกรณีที่เกิด เหตุการณ์น้ำท่วมขึ้น
                                  </div>
                                  <div class="col-md-12 col-xl-9">
                                    <center><img  src="{{ asset('images/flood/flood.jpg') }}" width=100% >
                                  </div>
                                  
                                </div>
                                
                                <div class="row" style="margin-top:20px">
                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่ระดับความลึกของน้ำในแต่ละพื้นที่</p>
                                      <p class="text2">เป็นการพยากรณ์และคาดการณ์ความสูงของระดับน้ำในพื้นที่น้ำท่วมแต่ละบริเวณโดยใช้ข้อมูลที่ได้จากการเก็บข้อมูลและวัดค่าระดับคราบน้ำท่วมที่เกิดขึ้นในพื้นที่แล้วใช้เทคนิคการประมาณค่าในช่วงโดยการใช้ข้อมูลที่ได้จากการเก็บจุดตัวอย่างกระจายไปตามพื้นที่และทำนายค่าที่เป็นไปได้ให้กับตำแหน่งที่ไม่ได้เก็บค่า แล้วจึงนำมาจัดทำแผนที่แสดงความลึกของระดับน้ำในพื้นที่น้ำท่วม โดยการแสดงความลึกในแต่ละพื้นที่ด้วยการใช้สีตามระดับความลึกของระดับน้ำท่วม ซึ่งในบริเวณที่มีความลึกมากจะแทนด้วยสีเข้ม </p>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่เส้นทางการอพยพจากพื้นที่เสี่ยงภัยน้ำท่วม</p>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงจุดที่ตั้งกองทราย</p>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงพื้นที่เสี่ยงภัย 7 ระดับ</p>
                                    </div>

                                  </div>
                                </div>

                                <div class="row" style="margin-top:20px">
                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่ภาพภ่ายทางอากาศ แสดงพื้นที่เสี่ยงภัย 7 ระดับ</p>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงพื้นที่เสี่ยงภัย 7 ระดับในรูปแบบ 3 มิติ</p>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงขอบเขตน้ำท่วมปี 2554</p>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แอนิเมชั่นการขึ้นลงของน้ำในพื้นที่เสี่ยงภัยน้ำท่วม</p>
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
    
    