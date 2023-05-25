@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side" id="my-div">
            <!-- page header -->
            <div class="header-page mb-5">
                <h3 class="title">إضافة / تعديل عملية جراحية </h3>
                <a href="{{route('operation.index')}}"><i class="icofont-swoosh-right"></i></a>
            </div>
            @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
            <!-- case form -->
            <form class="form"  action="{{route('operation.store')}}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="الاسم " required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="surgery_tayp" placeholder="نوع العملية" required="required">
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="hospital" placeholder="المشفى" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="section" placeholder="القسم" required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="date" name="surgery_date"  >
                        </div>
                    </div>
                    
                   
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button class="btn" type="submit">حفظ</button>
                </div>
            </form>
        </div>
@endsection  