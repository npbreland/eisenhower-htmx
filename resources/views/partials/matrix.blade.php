<div class="container-fluid">
  <h1 class="text-center">Eisenhower Matrix</h1>
  <p class="text-center">Task prioritization system used by Ike</p>
  <div class="d-flex justify-content-end">
    <form hx-post="/tasks" hx-target="body">
      <div class="input-group">
        <input name="title" class="form-control" />
        <button class="btn btn-primary">Add Task</button>
      </div>
    </form>

  </div>
  <div class="row">
    <div class="col-sm-6 col-md-3">
      @include('partials.square', [
        'category' => 'do',
        'tasks' => $tasks->where('category', 'do'),
        'otherCategories' => ['schedule', 'delegate', 'delete'],
        ])
    </div>
    <div class="col-sm-6 col-md-3">
      @include('partials.square', [
        'category' => 'schedule',
        'tasks' => $tasks->where('category', 'schedule'),
        'otherCategories' => ['do', 'delegate', 'delete'],
        ])
    </div>
    <div class="col-sm-6 col-md-3">
      @include('partials.square', [
        'category' => 'delegate',
        'tasks' => $tasks->where('category', 'delegate'),
        'otherCategories' => ['do', 'schedule', 'delete'],
        ])
    </div>
    <div class="col-sm-6 col-md-3">
      @include('partials.square', [
        'category' => 'delete',
        'tasks' => $tasks->where('category', 'delete'),
        'otherCategories' => ['do', 'schedule', 'delegate'],
        ])
    </div>
  </div>
  <footer>
    <address class="mt-5 text-center"><a href="https://github.com/npbreland">@npbreland</a></address>
  </footer>
</div>
</div>
