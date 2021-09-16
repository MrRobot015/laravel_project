<?php

namespace App\Http\Controllers;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\User;
class MarkterController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'subcategory'])->paginate(100);

        return inertia()->render('Dashboard/markters/index', [
            'products' => $products,
        ]);
    }
   
}
