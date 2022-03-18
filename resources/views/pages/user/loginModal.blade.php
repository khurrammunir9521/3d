   <div class="modal fade page login" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-fullscreen">
           <div class="modal-content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="modal-header border-0">
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                               <div>
                                   <span class="outline dot">اهلاً وسهلاً بكم</span>
                                   <h1 class="modal-title right">
                                       <span class="btm-line"><span class="inner-line"></span>
                                           تسجيل دخول
                                       </span>
                                   </h1>
                               </div>
                               <div class="profile">
                                   <!-- <a href="#profile">
                  <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                </a> -->
                               </div>
                           </div>
                           <div class="modal-body">

                               <form class="row gy-4 gx-5" action="{{route('login')}}" method="post">
                                   @if ($errors->any())
                                   <div class="alert alert-danger">
                                       <ul>
                                           @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                           @endforeach
                                       </ul>
                                   </div>
                                   @endif
                                   @csrf
                                   <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                                       <label class="form-label dot">الايميل</label>
                                       <input type="email" name="email" class="form-control email" placeholder=".. الايميل هنا" value="" required>
                                   </div>
                                   <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                                       <label class="form-label dot">كلمة المرور</label>
                                       <input type="password" name="password" class="form-control pass" placeholder=".. كلمة المرور" value="" required>
                                   </div>
                                   <div class="form-action">
                                       <button class="btn btn-form mx-3 with-arrow disabled" type="submit">دخول</button>
                                       <p>بيانات الدخول</p>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>