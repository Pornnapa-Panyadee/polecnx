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
        width: 50%;
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
                                    <h3>หมุดน้ำท่วม 2567 (Flood Mark 2024)</h3><br>
                                    <h1>บันทึกข้อมูลเรียบร้อย!</h1><br>
                                    <a href="{{ url('/flood24/admin/form')}}"><h3><button class="btn btn-primary text">กรอกข้อมูลหมุดน้ำท่วมเพิ่ม</button></h3></a>
                                    <a href="{{ url('/flood24/admin/table')}}"><h3><button class="btn btn-success text">ตารางสรุปข้อมูล</button></h3></a><br>
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
