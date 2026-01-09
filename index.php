<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Lato:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Poller+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
         <style>
       *{
        margin: 0;
        padding: 0;
       }
        html, body {
            height: 100%;
            margin: 0;

        }
   /* Disable text selection */  
body {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
      
        .hero {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }
        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0; 
            background: #000;
        }
         .video-bg video {
            width: 100%;
            height: 100%;
            object-fit: cover; 
           
        }
        .video-container{
            margin-top: 78vh;
            height: 100vh;
        
        }
       
      
         
  
           .custom-navbar {
            border-top: 1px solid #0e1011;
            border-bottom: 1px solid #0b0b0c;
            padding-top: 0.2rem;
            padding-bottom: 0.2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);  
            position: sticky;
            top: 0;
            z-index: 2; 
        }

        .custom-navbar .nav-link {
            text-transform: uppercase;
            color: #e6e8ea !important;
            font-weight: 600;
            letter-spacing: 0.07em;
            font-size: 0.9rem;
            padding: 1.5rem 1.5rem !important;
            
        }

        .custom-navbar .nav-link:hover {
            background-color:#0a0a0a !important;
            color: #cfdce7 !important;
        }

          .navbar-brand img{
                width: 15%;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin: 0 auto;   
            }
     
        .dropdown-toggle::after {
            color: #212529;
        }
  /*home-about*/       
   .welcome-container {
            padding-top: 5rem;
               padding-left: 12%;
        }

   .welcome-container h2{
     font-family: "Cinzel", serif;
     font-size: 40px;
     font-weight: 900;
   }
   .welcome-container h2{
    border-bottom: 2px solid #604c0aff;
   }
 .welcome-container p {
             font-family: "Poppins", sans-serif;
            color: #2b2d2eff;
            line-height: 1.8;
        }
  .btn-custom-yellow {
            background-color: #D58329;
            text-decoration:none;
            color: #020202; 
            font-family: "Cinzel", serif;
            font-weight: 700;
            padding: 0.75rem 2rem;
       
            border-radius: 0.25rem;
            border: none;
            transition: background-color 0.3s ease;
            letter-spacing: 0.02em;
            transition: transform 0.5s ;
        }

        .btn-custom-yellow:hover {
            background-color: #604c0aff;
            
            color: #e7e9ec;
         transform: scale(0.95);
        }
        .welcome-image-1 {
            width: 60%;
            margin-left: 10%;
            margin-top: 3%;
            box-shadow: 5px 5px 15px #040404; 
            height: auto;
            border-radius: 0.1rem; 
            object-fit: cover;
                 transition: transform 0.5s ;
    

        }
        .welcome-image:hover{
         
              transform: scale(0.95);

        }
        .video-container img{
            width: 100%;
            height: 80%;
         
        }

        @media (max-width: 991.98px) {
            .custom-navbar .navbar-collapse {
                text-align: center;
                padding-top: 1rem;
            }
            .navbar-nav {
                width: 100%;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                margin: 0;
         
            }
             .custom-navbar .navbar-nav .nav-item {
                margin: 0.5rem 0;
            }
          
        }
        .counter-section {
background-image: url(./image/fork-near-plate-with-twig.jpg);
background-repeat: no-repeat;
background-size: cover;
object-fit: cover;
            padding: 80px 0;
            position: relative;
            
        }
        .counter-section h2{
                  border-bottom: 1px solid rgb(82, 79, 79);
                  width: 32%;
                  margin-left: 33%;
               
        }
