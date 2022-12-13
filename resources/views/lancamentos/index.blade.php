<x-layout title="Lançamentos">
    <ul>
        @foreach($teste as $conta)
            <li>{{ $conta }}</li>
        @endforeach
    </ul>
</x-layout>

