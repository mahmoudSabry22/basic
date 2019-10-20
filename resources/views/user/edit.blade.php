@extends('layouts.master')

@section('content')
<div class="container mr5">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <section class="section">

<!--Section heading-->
<h2 class="section-heading h1 pt-4">Create</h2>
<!--Section description-->
<p class="section-description">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    matter of hours to help you.</p>

<div class="row">

    <!--Grid column-->
    <div class="col-md-8 col-xl-9">
        <form id="contact-form" name="contact-form" action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')
          @include('user.form')

        </form>

        <div class="center-on-small-only">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-4 col-xl-3">
        <ul class="contact-icons">
            <li><i class="fa fa-map-marker fa-2x"></i>
                <p>San Francisco, CA 94126, USA</p>
            </li>

            <li><i class="fa fa-phone fa-2x"></i>
                <p>+ 01 234 567 89</p>
            </li>

            <li><i class="fa fa-envelope fa-2x"></i>
                <p>contact@mdbootstrap.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>

</section>
    </div>
</div>
@endsection