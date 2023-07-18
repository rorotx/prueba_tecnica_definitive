<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrarRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::paginate();
        return view('user.list')->with('usuarios', $user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrarRequest $request)
    {
        $data = $request->validated();

        $user = User::create($data);

        $user = User::paginate();
        return view('user.list')->with('usuarios', $user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        return $usuario;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $usuario)
    {
        $data = $request->validated();

        $usuario->update($data);

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->back();
    }
}
