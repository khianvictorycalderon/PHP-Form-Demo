function validate() {
    const nameField = document.getElementsByName("name")[0]; // Access the first element with name="name"
    const nameValue = nameField.value; // Get the value of the input field

    // Check if the value contains special characters
    if (/[!@#$%^&*()]/g.test(nameValue)) {
        alert("Name must not contain special characters!");
        return false; // Prevent form submission
    }
    if (/[0-9]/g.test(nameValue)) {
        alert("Name must not contain numbers!");
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}