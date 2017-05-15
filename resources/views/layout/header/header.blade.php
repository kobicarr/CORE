<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="/home" class="navbar-brand">CORE</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/categories">Categories</a>
                </li>

                <li>
                    <a href="/newest">Newest</a>
                </li>
                <li>
                    <a href="/contact">Contact us</a>
                </li>
                <li>
                    <a href="/companies">Companies</a>
                </li>

                <li>
                    <a href="/shopping-cart">Shopping cart <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                </li>
                @if(Auth::check())
                    <li>
                        <a href="/orders">Orders</a>
                    </li>

                @endif
            </ul>
            @if(!Auth::check())
            <ul class="navbar-form navbar-nav navbar-right">
                <a class="btn btn-link" href="{{ route('login') }}">
                    Login
                </a>
                <a class="btn btn-link" href="{{ route('register') }}">
                    Register
                </a>
            </ul>
            @else
                <div class="navbar-form navbar-nav navbar-right">
                {{Auth::user()->name}}

                <a class="navbar-form navbar-nav navbar-right btn btn-link" style="margin-left: 20px;" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>


                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif



        </div>
    </div>
</div>