.support-text{
     font-family: "Cinzel", serif;
     font-size: 30px;
     font-weight: 700;
     
     color:#db8d4d;
}
        .counter-box {
            text-align: center;
            color: #fff;
            padding: 20px;
            transition: transform 0.3s ease;
      
        }

        .counter-box:hover {
            transform: translateY(-10px);
        }

        .icon-box {
            font-size: 40px;
            color: #dd5c5c; 
            margin-bottom: 15px;
        }

        .counter-number {
            font-family: poppins;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
            display: block;
        }

        .counter-text {
              font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ffffff;
        }
                .card-text {
            --primary-gold: #7c5a29ff;
            --text-grey: #a0a0a0;
            --bg-light: #f4f4f4;
        }

        .card-text {
            background-image: url(./image/cup-tea-2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            object-fit: cover;
            background-color: var(--bg-light);
         font-family: "Cinzel", serif;
            overflow-x: hidden;
        }


.active-state img{
    width: 30vh;
}
        .script-title {
          font-family: "Cookie", cursive;

            font-size: 3.80rem;
            color: var(--primary-gold);
            line-height: 1;
            padding-top: 10px;
            margin-bottom: 0;
        }

        .subtitle {
            font-size: 0.9rem;
            letter-spacing: 3px;
            color: var(--text-grey);
            text-transform: uppercase;
            margin-top: 15px;
            font-weight: 300;
        }

        .event-card {
            position: relative;
            height: 550px; 
            background-size: cover;
            background-position: center;
            margin-bottom: 40px;
            overflow: visible; 
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .event-card::before {
            content: '';
            position: absolute;
            top: 9px;
            left: 15px;
            right: 15px;
            bottom: 12px;
            border: 2px solid rgba(0, 0, 0, 0.8);
            z-index: 2;
            pointer-events: none;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
         
            display: flex;
            flex-direction: column;
            justify-content: flex-start; 
            align-items: center;
            padding: 40px 30px;
            text-align: center;
            z-index: 1;
            transition: background 0.3s ease;
        }

        .event-card:hover .card-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.85) 100%);
            justify-content: center; 
        }

        .card-title {
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.1rem;
            margin-top: 20px;
            margin-bottom: 10px;
            position: relative;
        }
        
        .card-title::after {
            content: '\f0d7'; 
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            display: block;
            margin-top: 5px;
            font-size: 0.8rem;
            color: white;
        }

       
        .btn-read-more {
            background-color: var(--primary-gold);
        
        
            border: none;
            padding: 10px 25px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-top: 20px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }

        .btn-read-more:hover {
            background-color: #362b1e;
            color: #fff;
        }

        .event-card:hover .card-description {
            opacity: 1;
            max-height: 200px;
        }
        
        .event-card:hover .btn-read-more {
            opacity: 1;
            transform: translateY(0);
        }

        .event-card.active-state .card-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.85) 100%);
            justify-content: center;
        }
        .event-card.active-state .card-description {
            opacity: 1;
            max-height: 200px;
        }
        .event-card.active-state .btn-read-more {
            opacity: 1;
            transform: translateY(0);
        }


        .date-badge {
            position: absolute;
            bottom: -20px; 
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--primary-gold);
            color: white;
            width: 60px;
            height: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 3;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .date-badge .day {
            font-size: 1.2rem;
            font-weight: 700;
            line-height: 1;
        }

        .date-badge .month {
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .side-widgets {
            position: fixed;
            right: 0;
            top: 30%;
            z-index: 100;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .widget-btn {
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            cursor: pointer;
            transition: width 0.3s;
        }

        .widget-cart {
            background-color: #1e8e3e; 
        }
        .widget-cart:hover { width: 55px; }

        .widget-settings {
            background-color: #333; 
        }
        .widget-settings:hover { width: 55px; }

        .scroll-top-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-gold);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
            z-index: 99;
            transition: transform 0.3s;
        }
        
        .scroll-top-btn:hover {
            transform: translateY(-5px);
        }


/* Tablets and below (max-width: 991px) */
@media (max-width: 991.98px) {
   
    .navbar-brand img {
        width: 100px; 
        margin: 10px auto;
    }
    
    .custom-navbar .nav-link {
        padding: 10px !important; 
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }
}

