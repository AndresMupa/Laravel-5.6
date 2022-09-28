@extends('layouts.base')

@section('content')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection
    
    <div class="card  ">  
        <h1>Report: {{ $report->title }}</h1>          
    </div>
            


    <table class="table table-striped" id="Gastos">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Concepto</th>
                <th>Fecha</th>
                <th>valor</th>
            </tr>
        </thead>

        <tbody>
                @foreach($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->id }}</td>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->created_at }}</td>
                        <td>{{ $expense->amount }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>

<div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">Nuevo reporte</a>
            <th><a class="btn btn-secondary" href="/expense_reports">Atras</a></th>
        </div>
    </div>





@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('Gastos').DataTable();
    </script>
@endsection