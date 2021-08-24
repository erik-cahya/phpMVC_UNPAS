<?php

class About
{
    // method default
    public function index($nama = 'Erik', $pekerjaan = 'Dev')
    {
        echo "Halo, nama saya, $nama saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
