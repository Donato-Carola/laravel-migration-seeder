@extends('layouts.app')



@section('main-content')
    <h1>

        Trains
    </h1>

    <div class="container">
        <div class="row">
            <ul>

            @forelse ($trainList as $trains)
            <li>
                {{$trains->azienda}}
            </li>
            @empty
                <li>
                    There are no trains available...
                </li>
            @endforelse

            </ul>

        </div>
    </div>
@endsection
