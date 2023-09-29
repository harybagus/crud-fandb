<!-- Home Start -->
<section id="home" class="pt-16 pb-12 px-4 lg:pb-2 lg:px-0">
    <div class="container lg:px-8 xl:px-16">
        <div class="flex flex-wrap">
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="relative">
                    <img src="<?= BASEURL ?>/assets/img/hero.png" alt="Hero Image" class="mx-auto">
                </div>
            </div>

            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-lg font-semibold text-primary md:text-2xl">Selamat Datang di <span class="block font-bold text-dark text-3xl md:text-4xl">F&Bagus</span></h1>
                <p class="font-medium text-secondary mt-5 mb-6">F&Bagus adalah sebuah website yang menampilkan berbagai macam makanan dan minuman beserta deskripsi dan harganya.</p>
                <a href="<?= BASEURL ?>/#foodandbeverage" class="text-sm font-semibold bg-primary text-white py-3 px-5 rounded-r-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out md:text-base">Lihat Food & Beverage</a>
            </div>
        </div>
    </div>
</section>
<!-- Home End -->

<!-- Food & Beverage Start -->
<section id="foodandbeverage" class="pt-20 pb-10 bg-tertiary lg:pb-5">
    <div class="container lg:px-8 xl:px-16">
        <div class="w-full px-4">
            <div class="max-w-2xl mx-auto text-center px-4 mb-9 md:mb-16">
                <h3 class="font-semibold text-lg text-primary">Food & Beverage</h3>
                <h2 class="font-bold text-2xl text-dark mb-2 lg:text-3xl">Makanan & Minuman Yang Tersedia</h2>
                <p class="font-medium text-secondary">Terdapat banyak makanan dan minuman di website ini, Anda bisa menambahkan makanan dan minuman favorit agar menu tersebut ada di website ini, Anda juga bisa mengubah, atau menghapusnya.</p>
            </div>
        </div>

        <div class="flex flex-wrap px-0 sm:px-4 lg:px-0">
            <div class="w-full px-4 mb-10 md:w-1/2">
                <h3 class="font-semibold text-lg text-primary text-center mb-3">Food</h3>

                <div class="flex flex-wrap justify-center mb-3">
                    <!-- Menampilkan semua data makanan -->
                    <?php foreach ($data['food'] as $food) : ?>
                        <div class="w-full px-4 sm:px-0 md:px-2 lg:w-1/2">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-5">
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

            <div class="w-full px-4 md:w-1/2">
                <h3 class="font-semibold text-lg text-primary text-center mb-3">Beverage</h3>

                <div class="flex flex-wrap justify-center mb-3">
                    <!-- Menampilkan semua data minuman -->
                    <?php foreach ($data['beverage'] as $beverage) : ?>
                        <div class="w-full px-4 sm:px-0 md:px-2 lg:w-1/2">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-5">
                                <a href="<?= BASEURL ?>/beverage/read/<?= $beverage['id']; ?>">
                                    <img src="<?= BASEURL ?>/assets/img/beverage/<?= $beverage['image']; ?>" alt="<?= $beverage['name']; ?>" class="w-full">
                                </a>
                                <div class="px-4 py-5">
                                    <h3><a href="<?= BASEURL ?>/beverage/read/<?= $beverage['id']; ?>" class="block font-semibold text-xl text-dark hover:text-primary truncate"><?= $beverage['name']; ?></a></h3>
                                    <p class="block text-base text-dark mb-3"><?= formatRupiah($beverage['price']); ?></p>
                                    <a href="<?= BASEURL ?>/beverage/update/<?= $beverage['id']; ?>" class="font-medium text-sm text-white bg-primary py-2 px-3 rounded-md hover:opacity-90">Update</a>
                                    <a href="<?= BASEURL ?>/beverage/delete/<?= $beverage['id']; ?>" class="font-medium text-sm text-white bg-red-600 py-2 px-3 rounded-md hover:opacity-90" onclick="return confirm('Yakin ingin menghapus data minuman?')">Delete</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center">
                    <a href="<?= BASEURL ?>/beverage/create" class="font-medium text-sm text-white bg-primary py-2 px-3 rounded-md hover:opacity-90">Tambah Data Minuman</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Food & Beverage End -->

