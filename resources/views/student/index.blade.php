@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="card">
                <div class="card-header h3">
                    แสดงข้อมูลนักศึกษา
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  ระบบการจัดการข้อมูลนักศึกษา
                  <table class="table table-striped">
                      <tr>
                          <th>รหัส</th>
                          <th>ชื่อนำหน้า</th>
                          <th>ชื่อ</th>
                          <th>นามสกุล</th>
                          <th>สาขา</th>
                          <th>เครื่องมือ</th>
                      </tr>
                      @foreach ($student as $student)
                      <tr>
                          <td>{{ $student->stu_code }}</td>
                          <td>{{ $student->stu_pre }}</td>
                          <td>{{ $student->stu_fname }}</td>
                          <td>{{ $student->stu_lname }}</td>
                          <td>{{ $student->major_id }}</td>
                          <td><a href="{{
                          url('/student/destroy/'.$student->id) }}">ลบ</a></td>
                      </tr>
                      @endforeach
                    </table>
                    <div class="panel-footer">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
