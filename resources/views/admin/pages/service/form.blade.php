<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $service->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>

{{--        <div class="form-group">--}}
{{--            {{ Form::label('image') }}--}}
{{--            {{ Form::text('image', $service->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}--}}
{{--            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

        <div class="form-group">
            {{Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
