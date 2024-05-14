@props(['job'])
<div class="p-4 bg-gray-700 rounded-xl flex flex-col text-center">
    <div class="self-start text-sm">
        {{ $job->employer->name }}
    </div>
    <div class="py-6 font-bold">
        <h3>{{ $job->name }}</h3>
        <p>{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :$tag />
            @endforeach
        </div>
        <x-employer-logo :width=42 />
    </div>
</div>
