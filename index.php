<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhúTriển-Mobile</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reponsive.css" />
    <script src="main.js"></script>
    <script src="dada.js"></script>
</head>
<body>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="main.js"></script>
<!-- header -->
<header>
    <nav>
        <div class="img-nav">
            <img id="logo" src="https://scontent.fsgn5-3.fna.fbcdn.net/v/t1.15752-9/308496918_507413094559907_3026746911044308681_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_ohc=f6ceSaYJKDUAX-8A0yB&_nc_ht=scontent.fsgn5-3.fna&oh=03_AVIARRYbdFYiPDpyYbr-NLroZuX_HARe1i7vppGEl1-JIw&oe=63586057" alt="" />
        </div>
        <div class="content-nav">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="https://www.facebook.com/ducanhtwenty5">Liên Hệ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
            </ul>
            <form>
                <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <!-- The Modal -->
        <a href="">
        <button  id="cart">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            Giỏ Hàng
        </button></a>
        <a href="login.php">
        <button  id="cart">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            Tài Khoản
        </button></a>
        
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Giỏ Hàng</h5>
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                        <span class="cart-price cart-header cart-column">Giá</span>
                        <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                    </div>
                    <div class="cart-items">

                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Tổng Cộng:</strong>
                        <span class="cart-total-price">0VNĐ</span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                    <button type="button" class="btn btn-primary order">Thanh Toán</button>
                </div>
            </div>
        </div>
    </nav>

</header>
<!-- content -->
<section class="wrapper">
    <div class="products">
        <ul>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-xs-max-vang-900-19437j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone Xs Max</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">9.999.999đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-11-trang-dai-dien-19368j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 11</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">12.990.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-11-pro-max-xam-900-19429j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 11 Pro</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">12.490.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product no-margin">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-11-pro-max-xam-900-19429j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 11 Pro Max</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">16.990.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-12-trang-900-21158j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 12</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">14.490.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-12-pro-xam-900-21172j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 12 Pro</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">17.990.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-12-pro-xam-900-21172j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 12 Pro Max</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">21.990.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
            <li class="main-product no-margin">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://phuckhangmobile.com/image/iphone-13-hong-900-24965j6.jpg"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Iphone 13</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">19.000.000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- footer -->
<footer>
    <div class="footer-item">
        <div class="img-footer">
            <img src="img/logo.png" alt="" />
        </div>
        <div class="social-footer">
            <li><a target="_blank" href="https://www.facebook.com/phtrien089/">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a></li>
        </div>
    </div>
</footer>
</body>
</html>
