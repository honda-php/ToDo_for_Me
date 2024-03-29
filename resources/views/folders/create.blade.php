@extends('layout')

@section('content')
      <div class="container">
        <div class="row">
          <div class="col col-md-offset-3 col-md-6">
            <div class="card">
              <div class="card-header">
                フォルダを追加する
              </div>
              <div class="card-body">
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $message)
                        <li>{{ $message }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
                <form action ="{{ route('folders.create') }}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="title">フォルダ名</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                  </div>
                  <div class="text-right">
                    <button type="submit" class="btn btn-primary">送信</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
