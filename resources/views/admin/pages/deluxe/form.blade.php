<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $deluxe->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $deluxe->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $deluxe->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Imagen Formulario') }}
                    {{Form::file('cover_image', ['class' => 'form-control' . ($errors->has('cover_image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('cover_image', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-6"  style="background-color: #f3f3f3;">
                    <img src="{{ asset('public/'. $deluxe->cover_image) }}" style="width:100px; float:right;"/>
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('cover_image') }}--}}
{{--            {{ Form::text('cover_image', $deluxe->cover_image, ['class' => 'form-control' . ($errors->has('cover_image') ? ' is-invalid' : ''), 'placeholder' => 'Cover Image']) }}--}}
{{--            {!! $errors->first('cover_image', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}



        <div class="form-group">
            {{ Form::label('from') }}
            {{ Form::text('from', $deluxe->from, ['class' => 'form-control' . ($errors->has('from') ? ' is-invalid' : ''), 'placeholder' => 'From']) }}
            {!! $errors->first('from', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('until') }}
            {{ Form::text('until', $deluxe->until, ['class' => 'form-control' . ($errors->has('until') ? ' is-invalid' : ''), 'placeholder' => 'Until']) }}
            {!! $errors->first('until', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Imegenes de images_ready') }}
                    {{Form::file('images_ready[]', ['class' => 'form-control' . ($errors->has('images_ready') ? ' is-invalid' : ''), 'multiple' => true, 'placeholder' => 'images_ready', 'accept' => 'image/*'])}}
                    {!! $errors->first('images_ready', '<div class="invalid-feedback">:message</p>') !!}
                </div>

                <div class="col-6" style="background-color: #f3f3f3;">
                    @foreach($sliders as $banner)
                        <div class="banner__item banner__promo">
                            <img src="{{asset($banner->rute)}}" alt="" width="120px;" style="float:right">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('images_ready') }}--}}
{{--            {{ Form::text('images_ready', $deluxe->images_ready, ['class' => 'form-control' . ($errors->has('images_ready') ? ' is-invalid' : ''), 'placeholder' => 'Images Ready']) }}--}}
{{--            {!! $errors->first('images_ready', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

        <div class="form-group">
            {{ Form::label('condo_title') }}
            {{ Form::text('condo_title', $deluxe->condo_title, ['class' => 'form-control' . ($errors->has('condo_title') ? ' is-invalid' : ''), 'placeholder' => 'Condo Title']) }}
            {!! $errors->first('condo_title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('condo_description') }}
            {{ Form::text('condo_description', $deluxe->condo_description, ['class' => 'form-control' . ($errors->has('condo_description') ? ' is-invalid' : ''), 'placeholder' => 'Condo Description']) }}
            {!! $errors->first('condo_description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('youtube') }}
            {{ Form::text('youtube', $deluxe->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}
            {!! $errors->first('youtube', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Imagen Formulario') }}
                    {{Form::file('youtube_image', ['class' => 'form-control' . ($errors->has('youtube_image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('youtube_image', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-6"  style="background-color: #f3f3f3;">
                    <img src="{{ asset('public/'. $deluxe->youtube_image) }}" style="width:100px; float:right;"/>
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('youtube_image') }}--}}
{{--            {{ Form::text('youtube_image', $deluxe->youtube_image, ['class' => 'form-control' . ($errors->has('youtube_image') ? ' is-invalid' : ''), 'placeholder' => 'Youtube Image']) }}--}}
{{--            {!! $errors->first('youtube_image', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    {{ Form::label('Imagen Formulario') }}
                    {{Form::file('form_image', ['class' => 'form-control' . ($errors->has('form_image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('form_image', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-6"  style="background-color: #f3f3f3;">
                    <img src="{{ asset('public/'. $deluxe->form_image) }}" style="width:100px; float:right;"/>
                </div>
            </div>
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('form_image') }}--}}
{{--            {{ Form::text('form_image', $deluxe->form_image, ['class' => 'form-control' . ($errors->has('form_image') ? ' is-invalid' : ''), 'placeholder' => 'Form Image']) }}--}}
{{--            {!! $errors->first('form_image', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
