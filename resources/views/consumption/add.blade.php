@extends('layout')

@section('content')

    <form method="post" action="{{ route('addHandleConsumption') }}">
        @csrf
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="number" class="form-control" name="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Send</button>
    </form>

@endsection
