<nav class="navbar-glass fs-10 navbar-top sticky-kit navbar navbar-expand navbar-light">
    <div aria-label="Toggle navigation" class="toggle-icon-wrapper me-md-3 me-2 d-xl-none navbar-toggler collapsed">
        <button class="navbar-toggler-humburger-icon btn btn-link d-flex flex-center" id="burgerMenu">
            <span class="navbar-toggle-icon">
                <span class="toggle-line"></span>
            </span>
        </button>
    </div>
    <a class="text-decoration-none navbar-brand text-left" id="topLogo" href="/">
        <div class="d-flex align-items-center">

            <span class="font-sans-serif text-primary">falcon</span>
        </div>
    </a>
    <ul class="align-items-center d-none d-lg-block navbar-nav">
        <li class="nav-item">
            <div class="search-box dropdown">
                <div class="dropdown-caret-none dropdown-toggle" id="react-aria4565791148-:r0:" aria-expanded="false">
                    <form class="position-relative">
                        <input placeholder="Search..." aria-label="Search" type="search"
                            class="rounded-pill search-input form-control" value="">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                            class="svg-inline--fa fa-search fa-w-16 position-absolute text-400 search-box-icon"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                    </form>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav-icons ms-auto flex-row align-items-center navbar-nav">


        <li class="dropdown">
            <a class="px-0 nav-link notification-indicator notification-indicator-primary toggle"
                id="react-aria4565791148-:r2:" aria-expanded="false" href="/#!">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell"
                    class="svg-inline--fa fa-bell fa-w-14 fs-5" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512" style="transform-origin: 0.4375em 0.5em;">
                    <g transform="translate(224 256)">
                        <g transform="translate(0, 0)  scale(0.625, 0.625)  rotate(0 0 0)">
                            <path fill="currentColor"
                                d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"
                                transform="translate(-224 -256)"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </li>

        <li class="dropdown">

            <div class="avatar avatar-xl ">
                <img class="rounded-circle " src="{{ asset('/images/icons8-user-40.png') }}" alt="">
            </div>

        </li>
    </ul>
</nav>
