jQuery(document).ready(function ($) {
  "use strict";

  //Contact
  $('form.contactForm').submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = $(this).data('url');
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('input').each(function () { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (!i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    f.children('textarea').each(function () { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    if (ferror) return false;
    else {
      let confirmDialogue = document.createElement("div");
      let innerdiv = document.createElement('div');
      confirmDialogue.setAttribute('id', 'confirmEmailResponder');
      let confirmMessage = document.createElement('p');
      confirmMessage.innerHTML = `<span class="info-title">Wordpress AJAX call DEMO</span>
                              <span class="msg">Your message will be submitted via AJAX. Email responder functionality is active.</span>
                              <span class="que">Do you want to recieve demo email?</span>
                              <span class="small">(To get an email please provide valid email)</span>`;
      let noButton = document.createElement('button');
      noButton.setAttribute('class', 'btn btn-ajax-email btn-no');
      noButton.innerText = "Do not send!";
      let yesButton = document.createElement('button');
      yesButton.setAttribute('class', 'btn btn-ajax-email btn-yes');
      yesButton.innerText = "Send demo email";

      innerdiv.appendChild(confirmMessage);
      innerdiv.appendChild(yesButton);
      innerdiv.appendChild(noButton);
      confirmDialogue.appendChild(innerdiv);
      document.body.appendChild(confirmDialogue);

      let data;
      yesButton.addEventListener('click', function () {
        sendAjaxContactForm(url, appendFormData(form, [{ name: 'sendmail', value: '1' }]));
        confirmDialogue.style.display = 'none';
      })
      noButton.addEventListener('click', function () {
        sendAjaxContactForm(url, appendFormData(form, [{ name: 'sendmail', value: '0' }]));
        confirmDialogue.style.display = 'none';
      })
    }
    return false;
  });

  function appendFormData(form, dataArray) {
    let data = form.serializeArray();
    data = data.concat(dataArray);
    console.log('data after concat: ', data);
    return $.param(data);
  }

  function sendAjaxContactForm(url, data) {
    console.log(data);
    $.ajax({
      type: "POST",
      url,
      data,
      success: function (msg) {
        if (msg.msg == 'OK') {
          $("#sendmessage").addClass("show");
          $("#errormessage").removeClass("show");
          $('.contactForm').find("input, textarea").val("");
          $('form.contactForm').trigger("reset");
        } else {
          $("#sendmessage").removeClass("show");
          $("#errormessage").addClass("show");
          $('#errormessage').html(msg.msg);
        }
      },

    });
  }

});
