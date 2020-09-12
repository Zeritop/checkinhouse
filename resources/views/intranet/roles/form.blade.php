<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre Role:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nombre del Role','class' => 'form-control', 'required')) !!}
        </div>
    </div>
    <hr>
    <div class="form-group">
      <h3>Listado de Permisos</h3>
      <ul class="list-unstyled">
    @foreach($permissions as $permission)
      <li>
        <label>
          {{ Form::checkbox('permissions[]', $permission->id, null) }}
          {{ $permission->name }}
        </label>
      </li>


    @endforeach
      </ul>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
