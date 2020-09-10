@extends('layouts/main')

@section('content')

    <div class="mt-4 card mb-4">
        <img class="card-img-top" src="{{ $dog->image }}" alt="{{ $dog->name }}" width="500" height="400" />
        <div class="card-body">
            <!-- <h1 class="card-title">{{ $dog->name }}</h1> -->
            <div class="card-text">
                
                <ul class="list-unstyled">
                    <li><strong>Name : </strong>{{ $dog->name }}</li>
                    <li><strong>Age : </strong>{{ $dog->age }}</li>
                    <li><strong>Sex : </strong>{{ $dog->sex }}</li>
                    <li><strong>Category : </strong>{{ $dog->category->breed }}</li>
                    <li><strong>Size : </strong>{{ $dog->size }}</li>
                    <li><strong>Intact : </strong>{{ $dog->intact }}</li>
                    <li><strong>Description : </strong>{{ $dog->abstract }} {{ $dog->description }}</li>
                </ul>

            </div>
        </div>
    </div>

@stop