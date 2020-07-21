<?php
    /* Template Name: StoreFront */

    // Possible variables.
    // $_GET['category'], $_GET['size'], $_GET['sort_by']
    wp_enqueue_style('store', get_stylesheet_directory_uri().'/css/store.css');
    wp_enqueue_script('store', get_stylesheet_directory_uri().'/js/store.js', null, null, true);
    get_header();
?>
<div class="hero">
    <h1>Apparels</h1>
    <p>White Gold began gaining popularity in the early 1900's as an alternative to platinum.</p>
</div>
<div class="breadcrumb">
    <?php
        if(!isset($_GET['category'])){ echo "<h2>Women</h2>"; } else { echo "<h2>" . $_GET['category'] . "</h2>"; }
    ?>
    <div class="sortBy_filter">
        <p>Sort By</p>
        <select name="sort_by">
            <option value="price-lth">Price: Low to High</option>
            <option value="price-htl">Price: High to Low</option>
        </select>
    </div>
</div>
<div class="app-container">
    <div class="app-sidebar">
        <div class="filters_header">
            <p>Filters</p>
            <a href="<?= site_url('/store') ?>"><span id="reset-filters">Reset</span></a>
        </div>
        <?php get_store_filters(); ?>
    </div>
    <div class="app-content">
        <?php
            if(!isset($_GET['sort_by'])){
                $args = array(
                    'post_type' => 'product',
                    'tax_query' => array(),
                    'orderby' => 'post_title',
                    'order' => 'asc'
                );
            } else {
                $args = array(
                    'post_type' => 'product',
                    'tax_query' => array()
                );
            }
            

            if(isset($_GET['category'])){
                $categoryArgs = array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $_GET['category']
                );
                array_push($args['tax_query'], $categoryArgs);
            }

            if(isset($_GET['size'])){
                $sizeArgs = array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $_GET['size']
                );
                array_push($args['tax_query'], $sizeArgs);
            }

            if(isset($_GET['sort_by'])){
                if($_GET['sort_by'] == 'price-lth'){
                    $args['orderby'] = 'meta_value_num';
                    $args['meta_key'] = '_price';
                    $args['order'] = 'desc';
                } else {
                    $args['orderby'] = 'meta_value_num';
                    $args['meta_key'] = '_price';
                    $args['order'] = 'asc';
                }
            }

            $products = new WP_Query($args);

            foreach($products->posts as $product){
                render_product($product);
            }
        ?>
    </div>
</div>

<?php get_footer(); ?>