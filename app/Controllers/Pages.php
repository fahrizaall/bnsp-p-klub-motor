<?php

namespace App\Controllers;

class Pages extends BaseController
{
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
        return view('pages/artikel', ['page_name' => $this->router_name]);
    }
    public function artikelDetail()
    {
        return view('pages/artikel_detail', ['page_name' => $this->router_name]);
    }
    public function event()
    {
        return view('pages/event', ['page_name' => $this->router_name]);
    }
    public function galeri()
    {
        return view('pages/galeri', ['page_name' => $this->router_name]);
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
