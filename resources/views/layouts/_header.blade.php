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
                <li class="{{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}">话题</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show',1) }}">分享</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show',2) }}">教程</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show',3) }}">问答</a></li>
                <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}"><a href="{{ route('categories.show',4) }}">公共</a></li>

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
                            <a href="{{ Route('users.show',Auth::id()) }}">
                                <span class="glyphicon glyphicon-user"></span>
                                个人中心
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.edit', Auth::id()) }}">
                                <span class="glyphicon glyphicon-edit"></span>
                                编辑资料
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}"
                               onclick="event.preventDefault();
                               document.getElementById('login-from').submit(); ">
                                <span class="glyphicon glyphicon-log-out"></span>
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
