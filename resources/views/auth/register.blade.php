@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offsest-3 col-md-6">
      <div class="card">
        <div class="card-header">
          会員登録
        </div>
        <div class="card-body">
          @if($errors->any())
           <div class="alert alert-danger">
             @foreach($errors->all() as $message)
              <p>{{ $message}}</p>
             @endforeach
           </div>
          @endif
          <form action="{{ route('register' )}}" method="POST">
           {{ csrf_field() }}
           <div class="form-group">
             <label for="email">メールアドレス</label>
             <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}">
           </div>
           <div class="form-group">
             <label for="name">ユーザー名</label>
             <input type="text" class="form-control" id="name" name="name" value="{{ old('namae')}}">
           </div>
           <div class="form-group">
             <label for="password">パスワード</label>
             <input type="text" class="form-control" id="password" name="password">
           </div>
           <div class="form-group">
             <label for="password-confirm">パスワード(確認)</label>
             <input type="text" class="form-control" id="password-confirm" name="password_confirmation">
           </div>
           <div class="text-right">
             <button type="submit" class="bnt bnt-primary">送信</button>
           </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
