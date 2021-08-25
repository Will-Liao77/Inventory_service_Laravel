@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @auth
            <h2>{{ Auth::user()->name }}'s Product</h2>
            <table style="border:3px #cccccc solid;" cellpadding="10" border='10' width='800px'>
                <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach (App\Models\Product::where('owner','admin')->get() as $post)
                        <td><a href="{{ route('product.edit', [$post->id]) }}">{{ $post->name }}</a></td>
                        <td>{{ $post->price }}</td>
                        <td align="center">{{ $post->amount }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endauth
        </div>
    </div>
</div>
@endsection
