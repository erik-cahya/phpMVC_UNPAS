<?php

class App
{
    // Membuat property untuk menentukan controller default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();


        // -- CONTROLLER
        // cek apakah file controller tersedia di dalam folder controllers
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            // dan jika ada, timpa controller tersebut dengan controller yang baru
            $this->controller = $url[0];
            // hilangkan controller dari elemen array
            unset($url[0]);
        }

        // panggil controller yang baru
        require_once '../app/controllers/' . $this->controller . '.php';

        // instansiasi controller agar bisa memanggil method yang sudah di set
        $this->controller = new $this->controller;

        // -- METHOD
        // cek apakah method tersedia
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // -- PARAMETER
        if (!empty($url)) {
            // masukkan data dari url dan pindahkan ke $params
            $this->params = array_values($url);
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // Parse url, sebuah method yang digunakan untuk mengubah url menjadi rapi (pretty url)
    public function parseURL()
    {
        if (isset($_GET['url'])) {

            // rtrim : digunakan untuk menghilangkan tanda slash pada akhir url
            $url = rtrim($_GET['url'], '/');

            // untuk memfilter/membersihkan url dari karakter karakter aneh/tidak diinginkan
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // untuk memecah url berdasarkan / dan dijadikan string 
            $url = explode('/', $url);

            return $url;
        }
    }
}