<!-- Contact Start -->
<section id="contact" class="pt-20 pb-5">
    <div class="container lg:px-8 xl:px-16">
        <div class="w-full px-4">
            <div class="max-w-2xl mx-auto text-center px-4 mb-9 md:mb-16">
                <h3 class="font-semibold text-lg text-primary">Contact</h3>
                <h2 class="font-bold text-2xl text-dark mb-2 lg:text-3xl">Hubungi Saya</h2>
                <p class="font-medium text-secondary">Jika memiliki pertanyaan, saran, masukkan, maupun kritikkan, silakan kirim pesan melalui media sosial atau isi form dibawah ini. Saya sangat senang bila mendapat hal tersebut dari Anda.</p>
            </div>
        </div>

        <div class="flex flex-wrap px-4">
            <div class="w-full px-4 mb-7 lg:px-0 lg:mb-0 md:w-1/2">
                <h2 class="uppercase text-lg font-semibold text-slate-600 mb-3 lg:text-xl">Hubungi saya melalui media sosial</h2>
                <p class="font-medium text-secondary mb-4">Kirim pesan melalui Email, WhatsApp, atau Facebook, direct message melalui Instagram, atau tweet saya di Twitter.</p>
                <div class="block">
                    <!-- Email -->
                    <a href="javascript:void(0)" class="flex group mb-3">
                        <div class="w-9 h-9 rounded-full flex justify-center items-center border border-secondary text-secondary group-hover:border-primary group-hover:text-primary">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Gmail</title>
                                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                            </svg>
                        </div>
                        <p class="text-secondary pt-2 pl-2 group-hover:text-primary">Email</p>
                    </a>

                    <!-- WhatsApp -->
                    <a href="javascript:void(0)" class="flex group mb-3">
                        <div class="w-9 h-9 rounded-full flex justify-center items-center border border-secondary text-secondary group-hover:border-primary group-hover:text-primary">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>WhatsApp</title>
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </div>
                        <p class="text-secondary pt-2 pl-2 group-hover:text-primary">WhatsApp</p>
                    </a>

                    <!-- Facebook -->
                    <a href="javascript:void(0)" class="flex group mb-3">
                        <div class="w-9 h-9 rounded-full flex justify-center items-center border border-secondary text-secondary group-hover:border-primary group-hover:text-primary">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Facebook</title>
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </div>
                        <p class="text-secondary pt-2 pl-2 group-hover:text-primary">Facebook</p>
                    </a>

                    <!-- Instagram -->
                    <a href="javascript:void(0)" class="flex group mb-3">
                        <div class="w-9 h-9 rounded-full flex justify-center items-center border border-secondary text-secondary group-hover:border-primary group-hover:text-primary">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Instagram</title>
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </div>
                        <p class="text-secondary pt-2 pl-2 group-hover:text-primary">Instagram</p>
                    </a>

                    <!-- Twitter -->
                    <a href="javascript:void(0)" class="flex group">
                        <div class="w-9 h-9 rounded-full flex justify-center items-center border border-secondary text-secondary group-hover:border-primary group-hover:text-primary">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title>Twitter</title>
                                <path d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z" />
                            </svg>
                        </div>
                        <p class="text-secondary pt-2 pl-2 group-hover:text-primary">Twitter</p>
                    </a>
                </div>
            </div>

            <div class="w-full px-4 mb-5 lg:px-0 md:w-1/2">
                <h2 class="uppercase text-lg font-semibold text-slate-600 mb-3 lg:text-xl">Kirimkan pesan kepada saya</h2>
                <form action="#" method="post" autocomplete="off">
                    <div class="w-full mb-5">
                        <label for="name" class="text-base font-semibold text-secondary">Nama <span class="text-primary">*</span></label>
                        <input type="text" id="name" class="w-full p-2 bg-white border border-secondary focus:outline-none rounded-lg text-secondary" required oninvalid="this.setCustomValidity('Masukkan nama Anda terlebih dahulu')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="w-full mb-5">
                        <label for="email" class="text-base font-semibold text-secondary">Email <span class="text-primary">*</span></label>
                        <input type="email" id="email" class="w-full p-2 bg-white border border-secondary focus:outline-none rounded-lg text-secondary" required oninvalid="this.setCustomValidity('Masukkan email Anda terlebih dahulu')" oninput="this.setCustomValidity('')">
                    </div>

                    <div class="w-full mb-2">
                        <label for="message" class="text-base font-semibold text-secondary">Pesan <span class="text-primary">*</span></label>
                        <textarea id="message" rows="4" class="w-full p-2 bg-white border border-secondary focus:outline-none rounded-lg text-secondary" required oninvalid="this.setCustomValidity('Masukkan pesan yang ingin Anda sampaikan terlebih dahulu')" oninput="this.setCustomValidity('')"></textarea>
                    </div>

                    <div class="w-full">
                        <button class="text-base font-semibold text-white bg-primary py-2 px-3 rounded-md hover:opacity-90 hover:shadow-lg transition duration-300">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->