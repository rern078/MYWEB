      <!--  Search modal -->
      <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">
                  <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                  </button>
                  <div class="panel w-100 sm:w-500px px-2 py-10">
                        <h3 class="h1 text-center">Search</h3>
                        <form class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="?">
                              <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                              <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Type your keyword.." aria-label="Search" autofocus>
                        </form>
                  </div>
            </div>
      </div>
      <!--  Menu panel -->
      <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                  <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                        <div class="uc-logo">
                              <a href="/" class="h5 text-none text-gray-900 dark:text-white">
                                    <img class="w-32px" src="<?= $publicPath ?>/images/common/logo-icon.svg" alt="News5" data-uc-svg>
                              </a>
                        </div>
                        <button class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                              <i class="unicon-close"></i>
                        </button>
                  </header>

                  <div class="panel">
                        <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                              <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                              <span class="form-icon text-gray">
                                    <i class="unicon-search icon-1"></i>
                              </span>
                        </form>
                        <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                              <li class="uc-parent">
                                    <a href="#">Homepages</a>
                                    <ul class="uc-nav-sub" data-uc-nav="">
                                          <li><a href="../main//">Main</a></li>
                                          <li><a href="../demo-two//">Classic News</a></li>
                                          <li><a href="../demo-three//">Tech</a></li>
                                          <li><a href="../demo-four//">Classic Blog</a></li>
                                          <li><a href="../demo-five//">Gaming</a></li>
                                          <li><a href="../demo-six//">Sports</a></li>
                                          <li><a href="../demo-seven//">Newspaper</a></li>
                                          <li><a href="../demo-eight//">Magazine</a></li>
                                          <li><a href="../demo-nine//">Travel</a></li>
                                          <li><a href="../demo-ten//">Food</a></li>
                                    </ul>
                              </li>
                              <li><a href="#">Latest</a></li>
                              <li><a href="#">Trending</a></li>
                              <li class="uc-parent">
                                    <a href="#">Inner Pages</a>
                                    <ul class="uc-nav-sub" data-uc-nav="">
                                          <li class="uc-parent">
                                                <a href="blog.html">Blog</a>
                                                <ul class="uc-nav-sub">
                                                      <li><a href="blog.html">Full Width</a></li>
                                                      <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                                                      <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                                                      <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                                                </ul>
                                          </li>
                                          <li class="uc-parent">
                                                <a href="blog-details.html">Blog - detail</a>
                                                <ul class="uc-nav-sub">
                                                      <li><a href="blog-details.html">Blog detail</a></li>
                                                      <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                                                </ul>
                                          </li>
                                          <li class="uc-parent">
                                                <a href="#">Useful pages</a>
                                                <ul class="uc-nav-sub">
                                                      <li><a href="sign-up.html">Sign up</a></li>
                                                      <li><a href="sign-in.html">Sign in</a></li>
                                                      <li><a href="reset-password.html">Reset password</a></li>
                                                      <li><a href="404.html">404 page</a></li>
                                                      <li><a href="coming-soon.html">Coming soon</a></li>
                                                </ul>
                                          </li>
                                          <li class="uc-parent">
                                                <a href="#">Other pages</a>
                                                <ul class="uc-nav-sub">
                                                      <li><a href="page-faq.html">FAQ</a></li>
                                                      <li><a href="page-terms.html">Terms of use</a></li>
                                                      <li><a href="page-privacy.html">Privacy policy</a></li>
                                                </ul>
                                          </li>
                                    </ul>
                              </li>
                              <li class="uc-parent">
                                    <a href="shop.html">Shop</a>
                                    <ul class="uc-nav-sub" data-uc-nav="">
                                          <li class="uc-parent">
                                                <a href="shop.html">Shop layouts</a>
                                                <ul class="uc-nav-sub">
                                                      <li><a href="shop.html">Shop 4 cols</a></li>
                                                      <li><a href="shop-3.html">Shop 3 cols</a></li>
                                                      <li><a href="shop-2.html">Shop 2 cols</a></li>
                                                      <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                                                </ul>
                                          </li>
                                          <li><a href="shop-category.html">Archive category</a></li>
                                          <li><a href="shop-product-detail.html">Product detail</a></li>
                                          <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
                                          <li><a href="shop-cart.html">Cart</a></li>
                                          <li><a href="shop-cart-2.html">Cart - v2</a></li>
                                          <li><a href="shop-checkout.html">Checkout</a></li>
                                          <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
                                          <li><a href="shop-order.html">Order confirmation</a></li>
                                    </ul>
                              </li>
                              <li class="hr opacity-10 my-1"></li>
                              <li><a href="sign-in.html">Sign in</a></li>
                              <li><a href="sign-up.html">Create an account</a></li>
                        </ul>
                        <ul class="social-icons nav-x mt-4">
                              <li>
                                    <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                                    <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                                    <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                                    <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                              </li>
                        </ul>
                        <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                              <div class="vstack gap-1">
                                    <span class="fs-7 opacity-60">Select theme:</span>
                                    <div class="darkmode-trigger" data-darkmode-switch="">
                                          <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider fs-5"></span>
                                          </label>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!--  Cart panel -->
      <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                  <button class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
                        <i class="unicon-close"></i>
                  </button>

                  <div class="mini-cart-content vstack justify-between panel h-100">
                        <div class="mini-cart-header">
                              <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
                        </div>
                        <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                              <p class="alert alert-warning" hidden>Your cart empty!</p>
                              <div class="panel vstack gap-3">
                                    <div>
                                          <article class="product type-product panel">
                                                <div class="hstack gap-2">
                                                      <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/common/products/img-07.jpg" alt="Laptop Cover" data-uc-img="loading: lazy">
                                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Laptop Cover"></a>
                                                      </figure>
                                                      <div class="content vstack gap-narrow fs-6">
                                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Laptop Cover</a></h5>
                                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$24.00</span></div>
                                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                                      </div>
                                                      <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                                            <i class="unicon-close icon-1"></i>
                                                      </a>
                                                </div>
                                          </article>
                                    </div>
                                    <div>
                                          <article class="product type-product panel">
                                                <div class="hstack gap-2">
                                                      <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/common/products/img-08.jpg" alt="Disney Toys" data-uc-img="loading: lazy">
                                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Disney Toys"></a>
                                                      </figure>
                                                      <div class="content vstack gap-narrow fs-6">
                                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Disney Toys</a></h5>
                                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$5.00</span></div>
                                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                                      </div>
                                                      <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                                            <i class="unicon-close icon-1"></i>
                                                      </a>
                                                </div>
                                          </article>
                                    </div>
                                    <div>
                                          <article class="product type-product panel">
                                                <div class="hstack gap-2">
                                                      <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/common/products/img-09.jpg" alt="Screen Axe" data-uc-img="loading: lazy">
                                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Screen Axe"></a>
                                                      </figure>
                                                      <div class="content vstack gap-narrow fs-6">
                                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Screen Axe</a></h5>
                                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$19.00</span></div>
                                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                                      </div>
                                                      <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                                            <i class="unicon-close icon-1"></i>
                                                      </a>
                                                </div>
                                          </article>
                                    </div>
                                    <div>
                                          <article class="product type-product panel">
                                                <div class="hstack gap-2">
                                                      <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/common/products/img-10.jpg" alt="Airpods Pro" data-uc-img="loading: lazy">
                                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Airpods Pro"></a>
                                                      </figure>
                                                      <div class="content vstack gap-narrow fs-6">
                                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Airpods Pro</a></h5>
                                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$49.00</span></div>
                                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                                      </div>
                                                      <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                                            <i class="unicon-close icon-1"></i>
                                                      </a>
                                                </div>
                                          </article>
                                    </div>
                              </div>
                        </div>
                        <div class="mini-cart-footer panel pt-3 border-top">
                              <div class="panel vstack gap-3 justify-between">
                                    <div class="mini-cart-total hstack justify-between">
                                          <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                                          <b class="fs-5">$97.00</b>
                                    </div>
                                    <div class="mini-cart-actions vstack gap-1">
                                          <a href="shop-cart.html" class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700">View cart</a>
                                          <a href="shop-checkout.html" class="btn btn-md btn-primary text-white">Checkout</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!--  Favorites modal -->
      <div id="uc-favorites-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                  <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                  </button>
                  <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
                        <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
                        <h2 class="h4 md:h3 m-0">Saved articles</h2>
                        <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
                        <a href="/" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
                  </div>
            </div>
      </div>

      <!--  Newsletter modal -->
      <div id="uc-newsletter-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog w-800px bg-white text-dark dark:bg-gray-900 dark:text-white rounded overflow-hidden">
                  <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                  </button>
                  <div class="row md:child-cols-6 col-match g-0">
                        <div class="d-none md:d-flex">
                              <div class="position-relative w-100 ratio-1x1">
                                    <img class="media-cover" src="<?= $publicPath ?>/images/demo-five/common/newsletter.jpg" alt="Newsletter image">
                              </div>
                        </div>
                        <div>
                              <div class="panel vstack self-center p-4 md:py-8 text-center">
                                    <h3 class="h3 md:h2">Subscribe to the Newsletter</h3>
                                    <p class="ft-tertiary">Join 10k+ people to get notified about new posts, news and tips.</p>
                                    <div class="panel mt-2 lg:mt-4">
                                          <form class="vstack gap-1">
                                                <input type="email" class="form-control form-control-sm w-full fs-6 bg-white dark:border-white dark:border-gray-700 dark:text-dark" placeholder="Your email address..">
                                                <button type="submit" class="btn btn-sm btn-primary">Sign up</button>
                                          </form>
                                          <p class="fs-7 mt-2">Do not worry we don't spam!</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!--  Account modal -->
      <div id="uc-account-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                  <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                  </button>
                  <div class="panel vstack gap-2 md:gap-4 text-center">
                        <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none" data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                              <li><a href="#">Sign in</a></li>
                              <li><a href="#">Sign up</a></li>
                              <li><a href="#">Reset password</a></li>
                              <li><a href="#">Terms of use</a></li>
                        </ul>
                        <div class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                              <div class="w-100">
                                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                          <h4 class="h5 lg:h4 m-0">Log in</h4>
                                          <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                                <form class="vstack gap-2">
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="email" placeholder="Your email" required>
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="password" placeholder="Password" autocomplete="new-password" required>
                                                      <div class="hstack justify-between items-start text-start">
                                                            <div class="form-check text-start">
                                                                  <input class="form-check-input rounded-0 dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="checkbox" id="inputCheckRemember">
                                                                  <label class="hstack justify-between form-check-label fs-7 sm:fs-6" for="inputCheckRemember">Remember me?</label>
                                                            </div>
                                                            <a href="#" class="uc-link fs-6" data-uc-switcher-item="2">Forgot password</a>
                                                      </div>
                                                      <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Log in</button>
                                                </form>
                                                <div class="panel h-24px">
                                                      <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                                      <span class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                                </div>
                                                <div class="hstack gap-2">
                                                      <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                                            <i class="icon icon-1 unicon-logo-google"></i>
                                                      </a>
                                                      <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                                      </a>
                                                      <a href="#twitter" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                                      </a>
                                                </div>
                                          </div>
                                          <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                                    </div>
                              </div>
                              <div class="w-100">
                                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                          <h4 class="h5 lg:h4 m-0">Create an account</h4>
                                          <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                                <form class="vstack gap-2">
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="text" placeholder="Full name" required>
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="email" placeholder="Your email" required>
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="password" placeholder="Password" autocomplete="new-password" required>
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="password" placeholder="Re-enter Password" autocomplete="new-password" required>
                                                      <div class="hstack text-start">
                                                            <div class="form-check text-start">
                                                                  <input id="input_checkbox_accept_terms" class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="checkbox" required>
                                                                  <label for="input_checkbox_accept_terms" class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and accept the <a href="#" class="uc-link ms-narrow" data-uc-switcher-item="3">terms of use</a>. </label>
                                                            </div>
                                                      </div>
                                                      <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Sign up</button>
                                                </form>
                                                <div class="panel h-24px">
                                                      <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                                      <span class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                                </div>
                                                <div class="hstack gap-2">
                                                      <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                                            <i class="icon icon-1 unicon-logo-google"></i>
                                                      </a>
                                                      <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                                      </a>
                                                      <a href="#twitter" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                                      </a>
                                                </div>
                                          </div>
                                          <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                                    </div>
                              </div>
                              <div class="w-100">
                                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                          <h4 class="h5 lg:h4 m-0">Reset password</h4>
                                          <div class="panel w-100 sm:w-350px">
                                                <form class="vstack gap-2">
                                                      <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="email" placeholder="Your email" required>
                                                      <div class="form-check text-start">
                                                            <input class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="checkbox" id="inputCheckVerify" required>
                                                            <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm not a robot</span>. </label>
                                                      </div>
                                                      <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Reset a password</button>
                                                </form>
                                          </div>
                                          <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                                    </div>
                              </div>
                              <div class="w-100">
                                    <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
                                          <h4 class="h5 lg:h4 m-0">Terms of use</h4>
                                          <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                                                <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus adipisci, ducimus ea modi odio assumenda.</p>
                                                <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                                <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                                                <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                                <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                                                <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                                <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                                                <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                          </div>
                                          <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!--  GDPR modal -->
      <div id="uc-gdpr-notification" class="uc-gdpr-notification uc-notification uc-notification-bottom-left lg:m-2">
            <div class="uc-notification-message">
                  <a id="uc-close-gdpr-notification" class="uc-notification-close" data-uc-close></a>
                  <h2 class="h5 ft-primary fw-bold -ls-1 m-0">GDPR Compliance</h2>
                  <p class="fs-7 mt-1 mb-2">We use cookies to ensure you get the best experience on our website. By continuing to use our site, you accept our use of cookies, <a href="page-privacy.html" class="uc-link text-underline">Privacy Policy</a>, and <a href="page-terms.html" class="uc-link text-underline">Terms of Service</a>.</p>
                  <button class="btn btn-sm btn-primary" id="uc-accept-gdpr">Accept</button>
            </div>
      </div>

      <!--  Bottom Actions Sticky -->
      <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
            <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
                  <label class="switch">
                        <span class="sr-only">Dark mode toggle</span>
                        <input type="checkbox">
                        <span class="slider fs-5"></span>
                  </label>
            </div>
            <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
                  <i class="icon-2 unicon-chevron-up"></i>
            </a>
      </div>

      <!-- Header start -->
      <header class="uc-header header-five uc-navbar-sticky-wrap z-999" data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
            <nav class="uc-navbar-container fs-6 z-1">
                  <div class="uc-center-navbar panel z-2">
                        <div class="container max-w-xl">
                              <div class="uc-navbar min-h-72px text-gray-900 dark:text-white" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                                    <div class="uc-navbar-left">
                                          <div class="xl:me-2">
                                                <a class="uc-menu-trigger icon-2" href="#uc-menu-panel" data-uc-toggle></a>
                                          </div>
                                          <div class="uc-logo dark:text-primary d-block md:d-none">
                                                <a href="/">
                                                      <img class="w-32px text-dark dark:text-white" src="<?= $publicPath ?>/images/demo-five/common/logo.svg" alt="News5" data-uc-svg>
                                                </a>
                                          </div>
                                          <ul class="uc-navbar-nav gap-3 fs-5 fw-bold d-none lg:d-flex" style="--uc-nav-height: 72px">
                                                <li>
                                                      <a href="#">Exlusive <span data-uc-navbar-parent-icon></span></a>
                                                      <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-top-0 rounded-bottom hide-scrollbar dark:bg-gray-900" data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                                            <div class="row child-cols col-match g-3">
                                                                  <div class="col-2">
                                                                        <div class="uc-navbar-switcher-nav p-1 rounded bg-gray-25 dark:bg-gray-800">
                                                                              <ul class="uc-tab-left fs-5 text-end" data-uc-tab="connect: #uc-navbar-switcher-tending; animation: uc-animation-slide-right-small, uc-animation-slide-left-small">
                                                                                    <li><a href="#">All</a></li>
                                                                                    <li><a href="#">Actions</a></li>
                                                                                    <li><a href="#">Adventure</a></li>
                                                                                    <li><a href="#">Marvel</a></li>
                                                                                    <li><a href="#">Racing</a></li>
                                                                              </ul>
                                                                        </div>
                                                                  </div>
                                                                  <div class="col-10">
                                                                        <div id="uc-navbar-switcher-tending" class="uc-navbar-switcher uc-switcher">
                                                                              <div class="row child-cols col-match g-2">
                                                                                    <div>
                                                                                          <article class="post type-post panel uc-transition-toggle vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-06.jpg" alt="Business Agility the Digital Age: Leveraging AI and Automation" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Open World</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>7d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Business Agility the Digital Age: Leveraging AI and Automation</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-07.jpg" alt="The Art of Baking: From Classic Bread to Artisan Pastries" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Action</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>9d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">The Art of Baking: From Classic Bread to Artisan Pastries</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-08.jpg" alt="AI and Marketing: Unlocking Customer Insights" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Shooting</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>15d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">AI and Marketing: Unlocking Customer Insights</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-09.jpg" alt="Hidden Gems: Underrated Travel Destinations Around the World" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Souls</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>23d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Hidden Gems: Underrated Travel Destinations Around the World</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row child-cols g-2">
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-01.jpg" alt="The Rise of AI-Powered Personal Assistants: How They Manage" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Action</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>1min ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">The Rise of AI-Powered Personal Assistants: How They Manage</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-02.jpg" alt="Tech Innovations Reshaping the Retail Landscape: AI Payments" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Marvel</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>55min ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Tech Innovations Reshaping the Retail Landscape: AI Payments</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-03.jpg" alt="Balancing Work and Wellness: Tech Solutions for Healthy" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Racing</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>1h ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Balancing Work and Wellness: Tech Solutions for Healthy</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-04.jpg" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>2h ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">The Importance of Sleep: Tips for Better Rest and Recovery</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row child-cols g-2">
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-11.jpg" alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Adventure</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>2mo ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Solo Travel: Some Tips and Destinations for the Adventurous Explorer</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-12.jpg" alt="AI-Powered Financial Planning: How Algorithms Revolutionizing" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Souls</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>2mo ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">AI-Powered Financial Planning: How Algorithms Revolutionizing</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-13.jpg" alt="Tech Tools for your Time Management: Enhancing Productivity" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>3mo ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Tech Tools for your Time Management: Enhancing Productivity</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-14.jpg" alt="A Guide to The Rise of Gourmet Street Food: Trends and Top Picks" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Racing</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>6mo ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">A Guide to The Rise of Gourmet Street Food: Trends and Top Picks</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row child-cols g-2">
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-09.jpg" alt="Hidden Gems: Underrated Travel Destinations Around the World" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Souls</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>23d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Hidden Gems: Underrated Travel Destinations Around the World</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-10.jpg" alt="Eco-Tourism: Traveling Responsibly and Sustainably" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>29d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Eco-Tourism: Traveling Responsibly and Sustainably</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-11.jpg" alt="Solo Travel: Some Tips and Destinations for the Adventurous Explorer" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Adventure</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>2mo ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Solo Travel: Some Tips and Destinations for the Adventurous Explorer</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-12.jpg" alt="AI-Powered Financial Planning: How Algorithms Revolutionizing" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Souls</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>2mo ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">AI-Powered Financial Planning: How Algorithms Revolutionizing</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="row child-cols g-2">
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-03.jpg" alt="Balancing Work and Wellness: Tech Solutions for Healthy" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Racing</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>1h ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Balancing Work and Wellness: Tech Solutions for Healthy</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-04.jpg" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>2h ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">The Importance of Sleep: Tips for Better Rest and Recovery</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-05.jpg" alt="The Future of Sustainable Living: Driving Eco-Friendly Lifestyles" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Open World</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>12h ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">The Future of Sustainable Living: Driving Eco-Friendly Lifestyles</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                                    <div>
                                                                                          <article class="post type-post panel vstack gap-1">
                                                                                                <div class="post-media panel overflow-hidden">
                                                                                                      <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-06.jpg" alt="Business Agility the Digital Age: Leveraging AI and Automation" data-uc-img="loading: lazy">
                                                                                                      </div>
                                                                                                      <a href="blog-details.html" class="position-cover"></a>
                                                                                                </div>
                                                                                                <div class="post-header panel vstack gap-narrow">
                                                                                                      <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                                            <div>
                                                                                                                  <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                                        <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Open World</a>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                            <div class="sep d-none md:d-block">·</div>
                                                                                                            <div class="d-none md:d-block">
                                                                                                                  <div class="post-date hstack gap-narrow">
                                                                                                                        <span>7d ago</span>
                                                                                                                  </div>
                                                                                                            </div>
                                                                                                      </div>
                                                                                                      <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                                            <a class="text-none hover:text-primary duration-150" href="blog-details.html">Business Agility the Digital Age: Leveraging AI and Automation</a>
                                                                                                      </h3>
                                                                                                </div>
                                                                                          </article>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </li>
                                                <li>
                                                      <a href="#">Xbox <span data-uc-navbar-parent-icon></span></a>
                                                      <div class="uc-navbar-dropdown ft-primary text-unset p-3 pb-4 rounded-top-0 rounded-bottom hide-scrollbar dark:bg-gray-900" data-uc-drop=" offset: 0; boundary: !.uc-navbar; stretch: x; animation: uc-animation-slide-top-small; duration: 150;">
                                                            <div class="row child-cols col-match g-2">
                                                                  <div>
                                                                        <article class="post type-post panel vstack gap-1">
                                                                              <div class="post-media panel overflow-hidden">
                                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                          <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-04.jpg" alt="The Importance of Sleep: Tips for Better Rest and Recovery" data-uc-img="loading: lazy">
                                                                                    </div>
                                                                                    <a href="blog-details.html" class="position-cover"></a>
                                                                              </div>
                                                                              <div class="post-header panel vstack gap-narrow">
                                                                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                          <div>
                                                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                      <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="sep d-none md:d-block">·</div>
                                                                                          <div class="d-none md:d-block">
                                                                                                <div class="post-date hstack gap-narrow">
                                                                                                      <span>2h ago</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                          <a class="text-none hover:text-primary duration-150" href="blog-details.html">The Importance of Sleep: Tips for Better Rest and Recovery</a>
                                                                                    </h3>
                                                                              </div>
                                                                        </article>
                                                                  </div>
                                                                  <div>
                                                                        <article class="post type-post panel vstack gap-1">
                                                                              <div class="post-media panel overflow-hidden">
                                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                          <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-10.jpg" alt="Eco-Tourism: Traveling Responsibly and Sustainably" data-uc-img="loading: lazy">
                                                                                    </div>
                                                                                    <a href="blog-details.html" class="position-cover"></a>
                                                                              </div>
                                                                              <div class="post-header panel vstack gap-narrow">
                                                                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                          <div>
                                                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                      <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="sep d-none md:d-block">·</div>
                                                                                          <div class="d-none md:d-block">
                                                                                                <div class="post-date hstack gap-narrow">
                                                                                                      <span>29d ago</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                          <a class="text-none hover:text-primary duration-150" href="blog-details.html">Eco-Tourism: Traveling Responsibly and Sustainably</a>
                                                                                    </h3>
                                                                              </div>
                                                                        </article>
                                                                  </div>
                                                                  <div>
                                                                        <article class="post type-post panel vstack gap-1">
                                                                              <div class="post-media panel overflow-hidden">
                                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                          <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-13.jpg" alt="Tech Tools for your Time Management: Enhancing Productivity" data-uc-img="loading: lazy">
                                                                                    </div>
                                                                                    <a href="blog-details.html" class="position-cover"></a>
                                                                              </div>
                                                                              <div class="post-header panel vstack gap-narrow">
                                                                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                          <div>
                                                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                      <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="sep d-none md:d-block">·</div>
                                                                                          <div class="d-none md:d-block">
                                                                                                <div class="post-date hstack gap-narrow">
                                                                                                      <span>3mo ago</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                          <a class="text-none hover:text-primary duration-150" href="blog-details.html">Tech Tools for your Time Management: Enhancing Productivity</a>
                                                                                    </h3>
                                                                              </div>
                                                                        </article>
                                                                  </div>
                                                                  <div>
                                                                        <article class="post type-post panel vstack gap-1">
                                                                              <div class="post-media panel overflow-hidden">
                                                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                                                          <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $publicPath ?>/images/common/img-fallback.png" data-src="<?= $publicPath ?>/images/demo-five/posts/img-17.jpg" alt="Potential of Immersive Technologies help your Business Grow" data-uc-img="loading: lazy">
                                                                                    </div>
                                                                                    <a href="blog-details.html" class="position-cover"></a>
                                                                              </div>
                                                                              <div class="post-header panel vstack gap-narrow">
                                                                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                                                          <div>
                                                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                                                      <a class="text-none text-primary dark:text-primary-400" href="blog-category.html">Xbox</a>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="sep d-none md:d-block">·</div>
                                                                                          <div class="d-none md:d-block">
                                                                                                <div class="post-date hstack gap-narrow">
                                                                                                      <span>1yr ago</span>
                                                                                                </div>
                                                                                          </div>
                                                                                    </div>
                                                                                    <h3 class="post-title h6 m-0 text-truncate-2">
                                                                                          <a class="text-none hover:text-primary duration-150" href="blog-details.html">Potential of Immersive Technologies help your Business Grow</a>
                                                                                    </h3>
                                                                              </div>
                                                                        </article>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </li>
                                                <li><a href="<?= baseUrl('blog-category')?>">Games</a></li>
                                          </ul>
                                    </div>
                                    <div class="uc-navbar-center">
                                          <div class="uc-logo dark:text-primary d-none md:d-block">
                                                <a href="/">
                                                      <img class="w-32px text-dark dark:text-white" src="<?= $publicPath ?>/images/demo-five/common/logo.svg" alt="News5" data-uc-svg>
                                                </a>
                                          </div>
                                    </div>
                                    <div class="uc-navbar-right gap-2">
                                          <div class="uc-navbar-item">
                                                <a class="uc-search-trigger icon-2 cstack text-none text-dark dark:text-white" href="#uc-search-modal" data-uc-toggle>
                                                      <i class="icon icon-2 fw-bold unicon-search"></i>
                                                </a>
                                          </div>
                                          <div class="uc-navbar-item">
                                                <a class="uc-cart-trigger position-relative btn btn-sm border-0 p-0 gap-narrow duration-0 dark:text-white" href="#uc-cart-panel" data-uc-toggle>
                                                      <i class="icon icon-2 unicon-cart"></i>
                                                      <span class="cstack w-20px h-20px bg-gray-50 dark:bg-gray-700 text-black dark:text-white rounded-circle" style="font-size: 10px">4</span>
                                                </a>
                                          </div>
                                          <button type="button" class="btn btn-xs btn-primary min-w-80px d-none lg:d-inline-flex" data-uc-toggle="target: #uc-account-modal">
                                                <span>Log in</span>
                                          </button>
                                          <div class="uc-navbar-item">
                                                <div class="uc-modes-trigger w-32px h-32px border rounded-circle text-dark dark:text-white" data-darkmode-toggle="">
                                                      <label class="switch">
                                                            <span class="sr-only">Dark mode toggle</span>
                                                            <input type="checkbox">
                                                            <span class="slider"></span>
                                                      </label>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="uc-bottom-navbar panel z-1 min-h-32px lg:min-h-48px bg-primary" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;">
                        <div class="container max-w-xl">
                              <div class="hstack">
                                    <div class="uc-navbar-center gap-2 lg:gap-3">
                                          <div class="uc-navbar-item">
                                                <ul class="nav-x gap-4 fs-6 fw-bold flex-nowrap overflow-x-auto hide-scrollbar uc-horizontal-scroll w-screen md:w-auto md:mask-end-0 mx-n2 px-2 text-gray-900">
                                                      <li><a href="#">Action</a></li>
                                                      <li><a href="#">Adventure</a></li>
                                                      <li><a href="#">Racing</a></li>
                                                      <li><a href="#">Souls</a></li>
                                                      <li><a href="#">Marvel</a></li>
                                                      <li><a href="#">Open World</a></li>
                                                      <li><a href="#">Shooting</a></li>
                                                      <li><a href="#">Sports</a></li>
                                                      <li><a href="#">Battle Ground</a></li>
                                                      <li><a href="#">RPG</a></li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </nav>
      </header>

      <!-- Header end -->
      <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                  setDarkMode(1);
            } else if (getSchema === "light") {
                  setDarkMode(0);
            }
      </script>