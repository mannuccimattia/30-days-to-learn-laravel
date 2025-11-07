<h2>
    {{ $job->title }}
</h2>

<p>
    Your job has been posted on our website!
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your Job Listing</a>
</p>
