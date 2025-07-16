document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("formInput");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Clear previous error styles
    document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));

    // Field references
    const nameField = document.getElementById("fullName");
    const emailField = document.getElementById("emailAddress");
    const startDateField = document.getElementById("startDate");
    const endDateField = document.getElementById("endDate");

    const name = nameField.value.trim();
    const email = emailField.value.trim();
    const startDate = new Date(startDateField.value);
    const endDate = new Date(endDateField.value);

    let valid = true;

    // Name check
    const nameRegex = /^[a-zA-Z-' ]{2,}$/;
    if (!nameRegex.test(name)) {
      nameField.classList.add("input-error");
      valid = false;
    }

    // Email check
    const emailRegex = /^[^@]+@[^@]+\.[^@]+$/;
    if (!emailRegex.test(email)) {
      emailField.classList.add("input-error");
      valid = false;
    }

    // Date check
    if (!startDate.getTime() || !endDate.getTime() || startDate > endDate) {
      startDateField.classList.add("input-error");
      endDateField.classList.add("input-error");
      valid = false;
    }

    if (valid) {
      alert("Form is valid and ready to submit!");
      // form.submit(); // Enable this when connecting to backend
    }
  });
});
