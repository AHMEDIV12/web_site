
            <!-- PAGE HEADING-->
                @if (isset($header))
                <?php
                $header_meta = (array) json_decode($header->meta);
                
                ?>
                    @auth
                        <div style="position: absolute" class="btn ">
                            <button type="button" class="btn btn-focus btn-warning d-flex justify-content-center align-items-center" 
                                    data-toggle="modal" data-target="#addheader">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endauth
                    
                    <section class="section p-t-100 p-b-65 ">
                        <div class="container">
                            <div class="page-heading">
                                <h4 class="title-sub title-sub--c8 m-b-15">{{$header_meta['sub_title']}}</h4>
                                <h2 class="title-2">{{$header_meta['title']}}</h2>
                            </div>
                        </div>
                    </section>
                        <!-- PAGE IMAGE-->
                    <section class="section">
                        <div class="wrap wrap--w1790">
                            <div class="container-fluid" style="width: fit-content">
                                <img src="{{$header->img}}"  alt="Page Image">
                            </div>
                        </div>
                    </section>
                @else
                    @auth
                        <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%; margin-top: 20px;">
                            <button id="addprojects" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addheader">
                                add header <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endauth
                    <section class="section p-t-100 p-b-65">
                        <div class="container">
                            <div class="page-heading">
                                <h4 class="title-sub title-sub--c8 m-b-15">we are tatee</h4>
                                <h2 class="title-2">Our bulding are inspired by
                                    <br>the challenge of balancing function & beauty .</h2>
                            </div>
                        </div>
                    </section>
                    
                    <!-- PAGE IMAGE-->
                    <section class="section">
                        <div class="wrap wrap--w1790">
                            <div class="container-fluid">
                                <img src="images/page-img-01.jpg" alt="Page Image">
                            </div>
                        </div>
                    </section>
                @endif
                <!-- END PAGE IMAGE-->
            <!-- END PAGE HEADING-->


    <!-- HEADER Create Modal -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addheader" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    {{-- flag value --}}
                    <input type="hidden" value="service" name="section_key">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Sub Title</label>
                        <input name="sub_title" type="text" class="form-control" id="addField" aria-describedby="emailHelp"  placeholder="Sub Title.." required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Title</label>
                        <input name="title" type="text" class="form-control fit-content"  placeholder="Title" id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1" class="mb-0 pt-1">Pick an Image</label>
                        <p class="text-sm">image size should be 1920 * 862 </p>
                        <input name="img" type="file" class="form-control-file fit-content" id="exampleFormControlFile1" required>
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


