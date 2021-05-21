<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.main')
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        <br>
        @include('includes.alerts')
        <div class="row">
            <h2>{{auth()->user()->name}}</h2>  
        </div>
        <br>
        <div class="row">
            <h4>Mis Tarjetas de Credito</h4>
        </div>
        <div class="container">
            <div id = "cardContainer" class="row mt-5" style="margin: 0 auto">
                @foreach($creditcard as $item)
                <div class="col-md-4 col-lg-3 mb-3 d-flex justify-content-center" id = "creditcard{{$item->id}}">
                    <div class="card-deck">
                            <div class="card" style="width: 12rem;">
                                <div class="card-body">
                                    <div class="row">
                                        <a class="card-title" href="{{route('creditcard.show', $item->id)}}">{{$item->name}}</a>   
                                    </div>
                                    <div class="row">
                                        <button type="button" width = "5" class="btn btn-danger" onclick = "deleteCreditCard({{$item->id}})">Borrar</button>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                @endforeach
            </div>
    </div>
        <div class="row">
            <a name="" id="" class="btn btn-outline-danger" href="{{route('auth.logout')}}" role="button">Sign Out</a>
        </div>
    </div>
</body>
<script>

    function deleteCreditCard(id) {
        let strUrl = '/creditcard/'+id+''
    
        $.ajax({
            url: strUrl,
            method: 'DELETE',
            headers:{
                'Accept': 'application/json',
                'X-CSRF-Token': $('meta[name="csrf-token"').attr('content')
            },
            data: {
                "_token": "{{ csrf_token() }}"
            }
        })
        .done(function(response) {
            console.log('Éxitoso', response);
            document.getElementById("creditcard"+id).remove();
            document.getElementById("alert-delete").style.display = "block"
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