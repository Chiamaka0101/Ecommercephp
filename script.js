document.addEventListener("DOMContentLoaded", function () {
  const yearSpan = document.getElementById("date");
  const currentYear = new Date().getFullYear();
  yearSpan.textContent = currentYear;
});

function updateCartDisplay() {
  let count = localStorage.getItem("cart") || 0;
  document.getElementById("cartCount").innerText = count;
}

function addToCart() {
  let count = parseInt(localStorage.getItem("cart") || 0);
  localStorage.setItem("cart", ++count);
  updateCartDisplay();
}
function showCart() {
  alert("Items in cart: " + (localStorage.getItem("cart") || 0));
}

updateCartDisplay();

// script.js

// Set a cookie
function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days*24*60*60*1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Get a cookie
function getCookie(name) {
  const cname = name + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === ' ') c = c.substring(1);
    if (c.indexOf(cname) === 0) return c.substring(cname.length, c.length);
  }
  return "";
}

// Save preference based on page
function saveCategoryPreference(category) {
  setCookie("preferredCategory", category, 30); // Save for 30 days
  console.log("Preference saved:", category);
}

// Show welcome message if preference exists
function showPreferenceWelcome() {
  const pref = getCookie("preferredCategory");
  if (pref) {
    alert(`Welcome back! You seem to love ${pref}. Check out new items!`);
  }
}

// Optional: Call this when the page loads
window.onload = function() {
  showPreferenceWelcome();
};

function displayPersonalizedBanner() {
  const pref = getCookie("preferredCategory");
  if (pref) {
    const banner = document.getElementById("recommendation");
    if (banner) {
      banner.innerHTML = `💖 Recommended for you: More ${pref} just arrived!`;
      banner.style.backgroundColor = "#f9f2f4";
      banner.style.padding = "10px";
      banner.style.margin = "10px 0";
      banner.style.border = "1px solid #ccc";
    }
  }
}

window.onload = function() {
  showPreferenceWelcome();
  displayPersonalizedBanner();
};