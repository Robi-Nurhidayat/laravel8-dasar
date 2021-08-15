@extends('layouts.app', ['title' => 'home page'])

@section('content')
    Home page

    <p>bagian bawah menggunakan component</p>



    {{-- tulis components bisa menggunakan @component atau <x-nama_component> --}}

    <x-alert>
        {{-- @component('components.alert') --}}

        @slot('header')
            ini header
        @endslot

        @slot('content')

        ini adalah isi
        <br>

        @endslot


        @slot('footer')
            ini adalah foooter
        @endslot

        {{-- @endcomponent         --}}
    </x-alert>


@endsection
