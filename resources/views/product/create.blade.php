@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Add product infomation</h2>
            
            <form action="{{ route('product.store') }}"  method="post">
                @csrf
                <div class="form-group">
                    <label for="owner">Owner</label>
                    <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="owner" name="owner" readonly>

                </div>
                <div class="form-group">
                    <label for="name">Product_name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="price">Product_price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="amount">Product_amount</label>
                    <input type="text" class="form-control" id="amount" name="amount">
                </div>
                <button type="ADD_to_DB_porduct" class="btn btn-primary">ADD</button>
            </form>
        </div>
    </div>
</div>
@endsection