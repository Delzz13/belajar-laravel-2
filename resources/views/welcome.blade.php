<h1>hello world </h1>

<a href="{{route ('feature') }}">click saya untuk pindah halaman fitur</a>

<p>Data User </p>
<ul>
    @foreach ($users as $user)
        <li>
            <a href="{{route ('users.show', $user->id) }}">
            {{$user->name}}
            </a>
        </li>
    @endforeach
</ul>

