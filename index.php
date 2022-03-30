<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eCommerce Website designed by Sandip Nath" property="og:description" />
    <meta name="author" content="Sandip Nath" />
    <meta name="robots" content="index, follow">
    <meta name="generator" content="Website powered by Sandipnath.com" />
    <title>Dormeo Memory Plus Memory Foam Mattress</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <meta property="og:title" content="eCommerce Website designed by Sandip Nath" />
    <meta property="og:description" content="eCommerce Website designed by Sandip Nath" />
    <meta property="og:image" content="https://sandipnath.com/ecommerce-site/images/ecommerce-site1.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="fav/site.webmanifest">
    <link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <main id="main">
        <header id="header">
            <div class="nav-container">
                <div class="logo-container">
                    <a href="#"><img id="header-img" src="images/logo.png" alt="Dormeo" title="Dormeo" /></a>
                </div>
                <div class="navbar">
                    <div class="nav-mobile">
                        <a href="#" title="Dormeo" id="nav-toggle"><span></span></a>
                    </div>
                    <nav id="nav-bar">
                        <ul class="nav-list">
                            <li><a href="#features" title="Features" class="nav-link">Features</a></li>
                            <li><a href="#pricing" title="Pricing" class="nav-link">Pricing</a></li>
                            <li><a href="#video" title="Video" class="nav-link">Video</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <section>
            <h1 id="title">Dormeo Memory Plus Memory Foam Mattress</h1>
            <video width="100%" height="auto" controls="" muted="" preload="metadata" id="video">
                <source src="media/dormeo-memory-plus-memory-foam-mattress.mp4#t=0.5" type="video/mp4">
            </video>
        </section>

        <?php

    if(!empty($_POST["submit"])) {
      $recipient="contact@sandipnath.com";
      $subject="Message from Dormeo";
      $senderEmail=$_POST["email"];
      $message=nl2br($_POST["message"]);

      $headers .= "\r\nMIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      
      $mailBody = '<html><body>';
      $mailBody .= "<p><strong>Email: </strong>" . strip_tags($_POST['email']) . "</p>";
      $mailBody .= "<p><strong>Message:</strong><br />" . nl2br($_POST['message']) . "</p>";
      $mailBody .= '</body></html>';
      
      mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>, $headers");
      
      echo "<script type='text/javascript'>window.location.href = 'https://sandipnath.com/ecommerce-site/index.php#form'</script>";
  
      $thankYou="<p style='font-weight: bold;color: red;text-align: left;'>Thank you! Your message has been sent.</p>";
  }
  
