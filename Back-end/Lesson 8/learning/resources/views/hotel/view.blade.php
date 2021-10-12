@extends('hotel.layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/hotel.css') }}">
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>Type</th>
                <th>Floor</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>{{$room['code']}}</td>
                <td>{{$room['type']}}</td>
                <td>{{$room['floor']}}</td>
                <td>{{$room['price']}}</td>
            </tr>
        </tbody>
    </table>
@endsection