  <header class="main-nav">
      <div class="sidebar-user text-center"><a class="setting-primary" href="{{route('editpassword')}}"><i data-feather="settings"></i></a>

          <a href="{{ route('profileupdate.view') }}">
              @if(auth()->user()->profile != null)
              <img class="img-90 rounded-circle" src="{{ asset('storage/' . auth()->user()->profile) }}" alt="">
              @else
              <img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="">

              @endif
              <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
              <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->name}}</h6>
          </a>
          <p class="mb-0 font-roboto"></p>

      </div>

      <nav>
          <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">
                  <ul class="nav-menu custom-scrollbar">
                      <li class="nav-item">
                          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('medi.index') }}" tabindex="-1" aria-disabled="true"> 
                              <span class="pull-right badge badge-danger badge-pill"> {{ auth()->user()->unreadNotifications->count() }} </span>
                              طلبات الخدمات الطبية
                            </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('publics.index') }}" tabindex="-1" aria-disabled="true">
                          <span class="pull-right badge badge-danger badge-pill"> {{ auth()->user()->unreadNotifications->count() }} </span>
                          طلبات الخدمات العامة</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('about.index') }}" tabindex="-1" aria-disabled="true">صفحة من نحن</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('tech.index') }}" tabindex="-1" aria-disabled="true">صفحة تقنية الـ 3D</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('contact.index') }}" tabindex="-1" aria-disabled="true">اتصل بنا</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('client.index') }}" tabindex="-1" aria-disabled="true">قائمة المستخدمين</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('image.index') }}" tabindex="-1" aria-disabled="true">صور البانر المتحرك</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('logo.index') }}" tabindex="-1" aria-disabled="true">الشعارات</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('side.index') }}" tabindex="-1" aria-disabled="true">الصورة الجانبية</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('social.index') }}" tabindex="-1" aria-disabled="true">حسابات التواصل الاجتماعي</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('title.index') }}" tabindex="-1" aria-disabled="true"> إعدادات العنوان</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('map.index') }}" tabindex="-1" aria-disabled="true"> صورة الخريطة</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('youtubeurl.index') }}" tabindex="-1" aria-disabled="true"> يوتيوب رابط </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link " href="{{ route('counter.index') }}" tabindex="-1" aria-disabled="true"> عدادات </a>
                      </li>
                  </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
      </nav>
  </header>