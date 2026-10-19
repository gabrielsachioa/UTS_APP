<div class="d-flex align-items-start mt-3">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link bg-danger {{ ($menu == 'home') ? 'active' : '' }}" href="/" type="button">Home</a>
        <a class="nav-link bg-danger {{ ($menu == 'mahasiswa') ? 'active' : '' }}" href="/profile" type="button">Mahasiswa</a>
        <a class="nav-link bg-danger {{ ($menu == 'courses') ? 'active' : '' }}" href="/" type="button">Courses</a>
        <a class="nav-link bg-danger {{ ($menu == 'students') ? 'active' : '' }}" href="/profile" type="button">Students</a>
        <a class="nav-link bg-danger {{ ($menu == 'grades') ? 'active' : '' }}" href="/" type="button">Grades</a>
        <a class="nav-link bg-danger {{ ($menu == 'assignments') ? 'active' : '' }}" href="/profile" type="button">Assignments</a>
    </div>
</div>