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
                                <div class="as-producttile-tilehero with-paddlenav " style="float:left;">
                                    <div class="images mini-gallery gal5 ">
                                        <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                            <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="">
                                                <div class="as-tilegallery-element as-image-selected">
                                                    <div class=""></div>
                                                    <img src="<?php echo $_POST['img'] ?>" class="ir ir item-image as-producttile-image img-fluid" alt="<?php echo $_POST['title'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                    <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink text-dark">
                                                    <span data-ase-truncate="2"><?php echo $_POST['title'] ?></span>
                                                </p>
                                            </h3>
                                        </div>
                                        <h3>
                                            <?php echo $money_prefix .' '. number_format($_POST['price'], 2) ?>
                                        </h3>
                                        <h3>
                                            <?php echo $_POST['unit'] ?> Un.
                                        </h3>
                                    </div>
                                    <form name="comprar" method="post">
                                        <input type="hidden" name="image" value="https://williamalmeida-mp-commerce-php.herokuapp.com/<?php echo substr($_POST['img'], 1) ?>">
                                        <input type="hidden" name="title" value="<?php echo $_POST['title'] ?>">
                                        <input type="hidden" name="price" value="<?php echo $_POST['price'] ?>">
                                        <input type="hidden" name="unit" value="<?php echo $_POST['unit'] ?>">
                                        <button type="submit" class="mercadopago-button" formmethod="post">Abrir formulario de pago</button>
                                    </form>

                                    <br/>

                                    <div class="cho-container"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="response_message"></div>

                </div>
            </div>
        </div>

        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>

        <?php include_once('./templates/footer.php'); ?>
    </div>

    <div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div class="mp-mercadopago-checkout-wrapper" style="z-index:-2147483647;display:block;background:rgba(0, 0, 0, 0.7);border:0;overflow:hidden;visibility:hidden;margin:0;padding:0;position:fixed;left:0;top:0;width:0;opacity:0;height:0;transition:opacity 220ms ease-in;"> <svg class="mp-spinner" viewBox="25 25 50 50"> <circle class="mp-spinner-path" cx="50" cy="50" r="20" fill="none" stroke-miterlimit="10"></circle> </svg> </div><div id="ac-gn-viewport-emitter"> </div>

    <!-- // SDK MercadoPago.js V2 -->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script src="https://www.mercadopago.com/v2/security.js" view="item"></script>

    <script type="text/javascript">
        $('form').submit(function(event){
            event.preventDefault();

            let form = $("form")[0];
            let data = new FormData(form);
            // data.append('action', 'create_preference');
            // data.forEach(function(v, i){
            //     console.warn(i + ": " + v);
            // });

            $(".mercadopago-button").prop("disabled", true);

            $('.cho-container').html("");

            let url = "controllers/mp/create_preference.php?" + new URLSearchParams(data).toString();

            $.ajax({
                type: "GET",
                enctype: 'multipart/form-data',
                url: url,
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                async: true,
            success: function (data) {
                // $("#response_message").text(data);
                console.log("SUCCESS : ", data);
                $(".mercadopago-button").prop("disabled", false);

                data = JSON.parse(data);

                if(data.url) {
                    window.location = data.url;
                }else if(data.id) {
                    mp_checkout(data.id);
                }
            },
            error: function (e) {
                $("#response_message").text(e.responseText);
                console.log("ERROR : ", e);
                $(".mercadopago-button").prop("disabled", false);
            }
        });
        });

        /* Adicione as credenciais do SDK */
        const mp = new MercadoPago("<?php echo $credentials[$modo_mp]['key_p'] ?>", {
            locale: 'pt-BR'
        });

        function mp_checkout(value) {
            /* Inicialize o checkout */
            mp.checkout({
                preference: {
                    id: value
                },
                autoOpen: true,
                render: {
                    container: '.cho-container', // Indique o nome da class onde será exibido o botão de pagamento
                    label: 'Pagar', // Muda o texto do botão de pagamento (opcional)
                },
            });
        }
    </script>
</body>
</html>