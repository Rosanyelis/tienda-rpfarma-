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
                            Libro Electrónico de Reclamos y Sugerencias
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="product-tabs">
            <div class="reviews-view">
                <div class="reviews-view__list">
                    <h3 class="reviews-view__header">Libro Electrónico de Reclamos y Sugerencias</h3>
                    <div class="reviews-list">
                        <ol class="reviews-list__content">
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__avatar">
                                        <img src="{{ asset('dist/images/avatars/avatar-1.jpg')}}" alt="" />
                                    </div>
                                    <div class="review__content">
                                        <div class="review__author">Samantha</div>
                                        <div class="review__text">
                                            Probando mensaje de reclamo 1.
                                        </div>
                                        <div class="review__date">05 Abril, 2022</div>
                                    </div>
                                </div>
                            </li>
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__avatar">
                                        <img src="{{ asset('dist/images/avatars/avatar-2.jpg')}}" alt="" />
                                    </div>
                                    <div class="review__content">
                                        <div class="review__author">Adam</div>
                                        <div class="review__text">
                                            Probando mensaje de reclamo 2.
                                        </div>
                                        <div class="review__date">05 Abril, 2022</div>
                                    </div>
                                </div>
                            </li>

                        </ol>
                        {{-- <div class="reviews-list__pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link page-link--with-arrow" href="#" aria-label="Previous">
                                        <svg
                                            class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px"
                                            height="13px">
                                            <use xlink:href="{{asset('dist/images/sprite.svg#arrow-rounded-left-8x13')}}"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link--with-arrow" href="#" aria-label="Next">
                                        <svg
                                            class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px"
                                            height="13px">
                                            <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-8x13')}}"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <form class="reviews-view__form">
                    <h3 class="reviews-view__header">Escribe tu Opinión</h3>
                    <div class="row">
                        <div class="col-12 col-lg-9 col-xl-8">
                            <div class="form-group">
                                <label for="review-text">Tu Opinión</label>
                                <textarea class="form-control" id="review-text" rows="6"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Publica tu Opinión
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection
