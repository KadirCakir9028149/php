<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - De Griezelige Kamer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="room-container">
        <!-- Timer -->
        <div class="timer-display" id="timerDisplay">05:00</div>

        <!-- Hotspots / Clickable areas -->
        <div class="hotspot hotspot-bed" onclick="showQuestion(0)" title="Klik op het bed"></div>
        <div class="hotspot hotspot-desk" onclick="showQuestion(1)" title="Klik op het bureau"></div>
        <div class="hotspot hotspot-door" onclick="showQuestion(2)" title="Klik op de deur"></div>

        <!-- Info panels -->
        <div class="question-counter">Vragen opgelost: <span id="solvedCount">0</span>/3</div>
        <div class="game-info">Klik op objecten in de kamer!</div>
    </div>

    <!-- Modal for questions -->
    <div class="modal" id="questionModal">
        <div class="modal-content">
            <div class="modal-header" id="questionTitle"></div>
            <div class="modal-body" id="questionText"></div>
            <input type="text" class="answer-input" id="answerInput" placeholder="Vul je antwoord in...">
            <div class="feedback" id="feedback"></div>
            <div class="button-group">
                <button class="btn-close" onclick="closeModal()">Sluiten</button>
                <button class="btn-submit" onclick="checkAnswer()">Verzenden</button>
            </div>
        </div>
    </div>

    <!-- Completion message -->
    <div class="completion-message" id="completionMessage">
        🎉 Gefeliciteerd! Je hebt alle vragen opgelost! 🎉
    </div>

    <script>
        // Questions data
        const questions = [
            {
                title: "Vraag 1: Het Bed",
                question: "Hoeveel poten heeft dit bed?",
                answer: "4"
            },
            {
                title: "Vraag 2: Het Bureau",
                question: "Wat is rood op dit bureau?",
                answer: "lamp"
            },
            {
                title: "Vraag 3: De Deur",
                question: "Hoeveel deuren zie je in deze kamer?",
                answer: "2"
            }
        ];

        let currentQuestion = -1;
        let solvedQuestions = new Set();
        let timeRemaining = 5 * 60; // 5 minutes in seconds
        let gameActive = true;
        let timerInterval;

        // Initialize timer
        function initTimer() {
            timerInterval = setInterval(() => {
                timeRemaining--;
                updateTimerDisplay();

                if (timeRemaining <= 0) {
                    endGame(false);
                }
            }, 1000);
        }

        function updateTimerDisplay() {
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;
            const timerElement = document.getElementById('timerDisplay');
            timerElement.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

            // Add warning effect when less than 30 seconds
            if (timeRemaining < 30) {
                timerElement.classList.add('warning');
            }
        }

        function showQuestion(questionIndex) {
            if (!gameActive) return;

            currentQuestion = questionIndex;
            const question = questions[questionIndex];

            document.getElementById('questionTitle').textContent = question.title;
            document.getElementById('questionText').textContent = question.question;
            document.getElementById('answerInput').value = '';
            document.getElementById('feedback').textContent = '';
            document.getElementById('feedback').className = 'feedback';

            document.getElementById('questionModal').classList.add('active');
            document.getElementById('answerInput').focus();
        }

        function closeModal() {
            document.getElementById('questionModal').classList.remove('active');
            currentQuestion = -1;
        }

        function checkAnswer() {
            if (currentQuestion === -1) return;

            const userAnswer = document.getElementById('answerInput').value.trim().toLowerCase();
            const correctAnswer = questions[currentQuestion].answer.toLowerCase();
            const feedbackElement = document.getElementById('feedback');

            if (userAnswer === correctAnswer) {
                feedbackElement.textContent = '✓ Correct! Goed gedaan!';
                feedbackElement.className = 'feedback correct';
                
                solvedQuestions.add(currentQuestion);
                document.getElementById('solvedCount').textContent = solvedQuestions.size;

                setTimeout(() => {
                    closeModal();
                    
                    if (solvedQuestions.size === 3) {
                        endGame(true);
                    }
                }, 1500);
            } else {
                feedbackElement.textContent = '✗ Fout! Probeer opnieuw...';
                feedbackElement.className = 'feedback wrong';
                document.getElementById('answerInput').value = '';
            }
        }

        function endGame(won) {
            gameActive = false;
            clearInterval(timerInterval);

            if (won) {
                document.getElementById('completionMessage').style.display = 'block';
            } else {
                document.getElementById('completionMessage').textContent = '⏰ TIJD OP! Game Over!';
                document.getElementById('completionMessage').style.display = 'block';
                document.getElementById('completionMessage').style.borderColor = '#ff4444';
                document.getElementById('completionMessage').style.color = '#ff4444';
            }
        }

        // Allow Enter key to submit answer
        document.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && currentQuestion !== -1) {
                checkAnswer();
            }
        });

        // Close modal on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Start the game
        initTimer();
    </script>
</body>
</html>
