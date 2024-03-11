<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index', [
            'account' => Account::orderBy('account_id', 'asc')->get()
        ]);
    }
}
