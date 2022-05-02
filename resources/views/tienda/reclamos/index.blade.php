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
                    <div class="reviews-list">
                        <ol class="reviews-list__content">
                            @foreach ($reclamos as $item)
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__avatar">
                                        <img src="{{ asset('dist/images/avatars/blank.png')}}" alt="" />
                                    </div>
                                    <div class="review__content">
                                        <div class="review__author">{{ $item->name }}</div>
                                        <div class="review__text">
                                            {{ $item->comentario }}
                                        </div>
                                        <div class="review__date">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A')  }}</div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ol>
                        {{ $reclamos->links() }}
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
                <form method="POST" action="{{ url('/libro-electronico-de-reclamos-y-sugerencias/guardar-comentario') }}" class="reviews-view__form">
                    @csrf
                    <h3 class="reviews-view__header">Escribe tu Opinión</h3>
                    <div class="row">
                        <div class="col-12 col-lg-9 col-xl-8">
                            <div class="form-group">
                                <label for="review-text">Nombre</label>
                                <input class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre">
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="review-text">Comentario</label>
                                <textarea class="form-control @error('comentario') is-invalid @enderror" name="comentario" id="review-text" rows="6">{{ old('comentario') }}</textarea>
                                @if ($errors->has('comentario'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('comentario') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Publicar
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
