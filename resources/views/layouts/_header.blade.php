<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-graget="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="{{ url('/') }}" class="navbar-brand">LaraBBS</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('login') }}">登陆</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
                    @else
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">
                        <span class="user-avatar pull-left" style="margin-left: 8px;margin-top: -5px;">
                            <img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" alt="avatar" class="img-responsive img-circle" width="30px" height="30px">
                        </span>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('login') }}"
                               onclick="event.preventDefault();
                               document.getElementById('login-from').submit(); ">
                                退出登录
                            </a>
                            <form action="{{ route('logout') }}" id="login-from" method="post" style="display: none">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                    @endguest
            </ul>

        </div>
    </div>
</nav>
