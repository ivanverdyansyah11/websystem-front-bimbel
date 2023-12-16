@extends('layouts.main')

@section('content')
    <div class="col-12 col-lg-10 p-0">
        @include('components.topbar')
        @include('components.filter')
        <div class="content d-flex flex-column align-items-end gap-3">
            <a href="{{ route('lesson.create') }}" class="button-primary d-flex align-items-center gap-2">
                <div class="add-icon"></div>
                Add New
            </a>
            <div class="table-default">
                <div class="table-header d-flex align-items-center gap-3">
                    <p class="header-list">Subject</p>
                    <p class="header-list">Teacher</p>
                    <p class="header-list">Duration</p>
                    <p class="header-list">Action</p>
                </div>
                <div class="table-body d-flex align-items-center gap-3 mt-2">
                    <div class="body-list">Modern Sociology</div>
                    <div class="body-list">Iwan Saputra</div>
                    <div class="body-list">1 Hour</div>
                    <div class="body-list d-flex gap-2">
                        <a href="{{ route('lesson.detail') }}" class="detail-icon"></a>
                        <a href="{{ route('lesson.edit') }}" class="edit-icon"></a>
                        <a href="#" class="delete-icon"></a>
                    </div>
                </div>
                <div class="table-body d-flex align-items-center gap-3 mt-2">
                    <div class="body-list">Practical Accounting</div>
                    <div class="body-list">Anita Cahyani</div>
                    <div class="body-list">2 Hour</div>
                    <div class="body-list d-flex gap-2">
                        <a href="{{ route('lesson.detail') }}" class="detail-icon"></a>
                        <a href="{{ route('lesson.edit') }}" class="edit-icon"></a>
                        <a href="#" class="delete-icon"></a>
                    </div>
                </div>
                <div class="table-body d-flex align-items-center gap-3 mt-2">
                    <div class="body-list">Applied Chemistry</div>
                    <div class="body-list">Rudi Pratama</div>
                    <div class="body-list">3 Hour</div>
                    <div class="body-list d-flex gap-2">
                        <a href="{{ route('lesson.detail') }}" class="detail-icon"></a>
                        <a href="{{ route('lesson.edit') }}" class="edit-icon"></a>
                        <a href="#" class="delete-icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection