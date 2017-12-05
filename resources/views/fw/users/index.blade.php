@extends('fw.template.main')


@section('title','Lista de usuarios')


@section('content')
   
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>interlocutor</th>
            <th>Nick</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>num_documento</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>estado</th>

        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id_usuario}}</td>
                    <td>{{$user->interlocutor_id}}</td>
                    <td>{{$user->nickname}}</td>
                    <td>{{$user->nombre}}</td>
                    <td>{{$user->apellido}}</td>
                    <td>{{$user->num_documento}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->usuario_perfil_id}}</td>
                    <td>{{$user->estado_id}}</td>
                    
                </tr>

                
                @endforeach

        </tbody>
    </table>
    
    {!!$users->render()!!}
    
@endsection