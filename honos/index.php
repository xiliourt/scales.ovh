<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>Health of the Nation Outcome Scales (HoNOS) Form<</title>
    <link rel="stylesheet" href="../style.css">
    <style>
    input[type="checkbox"]:checked+label {
    background-color: #d6eaf8;
    /* Light blue for selected */
    border-color: #aed6f1;
    font-weight: bold;
    }
    
    /* Style focused labels (when input receives focus) */
    input[type="checkbox"]:focus+label {
    outline: 2px solid #3498db;
    outline-offset: 2px;
    }
    
    /* Hide the default radio button visually but keep accessible */
    input[type="checkbox"] {
    opacity: 0;
    position: absolute;
    width: 1px;
    /* Use 1px instead of 0 for some screen readers */
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
    }
</style>
</head>
<?php include '../nav.php';?>
<body>
    <h1>Health of the Nation Outcome Scales (HoNOS) Form</h1>
    <p>Rate the most severe problem that occurred during the past two weeks.</p>
    <div id="score-display">
        Total Score: <span id="current-score">0</span>
    </div>
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
    
    <form method="post" action="/honos/results.php">

        <div class="question-container">
            <p class="question-title">1. Overactive, aggressive, disruptive or agitated behavior</p>
            <input type="radio" id="q1_0" name="1" value="0" checked="checked" required> <label for="q1_0">0 - No problem</label>
            <input type="radio" id="q1_1" name="1" value="1"> <label for="q1_1">1 - Minor problem</label>
            <input type="radio" id="q1_2" name="1" value="2"> <label for="q1_2">2 - Mild problem</label>
            <input type="radio" id="q1_3" name="1" value="3"> <label for="q1_3">3 - Moderate problem</label>
            <input type="radio" id="q1_4" name="1" value="4"> <label for="q1_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">2. Non-accidental self-injury</p>
            <input type="radio" id="q2_0" name="2" value="0" checked="checked" required> <label for="q2_0">0 - No problem</label>
            <input type="radio" id="q2_1" name="2" value="1"> <label for="q2_1">1 - Minor problem</label>
            <input type="radio" id="q2_2" name="2" value="2"> <label for="q2_2">2 - Mild problem</label>
            <input type="radio" id="q2_3" name="2" value="3"> <label for="q2_3">3 - Moderate problem</label>
            <input type="radio" id="q2_4" name="2" value="4"> <label for="q2_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">3. Problem-drinking or drug-taking</p>
            <input type="radio" id="q3_0" name="3" value="0" checked="checked" required> <label for="q3_0">0 - No problem</label>
            <input type="radio" id="q3_1" name="3" value="1"> <label for="q3_1">1 - Minor problem</label>
            <input type="radio" id="q3_2" name="3" value="2"> <label for="q3_2">2 - Mild problem</label>
            <input type="radio" id="q3_3" name="3" value="3"> <label for="q3_3">3 - Moderate problem</label>
            <input type="radio" id="q3_4" name="3" value="4"> <label for="q3_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">4. Cognitive problems</p>
            <input type="radio" id="q4_0" name="4" value="0" checked="checked" required> <label for="q4_0">0 - No problem</label>
            <input type="radio" id="q4_1" name="4" value="1"> <label for="q4_1">1 - Minor problem</label>
            <input type="radio" id="q4_2" name="4" value="2"> <label for="q4_2">2 - Mild problem</label>
            <input type="radio" id="q4_3" name="4" value="3"> <label for="q4_3">3 - Moderate problem</label>
            <input type="radio" id="q4_4" name="4" value="4"> <label for="q4_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">5. Physical illness or disability problems </p>
            <input type="radio" id="q5_0" name="5" value="0" checked="checked" required> <label for="q5_0">0 - No problem</label>
            <input type="radio" id="q5_1" name="5" value="1"> <label for="q5_1">1 - Minor problem</label>
            <input type="radio" id="q5_2" name="5" value="2"> <label for="q5_2">2 - Mild problem</label>
            <input type="radio" id="q5_3" name="5" value="3"> <label for="q5_3">3 - Moderate problem</label>
            <input type="radio" id="q5_4" name="5" value="4"> <label for="q5_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">6. Problems with hallucinations and delusions</p>
            <input type="radio" id="q6_0" name="6" value="0" checked="checked" required> <label for="q6_0">0 - No problem</label>
            <input type="radio" id="q6_1" name="6" value="1"> <label for="q6_1">1 - Minor problem</label>
            <input type="radio" id="q6_2" name="6" value="2"> <label for="q6_2">2 - Mild problem</label>
            <input type="radio" id="q6_3" name="6" value="3"> <label for="q6_3">3 - Moderate problem</label>
            <input type="radio" id="q6_4" name="6" value="4"> <label for="q6_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">7. Problems with depressed mood</p>
            <input type="radio" id="q7_0" name="7" value="0" checked="checked" required> <label for="q7_0">0 - No problem</label>
            <input type="radio" id="q7_1" name="7" value="1"> <label for="q7_1">1 - Minor problem</label>
            <input type="radio" id="q7_2" name="7" value="2"> <label for="q7_2">2 - Mild problem</label>
            <input type="radio" id="q7_3" name="7" value="3"> <label for="q7_3">3 - Moderate problem</label>
            <input type="radio" id="q7_4" name="7" value="4"> <label for="q7_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">8. Other mental and behavioural problems</p>
            <input type="radio" id="q8_0" name="8" value="0" checked="checked" required> <label for="q8_0">0 - No problem</label>
            <input type="radio" id="q8_1" name="8" value="1"> <label for="q8_1">1 - Minor problem</label>
            <input type="radio" id="q8_2" name="8" value="2"> <label for="q8_2">2 - Mild problem</label>
            <input type="radio" id="q8_3" name="8" value="3"> <label for="q8_3">3 - Moderate problem</label>
            <input type="radio" id="q8_4" name="8" value="4"> <label for="q8_4">4 - Severe problem</label>

             <div class="disorders-key-list">
                <p class="question-title">Specify which problem(s) were rated above (select all that apply):</p>
                <input type="checkbox" id="dis_a" value="A" name="Disorders[]"> <label for="dis_a">A: Phobias – including fear of leaving home, crowds, public places, travelling, social phobias and specific phobias.</label>
                <input type="checkbox" id="dis_b" value="B" name="Disorders[]"> <label for="dis_b">B: Anxiety and panics.</label>
                <input type="checkbox" id="dis_c" value="C" name="Disorders[]"> <label for="dis_c">C: Obsessional and compulsive problems.</label>
                <input type="checkbox" id="dis_d" value="D" name="Disorders[]"> <label for="dis_d">D: Reactions to severely stressful events and traumas.</label>
                <input type="checkbox" id="dis_e" value="E" name="Disorders[]"> <label for="dis_e">E: Dissociative (‘conversion’) problems.</label>
                <input type="checkbox" id="dis_f" value="F" name="Disorders[]"> <label for="dis_f">F: Somatisation – persisting physical complaints in spite of full investigation and reassurance that no disease is present.</label>
                <input type="checkbox" id="dis_g" value="G" name="Disorders[]"> <label for="dis_g">G: Problems with appetite, over- or under-eating.</label>
                <input type="checkbox" id="dis_h" value="H" name="Disorders[]"> <label for="dis_h">H: Sleep problems.</label>
                <input type="checkbox" id="dis_i" value="I" name="Disorders[]"> <label for="dis_i">I: Sexual problems.</label>
                <input type="checkbox" id="dis_j" value="J" name="Disorders[]"> <label for="dis_j">J: Problems not specified elsewhere including expansive or elated mood.</label>
             </div>
        </div>


        <div class="question-container">
            <p class="question-title">9. Problems with relationships</p>
            <input type="radio" id="q9_0" name="9" value="0" checked="checked" required> <label for="q9_0">0 - No problem</label>
            <input type="radio" id="q9_1" name="9" value="1"> <label for="q9_1">1 - Minor problem</label>
            <input type="radio" id="q9_2" name="9" value="2"> <label for="q9_2">2 - Mild problem</label>
            <input type="radio" id="q9_3" name="9" value="3"> <label for="q9_3">3 - Moderate problem</label>
            <input type="radio" id="q9_4" name="9" value="4"> <label for="q9_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">10. Problems with activities of daily living</p>
            <input type="radio" id="q10_0" name="10" value="0" checked="checked" required> <label for="q10_0">0 - No problem</label>
            <input type="radio" id="q10_1" name="10" value="1"> <label for="q10_1">1 - Minor problem</label>
            <input type="radio" id="q10_2" name="10" value="2"> <label for="q10_2">2 - Mild problem</label>
            <input type="radio" id="q10_3" name="10" value="3"> <label for="q10_3">3 - Moderate problem</label>
            <input type="radio" id="q10_4" name="10" value="4"> <label for="q10_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">11. Problems with living conditions</p>
            <input type="radio" id="q11_0" name="11" value="0" checked="checked" required> <label for="q11_0">0 - No problem</label>
            <input type="radio" id="q11_1" name="11" value="1"> <label for="q11_1">1 - Minor problem</label>
            <input type="radio" id="q11_2" name="11" value="2"> <label for="q11_2">2 - Mild problem</label>
            <input type="radio" id="q11_3" name="11" value="3"> <label for="q11_3">3 - Moderate problem</label>
            <input type="radio" id="q11_4" name="11" value="4"> <label for="q11_4">4 - Severe problem</label>
        </div>

        <div class="question-container">
            <p class="question-title">12. Problems with occupation and activities</p>
            <input type="radio" id="q12_0" name="12" value="0" checked="checked" required> <label for="q12_0">0 - No problem</label>
            <input type="radio" id="q12_1" name="12" value="1"> <label for="q12_1">1 - Minor problem</label>
            <input type="radio" id="q12_2" name="12" value="2"> <label for="q12_2">2 - Mild problem</label>
            <input type="radio" id="q12_3" name="12" value="3"> <label for="q12_3">3 - Moderate problem</label>
            <input type="radio" id="q12_4" name="12" value="4"> <label for="q12_4">4 - Severe problem</label>
        </div>

        <input type="submit" value="Submit">
    </form>
</body>
<?php include '../footer.php';?>
</html>