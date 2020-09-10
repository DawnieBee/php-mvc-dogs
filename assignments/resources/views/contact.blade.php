@extends('layouts/main')

@section('content')

    <div class="container">
        <div class="mt-4 card mb-4">
            <img class="card-img-top" src="/images/dog_header.jpg" alt="happy dogs">
            <div class="card-body">
                <div class="card-text">
                    <form>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <label for="Textarea">Comment</label>
                            <textarea class="form-control" id="Textarea" rows="6"></textarea>
                        </div>                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@stop