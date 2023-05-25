@extends('layouts.dashbord')



@section('content')
        <!-- left side include page content -->
        <div class="left-side">
            <!-- page header include title and search button  -->
            <div class="d-flex justify-content-between mb-5">
                <h3 class="title mb-0">جدول العمليات</h3>
                <a href="{{route('operation.create')}}"><button type="button" class="btn" data-toggle="modal" >
                    اضافة
                </button></a>
            </div>
            <!-- Modal for searching in table -->
            <div class="modal fade" id="searchOperation" tabindex="-1" role="dialog"
                aria-labelledby="searchOperationTitle" aria-hidden="true">              
            </div>
            <!-- operations table  -->
            <div class="operation-table">
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">اسم المريض</th>
                            <th scope="col">نوع العملية</th>
                            <th scope="col">المشفى</th>
                            <th scope="col">القسم</th>
                            <th scope="col">التاريخ</th>                           
                            <th scope="col">تعديل</th>
                            <th scope="col">حذف</th>
                           
                        </tr>
                    </thead>
                    @foreach($operation as $operation)
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>{{$operation->name}}</td>
                            <td>{{$operation->surgery_tayp}}</td>
                            <td>{{$operation->hospital}}</td>
                            <td>{{$operation->section}}</td>
                            <td>{{$operation->surgery_date}}</td>
                            
                            <th scope="col"> <div class="edit-icon">
                                    <a href="{{route('operation.edit',$operation->id)}}"><i class="icofont-ui-edit"></i></a>
                                   
                                        
                                </div></th>
                            <th scope="col"> <form action="{{route('operation.destroy',$operation->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden; ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                         <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                          </svg>
                                         </button></th>
                        </tr>
                        
                    </tbody>
                    @endforeach
                </table>
            
            </div>

        </div>
@endsection   