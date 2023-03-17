@extends('layout.default')
@section('title','homepage')

@section('main-section')
<div class="row">
    <h2>{!!$heading!!}</h2>
    <p>
        @if ($unless==1)

        1users

        @endif
        @unless ($unless)

        user offline

        @endunless
    </p>
</div>

@stop
