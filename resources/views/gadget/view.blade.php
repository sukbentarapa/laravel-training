@extends('layouts.bizland')

@section('content')
    <section>

        <h1>Gadget View : {{ $gadget->name }}</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $gadget->id }}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $gadget->name }}</td>
            </tr>

            <tr>
                <th>Phone Number</th>
                <td>{{ $gadget->phone_number }}</td>
            </tr>

            <tr>
                <th>Serial Number</th>
                <td>{{ $gadget->serial_number }}</td>
            </tr>

            <tr>
                <th>Brand</th>
                <td>{{ $gadget->brand }}</td>
            </tr>

            <tr>
                <th>Owner</th>
                <td></td>
            </tr>
        </table>


    </section>
@endsection
