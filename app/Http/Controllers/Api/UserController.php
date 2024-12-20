<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class UserController extends Controller
{
    public function index()
    {
        $paginate = Product::paginate(3);
        return response()->json([
            'success' => true,
            'products' => $paginate
        ]);
    }
    public function show($slug) {
        $product = Product::where('slug', $slug)->first();
        return response()->json([
            'success' => true,
            'product' => $product
        ]);
    }
}
