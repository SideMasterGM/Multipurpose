<section class="overview-block-pt iq-pb-100 iq-over-black-60 iq-bg jarallax" style="background-image: url('<?php echo PD_ASSETS_ELEMENTS.'/bg/1.jpg'; ?>'); background-position: left center;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title text-center">
                    <h2 class="title iq-tw-6 iq-font-white">
                        Services
                    </h2>
                    <p class=" iq-font-white">
                        <?php echo $Info->getHome(3); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row iq-mt-40">
            <div class="col-sm-12">
                <div class="owl-carousel" data-autoplay="true" data-dots="true" data-items="3" data-items-laptop="3" data-items-mobile="1" data-items-mobile-sm="1" data-items-tab="2" data-loop="true" data-margin="15" data-nav="false">
                    
                    <?php
                        $count = $Info->getService()['count'];

                        for ($i=1; $i<$count; $i++){
                            ?>
                                <div class="item">
                                    <div class="iq-feature16 iq-font-white">
                                        <div class="icon">
                                            <!-- https://www.saerox-design.com/elisyam/icons-ionicons.html -->
                                            <i class="ion-social-buffer">
                                            </i>
                                        </div>
                                        <h5 class="iq-font-white">
                                            <?php echo $Info->getService($i)['title']; ?>
                                        </h5>
                                        <p>
                                            <?php echo $Info->getService($i, 25)['content']; ?>...
                                            <a class="iq-font-green" href="./services.php">
                                                Read more
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>