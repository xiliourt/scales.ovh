<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>International Trauma Questionnaire (ITQ)r</title>
</head>
<?php include '../nav.php';?>

<body>

    <h1>International Trauma Questionnaire (ITQ)</h1>

    <div class="disclaimer">
        This tool is for informational purposes only and does not substitute for a professional clinical assessment. Please consult with a qualified healthcare provider for any health concerns or before making any decisions related to your health or treatment.
    </div>

    <div id="score-display">
        Total Score
        <span id="current-score">0</span>
    </div>

    <form id="itqForm">

        <p>Instructions: The following questions ask about problems that people sometimes experience after stressful life events. Please read each question carefully and indicate how much you have been bothered by that problem <strong>in the past month</strong>.</p>

        <div class="section">
            <h2>Part 1: PTSD Symptoms</h2>
            <p>These questions relate to the core symptoms of Post-Traumatic Stress Disorder (PTSD).</p>

            <div class="question-container">
                <div class="question-title">1. Unwanted memories, nightmares, or flashbacks about the stressful experience(s)?</div>
                <input type="radio" id="q1_0" name="q1" value="0" checked required><label for="q1_0">0 - Not at all</label>
                <input type="radio" id="q1_1" name="q1" value="1"><label for="q1_1">1 - A little bit</label>
                <input type="radio" id="q1_2" name="q1" value="2"><label for="q1_2">2 - Moderately</label>
                <input type="radio" id="q1_3" name="q1" value="3"><label for="q1_3">3 - Quite a bit</label>
                <input type="radio" id="q1_4" name="q1" value="4"><label for="q1_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">2. Feeling very upset or having physical reactions (e.g., heart pounding, sweating, dizziness) when reminded of the stressful experience(s)?</div>
                <input type="radio" id="q2_0" name="q2" value="0" checked required><label for="q2_0">0 - Not at all</label>
                <input type="radio" id="q2_1" name="q2" value="1"><label for="q2_1">1 - A little bit</label>
                <input type="radio" id="q2_2" name="q2" value="2"><label for="q2_2">2 - Moderately</label>
                <input type="radio" id="q2_3" name="q2" value="3"><label for="q2_3">3 - Quite a bit</label>
                <input type="radio" id="q2_4" name="q2" value="4"><label for="q2_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">3. Trying to avoid memories, thoughts, or feelings related to the stressful experience(s)?</div>
                <input type="radio" id="q3_0" name="q3" value="0" checked required><label for="q3_0">0 - Not at all</label>
                <input type="radio" id="q3_1" name="q3" value="1"><label for="q3_1">1 - A little bit</label>
                <input type="radio" id="q3_2" name="q3" value="2"><label for="q3_2">2 - Moderately</label>
                <input type="radio" id="q3_3" name="q3" value="3"><label for="q3_3">3 - Quite a bit</label>
                <input type="radio" id="q3_4" name="q3" value="4"><label for="q3_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">4. Trying to avoid people, places, conversations, or situations that remind you of the stressful experience(s)?</div>
                <input type="radio" id="q4_0" name="q4" value="0" checked required><label for="q4_0">0 - Not at all</label>
                <input type="radio" id="q4_1" name="q4" value="1"><label for="q4_1">1 - A little bit</label>
                <input type="radio" id="q4_2" name="q4" value="2"><label for="q4_2">2 - Moderately</label>
                <input type="radio" id="q4_3" name="q4" value="3"><label for="q4_3">3 - Quite a bit</label>
                <input type="radio" id="q4_4" name="q4" value="4"><label for="q4_4">4 - Extremely</label>
            </div>

             <div class="question-container">
                <div class="question-title">5. Feeling constantly on guard, watchful, or easily startled?</div>
                 <input type="radio" id="q5_0" name="q5" value="0" checked required><label for="q5_0">0 - Not at all</label>
                 <input type="radio" id="q5_1" name="q5" value="1"><label for="q5_1">1 - A little bit</label>
                 <input type="radio" id="q5_2" name="q5" value="2"><label for="q5_2">2 - Moderately</label>
                 <input type="radio" id="q5_3" name="q5" value="3"><label for="q5_3">3 - Quite a bit</label>
                 <input type="radio" id="q5_4" name="q5" value="4"><label for="q5_4">4 - Extremely</label>
            </div>

             <div class="question-container">
                 <div class="question-title">6. Acting in an impulsive or reckless way, or taking unusual risks?</div>
                 <input type="radio" id="q6_0" name="q6" value="0" checked required><label for="q6_0">0 - Not at all</label>
                 <input type="radio" id="q6_1" name="q6" value="1"><label for="q6_1">1 - A little bit</label>
                 <input type="radio" id="q6_2" name="q6" value="2"><label for="q6_2">2 - Moderately</label>
                 <input type="radio" id="q6_3" name="q6" value="3"><label for="q6_3">3 - Quite a bit</label>
                 <input type="radio" id="q6_4" name="q6" value="4"><label for="q6_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">7. How much have these PTSD symptoms (Questions 1-6) interfered with your ability to function in important areas of life (e.g., work, school, relationships, daily activities)?</div>
                <input type="radio" id="q7_0" name="q7" value="0" checked required><label for="q7_0">0 - Not at all</label>
                <input type="radio" id="q7_1" name="q7" value="1"><label for="q7_1">1 - A little bit</label>
                <input type="radio" id="q7_2" name="q7" value="2"><label for="q7_2">2 - Moderately</label>
                <input type="radio" id="q7_3" name="q7" value="3"><label for="q7_3">3 - Quite a bit</label>
                <input type="radio" id="q7_4" name="q7" value="4"><label for="q7_4">4 - Extremely</label>
            </div>
        </div>

        <div class="section">
            <h2>Part 2: Disturbances in Self-Organization (DSO) Symptoms</h2>
            <p>These questions relate to symptoms often associated with Complex PTSD (CPTSD), in addition to the PTSD symptoms above.</p>

            <div class="question-container">
                <div class="question-title">8. Feeling overwhelmed by emotions or having difficulty controlling emotional reactions?</div>
                <input type="radio" id="q8_0" name="q8" value="0" checked required><label for="q8_0">0 - Not at all</label>
                <input type="radio" id="q8_1" name="q8" value="1"><label for="q8_1">1 - A little bit</label>
                <input type="radio" id="q8_2" name="q8" value="2"><label for="q8_2">2 - Moderately</label>
                <input type="radio" id="q8_3" name="q8" value="3"><label for="q8_3">3 - Quite a bit</label>
                <input type="radio" id="q8_4" name="q8" value="4"><label for="q8_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">9. Feeling emotionally numb or shut down?</div>
                 <input type="radio" id="q9_0" name="q9" value="0" checked required><label for="q9_0">0 - Not at all</label>
                 <input type="radio" id="q9_1" name="q9" value="1"><label for="q9_1">1 - A little bit</label>
                 <input type="radio" id="q9_2" name="q9" value="2"><label for="q9_2">2 - Moderately</label>
                 <input type="radio" id="q9_3" name="q9" value="3"><label for="q9_3">3 - Quite a bit</label>
                 <input type="radio" id="q9_4" name="q9" value="4"><label for="q9_4">4 - Extremely</label>
            </div>

             <div class="question-container">
                 <div class="question-title">10. Feeling like a failure, worthless, or ashamed?</div>
                 <input type="radio" id="q10_0" name="q10" value="0" checked required><label for="q10_0">0 - Not at all</label>
                 <input type="radio" id="q10_1" name="q10" value="1"><label for="q10_1">1 - A little bit</label>
                 <input type="radio" id="q10_2" name="q10" value="2"><label for="q10_2">2 - Moderately</label>
                 <input type="radio" id="q10_3" name="q10" value="3"><label for="q10_3">3 - Quite a bit</label>
                 <input type="radio" id="q10_4" name="q10" value="4"><label for="q10_4">4 - Extremely</label>
            </div>

             <div class="question-container">
                 <div class="question-title">11. Feeling guilty or blaming yourself for the stressful experience(s) or its consequences?</div>
                 <input type="radio" id="q11_0" name="q11" value="0" checked required><label for="q11_0">0 - Not at all</label>
                 <input type="radio" id="q11_1" name="q11" value="1"><label for="q11_1">1 - A little bit</label>
                 <input type="radio" id="q11_2" name="q11" value="2"><label for="q11_2">2 - Moderately</label>
                 <input type="radio" id="q11_3" name="q11" value="3"><label for="q11_3">3 - Quite a bit</label>
                 <input type="radio" id="q11_4" name="q11" value="4"><label for="q11_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">12. Having difficulty feeling close to other people?</div>
                <input type="radio" id="q12_0" name="q12" value="0" checked required><label for="q12_0">0 - Not at all</label>
                <input type="radio" id="q12_1" name="q12" value="1"><label for="q12_1">1 - A little bit</label>
                <input type="radio" id="q12_2" name="q12" value="2"><label for="q12_2">2 - Moderately</label>
                <input type="radio" id="q12_3" name="q12" value="3"><label for="q12_3">3 - Quite a bit</label>
                <input type="radio" id="q12_4" name="q12" value="4"><label for="q12_4">4 - Extremely</label>
            </div>

             <div class="question-container">
                 <div class="question-title">13. Having problems maintaining relationships or feeling distant from others?</div>
                 <input type="radio" id="q13_0" name="q13" value="0" checked required><label for="q13_0">0 - Not at all</label>
                 <input type="radio" id="q13_1" name="q13" value="1"><label for="q13_1">1 - A little bit</label>
                 <input type="radio" id="q13_2" name="q13" value="2"><label for="q13_2">2 - Moderately</label>
                 <input type="radio" id="q13_3" name="q13" value="3"><label for="q13_3">3 - Quite a bit</label>
                 <input type="radio" id="q13_4" name="q13" value="4"><label for="q13_4">4 - Extremely</label>
            </div>

            <div class="question-container">
                <div class="question-title">14. How much have these DSO symptoms (Questions 8-13) interfered with your ability to function in important areas of life (e.g., work, school, relationships, daily activities)?</div>
                <input type="radio" id="q14_0" name="q14" value="0" checked required><label for="q14_0">0 - Not at all</label>
                <input type="radio" id="q14_1" name="q14" value="1"><label for="q14_1">1 - A little bit</label>
                <input type="radio" id="q14_2" name="q14" value="2"><label for="q14_2">2 - Moderately</label>
                <input type="radio" id="q14_3" name="q14" value="3"><label for="q14_3">3 - Quite a bit</label>
                <input type="radio" id="q14_4" name="q14" value="4"><label for="q14_4">4 - Extremely</label>
            </div>
        </div>

        <div class="required-message" id="requiredMessage">
            Please answer all questions before submitting.
        </div>

        <input type="submit" value="Calculate Score & View Results">

    </form>

     <div id="resultsContainer">
          <div id="results">
               </div>
          <div class="results-disclaimer">
               <strong>Important Reminder:</strong> These results are based on the ITQ scoring algorithm and indicate potential symptom patterns. They are not a formal diagnosis. A diagnosis of PTSD or CPTSD can only be made by a qualified mental health professional after a comprehensive assessment. Please discuss these results with a healthcare provider if you have concerns.
          </div>
     </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('itqForm');
            const scoreDisplay = document.getElementById('current-score');
            const resultsDiv = document.getElementById('results');
            const resultsContainer = document.getElementById('resultsContainer');
            const requiredMessage = document.getElementById('requiredMessage');
            const questionCount = 14; // Total number of scored questions

            // Function to update the total score display dynamically
            function updateLiveScore() {
                let currentTotalScore = 0;
                const checkedRadios = form.querySelectorAll('input[type="radio"]:checked');
                checkedRadios.forEach(radio => {
                    // Only sum scores for Q1-Q6 and Q8-Q13 for the live total
                    const questionNum = parseInt(radio.name.substring(1));
                    if ((questionNum >= 1 && questionNum <= 6) || (questionNum >= 8 && questionNum <= 13)) {
                        currentTotalScore += parseInt(radio.value);
                    }
                });
                scoreDisplay.textContent = currentTotalScore;
            }

             // Function to get score for a specific question
             function getScore(questionName) {
                 const selected = form.querySelector(`input[name="${questionName}"]:checked`);
                 return selected ? parseInt(selected.value) : 0; // Return 0 if not answered (though validation should prevent this)
             }


            // Function to calculate and display final results
            function calculateAndDisplayResults(event) {
                event.preventDefault(); // Prevent default form submission

                 // --- Validation ---
                 let allAnswered = true;
                 const radioGroups = {};
                 form.querySelectorAll('input[type="radio"]').forEach(radio => {
                     radioGroups[radio.name] = true; // Collect unique group names
                 });

                 if (Object.keys(radioGroups).length !== questionCount || form.querySelectorAll('input[type="radio"]:checked').length !== questionCount) {
                     allAnswered = false;
                 }


                 if (!allAnswered) {
                     requiredMessage.style.display = 'block';
                     resultsContainer.style.display = 'none'; // Hide results if validation fails
                     window.scrollTo({ top: requiredMessage.offsetTop - 100, behavior: 'smooth' }); // Scroll to message
                     return; // Stop processing
                 } else {
                     requiredMessage.style.display = 'none'; // Hide message if validation passes
                 }

                // --- Get Scores ---
                const scores = {};
                for (let i = 1; i <= questionCount; i++) {
                    scores[`q${i}`] = getScore(`q${i}`);
                }

                // --- Calculate Sub-scores ---
                const ptsdScore = scores.q1 + scores.q2 + scores.q3 + scores.q4 + scores.q5 + scores.q6;
                const dsoScore = scores.q8 + scores.q9 + scores.q10 + scores.q11 + scores.q12 + scores.q13;
                const totalSymptomScore = ptsdScore + dsoScore; // Score displayed in floating box
                const functionalImpairmentScore = scores.q7 + scores.q14;

                // --- Determine Diagnostic Indicators based on ITQ rules ---
                // PTSD Criteria
                const meetsPTSDReexperiencing = scores.q1 >= 2 || scores.q2 >= 2;
                const meetsPTSDAvoidance = scores.q3 >= 2 || scores.q4 >= 2;
                const meetsPTSDThreat = scores.q5 >= 2 || scores.q6 >= 2;
                const meetsPTSDFunctionalImpairment = scores.q7 >= 2;
                const meetsPTSD = meetsPTSDReexperiencing && meetsPTSDAvoidance && meetsPTSDThreat && meetsPTSDFunctionalImpairment;

                 // DSO Criteria (for CPTSD)
                 const meetsDSOAffective = scores.q8 >= 2 || scores.q9 >= 2;
                 const meetsDSONegativeSelf = scores.q10 >= 2 || scores.q11 >= 2;
                 const meetsDSORelationships = scores.q12 >= 2 || scores.q13 >= 2;
                 const meetsDSOFunctionalImpairment = scores.q14 >= 2; // Separate functional impairment for DSO
                 const meetsDSO = meetsDSOAffective && meetsDSONegativeSelf && meetsDSORelationships && meetsDSOFunctionalImpairment;

                 // CPTSD Criteria
                 const meetsCPTSD = meetsPTSD && meetsDSO; // Requires meeting both PTSD and DSO criteria


                // --- Display Results ---
                let resultsHTML = `<h2>Results Summary:</h2>`;
                resultsHTML += `<span><strong>Total Symptom Score (Q1-6 + Q8-13):</strong> ${totalSymptomScore} / 48<br></span>`;
                resultsHTML += `<span><strong>PTSD Symptom Score (Q1-6):</strong> ${ptsdScore} / 24<br></span>`;
                resultsHTML += `<span><strong>DSO Symptom Score (Q8-13):</strong> ${dsoScore} / 24 <br></span>`;
                resultsHTML += `<span><strong>Functional Impairment Score (Q7 + Q14):</strong> ${functionalImpairmentScore} / 8</span>`;
                resultsHTML += `<hr style="margin: 15px 0;">`; // Separator

                 resultsHTML += `<h3>Diagnostic Indicators (based on ITQ criteria):</h3>`;

                 if (meetsCPTSD) {
                     resultsHTML += `<span class="diagnosis">Indicators for CPTSD are met.<br></span>`;
                     resultsHTML += `<span> - PTSD criteria met: Yes<br></span>`;
                     resultsHTML += `<span> - DSO criteria met: Yes</span>`;
                 } else if (meetsPTSD) {
                     resultsHTML += `<span class="diagnosis">Indicators for PTSD (but not CPTSD) are met.</span>`;
                     resultsHTML += `<span> - PTSD criteria met: Yes</span>`;
                     resultsHTML += `<span> - DSO criteria met: No</span>`;
                 } else {
                     resultsHTML += `<span class="diagnosis">Indicators for PTSD or CPTSD are not met based on these responses.<br></span>`;
                     resultsHTML += `<span> - PTSD criteria met: No<br></span>`;
                       // Provide more detail on why PTSD wasn't met
                      if (!meetsPTSDReexperiencing) resultsHTML += `<span> &nbsp;&nbsp; - Re-experiencing criteria (Q1 or Q2 >= 2) not met.<br></span>`;
                      if (!meetsPTSDAvoidance) resultsHTML += `<span> &nbsp;&nbsp; - Avoidance criteria (Q3 or Q4 >= 2) not met.<br></span>`;
                      if (!meetsPTSDThreat) resultsHTML += `<span> &nbsp;&nbsp; - Sense of Threat criteria (Q5 or Q6 >= 2) not met.<br></span>`;
                      if (!meetsPTSDFunctionalImpairment) resultsHTML += `<span> &nbsp;&nbsp; - PTSD Functional Impairment criteria (Q7 >= 2) not met.</span>`;

                     resultsHTML += `<span> - DSO criteria met: ${meetsDSO ? 'Yes' : 'No'}</span>`;
                       // Only detail DSO if relevant (i.e., PTSD wasn't met but DSO might be)
                       if (meetsDSO) {
                          if (!meetsDSOAffective) resultsHTML += `<span> &nbsp;&nbsp; - Affective Dysregulation criteria (Q8 or Q9 >= 2) not met.</span>`;
                          if (!meetsDSONegativeSelf) resultsHTML += `<span> &nbsp;&nbsp; - Negative Self-Concept criteria (Q10 or Q11 >= 2) not met.</span>`;
                          if (!meetsDSORelationships) resultsHTML += `<span> &nbsp;&nbsp; - Disturbances in Relationships criteria (Q12 or Q13 >= 2) not met.</span>`;
                          if (!meetsDSOFunctionalImpairment) resultsHTML += `<span> &nbsp;&nbsp; - DSO Functional Impairment criteria (Q14 >= 2) not met.</span>`;
                       }
                 }


                resultsDiv.innerHTML = resultsHTML;
                resultsContainer.style.display = 'block'; // Show the results area

                // Scroll to results smoothly
                window.scrollTo({ top: resultsContainer.offsetTop - 20, behavior: 'smooth' });
            }

            // Add event listeners
            form.addEventListener('input', updateLiveScore); // Update live score on any input change
            form.addEventListener('submit', calculateAndDisplayResults);

            // Initial score calculation on page load (will be 0)
            updateLiveScore();
        });
    </script>

</body>
<?php include '../footer.php';?>

</html>