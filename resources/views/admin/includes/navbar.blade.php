  <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('myProfile')}}"> Profile</a></li>
                    @role('admin')
                    <li>
                      <a href="{{ url('/role') }}">
                      
                        <span>Settings</span>
                      </a>
                    </li>
                    @endrole
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-green">{{$count}}</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    @forelse($notifications as $notify)
                    <li>
                      <a href="{{url('/admin/notification/'.$notify->id)}}">
                        <span class="image"><img src="{{asset('/')}}admin/images/user.PNG" alt="Profile Image" /></span>
                        <span>
                          <span>{{$notify->name}}</span>
                          <span class="time">{{$notify->updated_at->diffForHumans()}}</span>
                        </span>
                        <span class="message">
                          Apply For Photographer
                        </span>
                      </a>
                    </li>
                    @empty
                    @endforelse

                       @forelse($reviews as $review)
                    <li>
                      <a href="{{url('/admin/reviews/')}}">
                        <span class="image"><img src="{{asset('/')}}admin/images/user.PNG" alt="Profile Image" /></span>
                        <span>
                          <span>{{$review->title}}</span>
                          <span class="time">{{$notify->updated_at->diffForHumans()}}</span>
                        </span>
                        <span class="message">
                         new Review Post
                        </span>
                      </a>
                    </li>
                    @empty
                    @endforelse
                    
                    <li>
                      <div class="text-center">
                        <a href="{{url('/admin/notifications/')}}">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>