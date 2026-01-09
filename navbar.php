<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /* header start*/

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 80px;
            background: #ffffffff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
            z-index: 999;
            position: sticky;
            top: 0;
            left: 0;
        }

        .hide {
            display: none !important;
        }

        #navbar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar1 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            font-family: 'Poppins', sans-serif;
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar1 li {
            font-family: 'Poppins', sans-serif;
            list-style: none;
            padding: 0 20px;
            position: relative;
        }

        #navbar li a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            transition: 0.3s ease;
        }

        #navbar1 li a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            transition: 0.3s ease;
        }

        #navbar li a:hover {
            color: #088178;
        }

        #navbar1 li a:hover {
            color: #088178;
        }

        #navbar li a:hover,
        #navbar li a.active {
            color: #088178;
            border: none!important;
        }

        #navbar1 li a:hover,
        #navbar1 li a.active {
            color: #088178;
        }

        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: '';
            width: 30%;
            height: 2px;
            background: #088178;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        #navbar1 li a.active::after,
        #navbar1 li a:hover::after {
            content: '';
            width: 30%;
            height: 2px;
            background: #088178;
            position: absolute;
            bottom: -4px;
            left: 20px;
        }

        #mobile {
            display: none;
            align-items: center;
        }

        #close {
            display: none;
        }

        /* media query*/

        @media (max-width: 799px) {

            #navbar1 {
                display: none;
            }

            .hide {
                display: initial;
            }

            #navbar {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                position: fixed;
                top: 0;
                right: -300px;
                height: 100vh;
                width: 300px;
                background-color: #e3e6f3;
                box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
                padding: 80px 0 0 10px;
                transition: 0.3s;
            }

            #navbar.active {
                right: 0px;
            }

            #navbar li {
                margin-bottom: 25px;
            }

            #mobile {
                display: flex;
                align-items: center;
            }

            #mobile i {
                color: #1a1a1a;
                font-size: 24px;
                padding-left: 20px;
            }

            #close {
                position: absolute;
                display: initial;
                top: 30px;
                left: 30px;
                color: #222;
                font-size: 24px;
            }
        }

        @media (max-width: 477px) {


            #header {
                padding: 10px 30px;
            }
        }
    </style>
</head>

<body>
    <section id="header">
        <div>
            <ul id="navbar1">
                <li><a class="btn " href="index.php">HOME</a></li>
                <li><a class="btn" href="home.php">ABOUT</a></li>
                <li><a class="btn" href="franchisefinal.php">FRANCHISE</a></li>

            </ul>
        </div>
        <div>
            <a href="#"><img src="./image/unnamed__1_-removebg-preview.png" width="100px" alt=""></a>
        </div>

        <div>
            <ul id="navbar">
                <li><a class="btn  hide" href="index.php">HOME</a></li>
                <li><a class="btn hide" href="shop.php">ABOUT</a></li>
                <li><a class="btn hide" href="franchisefinal.php">FRANCHISE</a></li>
                <li><a class="btn" href="menuu.php">MENU</a></li>
                <li><a class="btn" href="galleryfinal.php">GALLERY</a></li>
                           <li><a class="btn" href="blogfinal.php">BLOG</a></li>
                <li id="lg-bag"><a class="btn" href="contact.php"><i class="far fa-user"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="far fa-user"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <script>
        //responsive navbar
        const bar = document.getElementById('bar');
        const close = document.getElementById('close');
        const nav = document.getElementById('navbar');

        if (bar) {
            bar.addEventListener('click', () => {
                nav.classList.add('active');
            })
        }

        if (close) {
            close.addEventListener('click', () => {
                nav.classList.remove('active');
            })
        }
        //animation on scroll
        AOS.init({

            once: true
        });


        //for button active in navbar

        
    </script>
</body>

</html>