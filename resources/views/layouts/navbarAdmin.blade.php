<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a href="/" class="navbar-brand ms-3">
            <img height="35px" src="{{\Illuminate\Support\Facades\Storage::url('Logo.png')}}" alt="">
        </a>

        <div class="link-container" style="margin-left: -150px">
            <a href="#" style="text-decoration: none" class="text-dark me-3">Manage Game</a>
            <a href="#" style="text-decoration: none" class="text-dark ms-3">Manage Game Genre</a>
        </div>

        <form class="d-flex">
            <span class="fa fa-search form-control-feedback"></span>
            <input class="form-control me-2" style="width: 500px" type="search" placeholder="Search" aria-label="Search">
        </form>

        <div class="button-container me-3 d-flex flex-row">
            <a href="" class="my-auto mx-3">
                <i class="fa fa-shopping-cart text-secondary fs-3" aria-hidden="true"></i>
            </a>

            <div class="dropdown mx-3">
                <a class="dropdown" style="text-decoration: none" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img height="35px" class="rounded-circle" style="border: 2px solid;" src="{{\Illuminate\Support\Facades\Storage::url('profileImage/default-profile.png')}}" alt="">
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="right: 0; left: auto" aria-labelledby="dropdownMenuLink">
                    <span class="dropdown-item">Hi, <b>member</b></span>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Your Profile</a>
                    <a class="dropdown-item" href="#">Transaction History</a>
                    <a class="dropdown-item" href="#">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>


