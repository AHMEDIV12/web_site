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
                <section class="section p-t-100 p-b-65">
                    @if (isset($header))
                    <?php
                        $header_meta = (array) json_decode($header->meta);
                    ?>
                        @auth
                            <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -80%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0; z-index: 5;">
                                <button   class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center" style="z-index: 5;"  data-toggle="modal"  data-target="#edithead">
                                    edit heading<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endauth
                        <div class="container">
                            <div class="page-heading">
                                <h4 class="title-sub title-sub--c8 m-b-15">{{$header_meta['sub_title']}}</h4>
                                <h2 class="title-2">{{$header_meta['title']}}</h2>
                            </div>
                        </div>
                    @else
                        <div class="container">
                            @auth
                                <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                                    <button id="addprojects" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#edithead">
                                        add heading <i class="fa fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endauth    
                            <div class="page-heading">
                                <h4 class="title-sub title-sub--c8 m-b-15">Our project</h4>
                                <h2 class="title-2">We shape our buildings
                                    <br>thereafter they shape us</h2>
                            </div>
                        </div>
                    @endif
                </section>
                <!-- END PAGE HEADING-->
                    @auth
                        <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                            <button id="addprojects" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addproject">
                                add Project <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endauth
                <!-- PROJECT-->
                <section class="section p-b-120">
                    <div class="wrap wrap--w1790">
                        <div class="container-fluid">
                            <div class="row gutter-lg">
                                @if (sizeOf($all_projects))
                                    @foreach ($all_projects as $project )
                                    <?php
                                        $project_imgs = (array) json_decode($project->img);
                                        $project_meta = (array) json_decode($project->meta);
                                    ?>
                                        <div class="col-md-6 col-lg-3">
                                            @auth
                                                <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -74%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0; z-index: 5;">
                                                    <button   class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center" style="z-index: 5;"  data-toggle="modal"  data-target="#project{{$project->id}}">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                    <form action="{{route('all_projects.destroy' , $project->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            @endauth
                                            <article class="media media-project media-project-1">
                                                <figure class="media__img">
                                                    <img src="{{asset($project_imgs['0'])}}" alt="luxury villa" />
                                                </figure>
                                                <div class="bg-overlay"></div>
                                                <span class="line"></span>
                                                <span class="line line--bottom"></span>
                                                <div class="media__body">
                                                    <h3 class="title">
                                                        <a href="{{route('all_projects.show' , $project->id)}}">{{$project_meta['project_name']}}</a>
                                                    </h3>
                                                    <div class="address">{{$project_meta['project_adress']}}</div>
                                                </div>
                                            </article>
                                        </div>
                                    
                                    @endforeach
                                @else
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-01.jpg" alt="luxury villa" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">luxury villa</a>
                                                </h3>
                                                <div class="address">Perth, Australia</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-02.jpg" alt="wooden villa" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">wooden villa</a>
                                                </h3>
                                                <div class="address">New York, USA</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-03.jpg" alt="Skyline" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">Skyline</a>
                                                </h3>
                                                <div class="address">Michigan, USA</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-04.jpg" alt="Frozen house" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">Frozen house</a>
                                                </h3>
                                                <div class="address">Mexico</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-29.jpg" alt="luxury villa" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">luxury villa</a>
                                                </h3>
                                                <div class="address">Perth, Australia</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-30.jpg" alt="wooden villa" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">wooden villa</a>
                                                </h3>
                                                <div class="address">New York, USA</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-31.jpg" alt="wooden villa" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">wooden villa</a>
                                                </h3>
                                                <div class="address">New York, USA</div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <article class="media media-project media-project-1">
                                            <figure class="media__img">
                                                <img src="images/project-32.jpg" alt="Skyline" />
                                            </figure>
                                            <div class="bg-overlay"></div>
                                            <span class="line"></span>
                                            <span class="line line--bottom"></span>
                                            <div class="media__body">
                                                <h3 class="title">
                                                    <a href="project-detail-1.html">Skyline</a>
                                                </h3>
                                                <div class="address">Michigan, USA</div>
                                            </div>
                                        </article>
                                    </div>
                                @endif
                            </div>
                            <div class="text-center p-t-20">
                                <a class="au-btn au-btn--c6 au-btn-lg" href="#">Load more</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END PROJECT-->
            </main>
        <!-- MAIN-->



<!-- PROJECT Create Modal -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('all_projects.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Project Name</label>
                        <input name="project_name" type="text" class="form-control" id="addField" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Project Adress</label>
                        <input name="project_adress" type="text" class="form-control fit-content"  id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Client Name</label>
                        <input name="client_name" type="text" class="form-control fit-content"  id="exampleInputPassword1">
                    </div>
                    <div class="form-group justify-between">
                        <div>
                            <label for="exampleInputPassword1">Project Status</label>
                            <input name="project_status" type="text" class="form-control fit-content"   id="exampleInputPassword1">
                        </div>
                        <div>
                            <label for="exampleInputPassword1">Project Date</label>
                            <input name="project_date" type="text" class="form-control fit-content" placeholder="yy\mm\dd"  id="exampleInputPassword1">
                        </div>
                        </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Project Discreption</label>
                        <textarea name="project_disc" type="text" class="form-control fit-content" rows="3"  id="exampleInputPassword1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="mb-0 pt-1">Cover Image</label>
                        <p class="text-sm">image size should be 1170 * 623 </p>
                        <input name="cover_img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="mb-0 pt-1">Choose Multiple Images</label>
                        <p class="text-sm">image size should be 1170 * 623 </p>
                        <input name="img[]" type="file" class="form-control-file fit-content" multiple="multiple" id="exampleFormControlFile1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn modal-btn">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- end modal-->

<!-- Header Create and update Modal -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="edithead" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Heading</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('header_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub Title</label>
                        <input name="sub_title" value="{{$header_meta['sub_title']}}" type="text" class="form-control" id="addField" aria-describedby="emailHelp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Title</label>
                        <input name="title" type="text" value="{{$header_meta['title']}}" class="form-control fit-content"  id="exampleInputPassword1">
                    </div>
                    <div class="modal-footer">
                        <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn modal-btn">Save changes</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
<!-- end modal-->

<!-- EDIT Project Modal -->
    @foreach ($all_projects as $project )
                <?php
                    $project_imgs = (array) json_decode($project->img);
                    $project_meta = (array) json_decode($project->meta);
                ?>
        <div class="modal fade" id="project{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit specilize</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('all_projects.update' , $project->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-body text-bold">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project Name</label>
                                <input name="project_name" type="text" class="form-control" value="{{$project_meta['project_name']}}" id="addField" aria-describedby="emailHelp"  >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Project Adress</label>
                                <input name="project_adress" type="text" class="form-control fit-content" value="{{$project_meta['project_adress']}}"  id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Client Name</label>
                                <input name="client_name" type="text" class="form-control fit-content" value="{{$project_meta['client_name']}}" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Project Status</label>
                                <input name="project_status" type="text" class="form-control fit-content" value="{{$project_meta['project_status']}}"  id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Project Discreption</label>
                                <textarea name="project_disc" type="text" class="form-control fit-content" rows="3" id="exampleInputPassword1">{{$project_meta['project_disc']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                                <p class="text-sm">image size should be 1170 * 623 </p>
                                <input name="img[]" type="file" class="form-control-file fit-content" multiple="multiple" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  class="btn modal-btn" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn modal-btn">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
{{--end edit --}}

@endsection



