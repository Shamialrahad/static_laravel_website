@extends('layout.app')

@section('title','About')

@section('content')

<div class="container-fluid bg-dark">
    <div class="row p-5">
        <div class="col-md-12 text-center">
            <h4 class="text-white">About Me</h4>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <section class="top-banner flexible-content">
                <div class="half-width">
                    <img src="{{URL::asset('images/shami.jpg')}}" alt="Jhankar Mahbub">
                </div>
                <div class="half-width  mt-4">
                    <h1>Shami Al Rahad</h1>
                    <h3>Web Application Developer</h3>
                    <p>I am Shami Al Rahad, completed my graduation from Daffodil International University in the Department of Computer Science and Engineering.</p>
                    <a class="link-button" target="_blank" href="https://www.linkedin.com/in/shami-al-rahad-6b3a66153/">Hire Me</a>
                </div>
            </section>
        </div>
    </div>

</div>

<div class="container mb-5 mt-5">
    <h2 class="text-center">Contact With Me</h2><br><br>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-2">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1">Your Mobile</label>
                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1">Your Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1">Your Message</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Send Now</button>
                </div>
                
            </form>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d911.9810932395462!2d90.37149278316573!3d23.892300292875376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c388eaabb007%3A0x3eb26c0965345df!2zMjPCsDUzJzMyLjAiTiA5MMKwMjInMTYuNyJF!5e0!3m2!1sen!2sbd!4v1648749342727!5m2!1sen!2sbd" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

@endsection