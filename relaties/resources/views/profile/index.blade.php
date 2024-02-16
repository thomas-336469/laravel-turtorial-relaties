@if ($user->profile)
<div class="card">
    <div class="card-body">
        <h1>User has a profile</h1>
        <p>Website: {{ $user->profile->website_url }}</p>
        <p>Github: {{ $user->profile->github_url }}</p>
        <p>Twitter: {{ $user->profile->twitter_url }}</p>
    </div>
</div>
@else
<h1>User does not have a profile</h1>
@endif