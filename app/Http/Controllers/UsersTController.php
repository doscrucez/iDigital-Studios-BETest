<?php

namespace App\Http\Controllers;

use App\Models\users_t;
use App\Models\roles_t;
use App\Models\employees_t;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UsersTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = users_t::latest()->get();
        return view('layouts.users.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = roles_t::latest()->get();
        $employees = employees_t::latest()->get();
        return view('layouts.users.createUser', ['roles' => $roles, 'employees' => $employees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'username_uts' => 'required',
            'password_uts' => 'required'
        ]);
        users_t::create($request->all());
        return redirect()->route('users.index')->with('success', 'Nuevo Usuario registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users_t  $users_t
     * @return \Illuminate\Http\Response
     */
    public function show(users_t $users_t)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users_t  $users_t
     * @return \Illuminate\Http\Response
     */
    public function edit(users_t $users_t)
    {
       return view('edit', ['$user_t' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users_t  $users_t
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users_t $users_t)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users_t  $users_t
     * @return \Illuminate\Http\Response
     */
    public function destroy(users_t $users_t)
    {
        //
    }
}
