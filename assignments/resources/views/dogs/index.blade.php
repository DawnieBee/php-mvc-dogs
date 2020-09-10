@extends('layouts/main')

@section('content')

    @foreach($dogs as $dog)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="/images/{{ $dog->image }}" alt="{{ $dog->name }}" width="200" height="190" >
            <div class="card-body">
                <h3>{{ $dog->name }}</h3>
                <ul class="list-unstyled">
                    <li><strong>Breed: </strong>{{ $dog->breed }}</li>
                    <li><strong>Age: </strong>{{ $dog->age }}</li>
                    <li><strong>Category: </strong>{{ $dog->category->name }}</li>
                </ul>
                
              <p class="card-text">{{ $dog->abstract }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/dogs/{{ $dog->id }}/show" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
              </div>
            </div>
          </div>
        </div>


    @endforeach


@stop
    