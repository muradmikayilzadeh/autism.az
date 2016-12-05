@extends('layouts.app')

@section('content')
<div class="container"  >
    <div class="row" >
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" >
                <div class="panel-heading">Qeydiyyat</div>

                <div class="panel-body" >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user-save') }}">
                        {{ csrf_field() }}

                        <div class="col-md-8 col-md-offset-2">
                             @if ($message = Session::get('wrong'))
                                    <b style="color:red">{{ $message }}</b>
                             @endif
                            <input type="text" name="name" placeholder="Ad" class="form-control"><br>
                            <input type="text" name="surname" placeholder="Soyad" class="form-control"><br>
                            <select name="gender" class="form-control">
                                <option value="0">Kişi</option>
                                <option value="1">Qadın</option>
                            </select>
                            <br>
                            <input type="email" name="email" placeholder="E-poçt ünvanı" class="form-control"><br>
                            <input type="password" name="password" placeholder="Şifrə" class="form-control">
                            <br>
                            <div class="col-md-12">
                                 <div class="row">
                                     @if($errors->has('name'))
                                      <p style="color:red;text-align: left"><b>Adınızı yazın.</b></p>
                                     @endif

                                    @if($errors->has('surname'))
                                      <p style="color:red;text-align: left"><b>Soyadınızı yazın.</b></p>
                                    @endif

                                    @if($errors->has('email'))
                                      <p style="color:red;text-align: left"><b>E-poçt ünvanızı yazın.</b></p>
                                    @endif

                                    @if($errors->has('password'))
                                      <p style="color:red;text-align: left"><b>Şifrənizi yazın.</b></p>
                                    @endif
                                 </div>
                            </div>
                            <input type="submit" value="Qeydiyyat" class="btn btn-primary">

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
