@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side" id="my-div">
            <!-- page header -->
            <h3 class="title mb-5">أرسل مشكلتك إلى فريق الدعم الفني لدينا</h3>
            <!-- contact form -->
            <form class="form" method="POST" action="{{route('contact.submit')}}">
                @csrf 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="الاسم " required="required">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="الايميل" required="required">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="الموضوع" required="required"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" placeholder="الرسالة" required="required"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-end">
                    <button class="btn" type="submit">إرسال</button>
                </div>
            </form>
        </div>
@endsection   