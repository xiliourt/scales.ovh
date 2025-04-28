<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>Abbreviated Life Skills Profile (LSP-16)</title>
    <link rel="stylesheet" href="../style.css">
</head>
    <script>
        // Function to set today's date when the page loads
        window.onload = function() {
            // Get today's date
            const today = new Date();

            // Format as day/month/year
            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
            const day = String(today.getDate()).padStart(2, '0');

            // Set the value of the date input
            // Format YYYY-MM-DD is standard for date inputs, but DD/MM/YYYY is fine if hidden and expected by backend.
            document.getElementById('Date').value = `${day}/${month}/${year}`;
        }
    </script>
<?php include '../nav.php';?>
<body>
    <h1>Abbreviated Life Skills Profile (LSP-16)</h1>
<div id="score-display">
    Total Score: <span id="current-score">0</span>
</div>
    <form method="post" action="/lsp/results.php">
        <h2>Instructions:</h2>
        <p>For each question, select the option that best describes the person's general behaviour over the past
                month.</p>
        <div class="question-container">
            <div>
                <div class="text-label">Name:</div>
                <input type="text" id="NameInput" name="Name" required>
            </div>
            <input type="text" id="Date" name="Date" required hidden="true">
        </div>


        <div class="question-container">
            <p class="question-title">1. Does this person generally have any difficulty with initiating and responding
                to conversation?</p>
            <input type="radio" id="q1_0" name="Question1" value="0" checked="checked">
            <label for="q1_0">No difficulty</label>
            <input type="radio" id="q1_1" name="Question1" value="1"> <label for="q1_1">Slight difficulty</label>
            <input type="radio" id="q1_2" name="Question1" value="2"> <label for="q1_2">Moderate difficulty</label>
            <input type="radio" id="q1_3" name="Question1" value="3"> <label for="q1_3">Extreme difficulty</label>
        </div>

        <div class="question-container">
            <p class="question-title">2. Does this person generally withdraw from social contact?</p>
            <input type="radio" id="q2_0" name="Question2" value="0" checked="checked">
            <label for="q2_0">Does not withdraw at all</label>
            <input type="radio" id="q2_1" name="Question2" value="1"> <label for="q2_1">Withdraws slightly</label>
            <input type="radio" id="q2_2" name="Question2" value="2"> <label for="q2_2">Withdraws moderately</label>
            <input type="radio" id="q2_3" name="Question2" value="3">
            <label for="q2_3">Withdraws totally or near totally</label>
        </div>

        <div class="question-container">
            <p class="question-title">3. Does this person generally show warmth to others?</p>
            <input type="radio" id="q3_0" name="Question3" value="0" checked="checked">
            <label for="q3_0">Considerable warmth</label>
            <input type="radio" id="q3_1" name="Question3" value="1"> <label for="q3_1">Moderate warmth</label>
            <input type="radio" id="q3_2" name="Question3" value="2"> <label for="q3_2">Slight warmth</label>
            <input type="radio" id="q3_3" name="Question3" value="3"> <label for="q3_3">No warmth at all</label>
        </div>

        <div class="question-container">
            <p class="question-title">4. Is this person generally well groomed (e.g., neatly dressed, hair combed)?</p>
            <input type="radio" id="q4_0" name="Question4" value="0" checked="checked">
            <label for="q4_0">Well groomed</label>
            <input type="radio" id="q4_1" name="Question4" value="1"> <label for="q4_1">Moderately well groomed</label>
            <input type="radio" id="q4_2" name="Question4" value="2"> <label for="q4_2">Poorly groomed</label>
            <input type="radio" id="q4_3" name="Question4" value="3"> <label for="q4_3">Extremely poorly groomed</label>
        </div>

        <div class="question-container">
            <p class="question-title">5. Does this person wear clean clothes generally, or ensure that they are cleaned
                if dirty?</p>
            <input type="radio" id="q5_0" name="Question5" value="0" checked="checked">
            <label for="q5_0">Maintains cleanliness of clothes</label>
            <input type="radio" id="q5_1" name="Question5" value="1">
            <label for="q5_1">Moderate cleanliness of clothes</label>
            <input type="radio" id="q5_2" name="Question5" value="2">
            <label for="q5_2">Poor cleanliness of clothes</label>
            <input type="radio" id="q5_3" name="Question5" value="3">
            <label for="q5_3">Very poor cleanliness of clothes</label>
        </div>

        <div class="question-container">
            <p class="question-title">6. Does this person generally neglect her or his physical health?</p>
            <input type="radio" id="q6_0" name="Question6" value="0" checked="checked">
            <label for="q6_0">No neglect</label>
            <input type="radio" id="q6_1" name="Question6" value="1">
            <label for="q6_1">Slight neglect of physical problems</label>
            <input type="radio" id="q6_2" name="Question6" value="2">
            <label for="q6_2">Moderate neglect of physical problems</label>
            <input type="radio" id="q6_3" name="Question6" value="3">
            <label for="q6_3">Extreme neglect of physical problems</label>
        </div>

        <div class="question-container">
            <p class="question-title">7. Is this person violent to others?</p>
            <input type="radio" id="q7_0" name="Question7" value="0" checked="checked">
            <label for="q7_0">Not at all</label>
            <input type="radio" id="q7_1" name="Question7" value="1"> <label for="q7_1">Rarely</label>
            <input type="radio" id="q7_2" name="Question7" value="2"> <label for="q7_2">Occasionally</label>
            <input type="radio" id="q7_3" name="Question7" value="3"> <label for="q7_3">Often</label>
        </div>

        <div class="question-container">
            <p class="question-title">8. Does this person generally make and/or keep up friendships?</p>
            <input type="radio" id="q8_0" name="Question8" value="0" checked="checked">
            <label for="q8_0">Friendships made or kept up well</label>
            <input type="radio" id="q8_1" name="Question8" value="1">
            <label for="q8_1">Friendships made or kept up with slight difficulty</label>
            <input type="radio" id="q8_2" name="Question8" value="2">
            <label for="q8_2">Friendships made or kept up with considerable difficulty</label>
            <input type="radio" id="q8_3" name="Question8" value="3">
            <label for="q8_3">No friendships made or none kept</label>
        </div>

        <div class="question-container">
            <p class="question-title">9. Does this person generally maintain an adequate diet?</p>
            <input type="radio" id="q9_0" name="Question9" value="0" checked="checked">
            <label for="q9_0">No problem</label>
            <input type="radio" id="q9_1" name="Question9" value="1"> <label for="q9_1">Slight problem</label>
            <input type="radio" id="q9_2" name="Question9" value="2"> <label for="q9_2">Moderate problem</label>
            <input type="radio" id="q9_3" name="Question9" value="3"> <label for="q9_3">Extreme problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">10. Does this person generally look after and take her or his own prescribed
                medication (or attend for prescribed injections on time) without reminding?</p>
            <input type="radio" id="q10_0" name="Question10" value="0" checked="checked">
            <label for="q10_0">Reliable with medication</label>
            <input type="radio" id="q10_1" name="Question10" value="1"> <label for="q10_1">Slightly unreliable</label>
            <input type="radio" id="q10_2" name="Question10" value="2"> <label for="q10_2">Moderately unreliable</label>
            <input type="radio" id="q10_3" name="Question10" value="3"> <label for="q10_3">Extremely unreliable</label>
        </div>

        <div class="question-container">
            <p class="question-title">11. Is this person willing to take psychiatric medication when prescribed by a
                doctor?</p>
            <input type="radio" id="q11_0" name="Question11" value="0" checked="checked">
            <label for="q11_0">Always</label>
            <input type="radio" id="q11_1" name="Question11" value="1"> <label for="q11_1">Usually</label>
            <input type="radio" id="q11_2" name="Question11" value="2"> <label for="q11_2">Rarely</label>
            <input type="radio" id="q11_3" name="Question11" value="3"> <label for="q11_3">Never</label>
        </div>

        <div class="question-container">
            <p class="question-title">12. Does this person co-operate with health services (e.g., doctors and/or other
                health workers)?</p>
            <input type="radio" id="q12_0" name="Question12" value="0" checked="checked">
            <label for="q12_0">Always</label>
            <input type="radio" id="q12_1" name="Question12" value="1"> <label for="q12_1">Usually</label>
            <input type="radio" id="q12_2" name="Question12" value="2"> <label for="q12_2">Rarely</label>
            <input type="radio" id="q12_3" name="Question12" value="3"> <label for="q12_3">Never</label>
        </div>

        <div class="question-container">
            <p class="question-title">13. Does this person generally have problems (e.g., friction, avoidance) living
                with others in the household?</p>
            <input type="radio" id="q13_0" name="Question13" value="0" checked="checked">
            <label for="q13_0">No obvious problem</label>
            <input type="radio" id="q13_1" name="Question13" value="1"> <label for="q13_1">Slight problems</label>
            <input type="radio" id="q13_2" name="Question13" value="2"> <label for="q13_2">Moderate problems</label>
            <input type="radio" id="q13_3" name="Question13" value="3"> <label for="q13_3">Extreme problems</label>
        </div>

        <div class="question-container">
            <p class="question-title">14. Does this person behave offensively (includes sexual behaviour)?</p>
            <input type="radio" id="q14_0" name="Question14" value="0" checked="checked">
            <label for="q14_0">Not at all</label>
            <input type="radio" id="q14_1" name="Question14" value="1"> <label for="q14_1">Rarely</label>
            <input type="radio" id="q14_2" name="Question14" value="2"> <label for="q14_2">Occasionally</label>
            <input type="radio" id="q14_3" name="Question14" value="3"> <label for="q14_3">Often</label>
        </div>

        <div class="question-container">
            <p class="question-title">15. Does this person behave irresponsibly?</p>
            <input type="radio" id="q15_0" name="Question15" value="0" checked="checked">
            <label for="q15_0">Not at all</label>
            <input type="radio" id="q15_1" name="Question15" value="1"> <label for="q15_1">Rarely</label>
            <input type="radio" id="q15_2" name="Question15" value="2"> <label for="q15_2">Occasionally</label>
            <input type="radio" id="q15_3" name="Question15" value="3"> <label for="q15_3">Often</label>
        </div>

        <div class="question-container">
            <p class="question-title">16. What sort of work is this person generally capable of (even if unemployed,
                retired or doing unpaid domestic duties)?</p>
            <input type="radio" id="q16_0" name="Question16" value="0" checked="checked">
            <label for="q16_0">Capable of full time work</label>
            <input type="radio" id="q16_1" name="Question16" value="1">
            <label for="q16_1">Capable of part time work</label>
            <input type="radio" id="q16_2" name="Question16" value="2">
            <label for="q16_2">Capable only of sheltered work</label>
            <input type="radio" id="q16_3" name="Question16" value="3">
            <label for="q16_3">Totally incapable of work</label>
        </div>

        <input type="submit" value="Submit">
    </form>
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
    
            const form = document.querySelector('form'); // Get the form
            const scoreElement = document.getElementById('current-score'); // Get the score span
    
            // Function to calculate the total score
            function calculateScore() {
                let totalScore = 0;
                // Select all checked radio buttons within the form
                const checkedRadios = form.querySelectorAll('input[type="radio"]:checked');
    
                checkedRadios.forEach(radio => {
                    // Add the numeric value of the checked radio button to the total
                    totalScore += parseInt(radio.value, 10); // Use parseInt to convert value string to number
                });
                return totalScore;
            }
    
            // Function to update the score display
            function updateScoreDisplay() {
                const currentTotal = calculateScore();
                scoreElement.textContent = currentTotal; // Update the text content of the score span
            }
    
            // Add event listener to the form - recalculate on any change
            form.addEventListener('change', updateScoreDisplay);
    
            // Initial calculation when the page loads
            updateScoreDisplay();
    
        }); // End DOMContentLoaded listener
    </script>
</body>
<?php include '../footer.php';?>
</html>