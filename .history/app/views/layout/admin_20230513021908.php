

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- <a href="<?php echo base_url; ?>public/css/index.css">Đăng kí</a> -->
    <link rel="stylesheet" href="<?php echo base_url; ?>public/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>public/css/about-us.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>public/css/blog.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>public/css/our-cake.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>public/css/contact-us.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>public/css/my.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        html, body {
            height: 100%;
        }

        .container-fluid {
            min-height: 100%;
        } 
        .menu ul li a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid p-0">
        <header style="height: 50px;background-color: var(--black);">
            <div class="content">
                <div class="media" style="margin-left: 1060px;">
                    <span><ion-icon name="logo-twitter"></ion-icon></span>
                    <span><ion-icon name="logo-facebook"></ion-icon></span>
                    <span><ion-icon name="logo-youtube"></ion-icon></span>
                    <span><ion-icon name="logo-pinterest"></ion-icon></span>
                    <span><ion-icon name="logo-instagram"></ion-icon></span> 
                    <span><ion-icon name="search-outline"></ion-icon></span>
                </div>
            </div>     
        </header>
        <nav>
            <div class="logo">
                <img src="<?php echo base_url; ?>public/image/logo-lam.jpg" alt="" width="100px"  >
            </div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo base_url; ?>admin/index">Trang chủ</i></a></li>
                    <li><a href="<?php echo base_url; ?>category/index">Danh mục</a></li>
                    <li><a href="<?php echo base_url; ?>sanpham/index">Sản phẩm</a></li>
                    <li><a href="<?php echo base_url; ?>taikhoan/index">Tài khoản</a></li>
                    <li><a href="<?php echo base_url; ?>index/index">Thoát</a></li>
                </ul>
            </div>
        </nav>
        
        {{content}}
        <div class="join-our">
            <div class="newsletter">
                <p>Đăng kí nhận Email: </p>
            </div>
            <div class="subscribe">
                <input type="text" placeholder="Email Address">
                <button>Subscribe</button>
            </div>
        </div>
        <footer>
            <div class="my-footer">
                <div class="cakecious w25">
                    <img src="<?php echo base_url; ?>public/image/sonylogo.png" alt="" width="100px">
                    <p class="p20">Liên hệ với chúng tôi</p>
                    <i class="fab fa-facebook-f fb-ft"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="quick-links w25">
                    <h3>Các trang khác</h3>
                    <ul>
                        <li class="p10"><a href="1">Tài khoản</a></li>
                        <li><a href="2">Tra cứu đơn hàng</a></li>
                        <li class="p10"><a href="3">Bảo mật thông tin</a></li>
                        <li><a href="4">Chính sách bảo hành</a></li>
                    </ul>
                </div>
                <div class="work-time w25">
                    <h3>THời gian mở cử</h3>
                    <p class="p10">T2. : T5.: 8 am - 8 pm</p>
                    <p>T6. : 8 am - 8 pm</p>
                    <p class="p10">T7. : 9am - 4pm</p>
                    <p>CN. : Closed</p>
                </div>
                <div class="contact-info w25">
                    <h3>Liên hệ</h3>
                    <p class="p20">(1800) 574 9687</p>
                    <p>Ananas Store</p>
                    <p>256, HCM, Việt Nam, 5245</p>
                    <p>hothuan6677@gmail.com</p>
                </div>
            </div>
            <hr>
            <div class="copy-right">
                <p> © 2022 All Rights Reserved.</p>
                
            </div>
        </footer>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>