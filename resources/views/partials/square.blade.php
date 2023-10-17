<div class="square {{ $category }}">
  <h2>{{ ucfirst($category) }}</h2>
  @if (count($tasks) > 0)
    <ul class="task-list">
      @foreach($tasks as $task)
        @include('partials.task', compact('task', 'otherCategories'))
      @endforeach
    </ul>
  @endif
</div>
