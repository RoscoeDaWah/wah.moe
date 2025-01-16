<x-layout-err>
    <x-slot:code>403</x-slot:code>
    <x-slot:message>{{__($exception->getMessage() ?: 'Forbidden')}}</x-slot:message>
</x-layout-err>
