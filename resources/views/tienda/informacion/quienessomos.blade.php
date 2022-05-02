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
                            Quiénes Somos
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="document">
                <div class="document__header">
                    <h1 class="document__title">Quiénes Somos</h1>
                </div>
                <div class="document__content typography" style="text-align: justify;">
                    <p>
                        Farmacias Rp Farma nace el 15 de febrero de 2021, pero con una amplia experiencia en lo que
                        se refiere a la fabricación de recetas magistrales, cumpliendo un importante rol social al
                        poner al alcance de los pacientes, alternativas farmacéuticas económicas y de rápido acceso.
                    <p>
                        Nuestra misión es poner soluciones de salud, económicas y de acceso universal a los
                        pacientes, dando una herramienta confiable al cuerpo médico para obtener los resultados
                        esperados en sus terapias.
                    </p>
                    <p>
                        Nuestros valores están relacionados al profesionalismo, oportunidad y rapidez en lograr los
                        objetivos de salud de la población.
                    </p>
                    <p>Es por lo anterior que creamos nuestra farmacia virtual, para extender nuestros servicios y
                        complementar con medicamentos tradicionales las terapias requeridas por nuestros pacientes.
                    </p>
                    <div style="text-align: center;">
                        <p><strong>Rp Farma <br>Farmacia Magistral</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
