<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $users = User::all();

        //render view with products
        return view('admin.insert', compact('users'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.insert');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:5'],
            'nisn' => ['required', 'integer'],
            'status' => ['required'],
            'jenis_kelamin' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'nisn' => $request->nisn,
            'status' => $request->status,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => Hash::make($request->password),
        ]);

        //redirect to index
        return redirect()->route('admin.pengguna')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        //get product by ID
        $users = User::findOrFail($id);

        //render view with product
        return view('admin.edit', compact('users'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:5'],
            'nisn' => ['required', 'integer'],
            'status' => ['required'],
            'jenis_kelamin' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //get product by ID
        $users = User::findOrFail($id);

        $users->update([
            'name' => $request->name,
            'role' => $request->role,
            'nisn' => $request->nisn,
            'status' => $request->status,
            'jenis_kelamin' => $request->jenis_kelamin,
            'password' => Hash::make($request->password),
        ]);


        //redirect to index
        return redirect()->route('admin.pengguna')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $users = User::findOrFail($id);

        //delete product
        $users->delete();

        //redirect to index
        return redirect()->route('admin.pengguna')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}