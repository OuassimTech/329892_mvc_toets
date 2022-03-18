<?php

class Countries extends Controller
{

    protected object $countriesObject;

    public function __construct()
    {
        $this->countriesObject = $this->model('country');
    }

    public function index()
    {
        $data = [
            'title' => 'Counties',
            'countries' => $this->countriesObject->getCountriesFormatted()
        ];

        $this->view('countries/index', $data);
    }
}