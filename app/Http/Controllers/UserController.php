<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request) {
        if($request->password !== $request ->confirm_password) {
            return 'Password does not match';
        }

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->cpf = $request->cpf;

        $user->save();

        return 'Ok';
    }

    public function edit(Request $request, $id) {
        $user = User()::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->cpf = $request->cpf;

        $user->save();

        return 'Ok';
    }
}
