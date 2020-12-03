/**
 * 
 * VALIDATORS
 *  
 */

// The telephone number must be in the format of (555) 555-5555
function isValidTelephone(phone) {
    return /^\D*\d{3}\D*\d{3}\D*\d{4}\D*$/.test(phone);
}

// Must be a valid email address
function isValidEmail(mail) {
return /^[^@]+@[^@.]+\.[a-z]+$/i.test(mail);
}

/**
 * 
 * FORMATTING FUNCTIONS
 * 
 */

function formatTelephone(text) {
    const expression = /^\D*(\d{3})\D*(\d{3})\D*(\d{4})\D*$/;
    return text.replace(expression, "($1) $2-$3");
  }

function createListener(validator) {
return e => {
    const text = e.target.value;
    const valid = validator(text);
    const showTip = text !== "" && !valid;
    const tooltip = e.target.nextElementSibling;
    /*showOrHideTip(showTip, tooltip);*/
};
};

phoneInput.addEventListener("input", createListener(isValidTelephone));

phoneInput.addEventListener("blur", e => {
  e.target.value = formatTelephone(e.target.value);
});

emailInput.addEventListener("input", createListener(isValidEmail));