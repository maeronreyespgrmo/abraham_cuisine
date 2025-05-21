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
    <style>.rating-options {
        display: flex;
        flex-direction: column;
        gap: 12px;
        font-size: 18px;
      }
      
      .rating-options label {
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
      }
      
      .rating-options input[type="radio"] {
        display: none;
      }
      
      .rating-options .emoji {
        display: inline-block;
        padding: 8px 12px;
        border-radius: 10px;
        transition: all 0.3s ease;
        background-color: transparent;
        color: #333;
      }
      
      /* Animation on check */
      .rating-options input[type="radio"]:checked + .emoji {
        background-color: #e0f7fa;
        color: #00796b;
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        font-weight: bold;
      }
    </style>
</head>
<body style="background-image: url(../img/boodle_fiesta.png);background-size: cover; ">

<!-- Main container for the form -->
<div class="card container mt-5">
    <!-- Heading of the survey form -->
    <br>
    <div class="row">
        <div class="col-sm-2">
          <img src="../img/logo.png" width="300" height="100">
        </div>
        <div class="col-sm-8">
          <h2 class="text-center">Abraham Cuisine Survey</h2>
        </div>
        <div class="col-sm-2"></div>
    </div>
    <br>

    <!-- Begin the form section -->

    @include('layouts.message')
    <form action="/feedbacks/store" method="POST">
        @csrf
        <!-- Question 1 -->
        <div class="question-step" style="display: block;"> <!-- Step 1 -->
            <!-- Question 1 content here -->
            <div class="form-group">
                <label for="q1"><h4>1. How would you rate the quality of the food?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q1" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q1" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q1" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q1" value="1">
                      <span class="emoji"><img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">
              Next
            </button>
        </div>
        
        <div class="question-step" style="display: none;"> <!-- Step 2 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q2"><h4>2. How would you rate the customer service?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q2" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q2" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q2" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q2" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">
              Previous
            </button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 3 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q3"><h4>3. How would you rate the ambiance of the restaurant?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q3" value="4">
                      <span class="emoji"><img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q3" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q3" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q3" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 4 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q3"><h4>4. How likely are you to recommend this restaurant to a friend?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q4" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q4" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q4" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q4" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 5 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q5"><h4>5. Was the food served at the correct temperature?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q5" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q5" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q5" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q5" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 6 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q6"><h4>6. Was the restaurant clean and well-maintained?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q6" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q6" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q6" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q6" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 7 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q7"><h4>7. Was the wait time for the food acceptable?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q7" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q7" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q7" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q7" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 8 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q8"><h4>8. Did the restaurant meet your expectations?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q8" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q8" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q8" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q8" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 9 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q9"><h4>9. How would you rate the price of the meal?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q9" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q9" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q9" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q9" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <div class="question-step" style="display: none;"> <!-- Step 10 -->
            <!-- Question 2 content here -->
            <div class="form-group">
                <label for="q9"><h4>10. Would you visit this restaurant again?</h4></label><br>
                <div class="rating-options">
                    <label>
                      <input type="radio" name="q10" value="4">
                      <span class="emoji">  <img src="../img/feedback/4.png" width="30" height="30"> Excellent</span>
                    </label>
                    <label>
                      <input type="radio" name="q10" value="3">
                      <span class="emoji">  <img src="../img/feedback/3.png" width="30" height="30"> Good</span>
                    </label>
                    <label>
                      <input type="radio" name="q10" value="2">
                      <span class="emoji">  <img src="../img/feedback/2.png" width="30" height="30"> Average</span>
                    </label>
                    <label>
                      <input type="radio" name="q10" value="1">
                      <span class="emoji">  <img src="../img/feedback/1.png" width="30" height="30"> Poor</span>
                    </label>
                  </div>
            </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="button" class="btn btn-primary btn-lg btn-block next-btn">Next</button>
        </div>

        <!-- Repeat for other questions -->
        <div class="question-step" style="display: none;"> <!-- Final Step -->
            <!-- Other comments + checkbox + data policy -->
            <div class="form-group">
                <label for="q10"><h4>Other Comments</h4></label><br>
                <textarea class="form-control" name="other_comments" rows="5" required></textarea>
            </div>
        
            <div class="form-group">
                <input type="checkbox" id="agree" name="agree" value="Yes" required>
                <label for="agree">I agree to the terms and conditions</label>
            </div>
        
            <button type="button" class="btn btn-secondary btn-lg btn-block prev-btn">Previous</button>
            <button type="submit" class="btn btn-success btn-lg btn-block">Submit Survey</button>
        </div>

        

    </form>

<!-- Bootstrap and JS scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
let currentStep = 0;
const steps = document.querySelectorAll('.question-step');

function showStep(index) {
steps.forEach((step, i) => {
    step.style.display = i === index ? 'block' : 'none';
});
}

document.querySelectorAll('.next-btn').forEach(btn => {
btn.addEventListener('click', () => {
    if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
});
});

document.querySelectorAll('.prev-btn').forEach(btn => {
btn.addEventListener('click', () => {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
});
});

// Initial display
showStep(currentStep);
</script>
</body>
</html>