<div class="page-main-header">
  <div class="main-header-right row m-0">
    <div class="main-header-left">
      <div class="logo-wrapper"><a href="{{route('home')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.svg')}}" alt=""></a></div>
      <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('assets/images/logo/dark-logo.png')}}" alt=""></a></div>
      <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
    </div>
    <div class="left-menu-header col">
      <ul>
        <li>
          <form class="form-inline search-form">
            <div class="search-bg"><i class="fa fa-search"></i>
              <input class="form-control-plaintext" placeholder="Search here.....">
            </div>
          </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
        </li>
      </ul>
    </div>
   
    <div class="nav-right col pull-right right-menu p-0">
      <ul class="nav-menus">
        <!-- notifications -->
        <li class="onhover-dropdown">
          <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
          <ul class="notification-dropdown onhover-show-div">
            <li> 
              @if(auth()->user()->unreadNotifications->count())
              <p class="f-w-700 mb-0">You have {{ auth()->user()->unreadNotifications->count() }} Notifications<span class="pull-right badge badge-danger badge-pill">{{ auth()->user()->unreadNotifications->count() }}</span></p>
              @endif
            </li>
            <li><a href="{{route('mark.read')}}">Mark as All Read</a></li>
            @foreach(auth()->user()->unreadNotifications as $notification)
            <li class="noti-primary">
              <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                <div class="media-body">
                  <p>{{$notification->data['data']}} </p><span>{{$notification->created_at->format('H:i:s')}}</span>
                </div>
              </div>
            </li>
            @endforeach
            @foreach(auth()->user()->readNotifications as $notification)
            <li class="noti-primary">
              <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                <div class="media-body">
                  <p>{{$notification->data['data']}} </p><span>{{$notification->created_at->format('H:i:s')}}</span>
                </div>
              </div>
            </li>
            @endforeach
            <!-- <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span></span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li> -->
          </ul>
        </li>
        <!-- notifications -->
        <li class="onhover-dropdown p-0">
          <button class="btn btn-primary" type="button"><a href="{{ route('logout') }} " onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i data-feather="log-out"></i>Log Out</a></button>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </div>
    <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
  </div>
</div>