@extends('layouts.admin.master')

@section('content')
<div class="card col-lg-10 col-md-10 col-sm-10 mx-4 my-4">
  <div class="card-header bg-dark"style="text-align: center;color:#F0FFFF">
    Product List
  </div>
  <div class="card-body table-bordered"style="background-color:#F8F6F4">
    <table class="table Secondary">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>sku</th>
          <th>Price</th>
          <th>Category</th>
          <th>brand</th>
          <th>Color</th>
          <th>Material</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->name_eng }}</td>
            <td>{{ $product->sku_eng }}</td>
            <td>{{ $product->Price_eng }}</td>
            <td>{{ $product->Category_eng }}</td>
            <td>{{ $product->Brand_eng }}</td>
            <td>{{ $product->Color_eng }}</td>
            <td>{{ $product->Material_eng }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection