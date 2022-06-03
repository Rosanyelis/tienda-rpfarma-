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
                            <ol class="comments-list comments-list--level--0">
                                @foreach ($reclamos as $item)
                                    <li class="comments-list__item">
                                        <div class="comment">
                                            <div class="comment__avatar">
                                                <img src="{{ asset('dist/images/avatars/blank.png') }}" alt="">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__header">
                                                    @php
                                                        $nombre = strtok($item->name," ");
                                                    @endphp
                                                    <div class="comment__author">{{ $nombre }}</div>
                                                    <div class="comment__reply">
                                                        <span class="badge badge-info">{{ $item->tipo }}</span>
                                                        <span class="badge badge-success">{{ $item->codigo }}</span></div>
                                                </div>
                                                <div class="comment__text">{{ $item->comentario }}</div>
                                                <div class="comment__date">
                                                    {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F, Y h:i A') }}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ol>
                            {{ $reclamos->links() }}
                        </div>
                    </div>
                    <section class="post__section">
                        <h4 class="post__section-title">Escribe tu Reclamo o Sugerencia</h4>
                        <form method="POST"
                            action="{{ url('/libro-electronico-de-reclamos-y-sugerencias/guardar-comentario') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="comment-first-name">Nombre</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                                        id="comment-first-name" placeholder="Ejm: Jon Doe">
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="comment-last-name">Tipo Comentario</label>
                                    <select class="form-control  @error('tipo') is-invalid @enderror" name="tipo">
                                        <option>Seleccione...</option>
                                        <option value="Reclamo">Reclamo</option>
                                        <option value="Sugerencia">Sugerencia</option>
                                        <option value="Opinión">Opinión</option>
                                    </select>
                                    @if ($errors->has('tipo'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('tipo') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comentario">Comentario</label>
                                <textarea class="form-control @error('comentario') is-invalid @enderror" id="comentario" name="comentario" rows="6">{{ old('comentario') }}</textarea>
                                @if ($errors->has('comentario'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('comentario') }}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group mt-2 float-right">
                                <button type="submit" class="btn btn-primary btn-lg">Publicar</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
