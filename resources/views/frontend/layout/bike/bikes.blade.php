@extends('frontend.master')

@section('content')


<div class="off-canvas-menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-6 my-auto">
                <a href="index.html" class="custom-logo-link" rel="home"><img src="assets/images/logo.png" class="custom-logo" alt="Sayara"></a> </div>
                <div class="col-6">
                    <div class="mobile-nav-toggler"><span class="fal fa-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="off-canvas-menu">
        <div class="menu-backdrop"></div>
        <i class="close-btn fa fa-close"></i>
        <nav class="mobile-nav">
            <div class="text-center pt-3 pb-3">
                <a href="index.html" class="custom-logo-link" rel="home"><img src="assets/images/logo.png" class="custom-logo" alt="Sayara"></a> </div>
                <ul class="navigation">

                </ul>
            </nav>
        </div>
        <section class="breadcrumbs">
            <div class="container">
                <h1>Available Bikes Here</h1>


            </div>
        </section>
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="products-filter-area">
                    <div class="row">
                        <div class="col-md-9 my-auto">
                            <p class="mb-0">Showing 1–9 of 30 results</p>
                        </div>
                        <div class="col-md-3 my-auto text-right">
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Shop order">
                                    <option value="menu_order" selected="selected">Find By Brands of Bike</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                                        <div class="col-xl-9 col-md-7">
                                            <div class="row">

                                                <div class="col-xl-4">
                                                    <div class="product-item wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                                                        <div class="product-item-image">
                                                            <a href="shop-single.html">
                                                                <img src="{{ asset('frontend/assets/images/pic-4.jpg') }}" alt="Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-item-content">
                                                            <a href="shop.html">Bike Brand & Model here</a>
                                                            <a href="shop-single.html">
                                                                <ul>
                                                                    <li>Torque: 14 NM</li>
                                                                    <li>Max Power: 15 BHP</li>
                                                                </ul>
                                                            </a>
                                                            <ul class="list-inline mb-0">
                                                                <li class="list-inline-item">
                                                                    <p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">BDT.</span> 800</span></p>
                                                                </li>
                                                                <li class="list-inline-item float-right">
                                                                    <div class="star-rating"><span style="width:86.6%"></span></div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-item-overlay">
                                                            <a  href="{{ route('kbr.bikes.singleview') }}" class="button ajax_add_to_cart">See Details</a> </div>
                                                            <a class="ajax-quick-view-popup" href="quick-view-popup.html">
                                                                <i class="fas fa-search-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">




                                                                    </div>

                                                                            <div class="text-left mt-5">
                                                                                <nav class="navigation pagination" role="navigation" aria-label="Posts">
                                                                                    <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>
                                                                                        <a class="page-numbers" href="shop.html">2</a>
                                                                                        <a class="page-numbers" href="shop.html">3</a>
                                                                                        <a class="page-numbers" href="shop.html">4</a>
                                                                                        <a class="next page-numbers" href="shop.html">Next ❯</a>
                                                                                    </div>
                                                                                </nav>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>



@stop
