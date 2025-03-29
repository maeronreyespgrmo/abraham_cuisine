<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character encoding for proper text display -->
    <meta charset="UTF-8">
    <!-- Ensures the page is responsive on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the survey page -->
    <title>Restaurant Survey Form</title>
    <!-- Link to Bootstrap 4 for styling the page and making it responsive -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Main container for the form -->
<div class="container mt-5">
    <!-- Heading of the survey form -->
    <h2 class="text-center">Abraham Cuisine Survey</h2>
    <!-- Begin the form section -->

    @include('layouts.message')
    <form action="/feedbacks/store" method="POST">
        @csrf
        <!-- Question 1 -->
        <div class="form-group">
            <!-- Label for the question -->
            <label for="q1">1. How would you rate the quality of the food?</label><br>
            <!-- Radio buttons for options -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 2 -->
        <div class="form-group">
            <label for="q2">2. How would you rate the customer service?</label><br>
            <!-- Similar structure as question 1, with options for rating the service -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="form-group">
            <label for="q3">3. How would you rate the ambiance of the restaurant?</label><br>
            <!-- Rating options for ambiance of the restaurant -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 4 -->
        <div class="form-group">
            <label for="q4">4. How likely are you to recommend this restaurant to a friend?</label><br>
            <!-- Likelihood options for recommending the restaurant -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 5 -->
        <div class="form-group">
            <label for="q5">5. Was the food served at the correct temperature?</label><br>
            <!-- Yes/No options for food temperature -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 6 -->
        <div class="form-group">
            <label for="q6">6. Was the restaurant clean and well-maintained?</label><br>
            <!-- Yes/No options for cleanliness -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 7 -->
        <div class="form-group">
            <label for="q7">7. Was the wait time for the food acceptable?</label><br>
            <!-- Yes/No options for wait time -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 8 -->
        <div class="form-group">
            <label for="q8">8. Did the restaurant meet your expectations?</label><br>
            <!-- Yes/No options for expectation fulfillment -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 9 -->
        <div class="form-group">
            <label for="q9">9. How would you rate the price of the meal?</label><br>
            <!-- Price-related options -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Question 10 -->
        <div class="form-group">
            <label for="q10">10. Would you visit this restaurant again?</label><br>
            <!-- Yes/No options for return visit -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="q2Excellent" value="4">
                <label class="form-check-label" for="q2Excellent">Excellent</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="q2Good" value="3">
                <label class="form-check-label" for="q2Good">Good</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="q2Average" value="2">
                <label class="form-check-label" for="q2Average">Average</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" id="q2Poor" value="1">
                <label class="form-check-label" for="q2Poor">Poor</label>
            </div>

        </div>

        <!-- Other Comments Section -->
        <div class="form-group">
            <label for="q10">Other Comments</label><br>
            <!-- A wide textarea field -->
            <textarea class="form-control" name="other_comments" rows="5" placeholder="Enter your comments here..."></textarea>
        </div>

        <div>
            How We Use Your Data:
✔️ Your information (e.g., name, contact details, feedback) will be used solely for improving our services.  
✔️ We do not share your personal data with third parties without your consent.  
✔️ Your data is stored securely and used only for service improvement purposes.  

If you have concerns about your data, you may contact us at [restaurant email/contact] for assistance.  
        </div>

        <div class="form-group">
            <input type="checkbox" id="agree" name="agree" value="Yes" required>
            <label for="agree">I agree to the terms and conditions</label>
        </div>


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block">Submit Survey</button>
    </form>
</div>

<!-- Bootstrap and JS scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
