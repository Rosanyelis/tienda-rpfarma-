@if (session('success'))
<div class="alert alert-pro alert-success alert-dismissible">
    <div class="alert-text">
        <h6>¡Éxito!</h6>
        <p>{{ session('success') }}</p>
    </div>
    <button class="close" data-dismiss="alert"></button>
</div>
@endif

@if (session('danger'))
<div class="alert alert-pro alert-danger alert-dismissible">
    <div class="alert-text">
        <h6>¡Error!</h6>
        <p>{{ session('danger') }}</p>
    </div>
    <button class="close" data-dismiss="alert"></button>
</div>
@endif

@if (session('warning'))
<div class="alert alert-pro alert-warning alert-dismissible">
    <div class="alert-text">
        <h6>¡Peligro!</h6>
        <p>{{ session('warning') }}</p>
    </div>
    <button class="close" data-dismiss="alert"></button>
</div>
@endif


