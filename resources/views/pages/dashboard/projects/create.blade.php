@extends('layouts.app')

@section('content')
    <main class="container py-3">

        <h1>Crea nuovo Progetto</h1>
       
        <form action="{{route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input 
                    type="text" 
                    class="form-control
                        @error('title')
                            is-invalid
                        @enderror"
                    name="title"
                    id="title"
                    required
                />
            </div>

            <div class="mb-3">
                <input
                type="file"
                name="cover_image"
                id="cover_image"
                class="form-control
                    @error('cover_image') is-invalid @enderror">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Content</label>
                <textarea type="text" class="form-control" name="content" id="content" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>

        </form>
    </main>
@endsection