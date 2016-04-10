<?php
    include("./inc_header.php"); 
    
     header1(
        $body_class = "features-page",
        $wrapper    = false,
        $tooltip    = true,
        $nav_show   = true,
        $nav_item   = "features",
        $title      = "ColoredChain Features"
    )
?>
    
    <div class="headline-bg">
    </div><!--//headline-bg-->         
    
<!-- ******DApp slide Section****** -->
        <section class="section testimonials">
            <div class="container">
            <h2 class="title text-center">DApps</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
	                <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="/assets/images/features/feature-1.png" height="440" width="670" alt="ppos"></center>
      <div class="carousel-caption">
        <h3 style="color:#ec6952">Powered Proof of Stake</h3>
        <p style="color:#ec6952">Efficient,secure,no mining cost,no inflation,environment friendly.</p>
      </div>
    </div>

    <div class="item">
      <center><img src="/assets/images/features/feature-2.png" height="440" width="670" alt="sidechain"></center>
      <div class="carousel-caption">
        <h3 style="color:#ec6952">Sidechains</h3>
        <p style="color:#ec6952">Flexible,scalable,custom,easy use.</p>
      </div>
    </div>

    <div class="item">
      <center><img src="/assets/images/features/feature-3.png" height="440" width="670" alt="Dapps"></center>
      <div class="carousel-caption">
        <h3 style="color:#ec6952">DApps Framework</h3>
        <p style="color:#ec6952">Runtime environment for decentralized applications built on coloredchain.</p>
      </div>
    </div>

    <div class="item">
      <center><img src="/assets/images/features/feature-4.png" height="440" width="670" alt="digital asset"></center>
      <div class="carousel-caption">
        <h3 style="color:#ec6952">Colored Token Platform</h3>
        <p style="color:#ec6952">Global digital assets issuing and trading platform.</p>
      </div>
    </div>
	<div class="item">
      <center><img src="/assets/images/features/feature-5.png" height="440" width="670" alt="trim"></center>
      <div class="carousel-caption">
        <h3 style="color:#ec6952">Trim</h3>
        <p style="color:#ec6952">Scalable,lightweight,no blockchain float,suitable for IOT economy.</p>
      </div>
    </div>
  </div>
  </div><!--//container-->
