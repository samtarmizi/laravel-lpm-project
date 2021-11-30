@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Todos Show') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" value="{{ $todo->title }}" name="title" class="form-control" placeholder="Please enter todo title" readonly>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" readonly>{{ $todo->description }}</textarea>
                    </div>

                    @if($todo->attachment)
                        <a
                            target="_blank"
                            href="{{ $todo->attachment_url }}"
                            class="btn btn-link">
                            Open Attachment
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
