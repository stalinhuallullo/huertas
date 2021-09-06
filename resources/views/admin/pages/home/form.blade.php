<div class="box box-info padding-1">
    <style>
        .bgupdateimg {
            background-color: #fafafa;
            border: 1px solid #e8ebf1;
            padding: 10px;
            border-radius: 2px;
            display: flex;
        }

        .bgupdateimg img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-right: 10px;

        }
        .imagenclose {
            position: relative;
        }
        .icoremove {
            position: absolute;
            top: 3px;
            right: 5px;
        }

        .styleremove {
            background: red;
            display: block;
            border-radius: 30px;
            color: white;
            width: 20px;
            padding-left: 1px;
        }
        .styleremove:hover {
            background: white;
            color: red;
        }

    </style>
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Título Página') }}
            {{ Form::text('title', $home->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Titulo de pagina']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::textArea('description', $home->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'descripción']) }}
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
                <div class="col-md-6">
                    {{ Form::label('Imegenes de Sliders') }}
                    {{Form::file('sliders[]', ['class' => 'form-control' . ($errors->has('images') ? ' is-invalid' : ''), 'multiple' => true, 'placeholder' => 'Imagenes', 'accept' => 'image/*'])}}
                    {!! $errors->first('sliders', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-md-6" id="js-list_images">
                    <div class="bgupdateimg">
                        @foreach($sliders as $banner)
                            <div class="banner__item banner__promo imagenclose">
                                <div class="icoremove" id="{{$banner->cover_id}}">
                                    <a href="#" class="lnk-eliminar"><p class="styleremove"><i class="fa fa-fw fa-remove"></i></p></a>
                                </div>
                                <img src="{{asset($banner->cover_rute)}}" id="{{$banner->cover_id}}" alt="" class="imagenrsrc" >
                            </div>
                        @endforeach
                    </div>

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
                <div class="col-6">
                    <div class="bgupdateimg">
                    <img src="{{ asset('public/'. $home->banner) }}"/>
                    </div>
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
                <div class="col-md-6" >
                    <div class="bgupdateimg">
                    <img src="{{ asset('public/'. $home->bannerForm) }}"/>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <script>


        $(document).ready(function(){

            $('.lnk-eliminar').on('click', function(e){
                $(this).parent().parent().css("display", "none");
                $.ajax({
                    url: "{{route('admin.home.removeimage', '')}}/"+$(this).parent().attr('id') ,
                    type: 'DELETE',
                    data:{
                        'id': $(this).parent().attr('id'),
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function(result) {
                        $(this).parent().remove();
                    }
                });

                e.preventDefault();
                e.stopPropagation();

            });
        });


        /*
        var listImage = document.getElementById('js-list_images');
        var listBoximg = listImage.querySelectorAll('.imagenclose');
        listBoximg.forEach(el => {
            var listRmove = el.querySelector('.icoremove');
            listRmove.addEventListener('click', () => {
                el.style = "display:none";

                fetch("{{route('admin.home.removeimage', '')}}" + '/' + listRmove.id, {
                    method: 'delete'
                })
                .then(res => res.text()) // or res.json()
                .then(res => console.log(res))

            })
        })
        */
    </script>
</div>