</section>
<!--//DApp slide-->
    
    <!-- ******Features Section****** -->
    <section class="features-tabbed section">
        <div class="container">
            <h2 class="title text-center">Features</h2>
            <div class="row">
                <div class=" text-center col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li class="active"><a href="#feature-1" role="tab" data-toggle="tab"><i class="fa fa-cloud"></i><br /><span class="hidden-sm hidden-xs">Powered PoS</span></a></li>
                        <li><a href="#feature-2" role="tab" data-toggle="tab"><i class="fa fa-code-fork"></i><br /><span class="hidden-sm hidden-xs">Masterchain Sidechains<br></span></a></li>
                        <li><a href="#feature-3" role="tab" data-toggle="tab"><i class="fa fa-cubes"></i><br /><span class="hidden-sm hidden-xs">DApps Framework</span></a></li>
						<li><a href="#feature-4" role="tab" data-toggle="tab"><i class="fa fa-line-chart"></i><br /><span class="hidden-sm hidden-xs">Tokens Platorm</span></a></li>
						<li><a href="#feature-5" role="tab" data-toggle="tab"><i class="fa fa-scissors"></i><br /><span class="hidden-sm hidden-xs">Blockchain Trim</span></a></li>
                        <li class="last"><a href="#feature-6" role="tab" data-toggle="tab"><i class="fa fa-list"></i><br /><span class="hidden-sm hidden-xs">Planned Features</span></a></li>
						
                    </ul><!--//nav-tabs-->
                    
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="feature-1">
                            <h3 class="title sr-only">Feature One</h3>  
                            <figure class="figure text-center">
                                <img class="img-responsive" src="/assets/images/features/feature-1.png" alt="" />
                                <figcaption class="figure-caption">Powered Proof of Stake</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <h3>Powered Proof of Stake</h3>
                                <p>
                                    ColoredChain adopts a virtual Proof of Power(PoW) consensus mechanism named Powered Proof of Stake(PPoS),aims to be a efficient,light,environment friendly system.
								</p>
								<P>
									<b>Virtual Proof of Power</b>&nbsp; Every token in coloredchain(masterchain) will have power to secure the p2p network like mining in bitcoin,but no need special equipments for this virtual mining.The power is proportional to amount of tokens.
                                    No inflation,’miners’ can only mint for transaction fees.
								</P>
								<p>
								    <b>Power Transfer</b>&nbsp; Every token has power of securing network,and the power can also be transfered to other nodes to secure the network during a period of time without sending tokens to others.
                                       So this will let those who cann’t run nodes lend their power to other online nodes to secure network.
                                       The more tokens participates for ‘ming’, the more secure p2p network will be.
								</P>
								<p>
								    <b>Anti-Nothing at Stake</b>&nbsp; There will be some counterparty economic disincentivizes to prevent petential attacks,such as'Nothing at Stake',even though N@S is not really a threat to system due to many different forks existed at some time but no one can really compete with masterchain.
                                       If the nodes tries to fork masterchain,they will lose power of tokens temporarily ,or be punished for some money(tokens) to miners as fees.

								</P>
                                
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-2">
                            <h3 class="title sr-only">Feature Two</h3>                                    
                            <figure class="figure text-center">
                                <img class="img-responsive" src="/assets/images/features/feature-2.png" alt="" />
                                <figcaption class="figure-caption">Masterchain and Sidechains</figcaption>
                            </figure>
                            <div class="desc text-left">
                                <h3>Sidechains</h3>
								<p>
								    Coloredchain uses masterchain and sidechains architecture to provide a more flexible,scalable platform to users and developers.
								</p>
								<p>
								    The masterchain will only manage one type transaction,coloredchain token transfer.And the tokens on masterchain will only have one function,secure the network.
								</p>
                                <p>
								    All other transactions and applications will be existed on sidechains.Anyone can easily launch their own sidechains at any time.
								</p>
								<p>
								    All sidechains will have their own meta tokens.The transaction fees on sidechains will be denominated by their own meta tokens.Tokens of sidechains will not have the power to secure network.
								</p>
								<p>
								    The transactions on sidechains can be submitted to masterchain on demand based,that is,when there are transactions needed on sidechain,these transactions will be submitted to nodes of masterchain to get confirmed.If there are no transactions,there will be no blocks created on sidechains.This can also decrease the blockchain database size, improve efficiency.
								</p>
								<p>
								    Blocks of masterchain will be generated every 30 second all the time.Block time both for masterchain and sidechains is about 30 seconds
								</p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-3">
                            <h3 class="title sr-only">Feature Three</h3>
							<figure class="figure text-center">
                                <img class="img-responsive" src="/assets/images/features/feature-3.png" alt="" />
                                <figcaption class="figure-caption">Decentralized Applications Framework</figcaption>
                            </figure>
                            <div class="desc text-left">
							    <h3>Decentralized Applications Framework</h3>
							    <p>
								    Coloredchain will provide a decentralized application deployment framework for 
                                    users to deploy their decentralized application on sidechains easily.
								</P>
								<p>
								    <b>Colored Virtual Machine(CVM)</b>&nbsp;Coloredchain system will build in a virtual machine(CVM) to provide a runtime environment for decentralized applications,such as custom smart contracts, name system, voting system, decentralized storage,message,lottery,and so on.
                                       All these applications will run in CVM.
								</P>
								<p>
								    <b>DApps Development Tool Kit</b>&nbsp;Coloredchain will build in a decentralized applications development toolkit for developers to create application as easily as possible.
                                      The tool kit will be modularized, can be called throuth command line easily,and will also provide implementation reference for most functions.
                                </p>
								<p>
								    <b>DApps Install Plugin Kit</b>&nbsp;Users can install these decentralized applications developed by third parties 
                                       through plugin kit to use these wonderful apps and launch their business. 
								</p>
                               
                            </div><!--//desc-->                                    
                        </div><!--//tab-pane-->
                        <div class="tab-pane" id="feature-4">
                            <h3 class="title sr-only">Feature Four</h3>
                             <figure class="figure text-center">
                                <img class="img-responsive" src="/assets/images/features/feature-4.png" alt="" />
                                <figcaption class="figure-caption">Colored Token Platform</figcaption>
                            </figure>							
                            <div class="desc text-left">
                                <h3>DApp case:Colored Token Platform</h3>
							    <p>
								    As a use case,coloredchain will deploy the first decentralized application,Colored 
                                    Token Platform.Users and companies can build gateways to form a global 
                                    trading with any assets,such as Bitcoin,Ethereum,other crypto currencies,precious metals, shares,forex,oil, and so on.
                                    No single point failure,totally transparent,almost rea-time,fully decentralized,solid secure.
                               </p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
						<div class="tab-pane" id="feature-5">
                            <h3 class="title sr-only">Feature Five</h3>
                             <figure class="figure text-center">
                                <img class="img-responsive" src="/assets/images/features/feature-5.png" alt="" />
                                <figcaption class="figure-caption">Trim</figcaption>
                            </figure>							
                            <div class="desc text-left">
                                <h3>Trim</h3>
							    <p>
								    The Masterchain and sidechains architecture allows to trim transactions on 
                                    sidechains without any potential risk. 
                                </p>
								<p>
                                   All transactions on sidechains will be trimed periodically,and only save the hash 
                                   of snapshot on blockchain.
                                </P>    
                                   Trim of masterchain will not happen frequently,and because of masterchain only including one type transaction as mentioned above,this will not float blockchain 
                                   much.And if there is need to trim masterchain,hardfork will be a option.
                                </p>
							    <p>
							       Trim will decrease size of blockchain database dramatically,make it possible to run coloredchain nodes on most devices,like smartphone,raspberry pi,let alone VPS,PC.And this lightweight feature will make coloredchain suitable well for IOT economy space.
                                   Another,lightweight will let run nodes on mobile device more suitably and easily,make coloredchain nodes more decentralized and network more secure.
                                </p>
								
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
						<div class="tab-pane" id="feature-6">
                            <h3 class="title sr-only">Feature six</h3>
                           						
                            <div class="desc text-left">
                                <h3>Planned Features</h3>
							    <p>
								  <ul>
                                    <li><a>Multisignature</a> - m of n signature for special transaction with custom m and n.</li>
                                    <li><a>Mixer </a> - a mixed pool run all time with fixed input and output for privacy.</li> 
                                    <li><a>Archived nodes bounty</a> -  incentive for nodes to back up pruned data.</li>
									<li><a>Voting</a>- Decentralized transparent voting or voting transfer.</li>
									<li><a>Name</a>- Decentralized domain name system and account name.</li>
									<li><a>Data Stream</a> - Date communication.</li>
                                    <li><a>Colored token trading pair</a> - Direct exchange between colored tokens without involving meta token.</li>
                                    <li><a>Online Wallet</a> - Web online wallet.</li>										
								  </ul>
								</p>
                            </div><!--//desc-->
                        </div><!--//tab-pane-->
                    </div><!--//tab-content-->
                </div><!--//col-md-x-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//features-tabbed-->

<?php
    include("./inc_footer.php");
?>