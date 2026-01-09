<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Poller+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>
<style>
   
    .blog-text {
        position: relative; 
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     background-color: white;
        overflow: hidden; 
    }

    .blog-text img {
        width: 100%;
        height: auto;
        min-height: 200px;
        object-fit: cover;
        display: block;
    }

    .text-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px; 
        width: 100%;
        text-align: center;
    }

    .blog-text h5 {
        font-family: "Cinzel", serif;
        color: rgba(255, 255, 255, 0.8); 
        font-size: 20px;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
        margin: 0;
    }

    .blog-text h4 {
        font-family: "Cinzel", serif;
        color: white;
        font-size: 28px;
        font-weight: bold;
        text-shadow: 2px 2px 4px #000000;
        margin: 0;
    }

    @media screen and (max-width: 768px) {
        .blog-text h5 {
            font-size: 18px;
        }
        .blog-text h4 {
            font-size: 24px;
        }
        .blog-text img {
            min-height: 150px;
        }
    }

    @media screen and (max-width: 480px) {
        .blog-text h5 {
            font-size: 14px;
        }
        .blog-text h4 {
            font-size: 18px;
        }
        .text-overlay {
            gap: 5px;
        }
    }
</style>
<body>
    <?php include 'navbar.php'; ?>
    
    <section class="mt-3"> <div class="blog-text ">
            <img src="./image/blog-bg.jpg" alt="Blog Background">
            
            <div class="text-overlay">
                <h5>HOME/</h5>
                <h4>BLOG</h4>
            </div>
        </div>
    </section>

    <div>
        <?php include 'blog-1.php'; ?>
    </div>
    
    <div>
        <?php include 'franchiseform.php'; ?>
        <?php include 'footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>