<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $deluxe->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textArea('description', $deluxe->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $deluxe->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</p>') !!}
        </div>



{{--        <div class="form-group">--}}
{{--            {{ Form::label('cover_image') }}--}}
{{--            {{ Form::text('cover_image', $deluxe->cover_image, ['class' => 'form-control' . ($errors->has('cover_image') ? ' is-invalid' : ''), 'placeholder' => 'Cover Image']) }}--}}
{{--            {!! $errors->first('cover_image', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}
        <div class="row">

        <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('from') }}
            {{ Form::text('from', $deluxe->from, ['class' => 'form-control' . ($errors->has('from') ? ' is-invalid' : ''), 'placeholder' => 'From']) }}
            {!! $errors->first('from', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        </div>
        <div class="col-sm-6">
        <div class="form-group">
            {{ Form::label('until') }}
            {{ Form::text('until', $deluxe->until, ['class' => 'form-control' . ($errors->has('until') ? ' is-invalid' : ''), 'placeholder' => 'Until']) }}
            {!! $errors->first('until', '<div class="invalid-feedback">:message</p>') !!}
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
            {{ Form::textArea('condo_description', $deluxe->condo_description, ['class' => 'form-control' . ($errors->has('condo_description') ? ' is-invalid' : ''), 'placeholder' => 'Condo Description']) }}
            {!! $errors->first('condo_description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('youtube') }}
            {{ Form::text('youtube', $deluxe->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}
            {!! $errors->first('youtube', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('Imagen youtube') }}
                    {{Form::file('youtube_image', ['class' => 'form-control' . ($errors->has('youtube_image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('youtube_image', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-sm-6">
                    <div class="bgupdateimg">
                        <img src="{{ asset('public/'. $deluxe->youtube_image) }}" />
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('Imegenes de images_ready') }}
                    {{Form::file('images_ready[]', ['class' => 'form-control' . ($errors->has('images_ready') ? ' is-invalid' : ''), 'multiple' => true, 'placeholder' => 'images_ready', 'accept' => 'image/*'])}}
                    {!! $errors->first('images_ready', '<div class="invalid-feedback">:message</p>') !!}
                </div>

                <div class="col-sm-6">
                    <div class="bgupdateimg">
                        @foreach($sliders as $banner)
                            <div class="banner__item banner__promo imagenclose">
                                <div class="icoremove" id="{{$banner->id}}">
                                    <a href="#" class="lnk-eliminar"><p class="styleremove"><i class="fa fa-fw fa-remove"></i></p></a>
                                </div>
                                <img src="{{asset($banner->rute)}}" id="{{$banner->id}}" alt="" class="imagenrsrc" >
                            </div>
                        @endforeach
                    </div>

                </div>


            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('Imagen portada') }}
                    {{Form::file('cover_image', ['class' => 'form-control' . ($errors->has('cover_image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('cover_image', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-sm-6">
                    <div class="bgupdateimg">
                        <img src="{{ asset('public/'. $deluxe->cover_image) }}"/>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    {{ Form::label('Imagen Formulario') }}
                    {{Form::file('form_image', ['class' => 'form-control' . ($errors->has('form_image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
                    {!! $errors->first('form_image', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-sm-6">
                    <div class="bgupdateimg">
                    <img src="{{ asset('public/'. $deluxe->form_image) }}" />
                    </div>
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
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>

    <script>
        $(document).ready(function(){
            $('.lnk-eliminar').on('click', function(e){
                $(this).parent().parent().css("display", "none");
                $.ajax({
                    url: "{{route('admin.deluxes.removeimage', '')}}/"+$(this).parent().attr('id') ,
                    type: 'DELETE',
                    data:{
                        'id': $(this).parent().attr('id'),
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(result) {

                        console.log($(this).parent(".imagenclose"))
                    }
                });

                e.preventDefault();
                e.stopPropagation();

            });
        });
    </script>


</div>
