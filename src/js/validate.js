{
  const handleSubmitForm = e => {
    
    const $form = e.currentTarget;
    if (!$form.checkValidity()) {
      e.preventDefault();

      const fields = $form.querySelectorAll(`.input`);
      fields.forEach(showValidationInfo);

      //$form.querySelector(`.error`).innerHTML = ` Some errors occured`;
    } else {
      //console.log(`Form is valid => submit form`);
    }
  };

  const showValidationInfo = $field => {
    let message;
    if ($field.validity.valueMissing) {
      message = `Required`;
    }
    if ($field.validity.typeMismatch) {
      message = `Type not right`;
    }
    if ($field.validity.rangeOverflow) {
      const max = $field.getAttribute(`max`);
      message = `Too big, max ${max}`;
    }
    if ($field.validity.rangeUnderflow) {
      const min = $field.getAttribute(`min`);
      message = `Too small, min ${min}`;
    }
    if ($field.validity.tooShort) {
      message = `Too short`;
    }
    if ($field.validity.tooLong) {
      message = `Too long`;
    }
    if (message) {
      $field.parentElement.querySelector(`.error`).textContent = message;
      $field.style.borderColor = "red";
    }
  };

  const handeInputField = e => {
    const $field = e.currentTarget;
    if ($field.checkValidity()) {
      $field.parentElement.querySelector(`.error`).textContent = ``;
      $field.style.borderColor = "#12AD2B"
      if ($field.form.checkValidity()) {
        $field.form.querySelector(`.error`).innerHTML = ``;
        $field.style.borderColor = "#12AD2B"
      }
    }
  };

  const handeBlurField = e => {
    const $field = e.currentTarget;
    showValidationInfo($field);
  };

  const addValidationListeners = fields => {
    fields.forEach($field => {
      $field.addEventListener(`input`, handeInputField);
      $field.addEventListener(`blur`, handeBlurField);
    });
  };

  const init = () => {
    
    const $form = document.querySelectorAll(`form`);
    $form.forEach(form => {
      form.noValidate = true;
      form.addEventListener(`submit`, handleSubmitForm);
  
      const fields = form.querySelectorAll(`.input`);
      addValidationListeners(fields);
    })
   
  };

  init();
}
