@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-md-offset-3 col-md-6">
      <div class="card">
        <div class="card-header">
          まずはフォルダを作成しましよう
        </div>
        <div class="card-body">
          <div class="text-center">
            <a href="{{ route('folders.create')}}">
                フォルダ作成ページへ
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
