<x-layout title="Register">
    <div class="flex flex-col items-center">
        <div class="w-full max-w-md">
            <div class="rounded-xl border border-gray-200 bg-white p-8 shadow-2xl">

                <h2 class="mb-4 text-center text-3xl font-extrabold text-gray-900">
                    Create an Account
                </h2>
                <p class="mb-3 text-center text-sm text-gray-500">
                    Join our community in just a few steps.
                </p>

                <form class="space-y-5" action="{{route('register.store')}}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="name">Full Name</label>
                        <input
                            class="mt-0.5 block w-full resize-none rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 shadow-sm transition ease-in-out focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="name" name="name" type="text"
                            placeholder="Enter your name" autocomplete="name">
                        <x-error field="name"/>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="email">Email Address</label>
                        <input
                            class="mt-0.5 block w-full resize-none rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 shadow-sm transition ease-in-out focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="email" name="email" type="email" placeholder="Enter your email"
                            autocomplete="email">
                        <x-error field="email"/>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                        <input
                            class="mt-0.5 block w-full resize-none rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 shadow-sm transition ease-in-out focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="password" name="password" type="password" placeholder="**********"
                            autocomplete="new-password">
                        <x-error field="password"/>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="password_confirmation">Confirm
                            Password</label>
                        <input
                            class="mt-0.5 block w-full resize-none rounded-md border border-gray-300 bg-gray-50 px-4 py-2 text-gray-900 shadow-sm transition ease-in-out focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            id="password_confirmation" name="password_confirmation" type="password" placeholder="**********"
                            autocomplete="new-password">
                        <x-error field="password_confirmation"/>
                    </div>

                    <div class="pt-2">
                        <button
                            class="flex w-full justify-center rounded-lg border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm transition duration-150 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            type="submit">
                            Register
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a class="font-medium text-indigo-600 hover:text-indigo-500" href="{{route('login.index')}}">
                            Log In
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-layout>
