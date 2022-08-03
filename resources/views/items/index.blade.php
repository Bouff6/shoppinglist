@extends('layouts.app')

@section('content')

    <div class="container shadow-sm p-3 mb-3 bg-body rounded">
        <div class="panel-body">

            @include('common.errors')

            <form class="row g-3" action="{{ url('item') }}" method="post">
                    <div class="col-auto">
                        <label for="staticEmail2" class="control-label">Shopping Item</label>
                    </div>
                    <div class="col-auto">
                        <label for="name" class="control-label">Items</label>
                        <input type="text" class="form-control" name="name" id="name">

                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Add Item</button>
                        
                    </div>

                    {{ csrf_field() }}
            </form>
        </div>
    </div>

    @if ($items ->count())
        <div class="container shadow-sm p-3 mb-3 bg-body rounded">
            <div>
                Shopping List
            </div>

            <div class="shadow-none p-3 mb-2 bg-light rounded">
                <table class="table table-striped">
                    <thead>
                        <th>Shopping Items</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->name}}</td>
                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                <td>
                                    <form action="{{ url('item/' . $item->id) }}" method="post">
                                        <button type="submit" class="btn btn-danger mb-3">Remove</button>
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection