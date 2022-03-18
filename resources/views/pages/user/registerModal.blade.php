<div class="modal fade page register" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
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
                                        تسجيل عضوية جديدة
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
                            {{-- <img src="{{asset('user/assets/icons/edit-avatar.svg')}}" class="mx-auto d-block" width="100" alt="avatar"> --}}
                            <form class="gy-4 gx-5" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <img id="blah" src="{{asset('user/assets/icons/edit-avatar.svg')}}" class="mx-auto d-block imageupload" width="100" alt="avatar" style="clip-path: circle() !important ;height: 100% !important;" alt="dashboard_logo" />

                                        @auth
                                        @if (Auth::user()->profile == null)
                                        <img id="blah" src="{{asset('user/assets/icons/edit-avatar.svg')}}" class="mx-auto d-block imageupload" width="100" alt="avatar" style="clip-path: circle() !important ;height: 100% !important;" alt="dashboard_logo" />
                                        @else
                                        <img id="blah" src="{{ asset('storage/' . Auth::user()->profile) }}" alt="dashboard_logo" class="mx-auto d-block imageupload" style="clip-path: circle() !important ;height: 100% !important;" width="100" />
                                        @endif
                                        @endauth
                                        <input id="imgInp" type="file" class="chose" name="profile" accept="image/*" style="display: none;">
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الاسم</label>
                                        <input type="text" name="name" class="form-control name" placeholder=".. الاسم هنا" value="" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الجهه</label>
                                        <input type="text" name="field" class="form-control side" placeholder=".. التخصص هنا" value="">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الايميل</label>
                                        <input type="email" name="email" class="form-control email" placeholder=".. الايميل هنا" value="" required>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">كلمة المرور</label>
                                        <input type="password" name="password" class="form-control pass" placeholder=".. كلمة المرور" value="">
                                    </div>
                                </div>
                                <div class="form-action">
                                    <button class="btn btn-form mx-3 with-arrow register-btn" type="submit" data-bs-toggle="modal" data-bs-target="#registerLoaderModal">تسجيل</button>
                                    <p>بيانات التسجيل</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>