<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo usuario (1 adm, 0 user):</strong>
            {!! Form::text('admin', null, array('placeholder' => 'Rol','class' => 'form-control', 'required')) !!}
        </div>
    </div>

    <div class="form-group">
      <h3>Listado de Roles</h3>
      <ul class="list-unstyled">
    @foreach($roles as $role)
      <li>
        <label>
          {{ Form::checkbox('roles[]', $role->id, null) }}
          {{ $role->name }}
        </label>
      </li>


    @endforeach
      </ul>
    </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
    </div>
