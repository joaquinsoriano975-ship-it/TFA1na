<?php

namespace App\Controllers;

class Customers extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        $customers = [
            [
                'fullName' => 'Angela Reyes',
                'email'    => 'angela.reyes@example.com',
                'phone'    => '0917 123 4501',
            ],
            [
                'fullName' => 'Marco Santos',
                'email'    => 'marco.santos@example.com',
                'phone'    => '0918 234 5602',
            ],
            [
                'fullName' => 'Bianca Cruz',
                'email'    => 'bianca.cruz@example.com',
                'phone'    => '0919 345 6703',
            ],
            [
                'fullName' => 'Nathan Lim',
                'email'    => 'nathan.lim@example.com',
                'phone'    => '0920 456 7804',
            ],
            [
                'fullName' => 'Sofia Mendoza',
                'email'    => 'sofia.mendoza@example.com',
                'phone'    => '0921 567 8905',
            ],
        ];

        return view('customers/index', [
            'title'      => 'Customer Accounts',
            'activePage' => 'customers',
            'customers'  => $customers,
        ]);
    }
}