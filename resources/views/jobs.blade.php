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
</ul>
</x-layout>