// Set minimum date to today
document.getElementById('preferredDate').min = new Date().toISOString().split('T')[0];

// Gender selection handling
document.querySelectorAll('input[name="gender"]').forEach(radio => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.gender-option').forEach(option => {
            option.classList.remove('selected');
        });
        this.closest('.gender-option').classList.add('selected');
    });
});

// Form validation
function validateField(fieldId, errorId, message) {
    const field = document.getElementById(fieldId);
    const error = document.getElementById(errorId);
    
    if (!field.value.trim() || (field.type === 'email' && field.value && !isValidEmail(field.value))) {
        field.classList.add('invalid');
        error.textContent = message;
        error.classList.add('show');
        return false;
    } else {
        field.classList.remove('invalid');
        error.classList.remove('show');
        return true;
    }
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function validateForm() {
    let isValid = true;
    
    // Validate required fields
    isValid &= validateField('firstName', 'firstNameError', 'Please enter your first name');
    isValid &= validateField('lastName', 'lastNameError', 'Please enter your last name');
    isValid &= validateField('cin', 'cinError', 'Please enter your CIN');
    isValid &= validateField('phone', 'phoneError', 'Please enter your phone number');
    
    // Validate age
    const age = document.getElementById('age');
    const ageError = document.getElementById('ageError');
    if (!age.value || age.value < 1 || age.value > 120) {
        age.classList.add('invalid');
        ageError.classList.add('show');
        isValid = false;
    } else {
        age.classList.remove('invalid');
        ageError.classList.remove('show');
    }
    
    // Validate gender
    const genderError = document.getElementById('genderError');
    if (!document.querySelector('input[name="gender"]:checked')) {
        genderError.classList.add('show');
        isValid = false;
    } else {
        genderError.classList.remove('show');
    }
    
    // Validate email if provided
    const email = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    if (email.value && !isValidEmail(email.value)) {
        email.classList.add('invalid');
        emailError.classList.add('show');
        isValid = false;
    } else {
        email.classList.remove('invalid');
        emailError.classList.remove('show');
    }
    
    return isValid;
}

// Form submission
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    if (validateForm()) {
        const submitBtn = document.querySelector('.btn-submit');
        submitBtn.classList.add('loading');
        
        // Simulate form submission
        setTimeout(() => {
            submitBtn.classList.remove('loading');
            document.getElementById('successMessage').classList.add('show');
            document.getElementById('appointmentForm').reset();
            document.querySelectorAll('.gender-option').forEach(option => {
                option.classList.remove('selected');
            });
            window.scrollTo(0, 0);
        }, 2000);
    }
});
