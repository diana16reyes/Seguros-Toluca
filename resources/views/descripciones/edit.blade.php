@extends('layouts.sistema')
@section("content")
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Form elements</a> <a href="#" class="current">Validation</a> </div>
    <h1>Modificar Descripciones</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form validation</h5>
          </div>
          <div class="widget-content nopadding">
            {!! Form::open(["route"=>["Descripciones.update",$descripcion->id],"method"=>"POST"]) !!}
              @csrf
              @method('PUT')
              {!! Form::label("Descripcion") !!}
              {!! Form::text("descripcion",$descripcion->descripcion,["class"=>"form-control"]) !!}
              {!! Form::label("Submarca") !!}
              {!! Form::select("submarca",$submarca,$descripcion->id_submarca,array("class"=>"form-control","placeholder"=>"Seleccionar...")) !!}
              {!! Form::submit("Guardar",["class"=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection