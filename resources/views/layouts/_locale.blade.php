<form action="{{ route('locale', $lang)}}" method="POST">
    @csrf
    <button type="submit" class="nav-link btn border-none">
        {{ $nation }}
    </button>
</form>