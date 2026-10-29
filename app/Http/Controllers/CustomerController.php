<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
     public function index()
    {
        $customers = [
            [
                'fullname' => 'Shirealeth Acorda',
                'email' => 'scacorda@email.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Gian Carlo Sarmiento',
                'email' => 'gcsarmiento@email.com',
                'phone' => '09234567890'
            ],
            [
                'fullname' => 'Darrel James Sanchez',
                'email' => 'djsanchez@email.com',
                'phone' => '09345678901'
            ],
            [
                'fullname' => 'Sarah Davis',
                'email' => 'sarah@email.com',
                'phone' => '09456789012'
            ],
            [
                'fullname' => 'Robert Wilson',
                'email' => 'robert@email.com',
                'phone' => '09567890123'
            ]
        ];

        return view('customers', compact('customers'));
    }
}
