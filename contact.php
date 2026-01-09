<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap');

        :root {
            --primary-color: #b65806;
            --dark-overlay: rgba(0, 0, 0, 0.7);
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #000;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .display-1,
        .display-5 {
            font-family: 'Playfair Display', serif;
        }

        .small-text {
            font-size: 0.9rem;
        }

        .small-text-orange {
            color: var(--primary-color);
            letter-spacing: 2px;
            font-size: 0.9rem;
        }

        /* --- Header Section --- */
        .header-map-section {
            position: absolute;
            width: 99vw;
            height: 100vh;
            top: -100px;
            background-size: cover;
            min-height: 80vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .header-map-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-color: var(--dark-overlay);
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 10;
        }

        /* --- Buttons --- */
        .btn-warning {
            background-color: #922312;
            border-color: #050504;
            color: #fff;
            transition: all 0.3s;
        }

        .btn-warning:hover {
            background-color: #492910;
            border-color: #191816;
            color: #fff;
        }

        .btn-outline-light:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .icon-large {
            font-size: 3rem;
            color: var(--primary-color);
        }

        .divider-line {
            border-top: 2px solid var(--primary-color);
            width: 80px;
            margin: 0 auto;
            opacity: 1;
        }

     
        .form-max-width {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-control {
            background-color: #fff;
            border-radius: 5px;
            padding: 12px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(182, 88, 6, 0.25);
            border-color: var(--primary-color);
        }

        .message-title {
            background-image: url('./image/unnamed (8).jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
<?php
$merr = $eerr = $nerr = $confirm = '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = trim($_POST["fname"] ?? '');
$lastname = trim($_POST["lname"] ?? '');
$email = trim($_POST["checkbox"] ?? '');
$number = trim($_POST["contact"] ?? '');
$text = trim($_POST["message"] ?? '');

if($nerr === '' && $eerr === '' && $merr === '') {
  $mysqli = new mysqli("localhost", "root", "", "form");
  if ($mysqli->connect_errno) {
    $confirm = "connection failed: " . $mysqli->connect_error;
}
else{
    $stmt = $mysqli->prepare("INSERT INTO cafe (first_name, last_name, cafe_email, cafe_address ) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $number);
    if($stmt->execute()){
        $confirm = "Message sent successfully.";
    } else {
        $confirm = "Error: " . $stmt->error;
    }
    $stmt->close();
    $mysqli->close();
    }
}
}
?>
    <?php include 'navbar.php'; ?>
    </section class="map-section">
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.311993693484!2d80.94083667522361!3d26.893591776658713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957e11840b019%3A0xceac6784455ca580!2sChai%20Sutta%20Bar!5e0!3m2!1sen!2sin!4v1764760137277!5m2!1sen!2sin"
            width="100%" height="500vh" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <header id="main-header" class="header-map-section">
        <div class="container header-content">
            <div class="row align-items-center ">
                <div class="col-lg-8 col-md-10 mx-auto text-center text-lg-start mt-5">
                    <p class="text-uppercase text-white small-text mb-5">Contact</p>
                    <h1 class="display-1 fw-bold text-white mb-3">Get In Touch</h1>
                    <p class="lead text-success-50 mb-4">
                        For any questions, please contact us anytime; we are here.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#" class="btn btn-warning py-3 px-5 text-uppercase fw-bold">Home</a>
                        <a href="#" class="btn btn-outline-light py-3 px-5 text-uppercase fw-bold">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="message-title">

        <section id="contact-info" class="py-5">
            <div class="container text-center">
                <p class="small-text-orange text-uppercase fw-bold">Contact</p>
                <h5 class="display-5 fw-bold mb-3 text-white">Contact Information</h5>
                <p class="mb-5 text-white fw-bold">Reach Out!</p>

                <div class="row text-white g-4">
                    <div class="col-md-4 col-12">
                        <i class="fas fa-envelope icon-large mb-3"></i>
                        <h3 class="h4">Write Us</h3>
                        <p class="mb-0">info@chaisuttabar.com</p>
                        <p>reservation@chaisuttabar.com</p>
                    </div>
                    <div class="col-md-4 col-12">
                        <i class="fas fa-phone-volume icon-large mb-3"></i>
                        <h3 class="h4">Call Us</h3>
                        <p class="mb-0">+91 89886 86111</p>
                        <p>+91 (093) 753 43 72</p>
                    </div>
                    <div class="col-md-4 col-12">
                        <i class="fas fa-map-marked-alt icon-large mb-3"></i>
                        <h3 class="h4">Visit Us</h3>
                        <p class="mb-0">Chai Sutta Bar - Lucknow</p>
                        <p>1/16 E, Kathauta Chouraha, Gomti Nagar</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-form" class="py-5">
            <div class="container text-center message-section">
                <hr class="divider-line mb-4">
                <h2 class="display-5 fw-bold mb-3 text-white">Write us a message</h2>
                <p class="mb-5 text-white">Have queries? Contact us anytime.</p>

                <div class="form-max-width">
                    <form method="POST">
                        <div class="row g-3">
                                    <span style="color:red;"> <?php echo $nerr; ?> </span>
                                      <span style="color:red;"> <?php echo $eerr; ?> </span>
                                      <span style="color:red;"> <?php echo $merr; ?> </span>
                                       <span style="color:red;"> <?php echo $confirm; ?> </span>
                            <div class="col-md-6 col-12">
                                <input type="name" class="form-control" placeholder="First Name" name="fname"required>
                         
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="lastname" class="form-control" placeholder="Last Name"  name="lname"required>
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="email" class="form-control" placeholder="Email"  name="checkbox"required>
                            </div>
                            <div class="col-md-6 col-12">
                                <input type="tel" class="form-control" placeholder="Phone Number" name="contact"required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="5" placeholder="Message" name="message"></textarea>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-warning btn-lg px-5 text-uppercase fw-bold">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>

    </section>
<section>
    <?php include 'franchiseform.php'; ?>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>