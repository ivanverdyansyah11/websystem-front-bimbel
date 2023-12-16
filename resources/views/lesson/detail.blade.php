@extends('layouts.main')

@section('content')
    <div class="col-12 col-lg-10 p-0">
        @include('components.topbar')
        <div class="content">
            <form class="form">
                <div class="row">
                    <div class="col-12 input-wrapper mb-3">
                        <label for="subject">Subject Lesson</label>
                        <input type="text" id="subject" class="input" placeholder="Input subject lesson.." value="Example Subject">
                    </div>
                    <div class="col-12 input-wrapper mb-3">
                        <label for="teacher">Teacher Lesson</label>
                        <input type="text" id="teacher" class="input" placeholder="Input teacher lesson.." value="Example Teacher">
                    </div>
                    <div class="col-12 input-wrapper mb-4">
                        <label for="duration">Duration Lesson</label>
                        <input type="text" id="duration" class="input" placeholder="Input duration lesson.." value="Example Duration">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex gap-2">
                        <a href="{{ route('lesson') }}" class="button-reverse-small">Back to Page</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection