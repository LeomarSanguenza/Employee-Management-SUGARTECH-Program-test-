@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Bottle Collector Earnings</h2>

        <form action="{{ route('bottle.collector.calculate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="daily_expenses" class="form-label">Daily Expenses:</label>
                <input type="number" step="0.01" name="daily_expenses" id="daily_expenses" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="expeditions" class="form-label">Expedition Data (each line in format: hours path price)</label>
                <textarea name="expeditions" id="expeditions" class="form-control" placeholder="Example: 8 ABIBAS 25" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Calculate Earnings</button>
        </form>

        @if(isset($message))
            <div class="mt-4">
                <h5>Total Earnings: {{ number_format($total_earnings, 2) }}</h4>
                <h5>Average Earnings: {{ number_format($average_earnings, 2) }}</h4>
                <h5>{{ $message }}</h4>
            </div>
        @endif
    </div>
@endsection
