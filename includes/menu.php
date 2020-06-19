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

<? 
function checkUrl($request) {
    $current = $_SERVER['REQUEST_URI']; 

    if (in_array($current, $request)) {
        return true;
    }

    return false;
}

?>

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
                    alt="Millers Pro Landscape's Logo"
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
                    <li class="nav-item <? if (checkUrl(['/', 'index', 'index.php'])) echo 'active' ?>">
                        <a
                            class="nav-link"
                            href="/"
                            onclick="window.ga('send', 'event', 'Home - Navbar', 'click')"
                            >Home<? if (checkUrl(['/', '/index', '/index.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                        >
                    </li>
                    <li class="nav-item <? if (checkUrl(['/about', '/about.php'])) echo 'active' ?>">
                        <a
                            class="nav-link"
                            href="/about"
                            onclick="window.ga('send', 'event', 'About - Navbar', 'click')"
                            >About<? if (checkUrl(['/about', '/about.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
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
                                class="dropdown-item <? if (checkUrl(['/lawn_care', '/lawn_care.php'])) echo 'active' ?>"
                                href="/lawn_care"
                                onclick="window.ga('send', 'event', 'Lawn Care - Navbar', 'click')"
                                >Lawn Care<? if (checkUrl(['/lawn_care', '/lawn_care.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/tree_work', '/tree_work.php'])) echo 'active' ?>"
                                href="/tree_work"
                                onclick="window.ga('send', 'event', 'Tree Work - Navbar', 'click')"
                                >Tree Work<? if (checkUrl(['/tree_work', '/tree_work.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/masonry', '/masonry.php'])) echo 'active' ?>"
                                href="/masonry"
                                onclick="window.ga('send', 'event', 'Masonry - Navbar', 'click')"
                                >Masonry<? if (checkUrl(['/masonry', '/masonry.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/irrigation', '/irrigation.php'])) echo 'active' ?>"
                                href="/irrigation"
                                onclick="window.ga('send', 'event', 'Irrigation - Navbar', 'click')"
                                >Irrigation Systems<? if (checkUrl(['/irrigation', '/irrigation.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/landscape_construction', '/landscape_construction.php'])) echo 'active' ?>"
                                href="/landscape_construction"
                                onclick="window.ga('send', 'event', 'Landscape Construction - Navbar', 'click')"
                                >Landscape Construction<? if (checkUrl(['/landscape_construction', '/landscape_construction.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/maintenance', '/maintenance.php'])) echo 'active' ?>"
                                href="/maintenance"
                                onclick="window.ga('send', 'event', 'Maintenance - Navbar', 'click')"
                                >Maintenance<? if (checkUrl(['/maintenance', '/maintenance.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/foundation', '/foundation.php'])) echo 'active' ?>"
                                href="/foundation"
                                onclick="window.ga('send', 'event', 'Foundation - Navbar', 'click')"
                                >Foundation<? if (checkUrl(['/foundation', '/foundation.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/snow_removal', '/snow_removal.php'])) echo 'active' ?>"
                                href="/snow_removal"
                                onclick="window.ga('send', 'event', 'Snow Removal - Navbar', 'click')"
                                >Snow Removal<? if (checkUrl(['/snow_removal', '/snow_removal.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                            <a
                                class="dropdown-item <? if (checkUrl(['/excavation', '/excavation.php'])) echo 'active' ?>"
                                href="/excavation"
                                onclick="window.ga('send', 'event', 'Excavation - Navbar', 'click')"
                                >Excavation<? if (checkUrl(['/excavation', '/excavation.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                            >
                        </div>
                    </li>
                    <li class="nav-item <? if (checkUrl(['/projects', '/projects.php'])) echo 'active' ?>">
                        <a
                            class="nav-link"
                            href="/projects"
                            onclick="window.ga('send', 'event', 'Projects - Navbar', 'click')"
                            >Projects<? if (checkUrl(['/projects', '/projects.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                        >
                    </li>

                    <li class="nav-item <? if (checkUrl(['/testimonials', '/testimonials.php'])) echo 'active' ?>">
                        <a
                            class="nav-link"
                            href="/testimonials"
                            onclick="window.ga('send', 'event', 'Testimonials - Navbar', 'click')"
                            >Testimonials<? if (checkUrl(['/testimonials', '/testimonials.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                        >
                    </li>
                    <li class="nav-item <? if (checkUrl(['/contact', '/contact.php'])) echo 'active' ?>">
                        <a
                            class="nav-link"
                            href="/contact"
                            onclick="window.ga('send', 'event', 'Contact - Navbar', 'click')"
                            >Contact<? if (checkUrl(['/contact', '/contact.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                        >
                    </li>
                    <li class="nav-item nav-seperator">
                        <span class="nav-link">|</span>
                    </li>
                    <li class="nav-item millers-pools <? if (checkUrl(['/pool_installation', '/pool_installation.php'])) echo 'active' ?>">
                        <a
                            class="nav-link"
                            href="/pool_installation"
                            onclick="window.ga('send', 'event', 'Millers Pools - Navbar', 'click')"
                            >Millers Pools<? if (checkUrl(['/pool_installation', '/pool_installation.php'])) echo ` <span class="sr-only">(current)</span>` ?></a
                        >
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
