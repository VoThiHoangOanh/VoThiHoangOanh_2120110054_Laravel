@extends('layouts.admin')
@section('title', 'Tất cả danh mục sản phẩm')
@section('content')

{{-- @php
    dd($list_category);
@endphp
 --}}


  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TẤT CẢ DANH MỤC</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
              <li class="breadcrumb-item active">Tất cả danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-2">
                  <button class="btn btn-sm btn-danger"type="submit"><i class="far fa-calendar-times"></i>Xoá</button>
              </div>

              <div class="col-md-4">
                  <form action="" class ="form-inline" >
                    <div class="form-group">
                      <input class="form-control" name="key" placeholder="Tìm kiếm">
                    </div>
                    <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                    </button>
                  </form>
              </div>
              <div class="col-md-6 text-right">
                  <a href="{{ route('category.create') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Thêm</a>
                  <a href="{{ route('category.trash') }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Thùng rác</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            @includeIf('backend.message_alert')
            <table class="table table-bordered">

            <thead>
                <tr>
                  
                    <th style="width:20px;" class="text-center">
                        #
                    </th>
                    <th style="width:100px;" class="text-center">
                        Hình ảnh
                    </th>
                    <th style="width:200px;">
                        Tên danh mục
                    </th>
                   
                    <th>
                        Slug
                    </th>

                    

                    <!-- <th style="width:50px;" class="text-center">
                       Nội dung mô tả
                    </th> -->

                    <th style="width:260px;" class="text-center">
                       Ngày đăng
                    </th>
                    <th style="width:200px;" class="text-center">
                        Chức năng
                    </th>
                    <th style="width:20px;" class="text-center">
                        ID
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($list_category as $category)
                <tr>
                    <td class="text-center"><input type="checkbox"></td>

                    <td>
                    <img class="img-fluid" src="{{ asset('public/images/category/'.$category->image)}}" alt="{{$category->image}}">
                    </td>

                    <td>{{ $category->name }}</td>
                   
                    <td>{{ $category->slug }}</td>

                    <!-- <td>{{ $category->metadesc }}</td> -->

                    <td class="text-center">{{ $category->created_at }}</td>

                    <td class="text-center">
                    @if($category->status==1)
                    <a href="{{ route('category.status',['category'=>$category->id]) }}"
                            class="btn btn-sm btn-success">
                            <i class="fas fa-toggle-on"></i>
                    </a>
                    @else
                    <a href="{{ route('category.status',['category'=>$category->id]) }}"
                            class="btn btn-sm btn-danger">
                            <i class="fas fa-toggle-off"></i>
                    </a>
                    @endif

                       <a href="{{ route('category.edit',['category'=>$category->id]) }}"
                            class="btn btn-sm btn-info">
                            <i class="fas fa-edit"></i>
                        </a> 
                       <a href="{{ route('category.show',['category'=>$category->id]) }}" 
                            class="btn btn-sm btn-success">
                            <i class="fas fa-eye"></i>
                        </a> 
                       <a href="{{ route('category.delete',['category'=>$category->id]) }}"
                            class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                        </a> 

                    </td>
                    <td class="text-center">{{ $category->id }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
          </div>
          <div>
          {{ $list_category->links() }}
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
  @endsection
