<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Newsy</title>

        <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more." />
        <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
        <meta name="copyright" content="ZURB, inc. Copyright (c) 2013" />

        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/foundation-icons.css" />
        <link rel="stylesheet" href="../css/foundation.min.css" />
        <link rel="stylesheet" href="../css/globalrules.css" />
        <link rel="stylesheet" href="../css/custom.css" />
        <link rel="stylesheet" href="../css/responsive-tables.css" />

        <script src="../js/vendor/modernizr.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/foundation.min.js"></script>
        <script src="../js/foundation/foundation.orbit.js"></script>
        <script src="../js/foundation/foundation.dropdown.js"></script>
        <script src="../js/Chart.min.js"></script>
        <script src="../js/responsive-tables.js"></script>
        <script src="../js/tinymce/tinymce.min.js"></script>

        <script>
            tinymce.init({selector: 'textarea'});
        </script>
    </head>


    <body>

        <!-- Nav Bar -->

        <div class="row">
            <div class="small-12 columns">
                <span class="left">
                    <h1>Newsy <small>Fresh news. Your way.</small></h1>
                </span>

                <span class="right">                    
                    <a href="#" data-reveal-id="loginModal" data-reveal class="button radious round">Login</a><br>
                </span>    

                <div id="loginModal" class="reveal-modal small" data-reveal>
                    <form>
                        <div class="row">
                            <div class="small-8 small-centered columns">
                                <h1>Login</h1>
                                <input type="text" name="username" placeholder="username"/>                                
                                <input type="password" name="password" placeholder="password"/>  
                                <input type="submit" class="right button tiny round"/>                                         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <hr/>
        </div>   

        <!-- End Nav -->