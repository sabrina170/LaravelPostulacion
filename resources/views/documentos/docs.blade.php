
 @extends('layouts.head')


 @section('content')

 <div class="card br-16">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img class="card-img-top br-16" src="{{asset('app-assets/images/portada2.jpg')}}" alt="Card image cap" style="object-fit:cover;" height="270">
    </div>
</div>

<div class="card br-16 p-36">
    <div class="card-body">
        <h2 class="intro-y text-lg font-medium mr-auto font-weight-bold">
            MIS DOCUMENTOS
        </h2>
        <h5 class="intro-y mr-auto">
            Por favor, llene todos los documentos a continuación, luego darle click a enviar para proceder con la postulación:
        </h5>
        <div class="table-responsive">
            <table class="table  table-bordered mt-24">
                <thead>
                    <tr>
                        <th>DOCUMENTO</th>
                        <th>SUBIR ARCHIVO</th>
                        <th>ARCHIVOS SUBIDOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-pri font-weight-bold">CERTIFICADO DE ESTUDIOS</td>
                        <td>
                            <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                    </button>
                </td>
                        <td>certificado.jpg</td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">CONSTANCIAS DE TRABAJOS</td>
                        <td>
                            <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                    </button>
                </td>
                        <td>certificado.jpg</td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">ANTECEDENTES</td>
                        <td>
                            <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                    </button>
                </td>
                        <td>certificado.jpg</td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">DNI</td>
                        <td>
                            <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                    </button>
                </td>
                        <td>certificado.jpg</td>
                    </tr>
                    <tr>
                        <td class="text-pri font-weight-bold">CERTIFICACIÓN DE RENTA 5TA CATEGORÍA</td>
                        <td>
                            <button id="select-files" class="btn btn-outline-primary mb-1 waves-effect dz-clickable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Subir documento
                    </button>
                </td>
                        <td>certificado.jpg</td>
                    </tr>
                </tbody>
            </table>
        </div>

      <!-- remove thumbnail file upload starts -->
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Remove Thumbnail</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        This example allows user to remove any file out of all uploaded files. This will add a link to every file
                        preview to remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>,
                        <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code> options are used for the wording.
                    </p>
                    <form action="#" class="dropzone dropzone-area" id="dpz-remove-thumb">
                        <div class="dz-message">Drop files here or click to upload.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- remove thumbnail file upload ends -->

    </div>
                </div>

 @endsection


