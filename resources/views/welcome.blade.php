@extends("layout")
@section("content")
@auth
{{auth()->user()->name}}
    <div class="container pt-3">

        <h4 class="text-danger mb-0"><strong>Bienvenidos al Bingo</strong></h4>
        <h1 class="text-primary"><strong>#yomequedoencasa</strong></h1>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <hr>
        @livewire("bingo")
        
    </div>
@else

@endauth
@endsection