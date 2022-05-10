  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="{{ asset('images/logo.png') }}" alt="Chain App Dev">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Services</a></li>
                          <li class="scroll-to-section"><a href="#about">About</a></li>
                          <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
                          <li class="scroll-to-section"><a href="#newsletter">Newsletter</a></li>
                          <li>
                              <div class="gradient-button"><a id="modal_trigger" href="#modal"><i
                                          class="fa fa-sign-in-alt"></i> Sign In Now</a></div>
                          </li>
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
      <div class="popupHeader">
          <span class="header_title">Login</span>
          <span class="modal_close"><i class="fa fa-times"></i></span>
      </div>

      <section class="popupBody">
          <!-- Social Login -->
          <div class="social_login">
              <div class="">
                  <a href="#" class="social_box fb">
                      <span class="icon"><i class="fab fa-facebook"></i></span>
                      <span class="icon_title">Connect with Facebook</span>

                  </a>

                  <a href="#" class="social_box google">
                      <span class="icon"><i class="fab fa-google-plus"></i></span>
                      <span class="icon_title">Connect with Google</span>
                  </a>
              </div>

              <div class="centeredText">
                  <span>Or use your Email address</span>
              </div>

              <div class="action_btns">
                  <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                  <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
              </div>
          </div>

          <!-- Username & Password Login form -->
          <div class="user_login">
              <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <label for="email">{{ __('Email') }}</label>
                  <input class="@error('email') is-invalid @enderror" type="email" id="email" placeholder="Email Address" name="email" value="{{ old('email') }}"
                      autocimplete="email" />
                  <br />
                  @error('email')
                      <span class="invalid-feedback d-block mt-2 text-danger rounded" role="alert">
                          <span><i class="fas fa-exclamation-triangle"></i></span>
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  <label for="password">{{ __('Password') }}</label>
                  <input type="password" id="password"
                  class=" @error('password') is-invalid @enderror"
                  placeholder="Password *" name="password"
                  autocomplete="new-password" />
                  <br />
                  @error('password')
                  <span class="invalid-feedback d-block mt-2 text-danger rounded"
                      role="alert">
                      <span><i class="fas fa-exclamation-triangle"></i></span>
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <label for="remember" class="inline-flex items-center">
                <input id="remember" type="checkbox"
                    class=""
                    name="remember">
                <span
                    class="ml-2 text-sm text-dark">{{ __('Remember me') }}</span>
            </label>

                  <div class="action_btns">
                      <div class="one_half"><a href="#" class="btn back_btn"><i
                                  class="fa fa-angle-double-left"></i> Back</a></div>
                      <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                  </div>
              </form>

              <p class="small mx-auto pb-lg-2"><a
                href="{{ url('forgot-password') }}"
                class="text-gray-600">{{ __('Forgot your password?') }}</a>
        </p>
          </div>

          <!-- Register Form -->
          <div class="user_register">
              <form>
                  <label>Full Name</label>
                  <input type="text" />
                  <br />

                  <label>Email Address</label>
                  <input type="email" />
                  <br />

                  <label>Password</label>
                  <input type="password" />
                  <br />

                  <div class="checkbox">
                      <input id="send_updates" type="checkbox" />
                      <label for="send_updates">Send me occasional email updates</label>
                  </div>

                  <div class="action_btns">
                      <div class="one_half"><a href="#" class="btn back_btn"><i
                                  class="fa fa-angle-double-left"></i> Back</a></div>
                      <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                  </div>
              </form>
          </div>
      </section>
  </div>
