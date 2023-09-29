<!-- Food Start -->
<section class="pt-20 pb-10 lg:pb-16">
    <div class="container lg:px-8 xl:px-16">
        <div class="w-full px-4">
            <div class="max-w-2xl mx-auto text-center px-4 mb-9 md:mb-16">
                <h3 class="font-semibold text-lg text-primary">Food</h3>
                <h2 class="font-bold text-2xl text-dark mb-2 lg:text-3xl">Makanan Yang Tersedia</h2>
                <p class="font-medium text-secondary">Terdapat banyak makanan di website ini, Anda bisa menambahkan makanan favorit agar menu tersebut ada di website ini, Anda juga bisa mengubah, atau menghapusnya.</p>
            </div>
        </div>

        <div id="flash" class="w-full px-8 mb-5 lg:px-4">
            <!-- Menampilkan flash -->
            <?php Flasher::flash(); ?>
        </div>

        <div class="flex flex-wrap px-4 mb-3 justify-center lg:px-0">
            <!-- Menampilkan semua data makanan -->
            <?php foreach ($data['food'] as $food) : ?>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/4">
                    <div class="bg-tertiary rounded-lg shadow-lg overflow-hidden mb-5">
                        <a href="<?= BASEURL ?>/food/read/<?= $food['id']; ?>">
                            <img src="<?= BASEURL ?>/assets/img/food/<?= $food['image']; ?>" alt="<?= $food['name']; ?>" class="w-full">
                        </a>
                        <div class="px-4 py-5">
                            <h3><a href="<?= BASEURL ?>/food/read/<?= $food['id']; ?>" class="block font-semibold text-xl text-dark hover:text-primary truncate"><?= $food['name']; ?></a></h3>
                            <p class="block text-base text-dark mb-3"><?= formatRupiah($food['price']); ?></p>
                            <a href="<?= BASEURL ?>/food/update/<?= $food['id']; ?>" class="font-medium text-sm text-white bg-primary py-2 px-3 rounded-md hover:opacity-90">Update</a>
                            <a href="<?= BASEURL ?>/food/delete/<?= $food['id']; ?>" class="font-medium text-sm text-white bg-red-600 py-2 px-3 rounded-md hover:opacity-90" onclick="return confirm('Yakin ingin menghapus data makanan?')">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="<?= BASEURL ?>/food/create" class="font-medium text-sm text-white bg-primary py-2 px-3 rounded-md hover:opacity-90">Tambah Data Makanan</a>
        </div>
    </div>
</section>
<!-- Food End -->