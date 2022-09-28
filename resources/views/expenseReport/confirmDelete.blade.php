@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Report {{ $report->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col col-2">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" >Delete</button>
            </form>
    </div>
    
    
        
    
@endsection