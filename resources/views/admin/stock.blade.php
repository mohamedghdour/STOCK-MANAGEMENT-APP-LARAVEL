@extends('layout.main')

@section("content")
<div class="content-wrapper" style="min-height: 1302.4px;" bis_skin_checked="1">
    @if(session('success'))
    <x-alert type="success" :message="session('success')" />
    @endif

    <section class="content-header">


        <h1>Stock</h1>
        <x-stockTable :products="$products" />

    </section>

</div>
@endsection
