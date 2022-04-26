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
                            Peritório Mínimo y Carta de Desabastecimiento
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
                        <div class="block-features__title">Peritorio Mínimo</div>
                        <a href="{{ asset('pdf/petitorio minimo.pdf') }}" target="_blank" class="block-features__subtitle">Ver</a>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__content">
                        <div class="block-features__title">Carta de Desabastecimiento</div>
                        <a href="{{ asset('pdf/cartaDesabastecimiento.pdf') }}" target="_blank" class="block-features__subtitle">Ver</a>
                    </div>
                </div>
                <div class="block-features__divider"></div>
            </div>
        </div>
    </div>
@endsection
