<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('images/logo-RpFARMA.png') }}"  alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/logo-RpFARMA.png') }}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo-RpFARMA.png') }}"  alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Módulos</h6>
                    </li><!-- .nk-menu-item -->
                    @if (Auth::user()->rol->name == 'Developer')
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/dashboard')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/productos') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-fill"></em></span>
                            <span class="nk-menu-text">Productos</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/ordenes') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                            <span class="nk-menu-text">Ordenes</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/reclamos-y-sugerencias') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                            <span class="nk-menu-text">Reclamos</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Configuraciones</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/categorias') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Categorías</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/roles') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Roles</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/laboratorio') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Laboratorio</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/formas-farmaceuticas') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Formas Farmaceuticas</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/condiciones-venta') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Condiciones de venta</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/tipos-administracion') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Tipos de administracion</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/usuarios') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Usuarios</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    @endif
                    @if (Auth::user()->rol->name == 'Químico Evaluador')
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/productos') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-fill"></em></span>
                            <span class="nk-menu-text">Productos</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/ordenes') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                            <span class="nk-menu-text">Ordenes</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endif
                    @if (Auth::user()->rol->name == 'Soporte')
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/reclamos-y-sugerencias') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                            <span class="nk-menu-text">Reclamos</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endif
                    @if (Auth::user()->rol->name == 'Administrador')
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/dashboard')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/productos') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-fill"></em></span>
                            <span class="nk-menu-text">Productos</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/ordenes') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                            <span class="nk-menu-text">Ordenes</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('admin/reclamos-y-sugerencias') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                            <span class="nk-menu-text">Reclamos</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Configuraciones</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/categorias') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Categorías</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/laboratorio') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Laboratorio</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/formas-farmaceuticas') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Formas Farmaceuticas</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/condiciones-venta') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Condiciones de venta</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('admin/configuraciones/tipos-administracion') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Tipos de administracion</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    @endif
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
