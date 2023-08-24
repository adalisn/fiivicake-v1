<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsMember;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
       $this->middleware('admin')->except(['index','show']);
    }
    
    public function index()
    {
        //
        // dd($cartcount
        // dd($cartcount);
        $products = Product::Paginate(6);
        return view('menu.products', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $this->middleware('member');
        return view('menu.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' =>'required|max:255',
            'slug' =>'required|unique:products',
            'price' =>'required|numeric|min_digits:3|min:500',
            // 'image' =>'image|file|max:1024',
            'image' =>'image|file',
            'category_id' => 'required',
            // 'body' =>'required'
        ]);
        
        $image = $request->file('image');
        $filename = date('Y-m-d').$image->getClientOriginalName();
        $path = 'image-product/'.$filename;

        Storage::disk('public')->put($path,file_get_contents($image));
        $validatedData['image'] = $filename;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100); //strip tags buat hilangin html
        Product::create($validatedData);
        return redirect('/menu')->with('success', 'New Menu Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $menu)
    {
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $menu)
    {
        // dd($menu->id);
        return view('menu.edit', [
            'product' => $menu, //buat datanya exist
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $menu)
    {
        //
        // dd($menu->image);
        $rules = [
            'name' =>'required|max:255',
            'price' =>'required|numeric|min_digits:3|min:500',
            'image' =>'image|file',
            'category_id' => 'required',
            // 'body' =>'required'
        ];

        // jika slug keubah dari name atau slug dikosongin, jadi gak ngevalidasi unik di tempat lain dulu
        if ($request->slug != $menu->slug) {
            $rules['slug'] ='required|unique:products';
        }

        $validatedData = $request->validate($rules);
        
        if ($request->file('image')) {
            if ($menu->image != null) {
                # code...
                $path = 'image-product/'.$menu->image;
                Storage::disk('public')->delete($path, $menu->image);
                // dd($menu->image);
            }
            $image = $request->file('image');
            $filename = date('Y-m-d').$image->getClientOriginalName();
            $path = 'image-product/'.$filename;
    
            Storage::disk('public')->put($path,file_get_contents($image));
            
            $validatedData['image'] = $filename;
        }
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100); //strip tags buat hilangin html
        Product::where('id', $menu->id)->update($validatedData);
        return redirect('/menu')->with('success', 'Menu Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $menu)
    {
        //
        if ($menu->image != null) {
            # code...
            $path = 'image-product/'.$menu->image;
            Storage::disk('public')->delete($path, $menu->image);
            // dd($menu->image);
        }
        
        Product::destroy($menu->id);
        return redirect('/menu')->with('success', 'Sucessfully deleted');
        
    }
    
    public function checkSlug(Request $request)
    {
        //
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name); //slugnya request dari name pada script
        return response()->json(['slug' => $slug]);
    }
}