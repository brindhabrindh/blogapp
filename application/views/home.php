<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo base_url('assets/img/B logo.png'); ?>" rel="icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            height: 100%;
        }
        html {
            height: 100%;
        }
        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .home-container {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('<?php echo base_url("assets/img/banner3.jpg"); ?>');
            background-color: #fff;
            background-size: cover;
            background-position: center;
            height: 650px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: left;
            text-align: left;
            color: white;
            position: relative;
            padding: 0 20px; 
        }

        .home-container h1, .home-container p {
            z-index: 2;
            margin-left: 50px;
            font-weight: 600;
        }
        .food p,
        .furniture p,
        .tech p,
        .travel p {
            font-size: 18px;
            letter-spacing: 0.4px;
        }
    </style>

</head>
<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo base_url('home'); ?>">My Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="<?php echo base_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="<?php echo base_url('blog'); ?>">Blog</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="<?php echo base_url('search'); ?>">Search</a>
                    </li>
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url('category/health'); ?>">Health</a>
                            <a class="dropdown-item" href="<?php echo base_url('category/lifestyle'); ?>">Lifestyle</a>
                            <a class="dropdown-item" href="<?php echo base_url('category/sports'); ?>">Sports</a>
                            <a class="dropdown-item" href="<?php echo base_url('category/entertainment'); ?>">Entertainment</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-auto" action="<?php echo base_url('search'); ?>" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>

        <div class="home-container">
            <h1>CREATE A BLOG</h1>
            <p class="pt-3" style="font-size:18px; letter-spacing:0.5px">Unleash your creativity and share your unique voice with the world. 
                Craft a stunning, personalized blog that reflects your brand. <br> Engage and grow your audience with powerful built-in marketing tools, 
                and turn your passion into profit with flexible monetization options.</p> <br>
                <p class="verticals">
  <a href="#"  target="_blank">Get Started</a>
  </p>
        </div>

        <section class="container posts mt-5 mb-5">

        <!-- Food and Diet -->

            <div class="food d-flex flex-column flex-md-row">
            <div class="mr-5">
                    <img src="<?php echo base_url('assets/img/food.jpg'); ?>" class="fixed-size-image">
                </div>
                <div>
                    <h4 class="font-weight-bold"><i class="fas fa-solid fa-quote-left"></i> Culinary Adventures: Sharing Healthy Eating Tips <i class="fas fa-solid fa-quote-right"></i></h4>
                    <p class="font-weight-normal pt-3 w-75">Embark on a culinary adventure and discover the joy of preparing delicious, healthy meals that nourish your body and delight your taste buds. 
                        Join our community to share your favorite recipes and tips for making nutritious eating both simple and enjoyable.</p>
                </div>
            </div>

            <!-- Furniture -->

            <div class="furniture d-flex flex-column flex-md-row mt-5">
                <div>
                    <h4 class="font-weight-bold"><i class="fas fa-solid fa-quote-left"></i> Stylish Living: Transform Your Space with Beautiful Furniture <i class="fas fa-solid fa-quote-right"></i></h4>
                    <p class="font-weight-normal pt-3 w-75">Discover how to transform your living space into a stylish sanctuary with our expert tips on choosing beautiful and functional furniture. 
                        Join our community to share your own decor ideas and find inspiration for creating a home that reflects your unique personality and style.</p>
                </div>
            <div class="mr-5">
                    <img src="<?php echo base_url('assets/img/furniture2.jpg'); ?>" class="fixed-size-image">
                </div>
            </div>

            <!-- Technology -->

            <div class="tech d-flex flex-column flex-md-row mt-5">
            <div class="mr-5">
                    <img src="<?php echo base_url('assets/img/tech.jpg'); ?>" class="fixed-size-image">
                </div>
                <div>
                    <h4 class="font-weight-bold"><i class="fas fa-solid fa-quote-left"></i> Tech Trends: Exploring the Future of Innovation <i class="fas fa-solid fa-quote-right"></i></h4>
                    <p class="font-weight-normal pt-3 w-75">Stay ahead of the curve with the latest insights and developments in the world of technology. 
                        Join us as we explore groundbreaking gadgets, emerging trends, and practical tech tips to enhance your daily life.</p>
                </div>
            </div>

                        <!-- Travel -->

                        <div class="travel d-flex flex-column flex-md-row mt-5">
                <div>
                    <h4 class="font-weight-bold"><i class="fas fa-solid fa-quote-left"></i> Wanderlust Chronicles: Your Guide to Unforgettable Journeys <i class="fas fa-solid fa-quote-right"></i></h4>
                    <p class="font-weight-normal pt-3 w-75">Embark on a journey with us as we uncover the world's hidden gems and offer insider tips for your next adventure. 
                        From budget travel hacks to luxurious escapes, our blog is your ultimate guide to exploring new destinations and creating unforgettable memories.</p>
                </div>
            <div class="mr-5">
                    <img src="<?php echo base_url('assets/img/travel.jpg'); ?>" class="fixed-size-image">
                </div>
            </div>
        </section>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2024 My Blog</span>
            </div>
        </footer>
        
    </div>
</body>
</html>
