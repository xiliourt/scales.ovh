<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <link rel="stylesheet" href="../style.css">
    <title>AQ10 Questionnaire</title>
</head>
<?php include '../nav.php';?>
<body>
    <h1>AQ10 Questionnaire (Adult)</h1>
    <?php include '../disclaimer.php';?>
    <br>
    <p>Please answer the following questions by choosing the option that best describes how you have felt or behaved
        over the past month.</p>
    <div id="score-display">
        Total Score: <span id="current-score">0</span>
    </div>
    <form id="aq10Form">
        <div class="question-container">
            <p class="question-title">1. I often notice small sounds when others do not.</p>
            <input type="radio" id="q1_da" name="q1" value="agree"> <label for="q1_da">Definitely Agree</label>
            <input type="radio" id="q1_sa" name="q1" value="agree"> <label for="q1_sa">Slightly Agree</label>
            <input type="radio" id="q1_sd" name="q1" value="disagree"> <label for="q1_sd">Slightly Disagree</label>
            <input type="radio" id="q1_dd" name="q1" value="disagree"> <label for="q1_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">2. I usually concentrate more on the whole picture, rather than the small details.</p>
            <input type="radio" id="q2_da" name="q2" value="agree"> <label for="q2_da">Definitely Agree</label>
            <input type="radio" id="q2_sa" name="q2" value="agree"> <label for="q2_sa">Slightly Agree</label>
            <input type="radio" id="q2_sd" name="q2" value="disagree"> <label for="q2_sd">Slightly Disagree</label>
            <input type="radio" id="q2_dd" name="q2" value="disagree"> <label for="q2_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">3. I find it easy to do more than one thing at once.</p>
            <input type="radio" id="q3_da" name="q3" value="agree"> <label for="q3_da">Definitely Agree</label>
            <input type="radio" id="q3_sa" name="q3" value="agree"> <label for="q3_sa">Slightly Agree</label>
            <input type="radio" id="q3_sd" name="q3" value="disagree"> <label for="q3_sd">Slightly Disagree</label>
            <input type="radio" id="q3_dd" name="q3" value="disagree"> <label for="q3_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">4. If there is an interruption, I can switch back to what I was doing very quickly.
            </p>
            <input type="radio" id="q4_da" name="q4" value="agree"> <label for="q4_da">Definitely Agree</label>
            <input type="radio" id="q4_sa" name="q4" value="agree"> <label for="q4_sa">Slightly Agree</label>
            <input type="radio" id="q4_sd" name="q4" value="disagree"> <label for="q4_sd">Slightly Disagree</label>
            <input type="radio" id="q4_dd" name="q4" value="disagree"> <label for="q4_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">5. I find it easy to ‘read between the lines’ when someone is talking to me.</p>
            <input type="radio" id="q5_da" name="q5" value="agree"> <label for="q5_da">Definitely Agree</label>
            <input type="radio" id="q5_sa" name="q5" value="agree"> <label for="q5_sa">Slightly Agree</label>
            <input type="radio" id="q5_sd" name="q5" value="disagree"> <label for="q5_sd">Slightly Disagree</label>
            <input type="radio" id="q5_dd" name="q5" value="disagree"> <label for="q5_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">6. I know how to tell if someone listening to me is getting bored.</p>
            <input type="radio" id="q6_da" name="q6" value="agree"> <label for="q6_da">Definitely Agree</label>
            <input type="radio" id="q6_sa" name="q6" value="agree"> <label for="q6_sa">Slightly Agree</label>
            <input type="radio" id="q6_sd" name="q6" value="disagree"> <label for="q6_sd">Slightly Disagree</label>
            <input type="radio" id="q6_dd" name="q6" value="disagree"> <label for="q6_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">7. When I’m reading a story, I find it difficult to work out the characters’
                intentions.</p>
            <input type="radio" id="q7_da" name="q7" value="agree"> <label for="q7_da">Definitely Agree</label>
            <input type="radio" id="q7_sa" name="q7" value="agree"> <label for="q7_sa">Slightly Agree</label>
            <input type="radio" id="q7_sd" name="q7" value="disagree"> <label for="q7_sd">Slightly Disagree</label>
            <input type="radio" id="q7_dd" name="q7" value="disagree"> <label for="q7_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">8. I like to collect information about categories of things (e.g., types of cars,
                birds, trains, plants).</p>
            <input type="radio" id="q8_da" name="q8" value="agree"> <label for="q8_da">Definitely Agree</label>
            <input type="radio" id="q8_sa" name="q8" value="agree"> <label for="q8_sa">Slightly Agree</label>
            <input type="radio" id="q8_sd" name="q8" value="disagree"> <label for="q8_sd">Slightly Disagree</label>
            <input type="radio" id="q8_dd" name="q8" value="disagree"> <label for="q8_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">9. I find it easy to work out what someone is thinking or feeling just by looking at
                their face.</p>
            <input type="radio" id="q9_da" name="q9" value="agree"> <label for="q9_da">Definitely Agree</label>
            <input type="radio" id="q9_sa" name="q9" value="agree"> <label for="q9_sa">Slightly Agree</label>
            <input type="radio" id="q9_sd" name="q9" value="disagree"> <label for="q9_sd">Slightly Disagree</label>
            <input type="radio" id="q9_dd" name="q9" value="disagree"> <label for="q9_dd">Definitely Disagree</label>
        </div>
    
        <div class="question-container">
            <p class="question-title">10. I find it difficult to work out people’s intentions.</p>
            <input type="radio" id="q10_da" name="q10" value="agree"> <label for="q10_da">Definitely Agree</label>
            <input type="radio" id="q10_sa" name="q10" value="agree"> <label for="q10_sa">Slightly Agree</label>
            <input type="radio" id="q10_sd" name="q10" value="disagree"> <label for="q10_sd">Slightly Disagree</label>
            <input type="radio" id="q10_dd" name="q10" value="disagree"> <label for="q10_dd">Definitely Disagree</label>
        </div>
    
        <input type="submit" value="Calculate Score">
    </form>

    <div class="required-message" id="requiredMessage">Please answer all questions before submitting.</div>

    <div class="results-disclaimer" id="resultsArea" style="display: none;">
        <div id="results"></div>
        <p><strong>Important Disclaimer:</strong> The AQ10 is a brief screening questionnaire to measure autistic traits
            in adults. It is <b>not</b> a diagnostic tool. A score of 6 or above indicates that you may have a higher
            number of autistic traits and might warrant further assessment by a qualified professional if you have
            concerns. This result does not confirm or rule out an Autism Spectrum Disorder (ASD) diagnosis. Please
            consult with a healthcare provider for any health concerns or for a formal assessment.</p>
    </div>