/* Mobile Devices (max-width: 768px) */
@media (max-width: 768px) {
    
    .welcome-container {
        padding-top: 3rem;
        padding-left: 20px; 
        padding-right: 20px;
        text-align: center; 
    }

    .welcome-container h2 {
        font-size: 28px; 
        display: inline-block;
        margin-bottom: 20px;
    }

    .welcome-image-1 {
        width: 100%;
        margin-left: 0; 
        margin-top: 30px;
    }

    .btn-custom-yellow {
        display: inline-block;
        margin-bottom: 20px;
    }

    .script-title {
        font-size: 2.8rem;
    }
    
    .event-card {
        height: 400px; 
        margin-bottom: 50px; 
    }
    .counter-section h2 {
        width: 80%;
        margin-left: 10%; 
        font-size: 24px;
    }

    .counter-box {
        margin-bottom: 40px; 
    }
    
    .support-text {
        font-size: 24px;
        padding: 0 15px;
    }

    .side-widgets {
        display: none !important; 
    }
}

/* Small Mobiles (max-width: 480px) */
@media (max-width: 480px) {
    .script-title {
        font-size: 2.2rem;
    }
    
    .subtitle {
        font-size: 0.7rem;
    }
    
    .welcome-container h2 {
        font-size: 24px;
    }
}
        
        </style>
</head>
        
        <body>
        <section>
            <div class="hero">
            <div class="video-bg">
                <video autoplay muted loop playsinline>
                    <source src="./image/chai-sutta-bar-header-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Navigation Bar -->
             <div>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container-fluid px-4">
        
         
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    
                    </li>
                    <li class="nav-item dropdown">
                      <li class="nav-item">
                        <a class="nav-link" href="franchisefinal.php">Franchise</a>
                    </li>
                       
                    </li>
                </ul>
            <div class="navbar-brand">
              <img src="./image/white-logo.png" alt="">
            </div>
                <ul class="navbar-nav ms-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="menuu.php">Menu</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="galleryfinal.php">Gallery</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blogfinal.php">Blog</a>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
   </section>
<section>
   <div class=" welcome-container mb-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="welcome-heading mb-4">Cuddle The Kulhad</h2>
                <p class="welcome-text mb-4">
                With over 6 Lakh Kulhad Chai every day, we brew the perfect experience of happiness and create soulful memories. We are synonymous with aromatic Kulhad Chai and platterful of cool vibes.

We are India’s fastest growing chai-chain & franchise that started its journey back in 2016. We envision blending Kulhad’s health benefits with the most go-to-beverage “Chai” in India. Hailing from the commercial capital of Madhya Pradesh, we’re well known for our uniqueness and world-class service. We have a mission to serve a wishful cup of tea in every corner of the world. 

Always Welcome To Join Us & Fall In Love With Tea Again.
                </p>
                <a href="#" class=" btn-custom-yellow">READ OUR STORY</a>
            </div>
            <div class="col-lg-6">
                <img src="./image/tea-cup.jpg"
                     class="welcome-image-1"
                     alt="">
            </div>
        </div>
    </div>
   </section>
    <section class="card-text">
    <div class="side-widgets d-none d-md-flex">
        <div class="widget-btn widget-cart" title="View Cart">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="widget-btn widget-settings" title="Settings">
            <i class="fas fa-arrow-left"></i>
        </div>
    </div>
    <div class="scroll-top-btn" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div>

    <div class="container py-5">
        
        <div class="text-center mb-5">
            <h2 class="script-title">Upcoming Events</h2>
            <p class="subtitle">The Future Looks Bright</p>
            
        
        </div>
        <div class="row g-4">
            
            <div class="col-md-4">
                <div class="event-card" style="background-image: url('./image/New-Delhi-Grand-Opening-Poster.webp');">
                    <div class="card-overlay">
                     
                       
                        <button class=" btn-read-more">Read More</button>
                    </div>
                    <div class="date-badge">
                        <span class="day">17</span>
                        <span class="month">Jun</span>
                    </div>
                </div>
            </div>

          <div class="col-md-4">
                <div class="event-card" style="background-image: url('./image/Barabanki-UP-Grand-Opening-Poster.webp');">
                    <div class="card-overlay">
                     
                       
                        <button class="btn-read-more">Read More</button>
                    </div>
                    <div class="date-badge">
                        <span class="day">17</span>
                        <span class="month">Jun</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="event-card" style="background-image: url('./image/Chennai-Grand-Opening-Poster-1.webp');">
                    <div class="card-overlay">
                     
                       
                        <button class="btn-read-more">Read More</button>
                    </div>
                    <div class="date-badge">
                        <span class="day">17</span>
                        <span class="month">Jun</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section>
      <?php
    include 'franchiseform.php';
    ?>
