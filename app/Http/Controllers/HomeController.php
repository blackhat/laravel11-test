<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        return Inertia::render('Home');
    }

    public function about() {
        return Inertia::render('About', [
            'message' => 'Inertia',
            'postcode' => 10240
        ]);
    }
    public function user() {
        $users = User::paginate(10);
        // return $users;

        return Inertia::render('User',[
            'users' => $users,
        ]);
    }

}
