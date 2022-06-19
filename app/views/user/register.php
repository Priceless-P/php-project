<?php
require_once APPROOT.'/views/inc/header.php'; ?>

<form method= 'post' action=''>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" placeholder="Enter username" name='username' value=''>
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" placeholder="Password" name='password' value=''>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require_once APPROOT. '/views/inc/footer.php'; ?>