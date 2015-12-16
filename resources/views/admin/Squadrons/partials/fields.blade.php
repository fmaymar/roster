<div class="form-group">
    {!! Form::label('squadron','Nombre del Escuadrón') !!}
    {!! Form::text('squadron',null, ['class'=>'form-control']) !!}
</div>

@if(isset($squadron))

<div class="form-group">
    {!! Form::label('country','País') !!}
    {!! Form::text('country',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('logo','Imagen') !!}
    <p><img src="/images/squadrons/{{$squadron->logo}}" width="100" height="100" alt=""></p>
    {!! Form::file('logo',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('web','Página Web') !!}
    {!! Form::text('web',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Descripción') !!}
    {!! Form::textarea('description',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('internal_description','Descripción Interna') !!}
    {!! Form::textarea('internal_description',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('obs','Observaciones') !!}
    {!! Form::textarea('obs',null, ['class'=>'form-control']) !!}
</div>

@endif