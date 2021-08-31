<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Título Página') }}
            {{ Form::text('title', $home->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese título Página']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textArea('description', $home->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Idcoverimagen']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Máximo de resultados a mostrar') }}
            {{ Form::text('limit', $home->limit, ['class' => 'form-control' . ($errors->has('limit') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese número máximo']) }}
            {!! $errors->first('limit', '<div class="invalid-feedback">:message</p>') !!}
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('limit') }}--}}
{{--            {{ Form::select('limit',$home,  $home->limit ?? null, ['class' => 'form-control' . ($errors->has('limit') ? ' is-invalid' : ''), 'placeholder' => 'Limitar']) }}--}}
{{--            {!! $errors->first('limit', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

        <div class="form-group">
            {{ Form::label('Imagen portada') }}
            {{Form::file('images', ['class' => 'form-control' . ($errors->has('images') ? ' is-invalid' : ''), 'placeholder' => 'Imagenes', 'accept' => 'image/*'])}}
            {!! $errors->first('images', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Banner anuncio') }}
            {{Form::file('banner', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
            {!! $errors->first('banner', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Imagen Formulario') }}
            {{Form::file('bannerForm', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
            {!! $errors->first('bannerForm', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
