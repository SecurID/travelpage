jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var engineCountry = new Bloodhound({
        remote: {
            url: '/autocomplete-search-country?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#countryName").typeahead({
        hint: false,
        highlight: true,
    }, {
        source: engineCountry.ttAdapter(),

        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'country',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<option value="' + data.id + '" class="list-group-item">' + data.name + '</option>'
            }
        }
    });

    $('#countryName').bind('typeahead:select', function(ev, suggestion) {
        $('#countryName').typeahead('val', suggestion.name);
        $('#country_id').val(suggestion.id)
    });
});
