<div class="container">
  <div class="row">
    <div class="col">
      <h1>Register</h1>
      <form method="POST" action="/register">
        @csrf
        <input type="email" name="email" placeholder="Email" class="form-control" required>
        <input type="password" name="password" placeholder="Password" class="form-control" required>
        <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control" required>
        <button class="btn btn-primary" type="submit">Register</button>
      </form>
    </div>
  </div>
</div>
