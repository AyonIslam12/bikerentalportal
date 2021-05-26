<header>
    <div class="top-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-2 my-auto d-none d-lg-block">
                    <div class="logo">
                        <a href="{{ route('kbr.home') }}" class="custom-logo-link" rel="home">
                            <img width="512" height="114" src="{{ asset('frontend/assets/images/logo.png')}}" class="custom-logo" alt="Sayara">


                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 my-auto d-none d-lg-block">
                    <div class="ajax-search-form">
                        <input type="text" name="s" id="keyword" placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <div id="datafetch"></div>
                </div>
                <div class="col-xl-2 col-lg-3 col my-auto">
                    <div class="top-header-action">
                        <div class="widget-header">
                            <div class="my-account-widget">
                                <i class="fal fa-fw fa-user"></i>
                                <div class="my-account-button">
                                    <small>Login here </small>
                                    <h5>My Account</h5>
                                </div>
                                <div class="my-account-content">
                                    <div class="header-profile-login">
                                        <h6 class="text-center">Log In to Your Account</h6>
                                        <form name="loginform" id="loginform" action="#" method="post">
                                            <p class="login-username">
                                                <label for="user_login">Username or Email Address</label>
                                                <input type="text" name="log" id="user_login" class="input" value="admin" size="20" />
                                            </p>
                                            <p class="login-password">
                                                <label for="user_pass">Password</label>
                                                <input type="password" name="pwd" id="user_pass" class="input" value="12345" size="20" />
                                            </p>
                                            <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label></p>
                                            <p class="login-submit">
                                                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Log In" />
                                            </p>
                                        </form>
                                    </div>
                                    <div class="user-logged-in">
                                        <div class="header-profile">
                                            <img alt="Logo" src="https://secure.gravatar.com/avatar/c1771335bb186bad9c54bcb67ae8adba?s=60&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/c1771335bb186bad9c54bcb67ae8adba?s=120&amp;d=mm&amp;r=g 2x">
                                            <div class="header-profile-content">
                                                <h6>ThemeBing</h6>
                                                <p><a href="https://themebing.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="117469707c617d74517c70787d3f727e7c">[email&#160;protected]</a></p>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="my-account.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="#">Orders</a>
                                            </li>
                                            <li>
                                                <a href="#">Downloads</a>
                                            </li>
                                            <li>
                                                <a href="#">Addresses</a>
                                            </li>
                                            <li>
                                                <a href="#">Account details</a>
                                            </li>
                                            <li>
                                                <a href="#">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col my-auto">
                    <div class="top-header-action">
                        <div class="widget-header">
                            <div class="shopping-cart-widget">
                                <i class="fal fa-fw fa-user"></i>
                                <div class="shopping-cart-button">
                                    <span>New User?</span>
                                    <h5 class="subtotal">
                                        <span class="woocommerce-Price-amount amount"> <a href="{{ route('kbr.user.registration') }}"> Ayon, going to reg page create koiro </a>  </span> </h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header ">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-xl-7 col-md-9 my-auto">
                        <div class="primary-menu d-none d-lg-inline-block">
                            <nav class="desktop-menu">
                                <ul id="menu-primary" class="menu">
                                    <li class="menu-item"><a href="{{ route('kbr.home') }}"> Home</a></li>

                                        <li class="menu-item"><a href="{{ route('kbr.bikes') }}"> Bikes </a></li>

                                    <li class="menu-item"><a href="about.html">Blog</a></li>
                                    <li class="menu-item"><a href="{{ route('kbr.terms') }}">Terms & Conditions</a></li>
                                    <li class="menu-item"><a href="{{ route('kbr.about') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ route('kbr.contuctus') }}">Contact Us</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3 p-0 text-right my-auto">
                        <div class="header-btn d-none d-lg-block">
                            <a href="#">Button </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
