<?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
);

$products = wc_get_products($args);

$product_list = array();

foreach ($products as $product) {
    $product_list[] = array(
        'id' => $product->get_id(),
        'name' => $product->get_name(),
        'image' => $product->get_image(),
        'description' => $product->get_description(),
        'price' => $product->get_price(),
        // Aggiungi altre proprietà di prodotto desiderate
    );
}
?>
<section id="product">
    <?php echo do_shortcode('[views section=general name=navbarView]'); ?>
    <h1 class="text-center w-full text-7xl font-bold text-emerald-700">Prodotti</h1>
    <div class="flex py-10 md:py-20 w-11/12 mx-auto">
        <div class="w-64 p-4">
            <h2 class="text-4xl font-bold text-pink-500">Filtra per:</h2>
            <div>
                <h3 class="mt-2 font-semibold text-emerald-900 text-2xl">Marca</h3>
                <ul class="w-48 text-sm font-medium text-emerald-900">
                    <?php
                    $data = ['adriafil' => 'Adriafil', 'vliseline' => 'Vliseline', 'mirta' => 'I nastri di Mirta', 'rinkalik' => 'Rinkalik'];
                    foreach ($data as $key => $value) {
                        echo '
                        <li class="w-full">
                            <div class="flex items-center">
                                <input id="' . $key . '-checkbox" type="checkbox" value="" class="w-4 h-4  bg-pink-100 border-pink-500 rounded">
                                <label for="' . $key . '-checkbox" class="w-full py-1 ml-2 text-sm font-medium text-emerald-900">' . $value . '</label>
                            </div>
                        </li>
                        ';
                    }
                    ; ?>
                </ul>
            </div>
            <div>
                <h3 class="mt-2 font-semibold text-emerald-900 text-2xl">Categoria</h3>
                <ul class="w-48 text-sm font-medium text-emerald-900">
                    <?php
                    $data = ['lana' => 'Lana', 'maglieria' => 'Maglieria', 'uncinetto' => 'Uncinetto', 'tessuti' => 'Tessuti', 'tessutiAmericani' => 'Tessuti Americani', 'fili' => 'Fili e filati'];
                    foreach ($data as $key => $value) {
                        echo '
                        <li class="w-full">
                            <div class="flex items-center">
                                <input id="' . $key . '-checkbox" type="checkbox" value="" class="w-4 h-4  bg-pink-100 border-pink-500 rounded">
                                <label for="' . $key . '-checkbox" class="w-full py-1 ml-2 text-sm font-medium text-emerald-900">' . $value . '</label>
                            </div>
                        </li>
                        ';
                    }
                    ; ?>
                </ul>
            </div>
            <div>
                <h3 class="mt-2 font-semibold text-emerald-900 text-2xl">Colori</h3>
                <ul class="w-48 text-sm font-medium text-emerald-900">
                    <?php
                    $data = ["orange" => "Arancione", "white" => "Bianco", "blue" => "Blu", "red" => "Rosso", "purple" => "Viola", "green" => "Verde", "black" => "Nero", "yellow" => "Giallo", "pink" => "Rosa", "brown" => "Marrone", "gray" => "Grigio"];
                    foreach ($data as $key => $value) {
                        echo '
                        <li class="w-full">
                            <div class="flex items-center">
                                <input id="' . $key . '-checkbox" type="checkbox" value="" class="w-4 h-4  bg-pink-100 border-pink-500 rounded">
                                <label for="' . $key . '-checkbox" class="w-full py-1 ml-2 text-sm font-medium text-emerald-900">' . $value . '</label>
                            </div>
                        </li>
                        ';
                    }
                    ; ?>
                </ul>
            </div>
            <div class="flex gap-2 p-2 mx-auto border border-pink-600 rounded-lg items-center justify-center">Reset<img class="h-6 w-6 hover:animate-spin" src="<?php echo get_image_path('svg/reset.svg'); ?>" alt="" srcset=""></div>
        </div>
        <div class="w-full bg-green-400 flex flex-wrap">
            <?php
            $path = 'card.php';
            // ciclo foreach per stampare i prodotti
            foreach ($product_list as $product) {
                include($path);
            }
            ?>
        </div>

    </div>
</section>