<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;800&family=Merriweather:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    
    <style>
        .section-gallery {
               background-image: url(./image/fork-near-plate-with-twig.jpg);
               background-repeat: no-repeat;
               background-size: cover;
               object-fit: cover;
            font-family: 'Poppins', sans-serif;
          
        }
.blog-text{
   
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 10px;
    background-color: white;
}
.blog-text img{
    height:60%;
    width: 100%;
}
.blog-text h5{
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
.blog-text h4{
    position: absolute;
    top: 45%;
    left: 33.5%;
      font-family: "Cinzel", serif;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 28px;
    font-weight: bold;
    text-shadow: 2px 2px 4px #000000;
    
}
        .gallery-section {
         
            padding: 60px 0;
        }

        /* Header Styling */
        .gallery-title {
            font-weight: 900;
            font-size: 2.5rem;
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .gallery-subtitle {
            font-family: 'Poppins', sans-serif; /* Using Poppins to match the clean look, or switch to Merriweather for serif */
            color: #8B4513; /* SaddleBrown color to match the "wonderworld" text */
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 2rem;
        }

        /* Filter Buttons Styling */
        .filter-buttons {
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-btn {
            background: none;
            border: none;
            color: #878181;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            padding: 8px 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 1px;
        }

        .filter-btn:hover {
            color: #992525;
        }

        /* Active state matches the black box in the image */
        .filter-btn.active {
            background-color: #333;
            color: #fff;
            border-radius: 0; /* Sharp corners like in the image */
        }

        /* Gallery Grid Styling */
        .gallery-item {
            margin-bottom: 30px;
            transition: all 0.4s ease-in-out;
        }

        .gallery-item.hide {
            display: none;
        }

        .gallery-item.show {
            animation: fadeIn 0.5s ease;
        }

        .image-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 350px; /* Fixed height for consistency */
            background-color: #ddd;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        /* Hover Effect */
        .image-container:hover img {
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .gallery-title {
                font-size: 2rem;
            }
            .filter-buttons {
                gap: 5px;
            }
            .filter-btn {
                padding: 6px 10px;
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <section>
          <?php
    include 'navbar.php';
    ?>
    </section>
      <section>
        <div>
            <div class="blog-text img-fluid ">
                <img src="./image/blog-bg.jpg" alt="">

                <h5>HOME</h5>
                <h4>/Gallery</h4>

            </div>
    </section>
<section class="section-gallery">
    <section class="gallery-section container">
        <div class="text-center">
            <h1 class="gallery-title">Check Out Our Gallery</h1>
            <p class="gallery-subtitle">Take A Peek Inside Our Wonderworld</p>
        </div>
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="food">Food Photography</button>
            <button class="filter-btn" data-filter="media">Media Coverage</button>
            <button class="filter-btn" data-filter="outlets">Outlets Photos</button>
            <button class="filter-btn" data-filter="coming-soon">Coming Soon Outlets</button>
        </div>

        <div class="row" id="gallery-grid">
            
            <div class="col-md-4 col-sm-6 gallery-item" data-category="food">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1563379926898-05f4575a45d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Noodles">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 gallery-item" data-category="outlets">
                <div class="image-container">
                    <img src="./image/b8b22bb57bd8550ad59a1b63b9f81d44.jpg" alt="Tea Table Setup">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 gallery-item" data-category="food">
                <div class="image-container">
                    <img src="./image/tom.jpg" alt="Clay Cup Tea">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 gallery-item" data-category="media">
                <div class="image-container">
                    <img src="./image/tea-cup.jpg" alt="Dark Food Photography">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 gallery-item" data-category="food">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dessert">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-item" data-category="coming-soon">
                <div class="image-container">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Restaurant Interior">
                </div>
            </div>

        </div>
        </section>
    </section>
   <div class="mt-1">   <?php
    include 'franchiseform.php';
    ?>
    </div>
 <div class="mt-1">  <?php
    include 'footer.php';
    ?>
    </div>
  
    <script src="./script.js"></script>

</body>
</html>