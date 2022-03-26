
<!-- SERVICE-->
    <section class="p-t-60 p-b-60 ">
        @auth
            <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%; margin-top: 20px;">
                <button class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addservice">
                    Add specilize <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        @endauth
        <div class="container">
            <div class="section-title">
                <h5 class="title-sub">what we do</h5>
                <h2 class="title-1">Our specilization</h2>
            </div>
            <div class="row no-gutters">
                @if (sizeOf($all_services))
                    @foreach ($all_services as $service)
                        <?php
                            $service_meta = (array) json_decode($service->meta);                            
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <article class="media media-service">
                                @auth
                                    <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -74%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0; z-index: 5;">
                                        <button   class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center" style="z-index: 5;"  data-toggle="modal"  data-target="#modal{{$service->id}}">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                        <form action="{{route('service_delete' , $service->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                                <figure class="media__img" >
                                    <img src="{{$service->img}}" alt="architecture" />
                                </figure>
                                <div class="media__title">
                                    <h3 class="title">
                                        <a href="#">{{$service_meta['service_name']}}</a>
                                    </h3>
                                    <span class="number">{{$service->id}}</span>
                                </div>
                                <p class="media__text">{{$service_meta['service_disc']}}</p>
                            </article>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-6 col-lg-4">
                        <article class="media media-service">
                            <figure class="media__img">
                                <img src="images/icon/service-01.png" alt="architecture" />
                            </figure>
                            <div class="media__title">
                                <h3 class="title">
                                    <a href="#">architecture</a>
                                </h3>
                                <span class="number">01</span>
                            </div>
                            <p class="media__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo invest ntore veritatis et quasi architecto beatae vitaest dicta sunt explicabo.
                                Nemo enim ipsam vost lmat oluptatem quia voluptas sit aspernatur</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media media-service">
                            <figure class="media__img">
                                <img src="images/icon/service-02.png" alt="Interior" />
                            </figure>
                            <div class="media__title">
                                <h3 class="title">
                                    <a href="#">Interior</a>
                                </h3>
                                <span class="number">02</span>
                            </div>
                            <p class="media__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo invest ntore veritatis et quasi architecto beatae vitaest dicta sunt explicabo.
                                Nemo enim ipsam vost lmat oluptatem quia voluptas sit aspernatur</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media media-service">
                            <figure class="media__img">
                                <img src="images/icon/service-03.png" alt="planning" />
                            </figure>
                            <div class="media__title">
                                <h3 class="title">
                                    <a href="#">planning</a>
                                </h3>
                                <span class="number">03</span>
                            </div>
                            <p class="media__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo invest ntore veritatis et quasi architecto beatae vitaest dicta sunt explicabo.
                                Nemo enim ipsam vost lmat oluptatem quia voluptas sit aspernatur</p>
                        </article>
                    </div>
                @endif
            </div>
        </div>
    </section>
<!-- END SERVICE-->



<!-- SERVICE Create Modal -->
<div class="modal fade" id="addservice" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-style">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add specilize</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="{{route('service_store' )}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">specialize Name</label>
                        <input name="service_name" type="text" class="form-control fit-content" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">specialize Discreption</label>
                            <input name="service_disc" type="text" class="form-control fit-content" required>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                            <p class="text-sm">image should png </p>
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
<!-- end modal-->


<!-- EDIT Modal -->
    @foreach ($all_services as $service)
        <?php
            $service_meta = (array) json_decode($service->meta);                            
        ?>
        <div class="modal fade" id="modal{{$service->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit specilize</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('service_update' , $service->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">specialize Name</label>
                                <input name="service_name" type="text" class="form-control fit-content" value="{{$service_meta['service_name']}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">specialize Discreption</label>
                                    <input name="service_disc" type="text" class="form-control fit-content" value="{{$service_meta['service_disc']}}" required>
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                                    <p class="text-sm">image should png </p>
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
