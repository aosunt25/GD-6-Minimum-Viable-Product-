<!DOCTYPE html>
<html lang="en">
<head>
   @extends('layout.main')
   <link rel="stylesheet" href="{{ asset('/css/creditcard.css')}}">
</head>
<body onload = "closeAlerts()">
    @include('includes.navbar')

<div class="container">
    <br>
    @include('includes.alerts')
    <input type="hidden" name="id_creditcard" id = "id_creditcard" value = "{{$creditcard->id}}">
    <div class="row">
        <div class="col-10">
            <h3>{{$creditcard->name}}</h3>
        </div>
        @if (Auth::check())
            <div class="col-2">
                <button type="button" class="btn btn-dark" onclick = "addCreditCard()">Agregar</button>
            </div>
        @endif
    </div>
    <br>
    <div class="row">
        <div class="col-4">
                <h5 class = "numbers">{{$creditcard->cat}}%</h5>
        </div>
        <div class="col">
            <h4 class = "numbers">{{$creditcard->tasa_interes}}%</h4>
        </div>
        <div class="col">
            <h4 class = "numbers">{{$creditcard->comision}}$</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <h5>CAT promedio sin IVA Costo Anual Total (CAT)</h5>
            <a type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#catModal">
                ?
            </a>
        </div>
        <div class="col-4">
            <h5>Tasa de interés promedio ponderada por saldo</h5>
            <a type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#tasaModal">
                ?
            </a>
        </div>
        <div class="col-4">
            <h5>Comisión anual más IVA</h5>
            <a type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#comisionModal">
                ?
            </a>
            
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
            <h5 class = "numbers" >Requisitos</h5>
            <p>{!! nl2br(e($creditcard->requisitos)) !!}</p>
        </div>
        <div class="col-6">
            <h5 class = "numbers" >Beneficio</h5>
            <p>{!! nl2br(e($creditcard->beneficios)) !!}</p>
        </div>
    </div>
    @include('includes.modal')
</div>
</body>
<script>
    function addCreditCard() {
        let theId = $('#id_creditcard').val();
        $.ajax({
            url: '{{ route('creditcard.store') }}',
            method: 'POST',
            headers:{
                'Accept': 'application/json',
                'X-CSRF-Token': $('meta[name="csrf-token"').attr('content')
            },
            data: {
                "_token": "{{ csrf_token() }}",
                id: theId
            }
        })
        .done(function(response) {
            console.log('Éxitoso', response);
            document.getElementById("alert-success").style.display = "block"
        })
        .fail(function(jqXHR, response) {
            console.log('Fallido', response);
        });
    }
    function dismissAlert(id)
    {
        document.getElementById(id).style.display = "none";
    }
    

</script>
</html>