@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="first_name">First name</label>
                <input type="text" class="form-control" id="first_name" placeholder="First name">
            </div>
            <div class="form-group">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" id="last_name" placeholder="last Name">
            </div>
            <div class="form-group">
                <label for="salutation">Salutation</label>
                <input type="text" class="form-control" id="salutation" placeholder="Salutation">
            </div>
            <div class="form-group">
                <label for="years">Years</label>
                <input type="text" class="form-control" id="years" placeholder="Years">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Position">
            </div>
            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="text" class="form-control" id="salary" placeholder="Salary">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
