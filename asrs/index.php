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

    <h1>Adult ADHD Self-Report Scale (ASRS-v1.1) Screener</h1>
    <?php include '../disclaimer.php';?>
    <br>
    <div id="score-display">
        Score: <span id="current-score">0</span>
    </div>

    <form id="asrsForm">
        <div class="section">
            <h2>Part A Instructions</h2>
            <p>Please answer the questions below, rating yourself on how often you have felt or behaved this way
                recently. Check the box that best describes how you have felt and conducted yourself over the **past 6
                months**.</p>
        </div>

        <div class="section">
            <h2>Part A Questions</h2>

            <div class="question-container">
                <p class="question-title">1. How often do you have trouble wrapping up the final details of a project,
                    once the challenging parts have been done?</p>
                <input type="radio" id="q1_0" name="q1" value="0" checked> <label for="q1_0">Never</label>
                <input type="radio" id="q1_1" name="q1" value="1"> <label for="q1_1">Rarely</label>
                <input type="radio" id="q1_2" name="q1" value="2"> <label for="q1_2">Sometimes</label>
                <input type="radio" id="q1_3" name="q1" value="3"> <label for="q1_3">Often</label>
                <input type="radio" id="q1_4" name="q1" value="4"> <label for="q1_4">Very Often</label>
            </div>

            <div class="question-container">
                <p class="question-title">2. How often do you have difficulty getting things in order when you have to
                    do a task that requires organization?</p>
                <input type="radio" id="q2_0" name="q2" value="0" checked> <label for="q2_0">Never</label>
                <input type="radio" id="q2_1" name="q2" value="1"> <label for="q2_1">Rarely</label>
                <input type="radio" id="q2_2" name="q2" value="2"> <label for="q2_2">Sometimes</label>
                <input type="radio" id="q2_3" name="q2" value="3"> <label for="q2_3">Often</label>
                <input type="radio" id="q2_4" name="q2" value="4"> <label for="q2_4">Very Often</label>
            </div>

            <div class="question-container">
                <p class="question-title">3. How often do you have problems remembering appointments or obligations?</p>
                <input type="radio" id="q3_0" name="q3" value="0" checked> <label for="q3_0">Never</label>
                <input type="radio" id="q3_1" name="q3" value="1"> <label for="q3_1">Rarely</label>
                <input type="radio" id="q3_2" name="q3" value="2"> <label for="q3_2">Sometimes</label>
                <input type="radio" id="q3_3" name="q3" value="3"> <label for="q3_3">Often</label>
                <input type="radio" id="q3_4" name="q3" value="4"> <label for="q3_4">Very Often</label>
            </div>

            <div class="question-container">
                <p class="question-title">4. When you have a task that requires a lot of thought, how often do you avoid
                    or delay getting started?</p>
                <input type="radio" id="q4_0" name="q4" value="0" checked> <label for="q4_0">Never</label>
                <input type="radio" id="q4_1" name="q4" value="1"> <label for="q4_1">Rarely</label>
                <input type="radio" id="q4_2" name="q4" value="2"> <label for="q4_2">Sometimes</label>
                <input type="radio" id="q4_3" name="q4" value="3"> <label for="q4_3">Often</label>
                <input type="radio" id="q4_4" name="q4" value="4"> <label for="q4_4">Very Often</label>
            </div>

            <div class="question-container">
                <p class="question-title">5. How often do you fidget or squirm with your hands or feet when you have to
                    sit down for a long time?</p>
                <input type="radio" id="q5_0" name="q5" value="0" checked> <label for="q5_0">Never</label>
                <input type="radio" id="q5_1" name="q5" value="1"> <label for="q5_1">Rarely</label>
                <input type="radio" id="q5_2" name="q5" value="2"> <label for="q5_2">Sometimes</label>
                <input type="radio" id="q5_3" name="q5" value="3"> <label for="q5_3">Often</label>
                <input type="radio" id="q5_4" name="q5" value="4"> <label for="q5_4">Very Often</label>
            </div>

            <div class="question-container">
                <p class="question-title">6. How often do you feel overly active and compelled to do things, like you
                    were driven by a motor?</p>
                <input type="radio" id="q6_0" name="q6" value="0" checked> <label for="q6_0">Never</label>
                <input type="radio" id="q6_1" name="q6" value="1"> <label for="q6_1">Rarely</label>
                <input type="radio" id="q6_2" name="q6" value="2"> <label for="q6_2">Sometimes</label>
                <input type="radio" id="q6_3" name="q6" value="3"> <label for="q6_3">Often</label>
                <input type="radio" id="q6_4" name="q6" value="4"> <label for="q6_4">Very Often</label>
            </div>

        </div> <input type="submit" value="Calculate Score">
    </form>

    <div class="required-message" id="requiredMessage">Please answer all 6 questions before submitting.</div>
    <div class="results-disclaimer" id="resultsArea">
        <div id="results"></div>
        <p><strong>Important Disclaimer:</strong> The ASRS v1.1 Screener is intended for identifying adults who may have
            ADHD. It is <strong>not</strong> a diagnostic tool. A score of 4 or more suggests that your symptoms may be
            consistent with adult ADHD, and further investigation by a qualified healthcare professional is recommended.
            Only a trained professional can make an accurate diagnosis after a full evaluation. This screener does not
            replace consultation with a qualified health professional.</p>
        <p><em>ASRS v1.1 Screener developed by the World Health Organization (WHO) and the Workgroup on Adult ADHD.</em>
        </p>
    </div>

    <script>
        const TOTAL_QUESTIONS_ASRS = 6;

        // --- Function to Calculate ASRS Part A Score ---
        function calculateAsrsScore() {
            let score = 0;
            for (let i = 1; i <= TOTAL_QUESTIONS_ASRS; i++) {
                const questionName = 'q' + i;
                const selectedAnswer = document.querySelector(`input[name="${questionName}"]:checked`);

                if (selectedAnswer) {
                    const value = parseInt(selectedAnswer.value, 10);

                    // Apply ASRS Part A scoring rules
                    if (i >= 1 && i <= 3) { // Questions 1-3
                        if (value >= 2) { // Sometimes, Often, Very Often
                            score++;
                        }
                    } else if (i >= 4 && i <= 6) { // Questions 4-6
                        if (value >= 3) { // Often, Very Often
                            score++;
                        }
                    }
                }
            }
            return score;
        }

        // --- Event Listener for Live Score Update ---
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('asrsForm');
            const scoreElement = document.getElementById('current-score');

            function updateLiveScoreDisplay() {
                const currentTotal = calculateAsrsScore();
                scoreElement.textContent = currentTotal;
            }

            form.addEventListener('change', updateLiveScoreDisplay);
            updateLiveScoreDisplay(); // Initial calculation
        });

        // --- Event Listener for Final Submission ---
        document.getElementById('asrsForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const resultsDiv = document.getElementById('results');
            const resultsAreaDiv = document.getElementById('resultsArea');
            const requiredMessageDiv = document.getElementById('requiredMessage');
            let allAnswered = true;

            // Check completion
            for (let i = 1; i <= TOTAL_QUESTIONS_ASRS; i++) {
                if (!document.querySelector(`input[name="q${i}"]:checked`)) {
                    allAnswered = false;
                    break;
                }
            }

            // Reset messages
            requiredMessageDiv.style.display = 'none';
            resultsAreaDiv.style.display = 'none';

            if (!allAnswered) {
                requiredMessageDiv.style.display = 'block';
            } else {
                const finalScore = calculateAsrsScore();
                let interpretation = '';

                if (finalScore >= 4) {
                    interpretation = `Your score of ${finalScore} is suggestive of ADHD and warrants further discussion with a healthcare professional.`;
                } else {
                    interpretation = `Your score of ${finalScore} is less suggestive of ADHD, but does not rule it out. Discuss any concerns with a healthcare professional.`;
                }

                resultsDiv.innerHTML = `Your ASRS Screener Score: ${finalScore} / ${TOTAL_QUESTIONS_ASRS}<br><em>${interpretation}</em>`;
                resultsAreaDiv.style.display = 'block';
                resultsAreaDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    </script>

</body>

<?php include '../footer.php';?>

</html>