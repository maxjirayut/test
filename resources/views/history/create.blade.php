@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif
  <form method="post" action="{{url('history')}}">
   {{csrf_field()}}
   <div class="form-group">
     <label for="inputAddress">ชื่อ-นามสกุล :</label>
     <input type="text" class="form-control" name="name"  placeholder="ชื่อ-นามสกุล">
   </div>
   <div class="form-row">
     <div class="form-group col-md-5">
       <label for="inputState">เพศ :</label>
       <select id="inputState" name="sex" class="form-control">
         <option selected>เพศ</option>
         <option>ชาย</option>
         <option>หญิง</option>
       </select>
     </div>
     <div class="form-group col-md-7">
       <label for="inputState">สถานะภาพ :</label>
       <select id="inputState" name="status" class="form-control">
         <option selected>สถานะภาพ</option>
         <option>โสด</option>
         <option>สมรส</option>
         <option>หย่า</option>
         <option>หม้าย</option>
       </select>
     </div>
   </div>
   <div class="form-group">
     <label for="inputAddress">สัญชาติ :</label>
     <input type="text" name="nationality" class="form-control"  placeholder="ศาสนา">
   </div>
   <div class="form-group">
     <label for="inputAddress">ศาสนา :</label>
     <input type="text" name="religion" class="form-control"  placeholder="ศาสนา">
   </div>
   <div class="form-group">
     <label for="inputAddress">วัน/เดือน/ปี เกิด :</label>
     <input id="datepicker" name="birthdays" width="276">
   </div>
   <div class="form-group">
     <label for="inputAddress">ที่อยู่ :</label>
     <textarea name="address" class="form-control"  rows="4" cols="80"></textarea>
   </div>
   <div class="form-group">
     <label for="inputAddress">เบอร์โทร :</label>
     <input type="number" name="phone" class="form-control"   placeholder="เบอร์โทร">
   </div>
   <div class="form-group">
     <label for="inputAddress">จบจาก :</label>
     <input type="text" class="form-control" name="graduated"  placeholder="จบจาก">
   </div>
   <div class="form-group">
     <label for="inputAddress">สาขา :</label>
     <input type="text" class="form-control" name="branch" equired placeholder="สาขาวิชาชีพ">
   </div>
   <div class="row justify-content-md-center">
     <button type="submit" class="btn btn-primary">บันทึก</button>
   </div>
</div>{{-- end container --}}
  </form>
 </div>
</div>
@endsection
