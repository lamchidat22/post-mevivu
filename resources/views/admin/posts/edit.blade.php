@extends('admin.layouts.master')
@push('libs-css')
    <link rel="stylesheet" href="{{ asset('/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/libs/select2/dist/css/select2-bootstrap-5-theme.min.css') }}">
@endpush
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.post.update')" type="put" :validate="true">
                <x-input type="hidden" name="id" :value="$post->id" />
                <div class="row justify-content-center">
                    @include('admin.posts.forms.edit-left')
                    @include('admin.posts.forms.edit-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection

@push('libs-js')
    <script src="{{ asset('/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/libs/ckeditor/adapters/jquery.js') }}"></script>
    @include('ckfinder::setup')

    <script src="{{ asset('/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('/libs/select2/dist/js/i18n/' . trans()->getLocale() . '.js') }}"></script>
@endpush


@push('custom-js')
    @include('admin.posts.scripts.scripts')
@endpush
