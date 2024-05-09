<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webuser;

class UserController extends Controller
{

    public function show($id)
    {
        $user = Webuser::findOrFail($id);
        return view('show', compact('user'));
    }


    public function edit($id)
    {
        $user = Webuser::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Webuser::findOrFail($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('profil', $user->id)->with('success', 'Profilul a fost actualizat cu succes!');
    }

    public function changePassword($id)
    {
        $user = Webuser::findOrFail($id);
        return view('change-password', compact('user'));
    }


    public function updatePassword(Request $request, $id)
    {
        $user = Webuser::findOrFail($id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('profil', $user->id)->with('success', 'Parola a fost actualizată cu succes!');
    }
}
