@extends('layouts.base')

@section('conteudo')
@foreach($pokemon as $poke)
    <div>
    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://sm.ign.com/ign_ap/screenshot/default/pokemon-ash-feature-image-1_uapv.jpg" alt="fundo"/>
        <h3>{{ $poke->name }}</h3>
        <p>{{ $poke->type }}</p>
        <p>{{ $poke->power_point }}</p>
        <a href="{{ url('pokemon/'.$poke->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$poke->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach

@endsection

<!-- @extends('layouts.base')

@section('content')

@can('create', App\Models\Pokemon::class)
    <div class="flex items-start">
        <div class="py-8 mb-5 p-4">
            <a href="{{ url('pokemon/create' )}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Pokemon</a>
        </div>
    </div>
@endcan



<div class="flex flex-wrap justify-center mt-10">
    @foreach($pokemon as $entity)
        <div class="p-4 max-w-sm">
            <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset($entity->image) }}" alt="{{ $entity->name }}"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $entity->name }}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $entity->type }}</span>
                <span class="text-sm text-gray-500 dark:text-gray-400">{{ $entity->power }}</span>
                @if(isset($entity->coach))
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $entity->coach->name }}</span>
                @else
                    <span class="text-sm text-gray-500 dark:text-gray-400">Sem treinador</span>
                @endif
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ url('pokemon/'.$entity->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                    <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delete</button>
                </div>
            </div>
        </div>
    @endforeach

    </div>
@endsection -->

