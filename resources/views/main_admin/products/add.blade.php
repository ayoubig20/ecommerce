@extends('layouts.admin.master')
@section('css')
<style>

</style>
@endsection

@section('content')
<div class="card col-lg-11 col-md-11 col-sm-11">
    <form action="{{route('addprod')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <div class="card-title">ADD PRODUCTS</div>
            
        </div>
        <div class="card-body">
           <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name product eng</label>
                        <input type="text" class="form-control" name="name_eng" placeholder="name product eng">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category eng </label>
                        <input type="text" class="form-control" name="Category_eng" placeholder="Category product eng">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type product eng</label>
                        <input type="text" class="form-control" name="Type_eng" placeholder="Type product eng">
                    </div>
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Brand name</label>
                        <input type="text" class="form-control"  name="Brand" placeholder="Brand name">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Size</label>
                        <input type="text" class="form-control" name="Size" placeholder="Size">
                    </div> 
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color eng</label>
                        <input type="text" class="form-control" name="Color_eng" placeholder="color eng">
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material eng</label>
                        <input type="text" class="form-control" name="Material_eng" placeholder="Material_eng">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender eng</label>
                        <input type="text" class="form-control" name="Gender_eng" placeholder="Gender_eng">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="Price" placeholder="Price">
                    </div>
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="form-control" name="Quantity" placeholder="Quantity">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description eng</label>
                        <input type="text" class="form-control" name="Description_eng" placeholder="Description_eng">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku eng</label>
                        <input type="text" class="form-control" name="sku_eng" placeholder="sku_eng">
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name ar</label>
                        <input type="text" class="form-control" name="nom_equipe" placeholder="nom d'equipe">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category ar</label>
                        <input type="text" class="form-control" name="Category_ar" placeholder="Category_ar">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type ar</label>
                        <input type="text" class="form-control" name="Type_ar" placeholder="Type_ar">
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color_ar</label>
                        <input type="text" class="form-control" name="Color_ar" placeholder="Color_ar">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material ar</label>
                        <input type="text" class="form-control" name="Material_ar" placeholder="Material_ar">
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender ar</label>
                        <input type="text" class="form-control" name="Gender_ar" placeholder="Gender_ar">
                    </div> 
            </div>
            <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description ar</label>
                        <input type="text" class="form-control" name="Description_ar" placeholder="Description_ar">
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku ar</label>
                        <input type="text" class="form-control" name="sku_ar" placeholder="sku_ar">
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name fr</label>
                        <input type="text" class="form-control" name="name_fr" placeholder="name_fr">
                    </div>  
            </div> 
            <div class="row">         
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category fr</label>
                        <input type="text" class="form-control" name="Category_fr" placeholder="Category_fr">
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type fr</label>
                        <input type="text" class="form-control" name="Type_fr" placeholder="Type_fr">
                    </div>                       
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color_fr</label>
                        <input type="text" class="form-control" name="Color_fr" placeholder="Color_fr">
                    </div>
            </div>  
            <div class="row">          
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material_fr</label>
                        <input type="text" class="form-control" name="Material_fr" placeholder="Material_fr">
                    </div>            
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender_fr</label>
                        <input type="text" class="form-control" name="Gender_fr" placeholder="Gender_fr">
                    </div>           
                     <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description_fr</label>
                        <input type="text" class="form-control" name="Description_fr" placeholder="Description_fr">
                    </div> 
            </div>
            <div class="row">           
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku_fr</label>
                        <input type="text" class="form-control" name="sku_fr" placeholder="sku_fr">
                    </div>   
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">thumblnail_prod</label>
                        <input type="file" class="form-control" name="thumblnail_prod">
                    </div>
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">images products</label>
                        <input type="file" class="form-control" name="images[]"multiple id="image">
                    <div>
            </div><br><br><br>
            <div class="row">
                    <div class="col-md-6" id="previewContainer">

                    </div>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-rounded btn-primary" value="add product">
        </div>
    </form>
</div>
    <script>
  $(document).ready(function() {
    $('#image').change(function(e) {
        var files = e.target.files;
        var previewContainer = $('#previewContainer');
        previewContainer.empty(); // Clear previous previews

        for (var i = 0; i < files.length; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imageSrc = e.target.result;
                var imgElement = $('<img>').attr('src', imageSrc).css('width', '100px');
                previewContainer.append(imgElement);
            };
            reader.readAsDataURL(files[i]);
        }
        previewContainer.css('display', 'flex');
    });
});
    </script>
@endsection
<!-- Row --> 
