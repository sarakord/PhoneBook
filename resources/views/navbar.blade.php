<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="navbar-brand dropdown">
      <a class="navbar-brand dropbtn" href="#">کاربر گرامی : 
        @if(Auth::check()) 
          {{Auth::user()->name}}
        @endif
     </a>
      <div class="dropdown-content">
        <a href="#" class="bg-dark text-light">ویرایش پروفایل</a>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-dark btn-block btn_redius">خروج</button>
        </form>
      </div>
    </div>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact.create')}}">مخاطب جدید</a>
        </li>
        <li class="nav-item">
          <div class="nav-link dropdown">
            <a class="dropbtn srch" href="#">جستجو بر اساس</a>
            <div class="dropdown-content">
              <a href="#" class="bg-dark text-light">نام</a>
              <a href="#" class="bg-dark text-light">شماره تماس</a>
            </div>
        </li>    
      </ul>
    </div>
</nav> 