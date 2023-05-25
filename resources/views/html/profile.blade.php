@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
       
        <div class="profile left-side">
            <!-- page header include profile img, name, position -->
            
           
            <div class="profile-header">
                <div class="background"></div>
                <div class="info">
                    <div class="img">
                        <img src="../img/author2.jpg" alt="profile img">
                    </div>
                    <div class="name-title mr-3">
                       
                        <h4>{{ Auth::user()->firstname}} </h4>
                        <h5>{{ Auth::user()->specialization}}</h5>
                    </div>
                     
                       <a href="profile-edit">
                        <button type="submit"  class="btn edit-profile">
                            <i class="icofont-ui-edit"></i>
                            تعديل الملف الشخصي
                        </button>
                        </a>
                        
                   
                </div>
            </div>
           
            <!-- profile content include: contact info, qualifications and experiences  -->
            <div class="profile-content">
                <div class="mb-4">
                    <h5 class="mb-4">معلومات الاتصال</h6>
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <p>البريد الإلكتروني:</p>
                                <span>
                                {{ Auth::user()->email}}
                                </span>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <p>رقم الموبايل:</p>
                                <span>
                                {{ Auth::user()->phone}}
                                </span>
                            </div>
                        </div>
                </div>







                <!-- <div class="mb-4">
                    <h5 class="mb-4">المؤهلات العلمية</h6>
                        <div class="row">
                            <div class="col-12 mb-4 d-flex justify-content-between">
                                <div>
                                    <p>جامعة الأزهر</p>
                                    <span>
                                        طب عام
                                    </span>
                                </div>
                                <span class="period">
                                    2010-2016
                                </span>
                            </div>
                            <div class="col-12 mb-4 d-flex justify-content-between">
                                <div>
                                    <p>جامعة بيرزيت</p>
                                    <span>
                                        طب باطني
                                    </span>
                                </div>
                                <span class="period">
                                    2017-2019
                                </span>
                            </div>
                        </div>
                </div>
                <div class="mb-4">
                    <h5 class="mb-4">الخبرات العملية</h6>
                        <div class="row">
                            <div class="col-12 mb-4 d-flex justify-content-between">
                                <div>
                                    <p>مشفى الشفاء</p>
                                    <span>
                                        قسم الباطنية
                                    </span>
                                </div>
                                <span class="period">
                                    2017-2020
                                </span>
                            </div>
                            <div class="col-12 mb-4 d-flex justify-content-between">
                                <div>
                                    <p>مشفى العودة</p>
                                    <span>
                                        قسم العمليات
                                    </span>
                                </div>
                                <span class="period">
                                    2020-2022
                                </span>
                            </div>
                        </div>
                </div> -->
            </div>
        </div>
@endsection        
  