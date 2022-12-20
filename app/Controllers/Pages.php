<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\EventModel;
use App\Models\GaleriModel;

class Pages extends BaseController
{
    public function __construct()
    {
        // dd(\Config\Services::session()->get());
    }
    public function index()
    {
        return view('pages/home', ['page_name' => $this->router_name]);
    }
    public function profile()
    {
        return view('pages/profile', ['page_name' => $this->router_name]);
    }
    public function visimisi()
    {
        return view('pages/visimisi', ['page_name' => $this->router_name]);
    }
    public function produk()
    {
        return view('pages/produk', ['page_name' => $this->router_name]);
    }
    public function kontak()
    {
        return view('pages/kontak', ['page_name' => $this->router_name]);
    }
    public function about()
    {
        return view('pages/about', ['page_name' => $this->router_name]);
    }
    public function artikel()
    {
        $artikel = new ArtikelModel();

        $data = [
            'artikel_data' => $artikel->findAll(),
            'page_name' => $this->router_name
        ];

        return view('pages/artikel', $data);
    }
    public function artikelDetail($id)
    {
        $artikel = new ArtikelModel();

        $data = [
            'artikel' => $artikel->where('id', $id)->first(),
            'page_name' => $this->router_name
        ];

        return view('pages/artikel_detail', $data);
    }
    public function event()
    {
        $event = new EventModel();

        $data = [
            'event_data' => $event->findAll(),
            'page_name' => $this->router_name
        ];

        return view('pages/event', $data);
    }
    public function galeri()
    {
        $galeri = new GaleriModel();

        $data = [
            'galeri_data' => $galeri->findAll(),
            'page_name' => $this->router_name
        ];

        return view('pages/galeri', $data);
    }
    public function klien()
    {
        return view('pages/klien', ['page_name' => $this->router_name]);
    }
    public function login()
    {
        return view('pages/login', ['page_name' => $this->router_name]);
    }
    public function signup()
    {
        return view('pages/signup', ['page_name' => $this->router_name]);
    }
}
