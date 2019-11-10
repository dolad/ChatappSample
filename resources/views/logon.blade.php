@extends('layouts.app')

@section('content')

<div class="container">

        <div class=" containers">
                <div class="">
                    <h4>New member Registration</h4>
                    <a href="{{route('register')}}"></a>
                </div>
        </div>
        <div class="containers dell">
            <div class="">
                    <h4 class="">Member Login here<h4>
            </div>
               
                <a href=""></a>
        </div>


</div>


@stop

<style>
.container{
    
}
.containers{
    position: relative;
    height: 300px;
    width:300px;
    cursor: pointer;
    border: 2px solid #eeee;
    margin-left:300px;
    padding-left: 10pxpx
}
.dell{
    margin-top: 50px
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

        $(document).delegate(".containers", "click", function() {
        $(this).animate({
            
            left:'250px',
            opacity:'0.5',
               
            }),
        window.location = $(this).find("a").attr("href");

      });

});


</script>