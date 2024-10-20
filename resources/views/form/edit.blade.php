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
        font-size: 18px;
      }
      .topnav-right {
        float: right;
        font-size: 20px;
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
                        <div class="col-md-10 mx-auto  justify-content-center">
                          <div class="card table-card">
                            <div class="card-header">
                              <div class="topnav-right">
                                <div> <a href="{{ url('/flood24/table')}}"><button class="btn btn-success">ตารางสรุปข้อมูล</button></a></div>
                              </div>
                                 <div class="container mt-2" >
                                    
                                    <h3>หมุดน้ำท่วม 2567 (Flood Mark 2024)</h3>
                                    <h4>หมายเลขหลัก {{$data[0]['code']}}</h4> 
                                    
                                    <hr></hr>
                                    <h3> 	&#9830; แก้ไขข้อมูล </h3>
                                    <form action="{{route('floodmark.update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                         <input type="hidden" name="code" id="code"  value="{{$data[0]['code']}}">

                                        <div class="text-h2">ตำแหน่งบริเวณน้ำท่วม</div>
                                        <div class="form-check mb-3">
                                          <div class="row" style="margin-left: 15px;" >
                                            <div class="col-md-12 col-xl-2">
                                              <input class="text" type="radio" id="home" name="affected_area" value="บ้าน" {{ $data[0]['affected_area'] == "บ้าน" ? 'checked' : '' }} >
                                              <label class="text" for="home">บ้าน/ที่อยู่อาศัย</label>
                                            </div>
                                            <div class="col-md-12 col-xl-3">
                                              <input class="text" type="radio" id="residential" name="affected_area" value="สถานที่" {{ $data[0]['affected_area'] == "สถานที่" ? 'checked' : '' }}>
                                              <label class="text" for="residential">สำนัก/สถานที่สำคัญ</label>
                                            </div>
                                            <div class="col-md-12 col-xl-2">
                                              <input class="text" type="radio" id="agricultural" name="affected_area" value="พื้นที่การเกษตร" {{ $data[0]['affected_area'] == "พื้นที่การเกษตร" ? 'checked' : '' }} >
                                              <label class="text" for="agricultural">พื้นที่การเกษตร</label>
                                            </div>
                                            <div class="col-md-12 col-xl-1">
                                              <input class="text" type="radio" id="road" name="affected_area" value="ถนน" {{ $data[0]['affected_area'] == "ถนน" ? 'checked' : '' }}>
                                              <label class="text" for="road">ถนน</label>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                <div class="align-items-center">
                                                    <input class="text" type="radio" id="other" name="affected_area" value="อื่นๆ" {{ $data[0]['affected_area'] == "อื่นๆ" ? 'checked' : '' }}>
                                                    <label class="text" for="other"> อื่นๆ </label>
                                                    <input type="text"  class="text" id="other_detail" name="other_detail" placeholder="โปรดระบุ" value="{{ $data[0]['other_detail'] }}">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="row" style="margin-left: 35px;" >
                                            <label for="road_number" class="form-label">กรอกข้อมูลตำแหน่งที่ตั้งอย่างละเอียด</label>
                                            <input type="text" class="form-control" id="place_detail" name="place_detail" value=" {{$data[0]['place_detail']}}" placeholder="ชื่อสถานที่ / บ้านเลขที่ ซอย หมู่บ้าน ตำบล  อำเภอ จังหวัด" required>
                                          </div>
                                        </div>
                                        <!-- Location Input -->
                                        <div class="text-h2">พิกัดบริเวณน้ำท่วม</div>
                                        <!-- Location Input -->
                                        <div class="row">
                                          <div class="col-md-12 col-xl-8">
                                            <input type="text" class="form-control" id="location" name="location" placeholder="กรอกพิกัด หรือ กดปุ่มเพื่อรับพิกัด หรือ เลือกพิกัดจากแผนที่" value="{{$data[0]['latitude']}},{{$data[0]['longitude']}}"  required>
                                            
                                          </div>
                                          <div class="col-md-12 col-xl-4">
                                            <button type="button" class="btn btn-primary" onclick="getLocation()">Get GPS Location</button>
                                          </div>
                                        </div>
                                        <!-- Hidden inputs to store latitude and longitude -->
                                        <input type="hidden" id="latitude" name="latitude" value="{{$data[0]['latitude']}}">
                                        <input type="hidden" id="longitude" name="longitude" value="{{$data[0]['longitude']}}">
                                        <!-- Map to Show Location -->
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12">
                                              <div id="map"></div>
                                            </div>
                                        </div>

                                        <!-- สถานที่ใกล้เคียง / สถานที่สำคัญ -->
                                        <div class="text-h2">สถานที่ใกล้เคียง / สถานที่สำคัญ</div>
                                        <div class="row">
                                          <div class="col-md-12 col-xl-12">
                                            <input type="text" class="form-control" id="place_around" name="place_around" placeholder="กรอกสถานที่ใกล้เคียง / สถานที่สำคัญ" value="{{$data[0]['place_around']}}" >
                                          </div>
                                        </div>

                                        <!-- ระดับน้ำท่วม -->
                                        <div class="text-h2">ระดับน้ำท่วม (เซนติเมตร)</div>
                                        <div class="row">
                                          <div class="col-md-12 col-xl-12">
                                            <input type="number" class="form-control" id="water_level" name="water_level" placeholder="กรอกระดับน้ำท่วม (หน่วย: เซนติเมตร)" value="{{$data[0]['water_level']}}" required>
                                          </div>
                                        </div>

                                        <!-- โครงสร้างที่ทำเครื่องหมาย -->
                                        <div class="text-h2">โครงสร้างที่ทำเครื่องหมาย</div>
                                        <!-- <div class="row">
                                          <div class="col-md-12 col-xl-12">
                                            <input type="text" class="form-control" id="tool" name="tool" placeholder="กรอกโครงสร้างที่ทำเครื่องหมาย"  value="{{$data[0]['tool']}}"  required>
                                          </div>
                                        </div> -->
                                        <div class="form-check mb-3">
                                            <div class="row" >
                                              <div class="col-md-12 col-xl-2">
                                                <input class="text" type="radio" id="wall" name="tool" value="กำแพง/รั้ว" {{ $data[0]['tool'] == "กำแพง/รั้ว" ? 'checked' : '' }}>
                                                <label class="text" for="wall">กำแพง/รั้ว</label>
                                              </div>
                                              <div class="col-md-12 col-xl-2">
                                                <input class="text" type="radio" id="pole" name="tool" value="เสาไฟ" {{ $data[0]['tool'] == "เสาไฟ" ? 'checked' : '' }}>
                                                <label class="text" for="pole">เสาไฟ</label>
                                              </div>
                                              <div class="col-md-12 col-xl-2">
                                                <input class="text" type="radio" id="bridge" name="tool" value="หัวสะพาน" {{ $data[0]['tool'] == "หัวสะพาน" ? 'checked' : '' }}>
                                                <label class="text" for="bridge">หัวสะพาน</label>
                                              </div>                                              
                                              <div class="col-md-12 col-xl-4">
                                                  <div class="align-items-center">
                                                      <input class="text" type="radio" id="tool_other" name="tool" value="อื่นๆ" {{ $data[0]['tool'] == "อื่นๆ" ? 'checked' : '' }}>
                                                      <label class="text" for="tool_other"> อื่นๆ </label>
                                                      <input type="text"  class="text" id="tool_detail" name="tool_detail" placeholder="โปรดระบุ" value="{{ $data[0]['tool_detail']}}" >
                                                  </div>
                                              </div>
                                            </div>
                                          </div>

                                        <div class="text-h2">อัพโหลดรูปภาพเพิ่ม (สามารถอัพโหลดมากกว่า 1 รูป)</div>
                                        <!-- File Input for Image -->
                                        <div class="row">
                                          <div class="col-md-12 col-xl-12">
                                            <input type="file" class="form-control" id="image" name="image[]" accept="image/*" capture="camera" multiple>
                                          </div>
                                        </div>

                                        <!-- Image Preview Section -->
                                        <div id="imagePreview" class="row"></div>

                                        <!-- หมายเหตุ -->
                                        <div class="text-h2">หมายเหตุ </div>
                                        <div class="row">
                                          <div class="col-md-12 col-xl-12">
                                            <textarea class="form-control" id="note" name="note" rows="4" placeholder="กรอกหมายเหตุเพิ่มเติม" value=" {{$data[0]['note']}}" ></textarea>
                                          </div>
                                        </div>
                                        <!-- Submit Button -->
                                        <br>
                                        <div class="row" >
                                          <div class="col-md-12 col-xl-12">
                                            <button type="submit" class="btn btn-primary text">อัปเดตข้อมูล</button>
                                          </div>
                                        </div>
                                        
                                    </form>


                                    <br>
                                    <h3> 	&#9830;แก้ไข/ลบ รูปภาพ </h3>
                                        <!-- File Input for Image -->
                                         <div class="row">
                                            @foreach ($image as $image)
                                                <div class="col-md-3 position-relative">
                                                    <img src="{{ asset($image->image_path) }}" alt="รูปภาพ" class="img-thumbnail" style="width: 100%; height: auto;">
                                                    
                                                    <a href='{{ asset('/photoremove') }}/{{$image->id}}'  > 
                                                        <button class="btn waves-effect " onclick="myFunction()" title="delete">
                                                        <i class="feather icon-trash-2"> ลบ</i>
                                                        </button>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <br>

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
    
  <script>
      function myFunction() {
        confirm("คุณต้องการลบรูปฝายใช่ไหม?");
      }
  </script>
  <!-- Leaflet JS -->
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  <script>
      var map;
      var marker;

      function initMap(latitude = 18.787481138487713 , longitude = 99.00445461273193) {
          // Set default location to Bangkok
          var defaultLocation = [latitude, longitude];

          map = L.map('map').setView(defaultLocation, 15);

          // Use Google Maps Tile Layer with your API Key
          var googleStreets = L.tileLayer('https://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}&hl=en&gl=en&key=YOUR_GOOGLE_MAPS_API_KEY', {
              maxZoom: 19,
          }).addTo(map);

          // Add marker to default location
          marker = L.marker(defaultLocation).addTo(map);

          // Enable click event on the map
          map.on('click', function(e) {
              var lat = e.latlng.lat;
              var lng = e.latlng.lng;

              // Update the latitude and longitude input fields
              document.getElementById('latitude').value = lat;
              document.getElementById('longitude').value = lng;
              document.getElementById('location').value = `${lat}, ${lng}`;

              // Update the marker position
              if (marker) {
                  marker.remove(); // Remove existing marker
              }

              // Add new marker at the clicked position
              marker = L.marker([lat, lng]).addTo(map);
          });
      }

      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition, showError);
          } else {
              alert("Geolocation is not supported by this browser.");
          }
      }

      function showPosition(position) {
          var latitude = position.coords.latitude;
          var longitude = position.coords.longitude;

          document.getElementById('latitude').value = latitude;
          document.getElementById('longitude').value = longitude;
          document.getElementById('location').value = `${latitude}, ${longitude}`;

          // Update map with the user's location
          var userLocation = [latitude, longitude];
          map.setView(userLocation, 15);

          if (marker) {
              marker.remove(); // Remove existing marker
          }

          // Add new marker for user's location
          marker = L.marker(userLocation).addTo(map);
      }

      function showError(error) {
          switch(error.code) {
              case error.PERMISSION_DENIED:
                  alert("User denied the request for Geolocation.");
                  break;
              case error.POSITION_UNAVAILABLE:
                  alert("Location information is unavailable.");
                  break;
              case error.TIMEOUT:
                  alert("The request to get user location timed out.");
                  break;
              case error.UNKNOWN_ERROR:
                  alert("An unknown error occurred.");
                  break;
          }
      }

      // Initialize map on page load
      window.onload = function() {
          initMap();
      };
  </script>
  <script>
    document.getElementById('image').addEventListener('change', function(event) {
      var imagePreview = document.getElementById('imagePreview');
      imagePreview.innerHTML = ''; // Clear any previous images
      
      const files = event.target.files;

      for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
          const imgElement = document.createElement('img');
          imgElement.src = e.target.result;
          imgElement.style.maxWidth = '200px'; // Adjust the size of the preview
          imgElement.style.margin = '10px';
          imagePreview.appendChild(imgElement);
        }

        reader.readAsDataURL(file);
      }
    });
  </script>

</body>
</html>
