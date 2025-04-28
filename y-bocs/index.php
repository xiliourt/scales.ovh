<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <<title>Yale-Brown Obsessive Compulsive Scale (Y-BOCS)</title>
</head>
<?php include '../nav.php';?>

<body>
    <h1>Yale-Brown Obsessive Compulsive Scale (Y-BOCS)</h1>

    <div class="disclaimer">
        <p>This is a self-report version of the Yale-Brown Obsessive Compulsive Scale (Y-BOCS). It is intended for informational purposes only and is NOT a substitute for professional medical advice, diagnosis, or treatment. If you have concerns about your mental health, please consult a qualified healthcare provider.</p>
    </div>
    <form id="ybocsForm" onsubmit="return validateAndScore();">
        <p>Instructions: For each question, please select the option (0-4) that best describes how you have felt or acted <b>DURING THE PAST WEEK, INCLUDING TODAY</b>.</p>
        <div class="section" id="obsessions-section">
            <h2>Obsessions</h2>
            <p><em>Thoughts, images, or impulses that are unwanted, intrusive, and distressing.</em></p>

            <div class="question-container">
                <div class="question-title">1. Time Spent on Obsessions:</div>
                <div class="score-options">
                    <input type="radio" id="obsessions-time-0" name="obsessions-time" value="0" checked data-section="obsessions"><label for="obsessions-time-0">0 - None</label>
                    <input type="radio" id="obsessions-time-1" name="obsessions-time" value="1" data-section="obsessions"><label for="obsessions-time-1">1 - Less than 1 hr/day, or occasional</label>
                    <input type="radio" id="obsessions-time-2" name="obsessions-time" value="2" data-section="obsessions"><label for="obsessions-time-2">2 - 1 to 3 hrs/day</label>
                    <input type="radio" id="obsessions-time-3" name="obsessions-time" value="3" data-section="obsessions"><label for="obsessions-time-3">3 - More than 3 to 8 hrs/day</label>
                    <input type="radio" id="obsessions-time-4" name="obsessions-time" value="4" data-section="obsessions"><label for="obsessions-time-4">4 - More than 8 hrs/day, or nearly constant</label>
                </div>
            </div>

            <div class="question-container">
                <div class="question-title">2. Interference due to Obsessions:</div>
                 <div class="score-options">
                    <input type="radio" id="obsessions-interference-0" name="obsessions-interference" value="0" checked data-section="obsessions"><label for="obsessions-interference-0">0 - None</label>
                    <input type="radio" id="obsessions-interference-1" name="obsessions-interference" value="1" data-section="obsessions"><label for="obsessions-interference-1">1 - Slight interference with social/occupational activity</label>
                    <input type="radio" id="obsessions-interference-2" name="obsessions-interference" value="2" data-section="obsessions"><label for="obsessions-interference-2">2 - Definite interference, but manageable</label>
                    <input type="radio" id="obsessions-interference-3" name="obsessions-interference" value="3" data-section="obsessions"><label for="obsessions-interference-3">3 - Substantial interference</label>
                    <input type="radio" id="obsessions-interference-4" name="obsessions-interference" value="4" data-section="obsessions"><label for="obsessions-interference-4">4 - Severe interference, incapacitating</label>
                 </div>
            </div>

            <div class="question-container">
                <div class="question-title">3. Distress associated with Obsessions:</div>
                 <div class="score-options">
                    <input type="radio" id="obsessions-distress-0" name="obsessions-distress" value="0" checked data-section="obsessions"><label for="obsessions-distress-0">0 - None</label>
                    <input type="radio" id="obsessions-distress-1" name="obsessions-distress" value="1" data-section="obsessions"><label for="obsessions-distress-1">1 - Not bothersome</label>
                    <input type="radio" id="obsessions-distress-2" name="obsessions-distress" value="2" data-section="obsessions"><label for="obsessions-distress-2">2 - Moderately bothersome</label>
                    <input type="radio" id="obsessions-distress-3" name="obsessions-distress" value="3" data-section="obsessions"><label for="obsessions-distress-3">3 - Severely bothersome</label>
                    <input type="radio" id="obsessions-distress-4" name="obsessions-distress" value="4" data-section="obsessions"><label for="obsessions-distress-4">4 - Nearly constant and distressing</label>
                 </div>
            </div>

            <div class="question-container">
                <div class="question-title">4. Resistance against Obsessions:</div>
                 <div class="score-options">
                    <input type="radio" id="obsessions-resistance-0" name="obsessions-resistance" value="0" checked data-section="obsessions"><label for="obsessions-resistance-0">0 - Attempts to resist all obsessions</label>
                    <input type="radio" id="obsessions-resistance-1" name="obsessions-resistance" value="1" data-section="obsessions"><label for="obsessions-resistance-1">1 - Tries to resist most obsessions, but resistance is limited</label>
                    <input type="radio" id="obsessions-resistance-2" name="obsessions-resistance" value="2" data-section="obsessions"><label for="obsessions-resistance-2">2 - Resists some obsessions with limited success</label>
                    <input type="radio" id="obsessions-resistance-3" name="obsessions-resistance" value="3" data-section="obsessions"><label for="obsessions-resistance-3">3 - Gives in to most obsessions without attempting to resist, or resistance is infrequent</label>
                    <input type="radio" id="obsessions-resistance-4" name="obsessions-resistance" value="4" data-section="obsessions"><label for="obsessions-resistance-4">4 - Completely unable to resist any obsessions, or does not attempt to resist</label>
                 </div>
            </div>

            <div class="question-container">
                <div class="question-title">5. Degree of Control over Obsessive Thinking:</div>
                 <div class="score-options">
                    <input type="radio" id="obsessions-control-0" name="obsessions-control" value="0" checked data-section="obsessions"><label for="obsessions-control-0">0 - Complete control</label>
                    <input type="radio" id="obsessions-control-1" name="obsessions-control" value="1" data-section="obsessions"><label for="obsessions-control-1">1 - Much control, some difficulty dismissing thoughts</label>
                    <input type="radio" id="obsessions-control-2" name="obsessions-control" value="2" data-section="obsessions"><label for="obsessions-control-2">2 - Moderate control, thoughts intrusive but can be dismissed</label>
                    <input type="radio" id="obsessions-control-3" name="obsessions-control" value="3" data-section="obsessions"><label for="obsessions-control-3">3 - Little control, thoughts intrusive and difficult to dismiss</label>
                    <input type="radio" id="obsessions-control-4" name="obsessions-control" value="4" data-section="obsessions"><label for="obsessions-control-4">4 - No control, thoughts completely involuntary and persistent</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">6. Insight into Obsessions: (Optional - Not Scored)</div>
                 <div class="score-options">
                    <input type="radio" id="obsessions-insight-0" name="obsessions-insight" value="0" checked data-section="optional"><label for="obsessions-insight-0">0 - Full insight (recognizes obsessions as irrational)</label>
                    <input type="radio" id="obsessions-insight-1" name="obsessions-insight" value="1" data-section="optional"><label for="obsessions-insight-1">1 - Partial insight (doubts about irrationality)</label>
                    <input type="radio" id="obsessions-insight-2" name="obsessions-insight" value="2" data-section="optional"><label for="obsessions-insight-2">2 - Poor insight (believes obsessions might be true)</label>
                    <input type="radio" id="obsessions-insight-3" name="obsessions-insight" value="3" data-section="optional"><label for="obsessions-insight-3">3 - No insight (convinced obsessions are true)</label>
                    <input type="radio" id="obsessions-insight-4" name="obsessions-insight" value="4" data-section="optional"><label for="obsessions-insight-4">4 - Overvalued ideas (obsessions are partially understandable)</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">7. Avoidance due to Obsessions: (Optional - Not Scored)</div>
                 <div class="score-options">
                    <input type="radio" id="obsessions-avoidance-0" name="obsessions-avoidance" value="0" checked data-section="optional"><label for="obsessions-avoidance-0">0 - None</label>
                    <input type="radio" id="obsessions-avoidance-1" name="obsessions-avoidance" value="1" data-section="optional"><label for="obsessions-avoidance-1">1 - Slight avoidance</label>
                    <input type="radio" id="obsessions-avoidance-2" name="obsessions-avoidance" value="2" data-section="optional"><label for="obsessions-avoidance-2">2 - Moderate avoidance</label>
                    <input type="radio" id="obsessions-avoidance-3" name="obsessions-avoidance" value="3" data-section="optional"><label for="obsessions-avoidance-3">3 - Substantial avoidance</label>
                    <input type="radio" id="obsessions-avoidance-4" name="obsessions-avoidance" value="4" data-section="optional"><label for="obsessions-avoidance-4">4 - Severe avoidance</label>
                 </div>
            </div>
        </div> <div class="section" id="compulsions-section">
            <h2>Compulsions</h2>
             <p><em>Repetitive behaviors or mental acts that you feel driven to perform in response to an obsession or according to rigid rules.</em></p>

             <div class="question-container">
                <div class="question-title">8. Time Spent on Compulsions:</div>
                 <div class="score-options">
                    <input type="radio" id="compulsions-time-0" name="compulsions-time" value="0" checked data-section="compulsions"><label for="compulsions-time-0">0 - None</label>
                    <input type="radio" id="compulsions-time-1" name="compulsions-time" value="1" data-section="compulsions"><label for="compulsions-time-1">1 - Less than 1 hr/day, or occasional</label>
                    <input type="radio" id="compulsions-time-2" name="compulsions-time" value="2" data-section="compulsions"><label for="compulsions-time-2">2 - 1 to 3 hrs/day</label>
                    <input type="radio" id="compulsions-time-3" name="compulsions-time" value="3" data-section="compulsions"><label for="compulsions-time-3">3 - More than 3 to 8 hrs/day</label>
                    <input type="radio" id="compulsions-time-4" name="compulsions-time" value="4" data-section="compulsions"><label for="compulsions-time-4">4 - More than 8 hrs/day, or nearly constant</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">9. Interference due to Compulsions:</div>
                 <div class="score-options">
                    <input type="radio" id="compulsions-interference-0" name="compulsions-interference" value="0" checked data-section="compulsions"><label for="compulsions-interference-0">0 - None</label>
                    <input type="radio" id="compulsions-interference-1" name="compulsions-interference" value="1" data-section="compulsions"><label for="compulsions-interference-1">1 - Slight interference with social/occupational activity</label>
                    <input type="radio" id="compulsions-interference-2" name="compulsions-interference" value="2" data-section="compulsions"><label for="compulsions-interference-2">2 - Definite interference, but manageable</label>
                    <input type="radio" id="compulsions-interference-3" name="compulsions-interference" value="3" data-section="compulsions"><label for="compulsions-interference-3">3 - Substantial interference</label>
                    <input type="radio" id="compulsions-interference-4" name="compulsions-interference" value="4" data-section="compulsions"><label for="compulsions-interference-4">4 - Severe interference, incapacitating</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">10. Distress associated with Compulsions:</div>
                 <div class="score-options">
                    <input type="radio" id="compulsions-distress-0" name="compulsions-distress" value="0" checked data-section="compulsions"><label for="compulsions-distress-0">0 - None</label>
                    <input type="radio" id="compulsions-distress-1" name="compulsions-distress" value="1" data-section="compulsions"><label for="compulsions-distress-1">1 - Not bothersome</label>
                    <input type="radio" id="compulsions-distress-2" name="compulsions-distress" value="2" data-section="compulsions"><label for="compulsions-distress-2">2 - Moderately bothersome</label>
                    <input type="radio" id="compulsions-distress-3" name="compulsions-distress" value="3" data-section="compulsions"><label for="compulsions-distress-3">3 - Severely bothersome</label>
                    <input type="radio" id="compulsions-distress-4" name="compulsions-distress" value="4" data-section="compulsions"><label for="compulsions-distress-4">4 - Nearly constant and distressing</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">11. Resistance against Compulsions:</div>
                 <div class="score-options">
                    <input type="radio" id="compulsions-resistance-0" name="compulsions-resistance" value="0" checked data-section="compulsions"><label for="compulsions-resistance-0">0 - Attempts to resist all compulsions</label>
                    <input type="radio" id="compulsions-resistance-1" name="compulsions-resistance" value="1" data-section="compulsions"><label for="compulsions-resistance-1">1 - Tries to resist most compulsions, but resistance is limited</label>
                    <input type="radio" id="compulsions-resistance-2" name="compulsions-resistance" value="2" data-section="compulsions"><label for="compulsions-resistance-2">2 - Resists some compulsions with limited success</label>
                    <input type="radio" id="compulsions-resistance-3" name="compulsions-resistance" value="3" data-section="compulsions"><label for="compulsions-resistance-3">3 - Gives in to most compulsions without attempting to resist, or resistance is infrequent</label>
                    <input type="radio" id="compulsions-resistance-4" name="compulsions-resistance" value="4" data-section="compulsions"><label for="compulsions-resistance-4">4 - Completely unable to resist any compulsions, or does not attempt to resist</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">12. Degree of Control over Compulsive Behavior:</div>
                 <div class="score-options">
                    <input type="radio" id="compulsions-control-0" name="compulsions-control" value="0" checked data-section="compulsions"><label for="compulsions-control-0">0 - Complete control</label>
                    <input type="radio" id="compulsions-control-1" name="compulsions-control" value="1" data-section="compulsions"><label for="compulsions-control-1">1 - Much control, some difficulty delaying or stopping</label>
                    <input type="radio" id="compulsions-control-2" name="compulsions-control" value="2" data-section="compulsions"><label for="compulsions-control-2">2 - Moderate control, compulsions performable but with effort</label>
                    <input type="radio" id="compulsions-control-3" name="compulsions-control" value="3" data-section="compulsions"><label for="compulsions-control-3">3 - Little control, compulsions difficult to delay or stop</label>
                    <input type="radio" id="compulsions-control-4" name="compulsions-control" value="4" data-section="compulsions"><label for="compulsions-control-4">4 - No control, compulsions completely involuntary and persistent</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">13. Avoidance due to Compulsions: (Optional - Not Scored)</div>
                 <div class="score-options">
                    <input type="radio" id="compulsions-avoidance-0" name="compulsions-avoidance" value="0" checked data-section="optional"><label for="compulsions-avoidance-0">0 - None</label>
                    <input type="radio" id="compulsions-avoidance-1" name="compulsions-avoidance" value="1" data-section="optional"><label for="compulsions-avoidance-1">1 - Slight avoidance</label>
                    <input type="radio" id="compulsions-avoidance-2" name="compulsions-avoidance" value="2" data-section="optional"><label for="compulsions-avoidance-2">2 - Moderate avoidance</label>
                    <input type="radio" id="compulsions-avoidance-3" name="compulsions-avoidance" value="3" data-section="optional"><label for="compulsions-avoidance-3">3 - Substantial avoidance</label>
                    <input type="radio" id="compulsions-avoidance-4" name="compulsions-avoidance" value="4" data-section="optional"><label for="compulsions-avoidance-4">4 - Severe avoidance</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">14. Global Severity: (Optional - Not Scored)</div>
                 <div class="score-options">
                    <input type="radio" id="global-severity-0" name="global-severity" value="0" checked data-section="optional"><label for="global-severity-0">0 - No symptoms</label>
                    <input type="radio" id="global-severity-1" name="global-severity" value="1" data-section="optional"><label for="global-severity-1">1 - Subclinical</label>
                    <input type="radio" id="global-severity-2" name="global-severity" value="2" data-section="optional"><label for="global-severity-2">2 - Mild</label>
                    <input type="radio" id="global-severity-3" name="global-severity" value="3" data-section="optional"><label for="global-severity-3">3 - Moderate</label>
                    <input type="radio" id="global-severity-4" name="global-severity" value="4" data-section="optional"><label for="global-severity-4">4 - Severe</label>
                    <input type="radio" id="global-severity-5" name="global-severity" value="5" data-section="optional"><label for="global-severity-5">5 - Extreme</label>
                 </div>
            </div>

             <div class="question-container">
                <div class="question-title">15. Global Improvement: (Optional - Not Scored - Compared to admission)</div>
                 <div class="score-options">
                    <input type="radio" id="global-improvement-0" name="global-improvement" value="0" checked data-section="optional"><label for="global-improvement-0">0 - Very Much Improved</label>
                    <input type="radio" id="global-improvement-1" name="global-improvement" value="1" data-section="optional"><label for="global-improvement-1">1 - Much Improved</label>
                    <input type="radio" id="global-improvement-2" name="global-improvement" value="2" data-section="optional"><label for="global-improvement-2">2 - Minimally Improved</label>
                    <input type="radio" id="global-improvement-3" name="global-improvement" value="3" data-section="optional"><label for="global-improvement-3">3 - Unchanged</label>
                     <input type="radio" id="global-improvement-4" name="global-improvement" value="4" data-section="optional"><label for="global-improvement-4">4 - Minimally Worse</label>
                     <input type="radio" id="global-improvement-5" name="global-improvement" value="5" data-section="optional"><label for="global-improvement-5">5 - Much Worse</label>
                     <input type="radio" id="global-improvement-6" name="global-improvement" value="6" data-section="optional"><label for="global-improvement-6">6 - Very Much Worse</label>
                 </div>
            </div>

        </div> <div class="required-message" id="required-message">
            Please answer all 10 standard questions (5 Obsession and 5 Compulsion) to get your score.
        </div>

        <input type="submit" value="Calculate My Y-BOCS Score">

    </form>
    <br>
     <div id="score-display">
        Current Score: <span id="current-score">0</span>
    </div>

    <div id="results-container" style="display: none;">
        <div id="results">Total Y-BOCS Score: <span id="final-score">0</span></div>
        <div class="results-disclaimer">
             <p><strong>Y-BOCS Severity Ranges:</strong></p>
             <ul>
                 <li>0-7: Subclinical</li>
                 <li>8-15: Mild</li>
                 <li>16-23: Moderate</li>
                 <li>24-31: Severe</li>
                 <li>32-40: Extreme</li>
             </ul>
             <p>This score provides an indication of symptom severity. It is not a diagnosis. Please consult a mental health professional for evaluation and diagnosis.</p>
        </div>
    </div>

    <script>
        const form = document.getElementById('ybocsForm');
        const radioButtons = form.querySelectorAll('input[type="radio"]');
        const currentScoreSpan = document.getElementById('current-score');
        const finalScoreSpan = document.getElementById('final-score');
        const resultsContainer = document.getElementById('results-container');
        const resultsDisclaimer = document.querySelector('.results-disclaimer');
        const requiredMessage = document.getElementById('required-message');

        // List of names for the 10 core Y-BOCS questions
        const coreQuestionNames = [
            'obsessions-time',
            'obsessions-interference',
            'obsessions-distress',
            'obsessions-resistance',
            'obsessions-control',
            'compulsions-time',
            'compulsions-interference',
            'compulsions-distress',
            'compulsions-resistance',
            'compulsions-control'
        ];

        // Function to calculate and update the real-time current score
        function calculateCurrentScore() {
            let currentScore = 0;
            // Select all checked radio buttons that belong to the core Y-BOCS questions
             const selectedCoreRadios = form.querySelectorAll('input[type="radio"]:checked[data-section="obsessions"], input[type="radio"]:checked[data-section="compulsions"]');

            selectedCoreRadios.forEach(radio => {
                currentScore += parseInt(radio.value, 10);
            });

            currentScoreSpan.textContent = currentScore;
        }

        // Function to determine severity based on the score
        function getSeverity(score) {
            if (score >= 0 && score <= 7) {
                return 'Subclinical';
            } else if (score >= 8 && score <= 15) {
                return 'Mild';
            } else if (score >= 16 && score <= 23) {
                return 'Moderate';
            } else if (score >= 24 && score <= 31) {
                return 'Severe';
            } else if (score >= 32 && score <= 40) {
                return 'Extreme';
            } else {
                return 'Invalid Score'; // Should not happen if validation works
            }
        }

        // Function to validate the form and calculate the final score
        function validateAndScore() {
            let totalScore = 0;
            let answeredCount = 0;
            let allAnswered = true;

            // Check if all core questions are answered
            coreQuestionNames.forEach(name => {
                const questionRadios = form.elements[name]; // Gets the NodeList/RadioNodeList for the group
                if (!questionRadios || !questionRadios.value) { // Check if any radio in the group is checked
                    allAnswered = false;
                } else {
                     answeredCount++;
                     totalScore += parseInt(questionRadios.value, 10);
                }
            });


            if (!allAnswered) {
                requiredMessage.style.display = 'block'; // Show the required message
                resultsContainer.style.display = 'none'; // Hide results if not all answered
                resultsDisclaimer.style.display = 'none';
                 // Scroll to the required message for visibility (optional)
                 requiredMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                return false; // Prevent form submission
            } else {
                requiredMessage.style.display = 'none'; // Hide the required message
                const severity = getSeverity(totalScore);
                finalScoreSpan.textContent = `${totalScore} (${severity})`; // Display score and severity
                resultsContainer.style.display = 'block'; // Show results section
                resultsDisclaimer.style.display = 'block';
                 // Scroll to the results section for visibility (optional)
                resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                return false; // Prevent actual form submission (since we handled it client-side)
            }
        }

        // Add event listeners to all radio buttons for real-time score update
        radioButtons.forEach(radio => {
            radio.addEventListener('change', calculateCurrentScore);
        });

        // Initial score calculation on page load (in case form retains selections)
        document.addEventListener('DOMContentLoaded', calculateCurrentScore);

    </script>

</body>

<?php include '../footer.php';?>
</html>