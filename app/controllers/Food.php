<?php

class Food extends Controller
{
    public function index()
    {
        /**
         * Membuat title untuk halaman index.
         * Mengambil semua data makanan dari model Menu_model.
         */
        $data = [
            'title' => 'Food',
            'food' => $this->model('Menu_model')->getAllFood()
        ];

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file index di folder food, serta mengirimkan data makanan.
         * Menggabungkan header, index, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("food/index", $data);
        $this->view("templates/footer");
    }

    public function create()
    {
        // Membuat title untuk halaman create.
        $data['title'] = 'Create | Food';

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file create di folder food.
         * Menggabungkan header, create, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("food/create");
        $this->view("templates/footer");
    }

    public function save()
    {
        /**
         * Jika berhasil menambahkan data makanan ke database, tampilkan pesan berhasil ditambahkan.
         * Tapi jika gagal maka tampilkan pesan gagal ditambahkan.
         * Kirim pesan ke file index di folder food.
         */
        if ($this->model('Menu_model')->createMenuData($_POST) > 0) {
            Flasher::setFlash('makanan', 'berhasil', 'ditambahkan');
            header('Location: ' . BASEURL . '/food');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        } else {
            Flasher::setFlash('makanan', 'gagal', 'ditambahkan');
            header('Location: ' . BASEURL . '/food');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        }
    }

    public function read($id)
    {
        /**
         * Membuat title untuk halaman read.
         * Mengambil data makanan dari model Menu_model berdasarkan id.
         * Mengambil semua data makanan dari model Menu_model selain id.
         */
        $data = [
            'title' => 'Read | Food',
            'food' => $this->model('Menu_model')->getFoodById($id),
            'otherFood' => $this->model('Menu_model')->getFoodWhereNotId($id)
        ];

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file read di folder food, serta mengirim data makanan berdasarkan id,
         * dan data makanan selain id yang dipilih user.
         * Menggabungkan header, read, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("food/read", $data);
        $this->view("templates/footer");
    }

    public function update($id)
    {
        /**
         * Membuat title untuk halaman update.
         * Mengambil data makanan dari model Menu_model berdasarkan id.
         */
        $data = [
            'title' => 'Update | Food',
            'food' => $this->model('Menu_model')->getFoodById($id)
        ];

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file update di folder food, serta mengirim data makanan berdasarkan id.
         * Menggabungkan header, update, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("food/update", $data);
        $this->view("templates/footer");
    }

    public function edit()
    {
        /**
         * Jika berhasil memperbarui data makanan di database, tampilkan pesan berhasil diperbarui.
         * Tapi jika gagal maka tampilkan pesan gagal diperbarui.
         * Kirim pesan ke file index di folder food.
         */
        if ($this->model('Menu_model')->updateMenuData($_POST) > 0) {
            Flasher::setFlash('makanan', 'berhasil', 'diperbarui');
            header('Location: ' . BASEURL . '/food');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        } else {
            Flasher::setFlash('makanan', 'gagal', 'diperbarui');
            header('Location: ' . BASEURL . '/food');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        }
    }

    public function delete($id)
    {
        /**
         * Jika berhasil menghapus data makanan berdasarkan id di database, tampilkan pesan berhasil dihapus.
         * Tapi jika gagal maka tampilkan pesan gagal dihapus.
         * Kirim pesan ke file index di folder food.
         */
        if ($this->model('Menu_model')->deleteMenuData($id) > 0) {
            Flasher::setFlash('makanan', 'berhasil', 'dihapus');
            header('Location: ' . BASEURL . '/food');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        } else {
            Flasher::setFlash('makanan', 'gagal', 'dihapus');
            header('Location: ' . BASEURL . '/food');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        }
    }
}
