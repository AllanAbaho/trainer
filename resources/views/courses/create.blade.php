@extends('layouts.user_type.auth')

@section('content')
    <div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Course Information') }}</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data"
                            role="form text-left">
                            @csrf
                            @if ($errors->any())
                                <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-text text-white">
                                        {{ $errors->first() }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success"
                                    role="alert">
                                    <span class="alert-text text-white">
                                        {{ session('success') }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Course Title') }}</label>
                                        <input class="form-control" type="text" placeholder="Title" id="user-name"
                                            name="title" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-email" class="form-control-label">{{ __('Instructor') }}</label>
                                        <input class="form-control" type="text" placeholder="Mr. Kasule Thomas"
                                            id="user-email" name="instructor" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.phone" class="form-control-label">{{ __('Category') }}</label>
                                        <select class="form-select" aria-label="Default select example" name="category"
                                            required>
                                            <option selected>Choose category</option>
                                            <option value="Health">Health</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Accounting">Accounting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.phone" class="form-control-label">{{ __('Level') }}</label>
                                        <select class="form-select" aria-label="Default select example" name="level"
                                            required>
                                            <option selected>Choose level</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Expert">Expert</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">{{ __('Video Link') }}</label>
                                        <input class="form-control" type="text" placeholder="www.youtube.com/xyz"
                                            id="user-name" name="video_url">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-email" class="form-control-label">{{ __('Attachment') }}</label>
                                        <input class="form-control" type="file" id="formFile" name="attachment">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="about">{{ 'Description' }}</label>
                                <textarea class="form-control" id="about" rows="5" placeholder="Say something about this course"
                                    name="description" required></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit"
                                    class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
