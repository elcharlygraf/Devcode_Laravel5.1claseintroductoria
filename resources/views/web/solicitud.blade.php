@extends('layouts.index')

    @section('cuerpo')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar solicitud</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                {!! Form::open(array('url' => 'solicitud', 'method' => 'post')) !!}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Porfavor completa todos los datos para que se puedan comunicar contigo.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombres completos</label>
                                            <input class="form-control" name="nombres">
                                        </div>
                                        <div class="form-group">
                                            <label>Números de celular</label>
                                            <input class="form-control" name="celular">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email">
                                        </div>                                      
                                        <div class="form-group">
                                            <label>Seleccione un piso</label>
                                            <select class="form-control" name="piso">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                </div>

                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Comentario</label>
                                            <textarea class="form-control" name="comentario" rows="3"></textarea>
                                        </div>
                                                                               
                                        <div class="form-group">
                                            <label>Fecha</label>
                                            <input type="date" name="fecha" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hora exacta</label>
                                            <input type="text" name="hora" class="form-control">
                                        </div>
                                        <label>Número de horas</label>
                                        <div class="form-group input-group">

                                            <span class="input-group-addon">Hora : Minutos</span>
                                            <input type="number" name="qtyhora" class="form-control">
                                        </div> 
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                    <button type="reset" class="btn btn-warning">Borrar</button>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                {!! Form::close() !!}
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    @stop