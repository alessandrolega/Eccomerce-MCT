<div id="<?php echo $product['id']; ?>" class="m-1 text-emerald-900">
    <div class="w-72 h-[435px] bg-white p-5 text-left flex flex-col justify-between rounded-lg border-2 border-green-50">
        <div class="flex justify-center items-center h-48 overflow-hidden">
            <?php echo $product['image']; ?>
        </div>
        <div class="flex flex-col justify-between h-48">
            <div>
                <h4 class="text-2xl font-bold">
                    <?php echo $product['name']; ?>
                </h4>
                <h3 class="text-4xl font-bold text-pink-600">
                    <?php echo $product['price']; ?>
                </h3>
                <p class="text-sm">
                    <?php echo $product['description']; ?>
                </p>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p>0</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="px-10 py-1 text-slate-50 bg-emerald-600 rounded-lg">
                    <p>Aggiungi</p>
                </div>
            </div>
        </div>
    </div>
</div>