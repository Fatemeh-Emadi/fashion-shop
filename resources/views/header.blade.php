<nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand  logo h1 align-self-center" href="index.html">
                Fashion Shop
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shop')}}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex ">
                   
                    
                    <a class="nav-icon position-relative text-decoration-none " href="/cart">
                        <i class="fa fa-fw fa-cart-arrow-down text-secondary mr-1 "></i>
                          
                    </a>
                    @guest
          <a href="{{url('/login')}}" class="btn btn-outline-secondary ms-3 px-2">
          <span >
                <i class="fas fa-user"></i>
                login
                
                </span>
                </a>
                @endguest
                @auth
                <a href="{{url('/logout')}}" class="btn btn-outline-secondary ms-3 px-2">
          <span>
          
                logout
                </span>
                </a>
                @endauth
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
      <!-- Modal -->
      <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>