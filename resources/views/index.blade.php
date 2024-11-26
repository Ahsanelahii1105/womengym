@extends('layouts.master')

@push('title')
    <title>Women Gym - Home</title>
@endpush

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('content')
    <a id="bgndVideo" class="player"
        data-property="{videoURL:'http://youtu.be/7lutvYTZk8E',showYTLogo:false, showAnnotations: false, showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:10, stopAt: 36, opacity:1}">
    </a>

    <div class="intro-section" id="home-section" style="background-color: #ccc;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                    <h1>Welcome To Gymer</h1>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="site-section section-1">


        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-3">

                    <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="">
                        <div class="icon-wrap"><span class="flaticon-muscle text-primary"></span></div>
                        <div class="counter-text">
                            <strong>2,260</strong>
                            <span>Members</span>
                        </div>
                    </div>


                </div>
                <div class="col-lg-3">
                    <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-wrap"><span class="flaticon-stationary-bike text-primary"></span></div>
                        <div class="counter-text">
                            <strong>210</strong>
                            <span>Daily Visitors </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="counter d-flex align-items-start mb-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-wrap"><span class="flaticon-banana text-primary"></span></div>
                        <div class="counter-text">
                            <strong>887</strong>
                            <span>Health Program</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="counter d-flex align-items-start" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-wrap"><span class="flaticon-heart text-primary"></span></div>
                        <div class="counter-text">
                            <strong>1,920</strong>
                            <span>Heart Beat</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mr-auto mb-5 align-self-center">

                    <div class="mb-5">
                        <h2 class="section-title">Step Up Your Fitness</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio
                            ex.
                            Natus totam
                            voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore
                            molestias blanditiis consequuntur
                            sunt nisi.</p>
                        <p>
                            <a href="#contact-section" class="btn btn-primary smoothscroll py-3 px-4">Get In Touch</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="image-absolute-box">

                        <img src="images/about_1.jpg" alt="Image" class="img-fluid img-shadow">
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

    <div class="site-section section-2" id="classes-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title">Classes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. Natus totam
                        voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore
                        molestias
                        blanditiis consequuntur
                        sunt nisi.</p>
                </div>

                <div class="col-lg-6 mb-5" style="display: flex; justify-content: end;">
                    <span class="section-title mb-5"> Add Class<a href="/course">
                            <button class="btn"
                                style="width:100px; height: 40px; color: white; background-color: #48d494; font-size: 20px;"><i
                                    class="fa-solid fa-plus"></i></button>
                        </a></span>
                </div>
            </div>

        </div>
        <div class="owl-carousel nonloop-block-13">

            <a class="work-thumb" href="single.html">
                <div class="work-text">
                    <h3>Classes fitness name here</h3>
                    <span class="category">Fitness</span>
                </div>
                <img src="images/slide_0.jpg" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="single.html">
                <div class="work-text">
                    <h3>Classes fitness name here</h3>
                    <span class="category">Cardio Vascular</span>
                </div>
                <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="single.html">
                <div class="work-text">
                    <h3>Classes fitness name here</h3>
                    <span class="category">Lose Weight</span>
                </div>
                <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="single.html">
                <div class="work-text">
                    <h3>Classes fitness name here</h3>
                    <span class="category">Cardio Vascular</span>
                </div>
                <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
            </a>

            <a class="work-thumb" href="single.html">
                <div class="work-text">
                    <h3>Classes fitness name here</h3>
                    <span class="category">Fitness</span>
                </div>
                <img src="images/slide_4.jpg" alt="Image" class="img-fluid">
            </a>
        </div>

    </div>

    <div class="site-section" id="trainer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title">Trainers</h2>
                    <p>Your dedicated fitness expert, committed to helping you achieve your health and wellness goals. With
                        years of experience in personal training and a deep understanding of body mechanics, nutrition, and
                        fitness techniques, Specializes in crafting personalized workout plans tailored to your unique
                        needs.</p>
                </div>

                <div class="col-lg-6 mb-5" style="display: flex; justify-content: end;">
                    <span class="section-title mb-5"> Add Trainer<a href="/trainer">
                            <button class="btn"
                                style="width: 150px; height: 40px; color: white; background-color: #48d494; font-size: 20px;"><i
                                    class="fa-solid fa-plus"></i></button>
                        </a></span>
                </div>

            </div>
            <div class="row large-gutters">
                <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-5">
                    <h3>James Holmes</h3>
                    <p class="mb-4 opacity-7">Aerobatics Trainer</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum
                        voluptatem, dignissimos dolorem porro aliquid veritatis!</p>
                </div>
                <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0 mt-5">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-5">
                    <h3>Kelly Green</h3>
                    <p class="mb-4 opacity-7">Aerobatics Trainer</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum
                        voluptatem,
                        dignissimos dolorem porro aliquid veritatis!</p>
                </div>
                <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
                    <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-5">
                    <h3>Ben Smith</h3>
                    <p class="mb-4 opacity-7">Aerobatics Trainer</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum
                        voluptatem,
                        dignissimos dolorem porro aliquid veritatis!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section section-2" id="schedule-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title">Trainer Schedule</h2>
                    <p>
                        "Optimize your fitness journey with a structured and flexible training schedule designed to fit any
                        lifestyle. Morning sessions boost energy for the day ahead, midday classes offer a quick fitness
                        recharge, and evening workouts provide the perfect way to wind down while staying active. With
                        options for one-on-one personal training, group classes, and weekend sessions, there’s a time slot
                        for everyone to focus on achieving their health and wellness goals."
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs mb-5 border-bottom-0 justify-content-center tab-list-custom" id="myTab"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab"
                                aria-controls="monday" aria-selected="true">Monday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab"
                                aria-controls="tuesday" aria-selected="false">Tuesday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab"
                                aria-controls="wednesday" aria-selected="false">Wednesday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab"
                                aria-controls="wednesday" aria-selected="false">Thursday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab"
                                aria-controls="wednesday" aria-selected="false">Friday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab"
                                aria-controls="wednesday" aria-selected="false">Sunday</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="monday" role="tabpanel"
                            aria-labelledby="monday-tab">
                            <table class="table table-bordered table-custom table-striped ">

                                <tbody>
                                    <tr>
                                        <td>Gym</td>
                                        <td>8:00am - 10:00am</td>
                                        <td>John Doe</td>
                                    </tr>
                                    <tr>
                                        <td>Meditation</td>
                                        <td>10:00am - 10:30am</td>
                                        <td>James Holmes</td>
                                    </tr>
                                    <tr>
                                        <td>Weight Lifting</td>
                                        <td>1:00pm - 2:30pm</td>
                                        <td>Ben Smith</td>
                                    </tr>
                                    <tr>
                                        <td>Crossfit</td>
                                        <td>3:00pm - 3:45pm</td>
                                        <td>Craig Peters</td>
                                    </tr>
                                    <tr>
                                        <td>Aerobics</td>
                                        <td>5:00pm - 5:30pm</td>
                                        <td>Paul Green</td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                            <table class="table table-bordered table-custom table-striped ">

                                <tbody>
                                    <tr>
                                        <td>Gym</td>
                                        <td>8:00am - 10:00am</td>
                                        <td>John Doe</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Meditation</td>
                                        <td>10:00am - 10:30am</td>
                                        <td>James Holmes</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Weight Lifting</td>
                                        <td>1:00pm - 2:30pm</td>
                                        <td>Ben Smith</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Crossfit</td>
                                        <td>3:00pm - 3:45pm</td>
                                        <td>Craig Peters</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Aerobics</td>
                                        <td>5:00pm - 5:30pm</td>
                                        <td>Paul Green</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                            <table class="table table-bordered table-custom table-striped ">

                                <tbody>
                                    <tr>
                                        <td>Gym</td>
                                        <td>8:00am - 10:00am</td>
                                        <td>John Doe</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Meditation</td>
                                        <td>10:00am - 10:30am</td>
                                        <td>James Holmes</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Weight Lifting</td>
                                        <td>1:00pm - 2:30pm</td>
                                        <td>Ben Smith</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Crossfit</td>
                                        <td>3:00pm - 3:45pm</td>
                                        <td>Craig Peters</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Aerobics</td>
                                        <td>5:00pm - 5:30pm</td>
                                        <td>Paul Green</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                            <table class="table table-bordered table-custom table-striped ">

                                <tbody>
                                    <tr>
                                        <td>Gym</td>
                                        <td>8:00am - 10:00am</td>
                                        <td>John Doe</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Meditation</td>
                                        <td>10:00am - 10:30am</td>
                                        <td>James Holmes</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Weight Lifting</td>
                                        <td>1:00pm - 2:30pm</td>
                                        <td>Ben Smith</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Crossfit</td>
                                        <td>3:00pm - 3:45pm</td>
                                        <td>Craig Peters</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Aerobics</td>
                                        <td>5:00pm - 5:30pm</td>
                                        <td>Paul Green</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                            <table class="table table-bordered table-custom table-striped ">

                                <tbody>
                                    <tr>
                                        <td>Gym</td>
                                        <td>8:00am - 10:00am</td>
                                        <td>John Doe</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Meditation</td>
                                        <td>10:00am - 10:30am</td>
                                        <td>James Holmes</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Weight Lifting</td>
                                        <td>1:00pm - 2:30pm</td>
                                        <td>Ben Smith</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Crossfit</td>
                                        <td>3:00pm - 3:45pm</td>
                                        <td>Craig Peters</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Aerobics</td>
                                        <td>5:00pm - 5:30pm</td>
                                        <td>Paul Green</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
                            <table class="table table-bordered table-custom table-striped ">

                                <tbody>
                                    <tr>
                                        <td>Gym</td>
                                        <td>8:00am - 10:00am</td>
                                        <td>John Doe</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Meditation</td>
                                        <td>10:00am - 10:30am</td>
                                        <td>James Holmes</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Weight Lifting</td>
                                        <td>1:00pm - 2:30pm</td>
                                        <td>Ben Smith</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Crossfit</td>
                                        <td>3:00pm - 3:45pm</td>
                                        <td>Craig Peters</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Aerobics</td>
                                        <td>5:00pm - 5:30pm</td>
                                        <td>Paul Green</td>
                                        <td class="text-center"><a href="#contact-section" class="smoothscroll">Join
                                                Now</a></td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="site-section" id="member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title">Members</h2>
                    <p>Your dedicated fitness expert, committed to helping you achieve your health and wellness goals. With
                        years of experience in personal training and a deep understanding of body mechanics, nutrition, and
                        fitness techniques, Specializes in crafting personalized workout plans tailored to your unique
                        needs.</p>
                </div>

                <div class="col-lg-6 mb-5" style="display: flex; justify-content: end;">
                    <span class="section-title mb-5"> Add Members<a href="/member">
                            <button class="btn"
                                style="width:100px; height: 40px; color: white; background-color: #48d494; font-size: 20px;"><i
                                    class="fa-solid fa-plus"></i></button>
                        </a></span>
                </div>

            </div>
            <div class="row large-gutters">
                <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-5">
                    <h3>James Holmes</h3>
                    <p class="mb-4 opacity-7">Aerobatics Trainer</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum
                        voluptatem, dignissimos dolorem porro aliquid veritatis!</p>
                </div>
                <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0 mt-5">
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-5">
                    <h3>Kelly Green</h3>
                    <p class="mb-4 opacity-7">Aerobatics Trainer</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum
                        voluptatem,
                        dignissimos dolorem porro aliquid veritatis!</p>
                </div>
                <div class="col-md-6 person col-lg-4 mb-4 mb-lg-0">
                    <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-5">
                    <h3>Ben Smith</h3>
                    <p class="mb-4 opacity-7">Aerobatics Trainer</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat ipsam sequi iure rerum
                        voluptatem,
                        dignissimos dolorem porro aliquid veritatis!</p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section bg-dark" id="contact-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7">



                    <h2 class="section-title mb-3">Contact Us</h2>
                    <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam
                        temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>

                    <form method="post" data-aos="fade">
                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
