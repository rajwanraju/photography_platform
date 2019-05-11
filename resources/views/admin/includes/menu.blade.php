  
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Photography</h3>
                <ul class="nav side-menu">
                
           
@role('admin')
  <li><a href="{{url('/adminPage')}}"><i class="fa fa-home" {{ request()->is('/adminPages') ? 'active' : '' }}></i> Home</a>
              
                  </li>
                


                   <li><a href="{{ url('/photographer') }}" {{ request()->is('/photographer') ? 'active' : '' }}><i class="fa fa-user" aria-hidden="true"></i>photographer</a>
                
                  </li> 

                     <li><a href="{{ url('/userList') }}" {{ request()->is('/userLists') ? 'active' : '' }}><i class="fa fa-user" aria-hidden="true"></i>User List</a>
                
                  </li>   
                   <li><a href="{{ url('/userAlbums') }}" {{ request()->is('/userAlbums') ? 'active' : '' }}><i class="fa fa-user" aria-hidden="true"></i>User Albums</a>
                
                  </li>


                     <li><a href="{{ url('/myAlbum') }}" {{ request()->is('/myAlbum') ? 'active' : '' }}><i class="fa fa-file-image-o" aria-hidden="true"></i>
Album</a>
                
                  </li>

                    <li><a href="{{ url('/Upload/images') }}" {{ request()->is('/Upload/images') ? 'active' : '' }}><i class="fa fa-file-picture-o" aria-hidden="true"></i>
Upload Images</a>
                
                  </li>


                   <li><a href="{{ url('/myImages') }}" {{ request()->is('/myImages') ? 'active' : '' }}><i class="fa fa-file-picture-o" aria-hidden="true"></i>
My Images</a>
                
                  </li>
                   <li><a href="{{ url('/admin/reviews') }}" {{ request()->is('/admin/reviews') ? 'active' : '' }}><i class="fa fa-file-picture-o" aria-hidden="true"></i>
Reviews</a>
                
                  </li>
                  
   @endrole     


   @role('photographer')
     <li><a href="{{url('/photographerPage')}}"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              
                  </li>

                  <li><a href="{{ url('/myAlbum') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i>
Album</a>
                
                  </li>

                    <li><a href="{{ url('/Upload/images') }}"><i class="fa fa-file-picture-o" aria-hidden="true"></i>
Upload Images</a>
                
                  </li>


                   <li><a href="{{ url('/myImages') }}"><i class="fa fa-file-picture-o" aria-hidden="true"></i>
My Images</a>
                
                  </li> 

                 
                  
   @endrole 
    
   @role('general-user')
     <li><a href="{{url('/myDashboard')}}"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
              
                  </li>

                  <li><a href="{{ url('/myAlbum') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i>
My Album</a>
                
                  </li>

                    <li><a href="{{ url('/Upload/images') }}"><i class="fa fa-file-picture-o" aria-hidden="true"></i>
Upload Images</a>
                
                  </li>


                   <li><a href="{{ url('/myImages') }}"><i class="fa fa-file-picture-o" aria-hidden="true"></i>
My Images</a>
                
                  </li> 
              @if(Auth::user()->status == 1)
                      <li><a href="{{ url('/phptographer/apply/'.Auth::user()->id) }}"><i class="fa fa-file-picture-o" aria-hidden="true"></i>
                    Apply For Photographer</a>
                
                  </li>
                  @endif
                  
   @endrole       



                </ul>
              </div>

            </div>



