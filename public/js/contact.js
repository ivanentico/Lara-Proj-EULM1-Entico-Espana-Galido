// ===== Contact Page: Client-side Form Validation =====
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    const fields = {
        name: document.getElementById('name'),
        email: document.getElementById('email'),
        subject: document.getElementById('subject'),
        message: document.getElementById('message'),
    };

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Show or clear an error for one field
    function setError(field, message) {
        const errorEl = document.getElementById(field.id + 'Error');
        errorEl.textContent = message;
        field.classList.toggle('invalid', message !== '');
        field.classList.toggle('valid', message === '');
    }

    // Validate one field, return true if valid
    function validateField(field) {
        const value = field.value.trim();

        switch (field.id) {
            case 'name':
                if (value === '') return setError(field, 'Name is required.'), false;
                if (value.length < 2) return setError(field, 'Name must be at least 2 characters.'), false;
                break;

            case 'email':
                if (value === '') return setError(field, 'Email is required.'), false;
                if (!emailPattern.test(value)) return setError(field, 'Please enter a valid email address.'), false;
                break;

            case 'subject':
                if (value === '') return setError(field, 'Subject is required.'), false;
                break;

            case 'message':
                if (value === '') return setError(field, 'Message is required.'), false;
                if (value.length < 10) return setError(field, 'Message must be at least 10 characters.'), false;
                break;
        }

        setError(field, '');
        return true;
    }

    // Live validation: check when leaving a field, re-check while fixing it
    Object.values(fields).forEach(function (field) {
        field.addEventListener('blur', function () {
            validateField(field);
        });
        field.addEventListener('input', function () {
            if (field.classList.contains('invalid')) {
                validateField(field);
            }
            successMessage.hidden = true;
        });
    });

    // Submit handler
    form.addEventListener('submit', function (event) {
        event.preventDefault();

        let isFormValid = true;
        Object.values(fields).forEach(function (field) {
            if (!validateField(field)) {
                isFormValid = false;
            }
        });

        if (isFormValid) {
            successMessage.hidden = false;
            successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            form.reset();
            Object.values(fields).forEach(function (field) {
                field.classList.remove('valid', 'invalid');
            });
        } else {
            successMessage.hidden = true;
            // Focus the first invalid field
            const firstInvalid = form.querySelector('.invalid');
            if (firstInvalid) firstInvalid.focus();
        }
    });
});