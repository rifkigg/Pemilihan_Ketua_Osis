<?php

namespace App\Http\Controllers;

use App\Models\Ketos;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class KetosController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $ketua_osis = Ketos::all();

        //render view with products
        return view('admin.ketos', compact('ketua_osis'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.insertKetos');
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'visi' => ['required', 'string'],
            'misi' => ['required', 'string'],
            'no' => ['required', 'integer'],
            'slogan' => ['required'],
            'kelas' => ['required'],
        ]);

        $image = $request->file('image');
        $image->storeAs('public/ketos', $image->hashName());

        Ketos::create([
            'name' => $request->name,
            'image' => $image->hashName(),
            'visi' => $request->visi,
            'misi' => $request->misi,
            'no' => $request->no,
            'vote' => $request->vote,
            'slogan' => $request->slogan,
            'kelas' => $request->kelas,
        ]);

        //redirect to index
        return redirect()->route('admin.ketos')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        //get product by ID
        $ketua_osis = Ketos::findOrFail($id);

        //render view with product
        return view('admin.editKetos', compact('ketua_osis'));
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'visi' => ['required', 'string'],
            'misi' => ['required', 'string'],
            'no' => ['required', 'integer'],
            'vote' => ['required', 'integer'],
            'slogan' => ['required', 'string'],
            'kelas' => ['required', 'string'],
        ]);

        //get product by ID
        $ketua_osis = Ketos::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/ketos', $image->hashName());

            //delete old image
            Storage::delete('public/ketos/'.$ketua_osis->image);

            //update product with new image
            $ketua_osis->update([
                'name' => $request->name,
                'image' => $image->hashName(),
                'visi' => $request->visi,
                'misi' => $request->misi,
                'no' => $request->no,
                'vote' => $request->vote,
                'slogan' => $request->slogan,
                'kelas' => $request->kelas,
            ]);

        } else {

            //update product without image
            $ketua_osis->update([
                'name' => $request->name,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'no' => $request->no,
                'vote' => $request->vote,
                'slogan' => $request->slogan,
                'kelas' => $request->kelas,
            ]);
        }

        //redirect to index
        return redirect()->route('admin.ketos')->with(['success' => 'Data Berhasil Diubah!']);
    
    }
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $ketua_osis = Ketos::findOrFail($id);

        //delete product
        $ketua_osis->delete();

        //redirect to index
        return redirect()->route('admin.ketos')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
