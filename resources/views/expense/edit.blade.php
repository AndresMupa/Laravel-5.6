@extends('layouts.base')
@section('content')
    <div>
        <div class="row">
            <div class="col">
                <h1>Edit Report {{ $report->id }} </h1>
            </div>
        </div>
            <div class="row">
                <div class="col ">
                    <a class="btn btn-secondary" href="/expense_reports">Back</a>
                    <br>
                </div>
                
            </div>
        <div class="row">
            <div class="col col-6 ">
                <table>
                    
                    <form action="/expense_reports/{{ $report-> id }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" 
                            placeholder="type a title">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                
                </table>
            </div>
        </div>
    </div>
            
        
    
@endsection