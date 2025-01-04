<!DOCTYPE html>
<html lang="en">
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

    <!-- leaflet -->
    
    <link rel="stylesheet" href="{{ asset('css/form/leaflet1.css')}}" crossorigin=""/>
    <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
    <script src="{{ asset('js/leaflet-src.js')}}"  crossorigin=""></script>

    <style type="text/css">
      .text{
        font-size: 14px;
        margin: 5px;
        padding:10px;
        text-indent: 2em;
        text-align:justify;
      }
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
    .topnav-right {
      float: right;
      font-size: 20px;
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
                      <!-- Map Show -->
                        <div class="card-block p-b-0">
                          <div id="map" style="border-style: groove;"></div>
                           <br>
                        </div>
                      <!-- End Map show -->
                      
                       <!-- table -->
                      <div class="card">
                        <div class="card-block">
                          <div class="row">
                            <div class="col-lg-12 col-xl-12">
                              <div class="sub-title"><h4>ตารางแสดงรายละเอียดหลักระดับน้ำท่วม</h4> </div>
                              <!-- choose Amp -->
                                
                              <br>
                              <div class="topnav-right ">
                                  <p align="right">
                                    <a href="{{ url('/flood24/form')}}"><button class="btn btn-primary">กรอกข้อมูลหมุดน้ำท่วมเพิ่ม</button></a>
                                  </p>
                              </div>
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
                                          <th width=10%>วันสำรวจ</th>
                                          <th width=10%>รูป</th>
                                          <th ></th>
                                          <th ></th>
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
                                          <td>{{$data[$i]['date_survey']}}</td>
                                          <td>
                                            <a href="{{ url('/flood24/images')}}/{{$data[$i]['code']}}" class="btn waves-effect waves-light btn-linkedin" target="_blank"><i class="feather icon-image"></i>ภาพประกอบ</a>
                                          </td>
                                          <td>
                                            <a href="{{ url('/flood24/edit')}}/{{$data[$i]['code']}}" class="btn waves-effect waves-light btn-instagram" ><i class="feather icon-edit"></i>แก้ไข</a>
                                          </td>
                                          <td>
                                            <a href="{{ url('/removefloodmark')}}/{{$data[$i]['code']}}" class="btn waves-effect waves-light btn-dribbble" onclick="myFunction()"><i class="feather icon-trash-2"></i>ลบ</a>
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

    <script>
      function myFunction() {
        confirm("คุณต้องการลบรูปฝายใช่ไหม?");
      }
    </script>
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
          iconUrl: '{{ asset('images/icon/flood2.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood2.png') }}',
          iconSize: [50, 55],
          iconAnchor: [20, 0],
          popupAnchor: [-10, 0]
        });

      var pinMO = L.icon({
          iconUrl: '{{ asset('images/icon/flood2.png') }}',
          iconRetinaUrl:'{{ asset('images/icon/flood2.png') }}',
          iconSize: [25, 30],
          iconAnchor: [5, 30],
          popupAnchor: [0, 0]
        });
           
     function checkname(name){
        if(name!=null){
          return name;
        }else{
          return " ";
        }
      }

      
      function addPin(ampName,mo){
        $.getJSON("{{ asset('flood24/getDataSurvey') }}", 
          function (data){
            
            for (i=0;i<data.length;i++){
              // alert (i);
              // var lo =data[i].geometry.coordinates+ '';;
              var x=data[i].latitude;
              var y=data[i].longitude;
              var text ="<div class='leaflet-popup-content'> <font style=\"font-family: 'Mitr';\" size=\"3\"COLOR=#1AA90A > หมายเลขหลัก : " + data[i].code + "</font><br>";
                  text1 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > บริเวณที่ตั้ง : "+ data[i].place_detail+"</font><br>";
                  text2 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > ระดับน้ำท่วม : "+ data[i].water_level+" เซนติเมตร</font><br>";
                  text3 ="<font style=\"font-family: 'Mitr';\" size=\"2\"COLOR=#466DF3 > โครงสร้างที่ทำเครื่องหมาย : "+ checkname(data[i].tool) +" "+ checkname(data[i].tool_detail)+ "</font><br>";
                  // text3 = '<br><img src="{{ asset('') }}' + data[i].image[0].image_path + '" width="100%" >';
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
      
      addPin(station1,mo);

      var baseTree = {
          label: 'BaseLayers',
          noShow: true,
          children: [  {label: ' แผนที่ภูมิประเทศ (Streets)', layer: osm},
                       {label: ' แผนที่ภาพถ่ายผ่านดาวเทียม (Satellite)', layer: osmBw},
          ]
        };
        var ctl = L.control.layers.tree(baseTree, null);
        ctl.addTo(map).collapseTree().expandSelected();
    </script>

  
    <!-- End Map  -->
  </body>

</html>
