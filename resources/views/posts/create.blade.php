@extends('layouts.default')
@section('title', 'New Post')
@section('content')
<h1>
  <a href="{{ url('/') }}" class="header-menu">Back</a>
  New Post
</h1>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
    @if($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    <textarea name="body" placeholder="enter body">{{ old('body') }}</textarea>
    @if($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add" name="add1">
  </p>
</form>
<form method="post" action="{{ url('/posts') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title2" placeholder="enter title" value="{{ old('title2') }}">
    @if($errors->has('title'))
    <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p>
    @php
      //dd($id);
      dd(old('grp1'));
      if( $id === '1' && old('grp1') === 'rdo1') {
        $rdo1Checked = 'checked';
      }
      if( $id === '2' && old('grp1') === 'rdo2') {
        $rdo2Checked = 'checked';
      }
      if( $id === '3' && old('grp1') === 'rdo3') {
        $rdo3Checked = 'checked';
      }

      $rdo1Checked = '';
      if ( old('grp1') === 'rdo1' ) {
        $rdo1Checked = 'checked';
      }

      $rdo2Checked = '';
      if ( old('grp1') === 'rdo2' ) {
        $rdo2Checked = 'checked';
      }

      $rdo3Checked = '';
      if ( old('grp1') === 'rdo3' ) {
        $rdo3Checked = 'checked';
      }

    @endphp
    <input type="radio" name="grp1" id="rdo1" value="rdo1" {{ $rdo1Checked }}>
    <input type="radio" name="grp1" id="rdo2" value="rdo2" {{ $rdo2Checked }}>
    <input type="radio" name="grp1" id="rdo3" value="rdo3" {{ $rdo2Checked }}>
  </p>
  <p>
    <input type="submit" value="Add" name="add2">
  </p>
</form>
@endsection
