
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="manifest" href="site.webmanifest">
        <!--<link rel="apple-touch-icon" href="icon.png">-->

        <!--<link rel="stylesheet" href="css/normalize.css">-->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div id="header">
            <h1>Minimalist capsule wardrobe</h1>
        </div>

        <div id="top-nav">
            <div class="column-wrapper">
                <div class="column-content">
                    <a href="/">Outfit generator</a>
                    <a href="/capsule-wardrobe">The full capsule wardrobe</a>
                </div>
            </div>
        </div>

        <div class="column-wrapper">
            <div class="column-content">
                <?php echo $content; ?>
            </div>
        </div>

        <div id="footer">
            <span>&copy; copyright 2018 all rights reserved.</span>
            <a href="/legal">Terms &amp; privacy policy</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.4.0"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
        <script src="/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID.
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        -->
    </body>
</html>
