<div class="dropdown-menu">
    <form action="{{ url('/login') }}" method="post">
        @csrf
      <div class="mb-3">
        <label for="exampleDropdownFormEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Email...">
      </div>
      <div class="mb-3">
        <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">New around here? Sign up</a>
    <a class="dropdown-item" href="#">Forgot password?</a>
</div>