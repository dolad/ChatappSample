@extends('layouts.app')

@section('content')

<div class="container">
        <div class="vid-container">

                <div class="card rounded-circle">

                            <video preload="auto" autoplay muted loop id="vid" class="rounded-circle">
                                <source src="/videos/video1.mp4" type="video/mp4">
                                <source src="/video/video1.webm" type="video/webm">
                                        <p>Your browser doesn't support HTML5 video. Here is
                                        a <a href="/video/video1.mp4">link to the video</a> instead.</p>
                            </video>
                
                </div>


        </div>
        <div class="button-container">
                <a href="/intrologin" class="btn btn-success">Rediscover</a>
                
        </div>
</div>
@stop

<style>
    .container{
        flex-direction: column
    }
    .vid-container{
        display: flex;
        justify-content: center;
    
    }    
    #vid{
        width:600px;
        height: 600px;

    }
    button{
        padding-left: 10px;
        display:flex;
    }
    .button-container{
        display: flex-end;
        justify-content: center;
        align-items: center
    
    }


</style>

    <script>
    var video = document.getElementById("my-vid");
    var playing = false;

    setTimeout(function(){
     document.getElementById('vid').play();
 },1000);

/* var vid = document.getElementById("myVideo");
vid.autoplay = true;
vid.play(); */
</script>
