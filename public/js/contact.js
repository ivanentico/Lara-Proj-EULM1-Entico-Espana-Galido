
document.addEventListener('DOMContentLoaded', function () {

    const contactForm = document.getElementById('contactForm');

    if (!contactForm) return;

    const formSuccess = document.getElementById('formSuccess');

    const fields = [
        {
            id: 'name',
            errorId: 'nameError',
            message: 'Please enter your full name.'
        },
        {
            id: 'email',
            errorId: 'emailError',
            message: 'Please enter your email address.'
        },
        {
            id: 'subject',
            errorId: 'subjectError',
            message: 'Please enter a subject.'
        },
        {
            id: 'message',
            errorId: 'messageError',
            message: 'Please enter your message.'
        }
    ];

    // Display validation error
    function showError(input, errorElement, message) {
        input.classList.add('invalid');
        input.setAttribute('aria-invalid', 'true');
        errorElement.textContent = message;
    }

    // Clear validation error
    function clearError(input, errorElement) {
        input.classList.remove('invalid');
        input.removeAttribute('aria-invalid');
        errorElement.textContent = '';
    }

    // Validate individual field
    function validateField(field) {

        const input = document.getElementById(field.id);
        const errorElement = document.getElementById(field.errorId);

        const value = input.value.trim();

        clearError(input, errorElement);

        if (value === '') {
            showError(input, errorElement, field.message);
            return false;
        }

        // Email format validation
        if (field.id === 'email') {

            const emailPattern =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(value)) {
                showError(
                    input,
                    errorElement,
                    'Please enter a valid email address.'
                );

                return false;
            }
        }

        return true;
    }

    // Clear errors while typing
    fields.forEach(function (field) {

        const input = document.getElementById(field.id);
        const errorElement = document.getElementById(field.errorId);

        input.addEventListener('input', function () {

            clearError(input, errorElement);

            if (!formSuccess.hidden) {
                formSuccess.hidden = true;
            }
        });

    });

    // Form submission
    contactForm.addEventListener('submit', function (event) {

        event.preventDefault();

        formSuccess.hidden = true;

        let isFormValid = true;

        fields.forEach(function (field) {

            const isValid = validateField(field);

            if (!isValid) {
                isFormValid = false;
            }

        });

        if (!isFormValid) {

            const firstInvalid =
                contactForm.querySelector('.invalid');

            if (firstInvalid) {
                firstInvalid.focus();
            }

            return;
        }

        // Display success message
        formSuccess.hidden = false;

        contactForm.reset();

        formSuccess.scrollIntoView({
            behavior: 'smooth',
            block: 'nearest'
        });

        console.log(
            'Café Ethereal contact form validation successful!'
        );

    });

});
