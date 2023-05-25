@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side-blogs">
            <div class="blogs">
                <!-- add new blog -->
                <div class="add-blog mb-4">
                    <form id="post-form" method="POST" action="{{route('home.store')}}" enctype="multipart/form-data">
                        @csrf 
                        <div class="mb-3">
                            <label for="post-image">عنوان المقال:</label>
                            <input type="text" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="post-text">محتوى المقال:</label>
                            <textarea id="post-text" name="descrbtion"></textarea>
                        </div>
                        <div class="file-upload mb-3">
                            <input type="file" id="photo-upload" name="imgpath" accept="image/*">
                            <label for="photo-upload">إرفاق صورة</label>
                        </div>
                        <div class="mb-3">
                            
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
                        </div>
                        <div>
                            <button type="submit" class="btn">نشر</button>
                        </div>
                    </form>
                </div>
                <!-- show my blogs -->
              @foreach($blog as $b)
                <div class="my-blogs">
                    <a href="#">
                        <div class="blog">
                            <div class="blog-header d-flex align-items-center justify-content-space-between mb-4">
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="img ml-3">
                                        <img src="../img/author2.jpg" alt="">
                                    </div>
                                    <div>
                                        <h5>{{Auth::user()->firstname}}</h5>
                                        <span>
                                           {{$b->created_at}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-body">
                                <h4> {{$b->title}}</h4>
                                <img src="" alt="">
                                <p>{{$b->descrbtion}}</p>
                            </div>
                        </div>
                    </a>
                   
                    

                </div>
                @endforeach
            </div>

            <!-- show other blogs -->
            <div class="other-blogs">
                <h5>بعض المقالات الأخرى</h5>
                <a href="#">
                    <div class="blog">
                        <div class="blog-header d-flex align-items-center justify-content-space-between mb-4">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="img ml-3">
                                    <img src="../img/author2.jpg" alt="">
                                </div>
                                <div>
                                    <h5>أحمد محمد</h5>
                                    <span>
                                        20 أغسطس 2022
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <h4>فقر الدم لدى الأطفال</h4>
                            <img src="../img/img3.jpg" alt="">
                            <p>فقر الدم هو حالة لا يحتوي فيها الدم على ما يكفي من كرات الدم الحمراء السليمة لحمل
                                كمية الأكسجين الكافية إلى أنسجة الجسم. قد يجعلك فقر الدم -المعروف أيضًا بانخفاض
                                مستوى الهيموغلوبين- تحس بالإرهاق والوهن.

                                هناك عدة أنواع من فقر الدم، ولكل منها سببه الخاص. فقد يكون فقر الدم مؤقتًا أو طويل
                                الأجل، وقد يتدرّج من البسيط إلى الحاد. غالبًا ما يحدث فقر الدم لأكثر من سبب واحد.
                                راجع طبيبك إذا شككت في إصابتك بفقر الدم. فربما يكون علامة على وجود مرض خطير.

                                تتنوع علاجات فقر الدم -التي تعتمد على سبب الإصابة به- بين تناول المكملات الغذائية
                                والخضوع لإجراءات طبية. ويمكنك الوقاية من بعض أنواع فقر الدم عن طريق اتباع نظام غذائي
                                صحي ومتنوع.</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="blog">
                        <div class="blog-header d-flex align-items-center justify-content-space-between mb-4">
                            <div class="d-flex align-items-center justify-content-start">
                                <div class="img ml-3">
                                    <img src="../img/author2.jpg" alt="">
                                </div>
                                <div>
                                    <h5>أحمد محمد</h5>
                                    <span>
                                        20 أغسطس 2022
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="blog-body">
                            <h4>فقر الدم لدى الأطفال</h4>
                            <img src="../img/img3.jpg" alt="">
                            <p>فقر الدم هو حالة لا يحتوي فيها الدم على ما يكفي من كرات الدم الحمراء السليمة لحمل
                                كمية الأكسجين الكافية إلى أنسجة الجسم. قد يجعلك فقر الدم -المعروف أيضًا بانخفاض
                                مستوى الهيموغلوبين- تحس بالإرهاق والوهن.

                                هناك عدة أنواع من فقر الدم، ولكل منها سببه الخاص. فقد يكون فقر الدم مؤقتًا أو طويل
                                الأجل، وقد يتدرّج من البسيط إلى الحاد. غالبًا ما يحدث فقر الدم لأكثر من سبب واحد.
                                راجع طبيبك إذا شككت في إصابتك بفقر الدم. فربما يكون علامة على وجود مرض خطير.

                                تتنوع علاجات فقر الدم -التي تعتمد على سبب الإصابة به- بين تناول المكملات الغذائية
                                والخضوع لإجراءات طبية. ويمكنك الوقاية من بعض أنواع فقر الدم عن طريق اتباع نظام غذائي
                                صحي ومتنوع.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
@endsection  