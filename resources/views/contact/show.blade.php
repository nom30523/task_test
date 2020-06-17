@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    showです
                    {{ $contact->your_name }}
                    <form action="{{ route('contact.edit', ['id' => $contact->id]) }}" method="get">
                        @csrf
                        <input type="submit" value="変更する" class="btn btn-info">
                    </form>
                    <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="post" id="delete_{{ $contact->id }}">
                        @csrf
                        <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function deletePost(e) {
        'use strict';
        if (confirm('本当に削除していいですか？')) {
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
@endsection
