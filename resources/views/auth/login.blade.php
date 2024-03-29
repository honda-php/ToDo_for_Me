@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="card">
          <div class="card-header">
            ログイン
          </div>
          <div class="card-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('login')}}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email')}}">
              </div>
              <div class="form-group">
                <label for="password">パスワード</label>
                <input type="text" class="form-control" id="password" name="password">
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center">
            <a href="{{ route('password.request')}}">パスワードの変更はこちら</a>
        </div>
      </div>
    </div>
  </div>
@endsection
