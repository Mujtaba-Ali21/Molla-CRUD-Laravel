<!DOCTYPE html>
<html lang="en">

@include('main\mainHead')

<body>
<div class="page-wrapper">

<header class="header header-2 header-intro-clearance">

<div class="header-middle">
    
  <div class="container-fluid">
    <div class="header-left">
      <a href="#" class="logo">
        <img src="{{ asset('utills/logo.png') }}" alt="Molla Logo" width="105" height="25">
      </a>
    </div><!-- End .header-left -->

    <div class="header-center">
        
      <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
        <a href="#" class="search-toggle" role="button"><i class="bi bi-search"></i></a>
        <form action="#" method="get">
          <div class="header-search-wrapper search-wrapper-wide">
            <label for="q" class="sr-only">Search</label>
            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
          </div><!-- End .header-search-wrapper -->
        </form>
      </div><!-- End .header-search -->
    </div>

    <div class="header-right me-5">
      <div class="account">
        <a href="#" title="My account">
          <div class="icon">
          <i class="bi bi-person"></i>
          </div>
          <p>Account</p>
        </a>
      </div><!-- End .compare-dropdown -->

      <div class="wishlist">
        <a href="#" title="Wishlist">
          <div class="icon">
          <i class="bi bi-heart"></i>
            <span class="wishlist-count badge">3</span>
          </div>
          <p>Wishlist</p>
        </a>
      </div><!-- End .compare-dropdown -->

      <div class="dropdown cart-dropdown">
        <a href="#" class="dropdown-toggle">
          <div class="icon">
          <i class="bi bi-cart"></i>
            <span class="cart-count">2</span>
          </div>
          <p>Cart</p>
        </a>
        
    </div><!-- End .cart-dropdown -->
</div><!-- End .header-right -->

<a href="/logout" class="text-white"><button class="border-0 btn-success-outline rounded" style="background-color: #a6c76c; color: white; height: 45px; padding: 0 20px 0 20px;">Logout</button></a>

</div><!-- End .container -->
</div><!-- End .header-middle -->

</header><!-- End .header -->


        <main class="main">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="hover">
    @foreach($banners as $index => $banner)
    <div class="carousel-item @if($index === 0)active @endif" style="background-image: url('/bannerImages/{{ $banner->image }}'); height: 500px;">
    <div class="intro-container d-flex flex-column justify-content-center align-items-center">
        <div class="intro-title">{!! $banner->text !!}</div>
        <button class="btn btn-outline-light"><a href="#" class="text-white">Shop Now <i class="bi bi-arrow-right"></i></a></button>
    </div>
</div>

    @endforeach
</div>

    <div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev" style="
    top: 300px;
    height: 100px;
">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next" style="
    top: 300px;
    height: 100px;
">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>



<div class="brands-border" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
                @foreach($brands as $brand)
                <a href="#" class="brand text-dark">
                @if($brand->image) <img src="/brandImages/{{ $brand->image }}"> @else {{$brand->name}} @endif
                </a>
            @endforeach

        </div>
        
        <br>

            <div class="banner-group ">
                <div class="container">
                    <div class="row">

                        @foreach($categories as $key => $category)

                        @if($key == 0)
    <div class="col-md-12 col-lg-5">
        <div class="banner banner-overlay">
            <a href="#">
                <img src="/categoryImages/{{ $category->image }}">
            </a>

            <div class="banner-content banner-content-top" style="color: #fff !important;">
                <div class="banner-text text-gray">{!! $category->text !!}</div>
                <a href="#" class="btn btn-outline-dark banner-link">Shop Now<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    @endif
    @if($key == 1)
    <div class="col-md-6 col-lg-3">
        <div class="banner banner-overlay">
            <a href="#">
                <img src="/categoryImages/{{ $category->image }}">
            </a>

            <div class="banner-content banner-content-bottom">
                <div class="banner-text text-gray" style="color: #fff;">{!! $category->text !!}</div>
                <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    @endif
    
     @if($key == 2)
    <div class="col-md-6 col-lg-4">
        <div class="banner banner-overlay">
            <a href="#">
                <img src="/categoryImages/{{ $category->image }}">
            </a>

            <div class="banner-content banner-content-top color-white">
                <div class="banner-text text-gray" style="color: #fff;">{!! $category->text !!}</div>
                <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    @endif
    @if($key == 3)
        <div class="banner banner-overlay">
            <a href="#">
                <img src="/categoryImages/{{ $category->image }}">
            </a>

            <div class="banner-content banner-content-top">
                <div class="banner-text text-gray" style="color: #fff; !important">{!! $category->text !!}</div>
                <a href="#" class="btn btn-outline-dark banner-link">Shop Now<i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    @endif

