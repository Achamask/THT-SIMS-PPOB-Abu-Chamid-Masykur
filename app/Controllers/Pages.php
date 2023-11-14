<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "SIMS PPOB | Registrasi"
        ];
        echo view('layout/header', $data);
        echo view('pages/registrasi');
        echo view('layout/footer');
    }
    public function masuk()
    {
        $data = [
            'title' => "SIMS PPOB | Masuk"
        ];
        echo view('layout/header', $data);
        echo view('pages/masuk');
        echo view('layout/footer');
    }
    public function dashboard()
    {
        $data = [
            'title' => "SIMS PPOB | Dashboard",
            'nama' => "Chamid"
        ];
        echo view('layout/header', $data);
        echo view('pages/dashboard');
        echo view('layout/footer');
    }
}
