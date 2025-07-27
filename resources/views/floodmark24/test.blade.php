<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>CM Flood Mark 2024 : เครื่องหมายระดับน้ำท่วมเมืองเชียงใหม่ ปี 2567 </title>


    <link rel="icon" href="{{ asset('images/icon/favicon1.ico')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Mitr|Prompt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/datatables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/buttons.datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/responsive.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/form/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form/waves.min.css')}}" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/form/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('css/form/style1.css')}}">

    <!-- leaflet -->
    <link rel="stylesheet" href="{{ asset('css/form/leaflet.css')}}" crossorigin=""/>
    <script src="{{ asset('js/leaflet-omnivore.min.js')}}"  crossorigin=""></script>
    <script src="{{ asset('js/leaflet-src.js')}}"  crossorigin=""></script>
    <style type="text/css">
      .container1 {
            width: 100%;
            position: relative;
            align-items: center;
        }
      .texth {
        font-size: 20px;
        margin: 10px 0;
        padding: 10px;
        text-align: center;
      }
      .text {
        font-size: 16px;
        margin: 10px 0;
        padding: 10px;
        text-indent: 2em;
        text-align: justify;
        line-height: 1.6;
      }
      .leaflet-popup-content-wrapper, .leaflet-popup-content {
        width: 400px;
        margin: 10px ;
      }
      #map {
        font-family: 'Mitr', sans-serif;
        height: 720px;
        margin: auto;
        text-align: left;
        font-size: 14px;
      }
      #map.table {
        font-family: 'Mitr', sans-serif;
        width: 100%;
      }
      #map.tr, #map.td {
        padding: 15px;
        text-align: right;
      }
      select {
        width: 100%;
        height: 40px;
      }
      button.btn {
        width: 100%;
      }
      .pix_floodmark {
        width: 65%;
      } 
       @media only screen and (max-width: 480px) {
        .pix_floodmark {
          width: 50%;
        }
        #map {
          height: 450px;
          font-size: 14px;
        }
        table {
          font-size: 2vw;
        }
        select {
          width: 100%;
          height: 40px;
        }
        button.btn {
          width: 100%;
        }
        .btn-sm {
          font-size: 2vw;
        }
        .text {
          font-size: 18px;
        }
        .texth {
          font-size: 22px;
          margin: 10px 0;
          padding: 10px;
        }
      } 
      #fix-header1 {
        font-size: 16px;
      } 
      /th {
        text-align: center;
      }
      .btn {
        padding: 5px 15px;
      } 
      /@media screen and (max-width: 600px) {
        div.find {
          width: 80%;
          text-align: center;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .texth {
          font-size: 22px;
          margin: 10px 0;
          padding: 10px;
        }
        .text {
          font-size: 18px;
          margin: 10px 0;
          padding: 10px;
          text-indent: 2em;
          text-align: justify;
          line-height: 1.6;
        }
      } 
    </style>
    <style>
      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
    </style>
  

  </head>

  <body class="horizontal-icon-fixed" >
    <!-- Loader Popup -->
    <div id="loadingOverlay" style="
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      min-width: 600px;
      min-height: 520px;
      background: rgba(255,255,255,0.95);
      z-index: 9999;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 16px;
      box-shadow: 0 4px 24px rgba(0,0,0,0.12);
      font-family: 'Mitr', sans-serif;
      font-size: 22px;
      color: #333;
      border: 1px solid #71b1dcff;
      border-bottom: 12px solid #3498db;
    ">
      <!-- Loader spinner -->
      <div style="position: relative; display: flex; justify-content: center; align-items: center;">
      <div style="border: 20px solid #f3f3f3;  border-top: 16px solid #3498db;
      border-radius: 50%; width: 148px;height: 148px;animation: spin 1s linear infinite; margin-bottom: 16px;">
      </div>
      <div id="loadingPercent" style="
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 28px;
      color: #3498db;
      font-weight: bold;
      ">0%</div>
      </div>
      <h2>กำลังประมวลผล</h2>
      <h4>โปรดรอสักครู่...</h4>
    </div>
    <script>
      // ตัวอย่างการอัปเดตเปอร์เซ็นต์ (สามารถปรับให้แสดงจริงตามการโหลดข้อมูล)
      let percent = 0;
      const percentElem = document.getElementById('loadingPercent');
      const interval = setInterval(function() {
      percent += Math.floor(Math.random() * 15) + 5;
      if(percent > 100) percent = 100;
      percentElem.textContent = percent + '%';
      if(percent === 100) clearInterval(interval);
      }, 300);
    </script>

    @yield('content')
    <!-- <div class="loader-bg">
        <div class="loader-bar"></div>
    </div> -->

    <div id="pcoded" class="pcoded" >
      <!-- <div class="pcoded-overlay-box"></div> -->
      @include('menu.header')
      <!-- @include('menu.header_pole') -->
      @include('menu.slidebar')
      <div class="pcoded-container navbar-wrapper">
        <div class="pcoded-main-container">
          <div class="pcoded-wrapper">
            <!-- Map -->
            <div class="pcoded-content">
              <!-- <div class="card"><h3></h3></div> -->
              <div class="pcoded-inner-content">
                <div class="main-body" >
                  <div class="page-wrapper">
                    <div class="page-body">
                      <div class="row" style="margin-top:20px">
                        <div class="col-md-12">
                          <div class="card table-card">
                            <div class="card-header">
                              <div class="row">
                                <div class="col-md-12 col-xl-12 texth">
                                  <center>เครื่องหมายระดับน้ำท่วมเขตตัวเมืองเชียงใหม่ ปี 2567 (CM Flood Mark 2024)
                                  <p>โดย มหาวิทยาลัยเชียงใหม่</p></center><hr>
                                </div>
                                
                              </div>
                              <div class="row">
                                <div class="col-md-12 col-xl-2">
                                  
                                  <font class="texth">
                                    <center><b>เครื่องหมายระดับน้ำท่วม (Flood Mark)</b> </center>
                                  </font>
                                  <p class="text">
                                    เพื่อการเตือนภัยสำหรับชุมชนในพื้นที่เสี่ยงภัย จำนวน 5,000 จุด 
                                    ติดตั้งกระจายทั่วพื้นที่เคยเกิดน้ำท่วมในเขตเมือง จ.เชียงใหม่ และ จ.ลำพูน 
                                    โดยแสดงระดับน้ำท่วมสูงสุดวัดจากผิวถนน โดยเปรียบเทียบกับค่าระดับน้ำของแม่น้ำปิงที่สถานี P.1 
                                    เชิงสะพานนวรัฐ ซึ่งเกิดน้ำท่วมใหญ่ในเดือนตุลาคม พ.ศ. 2567 โดยที่ P.1 = 5.30 เมตร
                                    <center>
                                    <br>
                                    <img  src="{{ asset('images/icon/floodmark.jpg') }}" width=50% > <br> <p>ตัวอย่าง เครื่องหมายระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่</p> </center>
                                     <br>
                                    <img  src="{{ asset('images/icon/flood_ref1.png') }}" width=100%  >  
                                  </center>
                                  
                                  </p>
                                </div>
                                
                                
                                <div class="col-md-12 col-xl-10">
                                  
                                  <!-- Map Show -->
                                  <div class="card-block p-b-0">
                                    <div align="right" > 
                                      <h5 >FLOOD MARKS OCT. 2024 เครื่องหมายแสดงระดับน้ำท่วม เดือนตุลาคม 2567 โดยระดับน้ำปิงที่สถานี P.1 = 5.3 เมตร</h5>
                                    </div>
                                    <div id="map" style="border-style: groove;"></div>
                                    <center><img  src="{{ asset('images/icon/refflood24_1.png') }}" width=50%  ></center>
                                  </div>
                                  <!-- End Map show -->
                                   
                                </div>
                              </div>
                              
                                                          
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <!-- table -->
                      <div class="card">
                        <div class="card-block">
                          <div class="row">
                            <div class="col-lg-12 col-xl-12">
                              <div class="sub-title"><h4>ตารางแสดงรายละเอียดเครื่องหมายระดับน้ำท่วมเมืองเชียงใหม่ เดือนตุลาคม พ.ศ.2567 </h4> </div>
                              <!-- choose Amp -->
                                
                              <br>
                                <!-- table -->
                                <div id="tableData">
                                  <div class="dt-responsive table-responsive">
                                      <table id="fix-header" class="table table-striped table-bordered nowrap" width="80%" align="center">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>รหัส</th>
                                            <th>โครงสร้างที่ทำเครื่องหมาย</th>
                                            <th>ตำแหน่งที่ตั้ง</th>
                                            <th>พิกัด</th>
                                            <th>ระดับน้ำท่วม (ซม.)</th>
                                            <th>รูป</th>
                                            <th>เส้นทาง</th>
                                          </tr>
                                        </thead>
                                      </table>          
                                    
                                  </div>
                                </div>     
                            </div>
                                                                                    
                          </div>
                        </div>
                      </div>
                      <!-- table end -->
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
    
    
    <script src="{{ asset('js/form/jquery.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/form/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery-i18next.min.js')}}" ></script>
    <script src="{{ asset('js/form/pcoded.min.js')}}" ></script>
    <script src="{{ asset('js/form/menu-hori-fixed.js')}}" ></script>
    <script src="{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js')}}" ></script>
    <script src="{{ asset('js/form/script.js')}}"></script>
    <script src="{{ asset('js/form/jquery.slimscroll.js') }}"></script>
    <script src="https://unpkg.com/node-waves/dist/waves.min.js"></script>
  
    <script src="{{ asset('js/form/jquery.datatables.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.buttons.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.fixedheader.min.js')}}"></script>

    <script src="{{ asset('js/form/datatables.colreorder.min.js')}}" ></script>
    <script src="{{ asset('js/form/buttons.print.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.bootstrap4.min.js')}}" ></script>
    <script src="{{ asset('js/form/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('js/form/datatables.responsive.min.js')}}" ></script>
    

    <!-- <script src= "{{ asset('js/form/fixed-header-custom.js') }}"></script> -->

    <script src= "{{ asset('js/form/pcoded.min.js') }}"></script>
    <script src= "{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js') }}"></script>

    <script src= "{{ asset('js/form/script.js') }}"></script>
    <!-- Floodmark -->
    <script>
      var floodmarkTableUrl = "{{ route('floodmark24.table.data') }}";
    </script>
    <script src="{{ asset('js/tabledata/floodmark.js') }}"></script>


    <script>
      window.onload = function() {
        var loader = document.getElementById('loadingOverlay');
        if(loader) {
          // ค่อยๆ ลดความทึบ (fade out) ก่อนซ่อน
          loader.style.transition = "opacity 0.5s ease";
          loader.style.opacity = 0;
          setTimeout(function() {
            loader.style.display = 'none';
          }, 500); // รอให้ fade out เสร็จก่อนซ่อนจริง
        }
      }
    </script>
    
    <!-- Map script -->
    <link rel="stylesheet" href="{{ asset('css/L.Control.Layers.Tree.css')}}" crossorigin=""/>
    <script src="{{ asset('/js/L.Control.Layers.Tree.js')}}"></script>
    <script src="{{ asset('/js/tabledata/map-floodmark.js')}}"></script>


  
    <!-- End Map  -->
  </body>

</html>
