<!DOCTYPE html>
<html lang="en">
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

    <!-- leaflet -->
    
    <link rel="stylesheet" href="{{ asset('css/form/leaflet.css')}}" crossorigin=""/>
    <script src="{{ asset('js/leaflet-omnivore.min.js')}}"  crossorigin=""></script>

    <!-- <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script> -->
    <script src="{{ asset('js/leaflet-src.js')}}"  crossorigin=""></script>

    <style type="text/css">
      .container1 {
            width: 100%;
            position: relative;
            align-items: center;
        }
        table {
            margin-left: 15px;
            vertical-align: top;
        }
        td {
            display: table-cell;
            vertical-align: top;
            unicode-bidi: isolate;
        
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
            padding-left: 10px; 
            
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
      /* button.btn {
        width: 100%;
      } */
      /* .pix_floodmark {
        width: 65%;
      } */
      /* @media only screen and (max-width: 480px) {
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
      } */
      /* #fix-header {
        font-size: 16px;
      } */
      /* th {
        text-align: center;
      }
      .btn {
        padding: 5px 15px;
      } */
      /* @media screen and (max-width: 600px) {
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
      } */
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
        @include('menu.header_pole')
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
                                    เพื่อการเตือนภัยสำหรับชุมชนในพื้นที่เสี่ยงภัย จำนวนมากกว่า 4,000 จุด 
                                    ติดตั้งกระจายทั่วพื้นที่เคยเกิดน้ำท่วมในเขตตัวเมืองเชียงใหม่ 
                                    โดยแสดงระดับน้ำท่วมสูงสุดวัดจากผิวถนน โดยเปรียบเทียบกับค่าระดับน้ำของแม่น้ำปิงที่สถานี P.1 
                                    เชิงสะพานนวรัฐ ซึ่งเกิดน้ำท่วมใหญ่ในเดือนตุลาคม พ.ศ. 2567 โดยที่ P1 = 5.30 เมตร
                                    <center>
                                    <br>
                                    <img  src="{{ asset('images/icon/floodmark.jpg') }}" width=50% > <br> <p>ตัวอย่าง เครื่องหมายระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่</p> </center>
                                     <br>
                                    <img  src="{{ asset('images/icon/flood_ref.png') }}" width=100%  >  
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
                                    <table id="fix-header" class="table table-striped table-bordered nowrap" width=80% align="center">
                                      <thead>
                                        <tr>
                                          <th width=5%>#</th>
                                          <th width=10%>รหัส</th>
                                          <th width=10%>โครงสร้างที่ทำเครื่องหมาย</th>
                                          <th width=15%>ตำแหน่งที่ตั้ง</th>
                                          <th width=15%>พิกัด</th>
                                          <th width=10%>ระดับน้ำท่วม (ซม.)</th>
                                          <th width=10%>รูป</th>
                                          <th width=5%>เส้นทาง</th>
                                        </tr>
                                      </thead>
                                      <tbody>     
                                      <?php for($i = 0;$i < count($data);$i++){  ?>
                                        <tr align="center">
                                          <td>{{$i+1}} </td>
                                          <td> {{$data[$i]['code']}} </td>
                                          <td >{{$data[$i]['tool']}}</td>
                                          <td>{{$data[$i]['place_detail']}}</td>
                                          <td>{{ number_format($data[$i]['latitude'], 4) }},{{ number_format($data[$i]['longitude'], 4) }} </td>
                                          <td>{{$data[$i]['water_level']}}</td>
                                          <td>
                                            <a href="{{ url('/flood24/image')}}/{{$data[$i]['code']}}" class="btn waves-effect waves-light btn-linkedin" target="_blank"><i class="feather icon-image"></i>ภาพประกอบ</a>
                                          </td>
                                          <td> 
                                            <a href='https://maps.google.com/?q={{$data[$i]['latitude']}},{{$data[$i]['longitude']}}' class="btn waves-effect waves-light btn-instagram" target="_blank"><i class="feather icon-map-pin"></i>เส้นทาง</a>
                                          </td>
                                        </tr>
                                      <?php }?>
                                        
                                      </tbody>
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
    <script async  src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    
    
  
    <script src="{{ asset('js/form/jquery.datatables.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.buttons.min.js')}}" ></script>

    <script src="{{ asset('js/form/datatables.fixedheader.min.js')}}"></script>

    <script src="{{ asset('js/form/datatables.colreorder.min.js')}}" ></script>
    <script src="{{ asset('js/form/buttons.print.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.bootstrap4.min.js')}}" ></script>
    <script src="{{ asset('js/form/datatables.responsive.min.js')}}" ></script>
    <script src="{{ asset('js/form/responsive.bootstrap4.min.js')}}"></script>

    <script src= "{{ asset('js/form/fixed-header-custom.js') }}"></script>

    <script src= "{{ asset('js/form/pcoded.min.js') }}"></script>
    <script src= "{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js') }}"></script>

    <script src= "{{ asset('js/form/script.js') }}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" ></script>
  
    <script src="{{ asset('js/form/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>

    
    <!-- Map script -->
    <link rel="stylesheet" href="{{ asset('css/L.Control.Layers.Tree.css')}}" crossorigin=""/>
    <script src="{{ asset('/js/L.Control.Layers.Tree.js')}}"></script>

    <script type="text/javascript">
      
      var station1 = new L.LayerGroup();
      var station2 = new L.LayerGroup();
      var station3 = new L.LayerGroup();
      var station4 = new L.LayerGroup();
      var station5 = new L.LayerGroup();
    
      var cnx= new L.LayerGroup();
      var lpn= new L.LayerGroup();

      var x = 18.787563; 
      var y = 99.003968;
      var mbAttr = 'Chiang Mai ',
          mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidmFucGFueWEiLCJhIjoiY2loZWl5ZnJ4MGxnNHRwbHp5bmY4ZnNxOCJ9.IooQB0jYS_4QZvIq7gkjeQ';
          osm = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
              maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3'], attribution: mbAttr });
          osmBw = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
                maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3'], attribution: mbAttr });
      var map = L.map('map', {
          layers: [osm,station1,station2,station3,station4,station5,cnx,lpn],
          center: [x,y],
          zoom: 13,
        });

      var pin = L.icon({
          iconUrl: '{{ asset('images/icon/flood2.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood2.png') }}',
          iconSize: [30, 35],
          iconAnchor: [10, 0],
          popupAnchor: [-10, 0]
        });
      
      var pin_red = L.icon({
          iconUrl: '{{ asset('images/icon/flood_red.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_red.png') }}',
          iconSize: [30, 35],
          iconAnchor: [25, 0],
          popupAnchor: [-10, 0]
        });
      var pin_orange = L.icon({
          iconUrl: '{{ asset('images/icon/flood_orange.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_orange.png') }}',
          iconSize: [30, 35],
          iconAnchor: [25, 0],
          popupAnchor: [-10, 0]
        });
      var pin_yellow = L.icon({
          iconUrl: '{{ asset('images/icon/flood_yellow.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_yellow.png') }}',
          iconSize: [30, 35],
          iconAnchor: [25, 0],
          popupAnchor: [-10, 0]
        });
      var pin_green = L.icon({
          iconUrl: '{{ asset('images/icon/flood_green.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_green.png') }}',
          iconSize: [30, 35],
          iconAnchor: [25, 0],
          popupAnchor: [-10, 0]
        });

      var pin_purple = L.icon({
          iconUrl: '{{ asset('images/icon/flood_purple.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_purple.png') }}',
          iconSize: [30, 35],
          iconAnchor: [25, 0],
          popupAnchor: [-10, 0]
        });


      var pinMO_red = L.icon({
          iconUrl: '{{ asset('images/icon/flood_red.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_red.png') }}',
          iconSize: [15, 20],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
      var pinMO_orange = L.icon({
          iconUrl: '{{ asset('images/icon/flood_orange.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_orange.png') }}',
          iconSize: [15, 20],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
      var pinMO_yellow = L.icon({
          iconUrl: '{{ asset('images/icon/flood_yellow.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_yellow.png') }}',
          iconSize: [15, 20],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
      var pinMO_green = L.icon({
          iconUrl: '{{ asset('images/icon/flood_green.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_green.png') }}',
          iconSize: [15, 20],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
      var pinMO_purple = L.icon({
          iconUrl: '{{ asset('images/icon/flood_purple.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood_purple.png') }}',
          iconSize: [15, 20],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
      
        
      var pinMO = L.icon({
          iconUrl: '{{ asset('images/icon/flood2.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood2.png') }}',
          iconSize: [15, 20],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });

        omnivore.kml('/kml/CNX.kml').on('ready', function () {
            this.setStyle({ fillOpacity: 0.5, color: "#3d98ff", weight: 0 });
        }).addTo(cnx);

        omnivore.kml('/kml/LPN.kml').on('ready', function () {
            this.setStyle({ fillOpacity: 0.5, color: "#3d98ff", weight: 0 });
        }).addTo(lpn);

      
           
     function checkname(name){
        if(name!=null){
          return name;
        }else{
          return " ";
        }
      }

      
      function addPin(ampName,mo,pi){
        $.getJSON("{{ asset('flood24/getDataSurveyLevel') }}"+"/"+pi, 
          function (data){
            const icon_pin = [pin,pin_green, pin_yellow, pin_orange, pin_red,pin_purple]; // Use actual icon objects
            const icon_pinMO = [pinMO,pinMO_green, pinMO_yellow, pinMO_orange, pinMO_red,pinMO_purple]; // Use actual icon objects
            let pin_2;
            
            for (i=0;i<data.length;i++){
              
              var x=data[i].latitude;
              var y=data[i].longitude;
              var text ="<div class='leaflet-popup-content'> <font style=\"font-family: 'Mitr';\" size=\"3\"COLOR=#1AA90A > หมายเลขหลัก : " + data[i].code + "</font><br>";
                  text1 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > บริเวณที่ตั้ง : "+ data[i].place_detail+"</font><br>";
                  text2 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > ระดับน้ำท่วม : "+ data[i].water_level+" เซนติเมตร</font><br>";
                  text3 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > โครงสร้างที่ทำเครื่องหมาย : "+ checkname(data[i].tool) +" "+ checkname(data[i].tool_detail)+ "</font><br>";
                  // text3 = '<br><img src="{{ asset('') }}' + data[i].image[0].image_path + '" width="100%" >';
                  text4 ="<br><table align=\"center\"><tr><td> <a href='{{ asset('/flood24/image') }}/"+data[i].code+"' target=\"_blank\">  "+"<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-image\"></i> ภาพประกอบ</button> </a>"+"</td><td> <a href='https://maps.google.com/?q="+data[i].latitude+","+data[i].longitude+"' target=\"_blank\">  " + "<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-map-pin\"></i> ขอเส้นทาง</button> </a></td></tr></table> </div>";
            if(mo==0){
                pin_2 = icon_pinMO[pi % icon_pin.length];
                L.marker([x,y],{icon: pinMO}).addTo(ampName).bindPopup(text+text1+text2+text3+text4);  
              }else{
                pin_2 = icon_pin[pi % icon_pin.length];
                L.marker([x,y],{icon: pin_2}).addTo(ampName).bindPopup(text+text1+text2+text3+text4);  
              }
            }//end for
          });      
                
      }
      var mx = window.matchMedia("(max-width: 450px)");
      if(mx.matches){
        mo=0;
        // alert(x.matches);
      }else{
        mo=1;
      }      
      
      
      addPin(station2,mo,3);
      addPin(station3,mo,2);
      addPin(station4,mo,1);
      addPin(station1,mo,4);
      addPin(station5,mo,5);

      var baseTree = {
          label: 'BaseLayers',
          noShow: true,
          children: [  {label: ' แผนที่ภูมิประเทศ (Streets)', layer: osm},
                       {label: ' แผนที่ภาพถ่ายผ่านดาวเทียม (Satellite)', layer: osmBw},
          ]
        };
      var ctl = L.control.layers.tree(baseTree, null);
      ctl.addTo(map).collapseTree().expandSelected();

      var overlays = [
      {
        label: ' ช่วงความสูงระดับน้ำท่วม',
        selectAllCheckbox: true,
        children: [
          { label: " 0 - 50 ซม.", layer: station4 },
          { label: " 50 - 100 ซม.", layer: station3 },
          { label: " 100 - 150 ซม.", layer: station2 },
          { label: " 150 - 200 ซม.", layer: station1 },
          { label: " > 200 ซม.", layer: station5 },
        ]
      },
      {
        label: ' พื้นที่น้ำท่วม',
        selectAllCheckbox: true,
        children: [
          { label: " จ.เชียงใหม่", layer: cnx },
          { label: " จ.ลำพูน", layer: lpn }
    
        ]
      }
    ];

    // ใส่ overlay ทั้งหมดในครั้งเดียว
    ctl.setOverlayTree(overlays).collapseTree(true).expandSelected(true);

    // ฟังก์ชันใส่สีตัวหนังสือใน label overlay
    function colorOverlayLabels() {
      const labels = document.querySelectorAll(
        ".leaflet-control-layers-tree .leaflet-control-layers-group label"
      );

      labels.forEach((label) => {
        const text = label.textContent.trim();

        switch (text) {
          case "0 - 50 ซม.":
            label.style.color = "green";
            break;
          case "50 - 100 ซม.":
            label.style.color = "yellow";
            break;
          case "100 - 150 ซม.":
            label.style.color = "orange";
            break;
          case "150 - 200 ซม.":
            label.style.color = "red";
            break;
          case "> 200 ซม.":
            label.style.color = "purple";
            break;
          case "จ.เชียงใหม่":
            label.style.color = "blue";
            break;
          case "จ.ลำพูน":
            label.style.color = "cyan";
            break;
        }
      });
    }

    // เรียกใส่สีหลัง control สร้างเสร็จ
    setTimeout(colorOverlayLabels, 300);
    


    </script>

  
    <!-- End Map  -->
  </body>

</html>
