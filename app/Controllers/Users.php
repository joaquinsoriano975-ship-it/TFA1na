<?php

namespace App\Controllers;

class Users extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        $users = [
            [
                'username' => 'admin.joaquin',
                'fullName' => 'Joaquin Soriano',
                'role'     => 'Administrator',
            ],
            [
                'username' => 'cashier.marie',
                'fullName' => 'Marie Dela Cruz',
                'role'     => 'Cashier',
            ],
            [
                'username' => 'cashier.paolo',
                'fullName' => 'Paolo Garcia',
                'role'     => 'Cashier',
            ],
            [
                'username' => 'inventory.anna',
                'fullName' => 'Anna Villanueva',
                'role'     => 'Inventory Staff',
            ],
            [
                'username' => 'manager.luis',
                'fullName' => 'Luis Navarro',
                'role'     => 'Store Manager',
            ],
        ];

        return view('users/index', [
            'title'      => 'User Accounts',
            'activePage' => 'users',
            'users'      => $users,
        ]);
    }
}