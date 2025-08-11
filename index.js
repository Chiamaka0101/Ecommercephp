document.addEventListener("DOMContentLoaded", function () {
  const yearSpan = document.getElementById("date");
  const currentYear = new Date().getFullYear();
  yearSpan.textContent = currentYear;
});