@extends ('layouts.layoutienda')
@section('content')
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Inicio</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Información Reglamentaria
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block block-features block-features--layout--classic mt-3">
        <div class="container">
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__content">
                        <div class="block-features__title">Decreto 466</div>
                        <a href="https://www.bcn.cl/leychile/navegar?idNorma=13613" target="_blank" class="block-features__subtitle">Ver</a>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__content">
                        <div class="block-features__title">Decreto 3</div>
                        <a href="https://www.bcn.cl/leychile/navegar?idNorma=1026879" target="_blank" class="block-features__subtitle">Ver</a>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__content">
                        <div class="block-features__title">DECRETO 58</div>
                        <a href="https://www.bcn.cl/leychile/navegar?idNorma=1144960" target="_blank" class="block-features__subtitle">Ver</a>
                    </div>
                </div>
                <div class="block-features__divider"></div>
            </div>
        </div>
    </div>
@endsection
