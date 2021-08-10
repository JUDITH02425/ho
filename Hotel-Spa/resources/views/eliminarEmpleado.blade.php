<div class="modal fade" id="miModalDeleteEmp" tabindex="-1" role="dialog" aria-labelledby="miModalDeleteEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerEmp" class="modal-content">
            <div class="text-center darkColor">
                <i class="fas fa-user-times"></i> Eliminar empleado
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formDeleteEmp" name="formDeleteEmp" class="form-horizontal" method="POST" action="{{ url('/delEmp') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <input type="text" id="deleteEmpid" name="deleteEmpid" hidden />
                    <div class="row">
                        <label class="col-5 eliminarEmp">DNI: </label>
                        <label id="deleteEmpdni"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Estado: </label>
                        <label id="deleteEmpestado"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Nombre: </label>
                        <label id="deleteEmpnombre"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Apellidos: </label>
                        <label id="deleteEmpapellidos"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Email: </label>
                        <label id="deleteEmpemail"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Contraseña: </label>
                        <label id="deleteEmpcontrasenya"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Teléfono: </label>
                        <label id="deleteEmptelefono"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Dirección: </label>
                        <label id="deleteEmpdireccion"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Cargo: </label>
                        <label id="deleteEmpcargo"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Puesto: </label>
                        <label id="deleteEmppuesto"></label>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button id="eliminar" class="btn btn-danger" type="submit">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>



