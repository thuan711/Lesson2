

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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
        <header>
            
            <div class="p-4">
                <ul class="nav nav-pills ml-5 h5 p-4">
                    <li class="nav-item p-4">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item p-4">
                        <a class="nav-link active" href="#">Category</a>
                    </li>
                    <li class="nav-item ">
                        <img src="<?php echo base_url; ?>public/image/logo-lam.jpg" alt="" width="120px"  >
                    </li>
                </ul>
            </div>
    </header>
        
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