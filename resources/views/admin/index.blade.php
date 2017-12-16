

@extends('layouts.admin')

@section('content')


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Nadzorna
                    <small>plošča</small>
                </h1>


                <div class="row">
                    {{--<div class="col-lg-3 col-md-6">--}}
                        {{--<div class="panel panel-primary">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-3">--}}
                                        {{--<i class="fa fa-users fa-5x"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-9 text-right">--}}
                                        {{--<div class="huge">{{$item_count}}</div>--}}
                                        {{--<div>Število artiklov</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<a href="{{route('admin.items.index')}}">--}}
                                {{--<div class="panel-footer">--}}

                                    {{--<span class="pull-left">Podrobnosti</span>--}}
                                    {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-lg-3 col-md-6">--}}
                        {{--<div class="panel panel-green">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-3">--}}
                                        {{--<i class="fa fa-photo fa-5x"></i>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-9 text-right">--}}
                                        {{--<div class="huge">{{$post_count}}</div>--}}
                                        {{--<div>Članki</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<a href="{{route('admin.posts.index')}}">--}}
                                {{--<div class="panel-footer">--}}
                                    {{--<span class="pull-left">Ogled člankov</span>--}}
                                    {{--<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Slike

                                        </div>

                                        <div>Slike</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('admin.media.index')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Pregled slik</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Sporočila

                                        </div>
                                        <div>Sporočila</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('admin.contactus.index')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">Pregled sporočil</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                </div> <!--First Row-->


                <div class="row">


                    <div id="piechart" style="width: 900px; height: 500px;"></div>



                </div>

























            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
@endsection
