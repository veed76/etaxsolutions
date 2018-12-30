<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect {{ Request::is('admin') ? 'active' : '' }}"><i class="ti-home"></i> <span> Dashboard </span> </a>
                </li>
                <li class="">
                    <a href="{{ route('admin.listLatestNews') }}" class="waves-effect {{ Request::is('admin/latestNews*') ? 'active' : '' }}"><i class="fa fa-sticky-note"></i> <span> Latest News </span> </a>
                </li>
                <li class="">
                    <a href="{{ route('admin.listTaluka') }}" class="waves-effect {{ Request::is('admin/taluka*') ? 'active' : '' }}"><i class="fa fa-sticky-note"></i> <span> Talukas </span> </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

