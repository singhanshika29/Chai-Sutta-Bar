<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gourmet Cafe | Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary-gold: #d4a373;
            --dark-bg: #0f0f0f;
            --glass-white: rgba(255, 255, 255, 0.1);
        }

        body {
            background-color: var(--dark-bg);
            color: #ffffff;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }


        /* --- HERO SECTION --- */
        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('./image/about-4.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-title {
            font-family: 'Cinzel', serif;
            font-size: clamp(2.5rem, 8vw, 5rem);
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }
              /* Menu Grid Section */
              .bg-expand {
                background:#000000;
              }

        .menu-grid {
            padding: 50px 0;
            width: 90%;
            margin: auto;
        }
        
        .menu-card {
            background: rgba(26, 26, 26, 0.9);
            border: 1px solid #d4a373;
            border-radius: 5px;
            overflow: hidden;
            transition: 0.3s;
            margin-bottom: 30px;
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.5);
        }
        
        .menu-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .menu-card-body {
            padding: 20px;
            text-align: center;
            color: white;
        }
        
        .menu-price {
            color: #d4a373;
            font-weight: bold;
            font-size: 1.2rem;
        }
 .dining-icon img {
        width: 50px;
        height: auto;
        margin-top: 15px;
    }

    .dining-icon h3 {
        font-family: "Delius Unicase", cursive;
        color: #ffffffff;
        font-size: 18px;
        font-weight: 900;
        letter-spacing: 0.1em;
        border-bottom: 2px solid #d37f47ff;
        padding-bottom: 10px;
        width: 50vh;
        margin: auto;
        padding-top: 30px;

    }

        /* --- MENU CARDS --- */
        .section-title {
            font-family: 'Cinzel', serif;
            color: var(--primary-gold);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 2px;
            background: var(--primary-gold);
            margin: 10px auto;
        }

.menu-list-container {
    background: #121212;
            padding: 5rem 0;
        }
  
        .list-item {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 1.5rem;
            border-bottom: 1px dashed rgba(255,255,255,0.2);
        }

        .item-name {
            font-family: 'Cinzel', serif;
            font-size: 1.2rem;
            color: #eee;
        }

        .item-price {
            color: var(--primary-gold);
            font-weight: 700;
        }
             .btn-goold {
            background: #d4a373!important;
            color: #000;
            font-weight: 500!important;
            padding: 15px 36px!important;
            letter-spacing: 1px!important;
            transition: 0.3s;
        }

        .btn-goold:hover {
            background: #fff !important;
            color: #000 !important;
        }

        

  
    </style>
</head>

<body>

 <?php include 'navbar.php'; ?>

    <header class="hero-section">
        <div data-aos="zoom-out" data-aos-duration="1500">
            <h1 class="hero-title">A Sip of Perfection</h1>
            <p class="lead mb-4 text-white">Experience the finest craft coffee and artisan snacks.</p>
            <button href="#menu" class="btn btn-goold">VIEW OUR MENU</button>
        </div>
    </header>

    <section class="bg-expand">
        <div class="dining-icon text-center pt-5">
            <img src="./image/icon-dining-white.png" alt="">
            <h3>YOUR CRAVINGS, SERVED..</h3>
        </div>
   
      <section class="menu-grid">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="menu-card">
                    <img src="./image/tea-cup.jpg" alt="Masala Chai">
                    <div class="menu-card-body">
                        <h5>Masala Chai</h5>
                        <p class="small text-white-50">Authentic spiced tea for the soul.</p>
                        <p class="menu-price">₹15</p>
                        <button class="btn btn-sm btn-outline-light order">Order Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="menu-card">
                    <img src="./image/burger.jpg" alt="Veg Burger">
                    <div class="menu-card-body">
                        <h5>CSB Special Burger</h5>
                        <p class="small text-white-50">Loaded with cheese and veggies.</p>
                        <p class="menu-price">₹65</p>
                        <button class="btn btn-sm btn-outline-light">Order Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="menu-card"> 
                    <img src="./image/pizzaimage.jpg" alt="pizza">
                    <div class="menu-card-body">
                        <h5>Cheese Burger</h5>
                        <p class="small text-white-50">Classic taste with extra cheese.</p>
                        <p class="menu-price">₹80</p>
                        <button class="btn btn-sm btn-outline-light">Order Now</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="menu-card">
                    <img src="./image/2ca12a75f99cc58273a8f6da42665bc3.jpg" alt="Coffee">
                    <div class="menu-card-body">
                        <h5>Cold Coffee</h5>
                        <p class="small text-white-50">Chilled brew with chocolate topping.</p>
                        <p class="menu-price">₹50</p>
                        <button class="btn btn-sm btn-outline-light">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </section>
    <section class="menu-list-container">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="section-title text-start">Beverages</h2>
                    <div class="list-item">
                        <span class="item-name">Signature Chai</span>
                        <span class="item-price">₹20</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Dark Roast Espresso</span>
                        <span class="item-price">₹90</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Caramel Macchiato</span>
                        <span class="item-price">₹150</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                      <div class="list-item">
                        <span class="item-name">Dark Roast Espresso</span>
                        <span class="item-price">₹90</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Caramel Macchiato</span>
                        <span class="item-price">₹150</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                </div>
                <div class="col-md-6 ps-lg-5" data-aos="fade-left">
                    <div class="rounded-3 overflow-hidden shadow-lg w-100">
                        <img src="image/2ca12a75f99cc58273a8f6da42665bc3.jpg" class="img-fluid" >
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="menu-list-container">
        <div class="container">
            <div class="row align-items-center">
                  <div class="col-md-6 ps-lg-5" data-aos="fade-left">
                    <div class="rounded-3 overflow-hidden shadow-lg w-100">
                        <img src="./image/b8b22bb57bd8550ad59a1b63b9f81d44.jpg" class="img-fluid" >
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="section-title text-start">Quick Bites</h2>
                    <div class="list-item">
                        <span class="item-name">Signature Chai</span>
                        <span class="item-price">₹20</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Dark Roast Espresso</span>
                        <span class="item-price">₹90</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Caramel Macchiato</span>
                        <span class="item-price">₹150</span>
                    </div>
                    <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                     <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                     <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                     <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                      <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div>
                      <div class="list-item">
                        <span class="item-name">Wild Berry Mojito</span>
                        <span class="item-price">₹110</span>
                    </div> 
                    
                    
                    

                </div>
              
            </div>
        </div>
    </section> 
<?php include 'franchiseform.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>