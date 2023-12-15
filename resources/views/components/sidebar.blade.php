<div class="col-lg-2 p-0">
    <div class="sidebar">
        <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Brand Logo" class="img-fluid" width="140">
        <div class="sidebar-link d-flex flex-column">
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('dashboard*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="dashboard-icon"></div>
                Dashboard
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('lesson*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="lesson-icon"></div>
                Lesson
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('class-schedule*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="class-schedule-icon"></div>
                Class Schedule
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('task*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="task-icon"></div>
                Task
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('task-collection*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="task-collection-icon"></div>
                Task Collection
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('grade*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="grade-icon"></div>
                Grade
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('attendance*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="attendance-icon"></div>
                Attendance
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('payroll*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="payroll-icon"></div>
                Payroll
            </a>
            <a href="#" class="link-item d-flex align-items-center {{ Request::is('profile*') ? 'active' : '' }}" style="gap: 14px;">
                <div class="profile-icon"></div>
                Profile
            </a>
        </div>
    </div>

    <div class="hamburger mobile d-flex d-lg-none">
        <div class="hamburger-icon"></div>
    </div>
</div>

{{-- <div class="sidebar mobile d-flex d-lg-none">
    <img src="{{ asset('assets/images/brand/logo-brand.svg') }}" alt="Brand Logo" class="img-fluid" width="140">
    <div class="sidebar-link d-flex flex-column">
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('dashboard*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="dashboard-icon"></div>
            Dashboard
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('lesson*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="lesson-icon"></div>
            Lesson
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('class-schedule*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="class-schedule-icon"></div>
            Class Schedule
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('task*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="task-icon"></div>
            Task
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('task-collection*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="task-collection-icon"></div>
            Task Collection
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('grade*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="grade-icon"></div>
            Grade
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('attendance*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="attendance-icon"></div>
            Attendance
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('payroll*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="payroll-icon"></div>
            Payroll
        </a>
        <a href="#" class="link-item d-flex align-items-center {{ Request::is('profile*') ? 'active' : '' }}" style="gap: 14px;">
            <div class="profile-icon"></div>
            Profile
        </a>
    </div>
</div> --}}