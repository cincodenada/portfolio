<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>        <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>        <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
             More info: h5bp.com/i/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?=empty($title) ? 'cincodenada dot com' : $title ?></title>
    <meta name="description" content="">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

    <link rel="stylesheet" href="/css/style.css">

    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

    <!-- All JavaScript at the bottom, except this Modernizr build.
             Modernizr enables HTML5 elements & feature detects for optimal performance.
             Create your own custom Modernizr build: www.modernizr.com/download/ -->
    <script src="/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body class="dark">
    <div id="the_lights"><a href="#">Light</a></div>
    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
             chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <!-- Vertical centering -->
    <div id="outer"><div id="middle"><div id="wrapper">
        <header> 
            <a id="site_title" class="barelink" href="/"><span id="title_main">joel</span><span id="title_second">bradshaw</span></a>
            <nav id="topnav">
                <?php
                    $pages = array(
                        'who I am' => '/about',
                        'what I\'ve done' => '/projects',
                        //'portfolio' => '/portfolio',
                        'wiki' => '/wiki'
                    );
                    $matches = array();
                    $curpage = $subpage = null;
                    if(preg_match('#/(?P<page>\w+)(?:/(?P<subpage>\w+))?(?P<extra>.*)#',$_SERVER['REQUEST_URI'],$matches)) {
                      $curpage = $matches['page'];
                      $subpage = $matches['subpage'];
                    }
                ?>
                <ul class="nav">
                <?php foreach($pages as $title => $url): ?>
                    <li>
                        <?php if($title == $curpage): ?>
                            <span class="curpage">
                        <?php else: ?>
                            <a href="<?php echo $url ?>">
                        <?php endif ?>
                            <?php echo $title ?>
                        <?php if($title == $curpage): ?>
                            </span>
                        <?php else: ?>
                            </a>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <div role="main">
