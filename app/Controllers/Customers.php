<?php

namespace App\Controllers;

class Customers extends BaseController{
    public function index(){
        $customers = [
            [
                'fullname' => 'Kaycee Mero',
                'email' => 'kc@email.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Renz Mejia',
                'email' => 'renzpogi@email.com',
                'phone' => '09123456780'
            ],
            [
                'fullname' => 'Jiwon Kim',
                'email' => 'liz@email.com',
                'phone' => '09123456781'
            ],
            [
                'fullname' => 'Rei Naoi',
                'email' => 'rei@email.com',
                'phone' => '09123456782'
            ],
            [
                'fullname' => 'LeBron James',
                'email' => 'kingjames@email.com',
                'phone' => '09123456783'
            ]
        ];
        return view('customers', ['customers' => $customers]);
    }
}