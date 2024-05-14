@props(['job'])
<div class="p-4 bg-gray-700 rounded-xl flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-500">Laracast</a>
        <h3 class="font-bold text-xl mt-3">Video Producer</h3>
        <p class="text-sm text-gray-500 mt-auto">Full time - From 45.000$</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
    </div>
</div>
