<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chai Sutta Bar Footer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&family=Lato:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@700&family=Lato:wght@400;700&display=swap');

        .site-footer {
            background-color: #2c2c2c; 
       
            background-image: url('./image/unnamed (8).jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Lato', sans-serif;
            color: #fef9f9;
            overflow:hidden;
        }

        .start {
            border-top: dashed 2px #656363;
            padding-top: 20px;
            border-bottom: dashed 2px #7a7676;
            padding-bottom: 20px;
        }

        .footer-top {
            padding-top: 4rem;
            padding-bottom: 3rem;
            line-height: 1.6;
        }

        .footer-top h5 {
            font-family: 'EB Garamond', serif;
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            margin-bottom: 1.25rem;
            color: #f9ecec;
            text-transform: uppercase;
        }
        .quick-link1 h3{
                font-family: 'EB Garamond', serif;
            font-size: 1.25rem;
        }


        .footer-top h3:hover {
            color: rgb(177, 177, 183);
        }
        .contact-list {
            list-style: none;
            padding-left: 0;
        }
        
        .contact-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            justify-content: center; 
        }

        .contact-list .icon {
            margin-right: 10px;
            color: #f9ecec;
        }

        .contact-list a {
            color: #fef9f9;
            text-decoration: none;
        }

   

        /* Copyright Text */
        .copyright-text {
            font-size: 0.85rem;
            color: #f7f1f1;
            letter-spacing: 0.2px;
            text-transform: uppercase;
            margin-top: 10px;
        }

        /* Social Icons */
        .social-icons h4 {
            display: inline-block;
            cursor: pointer;
            transition: 0.3s;
        }
        .social-icons h4:hover {
            color: #ccc;
        }

        /* Bottom Gallery Strip */
        .footer-gallery-strip {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto; /* Changed to auto to allow scrolling */
            overflow-y: hidden;
            background-color: #f7f1f1;
            -webkit-overflow-scrolling: touch;
        }

        .footer-gallery-strip img {
            height: 220px;
            width: auto;
            flex-shrink: 0;
            transition: opacity 0.3s ease;
        }

        .footer-gallery-strip img:hover {
            opacity: 0.8;
            cursor: pointer;
        }

        .footer-gallery-strip::-webkit-scrollbar {
            height: 8px;
        }
        .footer-gallery-strip::-webkit-scrollbar-track {
            background: #e2d9d9;
        }
        .footer-gallery-strip::-webkit-scrollbar-thumb {
            background: #fdf7f7;
            border-radius: 4px;
        }

        /* ----------------------------------------------------------- */
        /* MEDIA QUERIES FOR RESPONSIVENESS */
        /* ----------------------------------------------------------- */
        
        /* For Tablets and Desktops (Medium screens and up) */
        @media (min-width: 768px) {
            .contact-list li {
                justify-content: flex-start; 
            }
        }

        /* For Mobile Phones (Small screens) */
        @media (max-width: 767px) {
            .footer-gallery-strip img {
                height: 120px;
            }
            
            .footer-top {
                padding-top: 2rem; 
            }
            
            .start {
                padding-bottom: 0;
            }
        }
    </style>
</head>

<body>

    <footer class="site-footer">
        <div class="footer-top">
            <div class="container start">
                <div class="row">
                    
                    <div class="col-12 col-md-4 text-center text-md-start mb-4 mb-md-0">
                        <h5>Head office</h5>
                        <ul class="contact-list">
                            <li>
                                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span>
                                    1st Floor, Redsquare, PU3 Commercial Scheme <br>
                                    no 54, Opposite C21 Mall, Indore, MP-452001
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <span><a href="tel:+6262300031">6262 3000 31</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-envelope"></i></span>
                                <span><a href="mailto:info@chaisuttabarindia.com">info@chaisuttabarindia.com</a></span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-envelope"></i></span>
                                <span><a href="mailto:business@chaisuttabarindia.com">business@chaisuttabarindia.com</a></span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-4 text-center mb-4 mb-md-0 quick-link1">
                        <h5>QUICK LINKS:</h5>
                        <h3 class="fw-bold">Home</h3>
                        <h3 class="fw-bold p-2">Contact</h3>
                        <h3 class="fw-bold ">Franchise</h3>
                    </div>

                    <div class="col-12 col-md-4 text-center mb-3">
                        <h5>FOLLOW US:</h5>
                        <div class="social-icons">
                            <h4 class="fa-brands fa-facebook p-3"></h4>
                            <h4 class="fa-brands fa-linkedin p-2"></h4>
                            <h4 class="fa-brands fa-instagram p-2"></h4>
                            <h4 class="fa-brands fa-github p-2"></h4>
                        </div>
                    </div>

                </div>
            </div>

       
               <div class="footer-gallery-strip mt-5">
            <img src="./image/9f64c9d5202847215ffb96cf0298b917.jpg" alt="Chai in Kulhad">
            <img src="./image/2af521b57ddf314dc195a59cf904b3d3.jpg" alt="Indian Food Platter">
            <img src="./image/89bc05bdd4e898147702e78a5bfb0457.jpg" alt="Friends laughing with coffee">
            <img src="./image/tea-cup.jpg" alt="Man drinking tea outdoors">
            <img src="./image/d513872cea85d47d0c177dfe46641b1a.jpg" alt="Tea">
            <img src="./image/372365bdb67e730121df02a56e7baea4.jpg" alt="Ginger and tea leaves">
            <img src="./image/2ca12a75f99cc58273a8f6da42665bc3.jpg" alt="Tea with spices">
            <img src="image/02af3a9f3a50ab317addbd920995c36f.jpg" alt="Samosas">
            <img src="./image/emoji.jpg" alt="Happy">
            <img src="./image/tom.jpg" alt="Tom">
        </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="copyright-text"> &copy; All Rights Reserved By <span class="text-danger">Anshika Singh</span></p>
                </div>
            </div>

        </div>

     
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>