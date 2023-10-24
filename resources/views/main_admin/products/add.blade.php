@extends('layouts.admin.master')
@section('css')
    <style>

    </style>
@endsection

@section('content')
    <div class="card col-lg-11 col-md-11 col-sm-11">
        <form action="{{ route('addprod') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-header">
                <div class="card-title">ADD PRODUCTS</div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name product eng</label>
                        <input type="text" class="form-control" name="name_eng" placeholder="name product eng">
                        @error('name_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category eng </label>
                        <input type="text" class="form-control" name="Category_eng" placeholder="Category product eng">
                        @error('Category_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type product eng</label>
                        <input type="text" class="form-control" name="Type_eng" placeholder="Type product eng">
                        @error('Type_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Brand name</label>
                        <input type="text" class="form-control" name="Brand" placeholder="Brand name">
                        @error('Brand')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Size</label>
                        <input type="text" class="form-control" name="Size" placeholder="Size">
                        @error('Size')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color eng</label>
                        <input type="text" class="form-control" name="Color_eng" placeholder="color eng">
                        @error('Color_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material eng</label>
                        <input type="text" class="form-control" name="Material_eng" placeholder="Material_eng">
                        @error('Material_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender eng</label>
                        <input type="text" class="form-control" name="Gender_eng" placeholder="Gender_eng">
                        @error('Gender_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" name="Price" placeholder="Price">
                        @error('Price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="Quantity" placeholder="Quantity">
                        @error('Quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description eng</label>
                        <input type="text" class="form-control" name="Description_eng" placeholder="Description_eng">
                        @error('Description_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku eng</label>
                        <input type="text" class="form-control" name="sku_eng" placeholder="sku_eng">
                        @error('sku_eng')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name ar</label>
                        <input type="text" class="form-control" name="name_ar" placeholder="nom d'equipe">
                        @error('name_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category ar</label>
                        <input type="text" class="form-control" name="Category_ar" placeholder="Category_ar">
                        @error('Category_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type ar</label>
                        <input type="text" class="form-control" name="Type_ar" placeholder="Type_ar">
                        @error('Type_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color_ar</label>
                        <input type="text" class="form-control" name="Color_ar" placeholder="Color_ar">
                        @error('Color_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material ar</label>
                        <input type="text" class="form-control" name="Material_ar" placeholder="Material_ar">
                        @error('Material_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender ar</label>
                        <input type="text" class="form-control" name="Gender_ar" placeholder="Gender_ar">
                        @error('Gender_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description ar</label>
                        <input type="text" class="form-control" name="Description_ar" placeholder="Description_ar">
                        @error('Description_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku ar</label>
                        <input type="text" class="form-control" name="sku_ar" placeholder="sku_ar">
                        @error('sku_ar')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">name fr</label>
                        <input type="text" class="form-control" name="name_fr" placeholder="name_fr">
                        @error('name_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Category fr</label>
                        <input type="text" class="form-control" name="Category_fr" placeholder="Category_fr">
                        @error('Category_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Type fr</label>
                        <input type="text" class="form-control" name="Type_fr" placeholder="Type_fr">
                        @error('Type_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Color_fr</label>
                        <input type="text" class="form-control" name="Color_fr" placeholder="Color_fr">
                        @error('Color_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Material_fr</label>
                        <input type="text" class="form-control" name="Material_fr" placeholder="Material_fr">
                        @error('Material_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Gender_fr</label>
                        <input type="text" class="form-control" name="Gender_fr" placeholder="Gender_fr">
                        @error('Gender_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">Description_fr</label>
                        <input type="text" class="form-control" name="Description_fr" placeholder="Description_fr">
                        @error('Description_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">sku_fr</label>
                        <input type="text" class="form-control" name="sku_fr" placeholder="sku_fr">
                        @error('sku_fr')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">thumblnail_prod</label>
                        <input type="file" class="form-control" name="thumblnail_prod">
                        @error('thumblnail_prod')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-3 col-lg-4 col-sm-2">
                        <label class="form-label">images products</label>
                        <input type="file" class="form-control" name="images[]"multiple id="image">
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 col-sm-12 col-lg-12" id="previewContainer">

                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-rounded btn-primary" value="add product">
                </div>
        </form>
    </div>
    <script>
        // Get the input element
        const input = document.getElementById('image');

        // Add an event listener to listen for file selection
        input.addEventListener('change', function(event) {
            // Get the selected files
            const files = event.target.files;

            // Get the preview container element
            const previewContainer = document.getElementById('previewContainer');

            // Clear the previous previews
            previewContainer.innerHTML = '';

            // Create a new row element
            const row = document.createElement('div');
            row.classList.add('row');

            // Loop through the selected files
            for (let i = 0; i < files.length; i++) {
                // Create a new column element
                const col = document.createElement('div');
                col.classList.add('col-md-2');

                // Create a new image element
                const img = document.createElement('img');

                // Set the image source to the selected file
                img.src = URL.createObjectURL(files[i]);

                // Set some CSS styles to the image
                img.style.width = '100%';
                img.style.height = 'auto';
                img.style.marginBottom = '10px';

                // Append the image to the column
                col.appendChild(img);

                // Append the column to the row
                row.appendChild(col);
            }

            // Append the row to the preview container
            previewContainer.appendChild(row);
        });
    </script>
@endsection
<!-- Row -->
