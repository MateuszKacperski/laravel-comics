@extends('layouts.main')

   @section('main-content')
     <main class="container">
        <section id="products">
            @foreach($comics as $comic)
            <div class="card">
                <div class="product-card">
                    <div class="card-conteiner">
                        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
                        <h4>{{ $comic['title']}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
    </main>
   @endsection

