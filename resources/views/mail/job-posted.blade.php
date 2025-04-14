<h2>
   {{ $job->title }}
</h2>
<p>
    Congratulations! Your Job is now posted on our servers.

    See your job <a href="{{ url('/jobs/'. $job->id) }}">here.</a>
</p>
