<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
</head>

<body>
    <div class="wrapper">
        <section id="top-nav" class="container-fluid section-blob">
            <img class='img-fluid' id="slogan" src="../images/top-nav-img.jpg" alt="top-nav-img">
            <div class="container clearfix">
                <nav id="top-menu" class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler text-center" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="menu-list navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="home.php">Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Giới thiệu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Về chúng tôi</a>
                                    <a class="dropdown-item" href="#">Hình thức mua hàng</a>
                                    <a class="dropdown-item" href="#">Hình thức thanh toán</a>
                                    <a class="dropdown-item" href="#">Chính sách bảo mật</a>
                                    <a class="dropdown-item" href="#">Tư vấn</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Máy lọc nước Hydrogen</a>
                                    <a class="dropdown-item" href="#">Máy lọc nước RO Kangaroo</a>
                                    <a class="dropdown-item" href="#">Lọc đầu nguồn - Lọc tinh khiết</a>
                                    <a class="dropdown-item" href="#">Cây nóng lạnh Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tủ đông - Tủ mát Kangaroo</a>
                                    <a class="dropdown-item" href="#">Quạt điều hòa Kangaroo</a>
                                    <a class="dropdown-item" href="#">Gia dụng Kangaroo</a>
                                    <a class="dropdown-item" href="#">Thiết bị mùa đông Kangaroo</a>
                                    <a class="dropdown-item" href="#">Thiết bị nhà bếp Kangaroo</a>
                                    <a class="dropdown-item" href="#">Thiết bị vệ sinh Kangaroo</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Khuyến mãi & Sự kiện</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tin tức
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Tư vấn Máy lọc nước Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tư vấn và thay thế Lõi lọc Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tư vấn Cây nước nóng lạnh Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tư vấn Thiết bị mùa đông Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tư vấn Tủ đông, tủ mát Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tư vấn Mặt hàng gia dụng Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tư vấn Thiết bị nhà bếp Kangaroo</a>
                                    <a class="dropdown-item" href="#">Tin thời sự Kangaroo</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tài khoản</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đăng ký</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <section id="tool-top" class="section-blob container clearfix pt-3">
            <div class="row">
                <div id="logo" class="col-12 col-md-3">
                    <a href="#" class="link-logo"><img class="img-logo img-fluid" src="../images/logo.png"
                            alt="logo"></a>
                </div>
                <div id="search-cart" class="col-md-9 col-12">
                    <div class="row">
                        <div class="input-group pt-2 col-sm-5">
                            <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Searching"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="input-group-text btn-search" id="basic-addon2">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="shop-cart col-sm-2 pt-2">
                            <img src="../images/cart_bg.png" alt="cart-icon">
                            <span class="badge badge-success count-item">1</span>
                        </div>
                        <div class="guarantee col-sm-3 pt-2">
                            <img class="img-fluid" src="../images/baohanh.jpg" alt="bao-hanh">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='container' id='slider'>
            <div class="row">
                <div class="col-sm-3">
                    <button type="button" class="btn btn-block btn-warning text-light font-weight-bold"
                        data-toggle="collapse" data-target="#demo">DANH MỤC SẢN PHẨM</button>
                    <div id="demo" class="list-group collapse">
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/may_loc_nuoc.png" alt="may loc nuoc hydrogen"> Máy lọc nước Hydrogen</a>
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/loc_dau_nguon.png" alt="loc dau nguon - loc tinh khiet"> Lọc đầu nguồn -
                            Lọc tinh khiết</a>
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/cay_nong_lanh.png" alt="cay nong lanh"> Cây nóng lạnh Kangaroo</a>
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/tu_dong.png" alt="tu dong - tu mat"> Tủ đông - Tủ mát Kangaroo</a>
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/quat_dieu_hoa.png" alt="quat dieu hoa"> Quạt điều hòa Kangaroo</a>
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/thiet_bi_mua_dong.png" alt="thiet bi mua dong"> Thiết bị mùa đông
                            Kangaroo</a>
                        <a class="list-group-item list-group-item-action text-decoration-none" href="#"><img
                                src="../images/thiet_bi_ve_sinh.png" alt="thiet bi ve sinh"> Thiết bị vệ sinh
                            Kangaroo</a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row d-none d-sm-block">
                        <img src="../images/banner_top.png" alt="banner top" height='42px' width="100%">
                    </div>
                </div>
            </div>
            <hr class="py-2">
        </section>

        <section class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center">Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU</h3>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-6">
                    <img src="../product/sp1.jpg" alt="sp1" width="550px">
                </div>
                <div class="col-sm-6">
                    <div class="text-warning font-weight-bold" style="font-size:2em">8.290.000₫</div>
                    <hr class="my-3">
                    <input type="number" name="txtnum" width="50px">
                    <button type="submit" name="btncart" class="btn btn-danger mx-3"><i
                            class="fas fa-shopping-cart"></i>
                        THÊM VÀO GIỎ HÀNG</button>
                    <a href="cart.php" name="btnbuy" class="btn btn-success">MUA NGAY</a>
                    <hr class="my-3">
                    <p class="text-justify">
                        Công nghệ từ tính lần đầu tiên được ứng dụng cho máy lọc nước tại Việt Nam, tạo nước Hydrogen
                        với cụm phân tử nước siêu nhỏ. Công nghệ khuôn mẫu tiên tiến đòi hỏi kỹ thuật khắt khe và
                        trình độ sản xuất hiện đại.
                        Nước khỏe uống liền: nước kiềm với pH và ORP ở mức tối ưu, giàu Hydrogen, giúp quá trình hấp
                        thu khoáng chất nhanh, bù nước hiệu quả. Hydrogen có trong nước giúp trung hòa các chất oxy
                        hóa, các gốc tự do.
                        Làm sạch thực phẩm: nguồn nước kiềm cũng giúp loại bỏ chất hữu cơ dư lượng trên bề mặt thực
                        phẩm hiệu quả hơn so với nước máy.
                        Chăm sóc da: nước giàu Hydrogen được sử dụng hiệu quả trong chăm sóc sắc đẹp nhờ tốc độ thẩm
                        thấu nhanh qua da, Hydrogen giúp là chậm hơn quá trình lão hóa
                    </p>
                </div>
            </div>
        </section>
    </div>

    <footer id="footer" class="section-blob">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 kangaroo">
                    <a href="#"><img class="image" src="../images/logo_footer.png" alt="Kangaroo"></a>
                    <p class="paragraph">Nhà phân phối chính thức các sản phẩm chính hãng của tập đoàn Kangaroo</p>
                    <p></p>
                    <a href="#"><img src="../images/sign.png" alt="sign"></a>
                    <p></p>
                </div>
                <div class="col-12 col-md-3 custom">
                    <h6 class="header-6">GIỚI THIỆU</h6>
                    <ul class="list">
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Về chúng tôi</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Hình thức mua hàng</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Hình thức thanh toán</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Chính sách bảo mật</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Tư vấn</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 custom">
                    <h6 class="header-6">THÔNG TIN TRỢ GIÚP</h6>
                    <ul class="list">
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Vận chuyển và giao hàng</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Đổi và trả hàng</a>
                        </li>
                        <li class="list-item">
                            <i class="fa fa-chevron-right italic" aria-hidden="true"></i>
                            <a class="link" href="#">Chính sách bảo hành</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 contact">
                    <h6 class="header-6">LIÊN HỆ</h6>
                    <p></p>
                    <address>
                        <img class="image" src="../images/address_icon.png" alt="">
                        <span class="position">Số 77 Nguyễn Huệ, Phú Nhuận, Tp. Huế, Thừa Thiên Huế</span>
                        <br>
                        <img class="image" src="../images/phone_icon.png" alt="">
                        <a class="link" href="tel:(+84)908.684.031">CSKH: 0908.684.031</a>
                        <br>
                        <img class="image" src="../images/email_icon.png" alt="">
                        <a class="link"
                            href="mailto:lienhe@dhkhhue.vn?subject=Feedback&body=Message">lienhe@dhkhhue.vn</a>
                        <br>
                        <div class="page">
                            Giấy chứng nhận đăng ký doanh nghiệp số 010 6411 810 do Sở kế hoạch và Đầu tư Thành phố Hà
                            Nội cấp ngày 06/01/2014.
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </footer>

    <script src="../script/slide.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b8781268f9.js" crossorigin="anonymous"></script>
</body>

</html>