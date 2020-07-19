@extends('layouts.base')

@section('content')
<h3> Blog</h3>



    {!! Form::open(['url' => 'foo/bar']) !!}
 {{-- @include('post.edit_form') --}}
{!! Form::label('username') !!}
{!! Form::text('username') !!}
{!! Form::close() !!}


@endsection
