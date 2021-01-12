<?php
session_start();
$pageTitle = 'News - MOSHION.';
include 'header.php';
?>

<!-- top bar -->
<div class="top-bar">
    <h1>NEWS</h1>
</div>
<!-- end top bar -->

<!-- main container -->
<div class="main-container portfolio-inner clearfix">
    <!-- portfolio div -->
    <div class="portfolio-div">
        <div class="portfolio">
            <!-- portfolio_filter -->
            <div class="categories-grid wow fadeInLeft">
                <nav class="categories text-center">
                    <ul class="portfolio_filter">
                        <li><a href="" class="active" data-filter="*">All</a></li>
                        <li><a href="" data-filter=".streetfashion">Street Fashion</a></li>
                        <li><a href="" data-filter=".celebrityfashion">Celebrity Fashion</a></li>
                        <li><a href="" data-filter=".models">Models</a></li>
                        <li><a href="" data-filter=".designer">Designer</a></li>
                        <li><a href="" data-filter=".trends">Trends</a></li>
                    </ul>
                </nav>
            </div>
            <!-- portfolio_filter -->

            <!-- portfolio_container -->
            <div class="no-padding portfolio_container clearfix">
                <!-- single work -->
                <div class="col-md-4 col-sm-6 celebrityfashion">
                    <a href="news1.php" class="portfolio_item">
                        <img src="img/dualipp.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Dua Lipa Is the Ultimate Snow Bunny In an Extreme Print Coat</span>
                                    <em>Celebrity Fashion</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-4 col-sm-6 streetfashion">
                    <a href="news2.php" class="portfolio_item">
                        <img src="img/news2.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>In Need of Some Street Style? Rei Shito’s New Book Is Just the Fix</span>
                                    <em>Street Fashion</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-4 col-sm-12 models">
                    <a href="news3.php" class="portfolio_item">
                        <img src="img/news3.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>How Naomi Campbell and Arise are Championing Design Talent From Across the Diaspora</span>
                                    <em>Models</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-4 col-sm-6 designer">
                    <a href="news4.php" class="portfolio_item">
                        <img src="img/news4.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>This Jewelry Designer Uses Statement Earrings to Tell Stories</span>
                                    <em>Designer</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-4 col-sm-6 trends">
                    <a href="news5.php" class="portfolio_item">
                        <img src="img/news5.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>These Slips Are the White T-Shirts of Dresses</span>
                                    <em>Trends</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work -->
                <div class="col-md-4 col-sm-12 celebrityfashion">
                    <a href="news6.php" class="portfolio_item">
                        <img src="img/news6.png" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Dress Up Your Sweats With Hailey Bieber’s Styling Hack</span>
                                    <em>Celebrity Fashion</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single work -->

                <!-- single work 
                <div class="col-md-4 col-sm-6 graphics ads">
                    <a href="single-project.html" class="portfolio_item">
                        <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Mobile devices</span>
                                    <em>Graphics / Ads</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                 end single work -->

                <!-- single work 
                <div class="col-md-4 col-sm-6 graphics ads">
                    <a href="single-project.html" class="portfolio_item">
                        <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Mobile devices</span>
                                    <em>Graphics / Ads</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                 end single work -->

                <!-- single work 
                <div class="col-md-4 col-sm-6 graphics ads">
                    <a href="single-project.html" class="portfolio_item">
                        <img src="http://placehold.it/1000x1000" alt="image" class="img-responsive" />
                        <div class="portfolio_item_hover">
                            <div class="portfolio-border clearfix">
                                <div class="item_info">
                                    <span>Mobile devices</span>
                                    <em>Graphics / Ads</em>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                 end single work -->

            </div>
            <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
    </div>
    <!-- end portfolio div -->
</div>
<!-- end main container -->
<?php include 'footer.php' ?>