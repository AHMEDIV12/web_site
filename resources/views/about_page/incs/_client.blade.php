
{{-- Section back-ground image --}}
    @if ( isset( $client_bg->img ) && ( $client_bg->img != null ) )
        @push('css')
            <style>
                .background_imge{
                    background: url({{$client_bg->img}}) center center/cover fixed no-repeat ;
                }
            </style>
        @endpush 
    @endif
{{--end Section back-ground image --}}

{{-- start CLENT SECTION --}}
    
    @auth  <!-- ADD CLIENT -->
        <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%; margin-top: 20px;">
            <button class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addclient">
                Add Client <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
        </div>
    @endauth


    <section class="headline section bg-pattern-01 p-t-100 p-b-25 @if ( isset ( $client_bg->img ) && ( $client_bg->img != null ) ) background_imge  @endif"  >
        <div class="container" style="position: relative;">
            @auth
                <div class="d-flex justify-content-end align-items-center mb-4" style="width: 104%;margin-top: -15vh;">
                    <button id="addprojects" class="btn btn-warning" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addclient_bg">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </button>
                </div>
            @endauth
            <div class="row">
                <div class="col-md-12 col-xl-3">
                    <div class="section-title section-title--light text-left p-t-15">
                        <h5 class="title-sub">awesome partner</h5>
                        <h2 class="title-1">Our Clients</h2>
                    </div>
                </div>
                <div class="col-md-12 col-xl-9">
                    <div class="row">
                        @if (sizeOf($all_clients))
                            @foreach ( $all_clients as $client )
                                <div class="col-md-6 col-lg-3"  >
                                    @auth
                                        <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style="right: -60%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0; z-index: 5;">
                                            <button   class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center" style="z-index: 5;"  data-toggle="modal"  data-target="#client{{$client->id}}">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <form action="{{route('client_delete' , $client->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @endauth
                                    <a class="img-client m-b-60" href="#" data-tilt >
                                        @if (isset($client->img))
                                            <img src="{{ $client->img}}" alt="Client 1">
                                        @else
                                            <img src="images/icon/client-09.png" alt="Client 1">
                                        @endif
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-10.png" alt="Client 2">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-11.png" alt="Client 3">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-12.png" alt="Client 4">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-13.png" alt="Client 5">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-14.png" alt="Client 6">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-15.png" alt="Client 7">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a class="img-client m-b-60" href="#">
                                    <img src="images/icon/client-16.png" alt="Client 8">
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--END CLIENT SECTION-->

<!-- Client Create Modal -->
    <div class="modal fade" id="addclient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add specilize</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="{{route('client_store' )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                                <p class="text-sm">image should LOGO </p>
                                <input name="img" type="file" class="form-control-file fit-content"  required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modal-btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--end modal-->

<!-- EDIT Client Modal -->
    @foreach ($all_clients as $client)
        <div class="modal fade" id="client{{$client->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit specilize</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('client_update' , $client->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                    <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                                    <p class="text-sm">image should LOGO </p>
                                    <input name="img" type="file" class="form-control-file fit-content"  required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn modal-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn modal-btn">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- edit modal --}}
    @endforeach
{{--end edit Client --}}

<!-- Client background Create Modal -->
    <div class="modal fade" id="addclient_bg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add specilize</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="{{route('client_bg_store' )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                                <p class="text-sm">image should LOGO </p>
                                <input name="img" type="file" class="form-control-file fit-content" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modal-btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--end modal-->
