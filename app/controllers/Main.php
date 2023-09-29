<?php

class Main extends Controller
{
    public function index()
    {
        // Mengambil semua data makanan dan minuman dari model Menu_model.
        $data = [
            'food' => $this->model('Menu_model')->getAllFood(),
            'beverage' => $this->model('Menu_model')->getAllBeverage()
        ];

        /**
         * Mengarahkan view ke file index di folder main, serta mengirimkan data makanan dan minuman.
         * Menggabungkan header, index, dan footer dalam satu halaman.
         */
        $this->view("templates/header");
        $this->view("main/index", $data);
        $this->view("templates/footer");
    }
}
