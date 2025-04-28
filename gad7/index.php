<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>Adult ADHD Self-Report Scale (ASRS-v1.1) Screener</title>
</head>

<?php include '../nav.php';?>

<body>

    <h1>GAD-7 Anxiety Assessment</h1>

    <div class="disclaimer">
        <strong>Disclaimer:</strong> This tool is for informational purposes only and is not a substitute for professional medical advice, diagnosis, or treatment. The GAD-7 is a screening tool and cannot provide a diagnosis. Please consult a qualified healthcare provider if you have concerns about your health.
    </div>

    <br>

    <div id="score-display">
        Current Score:
        <span id="current-score">0</span>
        / 21
    </div>

    <form id="gad7-form" class="section">
        <h2>Instructions</h2>
        <p>Over the <strong>last 2 weeks</strong>, how often have you been bothered by the following problems?</p>

        <div class="question-container">
            <p class="question-title">1. Feeling nervous, anxious, or on edge?</p>
            <input type="radio" id="q1-0" name="q1" value="0" checked required>
            <label for="q1-0">Not at all</label>
            <input type="radio" id="q1-1" name="q1" value="1">
            <label for="q1-1">Several days</label>
            <input type="radio" id="q1-2" name="q1" value="2">
            <label for="q1-2">More than half the days</label>
            <input type="radio" id="q1-3" name="q1" value="3">
            <label for="q1-3">Nearly every day</label>
        </div>

        <div class="question-container">
            <p class="question-title">2. Not being able to stop or control worrying?</p>
            <input type="radio" id="q2-0" name="q2" value="0" checked required>
            <label for="q2-0">Not at all</label>
            <input type="radio" id="q2-1" name="q2" value="1">
            <label for="q2-1">Several days</label>
            <input type="radio" id="q2-2" name="q2" value="2">
            <label for="q2-2">More than half the days</label>
            <input type="radio" id="q2-3" name="q2" value="3">
            <label for="q2-3">Nearly every day</label>
        </div>

        <div class="question-container">
            <p class="question-title">3. Worrying too much about different things?</p>
            <input type="radio" id="q3-0" name="q3" value="0" checked required>
            <label for="q3-0">Not at all</label>
            <input type="radio" id="q3-1" name="q3" value="1">
            <label for="q3-1">Several days</label>
            <input type="radio" id="q3-2" name="q3" value="2">
            <label for="q3-2">More than half the days</label>
            <input type="radio" id="q3-3" name="q3" value="3">
            <label for="q3-3">Nearly every day</label>
        </div>

        <div class="question-container">
            <p class="question-title">4. Trouble relaxing?</p>
            <input type="radio" id="q4-0" name="q4" value="0" checked required>
            <label for="q4-0">Not at all</label>
            <input type="radio" id="q4-1" name="q4" value="1">
            <label for="q4-1">Several days</label>
            <input type="radio" id="q4-2" name="q4" value="2">
            <label for="q4-2">More than half the days</label>
            <input type="radio" id="q4-3" name="q4" value="3">
            <label for="q4-3">Nearly every day</label>
        </div>

        <div class="question-container">
            <p class="question-title">5. Being so restless that it is hard to sit still?</p>
            <input type="radio" id="q5-0" name="q5" value="0" checked required>
            <label for="q5-0">Not at all</label>
            <input type="radio" id="q5-1" name="q5" value="1">
            <label for="q5-1">Several days</label>
            <input type="radio" id="q5-2" name="q5" value="2">
            <label for="q5-2">More than half the days</label>
            <input type="radio" id="q5-3" name="q5" value="3">
            <label for="q5-3">Nearly every day</label>
        </div>

        <div class="question-container">
            <p class="question-title">6. Becoming easily annoyed or irritable?</p>
            <input type="radio" id="q6-0" name="q6" value="0" checked required>
            <label for="q6-0">Not at all</label>
            <input type="radio" id="q6-1" name="q6" value="1">
            <label for="q6-1">Several days</label>
            <input type="radio" id="q6-2" name="q6" value="2">
            <label for="q6-2">More than half the days</label>
            <input type="radio" id="q6-3" name="q6" value="3">
            <label for="q6-3">Nearly every day</label>
        </div>

        <div class="question-container">
            <p class="question-title">7. Feeling afraid as if something awful might happen?</p>
            <input type="radio" id="q7-0" name="q7" value="0" checked required>
            <label for="q7-0">Not at all</label>
            <input type="radio" id="q7-1" name="q7" value="1">
            <label for="q7-1">Several days</label>
            <input type="radio" id="q7-2" name="q7" value="2">
            <label for="q7-2">More than half the days</label>
            <input type="radio" id="q7-3" name="q7" value="3">
            <label for="q7-3">Nearly every day</label>
        </div>

        <div id="required-message" class="required-message">
            Please answer all 7 questions before calculating the score.
        </div>

        <input type="submit" value="Calculate Score">

    </form>

    <div id="results-section" class="section" style="display: none;"> <h2>Results</h2>
        <div id="results">
            Your GAD-7 Score: <span id="results-score"></span> / 21
        </div>
        <p><strong>Interpretation:</strong> <span id="results-interpretation"></span></p>
        <p>A score of 10 or greater is often used as a cut-off where Generalised Anxiety Disorder might be present and further evaluation by a healthcare professional is recommended.</p>
         <div class="results-disclaimer" style="display: none;"> <strong>Important:</strong> This result is based on your self-reported symptoms over the past two weeks. It is a screening tool, not a diagnosis. Regardless of the score, if you are concerned about anxiety or your mental health, please consult with a doctor or mental health professional. They can provide a comprehensive assessment and discuss appropriate support or treatment options.
         </div>
    </div>

    <script>
        const form = document.getElementById('gad7-form');
        const currentScoreDisplay = document.getElementById('current-score');
        const resultsSection = document.getElementById('results-section');
        const resultsScoreDisplay = document.getElementById('results-score');
        const resultsInterpretationDisplay = document.getElementById('results-interpretation');
        const requiredMessage = document.getElementById('required-message');
        const resultsDisclaimer = resultsSection.querySelector('.results-disclaimer'); // Target disclaimer inside results
        const radioButtons = form.querySelectorAll('input[type="radio"]');
        const totalQuestions = 7; // Total number of GAD-7 questions

        // --- Function to Calculate Current Score ---
        function calculateCurrentScore() {
            let score = 0;
            const checkedRadios = form.querySelectorAll('input[type="radio"]:checked');
            checkedRadios.forEach(radio => {
                score += parseInt(radio.value, 10);
            });
            return score;
        }

        // --- Update Floating Score on Any Change ---
        form.addEventListener('change', () => {
            const currentScore = calculateCurrentScore();
            currentScoreDisplay.textContent = currentScore;
             // Hide results again if user changes answers after submitting
            resultsSection.style.display = 'none';
            resultsDisclaimer.style.display = 'none';
            requiredMessage.style.display = 'none'; // Hide warning if they start answering
        });

        // --- Handle Form Submission (Calculate Final Score) ---
        form.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent actual form submission

            const checkedRadios = form.querySelectorAll('input[type="radio"]:checked');

            // --- Validation ---
            if (checkedRadios.length < totalQuestions) {
                requiredMessage.style.display = 'block';
                resultsSection.style.display = 'none'; // Hide results if validation fails
                resultsDisclaimer.style.display = 'none';
                // Scroll to the warning message for better visibility
                requiredMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return; // Stop processing
            } else {
                requiredMessage.style.display = 'none'; // Hide message if valid
            }

            // --- Calculation ---
            const finalScore = calculateCurrentScore(); // Use the same logic

            // --- Interpretation ---
            let interpretation = '';
            if (finalScore >= 0 && finalScore <= 4) {
                interpretation = 'Minimal anxiety';
            } else if (finalScore >= 5 && finalScore <= 9) {
                interpretation = 'Mild anxiety';
            } else if (finalScore >= 10 && finalScore <= 14) {
                interpretation = 'Moderate anxiety';
            } else if (finalScore >= 15 && finalScore <= 21) {
                interpretation = 'Severe anxiety';
            } else {
                interpretation = 'Score out of range (Error)'; // Should not happen
            }

            // --- Display Results ---
            resultsScoreDisplay.textContent = finalScore;
            resultsInterpretationDisplay.textContent = interpretation;
            resultsSection.style.display = 'block';
            resultsDisclaimer.style.display = 'block'; // Show the disclaimer with results

             // Scroll to results for better visibility
            resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });

         // --- Initialize floating score on load (in case of browser back button) ---
         document.addEventListener('DOMContentLoaded', () => {
            const initialScore = calculateCurrentScore();
            currentScoreDisplay.textContent = initialScore;
         });

    </script>

</body>

<?php include '../footer.php';?>

</html>