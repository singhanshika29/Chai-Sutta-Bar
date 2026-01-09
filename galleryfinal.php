<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&family=Merriweather:ital,wght@0,300;0,400;1,700&family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
      
        body {
            overflow-x: hidden; 
        }

        .section-gallery {
            background-image: url('./image/fork-near-plate-with-twig.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }

       
        .blog-text {
            position: relative; 
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       
            background-color: white;
            overflow: hidden;
            margin-bottom: 1px;
        }

        .blog-text img {
            width: 100%;
            height: auto;
            min-height: 250px; 
            object-fit: cover;
            display: block;
            filter: brightness(0.7);
        }

        .banner-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            padding: 0 15px;
        }

        .banner-caption h5 {
            font-family: "Cinzel", serif;
            color: #ccc; 
            font-size: 20px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
            margin-bottom: 10px;
        }

        .banner-caption h4 {
            font-family: "Cinzel", serif;
            color: white;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
            margin: 0;
        }
        .gallery-section {
            padding: 60px 0;
        }

        .gallery-title {
            font-weight: 900;
            font-size: 2.5rem;
            color: #ffffff;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .gallery-subtitle {
            font-family: 'Poppins', sans-serif;
            color: #488814ff; 
         
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .filter-buttons {
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap; 
            gap: 10px;
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            color: #555;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 1px;
            border-radius: 4px;
        }

        .filter-btn:hover {
            background-color: #992525;
            color: white;
        }

        .filter-btn.active {
            background-color: #333;
            color: #fff;
        }

        /* --- Gallery Grid --- */
        .gallery-item {
            margin-bottom: 30px;
            transition: all 0.4s ease-in-out;
        }

        .gallery-item.hide { display: none; }
        .gallery-item.show { animation: fadeIn 0.5s ease; }

        .image-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 300px; 
            background-color: #ddd;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        @media (max-width: 991px) {
            .gallery-title {
                font-size: 2.2rem;
            }
            .image-container {
                height: 280px;
            }
        }

        @media (max-width: 768px) {
            .gallery-section {
                padding: 40px 0;
            }

            .banner-caption h4 {
                font-size: 24px;
            }
            .banner-caption h5 {
                font-size: 16px;
            }

            .gallery-title {
                font-size: 1.8rem;
            }
            
            .gallery-subtitle {
                font-size: 0.95rem;
            }

            .filter-btn {
                padding: 8px 12px;
                font-size: 0.75rem;
                flex: 1 1 auto; 
            }
        }

        @media (max-width: 576px) {
            .image-container {
                height: 250px; 
            }
            
            .blog-text img {
                min-height: 200px;
            }
        }
    </style>
</head>
<body>

    <section>
        <?php include 'navbar.php'; ?>
    </section>

    <section class=" ">
        <div class="blog-text mt-3">
            <img src="./image/blog-bg.jpg" alt="Gallery Banner">
            
            <div class="banner-caption">
                <h5>HOME</h5>
                <h4>/Gallery</h4>
            </div>
        </div>
    </section>

    <section class="section-gallery">
        <div class="gallery-section container">
            
            <div class="text-center">
                <h1 class="gallery-title">Check Out Our Gallery</h1>
                <p class="gallery-subtitle">Take A Peek Inside Our Wonderworld</p>
            </div>

            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="food">Food</button>
                <button class="filter-btn" data-filter="media">Media</button>
                <button class="filter-btn" data-filter="outlets">Outlets</button>
                <button class="filter-btn" data-filter="coming-soon">Coming Soon</button>
            </div>

            <div class="row" id="gallery-grid">
                
                <div class="col-lg-4 col-md-6 col-12 gallery-item" data-category="food">
                    <div class="image-container">
                        <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Noodles">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 gallery-item" data-category="outlets">
                    <div class="image-container">
                        <img src="./image/b8b22bb57bd8550ad59a1b63b9f81d44.jpg" alt="Tea Table Setup">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 gallery-item" data-category="food">
                    <div class="image-container">
                        <img src="./image/tom.jpg" alt="Clay Cup Tea">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 gallery-item" data-category="media">
                    <div class="image-container">
                        <img src="./image/tea-cup.jpg" alt="Dark Food Photography">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 gallery-item" data-category="food">
                    <div class="image-container">
                        <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dessert">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 gallery-item" data-category="coming-soon">
                    <div class="image-container">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Restaurant Interior">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div >   
        <?php include 'franchiseform.php'; ?>
    </div>
    <div >  
        <?php include 'footer.php'; ?>
    </div>
  
    <script src="./script.js"></script>

</body>
</html>