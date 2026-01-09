<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chai Sutta Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-container {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 3rem 0; 
        }
        .bg-image-wrapper {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }
        .bg-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .bg-image-wrapper .overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .form-card {
            position: relative;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
        .logo-h1 {
            font-size: 1rem; 
            font-weight: 700;
            color: #f59e0b; 
            letter-spacing: 0.1em;
        }
        .logo-p {
            font-size: 0.875rem;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.8);
            letter-spacing: 0.5em;
        }
        .form-control, .form-select {
            background-color: #ffffff;
            color: #111827;
            border: none;
            padding: 0.75rem; 
        }
        .form-control:focus, .form-select:focus {
            background-color: #ffffff;
            color: #111827;
            border-color: #f59e0b;
            box-shadow: 0 0 0 0.25rem rgba(245, 158, 11, 0.5);
        }
        .form-control::placeholder {
            color: #6b7280;
        }
        .form-label {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.25rem;
        }
        input[type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0.5;
            filter: invert(0.5);
        }

        /* --- Buttons --- */
        .btn-book-table {
            background-color: #f59e0b !important;
            color: #0f0d0d;
            font-weight: 700;
            padding: 0.75rem 1.5rem;
            border: none;
        }
        .btn-book-table:hover {
            background-color: #4d3b2e !important; 
            color: #070707;
        }
        .btn-book-table:focus {
            box-shadow: 0 0 0 0.25rem rgba(217, 119, 6, 0.5);
        }
        /* --- Side Icons --- */
        .side-icons {
            position: fixed;
            top: 6rem; 
            right: 0;
            z-index: 20;
        }
        .side-icons .btn {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            padding: 0.75rem; 
        }
        .info-icon {
            position: fixed;
            bottom: 2.5rem; 
            right: 2.5rem;
            z-index: 20;
            width: 3rem;
            height: 3rem; 
            font-size: 1.5rem;
            font-weight: 700;
        }

    </style>
</head>
<body>
 
   <div class="bg-dark">
    <div class="bg-container">
        <div class="bg-image-wrapper">
            <img src="./image/blur-coffee-cafe-shop-restaurant-with-bokeh-background-xd.jpg" 
                 alt="Restaurant interior">
            <div class="overlay"></div>
        </div>
        <div class="container card-title my-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="form-card rounded-lg p-4 p-md-5 text-white">
                        <div class="text-center mb-4">
                            <h5 class="logo-h1">Want To Franchise With Us?</h5>
                          
                        </div>
                        <div class="text-center mb-4">
                            <h2 class="text-white fs-3 fw-bold">Request A Franchise Consultation</h2>
                        </div>
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 98765 43210">
                                </div>
                                <div class="col-md-6">
                                    <label for="location" class="form-label">City/Location of Interest</label>
                                    <input type="text" id="location" name="location" class="form-control" placeholder="e.g., Uttar Pradesh, India">
                                </div>
                                <div class="col-md-6">
                                    <label for="liquid-capital" class="form-label">Budget </label>
                                    <select id="liquid-capital" name="liquid-capital" class="form-select">
                                        <option selected disabled value="">Please select...</option>
                                        <option> Budget Rs. 22-25 lacs</option>
                                        <option> Budget Rs. 25-30 lacs</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="net-worth" class="form-label">Estimated Net Worth</label>
                               <input type="net" id="net" name="net" class="form-control" placeholder="Net Worth Rs. 1-2 crores">
                                       
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Tell us about your interest</label>
                                    <textarea id="message" name="message" rows="3" class="form-control" placeholder="Why are you interested in a Chai Sutta Bar franchise?"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-book-table w-100">
                                      Send Your Details</button>
                                </div>
                                <div class="col-12 mt-2">
                                    <p class="text-center small text-white-50 p-3">
                                        Submitting this form does not guarantee a franchise. We will contact you to discuss details.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
   <?php
    include 'footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>