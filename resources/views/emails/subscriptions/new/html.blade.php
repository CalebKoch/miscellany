<?php /** @var \App\User $user */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <p>
        New subscription for user <a href="https://admin.kanka.io/users/{{ $user->id }}">{{ $user->name }}</a> in {{ $user->currencySymbol() }} (#{{ $user->id }}) {{ $user->email }}.
    </p>
    <p>
        Account created {{ $user->created_at->diffForHumans() }} ({{ $user->created_at->format('d.m.Y') }}).
    </p>

    @if ($user->cancellations->first())
        <p>
            Previously cancelled {{ $user->cancellations->sortByDesc('id')->first()->tier }} subscription {{ $user->cancellations->sortByDesc('id')->first()->created_at->diffForHumans() }} ({{ $user->cancellations->sortByDesc('id')->first()->created_at->format('d.m.Y') }}).
        </p>
    @endif
    @if ($discord = $user->apps->where('app', 'discord')->first())
        <p>
            Discord: {{ $discord->settings['username'] }}#{{ $discord->settings['discriminator'] }}
        </p>
    @endif
    @if ($user->referral)
        <p>Referral: {{ $user->referrer->code }}</p>
    @endif
    @if (!empty($user->settings['tracking']))
        <dt>Ad campaign</dt>
        <dd>{{ $user->settings['tracking'] }}</dd>
    @endif
</body>
</html>
