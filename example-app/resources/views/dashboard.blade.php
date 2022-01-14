@extends('layouts.main')

@section('title', dasboard)

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count(events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">participantes</th>
                <th scope="col">ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>0</td>
                    <td><a href="#">editar</a> <a href="#"> deletar</a></td>
                </tr>
            @endforeach
        </tbody>
     </table>
    @else
    <p>vocẽ ainda nao tem eventos, <a href="/events/create">criar evento</a> </p>
    @endif
</div>

@endsection
