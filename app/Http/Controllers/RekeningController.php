<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Rekening; 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RekeningController extends Controller
{
    public function rekening_pembayaran(){
        return view('Rekening-pembayaran');
    }
    
   public function index() : View
   {
       //get all products
       $rekening = Rekening::latest()->paginate(10);

       //render view with products
       return view('Rekening', compact('Rekening'));
   }

   public function create(): View
    {
        return view('Rekening.create');
    }

    
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        //create product
        Rekening::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);

        //redirect to index
        return redirect()->route('/Rekening')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
