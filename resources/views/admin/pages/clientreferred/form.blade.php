<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idClient') }}
            {{ Form::text('idClient', $clientreferred->idClient, ['class' => 'form-control' . ($errors->has('idClient') ? ' is-invalid' : ''), 'placeholder' => 'Idclient']) }}
            {!! $errors->first('idClient', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idProperty') }}
            {{ Form::text('idProperty', $clientreferred->idProperty, ['class' => 'form-control' . ($errors->has('idProperty') ? ' is-invalid' : ''), 'placeholder' => 'Idproperty']) }}
            {!! $errors->first('idProperty', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $clientreferred->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('firstSurname') }}
            {{ Form::text('firstSurname', $clientreferred->firstSurname, ['class' => 'form-control' . ($errors->has('firstSurname') ? ' is-invalid' : ''), 'placeholder' => 'Firstsurname']) }}
            {!! $errors->first('firstSurname', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastSurname') }}
            {{ Form::text('lastSurname', $clientreferred->lastSurname, ['class' => 'form-control' . ($errors->has('lastSurname') ? ' is-invalid' : ''), 'placeholder' => 'Lastsurname']) }}
            {!! $errors->first('lastSurname', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone') }}
            {{ Form::text('phone', $clientreferred->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
            {!! $errors->first('phone', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $clientreferred->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>