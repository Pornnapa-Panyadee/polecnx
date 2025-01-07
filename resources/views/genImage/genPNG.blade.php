<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>CM Flood Mark 2024 : เครื่องหมายระดับน้ำท่วมเมืองเชียงใหม่ ปี 2567</title>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <style>
        .container1 {
            width: 100%;
            position: relative;
            align-items: center;
        }

        .header {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            background-color: #bce0ff;
        }

        .content {
            display: flex;
            justify-content: space-between;
            background-color: #bce0ff;
            border-style: solid;
            border-color: rgb(8, 8, 8);
            border-width: 0 2px 2px 2px;
            align-items: center;
        }

        .logo {
            margin-top: 40px;
            margin-left: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            text-align: center;
        }

        .logo img {
            width: 98%;
        }

        .details {
            width: 85%;
            font-size: 18px;
            border-style: solid;
            border-color: rgb(8, 8, 8);
            border-width: 0 0 0 2px;
        }

        .details ul {
            list-style: none;
            padding: 0;
        }

        .details ul li {
            margin-bottom: 10px;
        }

        .top-row {
            display: flex;
            flex-direction: row;
            border-style: solid;
            border-color: rgb(8, 8, 8);
            border-width: 2px;
        }

        .top-row img {
            margin: 5px 0 5px 5px;
            width: 49.4%;
        }

        table {
            margin-left: 15px;
            vertical-align: top;
        }

        .levelwater {
            font-size: 48px;
            text-align: right;
        }

        td {
            display: table-cell;
            vertical-align: top;
            unicode-bidi: isolate;
        }

        .leveltable {
            margin-top: -10px;
            margin-left: 80px;
        }

        .download-btn {
            margin-top: 0px;
            text-align: center;
        }

        .download-btn button {
            font-size: 18px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .download-btn button:hover {
            background-color: #45a049;
        }

        td {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
            padding-left: 10px; 
            
        }
    </style>
</head>

<body class="horizontal-icon-fixed">
    @yield('content')

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>

        <div class="pcoded-container navbar-wrapper">
            @include('menu.header_pole')
            @include('menu.slidebar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-content">
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
                                                                <center>
                                                                    <h3>เครื่องหมายระดับน้ำท่วมเขตตัวเมืองเชียงใหม่ ปี 2567 (CM Flood Mark 2024)<br>
                                                                        รหัส : {{$data[0]['code']}}</h3>
                                                                </center>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 col-xl-2"></div>
                                                            <div class="col-md-12 col-xl-8">
                                                                <div class="container1" id="capture">
                                                                    <div class="top-row">
                                                                        <?php 
                                                                        for($i = 0; $i < 2; $i++) {  
                                                                            if (!empty($image[$i]['image_path'])) { 
                                                                        ?>
                                                                            <img src="{{ asset($image[$i]['image_path']) }}">
                                                                        <?php 
                                                                            } else { 
                                                                        ?>
                                                                            <div style="width: 49.4%; height: 400px;"></div>
                                                                        <?php 
                                                                            } 
                                                                        } 
                                                                        ?>
                                                                    </div>
                                                                    <div class="content">
                                                                        <div class="logo">
                                                                            <img src="{{ asset('/images/logo/cmu01.png') }}">
                                                                        </div>
                                                                        <div class="details">
                                                                            <div class="header">
                                                                                เครื่องหมายระดับน้ำท่วมตัวเมืองเชียงใหม่ เดือนตุลาคม พ.ศ. 2567<br>
                                                                                Chiangmai Flood Mark Oct. 2024
                                                                            </div>
                                                                            <br>
                                                                            <table>
                                                                                <tr>
                                                                                    <td width=55%>
                                                                                        &#9900; หมายเลขพิกัด {{$data[0]['code']}}<br>
                                                                                        &#9900; โครงสร้างที่ทำเครื่องหมาย : {{$data[0]['tool']}}<br>
                                                                                        &#9900; ที่ติดตั้ง : {{$data[0]['place_detail']}} <br>
                                                                                        &#9900; พิกัด : {{$data[0]['latitude']}},{{$data[0]['longitude']}}
                                                                                    </td>
                                                                                    <td>
                                                                                        &#9900; เทียบกับระดับน้ำปิงสถานี P.1 = 5.30 น.<br>
                                                                                        &#9900; ระดับน้ำท่วมสูงจากผิวถนน<br>
                                                                                        <table class="leveltable">
                                                                                            <tr>
                                                                                                <td width=75%><font class="levelwater">{{$data[0]['water_level']}}</font></td>
                                                                                                <td style="vertical-align: bottom;">ซม.</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                        &#9900; วันที่ถ่ายภาพ {{$data[0]['date_survey']}}
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xl-2"></div>
                                                        </div>

                                                        <br>
                                                        <div class="download-btn">
                                                            <button onclick="downloadImage()">Download as JPG</button>
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
    <script src="{{ asset('js/form/jquery-i18next.min.js')}}"></script>
    <script src="{{ asset('js/form/pcoded.min.js')}}"></script>
    <script src="{{ asset('js/form/menu-hori-fixed.js')}}"></script>
    <script src="{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/form/script.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script src="{{ asset('js/form/buttons.print.min.js')}}"></script>
    <script src="{{ asset('js/form/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('js/form/jquery.mcustomscrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/form/rocket-loader.min.js')}}" data-cf-settings="ce2668daaac54a74e9f6cdff-|49" defer=""></script>

    <script>
        function downloadImage() {
            const container = document.getElementById("capture");
            html2canvas(container).then((canvas) => {
                const link = document.createElement("a");
                link.download = "flood_mark.jpg";
                link.href = canvas.toDataURL("image/jpeg", 1.0);
                link.click();
            });
        }
    </script>
</body>

</html>