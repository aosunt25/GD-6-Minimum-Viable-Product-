<!DOCTYPE html>
<html lang="en">

@extends('layout.main')

<body>
@include('includes.navbar')    
</body>
<div class="container">
    <div class="container">
        <div id = "cardContainer" class="row mt-5" style="margin: 0 auto">
            @foreach($creditcards as $item)
            <div class="col-md-4 col-lg-3 mb-3 d-flex justify-content-center">
                <div class="card-deck">
                        <div class="card" style="width: 12rem;">
                            <div class="card-body">
                                <a class="card-title" href="{{route('creditcard.show', $item->id)}}">{{$item->name}}</a>   
                            </div>
                        </div>

                </div>
            </div>
            @endforeach
        </div>
</div>
</html>