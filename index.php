<?php 

require("header.php");

?>

<div class="main-header-section">
    <div class="container">
        <div class="header-content-block">
            <div class="header-title-block">
                <h2>Explore Your City</h2>
                <p>Discover what makes feel better nearest you.</p>
            </div>
            <form class="form-common filter-form filter-header-form">
                <div class="form-group outer-select-field">
                    <a class="input-dropedown-btn catagory-btn" href="javascript:void(0)">
                        <i class="fa fa-bars" aria-hidden="true"></i> Categories
                    </a>
                    <input type="text" class="outer-select-input-box" id="listing_catagory_list" placeholder="Ex: Food, Drink">
                </div>
                <div class="form-group outer-select-field">
                    <a class="input-dropedown-btn location-btn" href="javascript:void(0)">
                        <i class="fa fa-crosshairs" aria-hidden="true"></i> Location
                    </a>
                    <input type="text" class="outer-select-input-box" id="listing_location_list" placeholder="Ex: Food, Drink">
                </div>
                <div class="form-group outer-select-field">
                    <a class="input-dropedown-btn" href="javascript:void(0)">
                        <i class="fa fa-crosshairs" aria-hidden="true"></i> Keword
                    </a>
                    <input type="text" class="outer-select-input-box" id="listing_keword" placeholder="Ex: Food, Drink">
                </div>
                <div class="btn-group">
                    <button type="submit" class="danger-btn">
                        <i class="ti-search" aria-hidden="true"></i>
                        Search
                    </button>
                </div>
            </form>
            <p class="listing-promote-text">
                Or Add & Promote your own listing and see what’s happening around you.
            </p>
            <div class="listing-promote-steps">
                <div class="listing-promote-block">
                    <span class="ti-user"></span>
                    <p>Register</p>
                </div>
                <div class="listing-promote-block">
                    <span class="ti-pencil-alt"></span>
                    <p>Create Listing</p>
                </div>
                <div class="listing-promote-block">
                    <span class="ti-announcement"></span>
                    <p>Publish</p>
                </div>
            </div>
        </div>
        <!-- header-content-block -->
    </div>
    <div class="overlay"></div>
</div>
<!-- main-header section -->
<div class="listing-catagory-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="listing-catagory-block">
                        <div class="catagory-image">
                            <img src="images/catagory/1.jpg" alt="img" class="img-responsive">
                            <div class="catagory-text">
                                <h4>
                                    <a href="javascript:void(0)">Restaurant</a>
                                </h4>
                                <p class="hide-text">125 Listings</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="listing-catagory-block">
                        <div class="catagory-image">
                            <img src="images/catagory/2.jpg" alt="img" class="img-responsive">
                            <div class="catagory-text">
                                <h4>
                                    <a href="javascript:void(0)">Health & Medical</a>
                                </h4>
                                <p class="hide-text">125 Listings</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="listing-catagory-block">
                        <div class="catagory-image">
                            <img src="images/catagory/3.jpg" alt="img" class="img-responsive">
                            <div class="catagory-text">
                                <h4>
                                    <a href="javascript:void(0)">Hotel</a>
                                </h4>
                                <p class="hide-text">125 Listings</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="listing-catagory-block">
                        <div class="catagory-image">
                            <img src="images/catagory/4.jpg" alt="img" class="img-responsive">
                            <div class="catagory-text">
                                <h4>
                                    <a href="javascript:void(0)">Real Estate</a>
                                </h4>
                                <p class="hide-text">125 Listings</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="listing-catagory-block">
                        <div class="catagory-image">
                            <img src="images/catagory/5.jpg" alt="img" class="img-responsive">
                            <div class="catagory-text">
                                <h4>
                                    <a href="javascript:void(0)">Shopping</a>
                                </h4>
                                <p class="hide-text">125 Listings</p>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- listing catagory section -->
