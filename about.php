<?php
session_start();
ob_start();
@include 'config.php';



$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:index.php');
   ob_end_flush();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="icon" href="image/Icon_Pic.jpg" type="image/icon type">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>


<!--About Page section starts-->
<section class="aboutbot">

    <div class="row1">
        <div class="img-container">
            <img src="image/Menu_About-Banner.jpg" alt="">
            <h3>best flowers sellers</h3>
        </div>
        <div class="content">
            <h3>why choose us?</h3>
            <p>Welcome to Flora Flower Shop, where your moments bloom beautifully. Our shop stands out for 
                offering an extensive selection of both fresh and dried flowers, ensuring there's a perfect 
                bouquet for every occasion. What sets us apart is our inventive money bouquets, adding a dash of 
                creativity to your gifting choices. At Flora, quality is our hallmark; we meticulously select the finest blooms, 
                guaranteeing freshness and longevity in every arrangement. Our dedicated team is here to provide personalized service, 
                helping you find the ideal floral expression for your special moments. With Flora Flower Shop, expect not just flowers 
                but unforgettable experiences, crafted with care and designed to bring joy to your celebrations.</p>
            <a href="#" class="btn">Learn More</a>

        </div>
    </div>

    <div class="row">
        <div class="image">
            <img src="image/Icon_Pic.jpg" alt="">
        </div>

        <div class="content">
            <h3 class="title">what's make your day special!</h3>
            <p>What makes your day special is unique to you. It could be a heartfelt gesture, a surprise from 
                a loved one, a moment of joy, or simply something that brings a smile to your face. At Flora 
                Flower Shop, we believe in adding a touch of natural beauty to your special moments. Whether 
                it's a vibrant bouquet for a celebration, a thoughtfully crafted arrangement to express love, 
                or a unique money bouquet for that unexpected delight, we're here to make your day extraordinary. 
                Our flowers aren't just petals and stems; they're moments waiting to blossom, making your day a little 
                brighter and a lot more special.</p>
            <a href="#" class="btn">read more</a>
            <div class="icons-container">
                <div class="icons">
                    <img src="image/about-icon-1.png" alt="">
                    <h3>Quality Service</h3>
                </div>
                <div class="icons">
                    <img src="image/about-icon-2.png" alt="">
                    <h3>our branches</h3>
                </div>
                <div class="icons">
                    <img src="image/about-icon-3.png" alt="">
                    <h3>fast delivery</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Where effortless surprises meet stunning floral experiences</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>"At Flora Flower Shop, we pride ourselves on providing an 
                array of exquisite blooms, sourced fresh and diverse to offer 
                rare and beautiful flowers. Our team specializes in creating artful 
                arrangements, tailored to your preferences, ensuring each design is a 
                unique expression of creativity. Quality is our hallmark, guaranteeing 
                top-notch, fresh flowers that promise enduring beauty. Our exceptional service 
                extends beyond delivery, offering personalized attention to every order. Above all, 
                we celebrate nature's beauty, passionately weaving it into every creation we offer"</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>we're devoted to infusing life's moments with nature's beauty. 
                Our passion for flowers drives us to craft personalized, expressive arrangements 
                that speak volumes and create lasting memories.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<!--
<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia animi consequatur nostrum cumque itaque ducimus, iure expedita voluptates. Minima, minus.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

    </div>

</section>
-->










<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>