<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserContrller extends Controller
{
    /**
     * Exibe uma lista do recurso.
     */
    public function index()
    {
        
        return view('login.login');
    }
    public function login(Request $request)
    {
        $credencias = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|',
        ],[
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha deve ter no mínimo 6 caracteres',
        ]);
        if (auth::attempt($credencias, $request->remember)) {
           $request->session()->regenerate();
              return redirect()->intended(route('dashboard'));
        }
        return back()->withErrors([
            'erroes' => 'As credencias fornecidas não correspondem aos nossos registros.',
        ]);

    }

    /**
     * Mostra o formulário para criar um novo recurso.
     */
    public function create()
    {

    }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     */
    public function store(Request $request)
    {
        $credencias = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|',
            'confirmed_password' => 'required|same:password',
        ],[
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve ser um email válido',
            'email.unique' => 'O email informado já está em uso',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'O campo senha deve ter no mínimo 6 caracteres',
            'confirmed_password.required' => 'O campo confirmar senha é obrigatório',
            'confirmed_password.same' => 'O campo confirmar senha deve ser igual ao campo senha',
        ]);

        $user = new User();
        $user->name = $credencias['name'];
        $user->email = $credencias['email'];
        $user->password = Hash::make($credencias['password']);
        $user->save();
        auth::login($user);
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(string $id)
    {
        //
    }
}
