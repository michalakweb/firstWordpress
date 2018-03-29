//Comments section

var replyTitle = document.querySelector('#reply-title');
replyTitle.textContent = "Zostaw komentarz";

var commentLabel = document.querySelector('#commentLabel');
commentLabel.textContent = '';

var commentTextArea = document.querySelector('#comment');
commentTextArea.setAttribute('class', 'form-control');

var commentBtn = document.querySelector('#submit');
commentBtn.setAttribute('class', 'btn btn-block btn-primary');
commentBtn.value = "Dodaj komentarz";
