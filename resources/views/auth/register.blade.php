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
                            <input required type="text" name="name" placeholder="Ad" class="form-control"><br>
                            <input required type="text" name="surname" placeholder="Soyad" class="form-control"><br>
                            <select name="gender" class="form-control">
                                <option value="0">Kişi</option>
                                <option value="1">Qadın</option>
                            </select>
                            <br>
                            <input required type="email" name="email" placeholder="E-poçt ünvanı" class="form-control"><br>
                            <input required type="password" name="password" placeholder="Şifrə" class="form-control">
                            <br>
                            <input type="submit" value="Qeydiyyat" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
