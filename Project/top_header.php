<style>
.dropdown button {
    background-color: rgb(2, 66, 130);
 
}

.dropdown i {
    background-color: rgb(138, 130, 70);

}

.search input {
    background-color: rgb(1, 43, 100);
    height: 40px;
}

.search form button {
    background-color: rgb(138, 130, 70);

}

form {
    margin-left: 180px;
}

nav {
    margin-left: 60px;
}

#hotline a,
#hotline div {
    /* text-align: center; */
    margin-top: 5px;

}


#hnav {
    margin-top: 7px;
}

header {
    height: 40px;
}

/* style="margin-left: 100px;" form */
</style>


<body>

    <header>

        <!-- 0912.298.300 - 0914.298.300 : SDT2 -->
        <div class="container">
            <div class="row">

                <div class="d-lg-flex justify-content-md-start" id="hotline">

                    <div class="hotline mb-0 text-md-left bn-bordernone bn-default" id="phoneList"
                        style="display: flex;">
                        <div class="">Hotline: </div>
                        &nbsp;<a href="tel:0902.298.300">0902.298.300&nbsp;-&nbsp;</a>
                        <a href="tel:0906.298.300">0906.298.300</a>
                    </div>

                    <nav class="col-lg-8 " id="hnav">
                        <ul class="d-lg-flex justify-content-sm-between">
                            <li class="nav-item">
                                <a href="#">SINH VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">GIẢNG VIÊN</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">ĐÀO TẠO QUỐC TẾ</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="search-wrapper d-flex justify-content-between">
                    <div class="search">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control btn-transparent border-0" placeholder="Search"
                                    name="keyword">
                                <span class="input-group-btn">
                                    <button class="btn btn-transparent btn-secondary border-0">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="language">
                        <div class="dropdown">
                            <button class="btn btn-transparent btn-sm" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                                <span><img src="picture/english.jpg" alt=""></span>
                                <i class="fa fa-angle-down ml-1 mt-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="picture/vietnam.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>