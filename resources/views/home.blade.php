@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container pt-3">

            <h4 class="text-danger mb-0"><strong>Bienvenidos al Bingo</strong></h4>
            <h1 class="text-primary"><strong>"MATTI"</strong></h1>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <hr>
            @livewire("bingo")

        </div>
    </div>
</div>
@endsection