</section>
 <section>
   <div class=" welcome-container mb-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="welcome-heading mb-4">
Chai Sutta Bar -Untold Story</h2>
                <p class="welcome-text mb-4">
                “I remember the initial days of CSB where each new customer brought tons of joy and smiles to my and other team members’ face. And when any customer praised us for tasty chai, use of kulhad, or ambience, we were over nine clouds. At CSB, we always want that fire inside every member of CSB and crave that smile. Now, I love to hear stories from different corners of the world.”- Anubhav Dubey


                </p>
                <a href="#" class=" btn-custom-yellow">Know More!</a>
            </div>
            <div class="col-lg-6 ">
                <img src="./image/o3-1.jpg"
                     class="welcome-image-1"
                     alt="">
            </div>
        </div>
    </div>
   </section>
    </section>
    <section class="counter-section text-center">
        <h2 class=" support-text text-center mb-5 ">
            With Your Love & Support
        </h2>
        <div class="container">
            <div class="row">
                
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="counter-number" data-target="600">0</span>
                        <p class="counter-text">Outlets</p>
                    </div>
                </div>

                 <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="fas fa-city"></i>
                        </div>
                        <span class="counter-number" data-target="370">0</span>
                        <p class="counter-text">Cities</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="counter-box">
                        <div class="icon-box">
                            <i class="fas fa-coffee"></i>
                        </div>
                        <span class="counter-number" data-target="600000">0</span>
                        <p class="counter-text">Kulhads/Day</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="counter-box">
                        <div class="icon-box">
                      <i class="fa-solid fa-cow"></i>
                        </div>
                        <span class="counter-number" data-target="20000">0</span>
                        <p class="counter-text">Milk Used/ Dyas</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
   
    <section class="mt-1">
          <?php
    include 'footer.php';
    ?>
    </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const counters = document.querySelectorAll('.counter-number');
        const speed = 200; 

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText; 
                    
                   
                    const inc = target / speed;

                  
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20); 
                    } else {
                        counter.innerText = target; 
                    }
                };
                updateCount();
            });
        }

        const observerOptions = {
            root: null,
            threshold: 0.4
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.disconnect(); 
                }
            });
        }, observerOptions);

        const targetSection = document.querySelector('.counter-section');
        if(targetSection) {
            observer.observe(targetSection);
        }
             function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        const cards = document.querySelectorAll('.event-card');
        
        cards.forEach(card => {
            card.addEventListener('click', function() {
                cards.forEach(c => c.classList.remove('active-state'));
                this.classList.add('active-state');
            });
        });
    </script>
    <script>
        
    //disable right click
document.addEventListener('contextmenu', function(e) {
  e.preventDefault();
});
</script>
<script>
document.addEventListener('keydown', function(e) {
  if (
    e.ctrlKey && (
      e.key === 'u' || // View source
      e.key === 's' || // Save
      e.key === 'c' || // Copy
      e.key === 'i' || // Inspect
      e.key === 'j'    // Console
    )
    || e.key === 'F12'
  ) {
    e.preventDefault();
    return false;
  }
});
</script>
<script>
    //disable dragging of images
document.addEventListener('dragstart', function(e) {
  e.preventDefault();
});
</script>

        </body>
    </html>

