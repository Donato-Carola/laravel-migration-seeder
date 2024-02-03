@extends('layouts.app')



@section('main-content')
    <h1>

        Trains
    </h1>

    <div class="container">
        <div class="row">
            <table class="table">


                <thead>
                    <tr>
                        <th scope="col">azienda</th>
                        <th scope="col">stazione_partenza</th>
                        <th scope="col">Stazione_arrivo</th>
                        <th scope="col">Data di partenza</th>
                        <th scope="col">orario di partenza</th>
                        <th scope="col">orario di arrivo</th>
                        <th scope="col">codice treno</th>
                        <th scope="col">numero di carrozze</th>
                        <th scope="col">in orario</th>
                        <th scope="col">cancellato</th>

                    </tr>
                </thead>
                @forelse ($trainList as $trains)
                    <tbody>
                        <tr>
                            <th scope="row">{{$trains->azienda}}</th>
                            <td>{{$trains->stazione_partenza}}</td>
                            <td>{{$trains->stazione_arrivo}}</td>
                            <td>{{$trains->data_partenza}}</td>
                            <td>{{$trains->orario_partenza}}</td>
                            <td>{{$trains->orario_arrivo}}</td>
                            <td>{{$trains->codice_treno}}</td>
                            <td>{{$trains->numero_carrozze}}</td>


                           @if ($trains->in_orario )
                           <td><p>il treno è in orario</p></td>


                           @else
                                <td><p>il treno è in ritardo</p></td>


                           @endif

                           @if ($trains->cancellato )
                           <td></td>


                           @else
                                <td class="bg-danger"><p>il treno è stato cancellato</p></td>


                           @endif



                        </tr>

                    </tbody>

                @empty
                    <li>
                        There are no trains available...
                    </li>
                @endforelse
            </table>


        </div>
    </div>
@endsection
