
@section('extra.css')
{{-- <link id="pagestyle" href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" /> --}}
<link id="pagestyle" href="{{ asset('assets') }}/css/material-bootstrap-wizard.css" rel="stylesheet" />
{{-- <link id="pagestyle" href="{{ asset('assets') }}/css/material-dashboard.css?v=3.0.0" rel="stylesheet" /> --}}
@endsection

<div class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="wizard-container">
                <div class="card wizard-card" data-color="red" id="wizard">
                    <form action="" method="">
                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                        <div class="wizard-header">
                            <h3 class="wizard-title">
                                Agendar Cita
                            </h3>
                            <h5>
                                Este es el formulario para agendar una cita con el barbero.
                            </h5>
                        </div>
                        <div class="wizard-navigation">
                            <ul>
                                <li><a href="#details" data-toggle="tab">Ubicación</a></li>
                                <li><a href="#captain" data-toggle="tab">Colaboradores</a></li>
                                <li><a href="#description" data-toggle="tab">Servicio</a></li>
                                <li><a href="#dates" data-toggle="tab">Fecha y Hora</a></li>
                                <li><a href="#information" data-toggle="tab">información</a></li>
                                <li><a href="#buy" data-toggle="tab">Carrito</a></li>
                                <li><a href="#success" data-toggle="tab">Confirmación</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="details">
                                <div class="row">
                                    <div class="card">
                                        <div class="card-header mx-4 p-3 text-center">
                                            <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                                                <i class="material-icons opacity-10">account_balance</i>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0">Salary</h6>
                                            <span class="text-xs">Belong Interactive</span>
                                            <hr class="horizontal dark my-3">
                                            <h5 class="mb-0">+$2000</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="captain">
                                <h4 class="info-text">Colaboradores </h4>
                      
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Seleccione un servicio.</h4>
                               
                                </div>
                            </div>
                            <div class="tab-pane" id="dates">
                                <div class="row">
                                    <h4 class="info-text"> Horarios disponibles.</h4>

                                </div>
                            </div>
                            <div class="tab-pane" id="information">
                                <div class="row">
                                    <h4 class="info-text"> Llene los campos requeridos.</h4>

                                </div>
                            </div>
                            <div class="tab-pane" id="buy">
                                <div class="row">
                                    <h4 class="info-text"> Procesar pago.</h4>
                                </div>
                            </div>
                            <div class="tab-pane" id="success">
                                <div class="row">
                                    <h4 class="info-text"> Confirmar Cita.</h4>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                            </div>
                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

                                <div class="footer-checkbox">
                                    <div class="col-sm-12">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" name="optionsCheckboxes">
                                          </label>
                                        Recordar datos
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>

    </div>
</div>