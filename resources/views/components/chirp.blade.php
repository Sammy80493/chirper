@props(['chirp'])

<div class="rounded-lg border border-gray-200 bg-white p-6 shadow transition-shadow duration-200 hover:shadow-md">
    <div class="mb-4 flex items-center justify-between">
        <h3 class="text-lg font-bold text-gray-900">{{ $chirp->user ? $chirp->user->name : 'Anonymous' }}</h3>
        <span
            class="text-sm text-gray-500">{{ $chirp->created_at->diffForHumans() }}  @if($chirp->updated_at->gt($chirp->created_at->addSeconds(5)))
                <span class="text-gray-500 text-sm italic ">edited</span>
            @endif</span>
    </div>
    <p class="leading-relaxed text-gray-700">
        {{ $chirp->message }}
    </p>
    <div class="flex flex-row gap-2 pt-4">
        @can('update',$chirp)
            <a class="rounded-lg border border-indigo-500 bg-indigo-500 px-4 py-2 text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-indigo-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
               href="/chirp/{{ $chirp->id }}/edit">Edit</a>
        @endcan
        @can('delete',$chirp)
            <form action="/chirp/{{$chirp->id}}" method="POST">
                @csrf
                @method('DELETE')
                {{--            Note: Add an alert msg for confirmation about deleting a chirp with cancel option--}}
                <button
                    class="rounded-lg border border-red-500 bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm transition-all duration-200 hover:bg-red-600 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    type="submit">Delete
                </button>
            </form>
        @endcan
    </div>
    {{-- <p class="leading-relaxed text-gray-700">
        Just finished setting up my Laravel backend. Now I'm working on the UI using Tailwind CSS. It's much
        faster than writing custom CSS!
    </p> --}}
</div>
