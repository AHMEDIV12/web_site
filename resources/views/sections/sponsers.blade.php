





            {{-- sponsers and reviews --}}
            <section class="section-pp pp-easing bg-image-1 section-pp--pad" data-background="dark" data-title="testimonial">
                <!-- PAGE LINE-->
                <div class="page-line light">
                    <div class="container">
                        <div class="page-line__inner">
                            <div class="page-col"></div>
                            <div class="page-col"></div>
                            <div class="page-col"></div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE LINE-->

                <div class="section-content">
                    <div class="container">
                        @auth
                            <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                                <button id="addsponsers" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addsponser">
                                    add Sponser <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endauth
                        <div class="row m-b-10">
                            @if (count($all_sponsers) > 0)
                            
                                @foreach ($all_sponsers as $sponser )
                                    <div class="col-lg-3 col-md-6">
                                        @auth
                                            <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -74%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0">
                                                <button id="editproject"  class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center"  data-toggle="modal"  data-target="#sponser{{$sponser->id}}">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            
                                                <form action="{{route('sponsers.destroy' , $sponser->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        @endauth
                                        <a class="img-client" href="#">
                                            <img src="{{$sponser->img}}" alt="Client 1">
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-09.png" alt="Client 1">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-10.png" alt="Client 2">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-11.png" alt="Client 3">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-12.png" alt="Client 4">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-13.png" alt="Client 5">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-14.png" alt="Client 6">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-15.png" alt="Client 7">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <a class="img-client" href="#">
                                        <img src="images/icon/client-16.png" alt="Client 8">
                                    </a>
                                </div>
                            @endif
                        </div>
                        @auth
                            <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                                <button id="addrev" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addreview">
                                    add REview <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endauth
                        <div class="slick-wrap slick-testi js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="1" data-slick-lg="2" data-slick-xl="2" data-slick-customnav="true" data-slick-autoplay="true">
                            @if (count($all_reviews) > 0 )
                            <div class="slick-wrap-content">
                                <div class="slick-content js-slick-content">
                                    @foreach ($all_reviews as $review )
                                    <div class="slick-item">
                                            @auth
                                                <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -74%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0">
                                                    <button id="editproject"  class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center"  data-toggle="modal"  data-target="#review{{$review->id}}">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                    <form action="{{route('reviews.destroy' , $review->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endauth
                                            <div class="media-testi light">
                                                <p class="media__text">{{$review->disc}}</p>
                                                <div class="media__title">
                                                    <span class="ti-quote-left quote"></span>
                                                    <h4 class="name">
                                                        <a href="#">{{$review->reviewer_name}}</a>
                                                    </h4>
                                                    <span class="job">{{$review->reviewer_title}}</span>
                                                </div>
                                                <figure class="media__img img--rounded">
                                                    <img src="{{$review->img}}" alt="Pearl Rivera" />
                                                </figure>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                            @else
                                <div class="slick-wrap-content">
                                    <div class="slick-content js-slick-content">
                                        <div class="slick-item">
                                            <div class="media-testi light">
                                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</p>
                                                <div class="media__title">
                                                    <span class="ti-quote-left quote"></span>
                                                    <h4 class="name">
                                                        <a href="#">Pearl Rivera</a>
                                                    </h4>
                                                    <span class="job">Au Founder</span>
                                                </div>
                                                <figure class="media__img img--rounded">
                                                    <img src="images/testi-01.jpg" alt="Pearl Rivera" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="slick-item">
                                            <div class="media-testi light">
                                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</p>
                                                <div class="media__title">
                                                    <span class="ti-quote-left quote"></span>
                                                    <h4 class="name">
                                                        <a href="#">Ray Owens</a>
                                                    </h4>
                                                    <span class="job">Loco CEO</span>
                                                </div>
                                                <figure class="media__img img--rounded">
                                                    <img src="images/testi-02.jpg" alt="Ray Owens" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="slick-item">
                                            <div class="media-testi light">
                                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</p>
                                                <div class="media__title">
                                                    <span class="ti-quote-left quote"></span>
                                                    <h4 class="name">
                                                        <a href="#">Megan Fernandez</a>
                                                    </h4>
                                                    <span class="job">BigBit Founder</span>
                                                </div>
                                                <figure class="media__img img--rounded">
                                                    <img src="images/testi-03.jpg" alt="Megan Fernandez" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="slick-item">
                                            <div class="media-testi light">
                                                <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.</p>
                                                <div class="media__title">
                                                    <span class="ti-quote-left quote"></span>
                                                    <h4 class="name">
                                                        <a href="#">Jack Hopkins</a>
                                                    </h4>
                                                    <span class="job">Bitbucket CEO</span>
                                                </div>
                                                <figure class="media__img img--rounded">
                                                    <img src="images/testi-04.jpg" alt="Jack Hopkins" />
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="slick__nav arrows-1 light">
                                <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                                <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>







            
    <!-- SPONSER Create Modal -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addsponser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Sponser</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('sponsers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="mb-0 pt-1 text-lg">Sponser LoGo</label>
                        <input name="img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn modal-btn">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div> <!-- end modal-->


    
    <!-- Rievew Create Modal -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addreview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('reviews.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body text-bold">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Reviewer Name</label>
                            <input name="reviewer_name" type="text" class="form-control" id="addField" aria-describedby="emailHelp"  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Reviewer Title</label>
                            <input name="reviewer_title" type="text" class="form-control fit-content"  id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Review Discreption</label>
                            <textarea name="disc" type="text" class="form-control fit-content" id="exampleInputPassword1"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1" class="mb-0 pt-1">Revewer Image</label>
                            <p class="text-sm">image size should be 1170 * 623 </p>
                            <input name="img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modal-btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end modal-->




    
    {{--  Sponser's edit button modal --}}
    @foreach ($all_sponsers as $sponser)
        <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="sponser{{$sponser->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Sponser</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- sponser Edit form -->
                <form id="projectupdate" action="{{route('sponsers.update' , $sponser->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body text-bold">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pick  Image</label>
                            <input name="img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modal-btn">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div> <!-- end modal-->
    @endforeach
    
    {{--  Review's edit button modal --}}
    @foreach ($all_reviews as $review)
        <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="review{{$review->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit REview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- review Edit form -->
                <form id="projectupdate" action="{{route('reviews.update' , $review->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body text-bold">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Reviewer Name</label>
                            <input name="reviewer_name" type="text" class="form-control" id="{{$review->id}}" aria-describedby="emailHelp"   value="{{$review->reviewer_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Reviewer Title</label>
                            <input name="reviewer_title" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1 " value="{{$review->reviewer_title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Discreption</label>
                            <textarea name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">{{$review->disc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label>
                            <input name="img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modal-btn">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
        </div> <!-- end modal-->
    @endforeach
    