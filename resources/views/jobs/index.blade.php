<x-layout>
    <x-slot:header>
        Jobs Page
    </x-slot:header>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border rounded-2xl border-gray-500">
                <div class="font-bold text-blue-400 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
