<div class="col-12 col-lg-10 m-auto">
    <div class="mb-5 text-center">
        <h2>Agendar Cita</h2>
        <p>Este es el formulario para agendar una cita con el barbero</p>
    </div>
    <div class="card border border-2">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div class="multisteps-form__progress">
                    <button class="multisteps-form__progress-btn js-active" type="button" title="ubicacion">
                        <span>UBICACION</span>
                    </button>
                    <button class="multisteps-form__progress-btn" type="button"
                        title="colaboradores">COLABORADORES</button>
                    <button class="multisteps-form__progress-btn" type="button" title="servicio">SERVICIO</button>
                    <button class="multisteps-form__progress-btn" type="button" title="fechaHora">FECHA Y HORA</button>
                    <button class="multisteps-form__progress-btn" type="button"
                        title="informacion">INFORMACION</button>
                    <button class="multisteps-form__progress-btn" type="button" title="carrito">CARRITO</button>
                    <button class="multisteps-form__progress-btn" type="button"
                        title="confirmacion">CONFIRMACION</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="multisteps-form__form">
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white js-active" data-animation="FadeIn">
                    <div class="mb-5 ps-3">
                        <h6 class="mb-1">Sucursales</h6>
                        <p class="text-sm">Selecciona una sucursal.</p>
                    </div>
                    <div class="multisteps-form__content">
                        <div class="row">
                            @foreach ($sucursales as $sucursal)
                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                    <div class="card card-blog card-plain">
                                        <div class="card-header p-0 mt-n4 mx-3">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="http://127.0.0.1:8000/assets/img/home-decor-1.jpg"
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                        <div class="card-body p-3">
                                            <p class="mb-0 text-sm">Sucursal</p>
                                            <a href="javascript:;">
                                                <h5>
                                                    {{ $sucursal->nombre }}
                                                </h5>
                                            </a>
                                            <p class="mb-4 text-sm">
                                                {{ $sucursal->direccion }}
                                            </p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-sm mb-0">Seleccionar</button>
                                                <div class="avatar-group mt-2">


                                                    @foreach ($colaboradores as $colaborador)
                                                        <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                            title=""
                                                            data-bs-original-title="{{ $colaborador->nombre }}n">
                                                            <img alt="Image placeholder"
                                                                src="http://127.0.0.1:8000/assets/img/team-1.jpg">
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
                    <div class="mb-3 ps-3">
                        <h6 class="mb-1">Colaboradores</h6>
                        <p class="text-sm">Selecciona un colaborador.</p>
                    </div>
                    <div class="multisteps-form__content">
                        <div class="card-body p-3">
                            <ul class="list-group">
                                @foreach ($colaboradores as $colaborador)
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                        <div class="avatar me-3">
                                            <img src="http://127.0.0.1:8000/assets/img/kal-visuals-square.jpg"
                                                alt="kal" class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $colaborador->nombre }}</h6>
                                            <p class="mb-0 text-xs">{{ $colaborador->ocupacion }}</p>
                                            <p class="mb-0 text-xs">{{ $colaborador->correo }} -
                                                {{ $colaborador->telefono }}</p>

                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">Agendar</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder mb-0">Servicios</h5>
                    <p class="mb-0 text-sm">
                        Selecciona los servicios que deseas agendar.
                    </p>
                    <div class="multisteps-form__content">
                        <div class="card-body p-3">
                            <ul class="list-group">
                                @php
                                    $categoriaActual = '';
                                @endphp
                                @foreach ($servicios as $servicio)
                                    @if ($servicio->categoria != $categoriaActual)
                                        <h4>{{ $servicio->categoria }}</h4>
                                    @endif
                                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                                        <div class="avatar me-3">
                                            <img src="http://127.0.0.1:8000/assets/img/kal-visuals-square.jpg"
                                                alt="kal" class="border-radius-lg shadow">
                                        </div>
                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $servicio->nombre }}</h6>
                                            <p class="mb-0 text-xs">{{ $servicio->descripcion }}</p>
                                            <p class="mb-0 text-xs">{{ $servicio->tiempo }}</p>

                                        </div>
                                        <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto"
                                            href="javascript:;">$ {{ $servicio->costo }}</a>
                                    </li>
                                    @php
                                        $categoriaActual = $servicio->categoria;
                                    @endphp
                                @endforeach

                            </ul>
                        </div>
                        <div class="row">
                            <div class="button-row d-flex mt-4 col-12">
                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                    title="Prev">Prev</button>
                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                    title="Next">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
                    <h5 class="font-weight-bolder mb-0">Fecha y Hora</h5>
                    <p class="mb-0 text-sm">
                        Selecciona la fecha y hora en la que deseas agendar.
                    </p>
                    <div class="multisteps-form__content mt-3">
                        <div class="row">
                            <div class="col-12 mt-3">
                                <div class="">
                                    <div class="card card-calendar">
                                        <div class="card-body p-3">
                                            <div class="calendar" data-bs-toggle="calendar" id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white h-100" data-animation="FadeIn">
                    <h5 class="font-weight-bolder mb-0">Información para agendar</h5>
                    <p class="mb-0 text-sm">
                        Ingresa la información para agendar.
                    </p>
                    <div class="multisteps-form__content">
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">Nombre</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">Apellido</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">Email Address</label>
                                    <input class="multisteps-form__input form-control" type="email"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">Telefono</label>
                                    <input class="multisteps-form__input form-control" type="email"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white h-100" data-animation="FadeIn">
                    <h5 class="font-weight-bolder mb-0">Carrito</h5>
                    <p class="mb-0 text-sm">
                        Revisa tu carrito.
                    </p>
                    <div class="multisteps-form__content mt-3">
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-header pb-0 px-3">
                                    <h6 class="mb-0">
                                        Información del servicio
                                    </h6>
                                </div>
                                <div class="card-body pt-4 p-3">
                                    <ul class="list-group">
                                        <li
                                            class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-3 text-sm">Oliver Liam</h6>
                                                <span class="mb-2 text-xs">Sucursal: <span
                                                        class="text-dark font-weight-bold ms-sm-2">Viking
                                                        Burrito</span></span>
                                                <span class="mb-2 text-xs">Servicio: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">oliver@burrito.com</span></span>
                                                <span class="text-xs">Fecha: <span
                                                        class="text-dark ms-sm-2 font-weight-bold">FRB1235476</span></span>
                                            </div>
                                            <div class="ms-auto text-end">
                                                <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                                    href="javascript:;"><i
                                                        class="material-icons text-sm me-2">delete</i>Delete</a>
                                                <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i
                                                        class="material-icons text-sm me-2">edit</i>Edit</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                title="Next">Next</button>
                        </div>
                    </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel border-radius-xl bg-white h-100" data-animation="FadeIn">
                    <h5 class="font-weight-bolder mb-0">Confirmar cita</h5>
                    <p class="mb-0 text-sm">
                        Confirma la información de tu cita.
                    </p>
                    <div class="multisteps-form__content ">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <div class="card h-100 mb-4">
                                    <div class="card-header pb-0 px-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="mb-0">Transacciones</h6>
                                            </div>
                                            <div
                                                class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                                                <i class="material-icons me-2 text-lg">date_range</i>
                                                <small>23 - 30 March 2020</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4 p-3">
                                        <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">
                                            Detalle
                                        </h6>
                                        <ul class="list-group">

                                            <li
                                                class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                                <div class="d-flex align-items-center">
                                                    <button
                                                        class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="material-icons text-lg">expand_less</i></button>
                                                    <div class="d-flex flex-column">
                                                        <h6 class="mb-1 text-dark text-sm">CORTE DESVANECIDO CON
                                                            DISEÑO'</h6>
                                                        <span class="text-xs">27 March 2020, at 04:30 AM</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                                                    + $ 100
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-row d-flex mt-4">
                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                title="Prev">Prev</button>
                            <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                title="Send">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@section('extra.js')
    <script src="{{ asset('assets') }}/js/components/dates.js"></script>
@endsection
