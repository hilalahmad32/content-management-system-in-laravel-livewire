<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com -->
<!-- Last Published: Thu Nov 12 2020 22:33:24 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="denali-template.webflow.io" data-wf-page="5e4b1a54e48aed3ca91ff22b"
    data-wf-site="5e4b1a54e48aed761d1ff229" data-wf-status="1">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="https://assets.website-files.com/5e4b1a54e48aed761d1ff229/css/denali-template.webflow.170e98de3.css"
        rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"]
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
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navigation-bar w-nav">
        <div class="w-container"><a href="/" aria-current="page" class="w-nav-brand w--current">
                <div class="site-name">Denali</div>
            </a>
            <nav role="navigation" class="navigation-menu w-nav-menu">
                <a href="/" aria-current="page" class="navigation-link w-nav-link w--current">Home</a>
            </nav>
            <div class="menu-button w-nav-button">
                <div class="w-icon-nav-menu"></div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="w-container">
            <div class="w-row">
                @include('includes.user-profile')
                {{ $slot }}
            </div>
        </div>
    </div>

    @livewireScripts

    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>
