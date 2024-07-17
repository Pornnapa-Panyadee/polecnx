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
                             
                                  <h4>ระบบเตรียมความพร้อมเพื่อรับมือภัยพิบัติน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่</h4>
                                  <h4> <b><font style="color:#3d98ff; font-weight: bolder;"> CMFlood </font></b> : Chiang Mai City Flood Preparedness System</h4>
                                <hr>
                                <div class="row">
                                  <div class="col-md-12 col-xl-9">
                                    <center><img  src="{{ asset('images/flood/city.jpg') }}" width=100% >
                                  </div>
                                  <div class="col-md-12 col-xl-3">
                                    <br>
                                    <div class="Feautes">
                                        <div class="single-features">
                                          <a href="{{ asset('/pole') }}" target="_blank" >
                                              <div class="signle-icon">
                                                  <i class="icofont icofont-pencil-alt-3"></i>
                                              </div>
                                          </a>
                                        </div>
                                        <p style="margin-top: 80px; text-align: center;">ข้อมูลหลักระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่</p>
                                    </div>
                                    <br>
                                    <div class="Feautes">
                                        <div class="single-features">
                                          <a href="{{ asset('/floodmap') }}" target="_blank" >
                                              <div class="signle-icon">
                                                  <i class="icofont icofont-map"></i>
                                              </div>
                                          </a>
                                        </div>
                                        <p style="margin-top: 80px; text-align: center;">แผนที่เสี่ยงภัยน้ำท่วม (Flood Hazard Map)</p>
                                    </div>
                                  </div>
                                </div>
                                
                                
                                <div class="row" style="margin:20px">
                                  
                                  <div class="text-h">  หลักการและเหตุผล </div>
                                    <div class="text"> 
                                    จากเหตุการณ์น้ำท่วมใหญ่หลายครั้งในพื้นที่เขตเมืองเชียงใหม่ในปี พ.ศ.2548 ทำให้เกิดการตื่นตัวของทุกภาคส่วนเพื่อเพิ่มประสิทธิภาพในการป้องกันและบรรเทาผลกระทบจากภัยน้ำท่วมมีการบูรณาการของหน่วยงานเพื่อการป้องกันน้ำท่วมอย่างเป็นระบบ อย่างไรก็ตาม ในปี พ.ศ.2554 จังหวัดเชียงใหม่ได้เผชิญกับภัยน้ำท่วมใหญ่อีกครั้งหนึ่ง ซึ่งมีระดับความรุนแรงเท่ากับที่เกิดในปี พ.ศ.2548 แต่ความเสียหายในเขตตัวเมืองกลับน้อยกว่า ซึ่งเป็นผลมาจากการเตือนภัยให้ประชาชนได้รับทราบก่อนกว่า 7 ชั่วโมง แต่ก็พบว่ายังมีข้อจำกัดหลายประการในระบบการพยากรณ์และเตือนภัยน้ำท่วมที่มีอยู่ในปัจจุบัน ซึ่งการดำเนินการเตรียมการและวางแผนรับมือภัยน้ำท่วมที่รุนแรงทำได้เพียงระดับหนึ่งยังไม่เต็มที่ เนื่องจากยังมีจุดอ่อนที่ระบบฐานข้อมูลที่เกี่ยวข้องในพื้นที่เสี่ยงภัยยังไม่สมบูรณ์พอซึ่งเป็นเรื่องที่ต้องให้ความสำคัญในการวางแผนเพื่อความพร้อมในการรับมือภัยให้เกิดความเสียหายน้อยที่สุด โดยเฉพาะในเขตชุมชนเมืองซึ่งมีความสำคัญทางเศรษฐกิจสูง ต้องมีการพัฒนาระบบการเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมให้มีประสิทธิภาพมากขึ้นและตอบสนองกับภัยน้ำท่วมได้อย่างทันท่วงที โดยระบบนี้มีความจำเป็นเพื่อเป็นศูนย์กลางของข้อมูล ข่าวสาร ให้ทางจังหวัดเชียงใหม่ซึ่งเป็นผู้รับผิดชอบหลัก สามารถจะนำไปใช้งานในการวางแผนตัดสินใจวางแผน สั่งการทั้งก่อนการเกิดภัย ระหว่างการเกิดภัย และหลังเกิดภัย ระบบต้องสามารถเข้าถึงได้ง่ายซึ่งทำให้ประชาชนสามารถใช้ระบบนี้เพื่อบรรเทาภัยน้ำท่วมได้เป็นอย่างดี
                                    โครงการจัดทำระบบเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมในพื้นที่ชุมชนเมืองจังหวัดเชียงใหม่ตามโครงการติดตามและเผ้าระวังสถานการณ์น้ำเพื่อรับมือน้ำท่วม จังหวัดเชียงใหม่ เป็นโครงการที่รวบรวมและจัดทำฐานข้อมูลแผนที่ทั้งแบบ 2 มิติ และ 3 มิติ สำหรับเตรียมความพร้อมในการดำเนินการพัฒนาระบบประเมินความรุนแรงของเหตุการณ์ที่อาจจะเกิดขึ้นในพื้นที่ชุมชนเมืองเชียงใหม่ สำหรับการวางแผนการอพยพ การรายงานสรุปความรุนแรงที่อาจเกิดขึ้น ด้วยระบบฐานข้อมูลภูมิสารสนเทศออนไลน์ เพื่อตอบสนองการบริหารจัดการพื้นที่สำหรับผู้บริหาร หน่วยงานภาครัฐ และประชาชน
                                    ในการออกแบบและจำลองภาพเสมือนจริงของอาคารในรูปแบบของฐานข้อมูลแผนที่ 3 มิติ นั้น จะเป็นฐานข้อมูลที่สามารถอธิบายให้ประชาชน และหน่วยงาน สามารถเข้าใจข้อมูลเชิงพื้นที่ได้ชัดเจนยิ่งขึ้น การจำลองภาพเสมือนจริงของอาคาร สถานที่สำคัญ ในโครงการนี้จะเป็นการจำลองเพื่อนำเสนอและวางแผนการจำลองสถานการณ์กรณีเกิดอุทกภัยในพื้นที่ชุมชนเมืองเชียงใหม่ โดยฐานข้อมูลอาคารจำลองแบบ 3 มิตินี้ยังสามารถนำไปประยุกต์ใช้กับภารกิจของหน่วยงานอื่น ๆ ที่เกี่ยวข้องกับการบริหารจัดการน้ำ การท่องเที่ยว การบรรเทาสาธารณภัย และอื่น ๆ ได้อย่างมีประสิทธิภาพ โดยสามารถนำฐานข้อมูลดังกล่าวต่อยอดโครงการเพื่อพัฒนาระบบให้เหมาะสมกับภารกิจของหน่วยงานต่อไป</p>
                                    </div> 
                                </div>

                                <div class="row" style="margin:20px">
                                  <div class="text-h">  วัตถุประสงค์ของโครงการ </div>
                                    <div class="text2"> 
                                     <br>1. จัดทำระบบพยากรณ์ระดับน้ำท่วมของแม่น้ำปิงล่วงหน้าในพื้นที่เขตเมืองเชียงใหม่
                                      <br>2. เพื่อให้มีฐานข้อมูล 3 มิติในพื้นที่ชุมชนเมืองเชียงใหม่ โดยสามารถนำชั้นข้อมูลพื้นที่น้ำท่วม หรือข้อมูลเชิงพื้นที่อื่น ๆ ซ้อนทับกับข้อมูล 3 มิติเพื่อประเมินพื้นที่เบื้องต้นได้
                                      <br>3. จัดทำแผนที่เสี่ยงภัยน้ำท่วม ในพื้นที่ชุมชนเมืองเชียงใหม่ สำหรับการวางแผนรับมือน้ำท่วม
                                      <br>4. จัดทำระบบประเมินสภาพความเสียหายและความรุนแรงของเหตุการณ์น้ำท่วม
                                      <br>5. จัดทำระบบฐานข้อมูลสารสนเทศเพื่อเตรียมการรับมือน้ำท่วมเชื่อมโยงใช้งานผ่านระบบเครือข่ายอินเทอร์เน็ต (GIS Server) ของจังหวัดเชียงใหม่
                                   </div> <br>
                                </div>

                                <div class="row" style="margin:20px">
                                  <div class="text-h">  ระบบเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วม </div>
                                    <div class="text2"> 
                                      <font style="color:#3d98ff; font-weight: bolder;"> 1. หลักเตือนระดับน้ำท่วมเพื่อการเตือนภัยสำหรับชุมชนในพื้นที่เสี่ยงภัย  </font>
                                      ทำการจัดทำหลักเตือนระดับน้ำท่วมเพิ่มเติมอีก 200 หลัก จากเดิมที่มีอยู่แล้ว 130 หลักในเขตพื้นที่เสี่ยงภัยโดยหลักแสดงระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่ เป็นที่แสดงค่าระดับน้ำที่จะท่วมแต่ละพื้นที่ซึ่งหลักติดตั้งอยู่ หลักระดับน้ำท่วมเป็นเสาคอนกรีตสูง 1.40 เมตร แสดงค่าระดับน้ำที่จะท่วมแต่ละพื้นที่ โดยจะติดตั้งกระจายทั่วพื้นที่เคยเกิดน้ำท่วมในเขตเมืองเชียงใหม่ โดยที่เสาของหลักเขียนบอกระดับน้ำที่น้ำจะเข้าท่วมบนพื้นผิวโดยเปรียบเทียบกับค่าระดับน้ำที่สถานี P.1 เชิงสะพานนวรัฐ
                                      การใช้หลักเตือนระดับน้ำท่วมนั้น ให้รับฟังข่าวและผลการพยากรณ์ระดับน้ำปิงล่วงหน้าที่สถานีวัดน้ำ P.1 สะพานนวรัฐ โดยหน่วยวิจัยภัยพิบัติทางธรรมชาติและ หน่วยงานที่เกี่ยวข้องจะรายงานให้ทราบตลอดในช่วงการเกิดภาวะน้ำท่วม เมื่อทราบค่าระดับน้ำที่จะเกิดที่สถานีวัดน้ำดังกล่าวแล้วให้นำตัวเลขค่าระดับน้ำของแม่น้ำปิงนั้นมาเทียบกับตัวเลขที่อยู่ที่เสาแสดงระดับน้ำ ก็จะทราบความสูงของระดับน้ำที่จะท่วมบริเวณที่มีหลักวางอยู่ ทำให้ประชาชนสามารถวางแผนป้องกันน้ำท่วมบ้านเรือนได้ทัน <br>
                                      <font style="color:#3d98ff; font-weight: bolder;"> 2. แผนที่เสี่ยงภัยน้ำท่วม (Flood Hazard Map)</font> สร้างแผนที่เสี่ยงภัยน้ำท่วมของเหตุการณ์น้ำท่วม ใหญ่ที่ผ่านมาในอดีตและเหตุการณ์โดยการจำลองขนาดน้ำท่วมเป้าหมาย ซึ่งเป็นแผนที่แสดงสภาพและข้อมูลการท่วม ได้แก่พื้นที่ที่คาดการณ์ว่าน้ำจะท่วม ความลึกของน้ำที่ท่วม รวมทั้งข้อมูลสำหรับการอพยพ เช่น จุดอพยพ เส้นทางการอพยพ จุดอันตรายในเส้นทางอพยพ เป็นต้น ข้อมูลเหล่านี้จะแสดงในรูปแบบของรูปภาพที่เข้าใจง่าย โดยมีเป้าหมายหลักเพื่อให้สามารถอพยพประชาชนไปอยู่ ในที่ปลอดภัยได้อย่างเหมาะสม ทันเวลา ในกรณีที่เกิด เหตุการณ์น้ำท่วมขึ้น
                                    
                                    </div> <br>
                                   
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
    
    