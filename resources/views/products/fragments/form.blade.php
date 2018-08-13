<div class="form-group">
    {!! Form::label('name','nombre del producto') !!}
    {!! Form::text('name',$value=null,$attributes=['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short','Descripcion breve del producto') !!}
    {!! Form::text('short',$value=null,$attributes=['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Descripcion del producto') !!}
    {!! Form::textarea('body',$value=null,$attributes=['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',['class' => 'btn btn-primary']) !!}
</div>