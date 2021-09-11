<div class="box box-info padding-1">
    <div class="box-body">


        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $novelty->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</p>') !!}
        </div>
{{--        <div class="form-group">--}}
{{--            {{ Form::label('slug') }}--}}
{{--            {{ Form::text('slug', $novelty->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}--}}
{{--            {!! $errors->first('slug', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            {{ Form::label('resume') }}--}}
{{--            {{ Form::text('resume', $novelty->resume, ['class' => 'form-control' . ($errors->has('resume') ? ' is-invalid' : ''), 'placeholder' => 'Resume']) }}--}}
{{--            {!! $errors->first('resume', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            {{ Form::label('youtube') }}--}}
{{--            {{ Form::text('youtube', $novelty->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}--}}
{{--            {!! $errors->first('youtube', '<div class="invalid-feedback">:message</p>') !!}--}}
{{--        </div>--}}
        <div class="form-group">
            {{ Form::label('text') }}
            {{ Form::textArea('text', $novelty->text, ['class' => 'form-control' . ($errors->has('text') ? ' is-invalid' : ''), 'placeholder' => 'Text']) }}
            {!! $errors->first('text', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dateCreate') }}
            {{ Form::text('dateCreate', $novelty->dateCreate, ['class' => 'form-control' . ($errors->has('dateCreate') ? ' is-invalid' : ''), 'placeholder' => 'Datecreate']) }}
            {!! $errors->first('dateCreate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $novelty->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
