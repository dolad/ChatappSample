@extends('layouts.app')

@section('content')


<div class="container col-md-6 col-md-offset">
    <div class="jumbotron">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
           
        </div>
        @endif
    
                <div class="card">
                        <form action="{{route('edituser')}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}
                        
                                <div class="form-group">
                                            <label for="featured">Image</label>
                                            <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label for="featured">Contact</label>
                                    <input type="text" name="contact" class="form-control">
                                </div>
                                
                                <div class="form group pt-5 text-center">
                                        <button href="" class="btn btn-success"  type="submit">Store Post</button>
                                </div>


                    </form>
                 </div>
    </div>
</div>

@stop