<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            {{ link_to_route('frontend.index', app_name(), [], ['class' => 'navbar-brand']) }}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>{{ link_to_route('frontend.about', trans('navs.frontend.about')) }}</li>
                @if (config('locale.status') && count(config('locale.languages')) > 1)
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ trans('menus.language-picker.language') }}
                            <span class="caret"></span>
                        </a>

                        @include('includes.partials.lang')
                    </li>
                @endif
                @if ($logged_in_user)
                    <li>{{ link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard')) }}</li>
                @endif

                @if (! $logged_in_user)
                    <li>{{ link_to_route('frontend.auth.login', trans('navs.frontend.login')) }}</li>

                    @if (config('access.users.registration'))
                        <li>{{ link_to_route('frontend.auth.register', trans('navs.frontend.register')) }}</li>
                    @endif
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ $logged_in_user->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @permission('view-backend')
                            <li>{{ link_to_route('admin.dashboard', trans('navs.frontend.user.administration')) }}</li>
                            @endauth

                            <li>{{ link_to_route('frontend.user.account', trans('navs.frontend.user.account')) }}</li>
                            <li>{{ link_to_route('frontend.auth.logout', trans('navs.general.logout')) }}</li>
                        </ul>
                    </li>
                @endif
                <li>{{ link_to_route('frontend.contact', trans('navs.frontend.contact')) }}</li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>