<style>
/* Tin tức */
.thumbnail img {
    width: 100%;

}

.post-home .thumbnail {
    display: block;
    overflow: hidden;
    max-height: 152px;
}

.thumbnail {
    text-decoration: underline;

}

.list-unstyled a:hover {
    text-decoration: solid;
}

.heading a,
.row a,
.post-video a {
    color: black;
}

.heading a:hover {
    text-decoration: none;
}

#xemthem1,
#xemthem2 {
    color: blue;
}

#xemthem1:hover {
    text-decoration: underline;

}

/* Thành tựu */
.multi-slide {
    margin-top: 0;
}

.multi-slide .slide {
    /* !important ghe đè */
    background-position: center !important;
    /* repeate số lần lặp ảnh */
    background-repeat: no-repeat !important;
    background-size: 132px !important;
    width: 30%;
    height: 360px;
}

.multi-slide .slide .caption {
    padding: 160px 15% 15px;
    /* overflow: Hiện thị khi bị tràn */
    overflow: hidden;
    color: white;
}

.sub-slider .bx-wrapper .bx-controls-direction a {
    background-image: none;
    color: #d3d3d3;
    font-size: 24px;
    text-align: center;
    text-indent: 0;
    z-index: 1;
}

.sub-slider .title-carousel {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
    position: absolute;
    padding-left: 15px;
    padding-right: 15px;
    top: 30px;
    width: 100%;
    z-index: 2;
    color: #aa914d;
}

.sub-slider .title-carousel:before {
    background-color: #aa914d;
    content: "";
    display: block;
    position: absolute;
    height: 2px;
    left: 50%;
    margin-left: -25px;
    bottom: -20px;
    width: 50px;
}

.border {
    border: 1px solid #d7d7d7;

}

.border-top {
    border-top: 1px solid #d7d7d7;
}

.border-bottom {
    border-bottom: 1px solid #d7d7d7;
}

.border-bottom {
    border-bottom: 1px solid #e0e0e0;
}

.sub-slider {
    position: relative;
    background-color: rgb(2, 66, 130);

}

.bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager {
    text-align: left;
    width: 80%;
}

.bx-wrapper .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto {
    right: 0;
    width: 35px;
}

.sub-slider .next {
    /* position: absolute; */
    /* position: unset; */
    /* top: 50%; */
    right: 20px;
    color: white;
    cursor: pointer;
}

.sub-slider .prev {
    /* position: unset; */
    /* position: absolute; */
    top: 50%;
    left: 20px;
    color: white;
    cursor: pointer;
}

.caption a {
    font-size: 24px;
}
</style>
<!-- Tin tức -->
<div class="d-md-flex section mt-4">
    <div class="col-md-9">
        <h2 class="heading"><a href="#">Tin tức</a></h2>
        <div class="row">
            <article class="col-md-4 col-sm-6 post-home">
                <a class="thumbnail" href="#">
                    <img src="picture/tintuc1.jpg" class="rounded col-sm-12 " alt="">
                </a>
                <a href="#" class="title" style="overflow: hidden; height: 65px;">Đào tạo nguồn nhân lực du lịch: Đã
                    đến lúc phải để cho sinh viên tự làm</a>
                <div class="content">
                    <p>Hiện nay, nhiều trường, cơ sở đào tạo các ngành về dịch vụ du lịch vẫn đang chú trọng quá nhiều
                        vào đào tạo lý thuyết mà ít có thực hành… đúng nghĩa. Đây cũng là điều hạn chế xưa nay, đã
                        được bàn - nói đến rất nhiều.</p>
                </div>
            </article>
            <article class="col-md-4 col-sm-6 post-home">
                <a class="thumbnail" href="#">
                    <img src="picture/tintuc2.jpg" class="rounded col-sm-12 " alt="">
                </a>
                <a href="#" class="title" style="overflow: hidden; height: 65px;">Giảng viên ĐH Nguyễn Tất Thành lọt
                    vào top 1% các nhà bình duyệt từ Việt Nam</a>
                <div class="content">
                    <p>NTTU - Vừa qua, Global Peer Review Awards 2019 đã công bố 10 nhà bình duyệt xuất sắc nhất,
                        trong đó có đại diện đến từ Trường ĐH Nguyễn Tất Thành, TS. Võ Nguyễn Đại Việt. Kết quả này là
                        sự ghi nhận của Global Peer Review Awards
                        dành cho những nhà khoa học xuất sắc có sự đóng góp ý nghĩa cho sự phát triển của khoa học và
                        công nghệ của nhân loại</p>
                </div>
            </article>
            <article class="col-md-4 col-sm-6 post-home">
                <a class="thumbnail" href="#">
                    <img src="picture/tintuc3.png" class="rounded col-sm-12 " alt="">
                </a>
                <a href="#" class="title" style="overflow: hidden; height: 65px;">ĐH Nguyễn Tất Thành tuyển sinh liên
                    thông các ngành đào tạo</a>
                <div class="content">
                    <p>NTTU - ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo...</p>
                </div>
            </article>
        </div>
        <ul class="list-unstyled" style="float: right;">
            <li><a class="c-blue-a5 font-weight-bold" href="#" id="xemthem1"><i
                        class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
        </ul>
    </div>
    <div class="col-md-3">
        <h2 class="heading">Media</h2>
        <article class="post-video" style="width: inherit">
            <iframe style="width: inherit;" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0"
                allowfullscreen=""></iframe>
            <div class="description">
                <ul class="list-style-1">
                    <li><i class="fa fa-angle-right"></i><a href="#">&nbsp;&nbsp;ĐIỂM
                            TIN THÁNG 8</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">&nbsp;&nbsp;ĐH
                            Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#">&nbsp;&nbsp;NỎ THẦN
                            - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a></li>
                </ul>
                <a class="c-blue-a5 font-weight-bold row justify-content-end align-items-center m-0" href="#"
                    id="xemthem2"><i class="fa fa-chevron-circle-right mr-2"></i>Xem thêm</a>
            </div>
        </article>
    </div>
