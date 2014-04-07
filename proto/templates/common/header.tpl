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
        <link rel="stylesheet" href="{$BASE_URL}css/foundation-icons.css" />
        <link rel="stylesheet" href="{$BASE_URL}css/foundation.min.css" />
        <link rel="stylesheet" href="{$BASE_URL}css/globalrules.css" />
        <link rel="stylesheet" href="{$BASE_URL}css/custom.css" />
        <link rel="stylesheet" href="{$BASE_URL}css/responsive-tables.css" />

        <script src="{$BASE_URL}javascript/vendor/modernizr.js"></script>
        <script src="{$BASE_URL}javascript/jquery.min.js"></script>
        <script src="{$BASE_URL}javascript/foundation.min.js"></script>
        <script src="{$BASE_URL}javascript/foundation/foundation.orbit.js"></script>
        <script src="{$BASE_URL}javascript/foundation/foundation.dropdown.js"></script>
        <script src="{$BASE_URL}javascript/Chart.min.js"></script>
        <script src="{$BASE_URL}javascript/responsive-tables.js"></script>

        <script>
            
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
                    {if $USERNAME}
                        {include file='common/menu_logged_in.tpl'}
                    {else}
                        {include file='common/menu_logged_out.tpl'}
                    {/if}
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
        <div class="row" id="error_messages">
            {foreach $ERROR_MESSAGES as $error}
                <div class="error">{$error}<a class="close" href="#">X</a></div>
            {/foreach}
        </div>
        <div class="row" id="success_messages">
            {foreach $SUCCESS_MESSAGES as $success}
                <div class="success">{$success}<a class="close" href="#">X</a></div>
            {/foreach}
        </div>
