@extends('layout')

@section('content')

    <form method="post" action="{{ route('addHandleConsumption') }}">
        @csrf
        <div class="form-group">
            <label for="price">Цена</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="category_id">Категория</label>
            <select class="form-control" name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="account_id">Счет</label>
            <select class="form-control" name="account_id" id="account_id">
                @foreach($accounts as $account)
                    <option value="{{ $account['id'] }}">{{ $account['name'] }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Send</button>
    </form>

@endsection
