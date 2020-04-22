
<div class="ml-auto pl-4">

        <div class="nav-item dropdownn ">
                <a id="navbarDropdown" class="nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                    More Actions
                    <span class="caret"></span>

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="/profile">Profile</a>
                    <a class="dropdown-item"  href="/reset">Reset Password</a>

                       @if ( Auth::user())
                       <a class="dropdown-item"  href="/user-profile-dashboard">Dashboard</a>
                        @endif

                      <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

</div>




