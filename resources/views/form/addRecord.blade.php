@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/store/@if (isset($id)){{$id}} @endif"  method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="first_name">First name</label>

                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name" @if (isset($dataById['first_name'])) value="{{$dataById['first_name']}}" @endif required>
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last Name" @if (isset($dataById['last_name'])) value="{{$dataById['last_name']}}" @endif required>
            </div>
            <div class="form-group">
                <label for="salutation">Salutation</label>
                <input type="text" class="form-control" name="salutation" id="salutation" placeholder="Salutation" @if (isset($dataById['salutation'])) value="{{$dataById['salutation']}}" @endif required>
            </div>
            <div class="form-group">
                <label for="years">Years</label>
                <input type="text" class="form-control" name="years" id="years" placeholder="Years" @if (isset($dataById['years'])) value="{{$dataById['years']}}" @endif required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" id="position" placeholder="Position" @if (isset($dataById['position'])) value="{{$dataById['position']}}" @endif required>
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary" @if (isset($dataById['salary'])) value="{{$dataById['salary']}}" @endif required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
