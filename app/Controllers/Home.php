<?php

namespace App\Controllers;

class Home extends BaseController
{
    private function getPageData(): array
    {
        $path = APPPATH . 'app/Data/page.json';

        if (!is_file($path)) {
            return [];
        }

        $json = file_get_contents($path);
        $data = json_decode($json, true);

        return is_array($data) ? $data : [];
    }

    public function index()
    {
        helper('url'); 

        $data = $this->getPageData();
        return view('landing/index', ['page' => $data]);
    }
}
