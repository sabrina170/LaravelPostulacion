
 @extends('layouts.head')


 @section('content')


                <div class="flex items-center mt-8">
                    <h2 class="intro-y text-lg font-medium mr-auto">
                        MIS DOCUMENTOS
                    </h2>
                </div>
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5  box ">
                   
                            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                                <h2 class="intro-y text-lg font-medium mr-auto mt-2">
                                    File Manager
                                </h2>
                                <div class="w-full sm:w-auto flex items-right ">
                                  <input type="file" class="top-0 left-0 absolute button">
                                    <button class="btn btn-primary shadow-md mr-2">Subir documentos</button>
                                </div>
                            </div>
                            <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4 mt-3">
                                <div class="flex flex-wrap px-4">
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{asset('images/preview-5.jpg')}}">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{asset('images/preview-5.jpg')}}">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{asset('images/preview-5.jpg')}}">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                        <img class="rounded-md" alt="Midone - HTML Admin Template" src="{{asset('images/preview-5.jpg')}}">
                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                    </div>
                                </div>
                                <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                    <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                </div>
                </div>

 @endsection


