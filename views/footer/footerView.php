<footer class="p-4 bg-emerald-900 md:px-6 md:py-8 ">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="" class="flex items-center mb-4 sm:mb-0">
            <img src="<?php echo get_image_path('logo/logo.png'); ?>" class="h-20 mr-3" alt="Merceria creatina tania Logo" />
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm sm:mb-0">
            <?php
            $elements = ["Home", "Prodotti", "Fai da te creativo", "Chi sono",
            ];
            foreach ($elements as $el) {
                echo "<a href='#' class='mr-4 hover:underline md:mr-6 text-xl text-white'><li>$el</li></a>";
            }
            ?>
        </ul>
    </div>
    <!-- <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" /> -->
</footer>
<span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <a href="" class="">Merceria Creativa Tania</a> P.Iva 0000000000
</span>