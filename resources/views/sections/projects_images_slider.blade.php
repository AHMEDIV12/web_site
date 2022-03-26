






            <section class="section-pp pp-easing bg-pattern-1 section-pp--pad" data-background="dark" data-title="Latest works">
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

                @auth
                    <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                        <button id="addprojects" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addproject">
                            add Project <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                @endauth

                <div class="section-content projectsimages-content">
                    <div class="container">
                        <div class="rev_slider_wrapper">
                            <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-height="650" data-rev-layout="auto" data-rev-bullets="false" data-rev-arrows="true" data-rev-stylearrow="au-rev-arrow-3" data-rev-parallaxon="true">
                                <ul class="list-rev-item--ov">
                                    @if (count($all_projects) > 0 )
                                    @foreach ($all_projects as $project)
                                    <li class="rev-item rev-item-1 rev-item--ov" data-transition="crossfade">
                                        @auth
                                            <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -94%;padding: 0px;width: 0;top: 3vh; height: 0; border: 0">
                                                <button id="editproject"  class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center"  data-toggle="modal"  data-target="#project{{$project->id}}">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            
                                                <form action="{{route('projects.destroy' , $project->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        @endauth
                                                <img class="rev-slidebg" src="{{$project->project_img}}" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                                <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                                data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">{{$project->project_adress}}</h4>
                                                <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                                data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">{{$project->project_name}}
                                                </h2>
                                            </li>
                                            
                                            @endforeach
                                    @else
                                        <li class="rev-item rev-item-1 rev-item--ov" data-transition="crossfade">
                                            <img class="rev-slidebg" src="images/slide-04.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                            <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                            data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                            data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">Perth - Australia</h4>
                                            <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                            data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                            data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">Cora Restaurant
                                            </h2>
                                        </li>
                                        <li class="rev-item rev-item-1 rev-item--ov" data-transition="zoomout">
                                            <img class="rev-slidebg" src="images/slide-14.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                            <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                            data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                            data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">New York - USA</h4>
                                            <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                            data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                            data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">Yumi Restaurant
                                            </h2>
                                        </li>
                                        <li class="rev-item rev-item-1 rev-item--ov" data-transition="zoomin">
                                            <img class="rev-slidebg" src="images/slide-15.jpg" alt="Master Slider 01" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" />
                                            <h4 class="tp-caption tp-resizeme rev-text-4 rs-parallaxlevel-1" data-frames="[{&quot;delay&quot;:300,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                            data-x="['right']" data-y="['bottom']" data-hoffset="[-8, 120, 120, 0, 0]" data-voffset="[-40, 40, 40, 30, 30]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                            data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#ececec" data-fontweight="400" data-lineheight="[30, 30, 26, 30, 30]" data-fontsize="[18, 18, 14, 16, 16]" data-textalign="[left, left, left, center, center]">New York - USA</h4>
                                            <h2 class="tp-caption tp-resizeme rev-text-3 rs-parallaxlevel-2" data-frames="[{&quot;delay&quot;:200,&quot;speed&quot;:1100,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                            data-x="[left]" data-y="[bottom]" data-hoffset="[0, 75, 70, 65, 65]" data-voffset="[-28, 50, 70, 65, 65]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[370, 370, 690, 510, 576]"
                                            data-height="[&quot;auto&quot;]" data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#fff" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">Deli House
                                            </h2>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="text-center p-t-80">
                            <a class="au-btn au-btn--light" href="project-grid-full.html">See all project</a>
                        </div>
                    </div>
                </div>
            </section>



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
            <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Project Name</label>
                        <input name="project_name" type="text" class="form-control" id="addField" aria-describedby="emailHelp"  placeholder="project name ..">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Project Adress</label>
                        <input name="project_adress" type="text" class="form-control fit-content"  placeholder="City - Country" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Client Name</label>
                        <input name="client_name" type="text" class="form-control fit-content"  placeholder="City - Country" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Project Status</label>
                        <input name="project_status" type="text" class="form-control fit-content"  placeholder="City - Country" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                        <p class="text-sm">image size should be 1170 * 623 </p>
                        <input name="project_img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
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



{{-- modal of project_images's edit button --}}
    @foreach ($all_projects as $project)
        <!-- Project Edit Modal -->
        <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="project{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form id="projectupdate" action="{{route('projects.update' , $project->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body text-bold">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="project_name" type="text" class="form-control" id="{{$project->id}}" aria-describedby="emailHelp"   value="{{$project->project_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Discreption</label>
                            <textarea name="project_adress" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">{{$project->project_adress}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Pick  Image</label>
                            <input name="project_img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1">
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
