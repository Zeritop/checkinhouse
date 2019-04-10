<div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
         <strong>Nombre Servicio:</strong><br>
             <div class="form-group" style="color:black;">
                    
                     {!! Form::select('nombre', array('Cambio de Aceite' => 'Cambio de Aceite', 'Diagnostico General' => 'Diagnostico General', 'Mantenimiento Frenos' => 'Mantenimiento Frenos')) !!}
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Descripcion Diagnostico:</strong>
            {!! Form::text('descripcion', null, array('placeholder' => 'Descripcion','class' => 'form-control', 'required')) !!}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {!! Form::text('precio', null, array('placeholder' => 'Precio','class' => 'form-control', 'required')) !!}
            </div>
        </div>
       
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>