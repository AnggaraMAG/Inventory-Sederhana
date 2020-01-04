@extends('layouts.home')
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                    <h3 class="text-center my-3">Edit Product</h3>
                    <form action="{{route('products.update',$product->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="product_name">Nama Product</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Masukkan Product" name="product_name" value="{{$product->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="supplier_id">Supplier</label>
                            <select name="supplier_id" id="" class="form-control">
                                <option value="">Pilih</option>
                                @foreach ($supplier as $row)
                                    <option value="{{$row->id}}" {{$product->supplier_id == $row->id? 'selected':''}}>{{$row->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
