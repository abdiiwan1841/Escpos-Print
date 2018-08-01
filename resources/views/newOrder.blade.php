@extends('layouts.app')

@section('content')
    @guest
        <h1>Login to View</h1>
    @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                        {{--{{ session('status') }}--}}
                        {{--</div>--}}
                        {{--@endif--}}

                        <form method="POST" action="{{route("menu.store")}}" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="card-header">Create a New Order
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Table"> Table:</label>
                                    <input type="text" name="table_num" class="form-control">
                                </div>
                                <div class="row pull-right">
                                    <div class="col-md-12">
                                        <button type="reset"  class="btn btn-default">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endguest


@endsection
