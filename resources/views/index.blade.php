<x-app-layout>
    <form method="POST" action="/search">
        @csrf
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="destinationSearch" placeholder="Type to search...">
                <label for="destinationSearch" class="form-label">What's your destination?</label>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/typeahead.bundle.js') }}"></script>
    <script src="/js/destinationSearch.js" type="text/javascript"></script>
</x-app-layout>
