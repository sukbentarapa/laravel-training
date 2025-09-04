@extends('layouts.bizland')

@section('content')
    <section id="contact">

        <h1>Gadget : {{ $gadget->name }}</h1>

        <table class="mt-5 table table-bordered">
            <tr>
                <td>Name</td>
                <td>{{ $gadget->name }}</td>
            </tr>
            <tr>
                <td>Serial Number</td>
                <td>{{ $gadget->serial_number }}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{ $gadget->phone_number }}</td>
            </tr>
        </table>

    </section>
@endsection
