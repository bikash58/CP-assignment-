@extends('layouts.user')

@section('content')

<div class="col-md-10">
    <div class="panel panel-default __user-update nbd-watermark">
        <div class="panel-heading">Customer ID : {{ $userObj->id}}</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <form class="form-horizontal" method="POST" action="/update">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label for="name">Name : </label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Jane Doe" value="{{ $userObj->name }}">
                      </div><br />
                      <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $userObj->email }}"  disabled="disabled" placeholder="someone@example.com">
                      </div> <br />
                      <div class="form-group">
                        <label for="address">Address : </label>
                        <input type="text" id="address" name="address" value="{{ $userObj->address }}" class="form-control" placeholder="Dillibazar - 13, Kathmandu">
                      </div> <br />
                      <div class="form-group">
                        <label for="exampleInputEmail2">Mobile Number : </label>
                        <input type="text" class="form-control" name="mobile" value="{{ $userObj->mobile }}" id="exampleInputEmail2" placeholder="98XXXXXXXX">
                      </div> <br />
                      <div class="form-group">
                        <label for="exampleInputEmail2">Landline Number : </label>
                        <input type="text" class="form-control" name="landline" value="{{ $userObj->landline }}" id="exampleInputEmail2" placeholder="XXX - XXXXXXX">
                      </div> <br />
                      <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div>

                <div class="col-md-2">
                    <div class="__user-pimage"></div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection