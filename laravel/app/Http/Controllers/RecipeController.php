<?php

namespace App\Http\Controllers;

use App\Product;
use App\Recipe;

use DB;
use Auth;
use Validator;

use Carbon\Carbon;
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

        // Generate unique product code for each post
        $product_code = '#' . strtoupper(substr(md5(microtime()),rand(0,26),5));

        // add product.
        $productResource = new Product;
        $productResource->product_code = $product_code;
        $productResource->product_name = $request->product;
        $productResource->accountability = Auth::user()->name;

        if ($productResource->save()) // if product resource inserted, add recipe.
        {
            // add recipe.
            $recipe = [];
            foreach ($request->ingredients as $ingredient) {
                $recipe[] = [
                    'product_code' => $product_code,
                    'ingredient' => $ingredient['ingredient'],
                    'quantity' => $ingredient['quantity'],
                    'accountability' => Auth::user()->name,
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString()
                ];
            }

            $storeRecipe = DB::table('recipes')->insert($recipe);
            
            if ($storeRecipe === true) // if recipe resource inserted, redirect back with message.
            {
                return 'Produk baru telah ditambahkan!';
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
