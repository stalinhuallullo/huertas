<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $seoPage->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textArea('description', $seoPage->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{Form::file('image', ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image', 'accept' => 'image/*'])}}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $seoPage->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $seoPage->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $seoPage->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>



{{--        <div class="form-group">--}}
{{--            {{ Form::label('image') }}--}}
{{--            {{ Form::text('image', $seoPage->title, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}--}}
{{--            {!! $errors->first('image', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
