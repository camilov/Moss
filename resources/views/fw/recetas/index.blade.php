@extends('fw.template.main')


@section('title','Recetas')


@section('content')
    

    <a href="{{route('recetas.create')}}" class="btn btn-info">Nueva receta</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Producto</th>
            <th>Estado</th>
            

        </thead>
        <tbody>
            @foreach($receta as $recetas)
                <tr>
                    <td>{{$recetas->nombre}}</td>
                    <td>{{$recetas->descripcion}}</td>
                    <td>{{$recetas->producto->nombre}}</td>
                    <td>{{$recetas->estado->descripcion}}</td>
                     <td>
                    <a href="{{route('recetas.edit',$recetas->id_receta)}}" class="btn btn-warning"> Editar</a>
                    
                    
                    <a href="{{route('recetas.destroy',$recetas->id_receta)}}" onclick="return confirm('¿Seguro que deseas eliminar la receta?')" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>

                
            @endforeach

        </tbody>
    </table>
    
    {!!$receta->render()!!}
    
@endsection