<div class="popular-cities-section">
    <div class="container">
        <div class="section-title">
            <h2>Popular Happening Cities</h2>
            <p>Uncover your favorite places to travel, shop, eat or anything what happening around you.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="popular-cities-block">
                    <img src="images/cities/1.jpg" alt="img" class="img-responsive">
                    <h4><a href="javascript:void(0)">California</a></h4>
                    <div class="popular-cities-info-block">
                        <p>18 Listings</p>
                        <p>06 New Listings</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="popular-cities-block">
                    <img src="images/cities/2.jpg" alt="img" class="img-responsive">
                    <h4><a href="javascript:void(0)">New York</a></h4>
                    <div class="popular-cities-info-block">
                        <p>18 Listings</p>
                        <p>06 New Listings</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="popular-cities-block">
                    <img src="images/cities/3.jpg" alt="img" class="img-responsive">
                    <h4><a href="javascript:void(0)">Los Angles</a></h4>
                    <div class="popular-cities-info-block">
                        <p>18 Listings</p>
                        <p>06 New Listings</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="popular-cities-block">
                    <img src="images/cities/4.jpg" alt="img" class="img-responsive">
                    <h4><a href="javascript:void(0)">Floridas</a></h4>
                    <div class="popular-cities-info-block">
                        <p>18 Listings</p>
                        <p>06 New Listings</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="popular-cities-block">
                    <img src="images/cities/5.jpg" alt="img" class="img-responsive">
                    <h4><a href="javascript:void(0)">San Francisco</a></h4>
                    <div class="popular-cities-info-block">
                        <p>18 Listings</p>
                        <p>06 New Listings</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="popular-cities-block">
                    <img src="images/cities/6.jpg" alt="img" class="img-responsive">
                    <h4><a href="javascript:void(0)">Nevada</a></h4>
                    <div class="popular-cities-info-block">
                        <p>18 Listings</p>
                        <p>06 New Listings</p>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular-cities section -->
<div class="popular-listing-section">
    <div class="container">
        <div class="section-title">
            <h2>Most Popular Listings</h2>
            <p>Discover exlusive popular listing in your city. Checkout what suits for you.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <article class="popular-listing-post">
                    <div class="post-thumb">
                        <img src="images/post/9.jpg" alt="img" class="img-responsive">
                        <div class="listing-info">
                            <h4><a href="javascript:void(0)">Hotel California</a></h4>
                            <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
                        </div>
                        <div class="rating-area">
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <span>
                                (5.0/4)
                            </span>
                        </div>
                        <div class="option-block">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="bookmark">

                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-lat="40.715877,-73.993959" data-toggle="modal" data-target="#post_listing_modal_one">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="post-details">
                        <div class="post-meta">
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5><a href="javascript:void(0)">California</a></h5>
                            </div>
                            <div class="tag">
                                <span>Ad</span>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="post-entry-block">
                            <div class="post-author">
                                <img src="images/post/author/1.jpg" alt="img" class="img-responsive">
                            </div>
                            <p class="post-entry">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                        <div class="post-footer">
                            <div class="contact-no">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5> +1-0000-000-000</h5>
                            </div>
                            <div class="schedule-info closed">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h5>Closed Now</h5>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="popular-listing-post">
                    <div class="post-thumb">
                        <img src="images/post/10.jpg" alt="img" class="img-responsive">
                        <div class="listing-info">
                            <h4><a href="javascript:void(0)">Hotel California</a></h4>
                            <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
                        </div>
                        <div class="rating-area">
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <span>
                                (5.0/4)
                            </span>
                        </div>
                            <div class="option-block">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="bookmark">

                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-lat="40.715877,-73.993959" data-toggle="modal" data-target="#post_listing_modal_two">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="post-details">
                        <div class="post-meta">
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5><a href="javascript:void(0)">California</a></h5>
                            </div>
                            <div class="tag">
                                <span>Ad</span>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="post-entry-block">
                            <div class="post-author">
                                <img src="images/post/author/2.jpg" alt="img" class="img-responsive">
                            </div>
                            <p class="post-entry">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                        <div class="post-footer">
                            <div class="contact-no">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5> +1-0000-000-000</h5>
                            </div>
                            <div class="schedule-info closed">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h5>Closed Now</h5>
                            </div>
                        </div>
                    </div>
                </article>
            </div>		
            <div class="col-lg-4 col-md-6">
                <article class="popular-listing-post">
                    <div class="post-thumb">
                        <img src="images/post/11.jpg" alt="img" class="img-responsive">
                        <div class="listing-info">
                            <h4><a href="javascript:void(0)">Hotel California</a></h4>
                            <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
                        </div>
                        <div class="rating-area">
                            <ul>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <span>
                            (5.0/4)
                        </span>
                        </div>
                        <div class="option-block">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="bookmark">

                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-lat="40.715877,-73.993959" data-toggle="modal" data-target="#post_listing_modal_three">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="post-details">
                        <div class="post-meta">
                            <div class="location">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h5><a href="javascript:void(0)">California</a></h5>
                            </div>
                            <div class="tag">
                                <span>Ad</span>
                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="post-entry-block">
                            <div class="post-author">
                                <img src="images/post/author/3.jpg" alt="img" class="img-responsive">
                            </div>
                            <p class="post-entry">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            </p>
                        </div>
                        <div class="post-footer">
                            <div class="contact-no">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h5> +1-0000-000-000</h5>
                            </div>
                            <div class="schedule-info closed">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <h5>Closed Now</h5>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- popular-listing section -->
