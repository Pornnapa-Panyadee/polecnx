<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>CM : หลักระดับนน้ำท่วม </title>

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
    <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
    <script src="{{ asset('js/leaflet-src.js')}}"  crossorigin=""></script>

    <style type="text/css">
      #map{
			  font-family: Mitr, sans-serif;
			  height: 720px;
			  display: block;
        margin: auto;
        text-align: left;
        font-size: 14px;
			}
		  #map.table {
		    font-family: 'Mitr', sans-serif;
		    width: 100%;
		  }#map.tr {
		    padding: 15px;
		    text-align: right;
		  }#map.td {
		    padding: 15px;
		    text-align: right;
        }
        select{
            width: 100%;
            height: 40px;
        }
        button.btn {
            width: 100%;
        }
        @media only screen and (max-width:480px) {
            #map{
                height: 450px;
                font-size: 14px;
            }
            table{
                font-size: 2vw;
            }
            select{
            width: 100%;
            height: 40px;
            }
            button.btn{
            width: 100%;
            }
            .btn-sm{
                font-size: 2vw;
            }
        }
      #fix-header{
        font-size:16px;
      }
      th{
        text-align:center;
      }
      .btn{
        padding:2px 12px;
      }
      @media screen and (max-width: 600px) {
          div.find {
            width: 80%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
          }
      }
     </style>

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
                            <div class="card-header">
                              <div class="row">
                                
                                <div class="col-md-12 col-xl-3">
                                  <h4>กิจกรรม : การจัดทำหลักเตือนระดับน้ำท่วม</h4>
                                โดย มหาวิทยาลัยเชียงใหม่<br><br>
                                <span>
                                  <b>หลักระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่</b> 
                                </span>
                                <p>
                                  หลักแสดงระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่เป็นที่แสดงค่าระดับน้ำที่จะท่วมแต่ละพื้นที่ซึ่งหลักติดตั้งอยู่ 
                                  หลักระดับน้ำท่วมเป็นเสาคอนกรีตสูง 1.40 เมตร แสดงค่าระดับน้ำที่จะท่วมแต่ละพื้นที่ โดยจะติดตั้งกระจายทั่วพื้นที่เคยเกิดน้ำท่วมทั้ง 7 
                                  โซนจำนวน 130 ป้ายในเขตพื้นที่น้ำท่วมเขตเมืองเชียงใหม่ และในโครงการระบบเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมในพื้นที่ชุมชนเมืองจังหวัดเชียงใหม่ 
                                  ได้มีการสร้างและติดตั้งหลักระดับน้ำท่วมเพิ่มเติมอีก 200 หลัก รวมทั้งสิ้น 330 โดยที่เสาของหลักเขียนบอกระดับน้ำที่น้ำจะเข้าท่วมบนพื้นผิวโดยเปรียบเทียบกับ
                                  ค่าระดับน้ำที่สถานี P.1 เชิงสะพานนวรัฐ เพื่อที่จะสามารถเป็นข้อมูลให้ประชาชนทั่วไปทราบถึงระดับน้ำท่วมภายในชุมชนต่างๆที่อาจเกิดขึ้นได้อย่างถูกต้อง
                                  <center><img  src="{{ asset('images/icon/polecnx.jpg') }}" width=85% > <br>ตัวอย่าง หลักระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่ </center>
                                </p>
                                
                                </div>
                                
                                
                                <div class="col-md-12 col-xl-9">
                                  
                                  <!-- Map Show -->
                                  <div class="card-block p-b-0">
                                    <div id="map" style="border-style: groove;"></div>
                                    <br>
                                    <center><img  src="{{ asset('images/icon/refmappole.png') }}" width=75% ></center>
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
                              <div class="sub-title"><h4>ตารางแสดงรายละเอียดหลักระดับน้ำท่วมในพื้นที่เขตเมืองเชียงใหม่</h4> </div>
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
                                          <th width=20%>บริเวณที่ตั้ง</th>
                                          <th width=15%>ระดับฐานหลัก</th>
                                          <th width=15%>ระดับน้ำท่วมสูงสุด</th>
                                          <th width=15%>ระดับน้ำท่วมจากฐานหลัก</th>
                                          <th></th>
                                        </tr>
                                      </thead>
                                      <tbody>     
                                      <?php for($i = 0;$i < count($data);$i++){  ?>
                                        <tr>
                                          <td align="center">{{$i+1}} </td>
                                          <td align="center"><a href='' target="_blank"> {{$data[$i]['pole_id']}} </a></td>
                                          <td >{{$data[$i]['pole_name']}}</td>
                                          <td align="center">{{$data[$i]['base_level']}}</td>
                                          <td align="center">{{$data[$i]['flood_level']}}  </td>
                                          <td align="center">{{$data[$i]['flood_max']}}</td>
                                          <td align="center" > 
                                           <a href='{{ asset('/images/originals') }}/{{$data[$i]['pix']}}' class="btn waves-effect waves-light btn-linkedin" target="_blank"><i class="feather icon-image"></i>ภาพประกอบ</a>
                                            <a href='https://maps.google.com/?q={{$data[$i]['lat']}},{{$data[$i]['long']}}' class="btn waves-effect waves-light btn-instagram" target="_blank"><i class="feather icon-map-pin"></i>เส้นทาง</a>
                                            
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
    
    <script src= "{{ asset('js/chooselocationReport.js') }}"></script>
    <script src="{{ asset('js/form/rocket-loader.min.js')}}"></script>
  
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
    
      var borders= new L.LayerGroup();
      var x = 18.780015 ; 
      var y = 99.01;
      var mbAttr = 'Chiang Mai ',
          mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoidmFucGFueWEiLCJhIjoiY2loZWl5ZnJ4MGxnNHRwbHp5bmY4ZnNxOCJ9.IooQB0jYS_4QZvIq7gkjeQ';
          osm = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
              maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3'], attribution: mbAttr });
          osmBw = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
                maxZoom: 20,subdomains:['mt0','mt1','mt2','mt3'], attribution: mbAttr });
      var map = L.map('map', {
          layers: [osm,station1,station2,borders],
          center: [x,y],
          zoom: 14,
        });

      var pin = L.icon({
          iconUrl: '{{ asset('images/icon/pole3.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/pole3.png') }}',
          iconSize: [18, 48],
          iconAnchor: [20, 0],
          popupAnchor: [-10, 0]
        });

      var pinMO = L.icon({
          iconUrl: '{{ asset('images/icon/pole3.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/pole3.png') }}',
          iconSize: [25, 34],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
           
     function checkname(name){
        if(name!=null){
          return name;
        }else{
          return "- ";
        }
      }
      compass=['east','west'];
      function addPin(ampName,i,mo){
        $.getJSON("{{ asset('map/getDataSurvey') }}/"+compass[i], 
          function (data){
            // alert (data[0].lat);
            for (i=0;i<data.length;i++){
              // var lo =data[i].geometry.coordinates+ '';;
              var x=data[i].lat;
              var y=data[i].long;
              // alert (x);
              var text ="<div class='leaflet-popup-content'> <font style=\"font-family: 'Mitr';\" size=\"3\"COLOR=#1AA90A > หมายเลขหลัก : " + data[i].pole_id + "</font><br>";
                  text1 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > บริเวณที่ตั้ง : "+ data[i].pole_name+"</font><br>";
                  text2 ='<img src="images/originals/'+data[i].pix+' " width="100%" >';
                  text3 ="<br><table align=\"center\"><tr><td> <a href='{{ asset('/images/originals/') }}/"+data[i].pix+"' target=\"_blank\">  "+"<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-image\"></i> ภาพประกอบ</button> </a>" +"</td><td > <a href='https://maps.google.com/?q="+data[i].lat+","+data[i].long+"' target=\"_blank\">  " + "<button class=\"btn btn-primary btn-sm waves-effect waves-light\"><i class=\"feather icon-map-pin\"></i> ขอเส้นทาง</button> </a></td></tr></table> </div>";
              if(mo==0){
                L.marker([x,y],{icon: pinMO}).addTo(ampName).bindPopup(text+text1+text2+text3);  
              }else{
                L.marker([x,y],{icon: pin}).addTo(ampName).bindPopup(text+text1+text2+text3);  
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
      
      
      addPin(station1,0,mo);
      addPin(station2,1,mo);

      var baseTree = {
          label: 'BaseLayers',
          noShow: true,
          children: [  {label: ' แผนที่ภูมิประเทศ (Streets)', layer: osm},
                       {label: ' แผนที่ภาพถ่ายผ่านดาวเทียม (Satellite)', layer: osmBw},
          ]
        };


        var ctl = L.control.layers.tree(baseTree, null);
        ctl.addTo(map).collapseTree().expandSelected();

    
      var overlays = [{
          label: ' พื้นที่ของแม่น้ำปิง',
          selectAllCheckbox: true,
          children: [
                { label:"ฝั่งตะวันตก",layer: station1},
                { label:"ฝั่งตะวันออก",layer: station2}
          ]
        }];
        
        ctl.setOverlayTree(overlays).collapseTree(true).expandSelected(true);
    </script>

  
    <!-- End Map  -->
  </body>

</html>
