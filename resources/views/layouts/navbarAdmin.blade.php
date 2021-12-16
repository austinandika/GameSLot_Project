<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a href="{{ route('home.index') }}" class="navbar-brand ms-3">
            <img height="35px" src="{{\Illuminate\Support\Facades\Storage::url('Logo.png')}}" alt="">
        </a>

        <div class="link-container" style="margin-left: -150px">
            <a href="{{ route('manageGame.manage') }}" style="text-decoration: none" class="text-dark me-3 {{ Route::is('manageGame.manage') ?
            'active' : '' }}">Manage Game</a>
            <a href="{{ route('manageGenre.manage') }}" style="text-decoration: none" class="text-dark ms-3 {{ Route::is('manageGenre.manage') ?
            'active' : '' }}">Manage Game Genre</a>
        </div>

        <form class="d-flex search" action="{{ route('home.search') }}" method="get">
            <span class="fa fa-search form-control-feedback search-icon"></span>
            <input class="form-control search-input me-2" id="txtSearch" style="width: 500px" type="search" placeholder="Search" aria-label="Search" name="keyword">
        </form>

        <div class="button-container me-3 d-flex flex-row">
            <a href="{{ route('cart.list') }}" class="my-auto mx-3">
                <i class="fa fa-shopping-cart text-secondary fs-3" aria-hidden="true"></i>
            </a>

            <div class="dropdown mx-3">
                <a class="dropdown" style="text-decoration: none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img height="35px" class="rounded-circle" style="border: 2px solid;" src="{{\Illuminate\Support\Facades\Storage::url('profileImage/default-profile.png')}}" alt="">
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="right: 0; left: auto" aria-labelledby="dropdownMenuLink">
                    <span class="dropdown-item">Hi, <b>{{ auth()->user()->name }}</b></span>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('profile.get') }}">Your Profile</a>
                    <a class="dropdown-item" href="{{ route('transaction.history') }}">Transaction History</a>
                    <a class="dropdown-item" href="{{ route('account.logout') }}">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .navbar .d-flex .form-control {
            padding-left: 35px;
        }

        .navbar .d-flex .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 40px;
            height: 38px;
            line-height: 38px;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
    </style>
</nav>


