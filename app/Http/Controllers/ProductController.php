<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function list(){
        $products=Product::all();
        return view('main_admin.products.list',compact('products'));
    }
    public function showprod(){
        return view('main_admin.products.add');
    }
    public function addprod(Request $request){
    $validated = $request->validate([
        'name_eng' => 'required',
        'Category_eng' => 'required',
        'Type_eng' => 'required',
        'Brand' => 'required',
        'Size' => 'required',
        'Color_eng' => 'required',
        'Material_eng' => 'required',
        'Gender_eng' => 'required',
        'Price' => 'required',
        'Quantity' => 'required',
        'Description_eng' => 'required',
        'sku_eng' => 'required',
        'name_ar' => 'required',
        'Category_ar' => 'required',
        'Type_ar' => 'required',
        'Color_ar' => 'required',
        'Material_ar' => 'required',
        'Gender_ar' => 'required',
        'Description_ar' => 'required',
        'sku_ar' => 'required',
        'name_fr' => 'required',
        'Category_fr' => 'required',
        'Type_fr' => 'required',
        'Color_fr' => 'required',
        'Material_fr' => 'required',
        'Gender_fr' => 'required',
        'Description_fr' => 'required',
        'sku_fr' => 'required',
        'thumblnail_prod' => 'required',
      ]);
      $product_id = product::insertGetId([
        'name_eng' => $request->Titre,
        'Category_eng' => $request->type_id,
        'Type_eng' => $request->id_promoteur,
        'Brand' => $request->id_ville,
        'Size' => $request->id_quartier,
        'Color_eng' => $request->Adresse,
        'Material_eng' => $request->extras,
        'Gender_eng' => $request->Position,
        'Price' => $request->surface,
        'Quantity' => $request->nbr_chambres,
        'Description_eng' => $request->prix,
        'sku_eng' => $request->Status,
        'name_ar' => $request->is_dispo,
        'Category_ar' => $request->is_sponsorised,
        'Type_ar' => $request->vues,
        'Material_ar' => $request->vues,
        'Gender_ar' => $request->vues,
        'Description_ar' => $request->vues,
        'sku_ar' => $request->vues,
        'name_fr' => $request->vues,
        'Category_fr' => $request->vues,
        'Type_fr' => $request->vues,
        'Color_fr' => $request->vues,
        'Material_fr' => $request->vues,
        'Gender_fr' => $request->vues,
        'Description_fr' => $request->vues,
        'sku_fr' => $request->vues,
        'thumblnail_prod' => $request->vues,
      ]);
      $image = $request->file('images');
      foreach ($image as $item) {
        $name_gen = hexdec(uniqid()) . '.' . $item->getClientOriginalExtension();
        Image::make($item)->resize(500, 500)->save('upload/annonces/' . $name_gen);
        $save_url = 'upload/images/products' . $name_gen;
        $images = $save_url;
        AnnonceImage::insert([
          'product_id' => $product_id,
          'image' => $images,
          'created_at' => Carbon::now(),
        ]);
      }
      return Redirect::to("admin/productslist")->with('success', 'le produit est ajouté avec succes');
    }
}
