<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('longitude') }}
            {{ Form::text('longitude', $us->longitude, ['class' => 'form-control' . ($errors->has('longitude') ? ' is-invalid' : ''), 'placeholder' => 'Longitude']) }}
            {!! $errors->first('longitude', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('latitude') }}
            {{ Form::text('latitude', $us->latitude, ['class' => 'form-control' . ($errors->has('latitude') ? ' is-invalid' : ''), 'placeholder' => 'Latitude']) }}
            {!! $errors->first('latitude', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textArea('description', $us->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trust_year') }}
            {{ Form::text('trust_year', $us->trust_year, ['class' => 'form-control' . ($errors->has('trust_year') ? ' is-invalid' : ''), 'placeholder' => 'Trust Year']) }}
            {!! $errors->first('trust_year', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trust_dev') }}
            {{ Form::text('trust_dev', $us->trust_dev, ['class' => 'form-control' . ($errors->has('trust_dev') ? ' is-invalid' : ''), 'placeholder' => 'Trust Dev']) }}
            {!! $errors->first('trust_dev', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trust_benefits') }}
            {{ Form::text('trust_benefits', $us->trust_benefits, ['class' => 'form-control' . ($errors->has('trust_benefits') ? ' is-invalid' : ''), 'placeholder' => 'Trust Benefits']) }}
            {!! $errors->first('trust_benefits', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trust_areas') }}
            {{ Form::text('trust_areas', $us->trust_areas, ['class' => 'form-control' . ($errors->has('trust_areas') ? ' is-invalid' : ''), 'placeholder' => 'Trust Areas']) }}
            {!! $errors->first('trust_areas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contact_mission') }}
            {{ Form::textArea('contact_mission', $us->contact_mission, ['class' => 'form-control' . ($errors->has('contact_mission') ? ' is-invalid' : ''), 'placeholder' => 'Contact Mission']) }}
            {!! $errors->first('contact_mission', '<div class="invalid-feedback">:message</p>') !!}
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('contact_mission_img') }}--}}
{{--            {{ Form::text('contact_mission_img', $us->contact_mission_img, ['class' => 'form-control' . ($errors->has('contact_mission_img') ? ' is-invalid' : ''), 'placeholder' => 'Contact Mission Img']) }}--}}
{{--            {!! $errors->first('contact_mission_img', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    {{Form::file('contact_mission_img', ['class' => 'form-control' . ($errors->has('contact_mission_img') ? ' is-invalid' : ''), 'placeholder' => 'contact_mission_img', 'accept' => 'image/*'])}}
                    {!! $errors->first('contact_mission_img', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-md-6">
                    <div class="bgupdateimg">
                        <img src="{{ asset('public/'. $us->contact_mission_img) }}"/>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group">
            {{ Form::label('contact_vision') }}
            {{ Form::textArea('contact_vision', $us->contact_vision, ['class' => 'form-control' . ($errors->has('contact_vision') ? ' is-invalid' : ''), 'placeholder' => 'Contact Vision']) }}
            {!! $errors->first('contact_vision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
{{--        <div class="form-group">--}}
{{--            {{ Form::label('contact_vision_img') }}--}}
{{--            {{ Form::text('contact_vision_img', $us->contact_vision_img, ['class' => 'form-control' . ($errors->has('contact_vision_img') ? ' is-invalid' : ''), 'placeholder' => 'Contact Vision Img']) }}--}}
{{--            {!! $errors->first('contact_vision_img', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    {{Form::file('contact_vision_img', ['class' => 'form-control' . ($errors->has('contact_vision_img') ? ' is-invalid' : ''), 'placeholder' => 'contact_vision_img', 'accept' => 'image/*'])}}
                    {!! $errors->first('contact_vision_img', '<div class="invalid-feedback">:message</p>') !!}
                </div>
                <div class="col-md-6" >
                    <div class="bgupdateimg">
                        <img src="{{ asset('public/'. $us->contact_vision_img) }}"/>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
