<x-app-layout>
    <x-location-detail
        :location="$location"
        :activities="$activities"
        :prices="$prices"
        :country="$country">
    </x-location-detail>
    <x-modal
        id="add-activity"
        title="Add Activity"
        button-text="Add Activity"
        component="form-create-activity">
    </x-modal>
</x-app-layout>
