<form method="POST" action="{{ url('/locations/activity/price') }}">
@csrf <!-- {{ csrf_field() }} -->

    <!-- Country -->
    <div class="mb-3">
        <input type="hidden" id="country_id" value="" name="country_id">
        <input type="text" class="form-control" id="countryName" placeholder="Type to search...">
        <label for="countryName" class="form-label">Country</label>
    </div>

    <!-- Location -->
    <div class="mb-3">
        <label for="locationSelect" class="form-label">Location</label>
        <select id="locationSelect" class="form-select" aria-label="Default select example" aria-describedby="locationHelp">
            <option selected>Please select a Country first!</option>
        </select>
        <div id="locationHelp" class="form-text">Not found your location? Add a new one!</div>
    </div>

    <div class="mb-3">
        <label for="activitySelect" class="form-label">Activity</label>
        <select id="activitySelect" class="form-select" aria-label="Default select example" aria-describedby="activityHelp">
            <option selected>Please select a Country & Location first!</option>
        </select>
        <div id="activityHelp" class="form-text">Not found your activity? Add a new one!</div>
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
    <script>
        $('#countryName').bind('typeahead:select', function(ev, suggestion) {
            $('#countryName').typeahead('val', suggestion.name);
            $('#country_id').val(suggestion.id);
            insertLocationResults(suggestion.id);
        });

        $('#locationSelect').on('change', function(value) {
            insertActivityResults(this.value);
        });

        function insertLocationResults(id) {
            $.ajax({

                url : '/country/' + id + '/locations',
                type : 'GET',
                data : {
                    'country_id' : id
                },
                dataType:'json',
                success : function(data) {
                    $("#locationSelect").empty();
                    $('#locationSelect').append("<option>Please select a location.</option>")
                    data.forEach(function(location) {
                        $('#locationSelect').append("<option value='" + location.id + "'>" + location.name + "</option>")
                    });
                },
                error : function(request,error)
                {
                    alert("Request: "+JSON.stringify(request));
                }
            });
        }

        function insertActivityResults(id) {
            $.ajax({

                url : '/location/' + id + '/activities',
                type : 'GET',
                data : {
                    'location_id' : id
                },
                dataType:'json',
                success : function(data) {
                    $("#activitySelect").empty();
                    $('#activitySelect').append("<option>Please select a activity.</option>")
                    data.forEach(function(activity) {
                        $('#activitySelect').append("<option value='" + activity.id + "'>" + activity.name + "</option>")
                    });
                },
                error : function(request,error)
                {
                    alert("Request: "+JSON.stringify(request));
                }
            });
        }
    </script>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
