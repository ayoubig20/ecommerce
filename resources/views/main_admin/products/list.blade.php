@extends('layouts.admin.master')
@section('css')
    <style>
        h1,
        .c1 {
            text-align: center;
        }

        .bt1 {
            margin-left: 88%;
            margin-bottom: 5%;
        }
    </style>
@endsection
@section('content')
<div class="card col-lg-11 col-md-11 col-sm-11">
        <div class="card-header"style="text-align: center;">
        <h5 class="card-title">products list</h5>
        <div>
    <div class="card-body">
            
        <table class="table table-bordered mp-0 table-striped table-vcenter border-top text-nowrap mr-5">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>sku</th>
          <th>Price</th>
          <th>Category</th>
          <th>brand</th>
          <th>Material</th>
          <th>actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->name_eng }}</td>
            <td>{{ $product->sku_eng }}</td>
            <td>{{ $product->Price }}</td>
            <td>{{ $product->Category_eng }}</td>
            <td>{{ $product->Brand}}</td>
            <td>{{ $product->Material_eng }}</td>
            <td>
               <a href="{{url('/admin/showeditprod/'.$product->id)}}"> <i class="menu-icon mdi mdi-eye"></i>
               <a href=""><i class="menu-icon mdi mdi-delete"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
     </table>

    </div>

</div>
@endsection
<!-- Row -->