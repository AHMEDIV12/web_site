@extends('layouts.main_layout')


@section('content')

        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            <!-- PAGE HEADING-->
            @include('about_page.incs._page_heading')
            <!-- END PAGE HEADING-->


            <!-- ABOUT US-->
            @include('about_page.incs._about_us')
            <!-- END ABOUT US-->

            <!-- SERVICE-->
            @include('about_page.incs._service')
            <!-- END SERVICE-->

            <!-- CLIENT-->
            @include('about_page.incs._client')
            <!-- END CLIENT-->

            <!-- TEAM-->
            @include('about_page.incs._teame')
            <!-- END TEAM-->
        </main>
        <!-- END MAIN-->


        
    {{--  sesion errors --}}
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="errors" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ERROR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-bold">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <strong>{{$error}}!</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="modal-footer">
                    <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- end modal-->


    {{--  sesion success message --}}
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="success_message" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MESSAGE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-bold">

                    @if(session()->has('success'))
                            <div class="alert alert-success text-center">
                                {{ session()->get('success') }}
                            </div>
                    @elseif (session()->has('Fail'))
                        <div class="alert alert-danger text-center">
                            {{ session()->get('Fail') }}
                        </div>
                    @endif
                </div>

                <div class="modal-footer">
                    <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> <!-- end modal-->



@endsection