<div class="working-process-section">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>How it Works</h2>
            <p>Expose your business to your community and others in a right way.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="working-process-block">
                    <span class="ti-user"></span>
                    <h4>Signup</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="working-process-block">
                    <span class="ti-pencil-alt"></span>
                    <h4>Add/Review Listing</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="working-process-block">
                    <span class="ti-stats-up"></span>
                    <h4>Grow Your Business</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- working-process section -->
<div class="article-section">
    <div class="container">
        <div class="section-title">
            <h2>Articles & Tips</h2>
            <p>Get knowledge from our latest blog and articles. Its time for exploring.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <article class="blog-post">
                    <div class="post-thumb">
                        <img src="images/post/4.jpg" alt="img" class="img-responsive">
                        <div class="post-meta">
                            <span class="post-date">23 Dec 2018</span>
                            <div class="social-share-block">
                                <button class="social-trigger-btn">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </button>
                                <ul class="social-list">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gradient"></div>
                    </div>
                    <div class="post-wrapper">
                        <h4 class="post-title">
                            <a href="javascript:vaoid(0)">
                                Most Popular Hotel in CA
                            </a>
                        </h4>
                        <p class="post-entry">
                            listingGEO is a limited digital marketing company specializing listingGEO listingGEO is a limited digit al marketing
                        </p>
                        <div class="blog-footer">
                            <div class="author-thumb-block">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <h5><a href="javascript:void(0)">Ketty</a></h5>
                            </div>
                            <div class="post-tags">
                                <a href="javascript:void(0)">Hotel</a>,
                                <a href="javascript:void(0)">Tips</a>,
                                <a href="javascript:void(0)">California</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="blog-post">
                    <div class="post-thumb">
                        <img src="images/post/5.jpg" alt="img" class="img-responsive">
                        <div class="post-meta">
                            <span class="post-date">23 Dec 2018</span>
                            <div class="social-share-block">
                                <button class="social-trigger-btn">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </button>
                                <ul class="social-list">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gradient"></div>
                    </div>
                    <div class="post-wrapper">
                        <h4 class="post-title">
                            <a href="javascript:vaoid(0)">
                                Most Popular Hotel in CA
                            </a>
                        </h4>
                        <p class="post-entry">
                            listingGEO is a limited digital marketing company specializing listingGEO listingGEO is a limited digit al marketing
                        </p>
                        <div class="blog-footer">
                            <div class="author-thumb-block">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <h5><a href="javascript:void(0)">Ketty</a></h5>
                            </div>
                            <div class="post-tags">
                                <a href="javascript:void(0)">Hotel</a>,
                                <a href="javascript:void(0)">Tips</a>,
                                <a href="javascript:void(0)">California</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-6">
                <article class="blog-post">
                    <div class="post-thumb">
                        <img src="images/post/6.jpg" alt="img" class="img-responsive">
                        <div class="post-meta">
                            <span class="post-date">23 Dec 2018</span>
                            <div class="social-share-block">
                                <button class="social-trigger-btn">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </button>
                                <ul class="social-list">
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="gradient"></div>
                    </div>
                    <div class="post-wrapper">
                        <h4 class="post-title">
                            <a href="javascript:vaoid(0)">
                                Most Popular Hotel in CA
                            </a>
                        </h4>
                        <p class="post-entry">
                            listingGEO is a limited digital marketing company specializing listingGEO listingGEO is a limited digit al marketing
                        </p>
                        <div class="blog-footer">
                            <div class="author-thumb-block">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <h5><a href="javascript:void(0)">Ketty</a></h5>
                            </div>
                            <div class="post-tags">
                                <a href="javascript:void(0)">Hotel</a>,
                                <a href="javascript:void(0)">Tips</a>,
                                <a href="javascript:void(0)">California</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- article section-->
<div class="testimonial-section">
    <div class="container">
        <div class="section-title">
            <h2>Testimonial</h2>
            <p>What people say about ListingGEO Directory</p>
        </div>
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12">
                <div id="testimonial" class="testimonial-slider">
                    <div class="item">
                        <h4>“ListingGEO helps to grow my Business”</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ad minim veniam, quis nostrud

                        </p>
                        <div class="quetoe-author-block">
                            <h4>Tomas Alva Edison</h4>
                            <p>CEO, Edison Group, CA</p>
                        </div>
                    </div>
                    <div class="item">
                        <h4>“ListingGEO helps to grow my Firm”</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ad minim veniam, quis nostrud

                        </p>
                        <div class="quetoe-author-block">
                            <h4>Jhon Enistine</h4>
                            <p>CEO, Enistine Group, CA</p>
                        </div>
                    </div>
                    <div class="item">
                        <h4>“ListingGEO helps to grow my Business”</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.ad minim veniam, quis nostrud

                        </p>
                        <div class="quetoe-author-block">
                            <h4>Theory Hocking</h4>
                            <p>CEO, Hocking Group, CA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial section-->
