<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJzL38nHAwA3yRzJ0bK7n4x1j1XJ8L/M8E4n+Q5c/28c1P/B4C0y0tH0g+Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;500;600;700&display=swap');


        .blog-text {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            background-color: white;
            position: relative;
            overflow: hidden;
        }

        .blog-text img {
            height: auto;
            min-height: 250px;
            width: 100%;
            object-fit: cover;
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
            margin: 0;
        }

        .blog-text h4 {
            position: absolute;
            top: 45%;
            left: 36%;
            font-family: "Cinzel", serif;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 2px 2px 4px #000000;
            margin: 0;
        }

        .darker {
            background-color: rgb(255, 255, 255);
        }

        .text-darker {
            background-image: url('./image/unnamed (8).jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            padding: 4rem 0;
        }

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .text-dark {
            font-family: 'Playfair Display', serif;
            letter-spacing: 1px;
        }

        .accent-line {
            width: 32px;
            height: 2px;
            background-color: #f97316;
            margin: 0 auto 1rem auto;
        }

        .icon-size {
            font-size: 3rem;
            color: #0b0b0b;
            margin-bottom: 1.5rem;
        }

        .text-accent {
            color: #f97316 !important;
        }

        .font-elegant {
            font-family: 'Cormorant Garamond', serif;
        }

        .paratext {
            font-family: poppins;
            font-size: 15px;
        }

        .text-custom-light {
            color: #fefeff !important;
        }

        .visitor-text img {
            box-shadow: 2px 4px 4px 4px rgba(124, 122, 122, 0.2);
            width: 100%;
            padding: 10px;
            background: white;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .visitor-text img:hover {
            transform: scale(1.02);
        }

        @media (max-width: 768px) {

            .blog-text h5 {
                left: 50%;
                top: 40%;
                font-size: 16px;
                width: 100%;
                text-align: center;
            }

            .blog-text h4 {
                left: 50%;
                top: 55%;
                font-size: 22px;
                width: 100%;
                text-align: center;
            }

            .display-5 {
                font-size: 2rem;
            }

            .display-4 {
                font-size: 2.5rem;
            }

            .text-darker {
                padding: 2rem 0;
                min-height: auto;
            }
            
            .container {
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section>
        <div>
            <div class="blog-text img-fluid">
                <img src="./image/blog-bg.jpg" alt="Franchise Banner">
                <h5>HOME</h5>
                <h4>/Franchise</h4>
            </div>
        </div>
    </section>

    <section class="py-5 py-md-5 darker">
        <div class="container text-center">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accent-line"></div>
                    <p class="text-uppercase small fw-medium text-accent mb-2" style="letter-spacing: 0.15em;">
                        Features
                    </p>
                    <h2 class="display-5 font-playfair fw-bold mb-3 text-dark">
                        Why people choose us?
                    </h2>
                    <p class="lead text-secondary mb-5 mb-lg-50 font-poppins">
                        They choose us because our commitment ensures quality experiences every single time.
                    </p>
                </div>
            </div>

            <div class="row g-4 g-lg-5">

                <div class="col-md-4">
                    <div class="d-flex flex-column align-items-center">
                        <i class="fas fa-mug-hot icon-size"></i>
                        <h3 class="h5 fw-semibold mb-3 text-dark">Target Audience</h3>
                        <p class="text-secondary px-3 paratext" style="max-width: 300px;">
                            We are a major attraction for youths who are spending more than 6,00,000 minutes in our
                            outlets. In the coming years, we are targeting to reach more cities.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-column align-items-center">
                        <i class="fas fa-seedling icon-size"></i>
                        <h3 class="h5 fw-semibold mb-3 text-dark">Fresh Concept</h3>
                        <p class="text-secondary px-3 paratext" style="max-width: 300px;">
                            Our concept of ‘Taste The Kulhad Chai' in a bar-like setting where smoking is completely
                            prohibited has been a new concept focusing on health.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex flex-column align-items-center">
                        <i class="fas fa-user-check icon-size"></i>
                        <h3 class="h5 fw-semibold mb-3 text-dark">Brand Value</h3>
                        <p class="text-secondary px-3 paratext" style="max-width: 300px;">
                            At present, Chai Sutta Bar has culminated into a brand that resonates with youth through
                            our vision and mission, marking presence in 370+ cities.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="text-darker">
        <div class="container">
            <header class="text-center mb-5">
                <h1 class="display-4 font-elegant fw-bold text-custom-light mb-4" style="letter-spacing: 0.05em;">
                    Our Happy Franchise Owners
                </h1>
                <p class="lead text-secondary max-w-header mx-auto fw-bold">
                    You Might Also Be Interested In
                </p>
            </header>

            <div class="row g-4 justify-content-center">
                
                <div class="col-12 col-md-4 visitor-text">
                    <img src="./image/3.png" alt="Franchise Owner 1" class="img-fluid">
                </div>
                
                <div class="col-12 col-md-4 visitor-text">
                    <img src="./image/4.png" alt="Franchise Owner 2" class="img-fluid">
                </div>
                
                <div class="col-12 col-md-4 visitor-text">
                    <img src="./image/unnamed-2.png" alt="Franchise Owner 3" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <div>
        <?php include 'franchiseform.php'; ?>
    </div>
    <div>
        <?php include 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>