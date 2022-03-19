






            <section class="section-pp pp-easing section-pp--pad" data-background="light" data-title="why choose us">
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

                <div class="section-content">
                    <div class="container">
                        @if (count($all_whyus) > 0 )

                            @foreach ( $all_whyus as $why_us )
                            
                                <div class="row no-gutters">
                                    @auth
                                        <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                                            <button class="btn btn-warning" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#why_us{{$why_us->id}}">
                                                edit<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    @endauth
                                    <div class="col-md-8 p-r-155">
                                        <h4 class="title-sub m-b-15">why work with us</h4>
                                        <h2 class="title-1 m-b-40">{{$why_us->title}}</h2>
                                        <p class="m-b-65">
                                            {{$why_us->disc}}
                                        </p>
                                        <div class="row no-gutters">
                                            <div class="media-about-3">
                                                <div class="media__number-wrap">
                                                    <span class="media__number">01</span>
                                                    <span class="line"></span>
                                                    <span class="line line--bottom"></span>
                                                </div>
                                                <div class="media__body">
                                                    <h4 class="media__title title--sm">
                                                        <a href="#">{{$why_us->sub_t_1}}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="media-about-3">
                                                <div class="media__number-wrap">
                                                    <span class="media__number">02</span>
                                                    <span class="line"></span>
                                                    <span class="line line--bottom"></span>
                                                </div>
                                                <div class="media__body">
                                                    <h4 class="media__title title--sm">
                                                        <a href="#">{{$why_us->sub_t_2}}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="media-about-3">
                                                <div class="media__number-wrap">
                                                    <span class="media__number">03</span>
                                                    <span class="line"></span>
                                                    <span class="line line--bottom"></span>
                                                </div>
                                                <div class="media__body">
                                                    <h4 class="media__title title--sm">
                                                        <a href="#">{{$why_us->sub_t_3}}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="media-about-3">
                                                <div class="media__number-wrap">
                                                    <span class="media__number">04</span>
                                                    <span class="line"></span>
                                                    <span class="line line--bottom"></span>
                                                </div>
                                                <div class="media__body">
                                                    <h4 class="media__title title--sm">
                                                        <a href="#">{{$why_us->sub_t_4}}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="media-about">
                                            <div class="media__img media__img--rect js-line">
                                                <img src="{{$why_us->img}}" alt="About">
                                                <span class="line"></span>
                                                <span class="line line-bottom"></span>
                                                <div class="media__img-inner">
                                                    <span class="number">28</span>
                                                    <span class="desc">years of experience</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="row no-gutters">
                                @auth
                                    <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                                        <button class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addwhyus">
                                            add <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                @endauth
                                <div class="col-md-8 p-r-155">
                                    <h4 class="title-sub m-b-15">why work with us</h4>
                                    <h2 class="title-1 m-b-40">We are specialists in the field of architecture</h2>
                                    <p class="m-b-65">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utinslaboreetdolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco cot laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <div class="row no-gutters">
                                        <div class="media-about-3">
                                            <div class="media__number-wrap">
                                                <span class="media__number">01</span>
                                                <span class="line"></span>
                                                <span class="line line--bottom"></span>
                                            </div>
                                            <div class="media__body">
                                                <h4 class="media__title title--sm">
                                                    <a href="#">Professional</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="media-about-3">
                                            <div class="media__number-wrap">
                                                <span class="media__number">02</span>
                                                <span class="line"></span>
                                                <span class="line line--bottom"></span>
                                            </div>
                                            <div class="media__body">
                                                <h4 class="media__title title--sm">
                                                    <a href="#">enthusiasm</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="media-about-3">
                                            <div class="media__number-wrap">
                                                <span class="media__number">03</span>
                                                <span class="line"></span>
                                                <span class="line line--bottom"></span>
                                            </div>
                                            <div class="media__body">
                                                <h4 class="media__title title--sm">
                                                    <a href="#">passion</a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="media-about-3">
                                            <div class="media__number-wrap">
                                                <span class="media__number">04</span>
                                                <span class="line"></span>
                                                <span class="line line--bottom"></span>
                                            </div>
                                            <div class="media__body">
                                                <h4 class="media__title title--sm">
                                                    <a href="#">24 / 7 support</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="media-about">
                                        <div class="media__img media__img--rect js-line">
                                            <img src="images/about-03.jpg" alt="About">
                                            <span class="line"></span>
                                            <span class="line line-bottom"></span>
                                            <div class="media__img-inner">
                                                <span class="number">28</span>
                                                <span class="desc">years of experience</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>




    <!-- Why_Us Create Modal   -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addwhyus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="
                                            background-color: rgb(215 215 215);
                                            border: 1px solid #eeeeee4a;
                                            padding: 22px;
                                            padding-bottom: 3px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Why Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('whyus.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Why Us</label>
                        <input name="title" type="text" class="form-control" id="addField" aria-describedby="emailHelp"  placeholder="field name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Discreption</label>
                        <input name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SubTitle 01</label>
                        <input name="sub_t_1" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SubTitle 02</label>
                        <input name="sub_t_2" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SubTitle 03</label>
                        <input name="sub_t_3" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SubTitle 04</label>
                        <input name="sub_t_4" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Pick an Image</label>
                        <p>image size should be 960 * 1526 </p>
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



    {{-- edit why us modal  --}}
    @foreach ($all_whyus as $whyus )
        <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="why_us{{$why_us->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit why_us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- edit why us form  --}}
                <form action="{{route('whyus.update' , $why_us->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body text-bold">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="title" type="text" class="form-control"  aria-describedby="emailHelp"   value="{{$why_us->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Discreption</label>
                            <textarea name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">{{$why_us->disc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Title 1</label>
                            <input name="sub_t_1" type="text" class="form-control"  aria-describedby="emailHelp"   value="{{$why_us->sub_t_1}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Title 2</label>
                            <input name="sub_t_2" type="text" class="form-control"  aria-describedby="emailHelp"   value="{{$why_us->sub_t_2}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Title 3</label>
                            <input name="sub_t_3" type="text" class="form-control"  aria-describedby="emailHelp"   value="{{$why_us->sub_t_3}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Title 4</label>
                            <input name="sub_t_4" type="text" class="form-control"  aria-describedby="emailHelp"   value="{{$why_us->sub_t_4}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pick an Image</label>
                            <p class="text-sm">image size should be 960 * 1526 </p>
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
