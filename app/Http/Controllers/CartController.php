<?php

namespace App\Http\Controllers;

use App\Models\TrTransaction;
use App\Models\TrTransactionDetail;
use Brick\Math\BigInteger;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cartProduct = $request->all();

        $cartSession = $request->session()->get('cart');

        if (isset($cartSession[$cartProduct['id']])) {
            $cartSession[$cartProduct['id']]['quantity'] += 1;
        } else {
            $cartSession[$cartProduct['id']] = $cartProduct;
            $cartSession[$cartProduct['id']]['quantity'] = 1;
        }

        $request->session()->put('cart', $cartSession);

        return redirect()->action([HomeController::class, 'index'])->with('isAddedToCart', 'Product added to cart successfully!');
    }

    public function getCart(Request $request)
    {
        $cartList = $request->session()->get('cart');

        return view('cart', compact('cartList'));
    }

    public function updateCart(Request $request)
    {
        $cartProduct = $request->all();

        $cartSession = $request->session()->get('cart');

        $cartSession[$cartProduct['id']]['quantity'] = $cartProduct['txtQuantity'];
        $request->session()->put('cart', $cartSession);
        return redirect()->back();
    }

    public function removeCart(Request $request, $id)
    {
        $cartSession = $request->session()->get('cart');
        unset($cartSession[$id]);
        $request->session()->put('cart', $cartSession);
        return redirect()->back();
    }
}
