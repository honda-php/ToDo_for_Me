@extends('layout')

@section('styles')
  @include('share.flatpickr.styles')
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col col-md-offset-3 col-md-6">
          <div class="card">
            <div class="card-header">
              タスクを追加する
            </div>
            <div class="card-body">
              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                  @endforeach
                </div>
              @endif
              <form action="{{ route('tasks.create', ['id' => $folder_id])}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">タイトル</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                  <label for="due_date">期限</label>
                  <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}">
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

@section('scripts')
  @include('share.flatpickr.scripts')
@endsection
