
 @extends('layouts.head')


 @section('content')


 <div class="card br-16 p-36">
    <div class="card-body">
        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            DOCUMENTO 2
        </h2>
        <h5 class="intro-y mr-auto">
            Ingresar Tipo de Documento y Número (Carnet de Extranjería / DNI)
        </h5>


    <div>
        <div class="row m-0">

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Lugar</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="text" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-4 mt-8">
                <label class="form-label" for="first-name-icon">Fecha</label>
                                                                <div class="input-group input-group-merge">
                                                                    <input type="date" id="first-name-icon" class="form-control" name="fname-icon" placeholder="Lugar">
                                                                </div>
            </div>

            <div class="col-lg-12 mt-24">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet bibendum tortor. Donec viverra dapibus libero, lobortis consectetur mi sodales ut. Proin venenatis ullamcorper
                malesuada. Proin dignissim elit justo, ut faucibus velit mattis vitae. Duis eu interdum velit. Phasellus vitae posuere orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Fusce at elit orci. Morbi sit amet lacinia nunc, vel eleifend enim.
            </div>

            <div class="col-lg-4 mt-24">
                <h3>Adjuntar croquis</h3>
                <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                </button>
            </div>

            <div class="col-lg-12 mt-24">
                <h3>Firma</h3>

                <p><b>Apellidos y Nombres completos:</b>  Jose Jhon Perez Samoa</p>
                <p><b>DNI:</b> 85254151</p>


                <hr>
                <div class="text-center">
                    <a href="#" class="btn btn-primary waves-effect waves-float waves-light">
                        ENVIAR DOCUMENTO
                    </a>
                </div>

            </div>



        </div>
    </div>
</div>
</div>

                </div>

 @endsection


