<form>
    @csrf
    <div class="mb-3">
        <label for="activityNameInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="activityNameInput" placeholder="Boat trip">
    </div>
</form>


<script>
    function createActivity() {
        $.ajax({
            url: '/activities',
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                'country_id': 10,
                'name': $('#activityNameInput').val(),
            },
            dataType: 'json',
            success: function (data) {
                location.reload();
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            }
        });
    }
</script>
