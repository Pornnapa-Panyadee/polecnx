
<style>
    .pcoded-mtext{
        font-size: 20px;
    }
</style>
<nav class="pcoded-navbar" >
    <div class="pcoded-inner-navbar">
        <ul class="pcoded-item">
            <li>
                <a href="{{ asset('/pole') }}" >
                    <span class="pcoded-mtext"><i class="feather icon-flag"></i> หลักระดับน้ำท่วม</span>
                </a>
            </li>
            <li >
                <a href="{{ asset('/floodmap') }}" >
                    <span class="pcoded-mtext"><i class="feather icon-map"></i> แผนที่เสี่ยงภัยน้ำท่วม</span>
                </a>
            </li>
            <li>
                <a href="{{ asset('/flood24') }}" >
                    <span class="pcoded-mtext"><i class="feather icon-droplet"></i> เครื่องหมายระดับน้ำท่วมเมืองเชียงใหม่</span>
                </a>
            </li>
        </ul>
    </div>
</nav>