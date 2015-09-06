@extends('layouts.index')
    @section('cuerpo')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Separá concheras</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            APPARTCAR - Separá cocheras con anticipación
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="well">
                                <h4><strong>Información importante:</strong></h4>
                                <p>El sistema es gratuito y abierto para su uso.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="#">Ver normas de uso.</a>
                        </div>
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Horario</th>
                                            <th>Horas</th>
                                            <th>Posición</th>
                                            <th>Estado</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr class="odd gradeX">
                                            <td>Juan Carlos</td>
                                            <td>5:00 pm</td>
                                            <td>2 Horas</td>
                                            <td class="center">15</td>
                                            <td class="center">Pendiente</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
        <!-- /#page-wrapper -->
    @stop