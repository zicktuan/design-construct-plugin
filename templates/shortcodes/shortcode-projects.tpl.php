<?php //echo "<pre>"; ?>

<?php
    $title = [];
    $argsImage = [];

    if ( !empty( $listItems ) ) {
        foreach ( $listItems as $item ) {
            $title[] = $item['awe_item_icon'];
            $argsImage[] = $item['awe_projects_item_bg'];
        }
    }

//    print_r($argsImage);
?>
<div data-section="sections/tabs.html">
    <div class="container space-md">
        <div id="filters-portfolio-3" class="cbp-l-filters-work">
            <div data-group="tabs-title">
                <div class="cbp-l-filters-text-sort">
                    Sort by:
                </div>
                <div data-cloneable-inline="" data-isotope-filters="" style="display: inline-block;">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".identity" class="cbp-filter-item">
                        BEEF
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        FISH
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        SOUP
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".logos" class="cbp-filter-item">
                        DESERT
                        <div class="cbp-filter-counter"></div>
                    </div>
                </div>
            </div>
        </div>


        <div id="portfolio-3" class="cbp-l-grid-gallery" data-cloneable-inline="" data-group="tab-content" data-isotope-items="">
            <div class="cbp-item print identity">
                <a href="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-18.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-18.jpg" alt=""/>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">
                                    World Clock Widget
                                </div>
                                <div class="cbp-l-caption-desc">
                                    by Paul Flavius Nechita
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity graphic">
                <a href="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-17.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-17.jpg" alt=""/>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">
                                    Bolt UI
                                </div>
                                <div class="cbp-l-caption-desc">
                                    by Tiberiu Neamu
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item print logos">
                <a href="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-16.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-16.jpg" alt=""/>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">
                                    WhereTO App
                                </div>
                                <div class="cbp-l-caption-desc">
                                    by Tiberiu Neamu
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design logos">
                <a href="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-15.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-15.jpg" alt=""/>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">
                                    iDevices
                                </div>
                                <div class="cbp-l-caption-desc">
                                    by Tiberiu Neamu
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item identity graphic">
                <a href="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-14.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-14.jpg" alt=""/>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">
                                    Seemple* Music for iPad
                                </div>
                                <div class="cbp-l-caption-desc">
                                    by Tiberiu Neamu
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design graphic">
                <a href="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-13.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="http://azexo.com/madison/restaurant/wp-content/themes/restaurant/azh/restaurant/images/food-13.jpg" alt=""/>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title">
                                    Remind~Me Widget
                                </div>
                                <div class="cbp-l-caption-desc">
                                    by Tiberiu Neamu
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</div>