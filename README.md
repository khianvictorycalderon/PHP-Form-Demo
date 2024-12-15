# PHP Form with Validation

This form allows the user to submit their name and age. It includes JavaScript validation to ensure the name input doesn't contain special characters or numbers. Upon successful submission, a custom alert displays the entered values.

## Instructions:

1. **Files Needed:**
    - HTML file (contains PHP form logic)
    - `assets/index.css` (custom CSS file)
    - `assets/index.js` (JavaScript for validation)

2. **How It Works:**
    - The user is prompted to enter their name and age.
    - When submitting the form, the JavaScript function `validate()` checks the name field to ensure no special characters or numbers are present.
    - If both fields are valid, the form is submitted, and PHP handles displaying a custom alert with the name and age values.

3. **PHP Script:**
    - The `alert()` function in PHP triggers a browser alert with the input values when the form is submitted and both fields are filled.

4. **Key Functionalities:**
    - **Form Validation:** Ensures no special characters or numbers in the name field.
    - **Form Submission:** PHP processes the form after validation, triggering a JavaScript alert with the form data.

5. **Customizations:**
    - You can modify the PHP alert functionality to display or process form data as needed.
    - Update `index.css` and `index.js` for your own styling and validation rules.
