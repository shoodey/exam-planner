<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $menu = 'users';
        return view('admin.users.index', compact('menu'));
    }
}
