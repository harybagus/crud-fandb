<!-- Update Food Start -->
<section class="pt-20 pb-10 lg:pt-24 lg:pb-16">
    <div class="container px-4 lg:px-8 xl:px-16">
        <div class="w-full px-4">
            <h2 class="font-bold text-xl text-primary mb-4 lg:text-2xl">Formulir Perbarui Data Makanan</h2>
            <div class="text-secondary">
                <form action="<?= BASEURL ?>/food/edit" method="post" autocomplete="off" enctype="multipart/form-data">
                    <input type="hidden" name="from_file" id="from_file" value="Update">
                    <input type="hidden" name="id" id="id" value="<?= $data['food']['id']; ?>">
                    <input type="hidden" name="type" id="type" value="<?= $data['food']['type']; ?>">
                    <input type="hidden" name="oldImage" id="oldImage" value="<?= $data['food']['image']; ?>">

                    <div class="flex flex-wrap">
                        <div class="w-full mb-3 lg:w-1/2 lg:pr-3">
                            <label for="name" class="text-base font-semibold">Nama <span class="text-red-500">*</span></label>
                            <input type="text" id="name" name="name" maxlength="50" class="w-full p-2 bg-white border border-secondary focus:outline-none rounded-lg text-secondary" required oninvalid="this.setCustomValidity('Masukkan nama makanan terlebih dahulu')" oninput="this.setCustomValidity('')" value="<?= $data['food']['name']; ?>">
                        </div>

                        <div class="w-full mb-3 lg:w-1/2 lg:pl-3">
                            <label for="price" class="text-base font-semibold">Harga <span class="text-red-500">*</span></label>
                            <input type="text" id="price" name="price" maxlength="9" onkeyup="this.value = formatRupiah(this.value, 'Rp')" class="w-full p-2 bg-white border border-secondary focus:outline-none rounded-lg text-secondary" required oninvalid="this.setCustomValidity('Masukkan harga makanan terlebih dahulu')" oninput="this.setCustomValidity('')" value="<?= formatRupiah($data['food']['price']); ?>">
                        </div>
                    </div>

                    <div class="flex flex-wrap">
                        <div class="w-full mb-3 lg:w-1/2 lg:pr-3">
                            <label for="description" class="text-base font-semibold">Deskripsi <span class="text-red-500">*</span></label>
                            <textarea type="text" id="description" name="description" rows="5" maxlength="255" class="w-full p-2 bg-white border border-secondary focus:outline-none rounded-lg text-secondary" required oninvalid="this.setCustomValidity('Masukkan deskripsi makanan terlebih dahulu')" oninput="this.setCustomValidity('')"><?= $data['food']['description']; ?></textarea>
                        </div>

                        <div class="w-full mb-9 lg:w-1/2 lg:pl-3">
                            <label for="image" class="text-base font-semibold">Gambar <span class="text-red-500">*</span></label>
                            <img src="<?= BASEURL ?>/assets/img/food/<?= $data['food']['image']; ?>" alt="<?= $data['food']['name']; ?>" id="image-preview" width="200" class="rounded-lg mb-2">
                            <input type="file" accept="image/*" id="image" name="image" class="w-full text-secondary">
                            <!-- Menampilkan pesan kesalahan -->
                            <?php Flasher::message(); ?>
                        </div>
                    </div>

                    <div class="w-full flex justify-between">
                        <button type="submit" class="text-base font-semibold text-white bg-primary py-2 px-3 rounded-md hover:opacity-90 hover:shadow-lg transition duration-300">Perbarui Data</button>
                        <button type="reset" class="text-base font-semibold text-white bg-secondary py-2 px-3 rounded-md hover:opacity-90 hover:shadow-lg transition duration-300"><a href="<?= BASEURL ?>/food">Batal</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Update Food End -->