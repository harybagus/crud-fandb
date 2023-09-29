<?php

class Beverage extends Controller
{
    public function index()
    {
        /**
         * Membuat title untuk halaman index.
         * Mengambil semua data minuman dari model Menu_model.
         */
        $data = [
            'title' => 'Beverage',
            'beverage' => $this->model('Menu_model')->getAllBeverage()
        ];

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file index di folder beverage, serta mengirimkan data minuman.
         * Menggabungkan header, index, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("beverage/index", $data);
        $this->view("templates/footer");
    }

    public function create()
    {
        // Membuat title untuk halaman create.
        $data['title'] = 'Create | Beverage';

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file create di folder beverage.
         * Menggabungkan header, create, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("beverage/create");
        $this->view("templates/footer");
    }

    public function save()
    {
        /**
         * Jika berhasil menambahkan data minuman ke database, tampilkan pesan berhasil ditambahkan.
         * Tapi jika gagal maka tampilkan pesan gagal ditambahkan.
         * Kirim pesan ke file index di folder beverage.
         */
        if ($this->model('Menu_model')->createMenuData($_POST) > 0) {
            Flasher::setFlash('minuman', 'berhasil', 'ditambahkan');
            header('Location: ' . BASEURL . '/beverage');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        } else {
            Flasher::setFlash('minuman', 'gagal', 'ditambahkan');
            header('Location: ' . BASEURL . '/beverage');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        }
    }

    public function read($id)
    {
        /**
         * Membuat title untuk halaman read.
         * Mengambil data minuman dari model Menu_model berdasarkan id.
         * Mengambil semua data minuman dari model Menu_model selain id.
         */
        $data = [
            'title' => 'Read | Beverage',
            'beverage' => $this->model('Menu_model')->getBeverageById($id),
            'otherBeverage' => $this->model('Menu_model')->getBeverageWhereNotId($id)
        ];

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file read di folder beverage, serta mengirim data minuman berdasarkan id,
         * dan data minuman selain id yang dipilih user.
         * Menggabungkan header, read, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("beverage/read", $data);
        $this->view("templates/footer");
    }

    public function update($id)
    {
        /**
         * Membuat title untuk halaman update.
         * Mengambil data minuman dari model Menu_model berdasarkan id.
         */
        $data = [
            'title' => 'Update | Beverage',
            'beverage' => $this->model('Menu_model')->getBeverageById($id)
        ];

        /**
         * Mengirim data title ke file header di folder templates.
         * Mengarahkan tampilan ke file update di folder beverage, serta mengirim data minuman berdasarkan id.
         * Menggabungkan header, update, dan footer dalam satu halaman.
         */
        $this->view("templates/header", $data);
        $this->view("beverage/update", $data);
        $this->view("templates/footer");
    }

    public function edit()
    {
        /**
         * Jika berhasil memperbarui data minuman di database, tampilkan pesan berhasil diperbarui.
         * Tapi jika gagal maka tampilkan pesan gagal diperbarui.
         * Kirim pesan ke file index di folder beverage.
         */
        if ($this->model('Menu_model')->updateMenuData($_POST) > 0) {
            Flasher::setFlash('minuman', 'berhasil', 'diperbarui');
            header('Location: ' . BASEURL . '/beverage');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        } else {
            Flasher::setFlash('minuman', 'gagal', 'diperbarui');
            header('Location: ' . BASEURL . '/beverage');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        }
    }

    public function delete($id)
    {
        /**
         * Jika berhasil menghapus data minuman berdasarkan id di database, tampilkan pesan berhasil dihapus.
         * Tapi jika gagal maka tampilkan pesan gagal dihapus.
         * Kirim pesan ke file index di folder beverage.
         */
        if ($this->model('Menu_model')->deleteMenuData($id) > 0) {
            Flasher::setFlash('minuman', 'berhasil', 'dihapus');
            header('Location: ' . BASEURL . '/beverage');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        } else {
            Flasher::setFlash('minuman', 'gagal', 'dihapus');
            header('Location: ' . BASEURL . '/beverage');
            // Keluarkan pesan dan hentikan skrip saat ini.
            exit;
        }
    }
}
