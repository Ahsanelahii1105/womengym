@extends('layouts.master')

@push('title')
    <title>Women Gym - Trainer</title>
@endpush

@section('content')
<div class="intro-section-trainer" id="home-section" style="background-color: #ccc;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center" data-aos="fade-up">
                <div class="form-container m-auto">
                    <h1 style="font-size: 56px">Trainer Registration</h1>
                    <form action="/trainer" method="POST" class="mt-3">
                        @csrf
                        <input type="text" id="name" name="name" placeholder="Enter Trainer Name" required>
                        <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" required>
                        <input type="text" id="specialization" name="specialization" placeholder="Enter Trainer Specialization" required>
                        <input type="tel" id="experience" name="experience" placeholder="Enter Trainer Experience" required>
                        <input type="tel" id="course_name" name="course_name" placeholder="Enter Course Name" required>
                        <input type="tel" id="fees" name="fees" placeholder="Enter Trainer Fee" required>
                        <input type="tel" id="salary" name="salary" placeholder="Enter Trainer Monthly Salary" required>
                        <input type="tel" id="availability" name="availability" placeholder="Enter Trainer Availabiltiy" required>

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
