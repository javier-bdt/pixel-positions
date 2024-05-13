<x-layouts.layout>
    <div class="space-y-10">
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex flex-wrap gap-2 mt-6">
                <x-tag>Remote</x-tag>
                <x-tag>Full Time</x-tag>
                <x-tag>Senior</x-tag>
                <x-tag>English</x-tag>
                <x-tag>Remote</x-tag>
                <x-tag>Full Time</x-tag>
                <x-tag>Senior</x-tag>
                <x-tag>English</x-tag>
                <x-tag>Remote</x-tag>
                <x-tag>Full Time</x-tag>
                <x-tag>Senior</x-tag>
                <x-tag>English</x-tag>
                <x-tag>Remote</x-tag>
                <x-tag>Full Time</x-tag>
                <x-tag>Senior</x-tag>
                <x-tag>English</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="space-y-4 mt-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layouts.layout>
