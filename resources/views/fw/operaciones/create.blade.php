@extends('fw.template.main')


@section('title','titulo')


@section('content')
        

      
       {!! Form::open(['route'=>'operaciones.store','method'=>'POST']) !!}
            @foreach($tabla as $tablas) 
            <tr>
                 <td><button >{{$tablas->nombre}}</button></td>
            
            </tr>
           
               
        
            @endforeach

            <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        	</div>
        {!! Form::close() !!}

@endsection