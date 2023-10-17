<li>
  <div class="d-flex justify-content-between">
    <div>{{ $task->title }}</div>
    <div class="btn-group">
      <button
          class="btn btn-success btn-sm"
          hx-patch="/tasks/{{ $task->id }}"
          name="category"
          value="completed"
          hx-target="body">
          <i class="bi bi-check"></i>
      </button>
      <button
          class="btn btn-danger btn-sm"
          hx-delete="/tasks/{{ $task->id }}"
          hx-confirm="Are you sure you want to delete task '{{ $task->title }}'?"
          hx-target="body">
          <i class="bi bi-trash"></i>
      </button>
    </div>
  </div>
  <div class="d-flex justify-content-end">
    <div class="btn-group">
      @foreach($otherCategories as $category)
        <button
            class="btn btn-light btn-sm"
            hx-patch="/tasks/{{ $task->id }}"
            name="category"
            value="{{ $category }}"
            hx-target="body">
            {{ ucfirst($category) }}
        </button>
      @endforeach
    </div>
  </div>
</li>
