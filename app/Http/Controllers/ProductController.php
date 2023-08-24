<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // public function index() {
    //     $cartcount = Cart::whereHas('transaction', function (Builder $query) {$query->where('status', 'like', 'unpaid');})->get();
    //     // dd($cartcount);
    //     dd('monyet');
    //     return view('menu', [
    //         'category_product' => Category::All(),
    //         'products' => Product::Paginate(6),
    //         'cartcount' => $cartcount
    //     ]);
    // }

    // public function showSlug(Product $product) {

    //     return view('product', [
    //         'product' => $product,
    //         // 'cart' => Cart::content()
    //     ]);
    // }
}