<x-layout>
    <x-slot:title>Rosco and Leko</x-slot:title>
    <div class="rosco-leko-gallery">
        @foreach($images as $image)
            <div>
                <img src="{{ $image["path"] }}" @if(isset($image["description"])) alt="{{ $image["description"] }}" @endif>
                @if(isset($image["description"]))
                    <p>{{$image["description"]}}</p>
                @endif
            </div>
        @endforeach
    </div>
</x-layout>
