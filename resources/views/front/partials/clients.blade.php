<div id="clients" class="the-clients">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2">
              <div class="section-heading">
                  <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
                  <img src="{{ asset('images/heading-line-dec.png') }}" alt="">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eismod tempor incididunt ut
                      labore et dolore magna.</p>
              </div>
          </div>
          <div class="col-lg-12">
              <div class="naccs">
                  <div class="grid">
                      <div class="row">
                          <div class="col-lg-7 align-self-center">
                              <div class="menu">
                                  <div class="first-thumb active">
                                      @foreach ($testimonials as $item)
                                          <div class="thumb">
                                              <div class="row">
                                                  <div class="col-lg-4 col-sm-4 col-12">
                                                      <h4>{{ $item->nom }}</h4>
                                                      <span class="date">{{ $item->date }}</span>
                                                  </div>
                                                  <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                                                      <span class="category">{{ $item->categorie }}</span>
                                                  </div>
                                                  <div class="col-lg-4 col-sm-4 col-12">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <span class="rating">{{ $item->rating }}</span>
                                                  </div>
                                              </div>
                                          </div>
                                  </div>
                                  <div>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-5">
                              <ul class="nacc">
                                  <li class="active">
                                      <div>
                                          <div class="thumb">
                                              <div class="row">
                                                  <div class="col-lg-12">
                                                      <div class="client-content">
                                                          <img src="{{ asset('images/quote.png') }}" alt="">
                                                          <p>“{{ $testimonials[0]->commentaire }}”</p>
                                                      </div>
                                                      <div class="down-content">
                                                          <img src="{{ asset('images/' . $testimonials[0]->image) }}"
                                                              alt="">
                                                          <div class="right-content">
                                                              <h4>{{ $testimonials[0]->nom }}</h4>
                                                              <span>{{ $testimonials[0]->taff }}</span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  @foreach ($testimonials as $testimonial)
                                      @if ($loop->first <= 0)
                                          <li onmousedown='class="active"'>
                                              <div>
                                                  <div class="thumb">
                                                      <div class="row">
                                                          <div class="col-lg-12">
                                                              <div class="client-content">
                                                                  <img src="{{ asset('images/quote.png') }}"
                                                                      alt="">
                                                                  <p>“{{ $testimonial->commentaire }}”</p>
                                                              </div>
                                                              <div class="down-content">
                                                                  <img src="{{ asset('images/' . $testimonial->image) }}"
                                                                      alt="">
                                                                  <div class="right-content">
                                                                      <h4>{{ $testimonial->nom }}</h4>
                                                                      <span>{{ $testimonial->taff }}</span>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </li>
                                      @endif
                                  @endforeach
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
