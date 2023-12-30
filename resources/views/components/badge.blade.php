@props(['textColor','bgColor'])
<a {{$attributes}} class="rounded-xl px-3 py-1 text-base"
style="color:{{$textColor}};background-color: {{$bgColor}}"> {{$slot}} </a>
