@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Part Sums Calculator</h2>

        <form action="{{ route('partsums.calculate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="numbers" class="form-label">Enter numbers (comma-separated):</label>
                <input type="text" placeholder="Example: 1,2,3,4,5" name="numbers" id="numbers" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        @if(isset($result))
            <div class="mt-4">
                <h4>Input Array: [{{ implode(', ', $numbers) }}]</h4>
                <h4>Part Sums Result:</h4>
                <p>[{{ implode(', ', $result) }}]</p>
            </div>
        @endif
    </div>
@endsection
