@extends('front.main_front')
@section('title', 'HomePage')
@section('content')
<!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <!-- Slideshow Start-->
         <?php /* <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/ecom1.jpg" alt="banner 1" width="920" height="380" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/ecom2.jpg" alt="banner 2" width="920" height="380" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/ecom1.jpg" alt="banner 3" /></a> </div>
          </div>
          <!-- Slideshow End-->
          <!-- Featured Product Start-->
          <h3 class="subtitle">Featured</h3>
          <div class="owl-carousel product_carousel">
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/apple_cinema_30-200x200.jpg" alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Brand Fashion Cotton T-Shirt</a></h4>
                <p class="price"><span class="price-new">$110.00</span><span class="price-old">$122.00</span><span class="saving">-10%</span></p>

                    <div class="rating"> 
                      <span class="fa fa-stack">
                        <i class="fa fa-star fa-stack-2x"></i>
                        <i class="fa fa-star-o fa-stack-2x"></i>
                      </span> 
                        <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-2x"></i>
                          <i class="fa fa-star-o fa-stack-2x"></i>
                        </span>
                         <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-2x"></i>
                          <i class="fa fa-star-o fa-stack-2x"></i>
                        </span> 
                        <span class="fa fa-stack">
                          <i class="fa fa-star fa-stack-2x"></i>
                          <i class="fa fa-star-o fa-stack-2x"></i>
                        </span> 
                        <span class="fa fa-stack">
                          <i class="fa fa-star-o fa-stack-2x"></i>
                        </span>
                      </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('42');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Aspire Ultrabook Laptop</a></h4>
                <p class="price"> <span class="price-new">$230.00</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('49');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/sony_vaio_1-200x200.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Xitefun Causal Wear Fancy Shoes</a></h4>
                <p class="price"> <span class="price-new">$902.00</span> <span class="price-old">$1,202.00</span> <span class="saving">-25%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('46');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/macbook_1-200x200.jpg" alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Ideapad Yoga 13-59341124 Laptop</a></h4>
                <p class="price"> $2.00 </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick="cart.add('43');"><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/iphone_1-200x200.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">iPhone5 32gb </a></h4>
                <p class="price"> $123.20 </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/canon_eos_5d_1-200x200.jpg" alt="Long Sleeve Shirt Fashion Men" title="Long Sleeve Shirt Fashion Men" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Long Sleeve Shirt Fashion Men</a></h4>
                <p class="price"> <span class="price-new">$98.00</span> <span class="price-old">$122.00</span> <span class="saving">-20%</span> </p>
              </div>
              <div class="button-group">
                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                <div class="add-to-links">
                  <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                  <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- Featured Product End-->
          <!-- Banner Start-->
          <div class="marketshop-banner">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-3-400x200.jpg" alt="Sample Banner 3" title="Sample Banner 3" /></a></div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-1-400x200.jpg" alt="Sample Banner" title="Sample Banner" /></a></div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-2-400x200.jpg" alt="Sample Banner 2" title="Sample Banner 2" /></a></div>
            </div>
          </div>
          <!-- Banner End-->*/?>
          <!-- Categories Product Slider Start-->
          @foreach($categories as $category)
          <div class="category-module" id="latest_category">
            <h3 class="subtitle">{{$category->name}} - <a class="viewall" href="#">view all</a></h3>
            
            <div class="category-module-content">
              <ul id="sub-cat" class="tabs">
                @foreach($category->subcategories as $subcategory)
                <li><a href="#tab-cat1">{{$subcategory->name}}</a></li>
                @endforeach
                
              </ul>
              @foreach($category->subcategories as $subcategory)
              @foreach($subcategory->products as $product)
              <div id="tab-cat1" class="tab_content">
                <div class="owl-carousel latest_category_tabs">
                  <div class="product-thumb">
                    <div class="image"><a href="#"><img src="image/product/samsung_tab_1-200x200.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="#">{{$product->title}}</a></h4>
                      <p class="price"> <span class="price-new">$251.99</span> <span class="price-old">$241.99</span> <span class="saving">-5%</span> </p>
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                      <div class="add-to-links">
                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick=""><i class="fa fa-heart"></i></button>
                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                  
                
               
                </div>
              </div>
              @endforeach
              @endforeach

  
            </div>

          </div>
          @endforeach
          <!-- Categories Product Slider End-->
        </div>
        <!--Middle Part End-->
      </div>
    </div>
  </div>
  @endsection