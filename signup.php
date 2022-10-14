<?php

    require 'connect.php';
    if(isset($_POST['btn-reg'])){

                    $username = $_POST['uname'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $sql = "insert into users (username, psw, email) values ('$username', '$password', '$email')";

                    if($conn->query($sql) === TRUE){
                        //header('location: login.php');
                        echo "<script>alert('Đăng ký thành công')</script>";
                    }
                    else{
                        echo "<script>alert('Đăng ký thất bại')</script>";
                    }
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SignUp_PhúTriển-Mobile</title>
        <link rel="stylesheet" href="signup.css">
        <script src="signup.js"></script>
    </head>
    <body>
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
                <a href=""><button  id="cart">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    Giỏ Hàng
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
        <form class="form13" action="" method="POST" style="border:1px solid #ccc">
            <div class="container">
              <h1>Đăng ký</h1>
              <p>Vui lòng điền đầy đủ thông tin để tạo tài khoản.</p>
              <hr>
          
              <label for="uname"><b>Tên đăng nhập</b></label>
              <input type="text" placeholder="Enter Username" name="uname" id="username" required>
          
              <label for="psw"><b>Mật khẩu</b></label>
              <input type="password" placeholder="Enter Password" id="password" onkeyup="return passwordChanged()" name="password" required>
              <p><span id="strength">     </span></p>     

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" id="email" name="email" onfocusout="return formValidate()" required>  
       
              <div class="clearfix">
                <button type="submit" name="btn-reg" class="signinbtn btn">Đăng ký</button>
                <a href="login.php">
                <button type="button" class="canclebtn btn">Huỷ</button></a>
                
              </div>
            </div>
            
          </form>
    </body>
    </html>