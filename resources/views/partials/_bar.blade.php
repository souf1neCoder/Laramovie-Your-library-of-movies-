<div  data-aos="fade-down" class="mapp p-3  d-flex justify-content-between align-items-center">
    <div class="options">
        <a class="btn btn-light" title="Add Show" href="{{ route('add') }}"><i class="fas fa-plus"></i></a>
        <a class="btn  ml-2 btn-dark" title="Home"  href="{{ route('home') }}"><i class="fas fa-home"></i></a>
        <a class="btn  ml-2 btn-main" title="Logout"  href="{{ route('logout') }}"><i class="fas fa-user"></i> {{ Auth()->user()->username }}</a>
    </div>
    <div class="search ">
        <form action="{{ route('search') }}" class="d-flex">
        <input type="search" class="form-control" name="search">
        <button name="find" title="Search"  type="submit" class="btn btn-main"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>