@extends('layouts.bizland')

@section('content')
    <section id="contact">

        <h1>Gadgets</h1>

        <table class="mt-5 table table-bordered">
            <thead>
                <tr>
                    <th>JUMLAH GADGET</th>
                    <th>JUMLAH AKTIF</th>
                    <th>JUMLAH TIDAK AKTIF</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <td>{{ $total }}</td>
                    <td>{{ $active }}</td>
                    <td>{{ $passive }}</td>
                </tr>
            </tbody>
        </table>

    </section>
@endsection
