<?php

namespace App\Http\Controllers;

use App\Product;
use App\Recipe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    public function index()
    {
        $resource = Recipe::all();
        return view('recipe.index', compact('resource'));
    }

    public function showRecipeForm()
    {
        return view('recipe.add');
    }

    public function addProductAndRecipe(Request $request)
    {
        return $request;
        // do validation.
        $validation = $this->validate($request, [
            'product' => 'string|required',
            'ingredient' => 'string|required',
            'quantity' => 'numeric|required',
        ]);
       
        // if validation not passed, redirect back with errors.
        $validation ?: redirect()->back()->withErrors($validation);

        // generate unique product codes.
        $productCode = '#' . strtoupper(randString(5));

        // add product.
        $productResource = new Product;
        $productResource->product_code = $productCode;
        $productResource->product_name = $request->product;
        $productResource->accountability = Auth::user()->name;

        if ($productResource->save()) // if product resource inserted, add recipe.
        {
            // add recipe.
            $recipeResource = new Recipe;
            $recipeResource->product_code = $productCode;
            $recipeResource->ingredient = $request->ingredient;
            $recipeResource->quantity = $request->quantity;
            $recipeResource->accountability = Auth::user()->name;
            
            if ($recipeResource->save()) // if recipe resource inserted, redirect back with message.
            {
                return redirect()->back()->with(['message' => 'Produk baru telah ditambahkan!']);
            }
        }
    }

    public function deleteProductAndRecipe($productCode)
    {
        // find the specified item by product code.
        $productResource = Product::find($productCode);

        if ($productResource->destroy()) { // if product is deleted, delete the recipe.
            $recipeResource = Recipe::find($productCode);
            if ($recipeResource->destroy()) { // if both has been deleted, redirect with message.
                return redirect()->back()->with(['message' => 'Produk dan komposisi berhasil dihapus']);
            }
        }
    }
}
