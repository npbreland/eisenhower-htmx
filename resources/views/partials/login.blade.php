<div class="container">
  <div class="row">
    <div class="col">
      <h1>Log In</h1>
      <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" class="form-control" required>
        <input type="password" name="password" placeholder="Password" class="form-control" required>
        <button class="btn btn-primary" type="submit">Login</button>
      </form>
    </div>
  </div>
</div>
