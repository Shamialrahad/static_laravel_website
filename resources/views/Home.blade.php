@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid parallax mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 topDiv text-center">
            <h1 class="text-white">Software Engineer</h1>
            <h3 class="text-white">Mobile and Web</h3>
            <a target="_blank" href="https://www.linkedin.com/in/shami-al-rahad-6b3a66153/" class="btn btn-dark">Learn More</a>
        </div>
    </div>
</div>

<div class="container text-center mt-5">
    <h2>My Services</h2><br><br>
    <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width:100%;">
                <img src="{{URL::asset('images/my_service-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Backend Development</h5>
                    <p class="card-text">Develop Backend Using server side language PHP,Laravel. Also use database MySql.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width:100%;">
                <img src="{{URL::asset('images/my_service-2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Application Landing Page</h5>
                    <p class="card-text">Design Mobile app landing page for app promotion using HTML,CSS,JS,Bootstrap.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width:100%;">
                <img src="{{URL::asset('images/my_service-3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Wordpress Website</h5>
                    <p class="card-text">Create wordpress website and install theme and plugin.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5 text-center mt-5">
    <h2>Recent Projects</h2><br><br>
    <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width:100%;">
                <img src="{{URL::asset('images/my_project-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Login Logout</h5>
                    <p class="card-text">Design and develop usign HTML,CSS,Bootstrap,PHP,MySql</p>
                    <button class="btn btn-success">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width:100%;">
                <img src="{{URL::asset('images/my_project-2.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hungry Monstar</h5>
                    <p class="card-text">Design with HTML,CSS and Javascript. Also use food api to show food imgaes and food name</p>
                    <button class="btn btn-success">Learn More</button>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width:100%;">
                <img src="{{URL::asset('images/my_project-3.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">iNotes</h5>
                    <p class="card-text">A PHP CRUD application create with HTML,CSS,Bootstrap,PHP,MySql which store data and show in table format.Also edit and delete data</p>
                    <button class="btn btn-success">Learn More</button>
                </div>
            </div>
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
