<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a>
         
            <li><a><i class="fa fa-edit"></i> Whyus <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                    <li><a href="{{route('introduction')}}">Introduction</a></li>
                    <li><a href="{{route('vision')}}">Vission & Mission</a></li>
            </ul>
            </li>
            <li><a href="{{route('job')}}"><i class="fa fa-user"></i>Career</a></li>
            <li><a href="{{ route('services.index')}}"><i class="fa fa-edit"></i> Services </a></li>
            <li><a href="{{ route('information.index')}}"><i class="fa fa-edit"></i> Information </a></li>
            <li><a href="{{ route('contactus.index')}}"><i class="fa fa-edit"></i> Contact us </a></li>
           
            <li><a><i class="fa fa-table"></i>Coverage<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('announcement.index')}}">Announcement</a></li>
                    <li><a href="{{route('news')}}">News</a></li>
                    <li><a href="{{route('galleries.index')}}">Gallery</a></li>

                </ul>
            </li>
        </ul>
    </div>    



</div>
<!-- /sidebar menu -->
