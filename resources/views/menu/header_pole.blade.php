
<style>
    .circle{
        width: 1.6em;
        text-align: center;
        line-height: 1.6em;
    }
    .bg-img {
        /* background-image: url(images/banner/head.png); */
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
    padding: 5px;
}

.navbar-logo {
    display: flex;
    align-items: left;
    gap: 10px; /* ระยะห่างระหว่าง mobile-menu และข้อความ */
}

.mobile-menu {
    font-size: 24px;
    color:rgb(255, 255, 255); /* สีของไอคอน */
    text-decoration: none;
}

.navbar-logo span {
    font-size: 18px;
    margin: 0;
    color:rgb(255, 255, 255); /* สีของข้อความ */
}

</style>


<nav  class="navbar header-navbar pcoded-header "  pcoded-header-position="fixed">
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
