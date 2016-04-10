<?php
    function navbar($nav_show=true, $nav_item="") {
        
         // Server root
        $coloredchain = "http://" . $_SERVER['SERVER_NAME'] . str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace("/blog", '', dirname($_SERVER['SCRIPT_FILENAME'])));
        
        $nav = array();
        $nav[$nav_item] = "active";
        
        if ($nav_show == true) {
?>
    <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="<?=$nav["home"];?> nav-item"><a href="/index.php">Home</a></li>
                        <li class="<?=$nav["about"];?> nav-item"><a href="/what.php">What</a></li>
                        <li class="<?=$nav["features"];?> nav-item"><a href="/features.php">Features</a></li>  
                        <li class="<?=$nav["blog"];?> nav-item"><a href="https://blog.coloredchain.com/" target="_blank">Blog</a></li>
                        <li class="<?=$nav["wiki"];?> nav-item"><a href="http://wiki.coloredchain.com/" target="_blank">Wiki</a></li>
                        <li class="<?=$nav["forum"];?> nav-item"><a href="http://forum.coloredchain.com/" target="_blank">Forum</a></li>
                        <li class="<?=$nav["faq"];?> nav-item"><a href="/faq.php">FAQ</a></li>                                         
                        <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="/ico.php">I C O</a></li>                                                                             
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->  
<?php

        }
        
    }

?>