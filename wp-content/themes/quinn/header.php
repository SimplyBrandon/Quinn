<?php 
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style('woocommerce_stylesheet', WP_PLUGIN_URL. '/woocommerce/assets/css/woocommerce.css', false, '1.0', "all");

    // Remove border from header on certain pages.
    if(is_product()){
        $headerClass = "nb";
    }
?>
<html>
<head>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-ui.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/store.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/parallax.min.js'; ?>"></script>
    <script type="text/javascript">
$(document).on('ready', function(){
    console.log('<?php echo get_stylesheet_directory_uri() . '/image/product_external.jpg' ?>');
    $('.img_parallax').parallax({imageSrc: '<?php echo get_stylesheet_directory_uri() . '/image/product_external.jpg' ?>'});
});
</script>
    
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/69ebd03f48.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/global.css'; ?>">
</head>
<body>
    <div class="sale_info">
        <p>Free shipping for orders above £40</p>
    </div>
    <header class="<?= $headerClass ?>">
        <h2 class="siteTitle">Quinn</h2>
        <nav>
            <a href="<?= site_url('/store') ?>">Shop</a>
            <a href="#">Fabric</a>
            <a href="#">Journal</a>
            <a href="#">About</a>
        </nav>
        <div class="quick_nav">
            <a href="#">Login</a>
            <ul>
                <li><i class="fa fa-search"></i></li>
                <li><i class="fa fa-heart-o"></i></li>
                <li><i class="fa fa-shopping-bag"></i></li>
            </ul>
        </div>
    </header>