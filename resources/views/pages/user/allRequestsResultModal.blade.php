   <div class="modal fade page result pay" id="allRequestsResultModal" tabindex="-1" aria-labelledby="allRequestsResultModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-fullscreen">
           <div class="modal-content">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="modal-header border-0">
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                               <div>
                                   <span class="outline dot">اهلاً وسهلاً بكم</span>
                                   <h1 class="modal-title">طلباتي
                               </div>
                               </h1>
                               <div class="profile">
                                   <a href="#profile">
                                       <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                   </a>
                               </div>
                           </div>

                       </div>
                       <div class="modal-body">
                           <div class="payment pay d-none" id="payment">
                               <div class="form-check">
                                   <label class="form-check-label" for="flexRadioDefault1">
                                       <img src="{{asset('user/assets/images/mada-logo.svg')}}" alt="">
                                       <p>مدى</p>
                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                   </label>
                                   <label class="form-check-label" for="flexRadioDefault2">
                                       <img src="{{asset('user/assets/images/masterCard.svg')}}" alt="">
                                       <p>فيزا وماستر كارد</p>
                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                   </label>
                               </div>
                               <div class="form-check">
                                   <label class="form-check-label" for="flexRadioDefault3">
                                       <img src="{{asset('user/assets/images/apple-pay.svg')}}" alt="">
                                       <p>آبل باي</p>
                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                   </label>
                               </div>
                           </div>
                           <div class="reject-reason d-none" id="reject-reason">
                               <div class="row mt-1 justify-content-center">
                                   <div class="col-md-8">
                                       <form action="" method="">
                                           <label class="form-label dot">سبب الرفض</label>
                                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  الوصف هنا"></textarea>
                                           <button class="btn btn-form mx-3 submit" type="submit">ارسال</button>
                                       </form>

                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-top">
                                       <span>رقم الطلب:</span>
                                       <span class="id">244</span>
                                       <div class="dateTime">11/01/2022 - 03:00PM</div>
                                   </div>
                                   <div class="row text-center mb-5 final">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           <div>
                                               <p>رفع الطلب</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           <div>
                                               <p>اجتماع الخطة العلاجية</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           <div>
                                               <p>اجتماع النموذج الأول</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/green-line.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/green-circle.svg')}}" alt="green-circle">
                                           <div>
                                               <p>اجتماع النموذج النهائي</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           <div>
                                               <p>الدفع</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           <div>
                                               <p>الطباعة ثلاثية الأبعاد</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           <div>
                                               <p>اختبار الجودة</p>
                                           </div>
                                       </div>
                                       <img src="{{asset('user/assets/icons/redline.svg')}}" alt="">
                                       <div class="col-sm-12 col-lg col-xxl">
                                           <div class="dateTime small text-white">11/01/2022 - 03:00PM</div>
                                           <img src="{{asset('user/assets/icons/red-circle.svg')}}" class="red-circle" alt="red-circle">
                                           <div>
                                               <p>التوصيل واتمام الطلب</p>
                                           </div>
                                       </div>
                                   </div>
                                   <h1 class="title text-center mb-5 conditional-blur">معلومات المريض والطبيب</h1>
                                   <div class="row justify-content-center conditional-blur conditional-hide">
                                       <div class="col-md-12">
                                           <div class="row mb-2 conditional-hide">
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">اسم الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. الاسم هنا" value="">
                                               </div>
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">تخصص الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. التخصص هنا" value="">
                                               </div>
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">ايميل الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. الايميل هنا" value="">
                                               </div>
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">رقم هاتف الطبيب</label>
                                                   <input type="text" class="form-control" placeholder=".. رقم الهاتف هنا" value="">
                                               </div>
                                           </div>
                                           <div class="row mb-2 mt-5 conditional-hide">
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">المستشفى أو الشركة</label>
                                                   <input type="text" class="form-control" placeholder=".. الجهه هنا" value="">
                                               </div>
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">رقم معرف المريض</label>
                                                   <input type="text" class="form-control" placeholder="المعرف هنا" value="">
                                               </div>
                                               <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 mt-4">
                                                   <label class="form-label">عمر المريض</label>
                                                   <input type="text" class="form-control" placeholder=".. المعرف هنا" value="">
                                               </div>
                                           </div>
                                           <div class="row mt-5 conditional-hide">
                                               <div class="col-md-12">
                                                   <label class="form-label">عموم الحاله الصحية</label>
                                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="  ..الوصف هنا"></textarea>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <h1 class="title text-center mt-5 mb-5 conditional-blur">نوع الخدمة والاجراء الطبي</h1>
                                   <div class="row justify-content-center pt-5 conditional-blur conditional-hide">
                                       <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mt-4">
                                           <img src="{{asset('user/assets/images/patient-front.png')}}" class="img-fluid" alt="patient-front">
                                       </div>
                                       <div class="col-md-3 pt-4 mt-5">
                                           <label class="form-label">القسم</label>
                                           <input type="text" class="form-control" placeholder="الجمجمة، العامود الفقري" value="">
                                           <label class="form-label mt-4">نوع الاجراء الطبي</label>
                                           <input type="text" class="form-control mb-4" placeholder=" .. اختيار من هنا" value="">
                                           <label class="form-label">الصور الطبية</label>
                                           <div class="upload-btn-wrapper">
                                               <button class="btn btn-upload"><img src="{{asset('user/assets/icons/uploaded-img.svg')}}" alt="upload-img"></button>
                                           </div>

                                       </div>

                                       <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                           <img src="{{asset('user/assets/images/patient-back.png')}}" class="img-fluid" alt="patient-back">
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-action price">
                                       <a href="#payment" class="btn btn-green mx-3 accept">قبول</a>
                                       <a href="#reject-reason" class="btn btn-red mx-3 reject">رفض</a>
                                       <button class="btn btn-sky mx-3 offer-price" type="submit" data-bs-toggle="modal" data-bs-target="#healthServicesFinalModal">عرض السعر</button>
                                       <button class="btn btn-form mx-3 next-one d-none" data-bs-toggle="modal" data-bs-target="#loaderModal">التالي</button>

                                       <p><img src="{{asset('user/assets/icons/red-circle.svg')}}" alt="red-circle">&emsp;الدفع</p>
                                   </div>
                                   <div class="form-action requests d-none">
                                       <button class="btn btn-form mx-3 with-arrow showRequests">طلباتي</button>
                                       <button class="btn btn-sky mx-3 p">الفاتورة</button>
                                       <p>تمت عملية الدفع بنجاح</p>
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