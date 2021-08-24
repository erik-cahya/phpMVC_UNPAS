<?php

class App
{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    // Parse url, sebuah method yang digunakan untuk mengubah url menjadi rapi (pretty url)
    public function parseURL()
    {
        if (isset($_GET['url'])) {

            // rtrim : digunakan untuk menghilangkan tanda slash pada akhir url
            $url = rtrim($_GET['url'], '/');

            // untuk memfilter/membersihkan url dari karakter karakter aneh/tidak diinginkan
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // untuk memecah url berdasarkan /
            $url = explode('/', $url);

            return $url;
        }
    }
}
