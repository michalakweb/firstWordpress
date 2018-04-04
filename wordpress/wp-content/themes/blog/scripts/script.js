//Comments section

var replyTitle = document.querySelector('#reply-title');
replyTitle.textContent = "Zostaw komentarz";

var commentLabel = document.querySelector('#commentLabel');
commentLabel.textContent = '';

var commentTextArea = document.querySelector('#comment');
commentTextArea.setAttribute('class', 'form-control');

var commentAuthor = document.querySelector('#author');
commentAuthor.setAttribute('class', 'form-control');
commentAuthor.setAttribute('placeholder', 'Imię');

var commentEmail = document.querySelector('#email')
commentEmail.setAttribute('class', 'form-control');
commentEmail.setAttribute('placeholder', 'E-mail');

var commentUrl = document.querySelector('#url')
commentUrl.style.display = 'none';

var commentBtn = document.querySelector('#submit');
commentBtn.setAttribute('class', 'btn btn-block btn-primary mb-5');
commentBtn.value = "Dodaj komentarz";

var commentBtnLogged = document.querySelector('input#submit.submit');
commentBtn.setAttribute('class', 'btn btn-block btn-primary mb-5');
commentBtn.value = "Dodaj komentarz";



