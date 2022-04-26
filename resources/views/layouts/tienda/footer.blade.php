<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contáctanos</h5>
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo-RpFARMA.png') }}"  width="220px"  alt="Logo RPFarma">
                            </a>
                            <ul class="footer-contacts__contacts">
                                <li>
                                    <i class="footer-contacts__icon fas fa-globe-americas"></i>
                                    Av. Américo Vespucio 0410, Quilicura.
                                </li>
                                <li>
                                    <i class="footer-contacts__icon far fa-envelope"></i>
                                    ventasweb@farmaciarpfarma.cl
                                </li>
                                <li>
                                    {{-- <i class="footer-contacts__icon fas fa-mobile-alt"></i> --}}
                                    {{-- (800) 060-0730, (800) 060-0730 --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Información</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item">
                                    <a href="{{ url('quienes-somos') }}" class="footer-links__link">Quiénes Somos</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="{{ url('/informacion-reglamentaria') }}" class="footer-links__link">Información Reglamentaria</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="{{ url('/procedimiento-de-devoluciones') }}" class="footer-links__link">Procedimiento de Devoluciones</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="{{ url('/peritorio-minimo-y-carta-de-desabastecimiento') }}" class="footer-links__link">Peritorio Mínimo y Carta de Desabastecimiento</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="{{ url('/terminos-y-condiciones') }}" class="footer-links__link">Términos y Condiciones</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="{{ url('/libro-electronico-de-reclamos-y-sugerencias') }}" class="footer-links__link">Libro Electrónico de Reclamos y Sugerencias</a>
                                </li>
                                <li class="footer-links__item">
                                    <a href="{{ url('/politicas-de-privacidad-y-proteccion-de-datos') }}" class="footer-links__link">Politicas de Privacidad y Protección de Datos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Pagos Seguros con</h5>
                            <img src="{{asset('dist/images/webpay-plus.png')}}" width="80%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
