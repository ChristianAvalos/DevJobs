@php
    $clases="text-xs text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" 
@endphp
<a {{ $attributes->merge(['class'=> $clases])}}>

    {{ $slot }}
</a>