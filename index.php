<?php require_once('./controllers/config.php'); ?>
<?php require_once('./controllers/products.php'); ?>

<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/css/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/css/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/css/merch-tools.css" media="screen, print">

    <!-- <link rel="stylesheet" href="./assets/fonts" media=""> -->

    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body class="as-theme-light-heroimage">

    <div class="stack">

        <div class="as-search-wrapper" role="main">
            <?php include_once('./templates/header.php') ?>

            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>

                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">
                                    <button class="as-filter-button" aria-expanded="true" aria-controls="as-search-filters" type="button" disabled>
                                        <h2 class=" as-filter-button-text">
                                            Smartphones
                                        </h2>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="as-accessories-results  as-search-desktop">
                            <!-- Marcas -->
                            <div class="column as-search-filters" aria-hidden="false" id="as-search-filters" style="position: relative;">
                                <div class="as-search-filter-container" style="transform: translate3d(0px, 0px, 0px);">
                                    <ul class="as-accordion-list">
                                        <li class="as-accordion-item">
                                            <div id="facet0" class="as-search-facet iPad Compatibility  as-search-facet-expandable">
                                                <div class="as-accordion-header as-search-accordion-header as-accordion-isexpanded " data-ase-materializer="as-accordion-id0" data-ase-click="toggle">
                                                    <button id="as-accordion-header-button0" class="as-accordion-button" aria-controls="as-accordion-id0" aria-expanded="true" aria-labelledby="as-accordion-label-id0">
                                                        <span id="as-accordion-label-id0" class="as-accordion-title">
                                                            <span class="as-search-accordion-title">Marca</span>
                                                        </span>
                                                        <span class="icon icon-plus as-accordion-plusicon">
                                                            <span class="a11y">Marca</span>
                                                        </span>
                                                    </button>
                                                </div>
                                                <materializer data-uid="as-accordion-id0" id="as-accordion-id0" data-show-height="computed" data-hide-height="0" class="as-search-facet-materializer ase-materializer ase-materializer-show" data-shown-init="true" style="">
                                                    <div class="as-accordion-content">
                                                        <ul class="as-search-filter-items  as-filter-text-type    ">
                                                            <?php foreach ($marcas as $key => $marca) { ?>
                                                                <li class="as-filter-item       ">
                                                                    <a href="#" data-marca="<?php echo $key; ?>" class="as-filter-option  " aria-disabled="false" tabindex="0" data-tracking="<?php echo $marca['data-tracking']; ?>" role="checkbox" aria-checked="false">
                                                                        <span class="as-filter-name">
                                                                            <span class="as-search-filter-content">
                                                                                <span class="as-search-filter-text">
                                                                                    <?php echo $key; ?>
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            <?php } ?>
                                                                <li class="as-filter-item       ">
                                                                    <a href="#" data-marca="" class="as-filter-option  " aria-disabled="false" tabindex="0" data-tracking="" role="checkbox" aria-checked="false">
                                                                        <span class="as-filter-name">
                                                                            <span class="as-search-filter-content">
                                                                                <span class="as-search-filter-text">
                                                                                    Todos
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                        </ul>
                                                        <button class="as-searchmoreless-toggle as-searchfilter-morebutton  as-search-more d-none" id="iPad Compatibility_more">
                                                            <span class="as-search-morelessbutton-text">More</span>
                                                        </button>
                                                    </div>
                                                </materializer>
                                            </div>
                                        </li>
                                        <li class="as-accordion-item d-none">
                                            <div id="facet1" class="as-search-facet iPhone Compatibility  as-search-facet-expandable">
                                                <div class="as-accordion-header as-search-accordion-header" data-ase-materializer="as-accordion-id1" data-ase-click="toggle">
                                                    <button id="as-accordion-header-button1" class="as-accordion-button" aria-controls="as-accordion-id1" aria-expanded="false" aria-labelledby="as-accordion-label-id1">
                                                        <span id="as-accordion-label-id1" class="as-accordion-title">
                                                            <span class="as-search-accordion-title">Precio</span>
                                                        </span>
                                                        <span class="icon icon-plus as-accordion-plusicon">
                                                            <span class="a11y">Precio</span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="as-accordion-item d-none">
                                            <div id="facet2" class="as-search-facet iPod Compatibility ">
                                                <div class="as-accordion-header as-search-accordion-header" data-ase-materializer="as-accordion-id2" data-ase-click="toggle">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Marcas -->

                            <!-- Products -->
                            <div class="column small-12 as-search-results-tiles as-search-results-width">

                                <?php foreach ($produtos as $key => $produto) { ?>
                                    <div class="as-producttile large-4 small-6 group-1" data-marca="<?php echo $produto['marca'] ?>">
                                        <div class="as-producttile-tilehero with-paddlenav with-paddlenav-onhover">
                                            <div class="as-dummy-container as-dummy-img">
                                                <img src="./assets/<?php echo $produto['image'] ?>" class="ir ir item-image as-producttile-image  " alt="" width="445" height="445">
                                            </div>
                                            <div class="images mini-gallery gal1 ">
                                                <ul class="clearfix as-producttile-nojs">
                                                    <li class="as-searchtile-nojs">
                                                        <img src="./assets/<?php echo $produto['image'] ?>" class="ir relatedlink item-image as-producttile-image" alt="" width="445" height="445" data-scale-params-2="">
                                                    </li>
                                                </ul>

                                                <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                                    <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="">
                                                        <div class="as-tilegallery-element as-image-selected">
                                                            <div class=""></div>
                                                            <img src="./assets/<?php echo $produto['image'] ?>" class="ir ir item-image as-producttile-image" alt="" data-desc="<?php echo $produto['title'] ?>">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="as-producttile-info" style="min-height: 168px;">
                                            <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                                <div class="as-producttile-title">
                                                    <h3 class="as-producttile-name">
                                                        <p class="as-producttile-tilelink">
                                                            <span data-ase-truncate="<?php echo $key ?>"><?php echo $produto['title'] ?></span>
                                                        </p>
                                                    </h3>
                                                </div>
                                                <div class="as-price-currentprice as-producttile-currentprice">
                                                    <?php echo $money_prefix ?> <?php echo number_format($produto['price'], 2) ?>
                                                </div>
                                            </div>
                                            <form action="detail.php" method="get">
                                                <input type="hidden" name="img" value="./assets/<?php echo $produto['image'] ?>">
                                                <input type="hidden" name="title" value="<?php echo $produto['title'] ?>">
                                                <input type="hidden" name="price" value="<?php echo $produto['price'] ?>">
                                                <input type="hidden" name="unit" value="1">
                                                <button type="submit" class="mercadopago-button" formmethod="post">Comprar</button>
                                            </form>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="column large-12 small-12">
                                <div class="as-pagination-align">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>

        <?php include_once('./templates/footer.php'); ?>
    </div>

    <script type="text/javascript">
        $('.as-producttile-tilehero').click(function(){
            $(this).parents('.as-producttile').find('button[type=submit]').click();
        })

        $('a.as-filter-option').click(function(event){
            event.preventDefault();

            let marca = $(this).attr('data-marca');

            if(!marca.length) {
                $('.as-producttile').show(100);
                return;
            }

            $('.as-producttile').hide(100);

            $('.as-producttile').each(function(index, element){
                let e = $(element);
                if(e.attr('data-marca') == marca) {
                    e.show(100);
                }
            });
        })
    </script>
</body>
</html>