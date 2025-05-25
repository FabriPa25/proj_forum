<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
    ]);

    $user = User::findOrFail($id);

    // Verifica che l'utente stia modificando sé stesso
    if ($user->id !== Auth::id()) {
        abort(403);
    }

    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return back()->with('success', 'Dati aggiornati con successo.');
}


public function destroy($id)
{
    $user = User::findOrFail($id);

    // Verifica che l'utente stia eliminando sé stesso
    if ($user->id !== Auth::id()) {
        abort(403);
    }

    Auth::logout(); // Logout prima di eliminare
    $user->delete();

    return redirect('/')->with('success', 'Account eliminato con successo.');
}

}
