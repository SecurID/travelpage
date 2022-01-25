<form method="POST" action="{{ url('/locations/activity/price') }}">
@csrf <!-- {{ csrf_field() }} -->

    <!-- Country -->
    <div class="mb-3">
        <input type="hidden" id="country_id" value="" name="country_id">
        <input type="text" class="form-control" id="countryName">
        <label for="countryName" class="form-label">Country</label>
    </div>

    <!-- Location -->
    <div class="mb-3">
        <label for="locationName" class="form-label">Location</label>
        <input type="text" class="form-control" id="locationName" value="{{ $location->name }}" name="name" aria-describedby="locationHelp">
        <div id="locationHelp" class="form-text">Please use the familiar name without descriptions.</div>
    </div>

    <!-- Activity -->
    <div class="mb-3">
        <label for="activityName" class="form-label">Activity</label>
        <input type="text" class="form-control" id="activityName" value="{{ $activity->name }}" name="activityName" aria-describedby="activityHelp">
        <div id="activityHelp" class="form-text">Please describe it as generally as possible. </div>
    </div>

    <!-- Price -->
    <div class="mb-3">
        <label for="priceValue" class="form-label">Price</label>
        <input type="number" class="form-control" id="priceValue" value="{{ $price->value }}" name="priceValue" aria-describedby="priceHelp">
        <div id="priceHelp" class="form-text">Please specify the price in the local currency.</div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('js/countrySearch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/locationSearch.js') }}" type="text/javascript"></script>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
