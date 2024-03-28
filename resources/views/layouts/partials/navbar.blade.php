<nav>
    <i class='bx bx-menu' ></i>
    <a href="{{asset('/')}}" class="nav-link">Categories</a>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search...">
            <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    <a href="{{asset('/')}}" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">12</span>
    </a>
    <a href="{{asset('/')}}" class="profile">
        <img src="{{asset('assets/img/people.png')}}">
    </a>
</nav>
