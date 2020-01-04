@extends('layouts.home')
@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                    <h3 class="text-center my-3">Tambah Product</h3>
                    <form action="{{route('supplier.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name"  name="company_name">
                        </div>
                        <div class="form-group">
                            <label for="addres">Address</label>
                            <input type="text" class="form-control" id="addres"  name="addres">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" id="phone"  name="phone">
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
