<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand fs-3" href="#"><i class='bi bi-box-fill'></i></a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page"><i class="bi bi-bookmark-fill"></i>
                        <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="bi bi-building-fill-add"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="/library/create">pinjam <i class='bi bi-book-fill'></i></a>
                        <a class="dropdown-item" href="/logout">logout <i class="bi bi-arrow-left-square-fill"></i></a>
                    </div>
                </li>
            </ul>

            <div class="div wrapper-profil d-flex align-items-center">
                <h5 class="">{{ Auth::User()->username }}</h5>
                <img style="max-width: 50px"
                    src="https://cdn.icon-icons.com/icons2/3054/PNG/512/account_profile_user_icon_190494.png"
                    alt="">
            </div>

        </div>
    </div>
</nav>
