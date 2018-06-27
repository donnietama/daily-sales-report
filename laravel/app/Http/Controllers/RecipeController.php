<?php

namespace App\Http\Controllers;

use App\Product;
use App\Recipe;

use Validator;
use Auth;

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
        // do validation.
        $validation = Validator::make($request->all(), [
            'product' => 'string|required',
            'ingredients.*.ingredient' => 'string|required',
            'ingredients.*.quantity' => 'numeric|required',
        ]);
       
        // if validation not passed, redirect back with errors.
        $validation ?: redirect()->back()->withErrors($validation);

        // add product.
        $productResource = new Product;
        $productResource->product_code = $request->product_code;
        $productResource->product_name = $request->product;
        $productResource->accountability = Auth::user()->name;

        if ($productResource->save()) // if product resource inserted, add recipe.
        {
            // add recipe.
            foreach ($request->ingredients as $recipe) {
                $recipeResource = new Recipe;
                $recipeResource->product_code = $request->product_code;
                $recipeResource->accountability = Auth::user()->name;
                $recipeResource->ingredient = $recipe['ingredient'];
                $recipeResource->quantity = $recipe['quantity'];
            }
            
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
