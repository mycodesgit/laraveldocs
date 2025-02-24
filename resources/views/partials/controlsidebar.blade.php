@php
    $current_route=request()->route()->getName();
@endphp

<div class="col-lg-3">
    <div class="card card-success card-outline">
        <div class="card-body">
            <ul class="nav nav-pills nav-sidebar nav-compact flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li ass="nav-item">
                    <a href="{{ route('dash') }}" class="nav-link {{$current_route=='dash'?'active':''}}">
                        <i class="fas fa-bars-progress"></i> Installation
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog"></i> Configuration
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('timezoneStore') }}" class="nav-link {{ request()->is('timezone*') ? 'active' : '' }}">
                                <i class="fas fa-minus nav-icon"></i>
                                <p>Timezone</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('environmentStore') }}" class="nav-link {{ request()->is('environment*') ? 'active' : '' }}">
                                <i class="fas fa-minus nav-icon"></i>
                                <p>Environment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('redirectStore') }}" class="nav-link {{ request()->is('redirect*') ? 'active' : '' }}">
                                <i class="fas fa-minus nav-icon"></i>
                                <p>Redirect</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li ass="nav-item">
                    <a href="{{ route('bladefrontendStore') }}" class="nav-link {{$current_route=='bladefrontendStore'?'active':''}}">
                        <i class="fas fa-file-lines"></i> Front End
                    </a>
                </li>

                <li ass="nav-item">
                    <a href="{{ route('backendcontrolStore') }}" class="nav-link {{$current_route=='backendcontrolStore'?'active':''}}">
                        <i class="fas fa-file-zipper"></i> Back End
                    </a>
                </li>

                <li ass="nav-item">
                    <a href="{{ route('routecontrolStore') }}" class="nav-link {{$current_route=='routecontrolStore'?'active':''}}">
                        <i class="fas fa-sitemap"></i> Routing
                    </a>
                </li>

                <li ass="nav-item">
                    <a href="{{ route('migrationStore') }}" class="nav-link {{$current_route=='migrationStore'?'active':''}}">
                        <i class="fas fa-cloud-arrow-up"></i> Migration
                    </a>
                </li>

                <li ass="nav-item">
                    <a href="{{ route('modelsStore') }}" class="nav-link {{$current_route=='modelsStore'?'active':''}}">
                        <i class="fas fa-gears"></i> Models
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>