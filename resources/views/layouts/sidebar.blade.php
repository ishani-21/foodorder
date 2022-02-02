<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="{{asset('assets/image/admin/'.Auth::guard('admin')->user()->image  ?? 'Bhrati')}}" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">{{ Auth::guard('admin')->user()->name  ?? 'Bhrati'}}</span>
          <span class="text-secondary text-small">Restorant Manager</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.profile')}}">
        <span class="menu-title">Profile</span>
        <i class="mdi mdi-contacts menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.user.index')}}">
        <span class="menu-title">List User</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basica" aria-expanded="false" aria-controls="ui-basica">
        <span class="menu-title">Restaurant</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-food menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basica">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.restaurant.create')}}">Add Restaurant</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.restaurant.index')}}">List Restaurant</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basicb" aria-expanded="false" aria-controls="ui-basicb">
        <span class="menu-title">Category</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basicb">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.category.index')}}">Add Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.category.create')}}">List Category</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basicc" aria-expanded="false" aria-controls="ui-basicc">
        <span class="menu-title">Sub Category</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basicc">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.subcategory.index')}}">Add Sub Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.subcategory.create')}}">List Sub Category</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basicd" aria-expanded="false" aria-controls="ui-basicd">
        <span class="menu-title">Food</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-food-apple menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basicd">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.food.index')}}">Add Food</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.food.create')}}">List Food</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basice" aria-expanded="false" aria-controls="ui-basice">
        <span class="menu-title">Order</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-cart-plus menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basice">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('order.index')}}">Order</a></li>
        </ul>
      </div>
    </li>
    <!-- --------------------------- Payment -------------------------------- -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basicj" aria-expanded="false" aria-controls="ui-basicj">
        <span class="menu-title">Payment</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-credit-card-multiple"></i>
      </a>
      <div class="collapse" id="ui-basicj">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.payment.index')}}">Payment List</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.paymentcustomer')}}">Payment Customers List</a></li>
        </ul>
      </div>
    </li>
    <!-- ------------------------------------------------------------------------- -->
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basicf" aria-expanded="false" aria-controls="ui-basicf">
        <span class="menu-title">Pages</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-google-pages menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basicf">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.about_us.create')}}">About Us</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basicg" aria-expanded="false" aria-controls="ui-basicg">
        <span class="menu-title">Services</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-security menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basicg">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.service.index')}}">Add Services</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.service.create')}}">List Services</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basich" aria-expanded="false" aria-controls="ui-basich">
        <span class="menu-title">News</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-newspaper menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basich">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.news.index')}}">Add News</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.news.create')}}">List News</a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item sidebar-actions">
      <span class="nav-link">
        <div class="border-bottom">
          <h6 class="font-weight-normal mb-3">Projects</h6>
        </div>
        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
        <div class="mt-4">
          <div class="border-bottom">
            <p class="text-secondary">Categories</p>
          </div>
          <ul class="gradient-bullet-list mt-4">
            <li>Free</li>
            <li>Pro</li>
          </ul>
        </div>
      </span>
    </li>
  </ul>
</nav>