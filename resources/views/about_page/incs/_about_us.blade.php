@push('css')
    <style>
        .flex-center{
            display: flex;
            justify-content: center;
            align-items: center
        }
    </style>
@endpush

<!-- ABOUT US-->
    <section class="section p-t-80 ">
        
        @auth
            <div class="d-flex justify-content-end mb-4" style="width: 88%; margin-top: 20px;">
                <button id="addprojects" class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addabout">
                    add About Us <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        @endauth
        <div class="container">
            <div class="row no-gutters position-relative">
                @if (isset($about_us) )
                        <?php
                            $about_meta = (array) json_decode($about_us->meta);                            
                        ?>
                        @auth
                            <div class="col-12 btn-focus d-flex jusstify-content-start m-2 align-items-center " style=" right: -94%;padding: 0px;width: 0;top:-1vh; max-height: 0px; border: 0">
                                <button id="editproject"  class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center"  data-toggle="modal"  data-target="#addabout">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endauth
                        <div class="col-lg-6">
                            <div class="row no-gutters">
                                <div class="col-md-6">
                                    <div class="media-statistic-2">
                                        <div class="media__body">
                                            <span class="media__number js-counterup">{{$about_meta['num_1']}}</span>
                                            <h5 class="media__title title-sub">{{$about_meta['disc_num_1']}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media-statistic-2">
                                        <div class="media__body">
                                            <span class="media__number js-counterup">{{$about_meta['num_2']}}</span>
                                            <h5 class="media__title title-sub">{{$about_meta['disc_num_2']}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media-statistic-2">
                                        <div class="media__body">
                                            <span class="media__number js-counterup">{{$about_meta['num_3']}}</span>
                                            <h5 class="media__title title-sub">{{$about_meta['disc_num_3']}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media-statistic-2">
                                        <div class="media__body">
                                            <span class="media__number js-counterup">{{$about_meta['num_4']}}</span>
                                            <h5 class="media__title title-sub">{{$about_meta['disc_num_4']}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="text--s18-40 m-b-15">
                                {{$about_meta['disc_1']}}
                            </p>
                            <p class="text--s18-40">
                                {{$about_meta['disc_2']}}
                            </p>
                        </div>
                @else
                    <div class="col-lg-6">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="media-statistic-2">
                                    <div class="media__body">
                                        <span class="media__number js-counterup">18</span>
                                        <h5 class="media__title title-sub">Years of experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media-statistic-2">
                                    <div class="media__body">
                                        <span class="media__number js-counterup">126</span>
                                        <h5 class="media__title title-sub">Happy clients</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media-statistic-2">
                                    <div class="media__body">
                                        <span class="media__number js-counterup">224</span>
                                        <h5 class="media__title title-sub">completed projects</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media-statistic-2">
                                    <div class="media__body">
                                        <span class="media__number js-counterup">16</span>
                                        <h5 class="media__title title-sub">design arwards</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="text--s18-40 m-b-15">
                            <strong class="text--c2">Sed ut</strong>
                            perspiciatis unde omnis iste natus error sit voluptatem galax accusantium doloremque laudantium, totam rem aper ein iam sha eaque ipsa quae ab illo inventore veritatis et quasi architecto luniso beatae vitae dicta sunt explicabo.
                        </p>
                        <p class="text--s18-40">
                            <strong class="text--c2">Nemo</strong>
                            enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione vshaun oluptatem sequi nesciunt.
                        </p>
                    </div>
                @endif 
            </div>
        </div>
    </section>
<!-- END ABOUT US-->



<!-- Edit and  Create Modal -->
@if (isset($about_us) )
    <div class="modal fade" style="background-color:rgb(143 86 86 / 0%); " 
        id="addabout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-style ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('about_us_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body text-bold">
                    {{-- SECTION_KEY value --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Discreption</label>
                        <input name="disc_1" type="text" class="form-control" id="addField" aria-describedby="emailHelp"  value="{{$about_meta['disc_1']}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Second Discreption</label>
                        <input name="disc_2" type="text" class="form-control fit-content"  value="{{$about_meta['disc_2']}}" id="exampleInputPassword1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ABOUT</label>
                        <div class="d-flex justify-content-even align-items-center">
                            <input name="num_1" type="number" class="form-control fit-content"  value="{{$about_meta['num_1']}}" required>
                            <input name="disc_num_1" type="text" class="form-control fit-content"  value="{{$about_meta['disc_num_1']}}" required>
                        </div>
                        <div class="d-flex justify-content-even align-items-center">
                            <input name="num_2" type="number" class="form-control fit-content"  value="{{$about_meta['num_2']}}" required>
                            <input name="disc_num_2" type="text" class="form-control fit-content"  value="{{$about_meta['disc_num_2']}}" required>
                        </div>
                        <div class="d-flex justify-content-even align-items-center">
                            <input name="num_3" type="number" class="form-control fit-content"  value="{{$about_meta['num_3']}}" required>
                            <input name="disc_num_3" type="text" class="form-control fit-content"  value="{{$about_meta['disc_num_3']}}" required>
                        </div>
                        <div class="d-flex justify-content-even align-items-center">
                            <input name="num_4" type="number" class="form-control fit-content"  value="{{$about_meta['num_4']}}" required>
                            <input name="disc_num_4" type="text" class="form-control fit-content"  value="{{$about_meta['disc_num_4']}}" required>
                        </div>
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
@endif
