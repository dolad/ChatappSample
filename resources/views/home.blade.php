@extends('layouts.app')

@section('content')

<div class="flip-box">
    <div class="">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-sm-12">
                                <div class="card" id="app">
                                    <div class="card-header flip">
                                    <div class="col-sm-10">
                                            <p>My Messenger</p>
                                        </div>
                                        <div class=" col-sm-2">
                                                <button type="button" class="btn btn-success flip" data-toggle="modal" data-target="#exampleModal">
                                                        Maps here
                                                      </button>
                                            <maps/>
                                        </div>
                                    </div>

                                
                                    <div class="card-body" slot='front' >
                                            <chat-app :user="{{ auth()->user() }}"></chat-app>
                                            </div>
                                            
                                        {{-- <router-view></router-view> --}}
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-sm-12">
                                    <div class="card" id="app">
                                        <div class="card-header">
                                        <div class="col-sm-10">
                                                <p>Back place</p>
                                            </div>
                                            
                                                <maps/>
                                                
                                            </div>
                                        </div>
                
                                        <div class="card-body">
                                               
                                                
                                           
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>


    </div>
</div>
@endsection
<style>
.card{
    display: inline-flex;
}
.flip{
    display: inline-flex;
}

</style>

