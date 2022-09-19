<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="">
                    <a href="{{ route('dashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-files-o"></i> <span> Product </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('add-product') }}">Add Product</a></li>
                        <li><a href="{{ route('manage-product') }}">Manage Product</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-list"></i> <span> Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('add-category') }}">Add Category</a></li>
                        <li><a href="{{ route('manage-category') }}">View Category</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-list"></i> <span> Sub-Category </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('add-subcategory') }}">Add Sub-Category</a></li>
                        <li><a href="{{ route('manage-subcategory') }}">View Sub-Category</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-newspaper-o"></i> <span> News </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('add-blog') }}">Add News</a></li>
                        <li><a href="{{ route('manage-blog') }}">Manage News</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-newspaper-o"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('add-blog') }}">Add Jobs</a></li>
                        <li><a href="{{ route('manage-blog') }}">Manage Jobs</a></li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="la la-newspaper-o"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('add-blog') }}">Add Blog</a></li>
                        <li><a href="{{ route('manage-blog') }}">Manage Blog</a></li>
                    </ul>
                </li>

                <li class="">
                    <a href="" onclick="event.preventDefault();document.getElementById('logoutForm').submit();"><i class="la la-user"></i> <span> Logout</span></a>
                </li>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
