@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="text-center" >
            <h1>Create New Note</h1>
        </div>

    <form method="POST" action="{{ route('create.note')}}" enctype="multipart/form-data">
        {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail">Title</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
                    
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea class= "form-control" name="body" cols="36" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>
    </div>
@endsection