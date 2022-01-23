<div>
    <h1>{{ $location->name }} - {{ $country[0]['name'] }}</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Activity</th>
            <th scope="col">Lowest price</th>
            <th scope="col">Highest price</th>
            <th scope="col">Average</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($activities as $activity)
            <tr>
                <td>{{ $activity->name }}</td>
                <td>{{ $prices[$activity->id]['lowest'] }}</td>
                <td>{{ $prices[$activity->id]['highest'] }}</td>
                <td>{{ round($prices[$activity->id]['average'], 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
