@if (Session::has('messaje'))
<div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
             <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i>

             <p><strong>{{Session::get('message')}}</strong></p>
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                <i data-lucide="x" class="w-4 h-4"></i> </button>
    </div>
</div>
@endif
@if (Session::has('msjdelete'))
        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
             <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i>

             <p><strong>{{Session::get('msjdelete')}}</strong></p>
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                <i data-lucide="x" class="w-4 h-4"></i> </button>
    </div>
@endif
@if (Session::has('msjupdate'))
<div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
        <div class="alert alert-secondary alert-dismissible show flex items-center mb-2" role="alert">
             <i data-lucide="alert-octagon" class="w-6 h-6 mr-2"></i>

             <p><strong>{{Session::get('msjupdate')}}</strong></p>
            <button type="button" class="btn-close" data-tw-dismiss="alert" aria-label="Close">
                <i data-lucide="x" class="w-4 h-4"></i> </button>
    </div>
</div>
@endif
