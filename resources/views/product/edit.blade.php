@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>edit product</h2>

            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    Updated Successfully!
                </div>
            @endif

            <form action="{{ route('product.update', [$product->id]) }}"  method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="owner">Owner</label>
                    <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="owner" name="owner" readonly>

                </div>
                <div class="form-group">
                    <label for="name">Product_name</label>
                    <input type="text" value="{{ old('name',$product->name) }}" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="price">Product_price</label>
                    <input type="text" value="{{ old('price',$product->price) }}" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="amount">Product_amount</label>
                    <input type="text" value="{{ old('amount',$product->amount) }}" class="form-control" id="amount" name="amount">
                </div>
                <button type="ADD_to_DB_porduct" class="btn btn-success">Update</button>
            </form>

            <hr>
            <form action="{{ route('product.destroy', [$product->id]) }}" method='post' onSubmit="return confirm('Are you sure to DELETE this product?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete this product</button>
            </form>
        </div>
    </div>
</div>
@endsection