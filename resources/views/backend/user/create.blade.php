@extends('layouts.admin')
@section('title', 'Thêm Người Dùng')
@section('content')
<form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
  @csrf
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>THÊM NGƯỜI DÙNG</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Bảng điều khiển</a></li>
              <li class="breadcrumb-item active">Thêm Người Dùng</li>
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
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6 text-right">
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Lưu[Thêm]</button>
                <a href="{{ route('user.index') }}" class="btn btn-info btn-sm"><i class="fas fa-trash"></i> Quay về danh sách</a>
            </div>
           </div>
          </div>
          <div class="card-body">
            @includeIf('backend.message_alert')
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                 <label for="username">Tên đăng nhập</label> 
                 <input type="text" name="username" value="{{old('username')}}" id="username" class="form-control"
                  placeholder="Nhập tên đăng nhập">
                  @if($errors->has('username'))
                  <div class="text-danger">
                    {{$errors->first('username')}}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                 <label for="email">Email</label> 
                 <input type="text" name="email" value="{{old('email')}}" id="email" class="form-control"
                  placeholder="Nhập email">
                  @if($errors->has('email'))
                  <div class="text-danger">
                    {{$errors->first('email')}}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                 <label for="password">Mật khẩu</label> 
                 <input type="password" name="password" value="{{old('password')}}" id="password" class="form-control"
                  placeholder="Nhập password">
                  @if($errors->has('password'))
                  <div class="text-danger">
                    {{$errors->first('password')}}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                 <label for="password_re">Xác nhận mật khẩu</label> 
                 <input type="password" name="password_re" value="{{old('password_re')}}" id="password_re" class="form-control"
                  placeholder="Xác nhận mật khẩu">
                  @if($errors->has('password_re'))
                  <div class="text-danger">
                    {{$errors->first('password_re')}}
                  </div>
                  @endif
                </div>


              </div>
              <div class="col-md-6">

                <div class="mb-3">
                 <label for="name">Họ tên</label> 
                 <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control"
                  placeholder="Nhập họ tên">
                  @if($errors->has('name'))
                  <div class="text-danger">
                    {{$errors->first('name')}}
                  </div>
                  @endif
                </div>

                
                <div class="mb-3">
                 <label for="phone">Điện thoại</label> 
                 <input type="text" name="phone" value="{{old('phone')}}" id="phone" class="form-control"
                  placeholder="Nhập phone">
                  @if($errors->has('phone'))
                  <div class="text-danger">
                    {{$errors->first('phone')}}
                  </div>
                  @endif
                </div>

                <div class="mb-3">
                 <label for="gender">Giới tính</label> 
                 <select class="form-control" name="gender" id="gender">
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                 </select>
                 @if($errors->has('gender'))
                  <div class="text-danger">
                    {{$errors->first('gender')}}
                  </div>
                  @endif
                </div>


                <div class="mb-3">
                 <label for="image">Hình đại diện</label> 
                 <input type="file" name="image" value="{{ old('image')}}" id="image" class="form-control">
                </div>

                
                <div class="mb-3">
                 <label for="status">Trạng thái</label> 
                 <select class="form-control" name="status" id="status">
                  <option value="1">Xuất bản</option>
                  <option value="2">Chưa xuất bản</option>
                  
                 </select>
                </div>

              </div>

            </div>
           
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
  


</form>

  
  @endsection