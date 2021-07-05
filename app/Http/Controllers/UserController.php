<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $options;

    public function __construct()
    {
        $this->options = [
            'activePage' => 'users',
            'title' => 'Usuarios',
            'navName' => 'Usuarios',
            'activeButton' => 'laravel'
        ];
    }

    public function index()
    {

        $options = $this->options;
        $users = User::latest()->paginate(1);
        return view('users.index', compact('users','options'));
    }
    public function create()
    {
        $options = $this->options;
        return view('users.create', compact('options'));
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect()->route('users.index');
    }
}
