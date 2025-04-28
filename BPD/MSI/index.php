<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" type="image/x-icon" href="../../favicon.png">
    <title>MSI-BPD Self-Screening Form</title>
</head>
<?php include '../../nav.php';?>
<body>

    <h1>MSI-BPD Self-Screening Form</h1>

    <div id="score-display">
        Current Score
        <span id="current-score">0</span>
    </div>
    <?php include '../../disclaimer.php';?>
    <br>
    <form id="msi-bpd-form">
        <div class="section">
            <h2>Instructions & Questions</h2>
            <p>Have you had the following experiences recently and throughout your life? Please select YES or NO for
                each question.</p>
            <div class="question-container">
                <span class="question-title">1. Have any of your closest relationships been trouble by a lot of arguments or repeated breakups?</span>
                <div class="radio-option">
                    <input type="radio" id="q1_yes" name="q1" value="1" required>
                    <label for="q1_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q1_no" name="q1" value="0" required>
                    <label for="q1_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">2. Have you deliberately hurt yourself physically (e.g. punched yourself, cut yourself, burned yourself)? How about made a suicide attempt?</span>
                <div class="radio-option">
                    <input type="radio" id="q2_yes" name="q2" value="1" required>
                    <label for="q2_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q2_no" name="q2" value="0" required>
                    <label for="q2_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">3. Have you had at least two other problems with impulsivity (e.g. eating binges and
                spending sprees, drinking too much and verbal outbursts)?</span>
                <div class="radio-option">
                    <input type="radio" id="q3_yes" name="q3" value="1" required>
                    <label for="q3_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q3_no" name="q3" value="0" required>
                    <label for="q3_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">4. Have you been extremely moody?</span>
                <div class="radio-option">
                    <input type="radio" id="q4_yes" name="q4" value="1" required>
                    <label for="q4_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q4_no" name="q4" value="0" required>
                    <label for="q4_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">5. Have you felt very angry a lot of the time? How about often acted in an angry or
                sarcastic manner?</span>
                <div class="radio-option">
                    <input type="radio" id="q5_yes" name="q5" value="1" required>
                    <label for="q5_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q5_no" name="q5" value="0" required>
                    <label for="q5_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">6. Have you often been distrustful of other people?</span>
                <div class="radio-option">
                    <input type="radio" id="q6_yes" name="q6" value="1" required>
                    <label for="q6_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q6_no" name="q6" value="0" required>
                    <label for="q6_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">7. Have you frequently felt unreal or as if things around you were unreal?</span>
                <div class="radio-option">
                    <input type="radio" id="q7_yes" name="q7" value="1" required>
                    <label for="q7_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q7_no" name="q7" value="0" required>
                    <label for="q7_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">8. Have you chronically felt empty? </span>
                <div class="radio-option">
                    <input type="radio" id="q8_yes" name="q8" value="1" required>
                    <label for="q8_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q8_no" name="q8" value="0" required>
                    <label for="q8_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">9. Have you often felt that you had no idea of who you are or that you have no identity?</span>
                <div class="radio-option">
                    <input type="radio" id="q9_yes" name="q9" value="1" required>
                    <label for="q9_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q9_no" name="q9" value="0" required>
                    <label for="q9_no">NO</label>
                </div>
            </div>

            <div class="question-container">
                <span class="question-title">10. Have you made desperate efforts to avoid feeling abandoned or being
                abandoned (e.g., repeatedly called someone to reassure yourself that he
                or she still cared, begged them not to leave you, clung to them physically)?</span>
                <div class="radio-option">
                    <input type="radio" id="q10_yes" name="q10" value="1" required>
                    <label for="q10_yes">YES</label>
                </div>
                <div class="radio-option">
                    <input type="radio" id="q10_no" name="q10" value="0" required>
                    <label for="q10_no">NO</label>
                </div>
            </div>
        </div>

        <div class="required-message" id="required-msg">
            Please answer all 10 questions before submitting.
        </div>

        <input type="submit" value="Calculate Score & View Results">

    </form>

    <div class="results-disclaimer" id="results-section">
        <div id="results">Your Score: [Score]</div>
        <div id="results-interpretation">
            [Interpretation based on score will appear here]
            <br><br>
            <strong>Important Disclaimer:</strong> This screening tool is for informational purposes only and does not
            substitute for a professional evaluation. A score of 7 or higher suggests that Borderline Personality
            Disorder (BPD) might be present and indicates that a comprehensive assessment by a qualified mental health
            professional is recommended. Only a trained clinician can provide a diagnosis. Please discuss these results
            with a healthcare provider if you have concerns.
        </div>
    </div>
    <script>
        const form = document.getElementById('msi-bpd-form');
        const scoreDisplay = document.getElementById('current-score');
        const resultsSection = document.getElementById('results-section');
        const resultsText = document.getElementById('results');
        const resultsInterpretation = document.getElementById('results-interpretation');
        const requiredMsg = document.getElementById('required-msg');
        const totalQuestions = 10;
        const cutoffScore = 7; // Standard MSI-BPD cutoff

        // --- Function to Calculate Score ---
        function calculateScore() {
            let score = 0;
            let answeredCount = 0;
            for (let i = 1; i <= totalQuestions; i++) {
                const selectedOption = form.querySelector(`input[name="q${i}"]:checked`);
                if (selectedOption) {
                    score += parseInt(selectedOption.value);
                    answeredCount++;
                }
            }
            return { score, answeredCount };
        }

        // --- Function to Update Live Score Display ---
        function updateLiveScore() {
            const { score } = calculateScore();
            scoreDisplay.textContent = score;
        }

        // --- Function to Check if All Questions Answered ---
        function allQuestionsAnswered() {
             const { answeredCount } = calculateScore();
             return answeredCount === totalQuestions;
        }

        // --- Event Listener for Live Score Update ---
        form.addEventListener('input', updateLiveScore);

        // --- Event Listener for Form Submission ---
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default page reload

            // Check if all questions are answered (fallback for older browsers or if 'required' fails)
            if (!allQuestionsAnswered()) {
                requiredMsg.style.display = 'block'; // Show error message
                 resultsSection.style.display = 'none'; // Hide results if previously shown
                requiredMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return; // Stop submission
            }

            // If all answered, hide error message and proceed
            requiredMsg.style.display = 'none';
            const { score } = calculateScore();

            // Update results section
            resultsText.textContent = `Your Final Score: ${score}`;

            // Generate interpretation text
            let interpretation = '';
            if (score >= cutoffScore) {
                 interpretation = `Your score of ${score} is at or above the screening cutoff of ${cutoffScore}. This suggests that traits associated with Borderline Personality Disorder may be present. It is strongly recommended to consult with a qualified mental health professional for a comprehensive evaluation and potential diagnosis.`;
            } else {
                interpretation = `Your score of ${score} is below the screening cutoff of ${cutoffScore}. While this suggests BPD is less likely based on this screener, it does not rule it out completely. If you have ongoing concerns about your mental health, relationships, or emotional well-being, please consult with a qualified mental health professional.`;
            }
             // Add the standard disclaimer text to the interpretation section
            interpretation += `<br><br><strong>Important Disclaimer:</strong> This screening tool is for informational purposes only and does not substitute for a professional evaluation. A score of 7 or higher suggests that Borderline Personality Disorder (BPD) might be present and indicates that a comprehensive assessment by a qualified mental health professional is recommended. Only a trained clinician can provide a diagnosis. Please discuss these results with a healthcare provider if you have concerns.`;

            resultsInterpretation.innerHTML = interpretation; // Use innerHTML to render the <br> tags

            // Show results section and scroll to it
            resultsSection.style.display = 'block';
            resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });

        // --- Initial live score calculation ---
        updateLiveScore();

    </script>

</body>
<?php include '../../footer.php';?>
</html>