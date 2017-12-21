@extends('fw.template.main')


@section('title','titulo')


@section('content')
        

      
       {!! Form::open(['route'=>'operaciones.store','method'=>'POST']) !!}
            @foreach($categoria as $categorias) 
                    <div id='container'>
                         <button class='boton'>{{$categorias->nombre}}</button>
                    </div>
            @endforeach

            
            <div class="form-group">
                
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        	</div>
        {!! Form::close() !!}

@endsection