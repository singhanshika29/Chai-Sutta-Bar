<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Section</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lato:wght@300;400&family=Playfair+Display:wght@700&family=Cinzel:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Lato', sans-serif;
            overflow-x: hidden !important;
        }

        .blog-text {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            background-color: white;
            position: relative;
            margin-bottom: 20px;
        }

        .blog-text img {
            height: auto;
            width: 100%;
            object-fit: cover;
            min-height: 200px;
        }

        .blog-text h5 {
            position: absolute;
            top: 45%;
            left: 28%;
            font-family: "Cinzel", serif;
            transform: translate(-50%, -50%);
            color: grey;
            font-size: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
        }

        .blog-text h4 {
            position: absolute;
            top: 45%;
            left: 34%;
            font-family: "Cinzel", serif;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
        }

        .application-section {
            background-color: rgb(255, 255, 255);
            padding: 60px 0;
            color: #000000;
            z-index: 1;
        }

        .text-content h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #010101;
        }

        .text-content h2:hover {
            cursor: pointer;
            color: #36030b;
        }

        .section-description {
            font-family: poppins;
            color: rgb(70, 65, 65);
            font-weight: 500;
            font-size: 1.04rem;
            line-height: 1.7;
        }

        .btn-custom-cta {
            background-color: #211f1fff;
            color: #ffffff;
            border: none;
            border-radius: 2px;
            padding: 15px 30px;
            font-weight: bold;
            text-decoration:none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        .btn-custom-cta:hover {
            background-color: #663700;
            color: #0e0d0d;
        }

        .video-container {
            position: relative;
            cursor: pointer;
        }

        .video-container img {
            width: 85%;
            height: auto;
            display: block;
            margin-left: 90px;
            transition: opacity 0.3s ease, transform 0.3s ease;
            ;
        }


        .video-container img:hover {
            opacity: 1;
            transform: scale(1.025);
            cursor: pointer;
        }

        .our-leader {
            background-color: black;
            padding-bottom: 50px;
        }

        :root {
         
            --text-yellow: #94220b;
            --text-white: #FFFFFF;
        }

        .media-mentions-section {
            background-color: #000000ff;
            padding: 60px 0;
            width: 100%;
        }

        .section-title {
            height: 80px;
            text-align: center;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 50px;
        }

        .text-highlight {
            font-family: 'Playfair Display', serif;
            color: var(--text-yellow);
        }

        .text-light-custom {
            font-family: 'Playfair Display', serif;
            color: var(--text-white);
        }

        .logo-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            gap: 30px;
        }

        .logo-item {
            flex: 0 1 auto;
            text-align: center;
            opacity: 0.9;
            transition: opacity 0.3s ease, transform 0.3s ease;
            max-width: 150px;
            max-height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-item:hover {
            opacity: 1;
            transform: scale(1.05);
            cursor: pointer;
        }

        .logo-item img {
            max-width: 100%;
            height: auto;
            max-height: 60px;
            object-fit: contain;
        }

        .mock-logo {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            padding: 5px 10px;
            display: inline-block;
            user-select: none;
        }

        .logo-r-bharat {
            background-color: #D32F2F;
            color: white;
            font-size: 1.2rem;
            padding: 5px 15px;
        }

        .logo-ted {
            color: #E62B1E;
            font-size: 2rem;
            font-weight: 900;
            letter-spacing: -1px;
        }

        .logo-toi {
            color: #ccc;
            font-family: "Times New Roman", serif;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .logo-ncert {
            width: 50px;
            height: 50px;
            border: 3px solid #007bff;
            border-radius: 50%;
            color: #007bff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            position: relative;
        }

        .logo-ncert::after {
            content: "NCERT";
            position: absolute;
            bottom: -20px;
            color: #fff;
            font-size: 0.6rem;
            width: 100%;
        }

        .logo-yourstory {
            border: 2px solid #FF3333;
            color: #FF3333;
            padding: 5px 10px;
            font-size: 1rem;
            text-transform: uppercase;
            position: relative;
        }

        .logo-yourstory::before {
            content: '';
            position: absolute;
            top: 4px;
            left: -4px;
            width: 100%;
            height: 100%;
            border-left: 2px solid #FF3333;
            border-bottom: 2px solid #FF3333;
            z-index: -1;
        }

        .divider-line-2 {
            border-bottom: 1px solid orange;
            width: 50px;
            margin-left: auto;
            margin-right: auto;
            opacity: 5;
        }

        .title-row {
            width: 100%;
            margin-top: 50px;
        }

        .our-leader h1 {
            font-family: 'Playfair Display', serif;
            font-weight: bold;
            font-size: 50px;
            color: #8b0404ff;
             text-shadow: 2px 2px 10px rgba(171, 9, 9, 0.3);
            letter-spacing: 1px;
        }

        .our-leader p {
            font-family: poppins;
            color: #6a6c6e;
            font-size: 20px;
            font-weight: 600;
            border-bottom: 1px solid orange;
            width: 25%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1px;
        }

        .anubhav img {
            width: 53vh;
            height: 50vh;
            margin-left: 15%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .anand img {
            width: 50vh;
            margin-left: 17%;
            transition: transform 0.5s;
        }

        .anand h3 {
            margin-left: 7%;
        }

        .rahul img {
            width: 50vh;
            margin-left: 10%;
            transition: transform 0.5s;
        }

        .rahul h3 {
            margin-left: 1%;
        }

        .anand img:hover {

            transform: scale(0.95);

        }

        .anubhav img:hover {

            transform: scale(0.95);

        }

        .rahul img:hover {

            transform: scale(0.95);

        }

        .title-row h3 {
            font-family: "Times New Roman", serif;
            color: #9c4736;
            font-size: 30px;
            padding-top: 20px;
        }

        .leader-span {
            font-family: poppins;
            color: whitesmoke;
            line-height: 1.50;
        }


        .usb-background {
            background-image: url(./image/cup-tea-2.jpg);
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding-bottom: 50px;
            color: white;
        }

        .usb-background p,
        .usb-background h3 {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        .usb-text h2 {
            font-family: 'Playfair Display', serif;
            color: #94220b;
            font-size: 38px;
            font-weight: 700;
            letter-spacing: 1;
            padding-top: 20px;
        }

        .usb-text h4 {
            font-family: poppins;
        }

        .usb-content p {
            font-family: poppins;
            line-height: 1.50;
            font-size: 23px;
            padding-top: 50px;
            padding-left: 50px;
        }


        .csb-section {
            --brand-orange: #ac0505;
            --brand-yellow: #f39c12;
            --text-light: #fdfdfd;
            --bg-dark: #121212;
            --card-bg: rgba(255, 255, 255, 0.05);
        }



        .csb-section {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            line-height: 1.26;
        }

        .csb-section {
            position: relative;
            background-image: url(./image/cup-tea-2.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 50px 10%;
            overflow: hidden;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease-out;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            color: var(--brand-orange);
            font-size: 3rem;
           
            text-shadow: 2px 2px 10px rgba(171, 9, 9, 0.3);
        }

        .section-header p {
            font-size: 1.2rem;
            font-style: poppins;
            opacity: 0.9;
        }

        /* --- Middle Content (Text + Image) --- */
        .content-row {
            display: flex;
            align-items: center;
            justify-content: space-between;


            flex-wrap: wrap;
        }

        .main-text {
            flex: 1;
            font-size: 1.1rem;
            text-align: justify;
            min-width: 200px;
            animation: fadeInLeft 1s ease-out;
        }

        .main-text p {
            font-family: poppins;
            font-size: 22px;
        }

        .highlight-text {
            color: var(--brand-yellow);
            font-weight: 600;
        }

        .image-wrapper {
            flex: 0 0 350px;
            position: relative;
            animation: fadeInRight 1s ease-out;
        }
        .promo-card {
            width: 80%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: all 0.4s ease;
            cursor: pointer;

            border: 2px solid var(--brand-orange);
            overflow: hidden;
        }

        .promo-card img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .promo-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 20px 40px rgba(211, 84, 0, 0.2);
        }

        .promo-card:hover img {
            transform: scale(1.1);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .value-card {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 12px;
            border-left: 4px solid var(--brand-yellow);
            backdrop-filter: blur(10px);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0;
            animation: fadeInUp 0.8s forwards;
        }

        .value-card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .value-card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .value-card:nth-child(3) {
            animation-delay: 0.6s;
        }

        .value-card h3 {
            color: var(--brand-yellow);
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .value-card h3::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--brand-orange);
            transition: width 0.3s ease;
        }

        .value-card:hover h3::after {
            width: 100%;
        }

        .value-card p {
            font-size: 0.95rem;
            color: #ddd;
        }
        .value-card:hover {
            transform: translateY(-15px);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
            border-left: 4px solid var(--brand-orange);
        }

        /* --- Keyframe Animations --- */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .section-header h2 {
                font-size: 2.2rem;
            }

            .csb-section {
                padding: 50px 5%;
            }

            .content-row {
                flex-direction: column;
                text-align: center;
            }

            .image-wrapper {
                width: 100%;
                flex: auto;
                max-width: 350px;
            }
        }

        @media screen and (max-width: 991px) {


            .our-leader p {
                width: 50%;
            }

            .video-container img {
                margin-left: 20px;
                width: 90%;
            }

        }

        @media screen and (max-width: 768px) {

            .blog-text h5,
            .blog-text h4 {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                width: 100%;
            }

            .blog-text h5 {
                top: 40%;
                font-size: 16px;
            }

            .blog-text h4 {
                top: 60%;
                font-size: 22px;
                left: 50%;
            }

            .video-container img {
                margin-left: 0;
                width: 100%;
                margin-top: 30px;
            }

            .play-button {
                left: 50%;
                top: 60%;
            }

            .our-leader h1 {
                font-size: 36px;
            }

            .our-leader p {
                width: 90%;
                font-size: 16px;
            }

            .anubhav img,
            .anand img,
            .rahul img {
                width: 80%;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                display: block;
                margin-bottom: 20px;
            }

            .anand h3,
            .rahul h3,
            .title-row h3 {
                margin-left: 0;
                text-align: center;
            }

            .title-row .col-lg-4 {
                margin-bottom: 50px;
            }

            .usb-background .row {
                flex-direction: row;
            }

            .usb-background img {
                width: 100%;
                height: auto;
            }
        }
            .custom-navbar {
         
            padding-top: 1.2rem;
            padding-bottom: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);  
            position: sticky;
            top: 0;
            z-index: 2;
        }

        .custom-navbar .nav-link {
            text-transform: uppercase;
            color: #000000ff !important;
            font-weight: 600;
            letter-spacing: 0.07em;
            font-size: 16px;
            padding: 1.9rem 1.9rem !important;
            
        }

        .custom-navbar .nav-link:hover {
            background-color:#0a0a0a !important;
            color: #cfdce7 !important;
        }

          .navbar-brand img{
                width: 20%;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin: 0 auto;   
            }
        @media (min-width: 992px) {
            .navbar-brand {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
</head>

<body>

  <?php include 'navbar.php'; ?>
    <section>
        <div>
            <div class="blog-text img-fluid mt-3">
                <img src="./image/blog-bg.jpg" alt="Blog Background">

                <h5>HOME </h5>
                <h4> /ABOUT</h4>
            </div>
        </div>
    </section>

    <section class="application-section  container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="text-content fw-bold">

                        <h2>Why We Rock?.</h2>
                        <div class="divider">
                            <p class="section-description">
                                Our Company Chai Sutta Bar is a rapidly growing Tea-Chain, founded in 2016 by two young
                                and passionate entrepreneurs – Anubhav Dubey and Anand Nayak. Later, the duo was joined
                                by another passionate being – Rahul Patidar. Chai Sutta Bar has been creating memories
                                and building connection since its inception. Hailing from Madhya Pradesh, we are known
                                for our quality and world-class service. Our brand envisions to serve India’s most
                                go-to-beverage ‘Chai’ in the most environment-friendly way i.e., serving in kulhad. Our
                                mission and vision are to make everyone cuddle the kulhad which is the symbol of our
                                nature and our country.
                            </p>
                        </div>
<div class="mt-5">  <a href="#" class=" btn-custom-cta">READ MORE</a></div>
                      
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 mt-4 mt-lg-0">
                    <div class="video-container container">
                        <img src="./image/DSC05955-1024x576-min.png" alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="our-leader">
            <h1 class="text-center pt-5">Our <span class="text-light">Leaders</span></h1>
            <p class="text-center">Get to know the faces of our leadership..</p>
            <div class="row title-row pt-3 ">
                <div class="col-lg-4 col-md-6 col-12 anubhav container">
                    <img src="./image/anubhav-sir-1.png" alt="">
                    <h3 class="text-center">Anubhav Dubey</h3>
                    <h6 class="leader-span text-center px-4">“I remember the initial days of CSB where each new customer
                        brought tons
                        of joy and smiles to my and other team members’ face. And when any customer praised us for tasty
                        chai, use of kulhad, or ambience, we were over nine clouds.”
                    </h6>
                </div>

                <div class="col-lg-4 col-md-6 col-12 anand mt-4 mt-md-0 container">
                    <img src="./image/Anand-Nayak-sir.png" alt="">
                    <h3 class="text-center">Anand Nayak </h3>
                    <h6 class="leader-span text-center px-4">“Chai Sutta Bar is not just an idea, it’s a vision of our
                        team. Bringing
                        the culture combinations and delivering unique experiences is and will always remain our USP.
                        Now, we are targeting global expansion.”
                    </h6>
                </div>

                <div class="col-lg-4 col-md-12 col-12 rahul mt-4 mt-lg-0 container">
                    <img src="./image/Rahul-Patidar.png" alt="">
                    <h3 class="text-center">Rahul Patidar</h3>
                    <h6 class="leader-span text-center px-4">“With Anubhav and Anand, we have come a long way. From
                        selling chai in
                        Kulhad for mere few people to becoming people’s favourite brand. We want to continue this legacy
                        irrespective of time and distance.”
                    </h6>
                </div>
            </div>
        </div>
    </section>


        <section class="media-mentions-section social-media mt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">
                            <span class="text-highlight">Media</span> <span class="text-light-custom">Mentions</span>
                            <hr class="divider-line-2">
                        </h2>
                    </div>
                </div>
<marquee width="100%" direction="left" height="100px">
 <div class="row">
                    <div class="col-12">
                        <div class="logo-container">
                            <div class="logo-item">
                                <div class="mock-logo logo-r-bharat">R. भारत</div>
                            </div>
                            <div class="logo-item">
                                <div class="mock-logo logo-ted">TED</div>
                            </div>
                            <div class="logo-item">
                                <div class="mock-logo logo-toi">THE TIMES OF INDIA</div>
                            </div>
                            <div class="logo-item">
                                <div class="mock-logo logo-ncert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                        class="bi bi-book" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="logo-item ">
                                <div class="mock-logo logo-yourstory">YOURSTORY</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</marquee>
               
        </section>
 

    <section class="csb-section mt-1">
        <div class="section-header">
            <h2>At Chai <span class="text-light">Sutta Bar</span></h2>
            <p>What we strive for...</p>
        </div>

        <div class="content-row">
            <div class="main-text">
                <p>
                    Chai Sutta Bar has always kept our people at the centre of our services.<br>
                    We believe and understand that the whole being of humankind depends <br>on the food they consume.
                    Food that is <span class="highlight-text">affordable, reliable, and connected</span><br> to their
                    culture and ethos.

                    Our chai is the medium of connection between <br> friends,families, and strangers.
                </p>
            </div>

            <div class="image-wrapper">
                <div class="promo-card">
                    <img src="./image/69aede84ecee339eabe198379444ff6c.jpg" alt="Ekdum Kadak Chai">
                </div>
            </div>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <h3>Mission</h3>
                <p>We're on a mission to spread our Kulhad Chai across the world and get people to try it globally &
                    taste the aroma of India's soil with their every sip from Kulhad.</p>
            </div>

            <div class="value-card">
                <h3>Vision</h3>
                <p>Our vision is simply to bring Indian cultural values from the roots and blend them with world-class
                    ambience to serve people with aromatic experiences and cheerful memories.</p>
            </div>

            <div class="value-card">
                <h3>Expansion</h3>
                <p>We are in our expansion mode, i.e., to be present in all the cities of India and all the countries
                    across the globe. Currently present in 370+ cities of India.</p>
            </div>
        </div>
    </section>

    <section >
        <?php
    include 'franchiseform.php';
    ?>
        <?php
    include 'footer.php';
    ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>