<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chai Sutta Bar - Blog Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: serif;
            background-color: #f8f8f8;
        }

        .blog-header {
            text-align: center;
            padding: 40px 0 20px 0;
       
        }

        .blog-post-card {
            background-color: #fff;
            border: 1px solid #eee;
            margin-bottom: 30px;
            text-align: center;
            padding-bottom: 20px;
            transition: box-shadow 0.3s;
            height: 100%; 
                 border: 1px solid rgb(122, 109, 109);
        }

        .blog-post-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .post-image-placeholder {
            width: 100%;
            height: 350px; 
            background-color: #c39d9d;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .post-image-placeholder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .post-excerpt {
            padding: 0 15px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .read-more {
            color: #a0522d;
            text-transform: uppercase;
            font-size: 0.9rem;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 10px;
        }

        .sidebar-widget {
            background-color: #ffffffff;
            border: 1px solid #908b8bff;
            padding: 20px;
            margin-bottom: 30px;
        }

        .widget-title {
               font-family:serif;
            font-size: 1.2rem;
            text-transform: uppercase;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 15px;
            color: #131212ff;
        }

        .sidebar-widget .btn-send {
              font-family:serif;
            width: 100%;
            margin-top: 15px;
            font-weight: 600;
            background-color: #000000ff;
            color: white;
            border: none;
            padding: 8px;
        }
        
        .sidebar-widget .btn-send:hover {
            background-color: #1f1e1eff;
        }

    
        .sidebar-input {
            width: 100%;
            border: 1px solid #ddd;
            padding: 8px;
            border-radius: 4px;
        }

        .recent-post-link {
            font-family:serif;
            display: block;
            padding: 8px 0;
            color: #111318ff;
            text-decoration: none;
            border-bottom: 1px dotted #eee;
        }

        .recent-post-link:hover {
            color: #a0522d;
            padding-left: 5px; 
            transition: 0.2s;
        }

    
        @media (max-width: 991.98px) {
            .sidebar-widget {
                margin-top: 20px;
            }
            
            .post-image-placeholder {
                height: 220px;
            }
        }

        @media (max-width: 767.98px) {
            .blog-header {
                padding: 20px 0;
            }

            .post-image-placeholder {
                height: 200px; 
            }

            .blog-post-card {
                margin-bottom: 20px;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="blog-header">

            
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="blog-post-card w-100">
                                <div class="post-image-placeholder">
                                    <img src="./image/9a04d9b1c938f9a3e43a9da30fe0f966.jpg" alt="Blog Image">
                                </div>
                                <p class="post-excerpt">Meet Anubhav Dubey- The Kulhad Man of India</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="blog-post-card w-100">
                                <div class="post-image-placeholder">
                                    <img src="./image/tea-cup.jpg" alt="Blog Image">
                                </div>
                                <p class="post-excerpt">Investing in the Future: How Tea Businesses Are Adapting</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="blog-post-card w-100">
                                <div class="post-image-placeholder">
                                    <img src="./image/work.jpg" alt="Blog Image">
                                </div>
                                <p class="post-excerpt">The Rise of Specialty Tea Cafes: A Lucrative Avenue</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mt-5 d-flex align-items-stretch">
                            <div class="blog-post-card w-100">
                                <div class="post-image-placeholder">
                                    <img src="./image/brownies-strainer-front-view.jpg" alt="Blog Image">
                                </div>
                                <p class="post-excerpt">Serving Success: A Fast Food Business Idea</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4  mt-5 d-flex align-items-stretch">
                            <div class="blog-post-card w-100">
                                <div class="post-image-placeholder">
                                    <img src="./image/csb1.jpg" alt="Blog Image">
                                </div>
                                <p class="post-excerpt">5 Reasons to start Food Franchise Business</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4  mt-5 d-flex align-items-stretch">
                            <div class="blog-post-card w-100">
                                <div class="post-image-placeholder">
                                    <img src="./image/csb5.jpg" alt="Blog Image">
                                </div>
                                <p class="post-excerpt">How to Plan Menu for Cafe?</p>
                                <br>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="sidebar-widget">
                        <h4 class="widget-title">Search</h4>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="sidebar-widget">
                        <h4 class="widget-title">Contact Form</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                <input type="text" class="sidebar-input" placeholder="Name..">
                            </li>
                            <li class="list-group-item px-0">
                                <input type="email" class="sidebar-input" placeholder="Email..">
                            </li>
                            <li class="list-group-item px-0">
                                <textarea class="sidebar-input" rows="2" placeholder="Message.."></textarea>
                            </li>
                            <button type="button" class="btn-send">Send</button>
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h4 class="widget-title">Recent Posts</h4>
                        <a href="#" class="recent-post-link">Made with love menu</a>
                        <a href="#" class="recent-post-link">No-Smoking</a>
                        <a href="#" class="recent-post-link">Orphan Employment</a>
                        <a href="#" class="recent-post-link">Double-choc brownies</a>
                        <a href="#" class="recent-post-link">Quick Grilled Pizza</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>