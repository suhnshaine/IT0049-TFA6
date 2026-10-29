<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'fullname' => 'System Administrator',
                'role' => 'Admin'
            ],
            [
                'username' => 'msantos',
                'fullname' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'jcruz',
                'fullname' => 'Juan Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'areyes',
                'fullname' => 'Ana Reyes',
                'role' => 'Inventory Staff'
            ],
            [
                'username' => 'mlopez',
                'fullname' => 'Mark Lopez',
                'role' => 'Manager'
            ]
        ];

        return view('users', compact('users'));
    }
}
