<!-- Read Food Start -->
<section class="pt-20 pb-10 lg:pb-16">
    <div class="container px-4 lg:px-8 xl:px-16">
        <!-- Menampilkan satu data makanan berdasarkan id -->
        <div class="flex flex-wrap px-4">
            <div class="w-full mb-5 md:mb-0 md:pr-3 md:self-center md:text-right md:w-1/2 lg:w-2/3">
                <h2 class="font-bold text-2xl text-primary lg:text-3xl"><?= $data['food']['name']; ?></h2>
                <p class="text-base text-dark mb-3"><?= formatRupiah($data['food']['price']); ?></p>
                <p class="font-medium text-secondary"><?= $data['food']['description']; ?></p>
            </div>

            <div class="w-full md:pl-3 md:w-1/2 lg:w-1/3">
                <img src="<?= BASEURL ?>/assets/img/food/<?= $data['food']['image']; ?>" alt="<?= $data['food']['name']; ?>" class="rounded-xl">
            </div>
        </div>
    </div>
</section>
<!-- Read Food End -->

<!-- Other Food Start -->
<section class="pt-20 pb-10 lg:pb-16 bg-tertiary">
    <div class="container px-4 lg:px-8 xl:px-16">
        <div class="w-full px-4">
            <div class="max-w-2xl mx-auto text-center mb-7 md:mb-9">
                <h2 class="font-bold text-2xl text-dark lg:text-3xl">Makanan Lainnya</h2>
            </div>
        </div>

        <div class="flex flex-wrap justify-center mb-3">
            <!-- Menampilkan semua data makanan kecuali makanan yang user pilih -->
            <?php foreach ($data['otherFood'] as $otherFood) : ?>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/4">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-5">
                        <a href="<?= BASEURL ?>/food/read/<?= $otherFood['id']; ?>">
                            <img src="<?= BASEURL ?>/assets/img/food/<?= $otherFood['image']; ?>" alt="<?= $otherFood['name']; ?>" class="w-full">
                        </a>
                        <div class="px-4 py-5">
                            <h3><a href="<?= BASEURL ?>/food/read/<?= $otherFood['id']; ?>" class="block font-semibold text-xl text-dark hover:text-primary truncate"><?= $otherFood['name']; ?></a></h3>
                            <p class="block text-base text-dark mb-3"><?= formatRupiah($otherFood['price']); ?></p>
                            <a href="<?= BASEURL ?>/food/update/<?= $otherFood['id']; ?>" class="font-medium text-sm text-white bg-primary py-2 px-3 rounded-md hover:opacity-90">Update</a>
                            <a href="<?= BASEURL ?>/food/delete/<?= $otherFood['id']; ?>" class="font-medium text-sm text-white bg-red-600 py-2 px-3 rounded-md hover:opacity-90" onclick="return confirm('Yakin ingin menghapus data makanan?')">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Other Food End -->