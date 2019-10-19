<style>
.h-nav li a span {
    /* justify-content: space-around; */
    padding-left: 10px;
    color: blue;
    /* font-size: 15px; */
}

.h-nav a span:hover {
    color: burlywood;
}

.main-header {
    display: flex;
}

#link span {
    font-size: 15px;
}

#link a {
    /* justify-content: space-around; */
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}

#link a:hover {
    color: burlywood;
    text-decoration: none;
}
</style>
<div class="header" style="box-shadow: 0 1px 1px rgba(0,0,0,0.15);">
    <div class="container">
        <div class="d-flex align-items-center py-2">
            <h1 class="logo m-0">
                <a href="#"><img src="picture/logo.png" alt="" style="height: 70px !important;"></a>
            </h1>

            <div class="w-100 hidden-md-down" id="link">
                <ul class="h-nav list-unstyled mb-0 d-flex align-items-center">
                    <!-- style="margin-left: 30px;" -->
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <!-- align-items-center căn các mục thẻ div inh hoạt -->
                            <span class="bdr-round"><i class="fa fa-info-circle"></i> Giới thiệu</span>
                            <!-- <span class="txt">Giới thiệu</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <span class="bdr-round"><i class="fa fa-graduation-cap"></i> Tuyển sinh</span>
                            <!-- <span class="txt">Tuyển sinh</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <span class="bdr-round"><i class="fa fa-book"></i> Đào tạo</span>
                            <!-- <span class="txt">Đào tạo</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <span class="bdr-round"><i class="fa fa-bookmark"></i> Nghiên cứu</span>
                            <!-- <span class="txt">Nghiên cứu</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex align-items-center">
                            <span class="bdr-round"><i class="fa fa-handshake-o"></i> Hợp tác doanh nghiệp</span>
                            <!-- <span class="txt">Hợp tác doanh nghiệp</span> -->
                        </a>
                    </li>
                    <!-- /h-nav -->
                </ul>
            </div>
            <!-- /d-flex -->
        </div>
        <!-- <button type="button" class="btn btn-gnav" id="menu-trigger" data-trigger="#menu"><i class="fa fa-bars c-blue-a5"></i></button> -->
        <!-- /container -->
    </div>
    <!-- /header -->
</div>