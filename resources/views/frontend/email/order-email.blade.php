<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Email Tabmplate</title>

    <meta name="robots" content="noodp"/>
    <link rel="canonical" href="http://www.phpkida.com/demos/html-invoice-email-template-free-download/index.html" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="html invoice email template free download - PHPKIDA" />
    <meta property="og:description" content="html invoice email template free download - html email template, html invoice template free download, responsive html invoice, responsive email template free download, account activation email template, mailgun transactional email, mailgun template variables, html email templates free" />
    <meta property="og:url" content="http://www.phpkida.com/demos/html-invoice-email-template-free-download/index.html" />
    <meta property="og:site_name" content="PHPKIDA" />
    <meta property="article:publisher" content="https://www.facebook.com/Phpkida-501677506661873/" />
    <meta property="article:author" content="https://www.facebook.com/mukeshjakhar888" />
    <meta property="article:tag" content="email templates" />
    <meta property="article:tag" content="html email templates" />
    <meta property="article:tag" content="templates" />
    <meta property="article:section" content="CSS Tutorials" />
    <meta property="article:published_time" content="2017-04-22T23:05:35+00:00" />
    <meta property="og:image" content="http://www.phpkida.com/wp-content/uploads/2017/04/html-invoice-email-template-free-download.png" />
    <meta property="og:image:width" content="709" />
    <meta property="og:image:height" content="277" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="html invoice email template free download - html email template, html invoice template free download, responsive html invoice, responsive email template free download, account activation email template, mailgun transactional email, mailgun template variables, html email templates free" />
    <meta name="twitter:title" content="html invoice email template free download - PHPKIDA" />
    <meta name="twitter:site" content="@phpkakida" />
    <meta name="twitter:image" content="http://www.phpkida.com/wp-content/uploads/2017/04/html-invoice-email-template-free-download.png" />
    <meta name="twitter:creator" content="@mukeshjakhar888" />
    <meta property="DC.date.issued" content="2017-04-22T23:05:35+00:00" />


    <link rel="icon" href="http://www.phpkida.com/wp-content/uploads/2015/11/phpkida-new-logo-150x150.png" sizes="32x32" />
    <link rel="icon" href="http://www.phpkida.com/wp-content/uploads/2015/11/phpkida-new-logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="http://www.phpkida.com/wp-content/uploads/2015/11/phpkida-new-logo.png" />
    <style>

        .email_table {
            color: #333;
            font-family: sans-serif;
            font-size: 15px;
            font-weight: 300;
            text-align: center;
            border-collapse: separate;
            border-spacing: 0;
            width: 99%;
            margin: 6px auto;
            box-shadow:none;
        }
        table {
            color: #333;
            font-family: sans-serif;
            font-size: 15px;
            font-weight: 300;
            text-align: center;
            border-collapse: separate;
            border-spacing: 0;
            width: 99%;
            margin: 50px auto;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,.16);
        }

        th {font-weight: bold; padding:10px; border-bottom:2px solid #000;}

        tbody td {border-bottom: 1px solid #ddd; padding:10px;}



        .email_main_div{width:700px; margin:auto; background-color:#EEEEEE; min-height:500px; border:2px groove #999999;}
        strong{font-weight:bold;}
        .item_table{text-align:left;}
    </style>
</head>

<body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67816487-1', 'auto');
    ga('send', 'pageview');

</script>

<div class="email_main_div">
    <table class="email_table">
        <tr>
            <td width="400px;" style="text-align:left; padding:10px;">
                <img src="{{asset(getSiteIdentity()->logo)}}" width="300" height="100px" />
            </td>
            <td style="text-align:left; padding:10px;">
                Company Address Here:<br />
                AR Shop,<br />
                {{getSiteIdentity()->address}}<br />
                Tel: <br />
                Email: <br />
            </td>
        </tr>
    </table>

    <table class="email_table" style="margin-top:14px;">
        <tr>
            <td width="350px;" style="text-align:left; padding:10px;">
                <strong>Shipping Address :</strong><br />
                Your shipping address<br />
                {{$order->shippingDetails->first_name}} {{$order->shippingDetails->last_name}}<br />
                Tel: {{$order->shippingDetails->phone}}<br />
                Email: {{$order->shippingDetails->email}}<br />
                Address: {{$order->shippingDetails->address}}<br />
                Zip: {{$order->shippingDetails->zip_code}}<br />
                City: {{$order->shippingDetails->city}}<br />
                House: {{$order->shippingDetails->house}}<br />
            </td>
            <td style="text-align:left; padding:10px;">
                <strong>Billing Address :</strong><br />
                Name : {{$customer->name}}<br />
                Email : {{$customer->email}}<br />
                Payment Method : {{$order->payment->payment_method}}<br />
            </td>
        </tr>
    </table>

    <table class="item_table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Item Name</th>
            <th>Size</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 0;
        $total = 0;
        ?>
        @foreach(Cart::content() as $item)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->options->size_name}}</td>
                <td>{{$item->options->color_name}}</td>
                <td>{{$item->qty}}</td>
                <td>{{getSiteIdentity()->currency}} {{$item->price}}</td>
                <td>{{getSiteIdentity()->currency}} {{ $subTotal = $item->qty*$item->price}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="7" style="text-align:right; padding:10px;">
                <strong>Sub Total : </strong> {{getSiteIdentity()->currency}} {{Cart::subtotal()}}
            </td>
        </tr>
        </tbody>
    </table>
    <div style="width:98%; padding:1%; margin-top:10px; font-size:15px; text-align:center;">
        Company Pvt. Ltd. - Company Address - Company NO:08676628 | Vat No: 180988973
    </div>
</div>
</body>
</html>
