<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Tue Oct 12 2021 23:01:17 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="escape-free-template.webflow.io" data-wf-page="5e4b1929fccc7f5af9de826b"
    data-wf-site="5e4b1929fccc7f2575de825e" data-wf-status="1">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="https://assets.website-files.com/5e4b1929fccc7f2575de825e/css/escape-free-template.webflow.547566f2e.css"
        rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Lora:regular,italic,700", "Oxygen:300,regular,700"]
            }
        });
    </script>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="https://assets.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets.website-files.com/img/webclip.png" rel="apple-touch-icon" />
    @livewireStyles
</head>

<body>
    <div>
        <div data-collapse="tiny" data-animation="over-right" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="navbar w-nav">
            <div class="w-container"><a href="/" aria-current="page" class="logo w-nav-brand w--current">
                    <div class="long-text">Escape.</div>
                </a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="{{ route('home') }}" aria-current="page" class="nav-link w-nav-link w--current">Home</a>
                    <a href="{{ route('category') }}" class="nav-link w-nav-link">Categories</a>
                    <a href="/about" class="nav-link w-nav-link">About</a>
                    <a href="/contact" class="nav-link w-nav-link">Contact</a>
                    <a href="{{ route('users.login') }}" class="nav-link w-nav-link">Login</a>
                    <a href="#" class="close-x w-hidden-main w-hidden-medium w-hidden-small">×</a>
                </nav>
                <div class="menu-button w-hidden-main w-hidden-medium w-hidden-small w-clearfix w-nav-button">
                    <div class="menu-icon w-icon-nav-menu"></div>
                    <div class="menu-link">MENU</div>
                </div>
            </div>
        </div>
        <div class="hero-section wf-section">
            <div class="hero-content w-container">
                <div style="-webkit-transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, -30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                    class="hero-heading">Let&#x27;s do it together.</div>
                <div style="opacity:0;-webkit-transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="hero-subheading">We travel the world in search of stories. Come along for the ride.</div><a
                    href="#Latest-post" style="opacity:0" class="button w-button">View Latest Posts</a>
            </div>
        </div>
        <div class="category-section wf-section">
            <div class="w-container">
                <div class="w-dyn-list">
                    <div role="list" class="w-clearfix w-dyn-items w-row">
                        <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2"><a
                                href="/categories/nature" class="category-link">Nature</a></div>
                        <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2"><a
                                href="/categories/photography" class="category-link">Photography</a></div>
                        <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2"><a
                                href="/categories/relaxation" class="category-link">Relaxation</a></div>
                        <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2"><a
                                href="/categories/vacation" class="category-link">Vacation</a></div>
                        <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2"><a
                                href="/categories/travel" class="category-link">Travel</a></div>
                        <div role="listitem" class="category-wrapper w-dyn-item w-col w-col-2"><a
                                href="/categories/adventure" class="category-link">Adventure</a></div>
                    </div>
                </div>
            </div>
        </div>
        {{ $slot }}
        <div class="main-section dark wf-section">
            <div class="w-container">
                <div class="section-heading">
                    <h2 class="white">Stay in Touch</h2>
                    <div class="med-divider"></div>
                </div>
                <div class="form-wrapper w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" method="get" class="w-clearfix">
                        <input type="email" class="field w-input" maxlength="256" name="email" data-name="Email"
                            placeholder="Enter your email address" id="email" required="" /><input
                            type="submit" value="Submit" data-wait="Please wait..."
                            class="submit-button w-button" />
                    </form>
                    <div class="success-message w-form-done">
                        <p>Thank you! Your submission has been received!</p>
                    </div>
                    <div class="w-form-fail">
                        <p>Oops! Something went wrong while submitting the form</p>
                    </div>
                </div>
            </div>
            <div class="footer-section">
                <div class="w-container">
                    <div class="w-row">
                        <div class="w-col w-col-4 w-col-small-4"><a href="/" aria-current="page"
                                class="footer-logo w-inline-block w--current">
                                <div class="long-text">Escape.</div>
                            </a></div>
                        <div class="footer-links w-col w-col-8 w-col-small-8"><a href="/" aria-current="page"
                                class="footer-link w--current">Home</a><a href="/categories"
                                class="footer-link">Categories</a><a href="/about" class="footer-link">About</a><a
                                href="/contact" class="footer-link">Contact</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e4b1929fccc7f2575de825e"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://assets.website-files.com/5e4b1929fccc7f2575de825e/js/webflow.073a8a568.js" type="text/javascript">
    </script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
    @livewireScripts
</body>

</html>
