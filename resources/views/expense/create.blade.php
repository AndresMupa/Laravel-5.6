@extends('layouts.base')
@section('content')
<div>
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Back</a>
        <br>
        </div>
        </div>
    <br>
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Description:</label>
                    <input type="text" class="form-control" id="description" name="description" 
                    placeholder="type a title" value="{{old ('title')}}">
                </div>
                <div class="form-group">
                    <label for="title">Amount:</label>
                    <input type="text" class="form-control" id="amount" name="amount" 
                    placeholder="type a title" value="{{old ('title')}}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
              
            </table>
        </div>
    </div>
</div>
@endsection