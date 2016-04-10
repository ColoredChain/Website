<?php
    include("./inc_header.php");

    header1(
        $body_class = "home-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "home",
        $title      = "Coloredchain - Colorful Blockchain Applications Platform"

    )

?>
    <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>
                <li class="slide slide-2"></li>
                <li class="slide slide-3"></li>
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->

    <section class="promo section section-on-bg">
        <div class="container text-center">
            <h2 class="title">ColoredChain</h2>
            <h2>A Colorful Blockchain Applications Framework</h2>
            <p class="intro">Powered Proof of Stake,Sidechains,Decentralized Applications Framework,Colored Token,Trim...
            </p>
            <p><a class="btn btn-cta btn-cta-primary" href="ico.php"><span class="fa fa-btc"></span>Join the ICO</a> &nbsp;&nbsp;
               <a class="btn btn-cta btn-cta-primary" href="#features"><span class="fa fa-chevron-down"></span>Learn More</a>
            </p> 
        </div><!--//container-->
    </section><!--//promo-->

    <div class="sections-wrapper">

        <!-- ******Features Section****** -->
        <section id="features" class="section why">
            <div class="container">
                <h2 class="title text-center">Features of ColoredChain</h2>
                <p class="intro text-center">ColoredChain enable efficient,secure,smart,scalable blockchain applications platform with Powered Proof of Stake,Sidechains,Decentralized Applications Framework,Colored Token,Trim features. </p>
                
				<div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Powered Proof of Stake</h3>
                        <div class="desc">
                            <p>ColoredChain adopts a virtual mining PoS consensus mechanism named Powered Proof of Stake,aims to be a efficient,light,environment friendly system.</p>
                            <p>Also with counterparty economic disincentivize to prevent petential attacks,such as'Nothing at Stake',make a more secure platform.</p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="/assets/images/home/feature-1.png" alt="ppos" />
                        
                    </figure>
                </div><!--//item-->
				
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">SideChain</h3>
                        <div class="desc">
                            <p>MasterChain and SideChain architecture provides more flexible,scalable,clear framework to deploy applications.</p>
                            <p>Materchain manages only one type transaction and secures the P2P network,aims to be as more lightweight and simple as possible.</p>
                            <p>All other transactions type and applications built on coloredchain will be placed on sidechains. </p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="/assets/images/home/feature-2.png" alt="sidechain" />
						
                    </figure>
                </div><!--//item-->
				
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Decentralized Applications Framework</h3>
                        <div class="desc">
                            <p>Coloredchain will build in a Vitual Machine(CVM) to provide a runtime environment for DApps.</p>
                            <p>Coloredchain will also include a modularized Toolkit for developers and end users to write DApps more easily.</p>
							<p>For users,they just need install DApps in Plugin Kit to use them for their business.</p>
                        							
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="/assets/images/home/feature-3.png" alt="daf" />
						<figcaption class="figure-caption">Decentralized Applications Framework</figcaption>
                    </figure>
                </div><!--//item-->
				
                <div class="row item">
                    <div class="content col-md-4 col-sm-12 col-xs-12 col-md-push-8 col-sm-push-0 col-xs-push-0">
                        <h3 class="title">Colored Token Platform</h3>
                        <div class="desc">
                            <p>
                                Coloredchain will pre-build in the first decentralized application - colored token platform,allows users to create and exchange digital assets globally.
                            </p>
							<p>
                                Users can build gateways to form a global trading market with any assets,such as Bitcoin,Ethereum,precious metals,shares,forex,and so on.
                            </p>
							<p>
							    No single point failure,totally transparent,almost rea-time,fully decentralized,secure.
                            </p>
						</div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-pull-4 col-sm-pull-0 col-xs-pull-0">
                        <img class="img-responsive" src="/assets/images/home/feature-4.png" alt="dap" />
						<figcaption class="figure-caption">Decentralized Asset Platform</figcaption>
                    </figure>
                </div><!--//item-->

				      
				
				<div class="row item last-item">
                    <div class="content col-md-4 col-sm-12 col-xs-12">
                        <h3 class="title">Trim</h3>
                        <div class="desc">
                            <p>
                                The Masterchain and Sidechain architecture allows to trim transactions of sidechains without any potential risk. 
                                All transactions on sidechains will be trimed periodically,and only save the hash of snapshot on blockchain.
                            </p>
							<p>
                                Trim will decrease size of database dramatically,make it possible to run coloredchain nodes on most devices,like smartphone,and IOT area.
								Lightweight will let run nodes on mobile device more suitably and easily,make coloredchain nodes more decentralized and more secure.
                            </p>
                        </div>
                    </div><!--//content-->
                    <figure class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <img class="img-responsive" src="/assets/images/home/feature-5.png" alt="trim" />
						<figcaption class="figure-caption">Trim</figcaption>
                    </figure>
                </div><!--//item-->
				
                <div class="feature-lead text-center">
                    <h4 class="title">Want to learn more details of ColoredChain ?</h4>
                    <p><a class="btn btn-cta btn-cta-secondary" href="features.php">Learn More </a></p>
                </div>
            </div><!--//container-->
        </section><!--//features-->

        <!-- ******DApp slide Section****** -->
        <section class="section testimonials">
            <div class="container">
                <h2 class="title text-center">Decentralized Applications Platform</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
		<!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

        <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <center><img src="/assets/images/dapps/dapp-1.png" height="440" width="670" alt="Chania"></center>
                        <br><br><br>
						<div class="carousel-caption">
						
                            <h3 style="color:#ec6952">Blockchain as DApps Platform</h3>
                            <p style="color:#ec6952">Write your DApps on your own sidechain,run your business in a decentralized way.</p>
                        </div>
                    </div>

                    <div class="item">
                        <center><img src="/assets/images/dapps/dapp-2.png" height="440" width="670" alt="Chania"></center>
                        <div class="carousel-caption">
                            <h3 style="color:#ec6952">IOT Economy</h3>
                            <p style="color:#ec6952">Use light coloredchain on IOT device to colorful your internet of thing economy.</p>
                        </div>
                    </div>

                    <div class="item">
                        <center><img src="/assets/images/dapps/dapp-3.png" height="440" width="670" alt="Chania"></center>
                        <div class="carousel-caption">
                            <h3 style="color:#ec6952">Multi-Device</h3>
                            <p style="color:#ec6952">Support Coloredchain nodes with VPS,PC,SmartPhone,Raspberry...</p>
                        </div>
                    </div>

                    <div class="item">
                        <center><img src="/assets/images//dapps/dapp-4.png" height="440" width="670" alt="Chania"></center>
                        <div class="carousel-caption">
                        <h3 style="color:#ec6952">Trim</h3>
                        <p style="color:#ec6952">Lightweight,efficient,decentralized,solid secure.</p>
                        </div>
                    </div>
                </div>
            </div><!--//container-->
        </section><!--//DApp slide-->

        <!-- ******Partership Section****** -->
        <section class="section press">
            <div class="container text-center">
                <h2 class="title">Partnership</h2>
                <ul class="press-list list-inline row last">
                    <li class="col-md-2 col-sm-2 col-xs-4"><a href=""><img class="img-responsive" src="assets/images/partners/partner-1.png" alt=""></a></li>
                    
                </ul><!--//partners-list-->
            </div><!--//container-->
        </section>

        <!-- ******End Section****** -->
        <section id="cta-section" class="section cta-section text-center home-cta-section">
            <div class="container">
               <h2 class="title">Ready to make blockchain ecosystem more colorful?</h2>
               <p><a class="btn btn-cta btn-cta-primary" href="ico.php">Join ColoredChain Now !</a></p>
            </div><!--//container-->
        </section><!--//cta-section-->

    </div><!--//section-wrapper-->

<?php
    include("./inc_footer.php");
?>