<script>
    // Define scoring rules globally
        const AGREE_SCORING_QUESTIONS = [1, 7, 8, 10];
        const TOTAL_QUESTIONS = 10;

        // --- Single Function to Calculate Score ---
        function calculateCurrentScore() {
            let score = 0;
            for (let i = 1; i <= TOTAL_QUESTIONS; i++) {
                const questionName = 'q' + i;
                const selectedAnswer = document.querySelector(`input[name="${questionName}"]:checked`);

                // Only score if an answer is selected for this question
                if (selectedAnswer) {
                    const answerValue = selectedAnswer.value; // 'agree' or 'disagree'

                    if (AGREE_SCORING_QUESTIONS.includes(i)) {
                        // Score 1 if the answer is 'agree' for these questions
                        if (answerValue === 'agree') {
                            score++;
                        }
                    } else {
                        // Score 1 if the answer is 'disagree' for the other questions
                        if (answerValue === 'disagree') {
                            score++;
                        }
                    }
                }
            }
            return score;
        }

        // --- Event Listener for Live Score Update ---
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('aq10Form');
            const scoreElement = document.getElementById('current-score'); // The <span> holding the number

            // Check if scoreElement exists before proceeding
            if (!scoreElement) {
                console.error("Element with ID 'current-score' not found!");
                return; // Exit if the score element isn't found
            }
             // Check if form exists
             if (!form) {
                console.error("Element with ID 'aq10Form' not found!");
                return; // Exit if the form isn't found
             }


            // Function to update the live score display
            function updateLiveScoreDisplay() {
                const currentTotal = calculateCurrentScore();
                scoreElement.textContent = currentTotal; // Update the text content
            }

            // Add event listener to the form for live updates
            form.addEventListener('change', updateLiveScoreDisplay);

            // Initial calculation for live display when the page loads (will be 0)
            updateLiveScoreDisplay();
        });

        // --- Event Listener for Final Submission ---
         document.getElementById('aq10Form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const resultsDiv = document.getElementById('results');
            const resultsAreaDiv = document.getElementById('resultsArea');
            const requiredMessageDiv = document.getElementById('requiredMessage');
            let allAnswered = true;

            // Check if all questions are answered
            for (let i = 1; i <= TOTAL_QUESTIONS; i++) {
                 if (!document.querySelector(`input[name="q${i}"]:checked`)) {
                     allAnswered = false;
                     break; // Exit loop early if one is unanswered
                 }
            }

            // Hide previous messages/results before showing new ones
             requiredMessageDiv.style.display = 'none';
             resultsAreaDiv.style.display = 'none';


            if (!allAnswered) {
                requiredMessageDiv.style.display = 'block'; // Show the required message
            } else {
                // All questions answered, proceed to calculate and show final score
                const finalScore = calculateCurrentScore(); // Use the shared calculation function

                let interpretation = '';
                // AQ10 threshold is typically 6 or more
                if (finalScore >= 6) {
                    interpretation = `This score (${finalScore}) meets or exceeds the threshold suggestive of autistic traits. Further assessment may be warranted.`;
                } else {
                    interpretation = `This score (${finalScore}) is below the threshold suggestive of autistic traits.`;
                }

                // Display the final score and brief interpretation
                resultsDiv.innerHTML = `Your AQ10 Score: ${finalScore} / ${TOTAL_QUESTIONS}<br><em>${interpretation}</em>`;

                // Show the entire results area (which includes the disclaimer)
                resultsAreaDiv.style.display = 'block';
                resultsAreaDiv.scrollIntoView({ behavior: 'smooth', block: 'start' }); // Scroll to show results
            }
         });

</script>

</body>
<?php include '../footer.php';?>
</html>