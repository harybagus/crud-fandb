<?php

class Flasher
{
    public static function setFlash($type, $message, $action)
    {
        // Membuat session flash dengan nilai array['type', 'message', 'action'].
        $_SESSION['flash'] = [
            'type' => $type,
            'message' => $message,
            'action' => $action
        ];
    }

    public static function flash()
    {
        // Cek apakah ada session flash.
        if (isset($_SESSION['flash'])) {
            // Cek apakah session flash message adalah berhasil.
            if ($_SESSION['flash']['message'] == 'berhasil') {
                // Tampilkan pesan keberhasilan.
                echo '<div id="flash" class="bg-green-500 p-4 rounded-md mb-3">
                        <div class="flex items-center justify-between">
                            <p class="font-medium text-center text-sm text-white">Data ' . $_SESSION['flash']['type'] . ' <strong>' . $_SESSION['flash']['message'] . '</strong> ' . $_SESSION['flash']['action'] . '</p>
                            <button type="button" id="flash-button" class="text-white hover:text-green-700 rounded-sm font-bold text-xl">X</button>
                        </div>
                    </div>';

                // Hapus session flash.
                unset($_SESSION['flash']);

                // Cek apakah session flash message adalah gagal.
            } else if ($_SESSION['flash']['message'] == 'gagal') {
                // Tampilkan pesan kegagalan
                echo '<div id="flash" class="bg-red-500 p-4 rounded-md mb-3">
                        <div class="flex items-center justify-between">
                            <p class="font-medium text-center text-sm text-white">Data ' . $_SESSION['flash']['type'] . ' <strong>' . $_SESSION['flash']['message'] . '</strong> ' . $_SESSION['flash']['action'] . '</p>
                            <button type="button" id="flash-button" class="text-white hover:text-red-700 rounded-sm font-bold text-xl">X</button>
                        </div>
                    </div>';

                // Hapus session flash.
                unset($_SESSION['flash']);
            }
        }
    }

    public static function setMessage($message)
    {
        // Membuat session message dengan nilai $message.
        $_SESSION['message'] = $message;
    }

    public static function message()
    {
        // Cek apakah ada session message.
        if (isset($_SESSION['message'])) {
            // Tampilkan pesan kesalahan.
            echo '<div class="text-red-500">' . $_SESSION['message'] . '</div>';

            // Hapus session message.
            unset($_SESSION['message']);
        }
    }
}
