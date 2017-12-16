<!-- Navigation -->


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Osnovna stran</a>
    </div>


    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->name}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>--}}
                {{--</li>--}}
                <li class="divider"></li>
                <li>
                    <a href="{{route('logout')}}"><i class="fa fa-fw fa-power-off"></i> Odjavi se</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="/admin"><i class="fa fa-fw fa-dashboard"></i> Nadzorna plošča</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-user"></i> Uporabniki <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="users" class="collapse">
                    <li>
                        <a href="{{route('admin.users.index')}}">Vsi uporabniki</a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.create')}}">Dodaj novega uporabnika</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#photos"><i class="fa fa-fw fa-photo"></i> Slike <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="photos" class="collapse">
                    <li>
                        <a href="{{route('admin.media.index')}}">Vse slike</a>
                    </li>
                    <li>
                        <a href="{{route('admin.media.create')}}">Dodaj novo sliko</a>
                    </li>
                    <li>
                        <a href="{{route('admin.categories.index')}}">Kategorije slik</a>
                    </li>
                </ul>


            <li>
                <a href="{{route('admin.contactus.index')}}"><i class="fa fa-fw fa-edit"></i> Sporočila</a>
            </li>


        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>