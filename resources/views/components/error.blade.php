@props(['field'])
@error($field)
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
