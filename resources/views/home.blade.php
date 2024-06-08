{{-- layouts is the folder and app is the file  --}}
@extends('layouts.app')

@section('content')
    <main class="main-home">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card">
                            <div class="img-container">
                                <img class="front" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}"
                                    alt="">
                                <img class="back" src="{{ Vite::asset('resources/img/' . $product['backImage']) }}"
                                    alt="">

                                <div class="badges">
                                    @foreach ($product['badges'] as $badge)
                                        <span
                                            class="badge {{ $badge['type'] === 'tag' ? 'green' : 'red' }}">{{ $badge['value'] }}</span>
                                    @endforeach
                                </div>

                            </div>
                            <div class="card-body">
                                <span class="brand">{{ $product['brand'] }}</span>
                                <h3>{{ $product['name'] }}</h3>

                                @foreach ($product['badges'] as $badge)
                                    @if ($badge['type'] === 'discount')
                                        <span
                                            class="color-red">{{ round($product['price'] - ($product['price'] * substr($badge['value'], 1, -1)) / 100, 2) }}
                                            €</span>
                                    @endif
                                @endforeach
                                @if ($loop->last)
                                  <span>{{ $product['price'] }} €</span>
                                @else
                                  <span class="line-through">{{ $product['price'] }} €</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
