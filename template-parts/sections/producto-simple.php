<?php
$producto_woo = get_sub_field('producto_woo');

if ($producto_woo) :
    $product = wc_get_product($producto_woo->ID);
    if ($product && $product->is_visible()) :
        ?>

<?php
// Obtén el producto seleccionado en el campo Post Object 'productos'
$producto_woo = get_field('productos'); // o get_field('productos', $post_id);

// Si tienes producto
if ($producto_woo) :
    $product = wc_get_product($producto_woo->ID);
    if ($product && $product->is_visible()) :
        ?>

        <article class="w-full md:w-1/2 lg:w-1/3 p-4">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-xl overflow-hidden flex flex-col h-full">
                <a href="<?php echo esc_url(get_permalink($producto_woo->ID)); ?>" class="block">
                    <?php echo get_the_post_thumbnail($producto_woo->ID, 'medium', ['class' => 'w-full h-full object-cover']); ?>
                </a>

                <div class="p-4 flex flex-col flex-1 justify-between">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                        <a href="<?php echo esc_url(get_permalink($producto_woo->ID)); ?>">
                            <?php echo esc_html($product->get_name()); ?>
                        </a>
                    </h2>

                    <div class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-4">
                        <?php echo $product->get_price_html(); ?>
                    </div>

                    <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
                       class="bg-brandPrimaryMedium text-white text-center py-2 px-4 rounded hover:bg-blue-600 transition"
                       data-product_id="<?php echo esc_attr($product->get_id()); ?>"
                       data-product_sku="<?php echo esc_attr($product->get_sku()); ?>"
                       aria-label="<?php echo esc_attr(sprintf(__('Añadir %s al carrito', 'woocommerce'), $product->get_name())); ?>">
                        Añadir al carrito
                    </a>
                </div>
            </div>
        </article>

<?php
    endif;
else :
    echo '<p>No se ha seleccionado ningún producto.</p>';
endif;
?>


    <?php
    endif;
else :
    echo '<p>No se ha seleccionado ningún producto.</p>';
endif;
?>
