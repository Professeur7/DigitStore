<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function productDetails(Produits $product)
    {
        return view('frontend.products.show', compact('product'));
    }
}
