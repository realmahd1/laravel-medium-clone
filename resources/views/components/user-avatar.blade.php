@props(['user','size'=>"w-12 h-12"])

@if($user->getFirstMedia())
    <img src="{{ $user->imageUrl() }}" class="{{ $size }} rounded-full" alt="{{ $user->name }}">
@else
    <img src="https://avatar.iran.liara.run/public/7" class="{{ $size }} rounded-full" alt="Avatar">
@endif