<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Welkom op de articles page.</p>

                    <p><a class="underline" href="{{ route('articles.create') }}">Nieuw blog artikel maken</a></p>

                    @foreach($articles as $article)
                        <a href="">{{ $article->title }} {{ $article->id }}</a><br>
                    @endforeach

                    {{ $articles->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>