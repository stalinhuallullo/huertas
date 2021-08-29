<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">



            {{ Form::label('idCategory') }}
            {{ Form::text('idCategory', $property->idCategory, ['class' => 'form-control' . ($errors->has('idCategory') ? ' is-invalid' : ''), 'placeholder' => 'Idcategory']) }}
            {!! $errors->first('idCategory', '<div class="invalid-feedback">:message</p>') !!}

        </div>
        <div class="form-group">
            {{ Form::label('idUser') }}
            {{ Form::text('idUser', $property->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Iduser']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $property->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('slug') }}
            {{ Form::text('slug', $property->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textArea('description', $property->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('youtube') }}
            {{ Form::text('youtube', $property->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : ''), 'placeholder' => 'Youtube']) }}
            {!! $errors->first('youtube', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPictureCover') }}
            {{ Form::text('idPictureCover', $property->idPictureCover, ['class' => 'form-control' . ($errors->has('idPictureCover') ? ' is-invalid' : ''), 'placeholder' => 'Idpicturecover']) }}
            {!! $errors->first('idPictureCover', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('initialFeeSoles') }}
            {{ Form::text('initialFeeSoles', $property->initialFeeSoles, ['class' => 'form-control' . ($errors->has('initialFeeSoles') ? ' is-invalid' : ''), 'placeholder' => 'Initialfeesoles']) }}
            {!! $errors->first('initialFeeSoles', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('initialFeeDollars') }}
            {{ Form::text('initialFeeDollars', $property->initialFeeDollars, ['class' => 'form-control' . ($errors->has('initialFeeDollars') ? ' is-invalid' : ''), 'placeholder' => 'Initialfeedollars']) }}
            {!! $errors->first('initialFeeDollars', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('spotPriceSoles') }}
            {{ Form::text('spotPriceSoles', $property->spotPriceSoles, ['class' => 'form-control' . ($errors->has('spotPriceSoles') ? ' is-invalid' : ''), 'placeholder' => 'Spotpricesoles']) }}
            {!! $errors->first('spotPriceSoles', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cashPriceDollars') }}
            {{ Form::text('cashPriceDollars', $property->cashPriceDollars, ['class' => 'form-control' . ($errors->has('cashPriceDollars') ? ' is-invalid' : ''), 'placeholder' => 'Cashpricedollars']) }}
            {!! $errors->first('cashPriceDollars', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monthlyFees') }}
            {{ Form::text('monthlyFees', $property->monthlyFees, ['class' => 'form-control' . ($errors->has('monthlyFees') ? ' is-invalid' : ''), 'placeholder' => 'Monthlyfees']) }}
            {!! $errors->first('monthlyFees', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idNovelty') }}
            {{ Form::text('idNovelty', $property->idNovelty, ['class' => 'form-control' . ($errors->has('idNovelty') ? ' is-invalid' : ''), 'placeholder' => 'Idnovelty']) }}
            {!! $errors->first('idNovelty', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('latitude') }}
            {{ Form::text('latitude', $property->latitude, ['class' => 'form-control' . ($errors->has('latitude') ? ' is-invalid' : ''), 'placeholder' => 'Latitude']) }}
            {!! $errors->first('latitude', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('longitude') }}
            {{ Form::text('longitude', $property->longitude, ['class' => 'form-control' . ($errors->has('longitude') ? ' is-invalid' : ''), 'placeholder' => 'Longitude']) }}
            {!! $errors->first('longitude', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('officeAddress') }}
            {{ Form::text('officeAddress', $property->officeAddress, ['class' => 'form-control' . ($errors->has('officeAddress') ? ' is-invalid' : ''), 'placeholder' => 'Officeaddress']) }}
            {!! $errors->first('officeAddress', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('projectAddress') }}
            {{ Form::text('projectAddress', $property->projectAddress, ['class' => 'form-control' . ($errors->has('projectAddress') ? ' is-invalid' : ''), 'placeholder' => 'Projectaddress']) }}
            {!! $errors->first('projectAddress', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $property->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dateCreate') }}
            {{ Form::text('dateCreate', $property->dateCreate, ['class' => 'form-control' . ($errors->has('dateCreate') ? ' is-invalid' : ''), 'placeholder' => 'Datecreate']) }}
            {!! $errors->first('dateCreate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $property->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idColor') }}
            {{ Form::select('idColor',$colorStyle,  $property->idColor ?? null, ['class' => 'form-control' . ($errors->has('idColor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione estilo de color']) }}
            {!! $errors->first('idColor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idPictureCoverPage') }}
            {{ Form::text('idPictureCoverPage', $property->idPictureCoverPage, ['class' => 'form-control' . ($errors->has('idPictureCoverPage') ? ' is-invalid' : ''), 'placeholder' => 'Idpicturecoverpage']) }}
            {!! $errors->first('idPictureCoverPage', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idIconMap') }}
            {{ Form::text('idIconMap', $property->idIconMap, ['class' => 'form-control' . ($errors->has('idIconMap') ? ' is-invalid' : ''), 'placeholder' => 'Idiconmap']) }}
            {!! $errors->first('idIconMap', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('province') }}
            {{ Form::text('province', $property->province, ['class' => 'form-control' . ($errors->has('province') ? ' is-invalid' : ''), 'placeholder' => 'Province']) }}
            {!! $errors->first('province', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Actulizar</button>
    </div>
</div>
