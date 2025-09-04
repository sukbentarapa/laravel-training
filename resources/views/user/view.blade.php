@extends('layouts.bizland')

@section('content')
    <section>

        <h1>Gadget View : {{ $user->name }}</h1>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>NRIC</th>
                <td>{{ $user->nric }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>

             <tr>
                <th>Total Gadgets</th>
                <td>{{ $user->gadgets->count() }} Devices</td>
            </tr>

            <tr>
                <th>Total Gadgets Active</th>
                <td>{{ $active }}</td>
            </tr>

            <tr>
                <th>Total Gadgets Inactive</th>
                <td>{{ $inactive }}</td>
            </tr>

             <tr>
                <th>Gadgets List</th>
                <td>
                    <ol>
                        @foreach ($user->gadgets as $gadget)
                            <li>{{ $gadget->name }} ({{ $gadget->serial_number }})</li>
                        @endforeach
                    </ol>
                </td>
            </tr>


        </table>


    </section>
@endsection
