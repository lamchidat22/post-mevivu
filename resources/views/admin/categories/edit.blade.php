@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <x-form :action="route('admin.category.update')" type="put" :validate="true">
                <x-input type="hidden" name="id" :value="$category->id" />
                <div class="row justify-content-center">
                    @include('admin.categories.forms.edit-left')
                    @include('admin.categories.forms.edit-right')
                </div>
                @include('admin.forms.actions-fixed')
            </x-form>
        </div>
    </div>
@endsection

@push('libs-js')

@endpush


