@extends('templates.first')

@section('title', 'foo')

@section('page_head')
@stop

@section('page_content')
    <section id="content">
                <div class="container">
                    <br><br><br><br>
                    hi
                    <br><br><br><br>
                    hey
                    <div class="block-header m-t-30">
                        <h2>Dashboard Prakhar</h2>

                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
            </div>
    </section>
@stop

@section('page_footer')
@stop