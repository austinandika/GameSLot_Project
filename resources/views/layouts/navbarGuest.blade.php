<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a href="{{ route('home.index') }}" class="navbar-brand ms-3">
            <img height="35px" src="{{\Illuminate\Support\Facades\Storage::url('Logo.png')}}" alt="">
        </a>

        <form class="d-flex" action="{{ route('home.search') }}" method="get">
            <span class="fa fa-search form-control-feedback"></span>
            <input class="form-control me-2" id="txtSearch" style="width: 500px" type="search" placeholder="Search" aria-label="Search" name="keyword">
        </form>

        <div class="button-container me-3">
            <a href="{{ route('account.login') }}" class="btn btn-primary mx-1">Sign In</a>
            <a href="{{ route('account.register') }}" class="btn btn-outline-primary mx-1">Sign Up</a>
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

{{--<div class="navbar-container">--}}
{{--    <div class="logo-container">--}}
{{--        <a href="" class="logo"><span style="font-weight: bold; color: black">Game</span><span style="font-weight: bold; color: red">SLot</span></a>--}}
{{--    </div>--}}

{{--    <div class="search-bar-container">--}}
{{--        <i class="fa fa-search" aria-hidden="true" style="color: grey"></i>--}}
{{--        <input type="text" placeholder="Search" class="search-bar">--}}
{{--    </div>--}}

{{--    <div class="button-container">--}}
{{--        <div class="button sign-in">--}}
{{--            <a href="">Sign in</a>--}}
{{--        </div>--}}

{{--        <div class="button sign-up">--}}
{{--            <a href="">Sign up</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
