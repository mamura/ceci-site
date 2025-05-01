@extends('layouts.site')

@section('content')
    @foreach ($page->sections as $section)
        <x-sections.dynamic :data="$section->data" :type="$section->type" />
    @endforeach
@endsection
