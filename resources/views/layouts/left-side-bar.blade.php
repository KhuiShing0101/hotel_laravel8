{{-- left-sidebar --}}

<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('backend/index') }}" class="site_title"><i class="fa fa-building"></i>
                <span>Hotel Booking</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('/assets/images/img.jpg') }}" alt="profile image" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2 class="text-capitalize">
                    Adminstrator
                </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- left-sidebar menu -->

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-building-o"></i> Room View <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('backend/view/create') }}">Create</a></li>
                            <li><a href="{{ url('backend/view/listing') }}">Listing</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-bed"></i> Hotel Bed <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('backend/bed/create') }}">Create</a></li>
                            <li><a href="{{ url('backend/bed/listing') }}">Listing</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-bicycle"></i> Special Features <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('backend/special-features/create') }}">Create</a>
                            </li>
                            <li><a href="{{ url('backend/special-features/listing') }}">Listing</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-building-o"></i> Room <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('backend/room/create') }}">Create</a></li>
                            <li><a href="{{ url('backend/room/listing') }}">Listing</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-spoon"></i> Amenities <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('backend/amenities/create') }}">Create</a></li>
                            <li><a href="{{ url('backend/amenities/listing') }}">Listing</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('backend/reservations/listing') }}"><i class="fa fa-ticket"></i>
                            Reservations</a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

    </div>
</div>
{{-- left Sidebar --}}
