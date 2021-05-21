
<head>
    
</head>
<nav class="navbar justify-content-between">
    <a href = "{{route('creditcard.index')}}" class="navbar-brand">CreditFly</a>
    @if (Auth::check())
        @auth
            <form class="form-inline">
                <input type="hidden" id= "currentUser" value="{{Auth::user()->id}}">
                <a href = "{{route('auth.show')}}" class="btn btn-secondary" type="submit">{{auth()->user()->name}}</a>
            </form>
        @endauth
    @else
    <form class="form-inline">
        <a href = "{{route('auth.login')}}" class="btn btn-secondary" type="submit">Iniciar Sesión</a>
    </form>
    @endif
   
</nav>