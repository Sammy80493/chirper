<x-layout title="Edit Chirp">
    <div class="w-full">
        <div class="mx-auto w-full max-w-2xl">
            <div class="mb-8">
                <h1 class="mb-2 pl-6 text-3xl font-bold text-gray-800">Update Chirp</h1>

                <div class="rounded-lg bg-white p-6 shadow-md">
                    <form action="/chirp/{{ $chirp->id }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <label class="sr-only" for="message">Your Chirp</label>
                        <textarea
                            class="block w-full resize-none rounded-md border border-gray-300 bg-gray-50 p-4 text-gray-900 shadow-sm transition ease-in-out focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="message" name="message" rows="4" placeholder="What's on your mind?">{{ old('$message', $chirp->message) }}</textarea>
                        @error('message')
                            <div
                                class="animate-fade-in mt-2 flex items-center gap-2 rounded-lg border border-red-200 bg-red-50 px-3 py-2">
                                <svg class="h-4 w-4 shrink-0 text-red-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm font-medium text-red-800">{{ $message }}</span>
                            </div>
                        @enderror

                        <div class="mt-4 flex justify-end gap-2">
                            <a class="inline-flex items-center rounded-md border border-transparent bg-red-600 px-6 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 active:bg-red-900"
                                href="/">Cancel</a>
                            <button
                                class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-2 font-semibold text-white transition duration-150 ease-in-out hover:bg-indigo-700 focus:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-indigo-900"
                                type="submit">
                                <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Update Chirp
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
