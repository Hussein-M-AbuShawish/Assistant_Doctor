@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side">
            <!-- page header  -->
            <h3 class="title mb-5">تشخيص المريض</h3>
            <!-- patient diagnosis form -->
            <form class="form" method="post" action="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="الاسم " required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="age" placeholder="العمر" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">الجنس</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">الجنس</li>
                                    <li data-value="2" class="option">ذكر</li>
                                    <li data-value="2" class="option">أنثى</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="temperature" placeholder="درجة الحرارة" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="heart" placeholder="النبض" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="pressure" placeholder="الضغط" required="required">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea placeholder="تشخيص الطبيب" required="required"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group check-ai d-flex justify-content-end">
                    <button class="btn" type="submit">فحص</button>
                </div>
            </form>
            <!-- AI result -->
            <div class="result-of-check">
                <h5 class="title mb-4">نتائج الفحص الطبي</h5>
                <p>نوع المرض الذي يعاني منه المريض: <span>حصوات في الكلى</span></p>
                <p>هل يحتاج المريض إلى عملية؟ <span>لا</span></p>
                <p>الدواء المناسب للمريض: <span>بنسلين</span></p>
                <p>المشفى: <span>الشفاء</span></p>
                <p>موعد العملية المتوفر: <span>\\\\</span></p>
                <p>الساعة المحددة: <span>11 AM</span></p>
                <div class="form-group mt-4">
                    <button class="btn done" type="button" data-toggle="modal" data-target="#checkDone">تم</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="checkDone" tabindex="-1" role="dialog" aria-labelledby="checkDoneTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body my-4">
                                <div class="check-icon d-flex justify-content-center">
                                    <i class="icofont-check-circled"></i>
                                </div>
                                <h4>تم الفحص بنجاح </h4>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-close" data-dismiss="modal"
                                    style="width: 47%">إغلاق</button>
                                <button type="button" class="btn print" style="width: 47%" data-dismiss="modal">طباعة
                                    الفحص</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection