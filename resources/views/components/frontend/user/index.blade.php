<x-layout.backend>
    <div>
        user {{ $test }}
        @if (count($users) > 0)

            @foreach ($users as $user)
                <li>{{ $user->email }}</li>
            @endforeach
        @endif
    </div>
</x-layout.backend>

