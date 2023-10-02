<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('profile.user') }}">
                <i class="bi bi-person-bounding-box"></i><span>Profile</span>
            </a>
        </li>
        @if(auth()->user()->role === 'admin')

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('person.index') }}">
                <i class="bi bi-people"></i><span>Customer</span>
            </a>
        </li>
     
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('shift.index') }}">
                <i class="bi bi-clock"></i><span>Shift</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('hall_manage.index') }}">
                <i class="bi bi-journal-text"></i><span>Hall Manage</span>
            </a>
        </li>
        @endif

        <li class="nav-item">
            @if(auth()->user()->role === 'admin')
            <a class="nav-link collapsed" href="{{ route('booking.index') }}">
                @else
                <a class="nav-link collapsed" href="{{ route('booking.index.user') }}">
                    @endif
                <i class="bi bi-card-checklist"></i><span>Hall Booking</span>
            </a>
        </li>
        <li class="nav-item">
            @if(auth()->user()->role === 'admin')
            <a class="nav-link collapsed" href="{{ route('payment_dashboard.index') }}">
                @else
                <a class="nav-link collapsed" href="{{ route('payment_dashboard.index.user') }}">
                    @endif
                <i class="bi bi-currency-dollar"></i><span>Payment</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.settings') }}">
                <i class="bi bi-wrench-adjustable-circle"></i><span>Settings</span>
            </a>
        </li>

    </ul>

</aside>
