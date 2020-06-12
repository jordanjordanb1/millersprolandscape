<style>
    .nav-seperator {
        margin: 0 10px;
    }

    .navbar-brand {
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
    }

    .navbar-brand img {
        display: block;
        margin: 0 auto;
    }

    .navbar-collapse {
        -webkit-box-flex: 0;
            -ms-flex-positive: 0;
                flex-grow: 0
    }

    @media screen and (max-width: 1210px) {
        .nav-container {
            max-width: 100vw;
        }
    }

    @media screen and (max-width: 1050px) {
        .nav-link {
            font-size: 21px;
        }

        .nav-seperator {
            margin: 0;
        }
    }

    @media screen and (max-width: 900px) {
        .nav-link {
            font-size: 19px;
        }
    }

    @media screen and (max-width: 840px) {
        .nav-link {
            font-size: 17px;
        }
    }

    @media screen and (max-width: 820px) {
        .nav-seperator {
            display: none;
        }
    }

    @media screen and (max-width: 820px) {
        .navbar-brand img {
            display: block;
            margin: 0;
        }

        .nav-link {
            padding-left: 0.2rem;
            padding-right: 0.2rem;
        }
    }

    @media screen and (max-width: 767px) {
        .nav-link {
            font-size: 20px;
            text-align: center;
        }
    }
</style>

<div class="page-wrapper grey">
    <div class="container nav-container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a
                class="navbar-brand"
                href="/"
                onclick="window.ga('send', 'event', 'Logo - Navbar', 'click')"
            >
                <img
                    width="120"
                    height="100"
                    src="static/assets/img/logo/millersprolandscape.svg"
                    alt="Millers Professionals Co Logo"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarNavDropdown"
            >
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a
                            class="nav-link"
                            href="/"
                            onclick="window.ga('send', 'event', 'Home - Navbar', 'click')"
                            >Home <span class="sr-only">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/about"
                            onclick="window.ga('send', 'event', 'About - Navbar', 'click')"
                            >About</a
                        >
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            onclick="window.ga('send', 'event', 'Services - Navbar', 'click')"
                        >
                            Services
                        </a>
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink"
                        >
                            <a
                                class="dropdown-item"
                                href="/lawn_care"
                                onclick="window.ga('send', 'event', 'Lawn Care - Navbar', 'click')"
                                >Lawn Care</a
                            >
                            <a
                                class="dropdown-item"
                                href="/tree_work"
                                onclick="window.ga('send', 'event', 'Tree Work - Navbar', 'click')"
                                >Tree Work</a
                            >
                            <a
                                class="dropdown-item"
                                href="/masonry"
                                onclick="window.ga('send', 'event', 'Masonry - Navbar', 'click')"
                                >Masonry</a
                            >
                            <a
                                class="dropdown-item"
                                href="/irrigation"
                                onclick="window.ga('send', 'event', 'Irrigation - Navbar', 'click')"
                                >Irrigation Systems</a
                            >
                            <a
                                class="dropdown-item"
                                href="/landscape_construction"
                                onclick="window.ga('send', 'event', 'Landscape Construction - Navbar', 'click')"
                                >Landscape Construction</a
                            >
                            <a
                                class="dropdown-item"
                                href="/maintenance"
                                onclick="window.ga('send', 'event', 'Maintenance - Navbar', 'click')"
                                >Maintenance</a
                            >
                            <a
                                class="dropdown-item"
                                href="/foundation"
                                onclick="window.ga('send', 'event', 'Foundation - Navbar', 'click')"
                                >Foundation</a
                            >
                            <a
                                class="dropdown-item"
                                href="/snow_removal"
                                onclick="window.ga('send', 'event', 'Snow Removal - Navbar', 'click')"
                                >Snow Removal</a
                            >
                            <a
                                class="dropdown-item"
                                href="/excavation"
                                onclick="window.ga('send', 'event', 'Excavation - Navbar', 'click')"
                                >Excavation</a
                            >
                        </div>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/projects"
                            onclick="window.ga('send', 'event', 'Projects - Navbar', 'click')"
                            >Projects</a
                        >
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/testimonials"
                            onclick="window.ga('send', 'event', 'Testimonials - Navbar', 'click')"
                            >Testimonials</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="/contact"
                            onclick="window.ga('send', 'event', 'Contact - Navbar', 'click')"
                            >Contact</a
                        >
                    </li>
                    <li class="nav-item nav-seperator">
                        <span class="nav-link">|</span>
                    </li>
                    <li class="nav-item millers-pools">
                        <a
                            class="nav-link"
                            href="/pool_installation"
                            onclick="window.ga('send', 'event', 'Millers Pools - Navbar', 'click')"
                            >Millers Pools</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
