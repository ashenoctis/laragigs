@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv); //comma separated values in array
    $tags = explode(' ', $tagsCsv); //space separated values in array
@endphp

<ul class="flex">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach    
</ul>