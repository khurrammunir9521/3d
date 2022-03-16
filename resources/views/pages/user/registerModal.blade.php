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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            {{-- <img src="{{asset('user/assets/icons/edit-avatar.svg')}}" class="mx-auto d-block" width="100" alt="avatar"> --}}
                            <form class="gy-4 gx-5" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <img src="{{asset('user/assets/icons/edit-avatar.svg')}}" class="mx-auto d-block" width="100" alt="avatar">
                                        <label class="form-label dot">صورة</label>
                                        <input type="file" class="form-control" name="profile" id="" accept="image/*" type="file" id="download-cv-file-name" name="profile" id="profile" aria-describedby="">

                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الاسم</label>
                                        <input type="text" name="name" class="form-control" placeholder=".. الاسم هنا" value="" required>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الجهه</label>
                                        <input type="text" name="field" class="form-control" placeholder=".. التخصص هنا" value="">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">الايميل</label>
                                        <input type="email" name="email" class="form-control" placeholder=".. الايميل هنا" value="" required>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                        <label class="form-label dot">كلمة المرور</label>
                                        <input type="password" name="password" class="form-control" placeholder=".. كلمة المرور" value="">
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
