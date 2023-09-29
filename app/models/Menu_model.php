<?php

class Menu_model
{
    // Menginisialisasikan $table dengan nilai nama table yaitu menu.
    private $table = 'menu';
    // Mendeklarasikan $db.
    private $db;

    public function __construct()
    {
        // Membuat object $db dari class Database.
        $this->db = new Database;
    }

    public function getAllFood()
    {
        // Menginisialisasikan $query dengan query memilih semua data berjenis makanan.
        $query = "SELECT * FROM " . $this->table . " WHERE type = 'Makanan'";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);

        // Mengembalikan semua data hasil dari eksekusi statement.
        return $this->db->resultSet();
    }

    public function getFoodById($id)
    {
        // Menginisialisasikan $query dengan query memilih satu data berdasarkan id dan berjenis makanan.
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id AND type = 'Makanan'";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);
        // Bersihkan id, untuk menghindari SQL injection.
        $this->db->bind('id', $id);

        // Mengembalikan satu data hasil dari eksekusi statement.
        return $this->db->single();
    }

    public function getFoodWhereNotId($id)
    {
        // Menginisialisasikan $query dengan query memilih semua data berdasarkan selain dari id dan berjenis makanan.
        $query = "SELECT * FROM " . $this->table . " WHERE NOT id = :id AND type = 'Makanan'";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);
        // Bersihkan id, untuk menghindari SQL injection.
        $this->db->bind('id', $id);

        // Mengembalikan semua data hasil dari eksekusi statement.
        return $this->db->resultSet();
    }

    public function getAllBeverage()
    {
        // Menginisialisasikan $query dengan query memilih semua data berjenis minuman.
        $query = "SELECT * FROM " . $this->table . " WHERE type = 'Minuman'";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);

        // Mengembalikan semua data hasil dari eksekusi statement.
        return $this->db->resultSet();
    }

    public function getBeverageById($id)
    {
        // Menginisialisasikan $query dengan query memilih satu data berdasarkan id dan berjenis minuman.
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id AND type = 'Minuman'";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);
        // Bersihkan id, untuk menghindari SQL injection.
        $this->db->bind('id', $id);

        // Mengembalikan satu data hasil dari eksekusi statement.
        return $this->db->single();
    }

    public function getBeverageWhereNotId($id)
    {
        // Menginisialisasikan $query dengan query memilih semua data berdasarkan selain dari id dan berjenis minuman.
        $query = "SELECT * FROM " . $this->table . " WHERE NOT id = :id AND type = 'Minuman'";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);
        // Bersihkan id, untuk menghindari SQL injection.
        $this->db->bind('id', $id);

        // Mengembalikan semua data hasil dari eksekusi statement.
        return $this->db->resultSet();
    }

    public function createMenuData($data)
    {
        // Menginisialisasikan $query dengan query memasukkan data ke database.
        $query = "INSERT INTO menu VALUES ('', :name, :description, :price, :type, :image)";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);

        /**
         * Bersihkan name, description, price, type, dan image, untuk menghindari SQL injection.
         */
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $this->db->price());
        $this->db->bind('type', $data['type']);
        $this->db->bind('image', $this->db->upload());

        // Eksekusi statement.
        $this->db->execute();

        // Mengembalikan jumlah baris yang dipengaruhi oleh pernyataan SQL terakhir.
        return $this->db->rowCount();
    }

    public function updateMenuData($data)
    {
        // Menginisialisasikan $query dengan query memperbarui data di database berdasarkan id.
        $query = "UPDATE menu SET name = :name, description = :description, price = :price, image = :image WHERE id = :id";

        // Cek apakah user menginputkan gambar baru.
        if ($_FILES['image']['error'] === 4) {
            // Jika tidak maka inisialisasikan $image dengan nilai gambar lama.
            $image = $data['oldImage'];
        } else {
            // Jika iya maka inisialisasikan $image dengan nilai gambar baru.
            $image = $this->db->upload();

            // Cek apakah data berjenis makanan.
            if ($data['type'] == 'Makanan') {
                // Menghapus file gambar lama di folder assets/img/food/.
                unlink('assets/img/food/' . $data['oldImage']);

                // Cek apakah data berjenis minuman.
            } else if ($data['type'] == 'Minuman') {
                // Menghapus file gambar lama di folder assets/img/beverage/.
                unlink('assets/img/beverage/' . $data['oldImage']);
            }
        }

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);

        /**
         * Bersihkan name, description, price, image, dan id, untuk menghindari SQL injection.
         */
        $this->db->bind('name', $data['name']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('price', $this->db->price());
        $this->db->bind('image', $image);
        $this->db->bind('id', $data['id']);

        // Eksekusi statement.
        $this->db->execute();

        // Mengembalikan jumlah baris yang dipengaruhi oleh pernyataan SQL terakhir.
        return $this->db->rowCount();
    }

    public function deleteMenuData($id)
    {
        // Menginisialisasikan $food dengan nilai satu data makanan dari getFoodById();
        $food = $this->getFoodById($id);
        // Menginisialisasikan $beverage dengan nilai satu data minuman dari getBeverageById();
        $beverage = $this->getbeverageById($id);

        // Jika makanan.
        if ($food) {
            // Menghapus file gambar di folder assets/img/food/.
            unlink('assets/img/food/' . $food['image']);

            // Jika minuman.
        } else if ($beverage) {
            // Menghapus file gambar di folder assets/img/beverage/.
            unlink('assets/img/beverage/' . $beverage['image']);
        }

        // Menginisialisasikan $query dengan query menghapus data berdasarkan id.
        $query = "DELETE FROM menu WHERE id = :id";

        // Siapkan query untuk dieksekusi.
        $this->db->query($query);
        // Bersihkan id, untuk menghindari SQL injection.
        $this->db->bind('id', $id);

        // Eksekusi statement.
        $this->db->execute();

        // Mengembalikan jumlah baris yang dipengaruhi oleh pernyataan SQL terakhir.
        return $this->db->rowCount();
    }
}
