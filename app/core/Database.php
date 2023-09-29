<?php

class Database
{
    // Menginisialisasikan $host, $user, $pass, dan $db_name dengan nilai yang sudah dibuat di file config.php.
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    // Mendeklarasikan $dbh, dan $stmt.
    private $dbh, $stmt;

    public function __construct()
    {
        // Menginisialisasikan $dsn dengan nilai host database dan nama database, untuk terhubung ke database.
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;

        $option = [
            // Minta koneksi yang persisten, daripada membuat koneksi baru.
            PDO::ATTR_PERSISTENT => true,
            // Lemparkan PDOException jika terjadi error.
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            // Koneksi ke database.
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);

            // Menangkap PDOException.
        } catch (PDOException $e) {
            // Menampilkan pesan error, dan memberhentikan program ketika ada error.
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        // Mempersiapkan query untuk dieksekusi.
        $this->stmt = $this->dbh->prepare($query);
    }

    public function price()
    {
        // Menangkap harga yang diinputkan.
        $price = $_POST['price'];
        // Menghilangkan 'Rp' pada harga.
        $price = str_replace('Rp', '', $price);
        // Menghilangkan '.' pada harga.
        $price = str_replace('.', '', $price);

        // Mengembalikan $price yang sudah melewati str_replace().
        return $price;
    }

    public function upload()
    {
        /**
         * Menangkap nama gambar,
         * ukuran gambar,
         * dan lokasi sementara file gambar.
         */
        $name = $_FILES['image']['name'];
        $size = $_FILES['image']['size'];
        $tmpName = $_FILES['image']['tmp_name'];

        // Menangkap inputan dari file create.php atau update.php.
        $fromFile = $_POST['from_file'];

        // Menangkap id makanan atau minuman.
        $id = $_POST['id'];

        // Menangkap jenis yang diinputkan, apakah makanan atau minuman.
        $type = $_POST['type'];

        // Ekstensi file gambar yang diizinkan.
        $permittedExtension = ['jpg', 'jpeg', 'png', 'webp'];

        // Mengambil ekstensi file gambar yang diinputkan.
        $imageExtension = pathinfo($name, PATHINFO_EXTENSION);

        // Cek apakah ekstensi file gambar yang diinputkan tidak ada di salah satu dari ekstensi file gambar yang diizinkan.
        if (!in_array($imageExtension, $permittedExtension)) {
            // Membuat pesan kesalahan.
            Flasher::setMessage("Yang Anda upload bukan gambar!");

            // Cek apakah inputan dari file create.php atau update.php.
            if ($fromFile === "Create") {
                // Cek apakah jenisnya makanan atau minuman.
                if ($type === "Makanan") {
                    // Mengirim pesan kesalahan ke file create di folder food.
                    header('Location: ' . BASEURL . '/food/create');
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                } else if ($type === "Minuman") {
                    // Mengirim pesan kesalahan ke file create di folder beverage.
                    header('Location: ' . BASEURL . '/beverage/create');
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                }
            } else if ($fromFile === "Update") {
                // Cek apakah jenisnya makanan atau minuman.
                if ($type === "Makanan") {
                    // Mengirim pesan kesalahan ke file update di folder food.
                    header('Location: ' . BASEURL . '/food/update/' . $id);
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                } else if ($type === "Minuman") {
                    // Mengirim pesan kesalahan ke file update di folder beverage.
                    header('Location: ' . BASEURL . '/beverage/update/' . $id);
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                }
            }
        }

        // Cek jika ukuran gambar terlalu besar
        if ($size > 1500000) {
            // Membuat pesan kesalahan.
            Flasher::setMessage("Ukuran gambar terlalu besar!");

            // Cek apakah inputan dari file create.php atau update.php.
            if ($fromFile === "Create") {
                // Cek apakah jenisnya makanan atau minuman.
                if ($type === "Makanan") {
                    // Mengirim pesan kesalahan ke file create di folder food.
                    header('Location: ' . BASEURL . '/food/create');
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                } else if ($type === "Minuman") {
                    // Mengirim pesan kesalahan ke file create di folder beverage.
                    header('Location: ' . BASEURL . '/beverage/create');
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                }
            } else if ($fromFile === "Update") {
                // Cek apakah jenisnya makanan atau minuman.
                if ($type === "Makanan") {
                    // Mengirim pesan kesalahan ke file update di folder food.
                    header('Location: ' . BASEURL . '/food/update/' . $id);
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                } else if ($type === "Minuman") {
                    // Mengirim pesan kesalahan ke file update di folder beverage.
                    header('Location: ' . BASEURL . '/beverage/update/' . $id);
                    // Keluarkan pesan dan hentikan skrip saat ini.
                    exit;
                }
            }
        }

        /**
         * Hasilkan id unik,
         * tambahkan titik dibelakang id unik,
         * tambahkan ekstensi gambar yang diinputkan diakhir.
         */
        $newName = uniqid();
        $newName .= '.';
        $newName .= $imageExtension;

        // Cek apakah jenisnya makanan atau minuman.
        if ($type === "Makanan") {
            // Memindahkan file gambar dari lokasi sementara ke folder assets/img/food.
            move_uploaded_file($tmpName, 'assets/img/food/' . $newName);
        } else if ($type === "Minuman") {
            // Memindahkan file gambar dari lokasi sementara ke folder assets/img/beverage.
            move_uploaded_file($tmpName, 'assets/img/beverage/' . $newName);
        }

        // Mengembalikan nama baru file gambar.
        return $newName;
    }

    public function bind($param, $value, $type = null)
    {
        // Cek apakah $type null.
        if (is_null($type)) {
            switch (true) {
                    // Cek apakah $value adalah int.
                case is_int($value):
                    // Menginisialisasikan $type dengan nilai tipe data int pada SQL.
                    $type = PDO::PARAM_INT;
                    // Mengakhiri eksekusi switch.
                    break;

                    // Cek apakah $value adalah boolean.
                case is_bool($value):
                    // Menginisialisasikan $type dengan nilai tipe data boolean.
                    $type = PDO::PARAM_BOOL;
                    // Mengakhiri eksekusi switch.
                    break;

                    // Cek apakah $value null.
                case is_null($value):
                    // Menginisialisasikan $type dengan nilai tipe data null pada SQL.
                    $type = PDO::PARAM_NULL;
                    // Mengakhiri eksekusi switch.
                    break;

                    // Jika $value bukan int, boolean, dan tidak null, maka default yang akan dieksekusi.
                default:
                    // Menginisialisasikan $type dengan nilai tipe data char, varchar, atau string lainnya pada SQL.
                    $type = PDO::PARAM_STR;
            }
        }

        // Bind untuk menghindari SQL injection.
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        // Eksekusi statement.
        $this->stmt->execute();
    }

    public function resultSet()
    {
        // Eksekusi statement.
        $this->execute();
        // Mengembalikan semua data hasil dari eksekusi statement.
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        // Eksekusi statement.
        $this->execute();
        // Mengembalikan satu data hasil dari eksekusi statement.
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        // Mengembalikan jumlah baris yang dipengaruhi oleh pernyataan SQL terakhir.
        return $this->stmt->rowCount();
    }
}
