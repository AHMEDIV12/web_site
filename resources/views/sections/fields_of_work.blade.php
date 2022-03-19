






            <section class="section-pp pp-easing section-pp--pad" data-background="light" data-title="What we do">
                <!-- PAGE LINE-->
                <div class="page-line">
                    <div class="container">
                        <div class="page-line__inner">
                            <div class="page-col"></div>
                            <div class="page-col"></div>
                            <div class="page-col">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PAGE LINE-->

                @auth
                    <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%;">
                        <button class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addField">
                            add Field <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                @endauth

                <div class="section-content">
                    <div class="container">
                        <div class="row no-gutters">
                            @if (count($all_fields) > 0 )
                                @foreach ($all_fields as $key => $field )

                                    <div class="col-md-4">
                                        @auth
                                        <div class="d-flex jusstify-content-start m-2 align-items-center">
                                            <button class="btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center"  data-toggle="modal" data-target="#field{{$field->id}}">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                            <form action="{{route('fields.destroy' , $field->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                        @endauth
                                        <article class="media media-service-1">
                                            <figure class="media__img">
                                                <div class="media__img-inner">
                                                    <img style="height: 100%;" @if ($field->img == null )
                                                                src="images/service-01.jpg"
                                                            @else
                                                                src="{{ asset($field->img) }}"
                                                            @endif 
                                                    alt="architecture" />
                                                </div>
                                                <img class="img-line {{ $key%2 == 0 ? "img-rotate-1"  : ( $key%3 == 0 ? "img-rotate-2" : "")  }} " src="images/icon/line.png" alt="Line" />
                                            </figure>
                                            <div class="media__title title-number">
                                                <h3 class="title title--sm">
                                                    <a href="#">{{$field->title}}</a>
                                                </h3>
                                                <span class="number">0{{$field->id}}</span>
                                            </div>
                                            <p class="media__text">{{$field->disc}}</p>
                                        </article>
                                    </div>

                                @endforeach
                            @else
                                <div class="col-md-4">
                                    <article class="media media-service-1">
                                    <figure class="media__img">
                                        <div class="media__img-inner">
                                            <img src="images/service-01.jpg" alt="architecture" />
                                        </div>
                                        <img class="img-line" src="images/icon/line.png" alt="Line" />
                                    </figure>
                                    <div class="media__title title-number">
                                        <h3 class="title title--sm">
                                            <a href="#">architecture</a>
                                        </h3>
                                        <span class="number">01</span>
                                    </div>
                                    <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="media media-service-1">
                                        <figure class="media__img">
                                            <div class="media__img-inner">
                                                <img src="images/service-02.jpg" alt="Interior" />
                                            </div>
                                            <img class="img-rotate-1 img-line" src="images/icon/line.png" alt="Line" />
                                        </figure>
                                        <div class="media__title title-number">
                                            <h3 class="title title--sm">
                                                <a href="#">Interior</a>
                                            </h3>
                                            <span class="number">02</span>
                                        </div>
                                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="media media-service-1">
                                        <figure class="media__img">
                                            <div class="media__img-inner">
                                                <img src="images/service-03.jpg" alt="planning" />
                                            </div>
                                            <img class="img-rotate-2 img-line" src="images/icon/line.png" alt="Line" />
                                        </figure>
                                        <div class="media__title title-number">
                                            <h3 class="title title--sm">
                                                <a href="#">planning</a>
                                            </h3>
                                            <span class="number">03</span>
                                        </div>
                                        <p class="media__text">Lorem ipsum dolor sit amet, consectetur adipist pricing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </article>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>






    <!-- Fields_Of_Work Create Modal  -->
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addField" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Field</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('fields.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Field</label>
                        <input name="title" type="text" class="form-control" id="addField" aria-describedby="emailHelp"  placeholder="field name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Discreption</label>
                        <textarea name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">field disc</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Pick an Image</label>
                        <p>image size should be 960 * 960 </p>
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


    
    {{-- fiels of work edit modal --}}
    @foreach ($all_fields as $key => $field )
        <!-- Fields_Of_Work Edit Modal -->
        <div class="modal fade" style="background-color:rgb(143 86 86 / 0%);"
            id="field{{$field->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="
                                                background-color: rgb(215 215 215);
                                                border: 1px solid #eeeeee4a;
                                                padding: 22px;
                                                padding-bottom: 3px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Field</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('fields.update' , $field->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-body text-bold">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input name="title" type="text" class="form-control" id="{{$field->id}}" aria-describedby="emailHelp"   value="{{$field->title}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Discreption</label>
                            <textarea name="disc" type="text" class="form-control fit-content" rows="5" id="exampleInputPassword1">{{$field->disc}}</textarea>
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