?>
        <section>
            <form id="form" action="index.php" method="POST" enctype="multipart/form-data"
                onsubmit="return validateContactForm()">
                <p>Please contact us for more information</p>
                <?=$thankYou ?>
                <div class="field">
                    <span id="userEmail-info" class="info"></span>
                    <div class="input-field">

                        <input type="email" id="email" name="email" placeholder="Enter Your Email" maxlength="100">
                    </div>
                </div>

                <div class="field">
                    <span id="userMessage-info" class="info"></span>
                    <div class="input-field">

                        <textarea id="message" cols="60" rows="10" placeholder="Enter Your Message" name="message"
                            class="input-field"></textarea>
                    </div>
                </div>

                <div>
                    <input type="submit" value="Send Message" id="submit" name="submit">
                </div>
            </form>
        </section>


        <style>
            .info {
                font-weight: bold;
                color: red;
                padding-left: 0px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            function validateContactForm() {
                var valid = true;

                $(".info").html("");
                $(".input-field").css('border', '#e0dfdf 0px solid');
                var userEmail = $("#email").val();
                var message = $("#message").val();

                if (userEmail == "") {
                    $("#userEmail-info").html("The following field is required");
                    $("#email").css('border', '#e66262 2px solid');
                    valid = false;
                }
                if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#userEmail-info").html("Invalid Email Address");
                    $("#email").css('border', '#e66262 2px solid');
                    valid = false;
                }
                if (message == "") {
                    $("#userMessage-info").html("The following field is required");
                    $("#message").css('border', '#e66262 2px solid');
                    valid = false;
                }
                return valid;
            }
        </script>


        <section>
            <div id="features">
                <h2>Features</h2>
                <div id="product-features">
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/memory-foam-ecocell-foam.jpg"
                                    alt="Memory & Ecocell foam layers" title="Memory & Ecocell foam layers"
                                    style="width:100%" /></li>
                            <li class="product-details1">Memory & Ecocell foam layers:</li>
                            <li class="product-derails2">This mattress combines 2 layers of different foam types to
                                create a brilliantly balanced, supportive and ventilated sleep experience.</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/vacuum-packed-rolled-memory-mattress_1.jpg"
                                    alt="Rolled mattress in a box" title="Rolled mattress in a box"
                                    style="width:100%" /></li>
                            <li class="product-details1">Rolled mattress in a box:</li>
                            <li class="product-derails2">This mattress arrives to your door rolled and sealed for
                                freshness and ease of transport. Simply take it out of the box, unroll and watch it grow
                                until it's ready to sleep on!</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/ecocell-foam.jpg"
                                    alt="Breathable Ecocell foam" title="Breathable Ecocell foam" style="width:100%" />
                            </li>
                            <li class="product-details1">Breathable Ecocell foam:</li>
                            <li class="product-derails2">Unique, next generation foam designed to be permanently elastic
                                with a 3-dimensional cellular structure, providing efficient air circulation and support
                                where you need it.</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/50_-more-memory-foam_B.jpg"
                                    alt="50% more memory foam" title="50% more memory foam" style="width:100%" /></li>
                            <li class="product-details1">50% more memory foam:</li>
                            <li class="product-derails2">An extra thick layer of memory foam for additional support and
                                comfort. It remembers its shape, returning to its original form night after night.</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/Anti-Allergenic_b.jpg"
                                    alt="Anti-allergenic" title="Anti-allergenic" style="width:100%" /></li>
                            <li class="product-details1">Anti-allergenic:</li>
                            <li class="product-derails2">Protects against dust mites and bacteria to keep your bed fresh
                                and clean, creating a healthy sleep environment.</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/Santitized-Protection.jpg"
                                    alt="Sanitized® protection" title="Sanitized® protection" style="width:100%" /></li>
                            <li class="product-details1">Sanitized® protection:</li>
                            <li class="product-derails2">Special anti-bacterial, anti-dust mite and anti-fungal
                                protection creates a healthy and hygienic environment.</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/Enriched-with-carbon-fibres.jpg"
                                    alt="Enriched with carbon fibres" title="Enriched with carbon fibres"
                                    style="width:100%" /></li>
                            <li class="product-details1">Enriched with carbon fibres:</li>
                            <li class="product-derails2">Create an anti-static barrier to dust and particles in the air
                                ensuring a hygienic sleep surface.</li>
                        </ul>
                    </div>
                    <div class="product-features1">
                        <ul class="product-details">
                            <li><img src="https://www.dormeo.co.uk/media/wysiwyg/Features-jpegs/Anti-dust-mite-treatment.jpg"
                                    alt="Anti-dust mite treatment" title="Anti-dust mite treatment"
                                    style="width:100%" /></li>
                            <li class="product-details1">Anti-dust mite treatment:</li>
                            <li class="product-derails2">Effective anti-allergic protection, limits exposure to dust
                                mites and allergens, maintaining a hygienic sleep environment.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="wrapper">
            <section class="columns" id="pricing">
                <div class="column">
                    <div class="et-pb-pricing-title">Fresh Deluxe</div>
                    <div class="et-pb-pricing-content-top">
                        <span class="et-pb-pound-sign">&pound;</span>
                        <span class="et-pb-sum">199</span>
                    </div>
                    <div class="et-pb-pricing-content">
                        <ul class="et-pb-pricing">
                            <li><span>Total Depth - 23cm</span></li>
                            <li><span>Comfort - Medium/Firm</span></li>
                            <li><span>Memory Foam Depth - 2.5cm (Latex Depth)</span></li>
                            <li><span>Cover - Airmesh Sides</span></li>
                        </ul>
                    </div>
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AekTY7PJnIICm8x5BT1HhJNkfVw_HG9FKc2WdmmPykSDUj-1EiA8PReExbMukyr93x0f4qsrLjmzyhUx&currency=GBP"></script>
                    <div class="buy-btn">
                        <div id="smart-button-container">
                            <div style="text-align: center;">
                                <div id="paypal-button-container1"></div>
                            </div>
                        </div>
                        <script>
                            paypal.Buttons({

                                style: {
                                    shape: 'pill',
                                    color: 'blue',
                                    layout: 'vertical',
                                    label: 'buynow',
                                    height: 40,

                                },
                                createOrder: function (data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{ "description": "Dormeo Memory Plus Memory Foam Mattress - Fresh Deluxe", "amount": { "currency_code": "GBP", "value": 199 } }]
                                    });
                                },
                                onApprove: function (data, actions) {
                                    return actions.order.capture().then(function (orderData) {
                                        // Successful capture! For demo purposes:
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                        var transaction = orderData.purchase_units[0].payments.captures[0];
                                        let firstName = orderData.payer.name.given_name;
                                        let lastName = orderData.payer.name.surname;
                                        let dateOfPurchase = orderData.create_time;
                                        let dateOfPurchaseStr = String(dateOfPurchase);
                                        let orderId = orderData.id;
                                        let time = dateOfPurchaseStr[11] + dateOfPurchaseStr[12] + dateOfPurchaseStr[13] + dateOfPurchaseStr[14] + dateOfPurchaseStr[15];
                                        let day = dateOfPurchaseStr[8] + dateOfPurchaseStr[9];;
                                        let month = dateOfPurchaseStr[5] + dateOfPurchaseStr[6];
                                        let monthStr = String(month);
                                        let year = dateOfPurchaseStr[0] + dateOfPurchaseStr[1] + dateOfPurchaseStr[2] + dateOfPurchaseStr[3];

                                        let ordermonth;
                                        if (monthStr == 01) {
                                            ordermonth = "Jan";
                                        }
                                        else if (monthStr == 02) {
                                            ordermonth = "Feb";
                                        }
                                        else if (monthStr == 03) {
                                            ordermonth = "Mar";
                                        }
                                        else if (monthStr == 04) {
                                            ordermonth = "Apr";
                                        }
                                        else if (monthStr == 05) {
                                            ordermonth = "May";
                                        }
                                        else if (monthStr == 06) {
                                            ordermonth = "Jun";
                                        }
                                        else if (monthStr == 07) {
                                            ordermonth = "Jul";
                                        }
                                        else if (monthStr == 08) {
                                            ordermonth = "Aug";
                                        }
                                        else if (monthStr == 09) {
                                            ordermonth = "Sep";
                                        }
                                        else if (monthStr == 10) {
                                            ordermonth = "Oct";
                                        }
                                        else if (monthStr == 11) {
                                            ordermonth = "Nov";
                                        }
                                        else if (monthStr == 12) {
                                            ordermonth = "Dec";
                                        }
                                        let productName = orderData.purchase_units[0].description;
                                        let productPrice = orderData.purchase_units[0].amount.value;
                                        let shippingname = orderData.purchase_units[0].shipping.name.full_name;
                                        let addressline1 = orderData.purchase_units[0].shipping.address.address_line_1;
                                        let addressline2 = orderData.purchase_units[0].shipping.address.address_line_2;
                                        let town = orderData.purchase_units[0].shipping.address.admin_area_2;
                                        let county = orderData.purchase_units[0].shipping.address.admin_area_1;
                                        let postcode = orderData.purchase_units[0].shipping.address.postal_code;
                                        const element = document.getElementById('paypal-button-container10');
                                        element.innerHTML = '';
                                        element.innerHTML = '<h3>ORDER CONFIRMATION</h3>' + '<p>' + firstName + " " + lastName + ", thank you for your order!</p><p>We've received your order and will contact you as soon as your package is shipped.<br />You can find your purchase information below.</p><p><strong>Order Summary</strong></p><p><strong>#" + orderId + "</strong>&nbsp;&nbsp;&nbsp;&nbsp;( Ordered " + time + ", " + day + " " + ordermonth + ", " + year + " )</p><p>" + productName + "</p><p><strong>Order Total:</strong> &pound;" + productPrice + "</p><p><strong>Shipping Address</strong><br />" + shippingname + "<br />" + addressline1 + "<br />" + addressline2 + "<br />" + town + ", " + county + "<br />" + postcode + "</p>";
                                        document.getElementById("orderconfirm").setAttribute("value", "order_confirmed");
                                    });
                                }
                            }).render('#paypal-button-container1');
                        </script>
                    </div>
                </div>
                <div class="column">
                    <div class="et-pb-pricing-title" style="background:#006AC1 !important;">Memory Deluxe</div>
                    <div class="et-pb-pricing-content-top">
                        <span class="et-pb-pound-sign">&pound;</span>
                        <span class="et-pb-sum">399</span>
                    </div>
                    <div class="et-pb-pricing-content">
                        <ul class="et-pb-pricing">
                            <li><span>Total Depth - 17cm</span></li>
                            <li><span>Comfort - Medium</span></li>
                            <li><span>Memory Foam Depth - 3cm</span></li>
                            <li><span>Cover - Silver Fibres</span></li>
                        </ul>
                    </div>
                    <div class="buy-btn">
                        <div id="smart-button-container">
                            <div style="text-align: center;">
                                <div id="paypal-button-container2"></div>
                            </div>
                        </div>
                        <script>
                            paypal.Buttons({
                                style: {
                                    shape: 'pill',
                                    color: 'blue',
                                    layout: 'vertical',
                                    label: 'buynow',
                                    height: 40,

                                },
                                createOrder: function (data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{ "description": "Dormeo Memory Plus Memory Foam Mattress - Memory Deluxe", "amount": { "currency_code": "GBP", "value": 399 } }]
                                    });
                                },
                                onApprove: function (data, actions) {
                                    return actions.order.capture().then(function (orderData) {
                                        // Successful capture! For demo purposes:
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                        var transaction = orderData.purchase_units[0].payments.captures[0];
                                        let firstName = orderData.payer.name.given_name;
                                        let lastName = orderData.payer.name.surname;
                                        let dateOfPurchase = orderData.create_time;
                                        let dateOfPurchaseStr = String(dateOfPurchase);
                                        let orderId = orderData.id;
                                        let time = dateOfPurchaseStr[11] + dateOfPurchaseStr[12] + dateOfPurchaseStr[13] + dateOfPurchaseStr[14] + dateOfPurchaseStr[15];
                                        let day = dateOfPurchaseStr[8] + dateOfPurchaseStr[9];;
                                        let month = dateOfPurchaseStr[5] + dateOfPurchaseStr[6];
                                        let monthStr = String(month);
                                        let year = dateOfPurchaseStr[0] + dateOfPurchaseStr[1] + dateOfPurchaseStr[2] + dateOfPurchaseStr[3];

                                        let ordermonth;
                                        if (monthStr == 01) {
                                            ordermonth = "Jan";
                                        }
                                        else if (monthStr == 02) {
                                            ordermonth = "Feb";
                                        }
                                        else if (monthStr == 03) {
                                            ordermonth = "Mar";
                                        }
                                        else if (monthStr == 04) {
                                            ordermonth = "Apr";
                                        }
                                        else if (monthStr == 05) {
                                            ordermonth = "May";
                                        }
                                        else if (monthStr == 06) {
                                            ordermonth = "Jun";
                                        }
                                        else if (monthStr == 07) {
                                            ordermonth = "Jul";
                                        }
                                        else if (monthStr == 08) {
                                            ordermonth = "Aug";
                                        }
                                        else if (monthStr == 09) {
                                            ordermonth = "Sep";
                                        }
                                        else if (monthStr == 10) {
                                            ordermonth = "Oct";
                                        }
                                        else if (monthStr == 11) {
                                            ordermonth = "Nov";
                                        }
                                        else if (monthStr == 12) {
                                            ordermonth = "Dec";
                                        }
                                        let productName = orderData.purchase_units[0].description;
                                        let productPrice = orderData.purchase_units[0].amount.value;
                                        let shippingname = orderData.purchase_units[0].shipping.name.full_name;
                                        let addressline1 = orderData.purchase_units[0].shipping.address.address_line_1;
                                        let addressline2 = orderData.purchase_units[0].shipping.address.address_line_2;
                                        let town = orderData.purchase_units[0].shipping.address.admin_area_2;
                                        let county = orderData.purchase_units[0].shipping.address.admin_area_1;
                                        let postcode = orderData.purchase_units[0].shipping.address.postal_code;
                                        const element = document.getElementById('paypal-button-container10');
                                        element.innerHTML = '';
                                        element.innerHTML = '<h3>ORDER CONFIRMATION</h3>' + '<p>' + firstName + " " + lastName + ", thank you for your order!</p><p>We've received your order and will contact you as soon as your package is shipped.<br />You can find your purchase information below.</p><p><strong>Order Summary</strong></p><p><strong>#" + orderId + "</strong>&nbsp;&nbsp;&nbsp;&nbsp;( Ordered " + time + ", " + day + " " + ordermonth + ", " + year + " )</p><p>" + productName + "</p><p><strong>Order Total:</strong> &pound;" + productPrice + "</p><p><strong>Shipping Address</strong><br />" + shippingname + "<br />" + addressline1 + "<br />" + addressline2 + "<br />" + town + ", " + county + "<br />" + postcode + "</p>";
                                        document.getElementById("orderconfirm").setAttribute("value", "order_confirmed");
                                    });
                                }
                            }).render('#paypal-button-container2');
                        </script>
                    </div>
                </div>
                <div class="column">
                    <div class="et-pb-pricing-title">Aloe Vera Deluxe</div>
                    <div class="et-pb-pricing-content-top">
                        <span class="et-pb-pound-sign">&pound;</span>
                        <span class="et-pb-sum">499</span>
                    </div>
                    <div class="et-pb-pricing-content">
                        <ul class="et-pb-pricing">
                            <li><span>Total Depth - 17cm</span></li>
                            <li><span>Comfort - Medium</span></li>
                            <li><span>Memory Foam Depth - 3cm</span></li>
                            <li><span>Cover - Aloe Vera Enriched</span></li>
                        </ul>
                    </div>

                    <div class="buy-btn">
                        <div id="smart-button-container">
                            <div style="text-align: center;">
                                <div id="paypal-button-container3"></div>
                            </div>
                        </div>
                        <script>
                            paypal.Buttons({
                                style: {
                                    shape: 'pill',
                                    color: 'blue',
                                    layout: 'vertical',
                                    label: 'buynow',
                                    height: 40,

                                },
                                createOrder: function (data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{ "description": "Dormeo Memory Plus Memory Foam Mattress - Aloe Vera Deluxe", "amount": { "currency_code": "GBP", "value": 499 } }]
                                    });
                                },
                                onApprove: function (data, actions) {
                                    return actions.order.capture().then(function (orderData) {
                                        // Successful capture! For demo purposes:
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                        var transaction = orderData.purchase_units[0].payments.captures[0];
                                        let firstName = orderData.payer.name.given_name;
                                        let lastName = orderData.payer.name.surname;
                                        let dateOfPurchase = orderData.create_time;
                                        let dateOfPurchaseStr = String(dateOfPurchase);
                                        let orderId = orderData.id;
                                        let time = dateOfPurchaseStr[11] + dateOfPurchaseStr[12] + dateOfPurchaseStr[13] + dateOfPurchaseStr[14] + dateOfPurchaseStr[15];
                                        let day = dateOfPurchaseStr[8] + dateOfPurchaseStr[9];;
                                        let month = dateOfPurchaseStr[5] + dateOfPurchaseStr[6];
                                        let monthStr = String(month);
                                        let year = dateOfPurchaseStr[0] + dateOfPurchaseStr[1] + dateOfPurchaseStr[2] + dateOfPurchaseStr[3];
                                        let ordermonth;
                                        if (monthStr == 01) {
                                            ordermonth = "Jan";
                                        }
                                        else if (monthStr == 02) {
                                            ordermonth = "Feb";
                                        }
                                        else if (monthStr == 03) {
                                            ordermonth = "Mar";
                                        }
                                        else if (monthStr == 04) {
                                            ordermonth = "Apr";
                                        }
                                        else if (monthStr == 05) {
                                            ordermonth = "May";
                                        }
                                        else if (monthStr == 06) {
                                            ordermonth = "Jun";
                                        }
                                        else if (monthStr == 07) {
                                            ordermonth = "Jul";
                                        }
                                        else if (monthStr == 08) {
                                            ordermonth = "Aug";
                                        }
                                        else if (monthStr == 09) {
                                            ordermonth = "Sep";
                                        }
                                        else if (monthStr == 10) {
                                            ordermonth = "Oct";
                                        }
                                        else if (monthStr == 11) {
                                            ordermonth = "Nov";
                                        }
                                        else if (monthStr == 12) {
                                            ordermonth = "Dec";
                                        }

                                        let productName = orderData.purchase_units[0].description;
                                        let productPrice = orderData.purchase_units[0].amount.value;
                                        let shippingname = orderData.purchase_units[0].shipping.name.full_name;
                                        let addressline1 = orderData.purchase_units[0].shipping.address.address_line_1;
                                        let addressline2 = orderData.purchase_units[0].shipping.address.address_line_2;
                                        let town = orderData.purchase_units[0].shipping.address.admin_area_2;
                                        let county = orderData.purchase_units[0].shipping.address.admin_area_1;
                                        let postcode = orderData.purchase_units[0].shipping.address.postal_code;
                                        const element = document.getElementById('paypal-button-container10');
                                        element.innerHTML = '';
                                        element.innerHTML = '<h3>ORDER CONFIRMATION</h3>' + '<p>' + firstName + " " + lastName + ", thank you for your order!</p><p>We've received your order and will contact you as soon as your package is shipped.<br />You can find your purchase information below.</p><p><strong>Order Summary</strong></p><p><strong>#" + orderId + "</strong>&nbsp;&nbsp;&nbsp;&nbsp;( Ordered " + time + ", " + day + " " + ordermonth + ", " + year + " )</p><p>" + productName + "</p><p><strong>Order Total:</strong> &pound;" + productPrice + "</p><p><strong>Shipping Address</strong><br />" + shippingname + "<br />" + addressline1 + "<br />" + addressline2 + "<br />" + town + ", " + county + "<br />" + postcode + "</p>";
                                        document.getElementById("orderconfirm").setAttribute("value", "order_confirmed");
                                    });
                                }
                            }).render('#paypal-button-container3');
                        </script>
                    </div>
                </div>
            </section>
        </div>
        <section id="orderconfirm" value="">
            <div id="orderconfirmation">
                <div>
                    <div id="paypal-button-container10"></div>
                </div>
            </div>
        </section>
        <footer>
            <span>Copyright &copy; 2022 Dormeo</span>
        </footer>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>