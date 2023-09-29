/**
 * Navbar fixed.
 * Jika window discroll, maka jalankan function berikut.
 */
window.onscroll = function () {
    // Menangkap element html header.
    const header = document.querySelector('header');
    // Menginisialisasikan variable fixedNav dengan nilai posisi teratas.
    const fixedNav = header.offsetTop;
    // Menangkap element html dengan id to-top.
    const toTop = document.querySelector('#to-top');

    // Cek apakah nilai ketika halaman di scroll secara vertikal lebih besar dari nilai posisi teratas.
    if (window.scrollY > fixedNav) {
        // Jika iya.
        // Tambahkan class navbar-fixed pada header.
        header.classList.add('navbar-fixed');
        // Hapus class hidden pada toTop.
        toTop.classList.remove('hidden');
        // Tambahkan class flex pada toTop.
        toTop.classList.add('flex');
    } else {
        // Jika tidak.
        // Hapus class navbar-fixed pada header.
        header.classList.remove('navbar-fixed');
        // Hapus class flex pada toTop.
        toTop.classList.remove('flex');
        // Tambahkan class hidden pada toTop.
        toTop.classList.add('hidden');
    }
};

// Menangkap element html dengan id hamburger.
const hamburger = document.querySelector('#hamburger');
// Menangkap element html dengan id nav-menu.
const navMenu = document.querySelector('#nav-menu');

// Ketika hamburger diclick, maka jalankan function berikut.
hamburger.addEventListener('click', function () {
    /**
     * Tambahkan class hamburger-active pada hamburger jika class hamburger-active belum ada,
     * tapi jika class hamburger-active sudah ada maka hapus. 
     */
    hamburger.classList.toggle('hamburger-active');
    /**
     * Tambahkan class hidden pada navMenu jika class hidden belum ada,
     * tapi jika class hidden sudah ada maka hapus. 
     */
    navMenu.classList.toggle('hidden');
});

// Ketika click diluar hamburger & navMenu, maka jalankan function berikut.
window.addEventListener('click', function (e) {
    // Jika yang diclick bukan hamburger dan navMenu.
    if (e.target != hamburger && e.target != navMenu) {
        // Hapus class hamburger-active pada hamburger.
        hamburger.classList.remove('hamburger-active');
        // Tambahkan class hidden pada navMenu.
        navMenu.classList.add('hidden');
    }
});

function formatRupiah(number, prefix) {
    // Mengganti semua inputan user yang bukan angka dengan string kosong.
    let number_string = number.replace(/[^,\d]/g, '').toString(),
        // Memisahkan angka diantara koma(jika ada).
        split = number_string.split(','),
        // Menampung 3 angka terakhir sebelum koma.
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        // Ketika angka ribuan, tangkap setiap 3 angka.
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // Tambahkan titik jika yang diinput sudah ribuan
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    // Jika ada angka dibelakang koma.
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;

    /**
     * Jika prefix tidak ada maka tampilkan rupiah,
     * tapi jika prefix ada maka cek apakah ada rupiah,
     * jika ada rupiah maka tampilkan Rp + rupiah,
     * tapi jika tidak maka tampilkan string kosong.
     */
    return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
}

// Menangkap element html dengan id image.
const image = document.querySelector('#image');
// Menangkap element html dengan id image-preview.
const imagePreview = document.querySelector('#image-preview');

// Cek apakah ada element image.
if (image != null) {
    // Ketika value dari element image berubah, maka jalankan function berikut.
    image.addEventListener('change', function () {
        // Tangkap file gambar yang diinput user.
        const [file] = image.files;

        // Jika ada gambar.
        if (file) {
            // Ubah value di src dengan url file gambar yang diinput.
            imagePreview.src = URL.createObjectURL(file);
            // Hapus class hidden pada element imagePreview.
            imagePreview.classList.remove('hidden');
        }
    });
}

// Menangkap element html dengan id flash.
const flash = document.querySelector('#flash');
// Menangkap element html dengan id flash-button. 
const flashButton = document.querySelector('#flash-button');

// Cek apakah ada element flashButton.
if (flashButton != null) {
    // Ketika element flashButton diclick, makan jalankan function berikut.
    flashButton.addEventListener('click', function () {
        // Tambahkan class hidden pada element flash.
        flash.classList.add('hidden');
    });
}