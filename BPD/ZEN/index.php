<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Zanarini Rating Scale for BPD</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" type="image/x-icon" href="../../favicon.png">
    <script>
        // Function to set today's date when the page loads
            window.onload = function() {
                // Get today's date
                const today = new Date();
                    
                // Format as day/month/year
                const year = today.getFullYear();
                const month = String(today.getMonth() + 1).padStart(2, '0');
                const day = String(today.getDate()).padStart(2, '0');
                    
                // Set the value of the date input
                document.getElementById('Date').value = `${day}/${month}/${year}`;
            }
    </script>
</head>

<?php include '../../nav.php';?>
<body>
    <h1>Zanarini Rating Scale for Borderline Personality Disorder: Self Report Version</h1>
    <?php include '../../disclaimer.php';?>
    <h2>This is an indicative test and not a diagnostic tool.</h2>
    <p> High Scores (28-36): Indicate a high level of BPD symptoms and suggest the <b>need for further evaluation</b>
    and potentially treatment.</p>
    <p>Moderate Scores (16-27): Suggest the presence of BPD symptoms, and <b>further assessment is
    recommended</b> to determine if a diagnosis of BPD is appropriate.</p>
    <p>Lower Scores (0-15): Indicate that the level of symptoms are not consistent with BPD, and further
    evaluation may not be necessary</p>
    <div id="score-display">
        Total Score: <span id="current-score">0</span>
    </div>
    
    <form action="results.php" method="post">
        <div class="question-container">
            <div class="question-title">About you</div>
                Name: <input type="text" name="Name" required>
                <input type="text" id="Date" name="Date" required hidden="true">     
            </div>
        </div>
        
        <div class="question-container">
            <div class="question-title">1. Angry Feelings or Acts</div>
            <div>
                <input type="radio" id="anger_0" name="anger" value="0" checked>
                <label for="anger_0">I have not felt angry or acted in an angry manner</label>
            
                <input type="radio" id="anger_1" name="anger" value="1">
                <label for="anger_1">I have occasionally felt irritated, or snapped at people, or been sarcastic</label>
            
                <input type="radio" id="anger_2" name="anger" value="2">
                <label for="anger_2">I have often felt irritated, or snapped at people, or been sarcastic</label>
            
                <input type="radio" id="anger_3" name="anger" value="3">
                <label for="anger_3">I have often felt enraged or had a number of temper outbursts</label>
            
                <input type="radio" id="anger_4" name="anger" value="4">
                <label for="anger_4">I have felt enraged most of the time or had a temper outburst every day</label>
            </div>
        </div>
            
            <div class="question-container">
                <div class="question-title">2. Moodiness</div>
                <div>
                    <input type="radio" id="moodiness_0" name="moodiness" value="0" checked>
                    <label for="moodiness_0">I have not felt moody</label>
            
                    <input type="radio" id="moodiness_1" name="moodiness" value="1">
                    <label for="moodiness_1">I have occasionally felt moody</label>
            
                    <input type="radio" id="moodiness_2" name="moodiness" value="2">
                    <label for="moodiness_2">I have often felt moody</label>
            
                    <input type="radio" id="moodiness_3" name="moodiness" value="3">
                    <label for="moodiness_3">I have often felt very moody</label>
            
                    <input type="radio" id="moodiness_4" name="moodiness" value="4">
                    <label for="moodiness_4">I have felt very moody most of the time</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">3. Emptiness</div>
                <div>
                    <input type="radio" id="emptiness_0" name="emptiness" value="0" checked>
                    <label for="emptiness_0">I have not felt empty</label>
            
                    <input type="radio" id="emptiness_1" name="emptiness" value="1">
                    <label for="emptiness_1">I have occasionally felt empty for brief periods of time</label>
            
                    <input type="radio" id="emptiness_2" name="emptiness" value="2">
                    <label for="emptiness_2">I have often felt empty for brief periods of time</label>
            
                    <input type="radio" id="emptiness_3" name="emptiness" value="3">
                    <label for="emptiness_3">I have often felt empty for hours at a time</label>
            
                    <input type="radio" id="emptiness_4" name="emptiness" value="4">
                    <label for="emptiness_4">I have felt empty most of the time</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">4. Identity Disturbance</div>
                <div>
                    <input type="radio" id="identity_0" name="identity_disturbance" value="0" checked>
                    <label for="identity_0">I have had a good idea of who I am</label>
            
                    <input type="radio" id="identity_1" name="identity_disturbance" value="1">
                    <label for="identity_1">I have occasionally been unsure of who I am</label>
            
                    <input type="radio" id="identity_2" name="identity_disturbance" value="2">
                    <label for="identity_2">I have often been unsure of who I am</label>
            
                    <input type="radio" id="identity_3" name="identity_disturbance" value="3">
                    <label for="identity_3">I have often felt that I had no idea of who I am</label>
            
                    <input type="radio" id="identity_4" name="identity_disturbance" value="4">
                    <label for="identity_4">I have felt that I had no idea of who I am most of the time</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">5. Physically Self-destructive Acts</div>
                <div>
                    <input type="radio" id="selfdest_0" name="self_destructive_acts" value="0" checked>
                    <label for="selfdest_0">I have not deliberately hurt myself physically, or threatened to kill myself, or made a suicide attempt</label>
            
                    <input type="radio" id="selfdest_1" name="self_destructive_acts" value="1">
                    <label for="selfdest_1">I mentioned thinking of killing myself once, or scratched or punched myself once</label>
            
                    <input type="radio" id="selfdest_2" name="self_destructive_acts" value="2">
                    <label for="selfdest_2">I threatened to kill myself once, or scratched or punched myself 2-3 times</label>
            
                    <input type="radio" id="selfdest_3" name="self_destructive_acts" value="3">
                    <label for="selfdest_3">I have threatened suicide a number of times, or cut or burned myself once, or made one suicide attempt that was not very serious</label>
            
                    <input type="radio" id="selfdest_4" name="self_destructive_acts" value="4">
                    <label for="selfdest_4">I have cut or burned myself 2-3 times or made a serious suicide attempt</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">6. Other Forms of Impulsivity</div>
                <div>
                    <input type="radio" id="impuls_0" name="impulsivity" value="0" checked>
                    <label for="impuls_0">I have not acted impulsively</label>
            
                    <input type="radio" id="impuls_1" name="impulsivity" value="1">
                    <label for="impuls_1">I have acted impulsively 1-2 times</label>
            
                    <input type="radio" id="impuls_2" name="impulsivity" value="2">
                    <label for="impuls_2">I have acted impulsively 3-4 times</label>
            
                    <input type="radio" id="impuls_3" name="impulsivity" value="3">
                    <label for="impuls_3">I have acted impulsively 5-6 times</label>
            
                    <input type="radio" id="impuls_4" name="impulsivity" value="4">
                    <label for="impuls_4">I have acted impulsively every day</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">7. Suspiciousness or Feelings of Unreality</div>
                <div>
                    <input type="radio" id="susp_0" name="suspiciousness" value="0" checked>
                    <label for="susp_0">I have not been suspicious of others or felt separated from my feelings</label>
            
                    <input type="radio" id="susp_1" name="suspiciousness" value="1">
                    <label for="susp_1">I have occasionally been suspicious of others or occasionally felt separated from my feelings</label>
            
                    <input type="radio" id="susp_2" name="suspiciousness" value="2">
                    <label for="susp_2">I have often been suspicious of others or often felt separated from my feelings</label>
            
                    <input type="radio" id="susp_3" name="suspiciousness" value="3">
                    <label for="susp_3">I have often very suspicious of others or often felt very separated from my feelings</label>
            
                    <input type="radio" id="susp_4" name="suspiciousness" value="4">
                    <label for="susp_4">I have been very suspicious of others every day or felt very separated from my feelings most of the time</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">8. Efforts to Avoid Abandonment</div>
                <div>
                    <input type="radio" id="abandon_0" name="abandonment_avoidance" value="0" checked>
                    <label for="abandon_0">I have not felt the need to do anything to avoid being abandoned</label>
            
                    <input type="radio" id="abandon_1" name="abandonment_avoidance" value="1">
                    <label for="abandon_1">I have occasionally done things no one knows about to reassure myself that no one is going to leave me</label>
            
                    <input type="radio" id="abandon_2" name="abandonment_avoidance" value="2">
                    <label for="abandon_2">I have often done things no one knows about to reassure myself that no one is going to leave me</label>
            
                    <input type="radio" id="abandon_3" name="abandonment_avoidance" value="3">
                    <label for="abandon_3">I have often called friends or relatives to reassure myself they still care or repeatedly begged them not to leave me</label>
            
                    <input type="radio" id="abandon_4" name="abandonment_avoidance" value="4">
                    <label for="abandon_4">I have called friends or relatives every day to reassure myself they still care or begged them every day not to leave me</label>
                </div>
            </div>
            
            <div class="question-container">
                <div class="question-title">9. Unstable Relationships</div>
                <div>
                    <input type="radio" id="unstable_0" name="unstable_relationships" value="0" checked>
                    <label for="unstable_0">I have not had any conflict in my close relationships</label>
            
                    <input type="radio" id="unstable_1" name="unstable_relationships" value="1">
                    <label for="unstable_1">I have occasionally argued with someone I am close to or threatened to end our relationship</label>
            
                    <input type="radio" id="unstable_2" name="unstable_relationships" value="2">
                    <label for="unstable_2">I have often argued with someone I am close to or repeatedly threatened to end our relationship</label>
            
                    <input type="radio" id="unstable_3" name="unstable_relationships" value="3">
                    <label for="unstable_3">I have often had intense arguments with someone I am close to or impulsively broken up with someone important to me</label>
            
                    <input type="radio" id="unstable_4" name="unstable_relationships" value="4">
                    <label for="unstable_4">I have had intense arguments every day with someone I am close to or impulsively broken up a number of times with someone important to me</label>
                </div>
            </div>
            
            <input type="submit" value="Submit Assessment">
            
            </form>
