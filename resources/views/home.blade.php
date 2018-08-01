@extends('layouts.app')

@section('content')
    <h3 class="text-center display-4 bg-info">Orders</h3>
<table class="table">
    <thead>
    <td>Table Number</td>
    <td>Ordered Time</td>
    <td>Ordered Items</td>
    <td>Comments</td>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->table_num}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->order}}</td>
                <td>{{$order->comments}}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection
