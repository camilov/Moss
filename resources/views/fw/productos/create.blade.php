@extends('fw.template.main')


@section('title','Crear Producto')


@section('content')
        

      
       {!! Form::open(['route'=>'productos.store','method'=>'POST']) !!}
        
          

             <div class="form-group">
                {!! Form::label('nombre','Nombre')!!}
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del producto','required'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('nombre_corto','Nombre Corto')!!}
                {!! Form::text('nombre_corto',['class'=>'form-control','placeholder'=>'Nombre corto del producto','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('referencia','Referencia')!!}
                {!! Form::text('Referencia',null,['class'=>'form-control','placeholder'=>'Escriba referencia','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('barras','Codigo de barras')!!}
                {!! Form::text('barras',null,['class'=>'form-control','placeholder'=>'Escriba codigo de barras','required'])!!}
            </div>
        	  
        	<div class="form-group">
                {!! Form::label('categorias','Categorias')!!}
                {!! Form::select('categorias',$categoria,null,['class'=>'form-control','placeholder'=>'Seleccione Categoria','required'])!!}
            </div>


			<div class="form-group">
                {!! Form::label('ivaIncluido','Iva Incluido')!!}
                {!! Form::select('ivaIncluido',$producto,null,['class'=>'form-control','placeholder'=>'Escriba codigo de barras','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('iva','Iva')!!}
                {!! Form::number('iva',null,['class'=>'form-control','placeholder'=>'Escriba iva'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('precio','Valor Venta')!!}
                {!! Form::number('precio',null,['class'=>'form-control','placeholder'=>'Escriba valor de venta','required'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('stock','Control de Inventario')!!}
                {!! Form::select('stock',$stock,null,['class'=>'form-control','required'])!!}
            </div>

             <div class="form-group">
                {!! Form::label('descripcion','Descripcion')!!}
                {!! Form::textarea('descripcion',null,['class'=>'form-control','placeholder'=>'Escriba Descripcion','required'])!!}
            </div>
         
         	
            <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
        </div>
        {!! Form::close() !!}

@endsection