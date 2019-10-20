  <!--Grid row-->
  <div class="row">

<!--Grid column-->
<div class="col-md-6">
    <div class="md-form">
        <input type="text" id="name" name="name" value="{{ isset($user) ? $user->name : '' }}" class="form-control">
        <label for="name" class="">Your name</label>
    </div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-6">
    <div class="md-form">
        <input type="text" id="email" name="email" value="{{ isset($user) ? $user->email : '' }}" class="form-control">
        <label for="email" class="">Your email</label>
    </div>
</div>
<!--Grid column-->

</div>
<!--Grid row-->

<!--Grid row-->
<div class="row">
<div class="col-md-12">
    <div class="md-form">
        <input type="text" id="username" name="username" value="{{ isset($user) ? $user->username : '' }}"  class="form-control">
        <label for="username" class="">Username</label>
    </div>
</div>
</div>
<!--Grid row-->

<!--Grid row-->
<div class="row">

<!--Grid column-->
<div class="col-md-12">

    <div class="md-form">
    <input type="password" id="password" name="password" class="form-control">
        <label for="password">Your Password</label>
    </div>

</div>
</div>
<!--Grid row-->