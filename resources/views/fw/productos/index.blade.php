@extends('fw.template.main')


@section('title','Productos')


@section('content')
    

    <a href="{{route('productos.create')}}" class="btn btn-info">Nuevo producto</a><hr>
    <table class="table table-striped">
        <thead>
            <th>Categoria</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Inventario</th>
            <th>Estado</th>
        </thead>
        <tbody>
            @foreach($producto as $productos)
                <tr>
                    <td>{{$productos->categoria->nombre}}</td>
                    <td>{{$productos->nombre}}</td>
                    <td>{{$productos->precio}}</td>
                    <td>{{$productos->stock_control}}</td>
                    <td>{{$productos->estado->descripcion}}</td>
          
                </tr>

                
            @endforeach

        </tbody>
    </table>
    
    {!!$producto->render()!!}
    
@endsection