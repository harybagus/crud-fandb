<?php

class App
{
    /**
     * Menentukan nilai default $controller.
     * Menentukan nilai default $method.
     * Menentukan nilai default $params.
     */
    protected $controller = 'Main';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // Mengambil url dari function parseURL().
        $url = $this->parseURL();

        /**
         * Mengecek apakah $url[0] tidak kosong, jika tidak maka memakai $controller nilai default yaitu 'Main'.
         * 
         * Mengecek apakah file $url[0] (misalnya 'food') ada, jika tidak maka memakai $controller nilai default yaitu 'Main'.
         * Jika ada maka ubah nilai $controller menjadi $url[0] (misalnya 'food').
         * Hapus $url[0].
         */
        if (isset($url[0])) {
            if (file_exists("../app/controllers/" . $url[0] . ".php")) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        // Mengarahkan tampilan ke controller $controller (misalnya 'food') atau jika tidak ada maka memakai nilai default yaitu 'Main'.
        require_once "../app/controllers/" . $this->controller . ".php";
        // Menginisialisasikan $controller dengan $controller yang baru.
        $this->controller = new $this->controller;

        /**
         * Mengecek apakah $url[1] tidak kosong, jika tidak maka memakai $method nilai default yaitu 'index'.
         * 
         * Mengecek apakah method $url[1] (misalnya 'create') ada, jika tidak maka memakai $method nilai default yaitu 'index'.
         * Jika ada maka ubah nilai $method menjadi $url[1] (misalnya 'create').
         * Hapus $url[1].
         */
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        /**
         * Mengecek apakah di url masih ada $url.
         * 
         * Jika ada maka ubah nilai $params menjadi $url (misalnya '1').
         */
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta kirimkan params(jika ada).
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        // Mengecek apakah ada url, jika tidak maka memakai $controller, $method, dan $params nilai default.
        if (isset($_GET["url"])) {
            // Menghilangkan '/' diakhir url.
            $url = rtrim($_GET["url"], '/');
            // Membersihkan url.
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Menghapus '/' di url.
            $url = explode('/', $url);

            // Mengembalikan $url yang sudah melewati rtrim(), filter_var(), dan explode().
            return $url;
        }
    }
}
