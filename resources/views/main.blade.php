<a onclick="" class="btn btn-default pull-right">Export/Import</a>




<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Salutation</th>
                        <th>Years</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->first_name}}</td>
                            <td>{{$item->last_name}}</td>
                            <td>{{$item->salutation}}</td>
                            <td>{{$item->years}}</td>
                            <td>{{$item->position}}</td>
                            <td>{{$item->salary}}</td>
                            <td>
                                <a href="/addRecord/{{$item->id}}"><button type="button" class="btn btn-primary">Update</button></a>
                                <a href="/home/{{$item->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="addRecord"><button type="button" class="btn btn-success">Add new data</button></a>
    </div>
</div>