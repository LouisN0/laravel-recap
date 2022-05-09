<div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>Amazing <em>Services &amp; Features</em> for you</h4>
                    <img src="{{ asset('images/heading-line-dec.png') }}" alt="">
                    <p>If you need the greatest collection of HTML templates for your business, please visit <a
                            rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS</a> Blog. If you need
                        to have a contact form PHP script, go to <a href="https://templatemo.com/contact"
                            target="_parent">our contact page</a> for more information.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($services as $service )
               <div class="col-lg-3">
                <div class="service-item first-service">
                    <div class="icon"></div>
                    <h4>{{ $service->titre }}</h4>
                    <p>{{ $service->description }}</p>
                    <div class="text-button">
                        <a href="{{ $service->lien }}">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div> 
            @endforeach
            
           
        </div>
    </div>
</div>
