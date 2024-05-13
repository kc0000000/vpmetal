<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct(Type $var = null) {
        helper('form');
    }
    public function index(): string
    {
        return view('home');
    }
    public function about_us(): string
    {
        return view('pages/about_us');
    }
    public function what_we_do(): string
    {
        return view('pages/what_we_do');
    }
    public function who_we_are(): string
    {
        return view('pages/who_we_are');
    }
    public function why_work_with_us(): string
    {
        return view('pages/why_work_with_us');
    }

    public function services(): string
    {
        return view('pages/services');
    }
    public function terms_and_conditions(): string
    {
        return view('pages/terms_and_conditions');
    }
    public function privacy_policy(): string
    {
        return view('pages/privacy_policy');
    }
    public function contact_us($submit = false): string
    {
        if(!$submit){
            return view('pages/contact_us');
        }
        
        $request = \Config\Services::request();

        $name = $request->getPost('name');

        echo $name;exit;
        
    }
}
