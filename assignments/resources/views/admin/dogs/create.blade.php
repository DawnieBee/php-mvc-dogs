@extends('layouts/admin')

@section('content')

<div class="card my-4">
    
    <div class="card-header">
        <h1 class="card-title">{{ $title }}</h1>
    </div>

    <div class="card-body">
        

        <form class="form" action="/admin/dogs/create" method="post" enctype="multipart/form-data">

            <div class="form-group required">
                <label for="name" >Name</label>
                <input class="form-control" id="name" name="name" value="{{ old('name') }}" />
                @error('name')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group required">
                <label for="age" class="control-label">Age</label>
                <input class="form-control" id="age" name="age" value="{{ old('age') }}" />
                @error('age')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image" class="control-label">Image</label>
                <input type="file" class="form-control-file" name="image" value="{{ old('image') }}" />
                @error('image')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group required" >
                <label for="sex" class="control-label">Sex</label>
                <input class="form-control" id="sex" name="sex" placeholder="enter 'male' or 'female'" value="{{ old('sex') }}" />
                @error('sex')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="breed" class="control-label">Breed</label>
                <input class="form-control" id="breed" name="breed"  placeholder="descriptive breed ie: 'Brindle Beagle' or 'German Shepherd'"value="{{ old('breed') }}" />
                @error('breed')
                    <span class="error"  style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group required">
                <label for="size" class="control-label">Size</label>
                <input class="form-control" id="size" name="size" placeholder="Small, Medium, or Large" value="{{ old('size') }}" />
                @error('size')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group required">
                <label for="intact" class="control-label">Intact</label><br />
                <input 
                    @if(old('intact') == 'yes')
                        checked
                    @endif 
                    type="radio" name="intact" value="yes" />&nbsp; Yes &nbsp;&nbsp;
                <input 
                    @if(old('intact') == 'no')
                        checked
                    @endif 
                    type="radio" name="intact" value="no" />&nbsp; No 
                @error('intact')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group required">
                <label for="abstract" class="control-label">Abstract</label>
                <textarea class="form-control" id="abstract" rows="3" name="abstract">{{ old('abstract') }}</textarea>
                @error('abstract')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group required">
                <label for="description" class="control-label">Description</label>
                <textarea class="form-control" id="description" rows="6" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <span class="error" style="color:#900;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category_id" class="control-label">Category</label><br />
                <select class="form-control" name="category_id">
                    <option value="">Select a Category</option>
                    @foreach($categories as $cat)
                        <option 
                            @if($cat->id == old('category_id')) 
                                selected 
                            @endif 
                            value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="error" style="color:#900;"> {{ $message }}</span>
                @enderror
            </div>

            @csrf

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </form>
    </div>
</div>

@stop