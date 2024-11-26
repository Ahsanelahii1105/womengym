@extends('layouts.master')

@push('title')
    <title>Women Gym - Trainer</title>
@endpush

@section('content')
    <div class="intro-section-member" id="home-section" style="background-color: #ccc;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto" style="margin-top: 150px;" data-aos="fade-up">
                    <div class="form-container2 m-auto">
                        <h4 style="font-size: 50px">Membership Registration</h4>
                        <form action="/member" method="POST" class="mt-4">
                            @csrf
                            <label for="name">Enter Member Name:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="age">Enter Member Age:</label>
                            <input type="text" id="age" name="age" required>
                            <label for="phone">Enter Member's Phone Number:</label>
                            <input type="text" id="phone" name="phone" required>
                            <label for="gender">Enter Member's Gender:</label>
                            <input type="text" id="gender" name="gender" required>
                            <!-- Course Dropdown -->
                            <label for="course">Select Course:</label>
                            <select id="course" name="course_id" required>
                                <option value="">-- Select a Course --</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                @endforeach
                            </select>

                            <!-- Trainer Dropdown -->
                            <label for="trainer">Select Trainer:</label>
                            <select id="trainer" name="trainer_id" required>
                                <option value="">-- Select a Trainer --</option>
                            </select>
                            <label for="membership_type">Enter Membership Type:</label>
                            <input type="text" id="membership_type" name="membership_type" required>
                            <label for="membership_status">Enter Membership status:</label>
                            <input type="text" id="membership_status" name="membership_status" required>
                            <label for="fitness_goal">Enter Fitness Goal:</label>
                            <input type="text" id="fitness_goal" name="fitness_goal" required>
                            <label for="pregnancy_status">Enter Pregnancy Status:</label>
                            <input type="text" id="pregnancy_status" name="pregnancy_status" required>
                            <label for="fees">Enter Per Month Fees:</label>
                            <input type="text" id="fees" name="fees" required>
                            <label for="payment">Enter Payment:</label>
                            <input type="text" id="payment" name="payment" required>
                            <label for="payment_method">Enter Payment Method:</label>
                            <input type="text" id="payment_method" name="payment_method" required>
                            <label for="personal_trainer">Need Personal Trainer?:</label>
                            <input type="text" id="personal_trainer" name="personal_trainer" required>
                            <label for="due_date">Enter Due Date:</label>
                            <input type="date" id="due_date" name="due_date" required>
                            <label for="start_date">Enter Start Date:</label>
                            <input type="date" id="start_date" name="start_date" required>
                            <label for="end_date">Enter End Date:</label>
                            <input type="date" id="end_date" name="end_date" required>

                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#course').on('change', function() {
                var courseId = $(this).val();
                console.log('Selected course ID:', courseId);

                // Clear trainer dropdown
                $('#trainer').html('<option value="">-- Select a Trainer --</option>');

                if (courseId) {
                    $.ajax({
                        url: '/course/' + courseId + '/trainers',
                        type: 'GET',
                        success: function(data) {
                            console.log('Trainers fetched:', data); // Log fetched data
                            if (data.length > 0) {
                                $.each(data, function(index, trainer) {
                                    $('#trainer').append('<option value="' + trainer
                                        .id + '">' + trainer.name + '</option>');
                                });
                            } else {
                                $('#trainer').html(
                                    '<option value="">No Trainers Available</option>');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching trainers:', error);
                            console.error('Response:', xhr.responseText); // Log server response
                            alert('Unable to fetch trainers. Please try again.');
                        }
                    });
                }
            });

        });
    </script>
@endsection
