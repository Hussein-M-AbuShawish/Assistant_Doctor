@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side edit-profile" id="my-div">
            <!-- page header -->
            <div class="header-page mb-5">
                <h3 class="title">تعديل الملف الشخصي</h3>
                <a href="profile"><i class="icofont-swoosh-right"></i></a>
            </div>
            <!-- edit profile form -->
            <form class="form" method="POST" action="{{route('user-profile-information.update')}}">
                @csrf 
                @method('PUT')

               


                <!-- <h5>الصورة الشخصية</h5>
                <div class="profile-image-container mb-4">
                    <img id="profile-image" src="../img/author2.jpg" alt="Profile Image">
                    <label for="file-upload" id="upload-button"><i class="icofont-camera"></i></label>
                    <input type="file" id="file-upload" name="file-upload" accept="image/*">
                </div> -->






                <h5>معلومات الاتصال</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="firstname" placeholder="الاسم الأول " required="required" value="{{old('name')?? Auth()->user()->firstname}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="lastname" placeholder=" الاسم الأخير " required="required" value="{{old('name')?? Auth()->user()->lastname}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="البريد الإلكتروني" required="required" value="{{old('name')?? Auth()->user()->email}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="رقم الموبايل"  required="required" value="{{old('name')?? Auth()->user()->phone}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                                <input type="text" name="specialization" placeholder="التخصص" value="{{old('name')?? Auth()->user()->specialization}}">
                            </div>
                    </div>
                </div>
                 <!-- <h5>المؤهلات العلمية</h5>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">الجامعة</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">الجامعة</li>
                                    <li data-value="2" class="option">الأنف والاذن والحنجرة</li>
                                    <li data-value="3" class="option">الجلدية والتناسلية</li>
                                    <li data-value="4" class="option">الطب النفسي</li>
                                    <li data-value="4" class="option">الغدد الصماء</li>
                                    <li data-value="4" class="option">القلب والاوعية الدموية</li>
                                    <li data-value="4" class="option">الكلى</li>
                                    <li data-value="4" class="option">الجهاز الهضمي والكبد</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">التخصص</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">التخصص</li>
                                    <li data-value="2" class="option">الأنف والاذن والحنجرة</li>
                                    <li data-value="3" class="option">الجلدية والتناسلية</li>
                                    <li data-value="4" class="option">الطب النفسي</li>
                                    <li data-value="4" class="option">الغدد الصماء</li>
                                    <li data-value="4" class="option">القلب والاوعية الدموية</li>
                                    <li data-value="4" class="option">الكلى</li>
                                    <li data-value="4" class="option">الجهاز الهضمي والكبد</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">من</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">من</li>
                                    <li data-value="2" class="option">1990</li>
                                    <li data-value="3" class="option">1991</li>
                                    <li data-value="4" class="option">1992</li>
                                    <li data-value="4" class="option">1993</li>
                                    <li data-value="4" class="option">1994</li>
                                    <li data-value="4" class="option">1995</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">إلى</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">إلى</li>
                                    <li data-value="2" class="option">1990</li>
                                    <li data-value="3" class="option">1991</li>
                                    <li data-value="4" class="option">1992</li>
                                    <li data-value="4" class="option">1993</li>
                                    <li data-value="4" class="option">1994</li>
                                    <li data-value="4" class="option">1995</li>
                                    <li data-value="4" class="option">1996</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h5> 
                    الخبرات العملية
                </h5>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">المركز
                                    الصحي</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">المركز الصحي</li>
                                    <li data-value="2" class="option">الأنف والاذن والحنجرة</li>
                                    <li data-value="3" class="option">الجلدية والتناسلية</li>
                                    <li data-value="4" class="option">الطب النفسي</li>
                                    <li data-value="4" class="option">الغدد الصماء</li>
                                    <li data-value="4" class="option">القلب والاوعية الدموية</li>
                                    <li data-value="4" class="option">الكلى</li>
                                    <li data-value="4" class="option">الجهاز الهضمي والكبد</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">القسم</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">القسم</li>
                                    <li data-value="2" class="option">الأنف والاذن والحنجرة</li>
                                    <li data-value="3" class="option">الجلدية والتناسلية</li>
                                    <li data-value="4" class="option">الطب النفسي</li>
                                    <li data-value="4" class="option">الغدد الصماء</li>
                                    <li data-value="4" class="option">القلب والاوعية الدموية</li>
                                    <li data-value="4" class="option">الكلى</li>
                                    <li data-value="4" class="option">الجهاز الهضمي والكبد</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">من</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">من</li>
                                    <li data-value="2" class="option">1990</li>
                                    <li data-value="3" class="option">1991</li>
                                    <li data-value="4" class="option">1992</li>
                                    <li data-value="4" class="option">1993</li>
                                    <li data-value="4" class="option">1994</li>
                                    <li data-value="4" class="option">1995</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="nice-select form-control wide" tabindex="0"><span class="current">إلى</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected ">إلى</li>
                                    <li data-value="2" class="option">1990</li>
                                    <li data-value="3" class="option">1991</li>
                                    <li data-value="4" class="option">1992</li>
                                    <li data-value="4" class="option">1993</li>
                                    <li data-value="4" class="option">1994</li>
                                    <li data-value="4" class="option">1995</li>
                                    <li data-value="4" class="option">1996</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="form-group d-flex justify-content-end">
                    <button class="btn" type="submit">حفظ</button>
                </div>
            </form>
        </div>
@endsection   