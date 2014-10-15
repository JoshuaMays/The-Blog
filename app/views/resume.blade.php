@extends('layouts.master')

@section('title')
    Resume
@stop

@section('content')
      <div class="row">
        <div class="col-md-12 ">
        <!-- Resume Header -->
        <h1 class="page-header">Joshua Mays <br><small>Software Developer</small></h1>
        </div>
      </div>
    </div>
    <!-- Begin Resume Body -->
    <!-- Begin Contact Info Section -->
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-md-offset-1">
          <h6>CONTACT</h6>
        </div>
        <div class="col-md-6">
          <address>
            <strong>Joshua Mays</strong><br>
            <!-- <i> tags used as icon elements for fontawesome icons -->
            <a class="socialLinks" href="mailto:joshua.r.mays@gmail.com"><i class="fa fa-share iconColor"></i> joshua.r.mays@gmail.com</a><br>
            <a class="socialLinks" href="tel:2102864336"> <i class="fa fa-mobile iconColor"></i> 210.286.4336</a><br>
            <a class="socialLinks" href="https://www.linkedin.com/profile/view?id=60812166"><i class="fa fa-linkedin-square iconColor"></i> LinkedIn</a><br>
            <a class="socialLinks" href="https://github.com/JoshuaMays"><i class="fa fa-github-alt iconColor"></i> GitHub</a>
          </address>
        </div>
      </div>
    </div><!-- End Contact Info Section -->
        
    <hr>
    <!-- Begin Work Experience Section -->
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-md-offset-1">
          <h5>WORK</h5>
        </div>
        <div class="col-md-6">
          <p><strong>TEAM Integrated Engineering</strong><br>
            Programmer:...
          </p>
        </div>
        <div class="col-md-3">
          <p>May 2014 - Present</p>
        </div>
        <div class="col-md-6 col-md-offset-2">
          <p><strong>Green Home Improvements</strong><br>
            IT Manager:...
          </p>
        </div>
        <div class="col-md-3">
          <p>July 2013 - June 2014</p>
        </div>
      </div>
    </div><!-- End Work Experience Section -->
        
    <hr>
    <!-- Begin Education History Section -->
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-md-offset-1">
          <h5>EDUCATION</h5>
        </div>
        <div class="col-md-6">
          <p><strong>LAMP+J Software Development Bootcamp</strong><br>
            <a href="http://www.codeup.com">Codeup</a><br>
            <em>San Antonio, TX</em>
          </p>
        </div>
        <div class="col-md-3">
          <p>Graduating in Fall 2014<br>
            <label class="label label-info text-uppercase">In progress</label>
          </p>
        </div>
        <div class="col-md-6 col-md-offset-2">
          <p><strong>Undergrad</strong><br>
            University of Texas at Austin<br>
            B.A. English<br>
            <em>Austin, TX</em>
          </p>
        </div>
        <div class="col-md-3">
          <p>January 2007 - June 2010</p>
        </div>
      </div>
    </div><!-- End Education History Section -->
@stop