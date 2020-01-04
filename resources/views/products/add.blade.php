@extends('layouts.home')
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                    <h3 class="text-center my-3">Tambah Product</h3>
                    <form action="{{route('products.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="product_name">Nama Product</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Masukkan Product" name="product_name">
                        </div>
                        <div class="form-group">
                            <label for="supplier_id">Supplier</label>
                            <select name="supplier_id" id="" class="form-control">
                                <option value="">Pilih</option>
                                @foreach ($supplier as $row)
                                    <option value="{{$row->id}}" {{old('company_name') == $row->id ? 'selected' : ''}}>{{$row->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                        </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
