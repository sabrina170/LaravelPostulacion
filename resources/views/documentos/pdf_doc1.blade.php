

 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Bootstrap demo</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

     <style>
      body{
        font-family: arial;
      }
     </style>

    </head>
   <body style="font-family: arial">


     <div style="margin-top: 10px;">
        <img src="{{asset('app-assets/images/logo.jpg')}}" width="15%">
    </div>
    <div>
        <h4 class="text-center mt-4" style="font-size:14px"><strong>FICHA DE DATOS DEL TRABAJADOR <br>
            <span>{{$fecha}}</span></strong></h4>
    </div>

        <h4 style="font-size:16px; font-weight:bold; font-family:arial;">1.	DATOS DEL TRABAJADOR</h4>


        @foreach ($infos as $item)
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered">
              <tr>
                <td>Nombres:</td>
                <td>{{$item->nombres}}</td>
              </tr>
              <tr>
                <td>Apellidos:</td>
                <td>{{$item->apellido_pa}} {{$item->apellido_ma}}</td>
              </tr>
              <tr>
                <td>Fecha de nacimiento:</td>
                <td>{{$item->fecha_nacimiento}}</td>
              </tr>
              <tr>
                <td>Lugar de nacimiento:</td>
                <td>{{$lugar_nacimiento}}</td>
              </tr>
              <tr>
                <td>Edad:</td>
                <td>{{$edad}}</td>
              </tr>
              <tr>
                <td>Estado Civil:</td>
                <td>{{$estado_civil}}</td>
              </tr>
              <tr>
                <td>Nacionalidad:</td>
                <td>{{$nacionalidad}}</td>
              </tr>
              <tr>
                <td>DNI:</td>
                <td>{{$item->numero_documento}}</td>
              </tr>
              <tr>
                <td>Domicilio:</td>
                <td>{{$item->direccion}}</td>
              </tr>
              <tr>
                <td>Distrito:</td>
                <td>{{$item->distrito}}</td>
              </tr>
              <tr>
                <td>Provincia:</td>
                <td>{{$item->provincia}}</td>
              </tr>
              <tr>
                <td>Departamento:</td>
                <td>{{$item->departamento}}</td>
              </tr>
              <tr>
                <td colspan="2"><img src="/images-croquis/{{$croquis}}" class="img-fluid mt-4" alt="..."></td>
              </tr>
            </table>

            <table>
              <tr>
                <td>Teléfono Fijo:</td>
                <td>{{$telefono_fijo}}</td>
                <td>Teléfono Móvil:</td>
                <td>{{$telefono}}</td>
              </tr>
              <tr>
                <td>Teléfono de Contacto:</td>
                <td>{{$telefono_familiar}}</td>
                <td>Referencia:</td>
                <td>{{$referencia}}</td>
              </tr>
            </table>

          <h4>Nivel Educativo</h4>
          <p>{{$nivel_educativo}}</p>
          </div>
        @endforeach

        <h4 class="mt-36">2.	DATOS DE FAMILIARES DIRECTOS (padre, madre, cónyuge o conviviente e hijos):</h4>

        <table class="table table-bordered">
          <thead>
            <tr class="table-active">
                          <th>Nombres y Apellidos Completos</th>
                            <th>Parentesco</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                            <th>Tipo doc</th>
                            <th>Nro doc</th>
                            <th>Estudia</th>
            </tr>
          </thead>
          <tbody>

              @for($i=0; $i<count($datos_nombres); $i++)
                  {{-- {{$i}} --}}
            <tr>
              <td>{{$datos_nombres[$i]}}</td>
              <td>{{$datos_parentesco[$i]}}</td>
              <td>{{$datos_edad[$i]}}</td>
              <td>{{$datos_sexo[$i]}}</td>
              <td>{{$datos_tipo_dni[$i]}}</td>
              <td>{{$datos_numero_dni[$i]}}</td>
              <td>{{$datos_estudia[$i]}}</td>
            </tr>
            @endfor
          </tbody>
        </table>

        <p class="font-11 mt-12">(En caso de hijos mayores de 18 años, indicar si éstos cursan estudios superiores o universitarios. La empresa se reserva el derecho de exigir al trabajador que acredite la existencia de los hijos.)</p>

        <h4 class="mt-36">DATOS LABORALES</h4>
        <h5>3.1.	Renta Quinta  </h5>

            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Ha trabajado anteriormente este año?:
                        </strong>{{$trabajo}}</p>
            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Nombre del empleador:</strong>
                    {{$nombre_empleador}}</p>

            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Domiciliado:</strong>
                    {{$domiciliado}}</p>
            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Fecha de cese de su último empleo:
                        </strong>{{$fecha_cese}}</p>
            </div>
          <h5>3.2.	Essalud Vida </h5>

            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Indicar si está afiliado a Essalud Vida:
                        </strong>{{$afiliado}}</p>
            </div>
            <div>
                <p class="form-label" for="first-name-icon">
                    <strong>Si es extranjero indicar días de permanencia en el país
                        </strong>{{$dias_per}}</p>
            </div>
            <h4 class="font-weight-bold">Consideraciones para presentar Descanso Médico</h4>
            <p class="mt-24">
              Según nuestro Reglamento de Seguridad y Salud en el Trabajo (RISS Art. 109 Ind. C), todo Descanso Médico Particular debe contener:
              <ul>
                  <li>Pago de la consulta médica</li>
                  <li>Certificado Médico, indicando datos del personal y días de Descanso Médic</li>
                  <li>Receta</li>
                  <li>Compra de la Receta</li>
              </ul>
          </p>

          <p>
              El Descanso Médico debe ser presentado máximo a las 72 hrs de haberse producido el hecho, de presentarse fuera de fecha y/o incompletos, la empresa no asumirá compensación salarial por los días no trabajados, ya que es responsabilidad única y exclusiva del colaborador.<br>
              Ante caso de SUBSIDIOS (más de 20 días de Descanso Médico) se podrá requerir documentos adicionales que sustenten el diagnóstico, en caso de no presentarlos e impidan cualquier tipo de trámite posterior de subsidios en las fechas correspondientes, la empresa no asumirá compensación salarial por los días subsidiados.<br>
              Adicionalmente, se consigna como Falta Grave sí el Descanso Médico presentado sea Fraudulento o se haya comprobado su comercialización.

          </p>

          <h4 class="font-weight-bold">Compensación por Tiempo de Servicios (CTS)</h4>
                <p>Moneda: SOLES</p>

                <h4 class="font-weight-bold">Pago de haberes</h4>
                <p>Modalidad de pago: MENSUAL</p>

                <h4 class="font-weight-bold">Exclusividad</h4>
                <p>{{ $exclusividad }}</p>

        <img src="/images-firma/{{$firma}}" class="img-thumbnail mt-24" alt="...">


     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
 </html>



 <!DOCTYPE html>
 <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

 <head>
     <title></title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
     <!--[if !mso]><!-->
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">
     <!--<![endif]-->
     <style>
         * {
             box-sizing: border-box;
         }

         body {
             margin: 0;
             padding: 0;
         }

         a[x-apple-data-detectors] {
             color: inherit !important;
             text-decoration: inherit !important;
         }

         #MessageViewBody a {
             color: inherit;
             text-decoration: none;
         }

         p {
             line-height: inherit
         }

         .desktop_hide,
         .desktop_hide table {
             mso-hide: all;
             display: none;
             max-height: 0px;
             overflow: hidden;
         }

         @media (max-width:700px) {
             .row-content {
                 width: 100% !important;
             }

             .mobile_hide {
                 display: none;
             }

             .stack .column {
                 width: 100%;
                 display: block;
             }

             .mobile_hide {
                 min-height: 0;
                 max-height: 0;
                 max-width: 0;
                 overflow: hidden;
                 font-size: 0px;
             }

             .desktop_hide,
             .desktop_hide table {
                 display: table !important;
                 max-height: none !important;
             }
         }
     </style>
 </head>

 <body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
     <table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;">
         <tbody>
             <tr>
                 <td>
                     <table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; border-radius: 0; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:15px;padding-top:30px;width:100%;padding-right:0px;padding-left:0px;">
                                                                 <div class="alignment" align="left" style="line-height:10px"><a href="http://www.example.com/" target="_blank" style="outline:none" tabindex="-1"><img src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/791198_774976/logo.jpg" style="display: block; height: auto; border: 0; width: 187px; max-width: 100%;" width="187" alt="Logo" title="Logo"></a></div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <div class="spacer_block" style="height:5px;line-height:5px;font-size:1px;">&#8202;</div>
                                                     <div class="spacer_block mobile_hide" style="height:55px;line-height:55px;font-size:1px;">&#8202;</div>
                                                     <div class="spacer_block" style="height:5px;line-height:5px;font-size:1px;">&#8202;</div>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-position: center top; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:20px;padding-right:10px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 18px; color: #000000; line-height: 1.5; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 24px;"><span style="font-size:16px;"><strong>FICHA DE DATOS DEL TRABAJADOR</strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:15px;padding-right:15px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #555555; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 24px;"><span style="font-size:16px;">Fecha :&nbsp;</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-position: center top; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>1.&nbsp;</strong></span><span style="color:#000000;"><strong> </strong></span><span style="color:#000000;"><strong>&nbsp;<u>D</u></strong></span><u><span style="color:#000000;"><strong><u>A</u>TOS DEL TRABAJADOR</strong></span></u></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Apellidos:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Nombres:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-6" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="41.666666666666664%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Lugar y fecha de nacimiento:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="58.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-7" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Edad:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-8" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Estado Civil:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-9" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Nacionalidad:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-10" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">DNI N°:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-11" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Pasaporte:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-12" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="41.666666666666664%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Autogenerado ESSALUD:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="58.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-13" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="33.333333333333336%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Domicilio:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="66.66666666666667%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-14" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;"><span style="font-size:11px;">(Av. / Calle / Mz. – N°./ Lt. – Int. / Dpto.)</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-15" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Urbanización:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-3" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Distrito:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-4" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;padding-bottom:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-16" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Provincia:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-3" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Departamento:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-4" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;padding-bottom:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-17" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">(*) Llenar croquis adjunto.</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-18" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Teléfono Fijo:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-3" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Teléfono Móvil.:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-4" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;padding-bottom:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-19" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;"><span style="font-size:14px;">Teléfono de Contacto:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-3" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:35px;padding-right:20px;padding-top:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Roboto Slab', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 22.5px;"><span style="font-size:15px;">Referencia:</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-4" width="25%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-left:35px;padding-right:20px;padding-top:5px;padding-bottom:5px;">
                                                                 <div style="font-family: Arial, sans-serif">
                                                                     <div class style="font-size: 12px; font-family: 'Oswald', Arial, 'Helvetica Neue', Helvetica, sans-serif; mso-line-height-alt: 18px; color: #3a4848; line-height: 1.5;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 21px;">apelldsadassdad</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-20" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-position: center top; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>2.&nbsp;</strong></span><span style="color:#000000;"><strong> </strong></span><span style="color:#000000;"><strong>&nbsp;<u>Nivel Educativo</u></strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-21" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">colegio en que estudio</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-22" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-position: center top; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.&nbsp;</strong></span><span style="color:#000000;"><strong> </strong></span><u><span style="color:#000000;"><strong>&nbsp;DATOS DE FAMILIARES DIRECTOS (padre, madre, cónyuge o conviviente e hijos):</strong></span></u></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>

                                                     <table class="table table-bordered">
                                                        <thead>
                                                          <tr class="table-active">
                                                                        <th>Nombres y Apellidos Completos</th>
                                                                          <th>Parentesco</th>
                                                                          <th>Edad</th>
                                                                          <th>Sexo</th>
                                                                          <th>Tipo doc</th>
                                                                          <th>Nro doc</th>
                                                                          <th>Estudia</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                            @for($i=0; $i<count($datos_nombres); $i++)
                                                                {{-- {{$i}} --}}
                                                          <tr>
                                                            <td>{{$datos_nombres[$i]}}</td>
                                                            <td>{{$datos_parentesco[$i]}}</td>
                                                            <td>{{$datos_edad[$i]}}</td>
                                                            <td>{{$datos_sexo[$i]}}</td>
                                                            <td>{{$datos_tipo_dni[$i]}}</td>
                                                            <td>{{$datos_numero_dni[$i]}}</td>
                                                            <td>{{$datos_estudia[$i]}}</td>
                                                          </tr>
                                                          @endfor
                                                        </tbody>
                                                      </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-23" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 10px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">(En caso de hijos mayores de 18 años, indicar si éstos cursan estudios superiores o<br>universitarios. La empresa se reserva el derecho de exigir al trabajador que acredite la existencia de los hijos.)</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="divider_block block-2" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                         <tr>
                                                             <td class="pad">
                                                                 <div class="alignment" align="center">
                                                                     <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                         <tr>
                                                                             <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #E0E0E0;"><span>&#8202;</span></td>
                                                                         </tr>
                                                                     </table>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-24" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; background-position: center top; color: #000000; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 25px; padding-right: 25px; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="text_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.&nbsp;</strong></span><span style="color:#000000;"><strong> </strong></span><u><span style="color:#000000;"><strong>&nbsp;DATOS LABORALES:</strong></span></u></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><strong><span style="color:#000000;">3.1. Renta Quinta</span></strong></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-3" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Empleador anterior en el Ejercicio; si</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">(Si la respuesta es afirmativa, presentar Certificado de Retenciones de Rentas, de no adjuntarlo no se le considerará para sus Retenciones de Impuesto a la Renta).</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.2. Régimen de condición para efectos del Impuesto a la Renta:</strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-6" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">✔️Domiciliado:&nbsp;</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-7" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Días de permanencia en el país Perú _____ nací en ___________________________(adjuntar<br>comunicación validada y certificada por la Gerencia de la empresa de Recurso Humamos o Gerente<br>de Administración Y Finanzas según sea el caso).</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-8" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Fecha del cese del vínculo laboral en último empleo ___________________________<br>El trabajador informó otros ingresos de Renta de Quinta SI ( ) NO* ( )</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-9" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.2. Essalud Vida</strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-10" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Está afiliado a Essalud Vida SI ( ) NO ( )</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-11" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.3 Consideraciones para presentar Descanso Médico</strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-12" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;">Según nuestro Reglamento de Seguridad y Salud en el Trabajo (RISS Art. 109 Ind. C), todo</span><br><span style="color:#000000;">Descanso Médico Particular debe contener:</span><br><span style="color:#000000;">● Pago de la consulta médica.</span><br><span style="color:#000000;">● Certificado Médico, indicando datos del personal y días de Descanso Médico</span><br><span style="color:#000000;">● Receta</span><br><span style="color:#000000;">● Compra de la Receta</span><br><span style="color:#000000;">El Descanso Médico debe ser presentado máximo a las 72 hrs de haberse producido el hecho, de</span><br><span style="color:#000000;">presentarse fuera de fecha y/o incompletos, la empresa no asumirá compensación salarial por los</span><br><span style="color:#000000;">días no trabajados, ya que es responsabilidad única y exclusiva del colaborador.</span><br><span style="color:#000000;">Ante caso de SUBSIDIOS (más de 20 días de Descanso Médico) se podrá requerir documentos</span><br><span style="color:#000000;">adicionales que sustenten el diagnóstico, en caso de no presentarlos e impidan cualquier tipo de</span><br><span style="color:#000000;">trámite posterior de subsidios en las fechas correspondientes, la empresa no asumirá compensación</span><br><span style="color:#000000;">salarial por los días subsidiados.</span><br><span style="color:#000000;">Adicionalmente, se consigna como Falta Grave sí el Descanso Médico presentado sea Fraudulento o</span><br><span style="color:#000000;">se haya comprobado su comercialización.</span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-13" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.3. Compensación por Tiempo de Servicios (CTS)</strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-14" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Moneda: SOLES</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-15" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><span style="color:#000000;"><strong>3.4. Pago de haberes</strong></span></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-16" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:5px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Modalidad de pago: MENSUAL</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-17" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:20px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; mso-line-height-alt: 16.8px;"><strong><span style="color:#000000;">3.5. Exclusividad</span></strong></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-18" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:30px;padding-left:35px;padding-top:5px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;">Prestó servicios simultáneos en empresas de la competencia (Call center), clientes y<br>proveedores del grupo Konecta. SI ( ) NO ( )</p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="paragraph_block block-19" width="100%" border="0" cellpadding="5" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad">
                                                                 <div style="color:#101112;direction:ltr;font-family:Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:10px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;mso-line-height-alt:12px;">
                                                                     <p style="margin: 0;">Declaro bajo juramento que la información consignada en esta ficha corresponde a la verdad y asumo la responsabilidad por cualquier problema que<br>pudiera surgir a consecuencia de los datos que he proporcionado.</p>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-25" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; border-radius: 0; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="heading_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:165px;padding-left:5px;padding-right:5px;padding-top:60px;text-align:center;width:100%;">
                                                                 <h3 style="margin: 0; color: #8a3c90; direction: ltr; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 13px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;"><span style="color: #000000;"><strong><span class="tinyMce-placeholder">Lima, 30/12/2022</span></strong></span></h3>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-26" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; border-radius: 0; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="empty_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                         <tr>
                                                             <td class="pad" style="padding-right:0px;padding-bottom:5px;padding-left:0px;padding-top:5px;">
                                                                 <div></div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                                 <td class="column column-2" width="50%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="image_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                         <tr>
                                                             <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;padding-top:5px;">
                                                                 <div class="alignment" align="center" style="line-height:10px"><img src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/791198_774976/2560px-Firma_de_Juan_Jos%C3%A9_Pradera.svg.png" style="display: block; height: auto; border: 0; width: 204px; max-width: 100%;" width="204"></div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="divider_block block-3" width="100%" border="0" cellpadding="5" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                         <tr>
                                                             <td class="pad">
                                                                 <div class="alignment" align="center">
                                                                     <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="80%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                                         <tr>
                                                                             <td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 2px solid #000000;"><span>&#8202;</span></td>
                                                                         </tr>
                                                                     </table>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                     <table class="text_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;">
                                                                 <div style="font-family: sans-serif">
                                                                     <div class style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #3fb9bc; line-height: 1.2; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;">
                                                                         <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;"><em><strong><span style="color:#000000;">Firma del Colaborador</span></strong></em></p>
                                                                     </div>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                     <table class="row row-27" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                         <tbody>
                             <tr>
                                 <td>
                                     <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; border-radius: 0; width: 680px;" width="680">
                                         <tbody>
                                             <tr>
                                                 <td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                     <table class="paragraph_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                         <tr>
                                                             <td class="pad" style="padding-top:45px;">
                                                                 <div style="color:#101112;font-size:16px;font-family:Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;font-weight:400;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;mso-line-height-alt:19.2px;">
                                                                     <p style="margin: 0;"><span style="color: #8d8c8c;">Documento Confidencial. Prohibida su reproducción y/o distribución sin autorización expresa por escrito de</span><br><span style="color: #8d8c8c;">Konecta.</span></p>
                                                                 </div>
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </td>
             </tr>
         </tbody>
     </table><!-- End -->
 </body>

 </html>
