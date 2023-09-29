<?php

class Controller
{
    public function view($view, $data = [])
    {
        // Mengarahkan tampilan ke folder views serta mengirimkan data(jika ada).
        require_once "../app/views/" . $view . ".php";
    }

    public function model($model)
    {
        // Mengarahkan ke model di folder models untuk memakai method-method yang ada di model.
        require_once "../app/models/" . $model . ".php";
        // Mengembalikan $model agar bisa memanggil method-method yang ada di $model.
        return new $model;
    }
}
