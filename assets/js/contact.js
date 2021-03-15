/**
 * Check the validity of the email.
 *
 * @param {string} email
 * @returns
 */
 function checkEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

/**
 * PHP ucwords equivalent function for JavaScript.
 *
 * @param {string} str
 * @returns
 */
function ucwords (str) {
  return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
      return $1.toUpperCase();
  });
}

(function () {
  document.getElementById('send-mail').addEventListener('click', function (event) {
    event.preventDefault();
    let name = document.getElementById('name').value.trim();
    let firstname = document.getElementById('firstname').value.trim();
    let email = document.getElementById('email').value.trim();
    let message = document.getElementById('message').value.trim();
    const alert = document.getElementById('alert-contact');

    if (name.length === 0 || firstname.length === 0 || email.length === 0 || message.length === 0) {
      alert.className = 'text-center alert alert-warning';
      alert.innerText = 'Veuillez renseigner tous les champs';
    } else if (!checkEmail(email)) {
      alert.className = 'text-center alert alert-warning';
      alert.innerText = 'Adresse mail invalide';
    } else {
      fetch('https://thomaslaure.fr/contact', {
        method: 'post',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify({message: `${message}\n\n${ucwords(firstname)} ${name.toUpperCase()}\n${email}`})
      })
        .then(response => {
          if (!response.ok) {
            throw response;
          }
          alert.className = 'text-center alert alert-success';
          alert.innerText = 'Votre message a été envoyé';
          document.querySelector('#contact-form > form').reset();
        })
        .catch(error => {
          alert.className = 'text-center alert alert-danger';
          alert.innerText = 'Un problème a été rencontré, votre message n\'a pas pu être envoyé : ' + error;
        });
    }
  });
})();