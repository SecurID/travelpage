@include('layouts.app')

<form method="POST" action="/search">
    @csrf

    <label for="destinationSearch" class="form-label">What's your destination?</label>
    <input class="form-control" list="datalistOptions" id="destinationSearch" placeholder="Type to search...">
    <datalist id="datalistOptions">
        <option value="Bocas del Toro">
        <option value="Santa Catalina">
    </datalist>
</form>

<div id="results">
    <div class="resultEntry">
        <div class="row">
            <div class="col">
                Tour 1-day all islands
            </div>
            <div class="col">
                Price: 25 USD
            </div>
        </div>
    </div>
</div>
