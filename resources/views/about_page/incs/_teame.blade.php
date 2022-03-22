
<!-- TEAM-->
    <section class="p-t-120 p-b-30 ">
        
        <div class="container">
            <div class="section-title m-b-70">
                <h5 class="title-sub">awesome people</h5>
                <h2 class="title-1">Meet the team</h2>
            </div>
        <!-- ADD CLIENT -->
            @auth
                <div class="d-flex justify-content-end align-items-center mb-4" style="width: 88%; margin-top: 20px;">
                    <button class="btn btn-primary" style="z-index: 5; margin-left: 5%;" data-toggle="modal" data-target="#addmember">
                        Add Member <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </div>
            @endauth
            <div class="row pt-4">
                @if (sizeOf($all_teams))
                    @foreach ( $all_teams as $team )
                        <?php
                            $team_meta = (array) json_decode($team->meta);                            
                        ?>
                        <div class="col-md-6 col-lg-4">
                            {{-- edit , delete buttons --}}
                            @auth   
                                <div class=" btn-focus d-flex jusstify-content-start m-2 align-items-center" style=" right: -74%;padding: 0px;width: 0;top: 7vh; height: 0; border: 0; z-index: 5;">
                                    <button   class="edit-btn btn btn-warning btn-sm mr-2 btn d-flex justify-content-center align-items-center" style="z-index: 5;"  data-toggle="modal"  data-target="#addmember{{$team->id }}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <form action="{{route('team_delete' , $team->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm mr-2 d-flex justify-content-center align-items-center ">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            @endauth <!-- end buttons-->
                            <article class="media-team" >
                                <figure class="media__img-wrap">
                                    <ul class="list-social list-social--light">
                                        <li class="list-social__item">
                                            <a class="ic-fb" href="#">
                                                <i class="zmdi zmdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-insta" href="#">
                                                <i class="zmdi zmdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-twi" href="#">
                                                <i class="zmdi zmdi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-social__item">
                                            <a class="ic-pinterest" href="#">
                                                <i class="zmdi zmdi-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <span class="overlay"></span>
                                    <img class="media__img img--rounded" src="{{$team->img}}"  alt="Brad Green" />
                                </figure>
                                <div class="media__body">
                                    <h4 class="title--sm">
                                        <a href="#">{{$team_meta['member_name']}}</a>
                                    </h4>
                                    <span class="title-sub--sm">{{$team_meta['member_position']}}</span>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-6 col-lg-4">
                        <article class="media-team">
                            <figure class="media__img-wrap">
                                <ul class="list-social list-social--light">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="overlay"></span>
                                <img class="media__img img--rounded" src="images/team-01.jpg" alt="Brad Green" />
                            </figure>
                            <div class="media__body">
                                <h4 class="title--sm">
                                    <a href="#">Brad Green</a>
                                </h4>
                                <span class="title-sub--sm">CEO - Main Architect</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media-team">
                            <figure class="media__img-wrap">
                                <ul class="list-social list-social--light">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="overlay"></span>
                                <img class="media__img img--rounded" src="images/team-02.jpg" alt="Sonja Porter" />
                            </figure>
                            <div class="media__body">
                                <h4 class="title--sm">
                                    <a href="#">Sonja Porter</a>
                                </h4>
                                <span class="title-sub--sm">Co-manage Associated</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media-team">
                            <figure class="media__img-wrap">
                                <ul class="list-social list-social--light">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="overlay"></span>
                                <img class="media__img img--rounded" src="images/team-03.jpg" alt="Marion Lawson" />
                            </figure>
                            <div class="media__body">
                                <h4 class="title--sm">
                                    <a href="#">Marion Lawson</a>
                                </h4>
                                <span class="title-sub--sm">Interior Desinger</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media-team">
                            <figure class="media__img-wrap">
                                <ul class="list-social list-social--light">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="overlay"></span>
                                <img class="media__img img--rounded" src="images/team-04.jpg" alt="Tyrone Curtis" />
                            </figure>
                            <div class="media__body">
                                <h4 class="title--sm">
                                    <a href="#">Tyrone Curtis</a>
                                </h4>
                                <span class="title-sub--sm">Architect - Designer</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media-team">
                            <figure class="media__img-wrap">
                                <ul class="list-social list-social--light">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="overlay"></span>
                                <img class="media__img img--rounded" src="images/team-05.jpg" alt="Kim Harrington" />
                            </figure>
                            <div class="media__body">
                                <h4 class="title--sm">
                                    <a href="#">Kim Harrington</a>
                                </h4>
                                <span class="title-sub--sm">Architect - Photographer</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="media-team">
                            <figure class="media__img-wrap">
                                <ul class="list-social list-social--light">
                                    <li class="list-social__item">
                                        <a class="ic-fb" href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-insta" href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-twi" href="#">
                                            <i class="zmdi zmdi-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-social__item">
                                        <a class="ic-pinterest" href="#">
                                            <i class="zmdi zmdi-google"></i>
                                        </a>
                                    </li>
                                </ul>
                                <span class="overlay"></span>
                                <img class="media__img img--rounded" src="images/team-06.jpg" alt="Jodi Rivera" />
                            </figure>
                            <div class="media__body">
                                <h4 class="title--sm">
                                    <a href="#">Jodi Rivera</a>
                                </h4>
                                <span class="title-sub--sm">Interior Designer</span>
                            </div>
                        </article>
                    </div>
                @endif
            </div> <!-- end row-->
        </div> <!-- end container-->
    </section>
<!-- END TEAM-->


            
<!-- Client Create Modal -->
    <div class="modal fade" id="addmember" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-4 pt-4">
            <div class="modal-content modal-style">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="{{route('team_store' )}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group d-flex justify-content-between align-items-center">
                            <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0 pt-1">Member Name</label>
                                    <input name="member_name" type="text" class="form-control-file fit-content"  required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0 pt-1">Member Name</label>
                                    <input name="member_position" type="text" class="form-control-file fit-content"  required>
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlFile1" class="mb-0 pt-1">Member Image</label>
                                <p class="text-sm">image should 680*680 </p>
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


<!-- EDIT Modal -->
    @foreach ($all_teams as $team )
        <?php
            $team_meta = (array) json_decode($team->meta);                            
        ?>
        <div class="modal fade" id="addmember{{$team->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog mt-4 pt-4">
                <div class="modal-content modal-style">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="{{route('team_update' , $team->id )}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group d-flex justify-content-between align-items-center">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1" class="mb-0 pt-1">Member Name</label>
                                        <input name="member_name" type="text" value="{{$team_meta['member_name']}}" class="form-control-file fit-content"  required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1" class="mb-0 pt-1">Member Name</label>
                                        <input name="member_position" type="text" value="{{$team_meta['member_position']}}" class="form-control-file fit-content"  required>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlFile1" class="mb-0 pt-1">Member Image</label>
                                    <p class="text-sm">image should 680*680 </p>
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
