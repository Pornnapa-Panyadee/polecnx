
<style>
    .circle{
        width: 1.6em;
        text-align: center;
        line-height: 1.6em;
    }
    .bg-img {
        background-image: url(images/banner/head.png);
         /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        /* Needed to position the navbar */
        position: relative;
    }
</style>
<style>
/* General Styles */
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
}

.navbar-logo {
    display: flex;
    align-items: left;
    gap: 10px; /* ระยะห่างระหว่าง mobile-menu และข้อความ */
}

.mobile-menu {
    font-size: 24px;
    color: #007bff; /* สีของไอคอน */
    text-decoration: none;
}

.navbar-logo span {
    font-size: 18px;
    margin: 0;
    color: #004080; /* สีของข้อความ */
}

/* Responsive Design */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar-logo {
        justify-content: flex-start;
        width: 100%;
    }

    .navbar-logo span {
        font-size: 16px;
    }
}
</style>


<!-- <nav class="navbar header-navbar pcoded-header" style="background-image: url(images/banner/head.png);">
    <div class="navbar-wrapper" >
        <div class="navbar-logo" > 
            <a href="{{ asset('/') }}">  
            <h3 >ระบบสารสนเทศเตรียมรับมือน้ำท่วม เขตตัวเมืองจังหวัดเชียงใหม่ <h3></a>
             <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="fa fa-reorder"></i>
                </a>
            
        </div>
    </div>
</nav> -->
<!-- <nav class="navbar header-navbar pcoded-header" style="background-image: url(images/banner/head.png);">
    <div class="navbar-wrapper">
        <div class="navbar-logo"> 
            <a class="mobile-menu" id="mobile-collapse" href="#!"> <i class="fa fa-reorder"></i></a>
            <a href="{{ asset('/') }}">  <h3> ระบบเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมในพื้นที่เขตตัวเมืองเชียงใหม่</h3> </a>
            
        </div>
       
    </div>
</nav> -->
<nav  class="navbar header-navbar pcoded-header " style="background-image: url(images/banner/head.png);" pcoded-header-position="fixed">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="fa fa-reorder"></i>
            </a>
            <a href="{{ asset('/') }}">
                <span>ระบบเตรียมความพร้อมเพื่อรับมือภัยน้ำท่วมในพื้นที่เขตตัวเมืองเชียงใหม่</span>
            </a>
            
        </div>
    </div>
</nav>
