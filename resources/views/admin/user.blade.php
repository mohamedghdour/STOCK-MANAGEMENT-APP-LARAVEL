@extends('layout.main')

@section("content")
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">
    @if(session('success'))
    <x-alert type="success" :message="session('success')" />
    @endif

    <section class="content-header">


        <h1>User</h1>
        @if ($errors->any())
        @foreach ($errors->all() as $error )
        <x-alert type="error" :message="$error" />
        @endforeach
        @endif
        @auth
        <form method="POST" action="{{route('user.update',auth()->user()->id)}}" class="mt-5">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input value="{{auth()->user()->name}}" type="text" name="name" class="form-control" id="nomproduit">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input value="{{auth()->user()->email}}" type="text" name="email" class="form-control" id="categorie">
            </div>
            <div class="form-group">
                <label for="password">Nouveau Mot de passe</label>
                <input type="password" name="password" class="form-control" id="motdepasse">
            </div>
            <div class="form-group">
                <label for="password">Confirme nouveau mot de passe</label>
                <input type="password" name="password_confirmation" class="form-control" id="motdepasse">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
        @endauth

    </section>

</div>
@endsection
