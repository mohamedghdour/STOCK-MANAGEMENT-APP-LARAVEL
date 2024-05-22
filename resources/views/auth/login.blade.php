@extends('layout.main')
@section('content')
<body class="login-page" cz-shortcut-listen="true" style="min-height: 464px;">
    <div>
        @if(session("danger"))
            <x-alert type="error"  :message="session('danger')" />
        @endif
        @if(session("success"))
            <x-alert type="success"  :message="session('success')" />
        @endif
    </div>
    <div class="login-box" bis_skin_checked="1">

        <div class="card card-outline card-primary" bis_skin_checked="1">
            <div class="card-header text-center" bis_skin_checked="1">
                <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            
            <div class="card-body" bis_skin_checked="1">
                <p class="login-box-msg">Sign in to start your session</p>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="input-group mb-3" bis_skin_checked="1">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append" bis_skin_checked="1">
                            <div class="input-group-text" bis_skin_checked="1">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3" bis_skin_checked="1">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append" bis_skin_checked="1">
                            <div class="input-group-text" bis_skin_checked="1">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row" bis_skin_checked="1">
                        <div class="submit-append" bis_skin_checked="1">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>
</body>
@endsection
