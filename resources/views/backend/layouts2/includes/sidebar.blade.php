<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('person.index') }}">
                <i class="bi bi-journal-text"></i><span>Customer</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('shift.index') }}">
                <i class="bi bi-journal-text"></i><span>Shift</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('hall_manage.index') }}">
                <i class="bi bi-journal-text"></i><span>Hall Manage</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('booking.index') }}">
                <i class="bi bi-journal-text"></i><span>Hall Booking</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('payment_dashboard.index') }}">
                <i class="bi bi-journal-text"></i><span>Payment</span>
            </a>
        </li>
    </ul>

</aside>
