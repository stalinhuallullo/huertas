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
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Imegenes de Sliders') }}
                    {{Form::file('sliders[]', ['class' => 'form-control' . ($errors->has('images') ? ' is-invalid' : ''), 'multiple' => true, 'placeholder' => 'Imagenes', 'accept' => 'image/*'])}}
                    {!! $errors->first('sliders', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-6" style="background-color: #f3f3f3;">
                    @foreach($sliders as $banner)
                        <div class="banner__item banner__promo">
                            <img src="{{asset($banner->cover_rute)}}" alt="" width="120px;" style="float:right">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Banner anuncio') }}
                    {{Form::file('banner', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('banner', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-6" style="background-color: #f3f3f3;">
                    <img src="{{ asset('public/'. $home->banner) }}" style="width:100px; float:right"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Imagen Formulario') }}
                    {{Form::file('bannerForm', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('bannerForm', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-6"  style="background-color: #f3f3f3;">
                    <img src="{{ asset('public/'. $home->bannerForm) }}" style="width:100px; float:right;"/>
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
