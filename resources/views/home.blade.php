@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Simple table</h2>
            <table  style="border:3px #cccccc solid;" cellpadding="10" border='10'>
            <tr>
                <td>Hi, I'm your first cell.</td>
                <td>I'm your second cell.</td>
                <td>I'm your third cell.</td>
                <td>I'm your fourth cell.</td>
            </tr>
            <tr>
                <td>Second row, first cell.</td>
                <td>Cell 2.</td>
                <td>Cell 3.</td>
                <td>Cell 4.</td>
            </tr>
            </table>
        </div>
    </div>
</div>
@endsection
