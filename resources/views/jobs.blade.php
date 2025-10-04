<x-layout>
<x-slot:heading>
Jobs Page
</x-slot:heading>
<ul>
@foreach ($jobs as $job)
<li>
<strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
<a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
<strong class="text-laracasts">{{ $job->employer->name }}:</strong> {{ $job['title']
}} pays {{ $job['salary'] }} per year.
</a>

</li>
@endforeach
<div class="space-y-4">
@foreach ($jobs as $job)
{{-- Your existing job card link --}}
@endforeach
</div>
<div class="mt-6">
{{ $jobs->links() }}
</div>
</ul>
</x-layout>