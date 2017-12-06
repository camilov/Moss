@extends('fw.template.main')


@section('title','Editar Receta ' . $receta->nombre)


@section('content')
   
    {!! Form::open(['route'=>['recetas.update',$receta],'method'=>'PUT']) !!}
        
          <div class="form-group">
                {!! Form::label('nombre','Nombre')!!}
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre de receta','required'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('descripcion','Descripcion')!!}
                {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion de la receta','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('producto_id','Producto')!!}
                {!! Form::select('producto_id',$producto,null,['class'=>'form-control','placeholder'=>'Seleccione producto','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('estado_id','Estado')!!}
                {!! Form::select('estado_id',$estado,null,['class'=>'form-control','placeholder'=>'Seleccione estado','required'])!!}
            </div>
        
        
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection