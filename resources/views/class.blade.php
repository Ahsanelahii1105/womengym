@extends('layouts.master')

@push('title')
    <title>Women Gym - Course</title>
@endpush

@section('content')
<div class="intro-section-member" id="home-section" style="background-color: #ccc;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <div class="form-container2 m-auto">
                    <h4 style="font-size: 50px">Course Entry</h4>
                    <form action="/course" method="post" class="mt-4">
                        @csrf
                        <input type="text" id="course_name" name="course_name" placeholder="Enter course name" required>
                        <input type="text" id="description" name="description" placeholder="Enter course description" required>
                        <input type="text" id="level" name="level" placeholder="Enter Dificulty Level" required>
                        <input type="text" id="capacity" name="capacity" placeholder="Enter Capacity" required>
                        <input type="text" id="fees" name="fees" placeholder="Enter Fees" required>
                        <input type="text" id="duration" name="duration" placeholder="Enter Duration" required>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
