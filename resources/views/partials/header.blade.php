
<header class="p-3">
<div class="containerHeader d-flex justify-space-between p-1 align-items-center">
    <div class="boxLogo">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>
    <div class="navBar d-flex">
        @foreach ($voci as $voce)
    <div class="navSection px-2 text-end">
        <p>{{ $voce }}</p>
    </div>
@endforeach
    </div>
</div>
    <div class="containerImg">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
</header>