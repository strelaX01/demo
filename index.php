<?php 
    $sql = "SELECT * FROM demo";
    $query = mysqli_query($connect,$sql);
?>
<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>HaiPigcoffe</title>
</head>
<body>
    <header>
    <div class="Header">
        <div class="name">
            <h1>Xin chào, <?php echo $_SESSION['username']; ?></h1>
             <a href="./login/logout.php"><span>Đăng xuất</span></a>
        </div>
        <div class="cart-icon">
            <p><i class="fas fa-shopping-cart"></i><span>0</span><sup>d</sup></p>
        </div>
        <div class="logo">
            <img src="logo.png" >
        </div>
        <div class="text">
            <p class="slogan">Anh em Café, Đỉnh Cao Đồ Uống !</p>
        </div>
        <div class="icons">
            <div class="icon-search" id="search-btn">
                <input type="text" class="search" id="search" placeholder="Bạn muốn tìm gì...">
            </div>
        </div>

    </div>
    <div class="taskbar">
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="#products">Sản Phẩm</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#Infor">Thông Tin</a></li>
                <li><a href="#blogs">blogs</a></li>
            </ul>
        </nav>
    </div>
    </header>
    <section class="menu" id="menu">
        <h1 class="heading"><span>menu</span></h1>
        <div class="box-container">

            <div class="box">
                <img src="orange.png" alt="menu-1">
                <h3>Nước Cam</h3>
                <div class="price"><span>30.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>
            <div class="box">
                <img src="tra-sua.png" alt="menu-2">
                <h3>Trà Sữa</h3>
                <div class="price"><span>30.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="tra-xanh-dao.png" alt="menu-3">
                <h3>Trà Xanh Đào</h3>
                <div class="price"> <span>35.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="cafe-socola.png" alt="menu-4">
                <h3>Cà phê Socola</h3>
                <div class="price"> <span>45.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="tra-chanh.png" alt="menu-5">
                <h3>Trà Chanh</h3>
                <div class="price"><span>25.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="tra-chanh-leo.png" alt="menu-6">
                <h3>Trà Chanh Leo</h3>
                <div class="price"><span>30.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="nuoc-ep-dua-hau.png" alt="menu-7">
                <h3>Nước Ép Dưa Hấu</h3>
                <div class="price"> <span>40.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="nuoc-ep-4-mua.png" alt="menu-8">
                <h3>Nước Ép 4 Mùa</h3>
                <div class="price"> <span>60.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

            <div class="box">
                <img src="nuoc-ep-buoi.png" alt="menu-9">
                <h3>Nước Ép Bưởi</h3>
                <div class="price"> <span>40.000</span><sup>đ</sup></div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>

        </div>

        <div id="load-more">Load more</div>

    </section>

    <!--Danh gia san pham-->
    <section class="review" id="review">
        <h1 class="heading"> Khách Hàng Đánh Giá <span>Đồ Uống</span> </h1>

        <div class="box-container">

            <div class="box">
                <p> Đồ uống ngon tuyệt vời
                </p>
                <img src="hai-ma.jpg" class="user" alt="">
                <h3>Hải Ma</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>
    </section>

    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#menu">menu</a>
            <a href="#products">produducts</a>
            <a href="#review">Review</a>
            <a href="#contact">contact</a>
            <a href="#blogs">blogs</a>
        </div>

        <div class="credit">created by <span>Hoang Giang | all rights reserved</span></div>

    </section>


       <!-- contact section starts -->

       <section class="contact" id="contact">

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14840.084087490482!2d105.80630676517336!3d21.585102511030627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1662195109020!5m2!1svi!2s">
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>contate-nos</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <p>Trần Đức Hòa</p>
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <p>ABC@gmail.com</p>
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <p>0123456789</p>
                </div>

            </form>
        </div>

    </section>

    <!-- contact section ends -->

    <section class="cart">
        <i class="fas fa-times"></i>
        <h2>Cart</h2>
        <form action="">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td><img src="orange.png" alt=""><p>Nước Cam</p></td>
                        <td><span>25.000</span></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td style="cursor: pointer;">Xóa</td>
                    </tr>
                    <tr>
                        <td><img src="beer.png" alt=""><p>Bia Hải Lợn</p></td>
                        <td><span>20.000</span></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td style="cursor: pointer;">Xóa</td>
                    </tr> -->
                </tbody>
            </table>
            <div class="price-total">
                <p>Tổng Tiền: <span>0</span><sup>đ</sup></p>
            </div>
            <button>Chốt đơn</button>
        </form>
    </section>
    <div id="backtop">
        <i class="fas fa-chevron-up"></i>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="script.js"></script>
</body>
</html>
<?php 
}else{
     header("Location:./login");
     exit();
}
 ?>