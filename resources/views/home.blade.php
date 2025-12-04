<x-layout title="Welcome">

    <div class="mx-auto max-w-2xl">

        <div class="mb-8">
            <h1 class="mb-2 pl-6 text-3xl font-bold text-gray-800">Latest Chirper</h1>


            @auth
                <div class="rounded-lg bg-white p-6 shadow-md">
                    <form action="/chirp" method="POST">
                        @csrf
                        <label class="sr-only" for="message">Your Chirp</label>
                        <textarea
                            class="block w-full resize-none rounded-md border border-gray-300 bg-gray-50 p-4 text-gray-900 shadow-sm transition ease-in-out focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="message" name="message" rows="4"
                            placeholder="What's on your mind?">{{ old('$message') }}</textarea>
                        @error('message')
                        <div
                            class="animate-fade-in mt-2 flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 px-3 py-2">
                            <svg class="h-4 w-4 shrink-0 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span class="text-sm font-medium text-red-800">{{ $message }}</span>
                        </div>
                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button
                                class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-indigo-900"
                                type="submit">
                                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Chirp
                            </button>

                        </div>
                    </form>
                </div>
            @endauth

        </div>

        <div class="space-y-4">
            @forelse ($chirps as $chirp)
                <x-chirp :chirp="$chirp"/>
            @empty

                <span class="text-center text-sm text-gray-500 items-center">No Chirps found</span>
            @endforelse
        </div>

    </div>

</x-layout>
