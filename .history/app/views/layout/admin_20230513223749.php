<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Intern</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        
/* Hiển thị menu theo dạng dropdown trên màn hình nhỏ */
@media screen and (max-width: 768px) {
  .nav {
    display: flex;
    flex-direction: column;
    align-items: left;
  }
  .nav-item {
    margin: 10px 0;
  }
  .nav-pills .nav-item.show .nav-link, .nav-pills .nav-link.active {
    color: #fff;
    background-color: #007bff;
  }
}

/* Hiển thị menu theo kiểu menu bar trên màn hình trung bình */
@media screen and (min-width: 768px) and (max-width: 992px) {
  .nav {
    justify-content: space-between;
    align-items: left;
  }
  .nav-pills .nav-item.show .nav-link, .nav-pills .nav-link.active {
    color: #fff;
    background-color: #007bff;
  }
}

/* Hiển thị menu theo kiểu bình thường trên màn hình lớn */
@media screen and (min-width: 992px) {
  .nav-pills .nav-item.show .nav-link, .nav-pills .nav-link.active {
    color: #fff;
    background-color: #007bff;
  }
}


    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <header>
            <div class="p-4">
                <ul class="nav nav-pills ml-5 h4 p-4 d-flex align-items-center">
                    <li class="nav-item p-4">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item p-4">
                        <a class="nav-link active" href="#">Category</a>
                    </li>
                    <li class="nav-item ml-auto mr-5">
                        <img src="<?php echo base_url; ?>public/image/logo-lam.jpg" alt="" width="120px"  >
                    </li>
                </ul>
            </div>
        </header> 
        {{content}}
        <footer>
            <div class="copy-right text-center">
                <p>Copyright 2023 © Ho Viet Thuan.</p>
            </div>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>