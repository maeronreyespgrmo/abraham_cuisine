<div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
    <ul class="navigation-left">
        <li class="nav-item {{ $page['name'] == 'Dashboard' ? 'active' : '' }}">
            <a class="nav-item-hold" href="/dashboard">
                <i class="nav-icon i-File-Horizontal-Text"></i><span class="nav-text">Reservation</span>
            </a><div class="triangle"></div>
        </li>
        <li class="nav-item {{ $page['name'] == 'Designer' ? 'active' : '' }}">
            <a class="nav-item-hold" href="/designer">
                <i class="nav-icon i-Edit"></i><span class="nav-text">Edit Site</span>
            </a><div class="triangle"></div>
        </li>
        <li class="nav-item {{ $page['name'] == 'Feedback' ? 'active' : '' }}">
            <a class="nav-item-hold" href="/feedbacks/show">
                <i class="nav-icon i-Library"></i><span class="nav-text">Feedbacks</span>
            </a><div class="triangle"></div>
        </li>
        <li class="nav-item {{ $page['name'] == 'Products' ? 'active' : '' }}">
            <a class="nav-item-hold" href="/product">
                <i class="nav-icon i-File"></i><span class="nav-text">Products</span>
            </a><div class="triangle"></div>
        </li>
                <li class="nav-item {{ $page['name'] == 'Calendar' ? 'active' : '' }}">
            <a class="nav-item-hold" href="/calendar">
                <i class="nav-icon i-Calendar"></i><span class="nav-text">My Calendar</span>
            </a><div class="triangle"></div>
        </li>
    </ul>
</div>
{{-- <div class="sidebar-overlay">

</div> --}}