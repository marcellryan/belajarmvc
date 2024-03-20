<?php
class App
{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            //→ Ambil value urlnya
            $url =$_GET['url'];
            //→ Buang tanda '/' di akhir url
            $url = rtrim($url,'/');
            //→ Filter url dari karater2 aneh
            $url = filter_var($url, FILTER_SANITIZE_URL );
            //→ Pecah url berdasarkan tanda '/' sebagai pemisah
            $url = explode('/', $url);

            return $url;
        }
    }
}