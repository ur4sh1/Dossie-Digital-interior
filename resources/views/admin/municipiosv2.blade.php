@extends('layouts.app')

@section('content')
    <div class="container">
        <example-component v-bind:municipios="{{$municipios}}"></example-component>
    </div>
@endsection