</div>
<!-- Thành tựu của trường -->
<!-- <script src="js/script.js"></script> -->
<div class="section sub-slider">
    <h3 class="title-carousel">
        <b>TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH?</b>
    </h3>

    <i class="fa fa-chevron-left prev"></i>
    <i class="fa fa-chevron-right next"></i>


    <div class="bx-wrapper" style="margin: 0px auto;">
        <div class="multi-slide">

            <div class="slide d-flex justify-content-center"
                style="background-image: url('picture/daihochanhphuc.svg'); position: relative; width: 400px;">
                <div class="caption text-center">
                    <p class="highlight">
                        <a href="#" style="text-decoration: none;  color: inherit">Đại học hạnh phúc</a>
                    </p>
                    <p class="line">Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh viên
                        với 5 giá trị nổi bật</p>
                </div>
            </div>
            <div class="slide d-flex justify-content-center"
                style="background-image: url('picture/top10thuonghieu.svg'); position: relative; width: 400px;">
                <div class="caption text-center">
                    <p class="highlight">
                        <a href="#" style="text-decoration: none;  color: inherit">Top 10 thương hiệu nổi tiếng</a>
                    </p>
                    <p class="line">Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công tác
                        quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác hợp tác quốc tế,
                        công tác sinh viên.</p>
                </div>
            </div>
            <div class="slide d-flex justify-content-center"
                style="background-image: url('picture/sinhvientotnghiem.svg'); position: relative; width: 400px;">
                <div class="caption text-center">
                    <p class="highlight">
                        <a href="#" style="text-decoration: none;  color: inherit">95% sinh viên tốt nghiệp có việc
                            làm</a>
                    </p>
                    <p class="line">Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu giáo
                        dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập tích cực và trải
                        nghiệm thực tiễn cho sinh viên.</p>
                </div>
            </div>
            <div class="slide d-flex justify-content-center"
                style="background-image: url('picture/chuan3sao.svg'); position: relative; width: 400px;">
                <div class="caption text-center">
                    <p class="highlight">
                        <a href="#" style="text-decoration: none; color: inherit">Chuẩn 3 sao QS-Stars (Anh Quốc)</a>
                    </p>
                    <p class="line">Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng đầu
                        dành cho các trường đại học trên thế giới.</p>
                </div>
            </div>
            <div class="slide d-flex justify-content-center"
                style="background-image: url('picture/chatluongquocgia.svg'); position: relative; width: 400px;">
                <div class="caption text-center">
                    <p class="highlight">
                        <a href="#" style="text-decoration: none; color: inherit">Đạt chuẩn chất lượng quốc gia</a>
                    </p>
                    <p class="line">Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất lượng
                        theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
                </div>
            </div>
        </div>
        <!-- <div class="bx-controls bx-has-controls-direction">
            <div class="bx-controls-direction">
                <span><a class="bx-prev" href="#">
                    <i class="fa fa-angle-left" aria-hidden="true" style="position: unset;"></i></a></span>
                <span><a class="bx-next" href="#">
                    <i class="fa fa-angle-right" aria-hidden="true" style="position: unset;"></i></a></div></span>
        </div> -->
    </div>

</div>
<script>
$(document).ready(function() {
    $('.multi-slide ').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        nextArrow: $(".next"),
        prevArrow: $(".prev"),
    });
});
</script>