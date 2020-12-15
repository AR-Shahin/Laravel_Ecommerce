<!--Home slider-->
<div class="slideshow slideshow-wrapper pb-section sliderFull">
    <div class="home-slideshow">
        @foreach($sliders as $slider)
        <div class="slide">
            <div class="blur-up lazyload bg-size">
                <img style="width: 100%;" class="blur-up lazyload bg-img" data-src="{{asset($slider->image)}}" src="{{asset(asset($slider->image))}}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                    <div class="slideshow__text-content bottom">
                        <div class="wrap-caption center">
                            <h2 class="h1 mega-title slideshow__title">{{$slider->text_1}}</h2>
                            <span class="mega-subtitle slideshow__subtitle">{{$slider->text_2}}</span>
                            <span class="btn">Shop now</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>
<!--End Home slider-->