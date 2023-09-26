<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_images;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
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
      // dd($request->all());
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
        'images' => 'required',
      ]);
      $imageName = time() . '_' . $item->getClientOriginalName();
      $item->storeAs('storage/images/thumblnails', $imageName);
      $save_url = 'storage/images/thumblnails' . $imageName;
      $product_id = product::insertGetId([
        'name_eng' => $request->name_eng,
        'Category_eng' => $request->Category_eng,
        'Type_eng' => $request->Type_eng,
        'Brand' => $request->Brand,
        'Size' => $request->Size,
        'Color_eng' => $request->Color_eng,
        'Material_eng' => $request->Material_eng,
        'Gender_eng' => $request->Gender_eng,
        'Price' => $request->Price,
        'Quantity' => $request->Quantity,
        'Description_eng' => $request->Description_eng,
        'sku_eng' => $request->sku_eng,
        'name_ar' => $request->name_ar,
        'Category_ar' => $request->Category_ar,
        'Type_ar' => $request->Type_ar,
        'Color_ar' => $request->Color_ar,
        'Material_ar' => $request->Material_ar,
        'Gender_ar' => $request->Gender_ar,
        'Description_ar' => $request->Description_ar,
        'sku_ar' => $request->sku_ar,
        'name_fr' => $request->name_fr,
        'Category_fr' => $request->Category_fr,
        'Type_fr' => $request->Type_fr,
        'Color_fr' => $request->Color_fr,
        'Material_fr' => $request->Material_fr,
        'Gender_fr' => $request->Gender_fr,
        'Description_fr' => $request->Description_fr,
        'sku_fr' => $request->sku_fr,
        'thumblnail_prod' =>$save_url,
        'images' =>count($request->file('images')),
      ]);
      $image = $request->file('images');
      foreach ($image as $item) {

        $imageName = time() . '_' . $item->getClientOriginalName();
        $item->storeAs('storage/images/', $imageName);
        $save_url = 'storage/images/' . $imageName;
        product_images::insert([
          'product_id' => $product_id,
          'image' => $save_url,
          'created_at' => Carbon::now(),
        ]);
      }
      return Redirect::to("admin/productslist")->with('success', 'le produit est ajouté avec succes');
    }
    public function showeditprod($id)
    {
      $products = product::find($id);
      $productImages = product_images::where('product_id', $id)->get();
      return view('main_admin.products.edit', compact('products', 'productImages'));
    }
    public function modifyprod(Request $request){
      if($request->file('thumblnail_prod')){
        $imageName = time() . '_' . $item->getClientOriginalName();
        $item->storeAs('storage/images/thumblnails', $imageName);
        $save_url = 'storage/images/thumblnails' . $imageName;
        $product_id = $request->id;
        product::findOrFail($product_id)->update([
        'name_eng' => $request->name_eng,
        'Category_eng' => $request->Category_eng,
        'Type_eng' => $request->Type_eng,
        'Brand' => $request->Brand,
        'Size' => $request->Size,
        'Color_eng' => $request->Color_eng,
        'Material_eng' => $request->Material_eng,
        'Gender_eng' => $request->Gender_eng,
        'Price' => $request->Price,
        'Quantity' => $request->Quantity,
        'Description_eng' => $request->Description_eng,
        'sku_eng' => $request->sku_eng,
        'name_ar' => $request->name_ar,
        'Category_ar' => $request->Category_ar,
        'Type_ar' => $request->Type_ar,
        'Color_ar' => $request->Color_ar,
        'Material_ar' => $request->Material_ar,
        'Gender_ar' => $request->Gender_ar,
        'Description_ar' => $request->Description_ar,
        'sku_ar' => $request->sku_ar,
        'name_fr' => $request->name_fr,
        'Category_fr' => $request->Category_fr,
        'Type_fr' => $request->Type_fr,
        'Color_fr' => $request->Color_fr,
        'Material_fr' => $request->Material_fr,
        'Gender_fr' => $request->Gender_fr,
        'Description_fr' => $request->Description_fr,
        'sku_fr' => $request->sku_fr,
        'thumblnail_prod' =>$save_url,
      ]);
    }
    else
    {
      $product_id = $request->id;
      product::findOrFail($product_id)->update([
        'name_eng' => $request->name_eng,
        'Category_eng' => $request->Category_eng,
        'Type_eng' => $request->Type_eng,
        'Brand' => $request->Brand,
        'Size' => $request->Size,
        'Color_eng' => $request->Color_eng,
        'Material_eng' => $request->Material_eng,
        'Gender_eng' => $request->Gender_eng,
        'Price' => $request->Price,
        'Quantity' => $request->Quantity,
        'Description_eng' => $request->Description_eng,
        'sku_eng' => $request->sku_eng,
        'name_ar' => $request->name_ar,
        'Category_ar' => $request->Category_ar,
        'Type_ar' => $request->Type_ar,
        'Color_ar' => $request->Color_ar,
        'Material_ar' => $request->Material_ar,
        'Gender_ar' => $request->Gender_ar,
        'Description_ar' => $request->Description_ar,
        'sku_ar' => $request->sku_ar,
        'name_fr' => $request->name_fr,
        'Category_fr' => $request->Category_fr,
        'Type_fr' => $request->Type_fr,
        'Color_fr' => $request->Color_fr,
        'Material_fr' => $request->Material_fr,
        'Gender_fr' => $request->Gender_fr,
        'Description_fr' => $request->Description_fr,
        'sku_fr' => $request->sku_fr,
      ]);
    }
      return Redirect::to("admin/productslist")->with('success', 'le produit est modifié avec succes');
    }
    public function modifyprodimgs(Request $request)
    {
    $imgs = $request->images;
    foreach ($imgs as $id => $img) {
      $image = product_images::findOrfail($id);
      unlink($image->image);
      $imageName = time() . '_' . $img->getClientOriginalName();
      $img->storeAs('storage/images/', $imageName);
      $save_url = 'upload/images/products' . $imageName;
      product_images::where('id', $id)->update([
        'image' => $save_url,
        'updated_at' => Carbon::now(),
      ]);
    }
    return Redirect::to("admin/productslist")->with('success', 'les images sont modifiée avec succes');
  }
  public function  deleteproduct($id)
  {
    $products = product::findOrFail($id);
    $images = product_images::where('product_id', $products)->get();
    foreach ($images as $imgs) {
      unlink($imgs->image);
      product_images::findOrfail($imgs)->delete();
    }
    product::findOrFail($id)->delete();
    return Redirect::to("admin/productslist")->with('success', 'le produit est supprimé avec succes');
  }
  public function imagesdelete($id)
  {
    $oldimg = product_images::findOrFail($id);
    unlink($oldimg->image);
    product_images::findOrFail($id)->delete();

    return Redirect::to("admin/productslist")->with('success', 'les images sont supprimé avec succes');
  }
}