<div class="call-to-action-section">
    <div class="container">
        <h2>
            Start today to get more exposure and <br> grow your business
        </h2>
        <p>
            There are many consumers & business owners find this directory is helpful.
        </p>
        <div class="btn-group">
            <a href="add-listing.html" class="icon-btn adining-listing-btn">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Listing
            </a>
            <a href="single-listing.html" class="icon-btn explore-listing-btn">
                <i class="fa fa-search" aria-hidden="true"></i> Explore Listing
            </a>
        </div>
    </div>
</div>
<!-- call-to-action section-->
<div class="listing-modal-content-section">
    <div class="container">
        <div class="modal fade listing-modal" id="post_listing_modal_one" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog post-model">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <article class="popular-listing-post">
                                    <div class="post-thumb">
                                        <img src="images/post/14.jpg" alt="img" class="img-responsive">
                                        <div class="listing-info">
                                            <h4><a href="javascript:void(0)">Hotel California</a></h4>
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
                                        </div>
                                        <div class="rating-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <span>
                                                (5.0/4)
                                            </span>
                                        </div>
                                        <div class="option-block">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="bookmark">

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            <div class="location">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <h5><a href="javascript:void(0)">California</a></h5>
                                            </div>
                                            <div class="tag">
                                                <span>Ad</span>
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="post-entry-block">
                                            <div class="post-author">
                                                <img src="images/post/author/3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <p class="post-entry">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                        <div class="post-footer">
                                            <div class="contact-no">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <h5> +1-0000-000-000</h5>
                                            </div>
                                            <div class="schedule-info closed">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h5>Closed Now</h5>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div id="listing_post_map_one" class="listing-post-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- listing-modal -->
        <div class="modal fade listing-modal" id="post_listing_modal_two" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog post-model">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <article class="popular-listing-post">
                                    <div class="post-thumb">
                                        <img src="images/post/14.jpg" alt="img" class="img-responsive">
                                        <div class="listing-info">
                                            <h4><a href="javascript:void(0)">Hotel California</a></h4>
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
                                        </div>
                                        <div class="rating-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <span>
                                                (5.0/4)
                                            </span>
                                        </div>
                                        <div class="option-block">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="bookmark">

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            <div class="location">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <h5><a href="javascript:void(0)">California</a></h5>
                                            </div>
                                            <div class="tag">
                                                <span>Ad</span>
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="post-entry-block">
                                            <div class="post-author">
                                                <img src="images/post/author/3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <p class="post-entry">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                        <div class="post-footer">
                                            <div class="contact-no">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <h5> +1-0000-000-000</h5>
                                            </div>
                                            <div class="schedule-info closed">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h5>Closed Now</h5>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div id="listing_post_map_two" class="listing-post-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- listing-modal -->
        <div class="modal fade listing-modal" id="post_listing_modal_three" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog post-model">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <article class="popular-listing-post">
                                    <div class="post-thumb">
                                        <img src="images/post/14.jpg" alt="img" class="img-responsive">
                                        <div class="listing-info">
                                            <h4><a href="javascript:void(0)">Hotel California</a></h4>
                                            <p><i class="fa fa-bed" aria-hidden="true"></i> Hotel & Restaurent</p>
                                        </div>
                                        <div class="rating-area">
                                            <ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <span>
                                                (5.0/4)
                                            </span>
                                        </div>
                                        <div class="option-block">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="bookmark">

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            <div class="location">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <h5><a href="javascript:void(0)">California</a></h5>
                                            </div>
                                            <div class="tag">
                                                <span>Ad</span>
                                                <i class="fa fa-check-circle" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="post-entry-block">
                                            <div class="post-author">
                                                <img src="images/post/author/3.jpg" alt="img" class="img-responsive">
                                            </div>
                                            <p class="post-entry">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                            </p>
                                        </div>
                                        <div class="post-footer">
                                            <div class="contact-no">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <h5> +1-0000-000-000</h5>
                                            </div>
                                            <div class="schedule-info closed">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h5>Closed Now</h5>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div id="listing_post_map_three" class="listing-post-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- listing-modal -->
    </div>
</div><!-- listing-modal-content section -->

<?php

require('footer.php');

?>