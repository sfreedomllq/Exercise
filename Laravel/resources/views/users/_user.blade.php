<div class="list-group-item">
  <img alt="" class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width="32">
  <a href="{{ route('users.show', $user) }}">
    {{ $user->name }}
  </a>
  @can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" class="float-right" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button class="btn btn-sm btn-danger delete-btn" type="submit">DELETE</button>
    </form>
  @endcan
</div>
