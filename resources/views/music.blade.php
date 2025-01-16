<x-layout>
    <x-slot:title>Music</x-slot:title>
    <x-lastfm-current :track="$current_track"/>
    <x-lastfm-top :tracks="$top_tracks"/>
</x-layout>
