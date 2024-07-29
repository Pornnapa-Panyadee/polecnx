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
    height: 370px;
  }

  .cardmap:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
  .cont {
    padding: 2px 10px;
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
  .text3{
    font-size: 10px;
    /* margin: 5px; */
    padding:5px;
  }
  .text4{
    font-size: 9px;
    margin:10px;
    margin-top:-20px;
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
                                  <!-- 1 -->
                                  <div class="col-md-12 col-xl-6">
                                    <div class="cardmap">
                                      <p class="text">แผนที่ระดับความลึกของน้ำในแต่ละพื้นที่</p>
                                      <p class="text2">เป็นการพยากรณ์และคาดการณ์ความสูงของระดับน้ำในพื้นที่น้ำท่วมแต่ละบริเวณโดยใช้ข้อมูลที่ได้จากการเก็บข้อมูลและวัดค่าระดับคราบน้ำท่วมที่เกิดขึ้นในพื้นที่แล้วใช้เทคนิคการประมาณค่าในช่วงโดยการใช้ข้อมูลที่ได้จากการเก็บจุดตัวอย่างกระจายไปตามพื้นที่และทำนายค่าที่เป็นไปได้ให้กับตำแหน่งที่ไม่ได้เก็บค่า แล้วจึงนำมาจัดทำแผนที่แสดงความลึกของระดับน้ำในพื้นที่น้ำท่วม โดยการแสดงความลึกในแต่ละพื้นที่ด้วยการใช้สีตามระดับความลึกของระดับน้ำท่วม ซึ่งในบริเวณที่มีความลึกมากจะแทนด้วยสีเข้ม </p>
                                      <div class="row" style="margin-top:20px"> 
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/1_crossection/Interpolate_map_Crosssection.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/1_crossection/Interpolate_map_Crosssection.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่ภาพตัดขวางความลึกของน้ำท่วม 
                                             <br> <a class="text3" href="{{ asset('images/flood/floodmap/1_crossection/Interpolate_map_Crosssection.zip') }}" > Download : 9 MB/.zip </a>
                                            </p>  
                                          </center>
                                        </div>

                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a href="{{ asset('images/flood/floodmap/2_Interpolate_Hillshade/Interpolate_map_Hillshade.jpg') }}" target="_blank" > 
                                              <img  src="{{ asset('images/flood/floodmap/2_Interpolate_Hillshade/Interpolate_map_Hillshade.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                              <p class="text3">แผนที่ประมาณการระดับความลึกของน้ำท่วม  
                                             <br> <a class="text3" href="{{ asset('images/flood/floodmap/2_Interpolate_Hillshade/Interpolate_map_Hillshade.zip') }}"> Download : 6.3 MB/.zip </a>
                                            </p> 
                                          </center>
                                        </div>

                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a href="{{ asset('images/flood/floodmap/3_interpolate_ortho/Interpolate_map_ortho.jpg') }}" target="_blank" > 
                                              <img  src="{{ asset('images/flood/floodmap/3_interpolate_ortho/Interpolate_map_ortho.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่ภาพถ่ายทางอากาศซ้อนทับประมาณการระดับความลึกของน้ำท่วม
                                              <br> <a class="text3" href="{{ asset('images/flood/floodmap/3_interpolate_ortho/Interpolate_map_ortho.jpg') }}" > Download : 6.2 MB/.zip </a>
                                            </p> 
                                          </center>
                                        </div>

                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a href="{{ asset('images/flood/floodmap/4_interpolate/Interpolate_map.jpg') }}" target="_blank" > 
                                              <img  src="{{ asset('images/flood/floodmap/4_interpolate/Interpolate_map.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่ฐานซ้อนทับประมาณการระดับความลึกของน้ำท่วม
                                              <br> <a class="text3" href="{{ asset('images/flood/floodmap/4_interpolate/Interpolate_map.zip') }}" > Download : 4.2 MB/.zip </a>
                                            </p> 
                                          </center>
                                        </div>

                                       
                                      </div>
                                    </div>

                                  </div>

                                  <!-- 2 -->
                                  <div class="col-md-12 col-xl-6">
                                    <div class="cardmap">
                                      <p class="text">แผนที่เส้นทางการอพยพจากพื้นที่เสี่ยงภัยน้ำท่วม</p>
                                      <p class="text2">การออกแบบแผนที่มีดำเนินการวิเคราะห์หาเส้นทางที่เหมาะสมที่สุดในการกำหนดเส้นทางที่จะใช้ในการอพยพกรณีเกิดภัยพิบัติน้ำท่วมในเขตเทศบาลนครเชียงใหม่นั้นได้ทำการแบ่งพื้นที่ที่ได้รับผลจากน้ำที่ไหลเข้าท่วมออกเป็นทั้งสิ้น 7 โซนหลักๆ ตามระดับความสูงของน้ำ ณ จุด P.1 สะพานนวรัตน์ ทำให้สามารถกำหนดลำดับการท่วมของน้ำเข้าสู่พื้นที่ได้ แล้ววิธี Network Analysis โดยใช้ข้อมูลพื้นฐานต่าง ๆ เช่น พื้นที่น้ำท่วม เส้นทางการสัญจร สิ่งกีดขวางต่าง ๆ มาทำการวิเคราะห์พื้นที่เหมาะสมต่อการตั้งศูนย์อพยพ เส้นทางอพยพ รวมทั้งการแสดงจุดอันตรายในเส้นทางการอพยพ ช่องทางการสื่อสาร เกณฑ์การอพยพ สถานพยาบาลต่างๆ ในพื้นที่ และยังประกอบไปด้วยข้อมูลทิศทางการเดินรถ จำนวนช่องทาง ประเภทหรือชนิดของถนน ความเร็วที่กำหนด รวมไปถึงแยกไฟแดงและจุดห้ามกลับรถ เพื่อใช้เป็นข้อกำหนดหรือเงื่อนไขในการสั่งให้โปรแกรมประมวลผลของเส้นทางที่เหมาะสมที่สุดในการกำหนดเส้นทางที่จะใช้ในการอพยพกรณีเกิดภัยพิบัติน้ำท่วมในเขตเทศบาลนครเชียงใหม่นั้น </p>
                                      <div class="row" style="margin-top:20px"> 
                                        <div class="col-md-4 col-xl-4">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/5_Final_Evaculate/Final_Evaculate_map.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/5_Final_Evaculate/Final_Evaculate_map.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่เส้นทางการอพยพจากพื้นที่เสี่ยงภัยน้ำท่วม
                                             <br> <a class="text3" href="{{ asset('images/flood/floodmap/5_Final_Evaculate/Final_Evaculate_map.zip') }}" > Download : 3.4 MB/.zip </a>
                                            </p>  
                                          </center>
                                        </div>

                                        <div class="col-md-4 col-xl-4">
                                          <center>
                                            <a href="{{ asset('images/flood/floodmap/6_Final_Ortho_Evaculate/Final_Ortho_Evaculate.jpg') }}" target="_blank" > 
                                              <img  src="{{ asset('images/flood/floodmap/6_Final_Ortho_Evaculate/Final_Ortho_Evaculate.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                              <p class="text3">แผนที่เส้นทางการอพยพจากพื้นที่เสี่ยงภัยน้ำท่วม
                                             <br> <a class="text3" href="{{ asset('images/flood/floodmap/6_Final_Ortho_Evaculate/Final_Ortho_Evaculate.zip') }}"> Download : 7 MB/.zip </a>
                                            </p> 
                                          </center>
                                        </div>

                                        <div class="col-md-4 col-xl-4">
                                          <center>
                                            <a href="{{ asset('images/flood/floodmap/7_Final_Depth_Evacuate/Final_Depth_Evacuate.jpg') }}" target="_blank" > 
                                              <img  src="{{ asset('images/flood/floodmap/7_Final_Depth_Evacuate/Final_Depth_Evacuate.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่เส้นทางการอพยพจากพื้นที่เสี่ยงภัยน้ำท่วม
                                              <br> <a class="text3" href="{{ asset('images/flood/floodmap/7_Final_Depth_Evacuate/Final_Depth_Evacuate.jpg') }}" > Download : 6.5 MB/.zip </a>
                                            </p> 
                                          </center>
                                        </div>

                                       
                                      </div>
                                    </div>

                                  </div>
                                </div>
                                <!-- row2 -->
                                <div class="row" style="margin-top:20px">
                                  <div class="col-md-12 col-xl-6">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงพื้นที่เสี่ยงภัย 7 ระดับ</p>
                                      <p class="text2">แผนที่เสี่ยงภัยน้ำท่วมแยกตามระดับความรุนแรง 7 ระดับ ข้อมูลทีใช้ในการวิเคราะห์และจัดทำแผนที่ คือ ข้อมูลขอบเขตพื้นที่น้ำท่วม 7 ระดับ, เส้นทางน้ำ, ข้อมูลหลักระดับน้ำท่วม, ข้อมูลภาพถ่ายทางอากาศ และข้อมูลพื้นผิวดิน </p>
                                      <div class="row" > 
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area1.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area1.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 1</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area2.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area2.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 2</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area3.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area3.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 3</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area4.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area4.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 4</p>  
                                          </center>
                                        </div>
                                      
                                      </div>
                                      <div class="row" style="margin-top:-20px"> 
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area5.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area5.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 5</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area6.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area6.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 6</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area7.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/9_riskmap/MXD_TypeA_area7.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 7</p>  
                                          </center>
                                        </div>
                                      
                                      </div>
                                      <p class="text4">หมายเหตุ: ตั้งแต่ พ.ศ. 2565 ได้มีการปรับปรุงสภาพลำน้ำปิงและสร้างคันดินข้างแม่น้ำปิงในเขตตัวเมือง จนสามารถป้องกันระดับน้ำท่วมได้มากขึ้น โดยน้ำจะเริ่มล้นตลิ่งเข้าท่วมพื้นที่โซนต่างๆเมื่อค่าระดับน้ำที่สถานีวัดน้ำ P.1 สะพานนวรัฐ มีค่ามากกว่า 4.20 เมตร</p>
                                      
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-6">
                                    <div class="cardmap">
                                      <p class="text">แผนที่ภาพภ่ายทางอากาศ แสดงพื้นที่เสี่ยงภัย 7 ระดับ</p>
                                      <p class="text2">แผนที่เสี่ยงภัยน้ำท่วมแยกตามระดับความรุนแรง 7 ระดับนั้น ข้อมูลหลักที่นำมาใช้ในการวิเคราะห์และจัดทำแผนที่ คือ ข้อมูลขอบเขตพื้นที่น้ำท่วม 7 ระดับ และมีข้อมูลต่างๆ ที่ใช้ในการประกอบแผนที่ ได้แก่ เส้นทางน้ำ, หมุดระดับน้ำท่วม และข้อมูลภาพถ่ายทางอากาศ</p>
                                      <div class="row" > 
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area1.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area1.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 1</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area2.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area2.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 2</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area3.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area3.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 3</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area4.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area4.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 4</p>  
                                          </center>
                                        </div>
                                      
                                      </div>
                                      <div class="row" style="margin-top:-20px"> 
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area5.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area5.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 5</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area6.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area6.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 6</p>  
                                          </center>
                                        </div>
                                        <div class="col-md-3 col-xl-3">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area7.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/10_risk_satellite/MXD_TypeA_ortho_area7.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่พื้นที่น้ำท่วมลำดับที่ 7</p>  
                                          </center>
                                        </div>
                                      
                                      </div>
                                      <p class="text4">หมายเหตุ: ตั้งแต่ พ.ศ. 2565 ได้มีการปรับปรุงสภาพลำน้ำปิงและสร้างคันดินข้างแม่น้ำปิงในเขตตัวเมือง จนสามารถป้องกันระดับน้ำท่วมได้มากขึ้น โดยน้ำจะเริ่มล้นตลิ่งเข้าท่วมพื้นที่โซนต่างๆเมื่อค่าระดับน้ำที่สถานีวัดน้ำ P.1 สะพานนวรัฐ มีค่ามากกว่า 4.20 เมตร</p>
                                    </div>
                                    
                                  </div>
                                  
                                </div>
                                
                                <!-- row3 -->
                                <div class="row" style="margin-top:20px">
                                  

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงขอบเขตน้ำท่วมปี 2554</p>
                                      <p class="text2">มีการออกแบบแผนที่โดยใช้ข้อมูลขอบเขตน้ำท่วมปี พ.ศ. 2554 ที่ได้ทำการปรับปรุงข้อมูลแล้ว มาวิเคราะห์ร่วมกับข้อมูลขอบเขตพื้นที่ท่วม 7 ระดับ เพื่อเปรียบเทียบและแสดงให้เห็นขอบเขตพื้นที่ที่น้ำท่วม </p>
                                      <div class="row" style="margin-top:20px"> 
                                        <div class="col-md-12 col-xl-12">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/12_Type_A_MAP/Type_A_MAP.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/12_Type_A_MAP/Type_A_MAP.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">แผนที่แสดงขอบเขตน้ำท่วมปี 2554
                                             <br> <a class="text3" href="{{ asset('images/flood/floodmap/12_Type_A_MAP/Type_A_MAP.zip') }}" > Download : 4.3 MB/.zip </a>
                                            </p>  
                                          </center>
                                        </div>
                                      </div>
                                      <p class="text4">หมายเหตุ: ตั้งแต่ พ.ศ. 2565 ได้มีการปรับปรุงสภาพลำน้ำปิงและสร้างคันดินข้างแม่น้ำปิงในเขตตัวเมือง จนสามารถป้องกันระดับน้ำท่วมได้มากขึ้น โดยน้ำจะเริ่มล้นตลิ่งเข้าท่วมพื้นที่โซนต่างๆเมื่อค่าระดับน้ำที่สถานีวัดน้ำ P.1 สะพานนวรัฐ มีค่ามากกว่า 4.20 เมตร</p>
                                    </div>
                                  </div>

                                  <div class="col-md-12 col-xl-3">
                                    <div class="cardmap">
                                      <p class="text">แผนที่แสดงพื้นที่เสี่ยงภัย 7 ระดับในรูปแบบ 3 มิติ</p>
                                      <p class="text2">ข้อมูลภาพแสดงการขึ้นของน้ำท่วมตามลำดับทั้ง 7 พื้นที่ในรูปแบบ 3 มิติ โดยแสดงถึงพื้นที่และชุมชนที่จะได้รับผลกระทบจากน้ำในแต่ละลำดับ</p>
                                      <div class="row" style="margin-top:20px"> 
                                        <div class="col-md-12 col-xl-12">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/11_3D/Sequence_3D.jpg') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/11_3D/Sequence_3D.jpg') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">พื้นที่เสี่ยงภัย 7 ระดับในรูปแบบ 3 มิติ</p>  
                                          </center>
                                        </div>
                                      </div>
                                    </div>

                                  </div>

                                  <div class="col-md-12 col-xl-6">
                                    <div class="cardmap">
                                      <p class="text">แอนิเมชั่นการขึ้นลงของน้ำในพื้นที่เสี่ยงภัยน้ำท่วม</p>
                                      <p class="text2">ภาพแอนิเมชั่นแสดงการเพิ่มขึ้นของน้ำท่วมในพื้นที่เสี่ยงภัยทั้ง 7 ลำดับ โดยเป็นการประมาณการจากความสูงของระดับน้ำที่สถานีวัดน้ำ P.1 เชิงสะพานนวรัฐ และภาพแอนิเมชั่นการลดลงของน้ำโดยโดยใช้ข้อมูลที่ได้จากการสำรวจระดับน้ำท่วมในพื้นที่เมืองเชียงใหม่เมื่อปี 2554</p>
                                      <div class="row" style="margin-top:20px"> 
                                        <div class="col-md-4 col-xl-4">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/13_flooding/Type1_rez.gif') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/13_flooding/Type1_rez.gif') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">การเพิ่มขึ้นและลดลงของน้ำในพื้นที่เสี่ยงภัยน้ำท่วม</p>  
                                          </center>
                                        </div>

                                        <div class="col-md-4 col-xl-4">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/13_flooding/Type2_rez.gif') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/13_flooding/Type2_rez.gif') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">การลดลงของน้ำในพื้นที่เสี่ยงภัยน้ำท่วม</p>  
                                          </center>
                                        </div>

                                        <div class="col-md-4 col-xl-4">
                                          <center>
                                            <a class="text3" href="{{ asset('images/flood/floodmap/13_flooding/Type2_rez.gif') }}" target="_blank"> 
                                              <img  src="{{ asset('images/flood/floodmap/13_flooding/Type2_rez.gif') }}" style="width: 150px; height: 100px; object-fit: cover;" > 
                                            </a>
                                            <p class="text3">	การลดลงของน้ำในพื้นที่เสี่ยงภัยน้ำท่วม</p>  
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
    
    