<script>
    // Wait for the DOM to be fully loaded
    document.addEventListener('DOMContentLoaded', function() {

        const form = document.querySelector('form'); // Get the form
        const scoreElement = document.getElementById('current-score'); // Get the score span
        const scoreDisplayDiv = document.getElementById('score-display'); // *** Get the score display DIV ***
        const defaultBackgroundColor = scoreDisplayDiv.style.backgroundColor || window.getComputedStyle(scoreDisplayDiv).backgroundColor; // Store the default color

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

        // Function to update the score display AND its color
        function updateScoreDisplay() {
            const currentTotal = calculateScore();
            scoreElement.textContent = currentTotal; // Update the text content of the score span

            // --- Add Color Change Logic ---
            if (currentTotal >= 28) {
                scoreDisplayDiv.style.backgroundColor = 'red'; // Change background to red
                scoreElement.style.color = 'white'; // Make score text white for contrast
            } else if (currentTotal >= 16) {
                scoreDisplayDiv.style.backgroundColor = 'orange'; // Change background to orange
                scoreElement.style.color = ''; // Reset score text color to default (let CSS handle)
            } else {
                // Reset to default background color from CSS
                scoreDisplayDiv.style.backgroundColor = defaultBackgroundColor; // Use the stored default
                scoreElement.style.color = ''; // Reset score text color to default
            }
            // --- End Color Change Logic ---
        }

        // Add event listener to the form - recalculate on any change
        form.addEventListener('change', updateScoreDisplay);

        // Initial calculation when the page loads
        updateScoreDisplay();

    }); // End DOMContentLoaded listener
</script>
</body>
<?php include '../../footer.php';?>
</html>