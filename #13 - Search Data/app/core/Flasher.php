<!-- File yang menangani Flash Message -->
<?php

class Flasher
{
    // $pesan : digunakan untuk menentukan pesannya apa
    // $aksi : digunakan untuk aksi yang dilakukan (misal: hapus, delete, edit, dsb)
    // $tipe : untuk menentukan class bootstrap mana yang akan dipakai (misal : danger, success, info, dsb)
    public static function setFlash($pesan, $aksi, $tipe)
    {
        // Set session
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    // untuk menampilkan flash
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">Data Mahasiswa
            <strong>' . $_SESSION['flash']['pesan'] . '</strong>' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';

            unset($_SESSION['flash']);
        }
    }
}
?>