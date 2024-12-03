@extends('layouts/default')
@section('content')
<div class="add-books__form-wrapper">
    <form name="add-new-book" id="add-new-book" method="POST" action="{{ Route('post-form') }}" >
        @csrf
        <div class="form-section">
            <label for="title" @error('title') class="invalid" @enderror >Title @error('title') <b>{{$message}}<b> @enderror</label>
            <input type="text" id="title" name="title" class="form-control" size="100" value="{{ old('title') }}">    
        </div>
        <div class="form-section">
            <label for="author" @error('author') class="invalid" @enderror >Author @error('author') <b>{{$message}}<b> @enderror</label>
            <input type="text" id="author" name="author" class="form-control" size="100" value="{{ old('author') }}">
        </div>

        <div class="form-section">
            <label for="year" @error('year') class="invalid" @enderror >Year of publication @error('year') <b>{{$message}}<b> @enderror</label>
            <input type="number" id="year" name="year" class="form-control" 
            {{-- min="1457" max="{{date('Y')}}" --}}
            value="{{ old('year') }}">
        </div>

        <div class="form-section">
            <label for="genre" @error('genre') class="invalid" @enderror >Choose genre: @error('genre') <b>{{$message}}<b> @enderror</label>
            <select name="genre" id="genre">
                <option>--Some genres--</option>
                <option value="fantasy" {{ old('genre') == 'fantasy' ? 'selected' : '' }}>Fantasy</option>
                <option value="sci-fi" {{ old('genre') == 'sci-fi' ? 'selected' : '' }}>Sci-Fi</option>
                <option value="mystery" {{ old('genre') == 'mystery' ? 'selected' : '' }}>Mystery</option>
                <option value="drama" {{ old('genre') == 'drama' ? 'selected' : '' }}>Drama</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop