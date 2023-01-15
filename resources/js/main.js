const hiddenButton = document.querySelector('.button--quiz')
const quizBody = document.querySelector('.quiz-body')
const quizCheck = document.querySelector('.quiz-check')

hiddenButton.onclick = function() {
    hiddenButton.classList.toggle('hidden');
    quizBody.classList.toggle('hidden');
    quizCheck.classList.toggle('hidden');
}