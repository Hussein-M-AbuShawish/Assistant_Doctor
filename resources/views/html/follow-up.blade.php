@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side">
            <!-- page header -->
            <div class="d-flex justify-content-between mb-5">
                <h3 class="title mb-0">حالات المتابعة</h3>
                <a href="{{route('addcase.create')}}">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
                    <button type="button" class="btn" data-toggle="modal" data-target="#searchOperation">
                        إضافة
                    </button>
                </a>
            </div>
            <!-- patient cases -->
            <div class="patient-cases">
                <div id="accordion">
                @foreach($cases as $case)
                    <div class="card">
                    
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              
                                <p class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">

                                    <span class="ml-2">حالة: </span>
                                    {{$case->name}}
                                </p>
                                <div>
                                <div class="edit-icon">
                                    <a href="{{route('addcase.edit',$case->id)}}"><i class="icofont-ui-edit"></i></a>
                                    <form action="{{route('addcase.destroy',$case->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden; ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                         <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                          </svg>
                                         </button>
                                        
                                </div>
                                <div>   
                                    
                              
                               
                               
                            </h5>
                        </div>
                        
                        <div id="collapseOne" class="collapse" aria-labelledby="heading" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p><span>الاسم رباعي: </span>{{$case->name}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span>العمر: </span> {{$case->age}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span>الجنس: </span> {{$case->gender}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span>المرض الذي يعاني منه: </span> {{$case->sick}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span>الدواء المستخدم: </span> {{$case->midicine}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span>العملية إن توفر: </span> {{$case->surgery}}</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p><span>نسبة التشافي: </span> {{$case->healing}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p><span>ملاحظات الطبيب: </span> {{$case->notes}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                    
                </div>
            </div>
        </div>
@endsection    