@endforeach


                        
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->


            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
                    </li>
                </ul>
            </div><!-- End .container -->

            
            <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                
                                    @foreach($features as $feature)
                                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="/featureImages/{{ $feature->image }}" alt="{{ $feature->name }}" class="product-image">
                                            </a>

                                            <div class="product-action-vertical rounded-circle border border-1">
                                                <a href="#"  class="bi bi-heart me-3 text-dark"></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Featured</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">{{ $feature->name }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                ${{ $feature->price }}.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product me-5"> <i class="bi bi-cart"><span> add to cart</span></i></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                 </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                    @endforeach

                               </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Top Selling Products</h2><!-- End .title -->

                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                            @foreach($top_sellings as $top_selling)
                                    <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="/top_sellingImages/{{ $top_selling->image }}" alt="{{ $top_selling->name }}" class="product-image">
                                            </a>

                                            <div class="product-action-vertical rounded-circle border border-1">
                                                <a href="#"  class="bi bi-heart me-3 text-dark"></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                        <div class="product-cat">
                                                <a href="#">Top Selling</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="#">{{ $top_selling->name }}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                ${{ $top_selling->price }}.00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product me-5"> <i class="bi bi-cart"><span> add to cart</span></i></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                 </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                    @endforeach
                               </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                  
            
        </main><!-- End .main -->

        <footer class="footer footer-2">

        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-12 col-lg-6">
	            			<div class="widget widget-about">
	            				<img src="{{ asset('utills/logo.png') }}" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
	            				
	            				<div class="widget-about-info">
	            					<div class="row">
	            						<div class="col-sm-6 col-md-4">
	            							<span class="widget-about-title">Got Question? Call us 24/7</span>
	            							<a href="tel:123456789">+0123 456 789</a>
	            						</div><!-- End .col-sm-6 -->
	            						<div class="col-sm-6 col-md-8">
	            							<span class="widget-about-title">Payment Method</span>
	            							<figure class="footer-payments">
							        			<img src="{{ asset('utills/payments.png') }}" alt="Payment methods" width="272" height="20">
							        		</figure><!-- End .footer-payments -->
	            						</div><!-- End .col-sm-6 -->
	            					</div><!-- End .row -->
	            				</div><!-- End .widget-about-info -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-12 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Information</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="about.html">About Molla</a></li>
	            					<li><a href="#">How to shop on Molla</a></li>
	            					<li><a href="#">FAQ</a></li>
	            					<li><a href="contact.html">Contact us</a></li>
	            					<li><a href="login.html">Log in</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Payment Methods</a></li>
	            					<li><a href="#">Money-back guarantee!</a></li>
	            					<li><a href="#">Returns</a></li>
	            					<li><a href="#">Shipping</a></li>
	            					<li><a href="#">Terms and conditions</a></li>
	            					<li><a href="#">Privacy Policy</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-4 col-lg-3 -->

	            		<div class="col-sm-4 col-lg-2">
	            			<div class="widget">
	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Sign In</a></li>
	            					<li><a href="cart.html">View Cart</a></li>
	            					<li><a href="#">My Wishlist</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-64 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<ul class="footer-menu">
	        			<li><a href="#">Terms Of Use</a></li>
	        			<li><a href="#">Privacy Policy</a></li>
	        		</ul><!-- End .footer-menu -->

	        		<div class="social-icons social-icons-color">
	        			<span class="social-label">Social Media</span>
    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="bi bi-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close">X</span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search product ..." required>
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="#">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">Elements</a>
                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-pinterest"></i>
                </a>
                <a href="#" class="social-icon" target="_blank" title="Twitter">
                    <i class="fab fa-facebook-f"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-pinterest"></i>
                </a>
                <a href="#" class="social-icon" target="_blank" title="Instagram">
                    <i class="fab fa-facebook-f"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-pinterest"></i>
                </a>
                <a href="#" class="social-icon" target="_blank" title="Youtube">
                    <i class="fab fa-facebook-f"></i>
<i class="fab fa-twitter"></i>
<i class="fab fa-instagram"></i>
<i class="fab fa-youtube"></i>
<i class="fab fa-pinterest"></i>
                </a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                →</i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                <i class="fab fa-google"></i>

                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                <i class="fab fa-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                →
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                <i class="fab fa-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="fab fa-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

</body>
</html>