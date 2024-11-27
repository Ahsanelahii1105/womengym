@extends('layouts.master')

@push('title')
    <title>Women Gym - Members</title>
@endpush

@section('content')
    <div class="intro-section-member" id="home-section" style="background-color: #ccc;">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto" style="margin-top: 150px;" data-aos="fade-up">
                    <div class="form-container2 m-auto">
                        <h4 style="font-size: 50px">Membership Registration</h4>
                        <form action="{{ url('/member') }}" method="POST" class="mt-4">
                            @csrf
                            <!-- Member Details -->
                            <label for="name">Enter Member Name:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="age">Enter Member Age:</label>
                            <input type="number" id="age" name="age" required>
                            <label for="phone">Enter Member's Phone Number:</label>
                            <input type="text" id="phone" name="phone" required>
                            <label for="gender">Select Member's Gender:</label>
                            <select id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            <!-- Course Dropdown -->
                            <label for="course">Select Course:</label>
                            <select id="courseDropdown" name="course_id" required>
                                <option value="">Select Course</option>
                                <option value="1">Gym</option>
                                <option value="2">Yoga</option>
                            </select>

                            <!-- Trainer Dropdown -->
                            <label for="trainer">Select Trainer:</label>
                            <select id="trainerDropdown" name="trainer_id" required>
                                <option value="">Select Trainer</option>
                            </select>

                            <!-- Membership Details -->
                            <label for="membership_type">Enter Membership Type:</label>
                            <input type="text" id="membership_type" name="membership_type" required>
                            <label for="membership_status">Enter Membership Status:</label>
                            <input type="text" id="membership_status" name="membership_status" required>
                            <label for="fitness_goal">Enter Fitness Goal:</label>
                            <input type="text" id="fitness_goal" name="fitness_goal" required>
                            <label for="pregnancy_status">Enter Pregnancy Status:</label>
                            <select id="pregnancy_status" name="pregnancy_status" required>
                                <option value="">Select Status</option>
                                <option value="Pregnant">Pregnant</option>
                                <option value="Not Pregnant">Not Pregnant</option>
                            </select>
                            <label for="fees">Enter Per Month Fees:</label>
                            <input type="number" id="fees" name="fees" required>
                            <label for="payment">Enter Payment:</label>
                            <input type="number" id="payment" name="payment" required>
                            <label for="payment_method">Select Payment Method:</label>
                            <select id="payment_method" name="payment_method" required>
                                <option value="">Select Payment Method</option>
                                <option value="Cash">Cash</option>
                                <option value="Card">Card</option>
                            </select>
                            <label for="personal_trainer">Need Personal Trainer?:</label>
                            <select id="personal_trainer" name="personal_trainer" required>
                                <option value="">Select Option</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <label for="due_date">Enter Due Date:</label>
                            <input type="date" id="due_date" name="due_date" required>
                            <label for="start_date">Enter Start Date:</label>
                            <input type="date" id="start_date" name="start_date" required>
                            <label for="end_date">Enter End Date:</label>
                            <input type="date" id="end_date" name="end_date" required>

                            <!-- Submit Button -->
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#courseDropdown').change(function () {
                let courseId = $(this).val(); // Get selected course ID
                let trainerDropdown = $('#trainerDropdown'); // Reference to trainer dropdown

                if (courseId) {
                    $.ajax({
                        url: "{{ route('getTrainers') }}", // Laravel route for fetching trainers
                        method: "GET",
                        data: { course_id: courseId }, // Pass course_id to the server
                        success: function (data) {
                            trainerDropdown.empty(); // Clear previous options
                            trainerDropdown.append('<option value="">Select Trainer</option>'); // Default option
                            data.forEach(function (trainer) {
                                trainerDropdown.append('<option value="' + trainer.id + '">' + trainer.name + '</option>');
                            });
                        },
                        error: function (xhr, status, error) {
                            console.error('Error fetching trainers:', error);
                        }
                    });
                } else {
                    // Clear trainers dropdown if no course is selected
                    trainerDropdown.empty();
                    trainerDropdown.append('<option value="">Select Trainer</option>');
                }
            });
        });
    </script>

@endsection
