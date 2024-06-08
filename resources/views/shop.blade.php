@extends('layouts.frontend_master')
@section('content')
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Shop Sidebar</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><span>Shop Pages</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner enable-page-sidebar">
            <div class="container-fluid">
                <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40">
                    <div class="col-lg-9 order-lg-2" id="main-content">
                        <div class="shop-toolbar">
                            <div class="shop-toolbar__inner">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-md-start text-center mb-sm--20">
                                        <div class="shop-toolbar__left">
                                            <p class="product-pages">Showing 1–20 of 42 results</p>
                                            <div class="product-view-count">
                                                <p>Show</p>
                                                <ul>
                                                    <li><a href="shop-sidebar.html">6</a></li>
                                                    <li class="active"><a href="shop-sidebar.html">12</a></li>
                                                    <li><a href="shop-sidebar.html">15</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="shop-toolbar__right">
                                            <a href="#" class="product-filter-btn shop-toolbar__btn">
                                                <span>Filters</span>
                                                <i></i>
                                            </a>
                                            <div class="product-ordering">
                                                <a href="" class="product-ordering__btn shop-toolbar__btn">
                                                    <span>Short By</span>
                                                    <i></i>
                                                </a>
                                                <ul class="product-ordering__list">
                                                    <li class="active"><a href="#">Sort by popularity</a></li>
                                                    <li><a href="#">Sort by average rating</a></li>
                                                    <li><a href="#">Sort by newness</a></li>
                                                    <li><a href="#">Sort by price: low to high</a></li>
                                                    <li><a href="#">Sort by price: high to low</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="advanced-product-filters">
                                <div class="product-filter">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="product-widget product-widget--price">
                                                <h3 class="widget-title">Price</h3>
                                                <ul class="product-widget__list">
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="ammount">$20.00</span>
                                                            <span> - </span>
                                                            <span class="ammount">$40.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="ammount">$40.00</span>
                                                            <span> - </span>
                                                            <span class="ammount">$50.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="ammount">$50.00</span>
                                                            <span> - </span>
                                                            <span class="ammount">$60.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="ammount">$60.00</span>
                                                            <span> - </span>
                                                            <span class="ammount">$80.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="ammount">$80.00</span>
                                                            <span> - </span>
                                                            <span class="ammount">$100.00</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span class="ammount">$100.00</span>
                                                            <span> + </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="product-widget product-widget--brand">
                                                <h3 class="widget-title">Brands</h3>
                                                <ul class="product-widget__list">
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>Airi</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>Mango</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>Valention</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>Zara</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="product-widget product-widget--color">
                                                <h3 class="widget-title">Color</h3>
                                                <ul class="product-widget__list product-color-swatch">
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn blue">
                                                            <span class="product-color-swatch-label">Blue</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn green">
                                                            <span class="product-color-swatch-label">Green</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn pink">
                                                            <span class="product-color-swatch-label">Pink</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label">Red</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn grey">
                                                            <span class="product-color-swatch-label">Grey</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="product-widget product-widget--size">
                                                <h3 class="widget-title">Size</h3>
                                                <ul class="product-widget__list">
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>L</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>M</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>S</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>XL</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>XXL</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-products">
                            <div class="row grid-space-20 xxl-block-grid-4">
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-20-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-20-2.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Limited edition v-neck
                                                        t-shirt</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-19-4.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-19-1.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge new">New</span>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Hig-Rise Skinny Jean</a>
                                                </h3>
                                                <div class="product-rating">
                                                    <span>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star"></i>
                                                        <i class="dl-icon-star"></i>
                                                    </span>
                                                </div>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-18-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-18-4.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge sale">Sale</span>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Waxed-effect pleated skirt</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-17-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-17-4.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge hot">hot</span>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Chain print bermuda shorts</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-16-4.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-16-1.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Check blazer</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-15-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-15-3.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Linen-Blend Pinstriped
                                                        Culottes</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                                <div class="product-color-swatch">
                                                    <a class="product-color-swatch-btn blue">
                                                        <span class="product-color-swatch-label"></span>
                                                    </a>
                                                    <a class="product-color-swatch-btn green">
                                                        <span class="product-color-swatch-label"></span>
                                                    </a>
                                                    <a class="product-color-swatch-btn pink">
                                                        <span class="product-color-swatch-label"></span>
                                                    </a>
                                                    <a class="product-color-swatch-btn red">
                                                        <span class="product-color-swatch-label"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-14-2.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-14-1.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Super skinny blazer</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-13-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-13-2.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Super skinny trousers</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-12-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-12-4.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Open sweatshirt</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-11-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-11-2.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Dress with belt</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-10-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-10-3.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Grey blue leather backpack</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-9-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-9-2.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Jogging trousers</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                    <span class="product-price-old">
                                                        <span class="money">$60.00</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-8-2.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-8-1.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Polka dot blouse</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-7-2.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-7-1.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Leopard print satin shirt</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-6-4.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-6-1.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Patchwork print oversized
                                                        blouse</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-5-3.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-5-4.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Split suede handbag</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-4-3.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-4-2.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Mid-heel ankle boots with
                                                        toecap</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-3-2.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-3-3.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Dotted mesh blouse</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-2-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-2-3.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Round raffia crossbody bag</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="product-details.html">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-1-1.jpg" alt="Product Image"
                                                            class="primary-image">
                                                        <img src="{{ asset('frontend_assets') }}/img/products/prod-1-4.jpg" alt="Product Image"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip"
                                                            data-bs-placement="left" title="Quick Shop">
                                                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="product-details.html">Ruffled polka dot blouse</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">$49.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="pagination-wrap">
                            <ul class="pagination">
                                <li><a href="shop-sidebar.html" class="prev page-number"><i
                                            class="fa fa-angle-double-left"></i></a></li>
                                <li><span class="current page-number">1</span></li>
                                <li><a href="shop-sidebar.html" class="page-number">2</a></li>
                                <li><a href="shop-sidebar.html" class="page-number">3</a></li>
                                <li><a href="shop-sidebar.html" class="next page-number"><i
                                            class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 order-lg-1 mt--30 mt-md--40" id="primary-sidebar">
                        <div class="sidebar-widget">
                            <!-- Category Widget Start -->
                            <div class="product-widget categroy-widget mb--35 mb-md--30">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="prouduct-categories product-widget__list">
                                    <li><a href="">Accessories</a><span class="count">(0)</span></li>
                                    <li><a href="">Brands</a><span class="count">(0)</span></li>
                                    <li><a href="">Clothing</a><span class="count">(1)</span></li>
                                    <li><a href="">Fashions</a><span class="count">(21)</span></li>
                                    <li><a href="">Furniture</a><span class="count">(20)</span></li>
                                    <li><a href="">Gifts</a><span class="count">(0)</span></li>
                                    <li><a href="">Kids</a><span class="count">(0)</span></li>
                                    <li><a href="">Men</a><span class="count">(0)</span></li>
                                    <li><a href="">New in</a><span class="count">(0)</span></li>
                                    <li><a href="">Outlet</a><span class="count">(0)</span></li>
                                    <li><a href="">Shoes</a><span class="count">(0)</span></li>
                                    <li><a href="">Wallets</a><span class="count">(0)</span></li>
                                    <li><a href="">Women</a><span class="count">(0)</span></li>
                                </ul>
                            </div>
                            <!-- Category Widget Start -->

                            <!-- Price Filter Widget Start -->
                            <div class="product-widget product-price-widget mb--40 mb-md--35">
                                <h3 class="widget-title">Price</h3>
                                <div class="widget_content">
                                    <form action="#" method="post">
                                        <div id="slider-range"
                                            class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                style="left: 16.6667%; width: 79.1667%;">

                                            </div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                                style="left: 16.6667%;">

                                            </span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                                style="left: 95.8333%;">

                                            </span>
                                        </div>
                                        <div class="filter-price">
                                            <div class="filter-price__count">
                                                <div class="filter-price__input-group mb--20">
                                                    <span>Price: </span>
                                                    <input type="text" id="amount" class="amount-range"
                                                        readonly="">
                                                </div>
                                                <button type="submit" class="btn btn-style-1 sidebar-btn">
                                                    filter
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Price Filter Widget End -->

                            <!-- Product Size Widget Start -->
                            <div class="product-widget product-widget--size mb--25 mb-md--20">
                                <h3 class="widget-title">Size</h3>
                                <ul class="product-widget__list two-column-list">
                                    <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">S</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">XXl</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">M</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">XL</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">L</a><span class="count">(2)</span></li>
                                </ul>
                            </div>
                            <!-- Product Size Widget End -->

                            <!-- Product Color Widget Start -->
                            <div class="product-widget product-widget--Color mb--25 mb-md--20">
                                <h3 class="widget-title">Color</h3>
                                <ul class="product-widget__list two-column-list">
                                    <li><a href="shop-sidebar.html">Blue</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Pink</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">White</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Green</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Red</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Black</a><span class="count">(2)</span></li>
                                </ul>
                            </div>
                            <!-- Product Color Widget End -->

                            <!-- Product Brand Widget Start -->
                            <div class="product-widget product-widget--brand mb--40 mb-md--30">
                                <h3 class="widget-title">Brands</h3>
                                <ul class="product-widget__list">
                                    <li><a href="shop-sidebar.html">Airi</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Mango</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Valention</a><span class="count">(2)</span></li>
                                    <li><a href="shop-sidebar.html">Zara</a><span class="count">(2)</span></li>
                                </ul>
                            </div>
                            <!-- Product Brand Widget End -->

                            <!-- Category Widget Start -->
                            <div class="product-widget tag-widget mb--35 mb-md--30">
                                <h3 class="widget-title">Categories</h3>
                                <div class="tagcloud">
                                    <a href="shop-sidebar.html">chair</a>
                                    <a href="shop-sidebar.html">deco</a>
                                    <a href="shop-sidebar.html">dress</a>
                                    <a href="shop-sidebar.html">fashion</a>
                                    <a href="shop-sidebar.html">furniture</a>
                                    <a href="shop-sidebar.html">light</a>
                                    <a href="shop-sidebar.html">living</a>
                                    <a href="shop-sidebar.html">sofa</a>
                                    <a href="shop-sidebar.html">table</a>
                                    <a href="shop-sidebar.html">women</a>
                                </div>
                            </div>
                            <!-- Category Widget Start -->

                            <!-- Promo Widget Start -->
                            <div class="product-widget promo-widget">
                                <div class="banner-box banner-type-3 banner-type-3-2 banner-hover-1">
                                    <div class="banner-inner">
                                        <div class="banner-image">
                                            <img src="{{ asset('frontend_assets') }}/img/banner/ad-banner.jpg" alt="Banner">
                                        </div>
                                        <div class="banner-info">
                                            <h2 class="banner-title-11">New <br> <strong>Season</strong></h2>
                                        </div>
                                        <a class="banner-link banner-overlay" href="shop-sidebar.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Promo Widget End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
@endsection
