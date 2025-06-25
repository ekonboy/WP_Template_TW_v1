<?php get_header(); ?>

<div class="container-fluid mx-auto my-8">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content', get_post_format()); ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <style>
        .productos-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            max-width: 900px;
            margin: 0 auto;
			justify-content: space-evenly;
        }
        .producto-item {
            min-width: 250px;
            max-width: 300px;
            flex: 1 1 250px;
            padding: 16px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: space-between;text-align: center;
        }
    </style>

    <?php
    $productos_woo = get_field('producto_woo');

    if (!empty($productos_woo) && is_array($productos_woo)) :
    ?>
        <div class="productos-grid">
            <?php
            foreach ($productos_woo as $producto_post) {
                $product = wc_get_product($producto_post->ID);
                if ($product && $product->is_visible()) :
            ?>
                <div class="producto-item">
                    <a href="<?php echo get_permalink($product->get_id()); ?>" class="block">
                        <?php if (has_post_thumbnail($product->get_id())) : ?>
                            <div class="aspect-w-4 aspect-h-3">
                                <?php echo get_the_post_thumbnail($product->get_id(), 'medium', ['class' => 'w-full h-full object-cover']); ?>
                            </div>
                        <?php endif; ?>
                    </a>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2 mt-2">
                        <a href="<?php echo get_permalink($product->get_id()); ?>"><?php echo esc_html($product->get_name()); ?></a>
                    </h2>
                    <div class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                        class="bg-brandSecondaryDarkest text-black text-center py-2 px-4 rounded-full hover:bg-blue-600 transition">
                        Añadir al carrito
                    </a>
                </div>
            <?php
                endif;
            }
            ?>
        </div>
    <?php
    endif;
    ?>

</div>

<?php get_footer(); ?>
