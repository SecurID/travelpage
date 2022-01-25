<form method="POST" action="{{ url('/locations') }}">
    @csrf <!-- {{ csrf_field() }} -->
    <div class="mb-3">
        <label for="locationName" class="form-label">Name</label>
        <input type="text" class="form-control" id="locationName" value="{{ $location->name }}" name="name" aria-describedby="locationHelp">
        <div id="locationHelp" class="form-text">Please use the familiar name without descriptions.</div>
    </div>
    <div class="mb-3">
        <input type="hidden" id="country_id" value="" name="country_id">
        <input type="text" class="form-control" id="countryName">
        <label for="countryName" class="form-label">Country</label>
    </div>
    <script src="{{ asset('js/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('js/countrySearch.js') }}" type="text/javascript"></script>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

