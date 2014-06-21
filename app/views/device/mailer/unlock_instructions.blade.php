<p>Hello {{ $resource->email }}!</p>

<p>Your account has been locked due to an excessive amount of unsuccessful sign in attempts.</p>

<p>Click the link below to unlock your account:</p>

<p>{{ link_to("unlock_url($resource, :unlock_token => $resource.unlock_token)", "Unlock my account") }}</p>
