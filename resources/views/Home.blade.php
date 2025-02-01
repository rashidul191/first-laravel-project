@extends('Layout.app')


@section('page-main-content')

{{-- {{ $usersData }} --}}
<div>
    <ul>
        @foreach($users as $user)
            <li>
                {{$user->email}}
                {{-- <pre>{{ print_r(value: $user, return: true) }}</pre> --}}
            </li>
        @endforeach
    </ul>
</div>


@include('Component.HomeComponent.here')
@include('Component.HomeComponent.about')
@include('Component.HomeComponent.pricing')
@include('Component.HomeComponent.newslate')
@endsection
