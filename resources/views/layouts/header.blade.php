<nav class="main-header navbar navbar-expand navbar-info navbar-dark">    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="{{asset('img/logo.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block ">{{ auth()->user()->name }}</a>
        </div>
      </div>
    </ul>
  </nav>