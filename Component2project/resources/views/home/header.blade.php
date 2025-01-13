<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <!-- <img src="assets/images/logo.jpg" alt=""> -->
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{'/home'}}" class="active">Home</a></li>
                        <li><a href="explore.html">Explore</a></li>
                        <li><a href="details.html">Item Details</a></li>
                        <!-- <li><a href="author.html">Author</a></li> -->
                        <li><a href="create.html">Create Yours</a></li>
                    @if (Route::has('login'))
                    <!-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> -->
                    @auth
                    <div class="logout">
                        <x-app-layout>
                        </x-app-layout>
                        </div>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                    <!-- </div> -->
                    @endif




                        
                        
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