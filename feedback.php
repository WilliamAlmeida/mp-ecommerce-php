<?php require_once('./controllers/config.php'); ?>
<?php require_once('./controllers/helper.php'); ?>
<?php require_once('./controllers/mp/helper.php'); ?>
<?php 
$payment = json_decode(getcookie('payment'));
if(!isset($payment->status)) header("Location: ".$origin);
?>

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

    <!-- <link rel="stylesheet" href="./assets/css/fonts" media=""> -->
    
    <link rel="stylesheet" href="./assets/css/detail.css">
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
                                    <a href="./" class="as-filter-button text-decoration-none" aria-expanded="true" aria-controls="as-search-filters" role="button">
                                        <h2 class=" as-filter-button-text">
                                            Regresar
                                        </h2>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="as-accessories-results  as-search-desktop">
                            <div class="width:60%">
                                <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                    <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink text-dark">
                                                    <span data-ase-truncate="2"></span>
                                                </p>
                                            </h3>
                                        </div>
                                        <h3>
                                            <?php echo arrayMercadoPago($payment->status, $payment->collection_status) ?>
                                        </h3>
                                        <h5>
                                            Status: <?php echo isset($payment->status) ? $payment->status : 'Nenhum' ?>
                                        </h5>
                                        <h5>
                                            Payment: <?php echo isset($payment->payment_id) ? $payment->payment_id : 'Nenhum' ?>
                                        </h5>
                                        <h5>
                                            Merchant Order: <?php echo isset($payment->merchant_order_id) ? $payment->merchant_order_id : 'Nenhum' ?>
                                        </h5>
                                        <h5>
                                            Payment Type: <?php echo isset($payment->payment_type) ? $payment->payment_type : 'Nenhum' ?>
                                        </h5>
                                        <h5>
                                            External Reference: <?php echo isset($payment->external_reference) ? $payment->external_reference : 'Nenhum' ?>
                                        </h5>

                                        <div style="font-size: 10px;">
                                        <?php var_dump($payment) ?>
                                        </div>

                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink text-dark">
                                                    <span data-ase-truncate="2"></span>
                                                </p>
                                            </h3>
                                        </div>
                                    </div>

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
</body>
</html>