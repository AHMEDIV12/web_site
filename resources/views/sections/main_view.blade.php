


<section class="section-pp pp-table pp-easing" data-background="dark" data-title="about us">
                <!-- PAGE LINE-->
                <div class="page-line" >
                    <div class="container">
                        <div class="page-line__inner">
                            <div class="page-col"></div>
                            <div class="page-col"></div>
                            <div class="page-col"></div>
                        </div>
                    </div>
                </div>

                    <!-- END PAGE LINE-->
                    @if (count($all_views) > 0 )
                        
                        @foreach ($all_views as $view )
                            @auth
                                <div style="position: absolute" class="btn ">
                                    <button type="button" class="btn btn-focus btn-warning d-flex justify-content-center align-items-center" 
                                            data-toggle="modal" data-target="#editmainview{{$view->id}}">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endauth
                                <div class="mouse-wheel-wrap">
                                    <a class="mouse-wheel js-mouse-wheel" href="#">
                                        <span class="mouse-wheel__inner"></span>
                                    </a>
                                    <span class="ti-angle-double-down mouse-wheel__down"></span>
                                </div>
                                <div class="rev_slider_wrapper">
                                    <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-layout="fullscreen" data-rev-bullets="false" data-rev-arrows="false">
                                        <ul>
                                            <li class="rev-item rev-item-1" data-transition="crossfade">
                                                <img class="rev-slidebg"  @if ($view->img == '')
                                                    src="images/slide-03.jpg"
                                                @else
                                                    src="{{ asset($view->img) }}"
                                                @endif  alt="image"  />
                                                <h4 class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                                data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]">{{$view->sub_title}}</h4>
                                                <h2 class="tp-caption tp-resizeme rev-text-2" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]"
                                                data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">{{$view->title}}</h2>
                                                <p class="tp-caption tp-resizeme" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[70, 70, 100, 80, 70]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[800,800,690,510,576]" data-height="[&quot;auto&quot;]"
                                                data-lineheight="[30, 30, 26, 20, 20]" data-whitespace="normal" data-color="#ebebeb" data-fontweight="400" data-fontsize="[13, 13, 14, 15, 15]" data-textalign="[left, left, left, left, left]">{{$view->disc}}</p>
                                                <a class="tp-caption tp-resizeme"
                                                href="#" target="_self" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                                data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[185, 185, 210, 180, 170]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                                    <span class="rev-btn-2">Contact now</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        @endforeach
                    @else
                        @auth
                            <div style="position: absolute" class="btn ">
                                <button class=" btn-primary btn btn-focus btn-primary d-flex justify-content-center align-items-center" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addmainview">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endauth
                        <div class="mouse-wheel-wrap">
                            <a class="mouse-wheel js-mouse-wheel" href="#">
                                <span class="mouse-wheel__inner"></span>
                            </a>
                            <span class="ti-angle-double-down mouse-wheel__down"></span>
                        </div>
                        <div class="rev_slider_wrapper">
                            <div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none" data-rev-layout="fullscreen" data-rev-bullets="false" data-rev-arrows="false">
                                <ul>
                                    <li class="rev-item rev-item-1" data-transition="crossfade">
                                        <img class="rev-slidebg" src="images/slide-03.jpg" alt="Master Slider 01" />
                                        <h4 class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="['left']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-128, -118, -150, -130, -130]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
                                        data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-fontsize="[11, 11, 14, 16, 16]" data-textalign="[left, left, left, center, center]">we are tatee</h4>
                                        <h2 class="tp-caption tp-resizeme rev-text-2" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:-50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-45, -40, 0, 0, 0]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[1170, 930, 690, 510, 576]" data-height="[&quot;auto&quot;]"
                                        data-lineheight="[60, 58, 54, 38, 36]" data-whitespace="normal" data-color="#ebebeb" data-fontweight="700" data-fontsize="[48, 42, 46, 32, 32]" data-textalign="[left, left, left, left, left]">Our bulding are inspired by the challenge of balancing function &amp; beauty</h2>
                                        <p class="tp-caption tp-resizeme" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[70, 70, 100, 80, 70]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="[800,800,690,510,576]" data-height="[&quot;auto&quot;]"
                                        data-lineheight="[30, 30, 26, 20, 20]" data-whitespace="normal" data-color="#ebebeb" data-fontweight="400" data-fontsize="[13, 13, 14, 15, 15]" data-textalign="[left, left, left, left, left]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut . . .</p>
                                        <a class="tp-caption tp-resizeme"
                                        href="#" target="_self" data-frames="[{&quot;delay&quot;:400,&quot;speed&quot;:1200,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
                                        data-x="[left]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[185, 185, 210, 180, 170]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off" data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
                                            <span class="rev-btn-2">Contact now</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
            </section>







    <!-- Main view Create Modal  -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addmainview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('mains.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub Title</label>
                        <input name="sub_title" type="text" class="form-control"  aria-describedby="emailHelp"  value="we are tatee">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input name="title" type="text" class="form-control"  aria-describedby="emailHelp"  value="Our bulding are inspired by the challenge of balancing function & beauty">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Discreption</label>
                        <textarea name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut . . .</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Background Image</label>
                        <p>image size should be 1920 * 1080 </p>
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


    <!-- MAIN view Edit Modal -->
    @foreach ($all_views as $view )
        <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
                id="editmainview{{$view->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content modal-style">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Edit Main View</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('mains.update' , $view->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="modal-body text-bold">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Title</label>
                                <input name="sub_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   value="{{$view->sub_title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Title</label>
                                <textarea name="title" type="text" class="form-control fit-content" id="exampleInputPassword1">{{$view->title}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Discreption</label>
                                <textarea name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">{{$view->disc}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Pick an Image</label>
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