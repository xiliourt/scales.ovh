<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../favicon.png">
    <title>WHODAS 2.0 Disability Assessment</title>
    <link rel="stylesheet" href="../style.css">
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
            // Format YYYY-MM-DD is standard for date inputs, but since it's hidden and just for submission, DD/MM/YYYY is fine if your backend expects it.
            document.getElementById('Date').value = `${day}/${month}/${year}`;
        }
    </script>
</head>
<?php include '../nav.php';?>
<style>
    body {
        font-family: 'Arial', sans-serif;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        line-height: 1.6;
        background-color: #f4f4f8;
        color: #333;
    }
</style>
<body>
    <h1>WHODAS 2.0 Disability Assessment</h1>
    <div class="disclaimer">
        <strong>IMPORTANT DISCLAIMER</strong>
        This tool is usually filled out with a professional's guidance and is not usually conducted as a self assessment. Please seek clarification from your occupational therapist, psychiatrist, mental health care professional, or doctor if relevant.
    </div>
    <br>
    <div id="score-display">
        Total Score: <span id="current-score">0</span>
    </div>
    <form id="whodas-form" method="post" action="/whodas/results.php">
        <div class="section">
            <h2>About you</h2>
            <div>
                <div class="text-label">Name:</div>
                <input type="text" name="Name" required>
            </div>
            <div>
                <div class="text-label">Age:</div>
                <input type="text" id="AgeInput" name="Age" required>
            </div>
            <input type="text" id="Date" name="Date" required hidden="true">
        </div>

        <div class="section">
            <h2>D1: Understanding & Communicating</h2>
            <div class="question-container">
                <div class="question-title">d1_1 How difficult was it to concentrate on doing something for 10 minutes?
                </div>
                <div>
                    <input type="radio" id="d1_1_1" name="d1_1" value="1" checked="checked">
                    <label for="d1_1_1">No difficulty</label>
                    <input type="radio" id="d1_1_2" name="d1_1" value="2"> <label for="d1_1_2">Mild difficulty</label>
                    <input type="radio" id="d1_1_3" name="d1_1" value="3">
                    <label for="d1_1_3">Moderate difficulty</label>
                    <input type="radio" id="d1_1_4" name="d1_1" value="4"> <label for="d1_1_4">Severe difficulty</label>
                    <input type="radio" id="d1_1_5" name="d1_1" value="5">
                    <label for="d1_1_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d1_2 How difficult was it to remember important things?</div>
                <div>
                    <input type="radio" id="d1_2_1" name="d1_2" value="1" checked="checked">
                    <label for="d1_2_1">No difficulty</label>
                    <input type="radio" id="d1_2_2" name="d1_2" value="2"> <label for="d1_2_2">Mild difficulty</label>
                    <input type="radio" id="d1_2_3" name="d1_2" value="3">
                    <label for="d1_2_3">Moderate difficulty</label>
                    <input type="radio" id="d1_2_4" name="d1_2" value="4"> <label for="d1_2_4">Severe difficulty</label>
                    <input type="radio" id="d1_2_5" name="d1_2" value="5">
                    <label for="d1_2_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d1_3 How difficult was it to learn a new task (e.g., learning how to get to
                    a new place)?</div>
                <div>
                    <input type="radio" id="d1_3_1" name="d1_3" value="1" checked="checked">
                    <label for="d1_3_1">No difficulty</label>
                    <input type="radio" id="d1_3_2" name="d1_3" value="2"> <label for="d1_3_2">Mild difficulty</label>
                    <input type="radio" id="d1_3_3" name="d1_3" value="3">
                    <label for="d1_3_3">Moderate difficulty</label>
                    <input type="radio" id="d1_3_4" name="d1_3" value="4"> <label for="d1_3_4">Severe difficulty</label>
                    <input type="radio" id="d1_3_5" name="d1_3" value="5">
                    <label for="d1_3_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d1_4 How difficult was it to understand what people were saying?</div>
                <div>
                    <input type="radio" id="d1_4_1" name="d1_4" value="1" checked="checked">
                    <label for="d1_4_1">No difficulty</label>
                    <input type="radio" id="d1_4_2" name="d1_4" value="2"> <label for="d1_4_2">Mild difficulty</label>
                    <input type="radio" id="d1_4_3" name="d1_4" value="3">
                    <label for="d1_4_3">Moderate difficulty</label>
                    <input type="radio" id="d1_4_4" name="d1_4" value="4"> <label for="d1_4_4">Severe difficulty</label>
                    <input type="radio" id="d1_4_5" name="d1_4" value="5">
                    <label for="d1_4_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d1_5 How difficult was it to start and maintain a conversation?</div>
                <div>
                    <input type="radio" id="d1_5_1" name="d1_5" value="1" checked="checked">
                    <label for="d1_5_1">No difficulty</label>
                    <input type="radio" id="d1_5_2" name="d1_5" value="2"> <label for="d1_5_2">Mild difficulty</label>
                    <input type="radio" id="d1_5_3" name="d1_5" value="3">
                    <label for="d1_5_3">Moderate difficulty</label>
                    <input type="radio" id="d1_5_4" name="d1_5" value="4"> <label for="d1_5_4">Severe difficulty</label>
                    <input type="radio" id="d1_5_5" name="d1_5" value="5">
                    <label for="d1_5_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d1_6 How difficult was it to communicate with people you do not know well?
                </div>
                <div>
                    <input type="radio" id="d1_6_1" name="d1_6" value="1" checked="checked">
                    <label for="d1_6_1">No difficulty</label>
                    <input type="radio" id="d1_6_2" name="d1_6" value="2"> <label for="d1_6_2">Mild difficulty</label>
                    <input type="radio" id="d1_6_3" name="d1_6" value="3">
                    <label for="d1_6_3">Moderate difficulty</label>
                    <input type="radio" id="d1_6_4" name="d1_6" value="4"> <label for="d1_6_4">Severe difficulty</label>
                    <input type="radio" id="d1_6_5" name="d1_6" value="5">
                    <label for="d1_6_5">Extreme difficulty</label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>D2: Getting Around</h2>
            <div class="question-container">
                <div class="question-title">d2_1 How difficult was it to stand for long periods like 30 minutes?</div>
                <div>
                    <input type="radio" id="d2_1_1" name="d2_1" value="1" checked="checked">
                    <label for="d2_1_1">No difficulty</label>
                    <input type="radio" id="d2_1_2" name="d2_1" value="2"> <label for="d2_1_2">Mild difficulty</label>
                    <input type="radio" id="d2_1_3" name="d2_1" value="3">
                    <label for="d2_1_3">Moderate difficulty</label>
                    <input type="radio" id="d2_1_4" name="d2_1" value="4"> <label for="d2_1_4">Severe difficulty</label>
                    <input type="radio" id="d2_1_5" name="d2_1" value="5">
                    <label for="d2_1_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d2_2 How difficult was it to stand up from a sitting position?</div>
                <div>
                    <input type="radio" id="d2_2_1" name="d2_2" value="1" checked="checked">
                    <label for="d2_2_1">No difficulty</label>
                    <input type="radio" id="d2_2_2" name="d2_2" value="2"> <label for="d2_2_2">Mild difficulty</label>
                    <input type="radio" id="d2_2_3" name="d2_2" value="3">
                    <label for="d2_2_3">Moderate difficulty</label>
                    <input type="radio" id="d2_2_4" name="d2_2" value="4"> <label for="d2_2_4">Severe difficulty</label>
                    <input type="radio" id="d2_2_5" name="d2_2" value="5">
                    <label for="d2_2_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d2_3 How difficult was it to move around inside your home?</div>
                <div>
                    <input type="radio" id="d2_3_1" name="d2_3" value="1" checked="checked">
                    <label for="d2_3_1">No difficulty</label>
                    <input type="radio" id="d2_3_2" name="d2_3" value="2"> <label for="d2_3_2">Mild difficulty</label>
                    <input type="radio" id="d2_3_3" name="d2_3" value="3">
                    <label for="d2_3_3">Moderate difficulty</label>
                    <input type="radio" id="d2_3_4" name="d2_3" value="4"> <label for="d2_3_4">Severe difficulty</label>
                    <input type="radio" id="d2_3_5" name="d2_3" value="5">
                    <label for="d2_3_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d2_4 How difficult was it to move around outside your home?</div>
                <div>
                    <input type="radio" id="d2_4_1" name="d2_4" value="1" checked="checked">
                    <label for="d2_4_1">No difficulty</label>
                    <input type="radio" id="d2_4_2" name="d2_4" value="2"> <label for="d2_4_2">Mild difficulty</label>
                    <input type="radio" id="d2_4_3" name="d2_4" value="3">
                    <label for="d2_4_3">Moderate difficulty</label>
                    <input type="radio" id="d2_4_4" name="d2_4" value="4"> <label for="d2_4_4">Severe difficulty</label>
                    <input type="radio" id="d2_4_5" name="d2_4" value="5">
                    <label for="d2_4_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d2_5 How difficult was it to walk a long distance like a kilometer (or
                    equivalent)?</div>
                <div>
                    <input type="radio" id="d2_5_1" name="d2_5" value="1" checked="checked">
                    <label for="d2_5_1">No difficulty</label>
                    <input type="radio" id="d2_5_2" name="d2_5" value="2"> <label for="d2_5_2">Mild difficulty</label>
                    <input type="radio" id="d2_5_3" name="d2_5" value="3">
                    <label for="d2_5_3">Moderate difficulty</label>
                    <input type="radio" id="d2_5_4" name="d2_5" value="4"> <label for="d2_5_4">Severe difficulty</label>
                    <input type="radio" id="d2_5_5" name="d2_5" value="5">
                    <label for="d2_5_5">Extreme difficulty</label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>D3: Self-Care</h2>
            <div class="question-container">
                <div class="question-title">d3_1 How difficult was it to wash your whole body?</div>
                <div>
                    <input type="radio" id="d3_1_1" name="d3_1" value="1" checked="checked">
                    <label for="d3_1_1">No difficulty</label>
                    <input type="radio" id="d3_1_2" name="d3_1" value="2"> <label for="d3_1_2">Mild difficulty</label>
                    <input type="radio" id="d3_1_3" name="d3_1" value="3">
                    <label for="d3_1_3">Moderate difficulty</label>
                    <input type="radio" id="d3_1_4" name="d3_1" value="4"> <label for="d3_1_4">Severe difficulty</label>
                    <input type="radio" id="d3_1_5" name="d3_1" value="5">
                    <label for="d3_1_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d3_2 How difficult was it to get dressed?</div>
                <div>
                    <input type="radio" id="d3_2_1" name="d3_2" value="1" checked="checked">
                    <label for="d3_2_1">No difficulty</label>
                    <input type="radio" id="d3_2_2" name="d3_2" value="2"> <label for="d3_2_2">Mild difficulty</label>
                    <input type="radio" id="d3_2_3" name="d3_2" value="3">
                    <label for="d3_2_3">Moderate difficulty</label>
                    <input type="radio" id="d3_2_4" name="d3_2" value="4"> <label for="d3_2_4">Severe difficulty</label>
                    <input type="radio" id="d3_2_5" name="d3_2" value="5">
                    <label for="d3_2_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d3_3 How difficult was it to eat?</div>
                <div>
                    <input type="radio" id="d3_3_1" name="d3_3" value="1" checked="checked">
                    <label for="d3_3_1">No difficulty</label>
                    <input type="radio" id="d3_3_2" name="d3_3" value="2"> <label for="d3_3_2">Mild difficulty</label>
                    <input type="radio" id="d3_3_3" name="d3_3" value="3">
                    <label for="d3_3_3">Moderate difficulty</label>
                    <input type="radio" id="d3_3_4" name="d3_3" value="4"> <label for="d3_3_4">Severe difficulty</label>
                    <input type="radio" id="d3_3_5" name="d3_3" value="5">
                    <label for="d3_3_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d3_4 How difficult was it to stay by yourself for a few days?</div>
                <div>
                    <input type="radio" id="d3_4_1" name="d3_4" value="1" checked="checked">
                    <label for="d3_4_1">No difficulty</label>
                    <input type="radio" id="d3_4_2" name="d3_4" value="2"> <label for="d3_4_2">Mild difficulty</label>
                    <input type="radio" id="d3_4_3" name="d3_4" value="3">
                    <label for="d3_4_3">Moderate difficulty</label>
                    <input type="radio" id="d3_4_4" name="d3_4" value="4"> <label for="d3_4_4">Severe difficulty</label>
                    <input type="radio" id="d3_4_5" name="d3_4" value="5">
                    <label for="d3_4_5">Extreme difficulty</label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>D4: Getting Along with People</h2>
            <div class="question-container">
                <div class="question-title">d4_1 How difficult was it to deal with people you do not know?</div>
                <div>
                    <input type="radio" id="d4_1_1" name="d4_1" value="1" checked="checked">
                    <label for="d4_1_1">No difficulty</label>
                    <input type="radio" id="d4_1_2" name="d4_1" value="2"> <label for="d4_1_2">Mild difficulty</label>
                    <input type="radio" id="d4_1_3" name="d4_1" value="3">
                    <label for="d4_1_3">Moderate difficulty</label>
                    <input type="radio" id="d4_1_4" name="d4_1" value="4"> <label for="d4_1_4">Severe difficulty</label>
                    <input type="radio" id="d4_1_5" name="d4_1" value="5">
                    <label for="d4_1_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d4_2 How difficult was it to maintain a friendship?</div>
                <div>
                    <input type="radio" id="d4_2_1" name="d4_2" value="1" checked="checked">
                    <label for="d4_2_1">No difficulty</label>
                    <input type="radio" id="d4_2_2" name="d4_2" value="2"> <label for="d4_2_2">Mild difficulty</label>
                    <input type="radio" id="d4_2_3" name="d4_2" value="3">
                    <label for="d4_2_3">Moderate difficulty</label>
                    <input type="radio" id="d4_2_4" name="d4_2" value="4"> <label for="d4_2_4">Severe difficulty</label>
                    <input type="radio" id="d4_2_5" name="d4_2" value="5">
                    <label for="d4_2_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d4_3 How difficult was it to get along with people who are close to you?
                </div>
                <div>
                    <input type="radio" id="d4_3_1" name="d4_3" value="1" checked="checked">
                    <label for="d4_3_1">No difficulty</label>
                    <input type="radio" id="d4_3_2" name="d4_3" value="2"> <label for="d4_3_2">Mild difficulty</label>
                    <input type="radio" id="d4_3_3" name="d4_3" value="3">
                    <label for="d4_3_3">Moderate difficulty</label>
                    <input type="radio" id="d4_3_4" name="d4_3" value="4"> <label for="d4_3_4">Severe difficulty</label>
                    <input type="radio" id="d4_3_5" name="d4_3" value="5">
                    <label for="d4_3_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d4_4 How difficult was it to make and keep friends?</div>
                <div>
                    <input type="radio" id="d4_4_1" name="d4_4" value="1" checked="checked">
                    <label for="d4_4_1">No difficulty</label>
                    <input type="radio" id="d4_4_2" name="d4_4" value="2"> <label for="d4_4_2">Mild difficulty</label>
                    <input type="radio" id="d4_4_3" name="d4_4" value="3">
                    <label for="d4_4_3">Moderate difficulty</label>
                    <input type="radio" id="d4_4_4" name="d4_4" value="4"> <label for="d4_4_4">Severe difficulty</label>
                    <input type="radio" id="d4_4_5" name="d4_4" value="5">
                    <label for="d4_4_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d4_5 How difficult was it to repair and maintain close relationships?</div>
                <div>
                    <input type="radio" id="d4_5_1" name="d4_5" value="1" checked="checked">
                    <label for="d4_5_1">No difficulty</label>
                    <input type="radio" id="d4_5_2" name="d4_5" value="2"> <label for="d4_5_2">Mild difficulty</label>
                    <input type="radio" id="d4_5_3" name="d4_5" value="3">
                    <label for="d4_5_3">Moderate difficulty</label>
                    <input type="radio" id="d4_5_4" name="d4_5" value="4"> <label for="d4_5_4">Severe difficulty</label>
                    <input type="radio" id="d4_5_5" name="d4_5" value="5">
                    <label for="d4_5_5">Extreme difficulty</label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>D5-1: Life Activities - Household</h2>
            <div class="question-container">
                <div class="question-title">d5_1 How difficult was it to carry out your everyday work, school, or other
                    daily tasks?</div>
                <div>
                    <input type="radio" id="d5_1_1" name="d5_1" value="1" checked="checked">
                    <label for="d5_1_1">No difficulty</label>
                    <input type="radio" id="d5_1_2" name="d5_1" value="2"> <label for="d5_1_2">Mild difficulty</label>
                    <input type="radio" id="d5_1_3" name="d5_1" value="3">
                    <label for="d5_1_3">Moderate difficulty</label>
                    <input type="radio" id="d5_1_4" name="d5_1" value="4"> <label for="d5_1_4">Severe difficulty</label>
                    <input type="radio" id="d5_1_5" name="d5_1" value="5">
                    <label for="d5_1_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d5_2 How difficult was it to do your most important work, school, or other
                    tasks well?</div>
                <div>
                    <input type="radio" id="d5_2_1" name="d5_2" value="1" checked="checked">
                    <label for="d5_2_1">No difficulty</label>
                    <input type="radio" id="d5_2_2" name="d5_2" value="2"> <label for="d5_2_2">Mild difficulty</label>
                    <input type="radio" id="d5_2_3" name="d5_2" value="3">
                    <label for="d5_2_3">Moderate difficulty</label>
                    <input type="radio" id="d5_2_4" name="d5_2" value="4"> <label for="d5_2_4">Severe difficulty</label>
                    <input type="radio" id="d5_2_5" name="d5_2" value="5">
                    <label for="d5_2_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d5_3 How difficult was it to get all the work done that you needed to do?
                </div>
                <div>
                    <input type="radio" id="d5_3_1" name="d5_3" value="1" checked="checked">
                    <label for="d5_3_1">No difficulty</label>
                    <input type="radio" id="d5_3_2" name="d5_3" value="2"> <label for="d5_3_2">Mild difficulty</label>
                    <input type="radio" id="d5_3_3" name="d5_3" value="3">
                    <label for="d5_3_3">Moderate difficulty</label>
                    <input type="radio" id="d5_3_4" name="d5_3" value="4"> <label for="d5_3_4">Severe difficulty</label>
                    <input type="radio" id="d5_3_5" name="d5_3" value="5">
                    <label for="d5_3_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d5_4 How difficult was it to get your work done as quickly as needed?</div>
                <div>
                    <input type="radio" id="d5_4_1" name="d5_4" value="1" checked="checked">
                    <label for="d5_4_1">No difficulty</label>
                    <input type="radio" id="d5_4_2" name="d5_4" value="2"> <label for="d5_4_2">Mild difficulty</label>
                    <input type="radio" id="d5_4_3" name="d5_4" value="3">
                    <label for="d5_4_3">Moderate difficulty</label>
                    <input type="radio" id="d5_4_4" name="d5_4" value="4"> <label for="d5_4_4">Severe difficulty</label>
                    <input type="radio" id="d5_4_5" name="d5_4" value="5">
                    <label for="d5_4_5">Extreme difficulty</label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>D5-2: Life Activities - Work / School</h2>
            <div class="question-container">
                <div class="question-title">d5_5 How much of a problem did you have in doing your work or daily tasks?
                </div>
                <div>
                    <input type="radio" id="d5_5_1" name="d5_5" value="1" checked="checked">
                    <label for="d5_5_1">No problem</label>
                    <input type="radio" id="d5_5_2" name="d5_5" value="2"> <label for="d5_5_2">Mild problem</label>
                    <input type="radio" id="d5_5_3" name="d5_5" value="3"> <label for="d5_5_3">Moderate problem</label>
                    <input type="radio" id="d5_5_4" name="d5_5" value="4"> <label for="d5_5_4">Severe problem</label>
                    <input type="radio" id="d5_5_5" name="d5_5" value="5"> <label for="d5_5_5">Extreme problem</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d5_6 How much did you have to reduce your work or daily tasks?</div>
                <div>
                    <input type="radio" id="d5_6_1" name="d5_6" value="1" checked="checked">
                    <label for="d5_6_1">Not at all</label>
                    <input type="radio" id="d5_6_2" name="d5_6" value="2"> <label for="d5_6_2">Mild reduction</label>
                    <input type="radio" id="d5_6_3" name="d5_6" value="3">
                    <label for="d5_6_3">Moderate reduction</label>
                    <input type="radio" id="d5_6_4" name="d5_6" value="4"> <label for="d5_6_4">Severe reduction</label>
                    <input type="radio" id="d5_6_5" name="d5_6" value="5">
                    <label for="d5_6_5">Complete reduction</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d5_7 How much were you emotionally affected by your work or daily tasks?
                </div>
                <div>
                    <input type="radio" id="d5_7_1" name="d5_7" value="1" checked="checked">
                    <label for="d5_7_1">Not at all</label>
                    <input type="radio" id="d5_7_2" name="d5_7" value="2"> <label for="d5_7_2">Mildly affected</label>
                    <input type="radio" id="d5_7_3" name="d5_7" value="3">
                    <label for="d5_7_3">Moderately affected</label>
                    <input type="radio" id="d5_7_4" name="d5_7" value="4"> <label for="d5_7_4">Severely affected</label>
                    <input type="radio" id="d5_7_5" name="d5_7" value="5">
                    <label for="d5_7_5">Extremely affected</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d5_8 How much did you have to reduce your work or daily tasks because of
                    emotional reasons?</div>
                <div>
                    <input type="radio" id="d5_8_1" name="d5_8" value="1" checked="checked">
                    <label for="d5_8_1">Not at all</label>
                    <input type="radio" id="d5_8_2" name="d5_8" value="2"> <label for="d5_8_2">Mild reduction</label>
                    <input type="radio" id="d5_8_3" name="d5_8" value="3">
                    <label for="d5_8_3">Moderate reduction</label>
                    <input type="radio" id="d5_8_4" name="d5_8" value="4"> <label for="d5_8_4">Severe reduction</label>
                    <input type="radio" id="d5_8_5" name="d5_8" value="5">
                    <label for="d5_8_5">Complete reduction</label>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>D6: Participation in Society</h2>
            <div class="question-container">
                <div class="question-title">d6_1 How difficult was it to join in community activities?</div>
                <div>
                    <input type="radio" id="d6_1_1" name="d6_1" value="1" checked="checked">
                    <label for="d6_1_1">No difficulty</label>
                    <input type="radio" id="d6_1_2" name="d6_1" value="2"> <label for="d6_1_2">Mild difficulty</label>
                    <input type="radio" id="d6_1_3" name="d6_1" value="3">
                    <label for="d6_1_3">Moderate difficulty</label>
                    <input type="radio" id="d6_1_4" name="d6_1" value="4"> <label for="d6_1_4">Severe difficulty</label>
                    <input type="radio" id="d6_1_5" name="d6_1" value="5">
                    <label for="d6_1_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_2 How difficult was it to do things that really matter to you?</div>
                <div>
                    <input type="radio" id="d6_2_1" name="d6_2" value="1" checked="checked">
                    <label for="d6_2_1">No difficulty</label>
                    <input type="radio" id="d6_2_2" name="d6_2" value="2"> <label for="d6_2_2">Mild difficulty</label>
                    <input type="radio" id="d6_2_3" name="d6_2" value="3">
                    <label for="d6_2_3">Moderate difficulty</label>
                    <input type="radio" id="d6_2_4" name="d6_2" value="4"> <label for="d6_2_4">Severe difficulty</label>
                    <input type="radio" id="d6_2_5" name="d6_2" value="5">
                    <label for="d6_2_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_3 How difficult was it to live with dignity?</div>
                <div>
                    <input type="radio" id="d6_3_1" name="d6_3" value="1" checked="checked">
                    <label for="d6_3_1">No difficulty</label>
                    <input type="radio" id="d6_3_2" name="d6_3" value="2"> <label for="d6_3_2">Mild difficulty</label>
                    <input type="radio" id="d6_3_3" name="d6_3" value="3">
                    <label for="d6_3_3">Moderate difficulty</label>
                    <input type="radio" id="d6_3_4" name="d6_3" value="4"> <label for="d6_3_4">Severe difficulty</label>
                    <input type="radio" id="d6_3_5" name="d6_3" value="5">
                    <label for="d6_3_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_4 How difficult was it to solve problems?</div>
                <div>
                    <input type="radio" id="d6_4_1" name="d6_4" value="1" checked="checked">
                    <label for="d6_4_1">No difficulty</label>
                    <input type="radio" id="d6_4_2" name="d6_4" value="2"> <label for="d6_4_2">Mild difficulty</label>
                    <input type="radio" id="d6_4_3" name="d6_4" value="3">
                    <label for="d6_4_3">Moderate difficulty</label>
                    <input type="radio" id="d6_4_4" name="d6_4" value="4"> <label for="d6_4_4">Severe difficulty</label>
                    <input type="radio" id="d6_4_5" name="d6_4" value="5">
                    <label for="d6_4_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_5 How difficult was it to make and maintain financial status?</div>
                <div>
                    <input type="radio" id="d6_5_1" name="d6_5" value="1" checked="checked">
                    <label for="d6_5_1">No difficulty</label>
                    <input type="radio" id="d6_5_2" name="d6_5" value="2"> <label for="d6_5_2">Mild difficulty</label>
                    <input type="radio" id="d6_5_3" name="d6_5" value="3">
                    <label for="d6_5_3">Moderate difficulty</label>
                    <input type="radio" id="d6_5_4" name="d6_5" value="4"> <label for="d6_5_4">Severe difficulty</label>
                    <input type="radio" id="d6_5_5" name="d6_5" value="5">
                    <label for="d6_5_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_6 How difficult was it to deal with government bureaucracy?</div>
                <div>
                    <input type="radio" id="d6_6_1" name="d6_6" value="1" checked="checked">
                    <label for="d6_6_1">No difficulty</label>
                    <input type="radio" id="d6_6_2" name="d6_6" value="2"> <label for="d6_6_2">Mild difficulty</label>
                    <input type="radio" id="d6_6_3" name="d6_6" value="3">
                    <label for="d6_6_3">Moderate difficulty</label>
                    <input type="radio" id="d6_6_4" name="d6_6" value="4"> <label for="d6_6_4">Severe difficulty</label>
                    <input type="radio" id="d6_6_5" name="d6_6" value="5">
                    <label for="d6_6_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_7 How difficult was it to get healthcare?</div>
                <div>
                    <input type="radio" id="d6_7_1" name="d6_7" value="1" checked="checked">
                    <label for="d6_7_1">No difficulty</label>
                    <input type="radio" id="d6_7_2" name="d6_7" value="2"> <label for="d6_7_2">Mild difficulty</label>
                    <input type="radio" id="d6_7_3" name="d6_7" value="3">
                    <label for="d6_7_3">Moderate difficulty</label>
                    <input type="radio" id="d6_7_4" name="d6_7" value="4"> <label for="d6_7_4">Severe difficulty</label>
                    <input type="radio" id="d6_7_5" name="d6_7" value="5">
                    <label for="d6_7_5">Extreme difficulty</label>
                </div>
            </div>
            <div class="question-container">
                <div class="question-title">d6_8 How difficult was it to help others?</div>
                <div>
                    <input type="radio" id="d6_8_1" name="d6_8" value="1" checked="checked">
                    <label for="d6_8_1">No difficulty</label>
                    <input type="radio" id="d6_8_2" name="d6_8" value="2"> <label for="d6_8_2">Mild difficulty</label>
                    <input type="radio" id="d6_8_3" name="d6_8" value="3">
                    <label for="d6_8_3">Moderate difficulty</label>
                    <input type="radio" id="d6_8_4" name="d6_8" value="4"> <label for="d6_8_4">Severe difficulty</label>
                    <input type="radio" id="d6_8_5" name="d6_8" value="5">
                    <label for="d6_8_5">Extreme difficulty</label>
                </div>
            </div>
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