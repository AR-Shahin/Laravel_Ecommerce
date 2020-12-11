@extends('layouts.front_master')
@section('title','Single Product')
@section('main_content')
    <!--Body Content-->
    <div id="page-content">
        <!--MainContent-->
        <div id="MainContent" class="main-content" role="main">
            <!--Breadcrumb-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Product Pre-orders New</span>
                </div>
            </div>
            <!--End Breadcrumb-->

            <div id="ProductSection-product-template" class="product-template__container prstyle1 container product-right-sidebar">
                <!--product-single-->
                <div class="product-single">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <div class="product-details-img">
                                <div class="zoompro-wrap product-zoom-right pl-20">
                                    <div class="zoompro-span">
                                        <img class="blur-up lazyload zoompro" data-zoom-image="assets/images/product-detail-page/product-with-right-thumbs-1.jpg" alt="" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-1.jpg" />
                                    </div>
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                    <div class="product-buttons">
                                        <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                        <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="lightboximages">
                                    <a href="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-1.jpg" data-size="1462x2048"></a>
                                    <a href="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-2.jpg" data-size="1462x2048"></a>
                                    <a href="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-3.jpg" data-size="1462x2048"></a>
                                    <a href="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-4.jpg" data-size="1462x2048"></a>
                                    <a href="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-5.jpg" data-size="1462x2048"></a>
                                    <a href="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-6.jpg" data-size="1462x2048"></a>
                                </div>
                                <div class="product-thumb">
                                    <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                        <a data-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-1.jpg" data-zoom-image="assets/images/product-detail-page/product-with-right-thumbs-1.jpg" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-1.jpg" alt="" />
                                        </a>
                                        <a data-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-2.jpg" data-zoom-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-2.jpg" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-2.jpg" alt="" />
                                        </a>
                                        <a data-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-3.jpg" data-zoom-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-3.jpg" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-3.jpg" alt="" />
                                        </a>
                                        <a data-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-4.jpg" data-zoom-image="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-4.jpg" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-4.jpg" alt="" />
                                        </a>
                                        <a data-image="assets/images/product-detail-page/product-with-right-thumbs-5.jpg" data-zoom-image="assets/images/product-detail-page/product-with-right-thumbs-5.jpg" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-5.jpg" alt="" />
                                        </a>
                                        <a data-image="assets/images/product-detail-page/product-with-right-thumbs-6.jpg" data-zoom-image="assets/images/product-detail-page/product-with-right-thumbs-6.jpg" class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                            <img class="blur-up lazyload" src="{{asset('frontend')}}/assets/images/product-detail-page/product-with-right-thumbs-6.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-information">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">Product Pre-orders New</h1>
                                    <div class="product-nav clearfix">
                                        <a href="#" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="prInfoRow">
                                        <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                        <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                        <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                    </div>
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <span class="product-price__price product-price__price-product-template">
                                            <span id="ProductPrice-product-template"><span class="money">$550.00</span></span>
                                        </span>
                                    </p>
                                    <div class="product-single__description rte">
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    </div>
                                    <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                        <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                            <div class="product-form__item">
                                                <label class="header">Color: <span class="slVariant">Red</span></label>
                                                <div data-value="Black" class="swatch-element color black available">
                                                    <input class="swatchInput" id="swatch-0-black" type="radio" name="option-0" value="Black"><label class="swatchLbl color small" for="swatch-0-black" style="background-color:black;" title="Black"></label>
                                                </div>
                                                <div data-value="Maroon" class="swatch-element color maroon available">
                                                    <input class="swatchInput" id="swatch-0-maroon" type="radio" name="option-0" value="Maroon"><label class="swatchLbl color small" for="swatch-0-maroon" style="background-color:maroon;" title="Maroon"></label>
                                                </div>
                                                <div data-value="Blue" class="swatch-element color blue available">
                                                    <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue"><label class="swatchLbl color small" for="swatch-0-blue" style="background-color:blue;" title="Blue"></label>
                                                </div>
                                                <div data-value="Dark Green" class="swatch-element color dark-green available">
                                                    <input class="swatchInput" id="swatch-0-dark-green" type="radio" name="option-0" value="Dark Green"><label class="swatchLbl color small" for="swatch-0-dark-green" style="background-color:darkgreen;" title="Dark Green"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                                <label class="header">Size: <span class="slVariant">XS</span></label>
                                                <div data-value="XS" class="swatch-element xs available">
                                                    <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                                    <label class="swatchLbl small" for="swatch-1-xs" title="XS">XS</label>
                                                </div>
                                                <div data-value="S" class="swatch-element s available">
                                                    <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                                    <label class="swatchLbl small" for="swatch-1-s" title="S">S</label>
                                                </div>
                                                <div data-value="M" class="swatch-element m available">
                                                    <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                                    <label class="swatchLbl small" for="swatch-1-m" title="M">M</label>
                                                </div>
                                                <div data-value="L" class="swatch-element l available">
                                                    <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                                    <label class="swatchLbl small" for="swatch-1-l" title="L">L</label>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="infolinks"><a href="#sizechart" class="sizelink btn"> Size Guide</a> <a href="#productInquiry" class="emaillink btn"> Ask About this Product</a></p>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span id="AddToCartText-product-template">Pre-Order Now!</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                        <div class="display-table-cell medium-up--one-third">
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                            </div>
                                        </div>
                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <p class="product-type"><span class="lbl">Product Type:</span> <a href="#" title="Women's">Women's</a></p>
                                        <p class="product-cat"> <span class="lbl">Collections: </span><a href="#" title="">Women</a> </p>
                                        <p class="product-tags"> <span class="lbl">Product Tags: </span><a href="#">$100 - $400</a>, <a href="#">$400 - $600</a>, <a href="#">$600 - $800</a>, <a href="#">Above $800</a>, <a href="#">Gray</a>, <a href="#">Hot</a>, <a href="#">Orange</a>, <a href="#">Red</a>, <a href="#">S</a>, <a href="#">Shoe</a> </p>
                                    </div>
                                </div>
                            </div>
                            <!--Product Tabs-->
                            <div class="tabs-listing">
                                <ul class="product-tabs">
                                    <li rel="tab1"><a class="tablink">Product Details</a></li>
                                    <li rel="tab2"><a class="tablink">Product Reviews</a></li>
                                    <li rel="tab3"><a class="tablink">Size Chart</a></li>
                                    <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>
                                </ul>
                                <div class="tab-container">
                                    <div id="tab1" class="tab-content">
                                        <div class="product-description rte">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                                <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                                <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                                <li>Lorem Ipsum is not simply random text.</li>
                                                <li>Free theme updates</li>
                                            </ul>
                                            <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                            <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                            <h3>Lorem Ipsum is not simply random text.</h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                            <p>Change colors, fonts, banners, megamenus and more. Preview changes are live before saving them.</p>
                                            <h3>1914 translation by H. Rackham</h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                            <h3>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                            <h3>The standard Lorem Ipsum passage, used since the 1500s</h3>
                                            <p>You can use variant style from colors, images or variant images. Also available differnt type of design styles and size.</p>
                                            <h3>Lorem Ipsum is not simply random text.</h3>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                            <h3>Proin ut lacus eget elit molestie posuere.</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab-content">
                                        <div id="shopify-product-reviews">
                                            <div class="spr-container">
                                                <div class="spr-header clearfix">
                                                    <div class="spr-summary">
                                                        <span class="product-review"><a class="reviewLink"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i> </a><span class="spr-summary-actions-togglereviews">Based on 6 reviews456</span></span>
                                                        <span class="spr-summary-actions">
                                                    <a href="#" class="spr-summary-actions-newreview btn">Write a review</a>
                                                </span>
                                                    </div>
                                                </div>
                                                <div class="spr-content">
                                                    <div class="spr-form clearfix">
                                                        <form method="post" action="#" id="new-review-form" class="new-review-form">
                                                            <h3 class="spr-form-title">Write a review</h3>
                                                            <fieldset class="spr-form-contact">
                                                                <div class="spr-form-contact-name">
                                                                    <label class="spr-form-label" for="review_author_10508262282">Name</label>
                                                                    <input class="spr-form-input spr-form-input-text " id="review_author_10508262282" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                                </div>
                                                                <div class="spr-form-contact-email">
                                                                    <label class="spr-form-label" for="review_email_10508262282">Email</label>
                                                                    <input class="spr-form-input spr-form-input-email " id="review_email_10508262282" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-review">
                                                                <div class="spr-form-review-rating">
                                                                    <label class="spr-form-label">Rating</label>
                                                                    <div class="spr-form-input spr-starrating">
                                                                        <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                                    </div>
                                                                </div>

                                                                <div class="spr-form-review-title">
                                                                    <label class="spr-form-label" for="review_title_10508262282">Review Title</label>
                                                                    <input class="spr-form-input spr-form-input-text " id="review_title_10508262282" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                                </div>

                                                                <div class="spr-form-review-body">
                                                                    <label class="spr-form-label" for="review_body_10508262282">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                    <div class="spr-form-input">
                                                                        <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class="spr-form-actions">
                                                                <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                    <div class="spr-reviews">
                                                        <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                                                <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                                            </div>
                                                            <div class="spr-review-content">
                                                                <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                            </div>
                                                        </div>
                                                        <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                                                <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                                            </div>

                                                            <div class="spr-review-content">
                                                                <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                                                <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                                                <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                                            </div>

                                                            <div class="spr-review-content">
                                                                <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                                                    <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab3" class="tab-content">
                                        <h3>WOMEN'S BODY SIZING CHART</h3>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <th>Size</th>
                                                <th>XS</th>
                                                <th>S</th>
                                                <th>M</th>
                                                <th>L</th>
                                                <th>XL</th>
                                            </tr>
                                            <tr>
                                                <td>Chest</td>
                                                <td>31" - 33"</td>
                                                <td>33" - 35"</td>
                                                <td>35" - 37"</td>
                                                <td>37" - 39"</td>
                                                <td>39" - 42"</td>
                                            </tr>
                                            <tr>
                                                <td>Waist</td>
                                                <td>24" - 26"</td>
                                                <td>26" - 28"</td>
                                                <td>28" - 30"</td>
                                                <td>30" - 32"</td>
                                                <td>32" - 35"</td>
                                            </tr>
                                            <tr>
                                                <td>Hip</td>
                                                <td>34" - 36"</td>
                                                <td>36" - 38"</td>
                                                <td>38" - 40"</td>
                                                <td>40" - 42"</td>
                                                <td>42" - 44"</td>
                                            </tr>
                                            <tr>
                                                <td>Regular inseam</td>
                                                <td>30"</td>
                                                <td>30½"</td>
                                                <td>31"</td>
                                                <td>31½"</td>
                                                <td>32"</td>
                                            </tr>
                                            <tr>
                                                <td>Long (Tall) Inseam</td>
                                                <td>31½"</td>
                                                <td>32"</td>
                                                <td>32½"</td>
                                                <td>33"</td>
                                                <td>33½"</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <h3>MEN'S BODY SIZING CHART</h3>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <th>Size</th>
                                                <th>XS</th>
                                                <th>S</th>
                                                <th>M</th>
                                                <th>L</th>
                                                <th>XL</th>
                                                <th>XXL</th>
                                            </tr>
                                            <tr>
                                                <td>Chest</td>
                                                <td>33" - 36"</td>
                                                <td>36" - 39"</td>
                                                <td>39" - 41"</td>
                                                <td>41" - 43"</td>
                                                <td>43" - 46"</td>
                                                <td>46" - 49"</td>
                                            </tr>
                                            <tr>
                                                <td>Waist</td>
                                                <td>27" - 30"</td>
                                                <td>30" - 33"</td>
                                                <td>33" - 35"</td>
                                                <td>36" - 38"</td>
                                                <td>38" - 42"</td>
                                                <td>42" - 45"</td>
                                            </tr>
                                            <tr>
                                                <td>Hip</td>
                                                <td>33" - 36"</td>
                                                <td>36" - 39"</td>
                                                <td>39" - 41"</td>
                                                <td>41" - 43"</td>
                                                <td>43" - 46"</td>
                                                <td>46" - 49"</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <img src="assets/images/size.jpg" alt="" />
                                        </div>
                                    </div>

                                    <div id="tab4" class="tab-content">
                                        <h4>Returns Policy</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                                        <h4>Shipping</h4>
                                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Product Tabs-->
                        </div>
                        <!--Product Sidebar-->
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                            <div class="prSidebar sidebar-product">
                                <!--Product Feature-->
                                <div class="prFeatures">
                                    <div class="feature">
                                        <img src="{{asset('frontend')}}/assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                        <div class="details"><h5>Safe Payment</h5>Pay with the world's most payment methods.</div>
                                    </div>
                                    <div class="feature">
                                        <img src="{{asset('frontend')}}/assets/images/shield.png" alt="Confidence" title="Confidence" />
                                        <div class="details"><h5>Confidence</h5>Protection covers your purchase and personal data.</div>
                                    </div>
                                    <div class="feature">
                                        <img src="{{asset('frontend')}}/assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                        <div class="details"><h5>Worldwide Delivery</h5>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                                    </div>
                                    <div class="feature">
                                        <img src="{{asset('frontend')}}/assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                        <div class="details"><h5>Hotline</h5>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                                    </div>
                                </div>
                                <!--End Product Feature-->
                                <!--Related Product-->
                                <div class="related-product grid-products clearfix">
                                    <header class="section-header">
                                        <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                                    </header>
                                    <div class="grid">
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image">
                                                    <a class="grid-view-item__link" href="#">
                                                        <img class="grid-view-item__image" src="{{asset('frontend')}}/assets/images/product-images/product-image21.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="details">
                                                    <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{asset('frontend')}}/assets/images/product-images/product-image18.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{asset('frontend')}}/assets/images/product-images/product-image22.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{asset('frontend')}}/assets/images/product-images/product-image23.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"><a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{asset('frontend')}}/assets/images/product-images/product-image25.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Lima Shirt</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$698.00</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Related Product-->
                                <!--Recently Viewed Product-->
                                <div class="related-product grid-products">
                                    <header class="section-header">
                                        <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                                        <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                                    </header>
                                    <div class="grid">
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image">
                                                    <a class="grid-view-item__link" href="#">
                                                        <img class="grid-view-item__image" src="{{'frontend'}}/assets/images/product-images/product-image1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="details">
                                                    <a class="grid-view-item__title" href="#">Camelia Reversible Jacket</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$199.60</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{'frontend'}}/assets/images/product-images/product-image42.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Cape Dress</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{'frontend'}}/assets/images/product-images/product-image40.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Raglan Maniche Coat in Olive</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{'frontend'}}/assets/images/product-images/product-image46.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Riga Jacket in Tar</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid__item">
                                            <div class="mini-list-item">
                                                <div class="mini-view_image"><a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="{{'frontend'}}/assets/images/product-images/product-image45.jpg" alt=""></a> </div>
                                                <div class="details"> <a class="grid-view-item__title" href="#">Reversible Quilted Coat</a>
                                                    <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$199.00</span></span></div>
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Recently Viewed Product-->
                            </div>
                        </div>
                        <!--Product Sidebar-->
                    </div>
                </div>
                <!--End-product-single-->


            </div>
            <!--#ProductSection-product-template-->
        </div>
        <!--MainContent-->
    </div>
    <!--End Body Content-->
@stop