@extends('layouts.home')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h2 class="text-center my-3">Inventory</h2>
                <div class="my-2 float-right">
                    <a href="{{route('products.add')}}" class="btn btn-primary btn-sm">Add Product</a>
                    <a href="{{route('supplier.tambah')}}" class="btn btn-primary btn-sm">Add Supplier</a>
                </div><br><br>
                <div class="div">
                    @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}</div>
                    @endif
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>No. </th>
                        <th>Product Name</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($product as $row)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$row->product_name}}</th>
                            <th>{{$row->supplier->company_name}}</th>
                            <th>{{$row->supplier->addres}}</th>
                            <th>{{$row->supplier->phone}}</th>
                            <th>
                                <form action="{{route('products.destroy',$row->id)}}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <a href="{{route('products.edit',$row->id)}}" class="btn btn-info btn-sm">Edit</a>
                                    <button onclick="return confirm('yakin untuk dihapus?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </th>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada Data</td>
                        </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
