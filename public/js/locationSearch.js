jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var engineLocation = new Bloodhound({
        remote: {
            url: '/autocomplete-search-location?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#locationName").typeahead({
        hint: false,
        highlight: true,
    }, {
        source: engineLocation.ttAdapter(),

        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'location',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Add new Location</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<option value="' + data.id + '" class="list-group-item">' + data.name + '</option>'
            }
        }
    });

    $('#locationName').bind('typeahead:select', function(ev, suggestion) {
        $('#locationName').typeahead('val', suggestion.name);
        $('#location_id').val(suggestion.id)
    });
});
