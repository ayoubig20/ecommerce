@extends('layouts.admin.master')
@section('css')
<style>

</style>
@endsection

@section('content')
<div class="card col-lg-11 col-md-11 col-sm-11">
    <form action="{{route('modifyprod')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $products->id }}">
        <div class="card-header">
            <div class="card-title">Edit PRODUCTS</div>
            
        </div>
        <div class="card-body">
           <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name product eng</label>
                        <input type="text" class="form-control" name="name_eng" value="{{$products->name_eng}}">
                    @error('name_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category eng </label>
                        <input type="text" class="form-control" name="Category_eng" value="{{$products->Category_eng}}">
                    @error('Category_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type product eng</label>
                        <input type="text" class="form-control" name="Type_eng" value="{{$products->Type_eng}}">
                    @error('Type_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Brand name</label>
                        <input type="text" class="form-control"  name="Brand" value="{{$products->Brand}}">
                    @error('Brand')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Size</label>
                        <input type="text" class="form-control" name="Size" value="{{$products->Size}}">
                    @error('Size')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color eng</label>
                        <input type="text" class="form-control" name="Color_eng" value="{{$products->Color_eng}}">
                    @error('Color_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material eng</label>
                        <input type="text" class="form-control" name="Material_eng" value="{{$products->Material_eng}}">
                    @error('Material_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender eng</label>
                        <input type="text" class="form-control" name="Gender_eng" value="{{$products->Gender_eng}}">
                    @error('Gender_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="Price" value="{{$products->Price}}">
                    @error('Price')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="Quantity" value="{{$products->Quantity}}">
                    @error('Quantity')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description eng</label>
                        <input type="text" class="form-control" name="Description_eng" value="{{$products->Description_eng}}">
                    @error('Description_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku eng</label>
                        <input type="text" class="form-control" name="sku_eng" value="{{$products->sku_eng}}">
                    @error('sku_eng')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name ar</label>
                        <input type="text" class="form-control" name="name_ar" value="{{$products->name_ar}}">
                    @error('name_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category ar</label>
                        <input type="text" class="form-control" name="Category_ar" value="{{$products->Category_ar}}">
                    @error('Category_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type ar</label>
                        <input type="text" class="form-control" name="Type_ar" value="{{$products->Type_ar}}">
                    @error('Type_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color_ar</label>
                        <input type="text" class="form-control" name="Color_ar" value="{{$products->Color_ar}}">
                    @error('Color_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material ar</label>
                        <input type="text" class="form-control" name="Material_ar" value="{{$products->Material_ar}}">
                    @error('Material_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender ar</label>
                        <input type="text" class="form-control" name="Gender_ar" value="{{$products->Gender_ar}}">
                    @error('Gender_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description ar</label>
                        <input type="text" class="form-control" name="Description_ar" value="{{$products->Description_ar}}">
                    @error('Description_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku ar</label>
                        <input type="text" class="form-control" name="sku_ar" value="{{$products->sku_ar}}">
                    @error('sku_ar')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name fr</label>
                        <input type="text" class="form-control" name="name_fr" value="{{$products->name_fr}}">
                    @error('name_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>  
            </div> 
            <div class="row">         
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category fr</label>
                        <input type="text" class="form-control" name="Category_fr" value="{{$products->Category_fr}}">
                    @error('Category_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type fr</label>
                        <input type="text" class="form-control" name="Type_fr" value="{{$products->Type_fr}}">
                    @error('Type_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>                       
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color_fr</label>
                        <input type="text" class="form-control" name="Color_fr" value="{{$products->Color_fr}}">
                    @error('Color_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
            </div>  
            <div class="row">          
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material_fr</label>
                        <input type="text" class="form-control" name="Material_fr" value="{{$products->Material_fr}}">
                    @error('Material_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender_fr</label>
                        <input type="text" class="form-control" name="Gender_fr" value="{{$products->Gender_fr}}">
                    @error('Gender_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>           
                     <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description_fr</label>
                        <input type="text" class="form-control" name="Description_fr" value="{{$products->Description_fr}}">
                    @error('Description_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div> 
            </div>
            <div class="row">           
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku_fr</label>
                        <input type="text" class="form-control" name="sku_fr" value="{{$products->sku_fr}}">
                    @error('sku_fr')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>   
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">thumblnail_prod</label>
                        <input type="file" class="form-control" name="thumblnail_prod">
                    @error('thumblnail_prod')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    </div>
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">images products</label>
                        <input type="file" class="form-control" name="images[]"multiple id="image">
                    @error('images')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                        <div>
            </div><br><br><br>
            <div class="row">
                    <div class="col-md-6" id="previewContainer">
                    <img src="{{asset($products->image)}}" class="card-img-top" style="width:330px; height:150px;">
                    </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-rounded btn-primary" value="add product">
        </div>
    </form>
</div>
<div class="card col-md-12 col-sm-12 mt-5">
    <div class="card-header">
        <div class="card-title">Edite images products</div>
    </div>
    <div class="card-body">
        <form action="{{route('modifyprodimgs')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row row-sm">
                @foreach($productImages as $imgs)
                <div>
                    <div class=" card col-md-12">
                        <img src="{{asset($imgs->image)}}" class="card-img-top" style="width:330px; height:150px;">
                        <br>
                        <div class=" row justify-content-center">
                            <h5 class="col-md-3 ">
                                <a href=" {{route('imagesdelete',$imgs->id)}}" class="btn btn-sm btn-danger"
                                    title="delete image"><i class="fa fa-trash"></i></a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <input type="file" class="custom-file-input" name="images[{{$imgs->id}}]">
                                <label class="custom-file-label" for="images[{{$imgs->id}}]">Choisire Images</label>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-xs-right">
                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="modifier image">
            </div>
        </form>

    </div>
</div>
@endsection
<!-- Row --> 
