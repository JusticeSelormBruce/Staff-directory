



        <div class="container-fluid" style="background-color:#FF5733!important">


            <div class="container-fluid text-light py-0.5">

                <div class="container-fluid">

                    <nav class="navbar navbar-expand-lg navbar-light ">

                        <button class="navbar-toggler  ml-auto" type="button"
                                data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse"
                             id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <div class="collapse navbar-collapse"
                                     id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a href="/"><img
                                                        src="{{asset
                                                        ('images/logo-round.png')}}"
                                                        alt="School Logo"
                                                        style=" width:80px;
                                                              height:80px;
                                                              border-radius:100px;">
                                            </a>
                                        </li>

                                        <div class="align-self-center h3 pt-2 ml-4 h1">
                                            <p>
                                                Staff

                                                Directory
                                            </p>

                                        </div>
                                    </ul>
                            </ul>
                            <form action="/search_results" method="post" class="form-inline my-2 my-lg-0" >
                                <input class="form-control mr-sm-2"
                                       type="search" placeholder="search directory" name="search"
                                       aria-label="Search">
                                <button class="btn   bg-dark mx-auto m-2 text-light "
                                        type="submit"> Search
                                </button>
                                @csrf
                            </form>
                        </div>
                    </nav>


                </div>

            </div>

        </div>


    </div>
