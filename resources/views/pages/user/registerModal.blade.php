<div class="modal fade page register" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div>
                                <span class="outline dot">اهلاً وسهلاً بكم</span>

                                <h1 class="modal-title right" style="color: black;">
                                    <span class="btm-line"><span class="inner-line"></span>تسجيل عضوية جديدة
                                </h1>

                            </div>
                            <div></div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 p-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="medical-tab" data-bs-toggle="tab" data-bs-target="#userloginModal2" type="button" role="tab" aria-selected="true">
                                                مستخدم
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="public-tab" data-bs-toggle="tab" data-bs-target="#designerloginModal2" type="button" aria-controls="profile" aria-selected="false">
                                                مصمم 
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="userloginModal2" role="tabpanel">
                                            <form class="row gy-4 gx-5" action="{{route('register')}}" method="post" style="padding-top: 20px;">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <img id="blah" src="https://zen-boyd.161-97-115-110.plesk.page/3dorgans/public/user/assets/icons/edit-avatar.svg" class="mx-auto d-block imageupload" width="100" alt="avatar" style="clip-path: circle() !important ;height: 100% !important;">
                                                        <input id="imgInp" type="file" class="chose" name="profile" accept="image/*" style="display: none;">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center mb-4">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <label class="form-label dot">الاسم</label>
                                                        <input type="text" name="name" class="form-control " placeholder=".. الاسم هنا" value="user">
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <label class="form-label dot">رقم الجوال</label>
                                                        <input type="text" name="field" class="form-control " placeholder="الجهة هنا .." value="dewh">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3">
                                                        <label class="form-label dot">الايميل</label>
                                                        <input type="email" name="email" class="form-control email" placeholder="الايميل هنا .." value="">
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mb-4">
                                                        <label class="form-label dot">كلمة المرور</label>
                                                        <input type="password" name="password" class="form-control pass" placeholder="كلمة المرور هنا .." value="">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="container container-x container-x2">
                                                        <div class="almuntjat-form-error almuntjat-form-error-2">
                                                            <img src="assets/images/warning.png" alt="" class="almuntjat-form-error__img"> بعد إضافة المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrapper terms-wrapper">
                                                    <p class="term-cond">
                                                        بتسجيلك فأنت توافق على الشروط والأحكام
                                                    </p>
                                                    <a href="#" class="terms-link">الشروط والأحكام</a>
                                                </div>
                                                <div class="form-action ahs-from-action">
                                                    <button class="btn btn-form mx-3 with-arrow disabled" type="submit">دخول</button>
                                                    <p>بيانات التسجيل</p>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade " id="designerloginModal2" role="tabpanel" aria-labelledby="profile-tab">
                                            <form class="row gy-4 gx-5" method="post" style="padding-top: 20px;">
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <img id="blah" src="https://zen-boyd.161-97-115-110.plesk.page/3dorgans/public/user/assets/icons/edit-avatar.svg" class="mx-auto d-block imageupload" width="100" alt="avatar" style="clip-path: circle() !important ;height: 100% !important;">
                                                        <input id="imgInp" type="file" class="chose" name="profile" accept="image/*" style="display: none;">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <label class="form-label dot">الاسم</label>
                                                        <input type="text" class="form-control name " placeholder="الاسم هنا .." value="">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <label class="form-label dot">رقم الجوال</label>
                                                        <input type="text" class="form-control " placeholder="رقم الجوال هنا .." value="">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <label class="form-label dot">الايميل</label>
                                                        <input type="text" name="email" class="form-control email " placeholder="الايميل هنا .." value="">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center mb-5">
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4">
                                                        <label class="form-label dot">كلمة المرور</label>
                                                        <input type="text" name="password" class="form-control pass " placeholder="كلمة المرور هنا .." value="">
                                                    </div>

                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4 ahs-from-box">
                                                        <label class="form-label dot">تقنية الطباعة</label>
                                                        <input type="" name="" class="form-control " placeholder="اختيار التقنية" value="">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 mt-4 ahs-from-box">
                                                        <label class="form-label dot">أنواع البرامج المستخدمة</label>
                                                        <input type="" name="" class="form-control " placeholder="اختاير البرامج المستخدمة" value="">
                                                        <img src="assets/images/arrow-5.png" alt="" class="input-holder__img">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="container container-x">
                                                        <div class="almuntjat-form-error almuntjat-form-error-2">
                                                            <img src="assets/images/warning.png" alt="" class="almuntjat-form-error__img"> بعد إضافة المنتج سيذهب الى الإدارة للمراجعة للقبول أو الرفض
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wrapper terms-wrapper">
                                                    <p class="term-cond">
                                                        بتسجيلك فأنت توافق على الشروط والأحكام
                                                    </p>
                                                    <a href="#" class="terms-link">الشروط والأحكام</a>
                                                </div>
                                                <div class="form-action ahs-from-action">
                                                    <button class="btn btn-form mx-3 with-arrow " type="submit">دخول</button>
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
            </div>
        </div>
    </div>
</div>