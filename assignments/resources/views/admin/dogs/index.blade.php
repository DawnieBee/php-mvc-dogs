@extends('layouts/admin')

@section('content')

    <div class="card my-4">
        <div class="card-body">
            <div class="card-header">
                <h1 class="card-title">{{ $title }}</h1>
            </div>

            <div class="card-body">
                
                <p><a class="btn btn-success" href="/admin/dogs/create">Create New Record</a></p>
            

                <!-- output dogs list in a table  -->
                <table class="table table-striped">

                    <tr>

                        <th>Dog ID</th>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Category</th>
                        <th>Actions</th>
                        <th></th>

                    </tr>

                    @foreach($dogs as $dog)

                    <tr>
                        <td>{{ $dog->id }}</td>
                        <td>{{ $dog->name }}</td>
                        <td>{{ $dog->breed }}</td>
                        <td>{{ $dog->category->name }}</td>
                        <td><form action="/admin/dogs/{{ $dog->id }}/edit" method="put">
                            <input type="hidden" name="id" value="{{ $dog->id }}" />
                            <button type="submmit" class="btn btn-primary">edit</button>
                        </form></td>
                        <td><form class="delete" 
                            onSubmit="return confirm('Do you really want to delete this record?')"
                             action="/admin/dogs" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $dog->id }}"/>
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form></td>
                            
                    </tr>

                    @endforeach

                </table>
            
            </div>

        </div>
    </div>


@stop
    
