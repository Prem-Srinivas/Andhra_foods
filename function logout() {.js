function logout() {
    // Clear user session data
    localStorage.removeItem("userName");
    localStorage.removeItem("userEmail");
    // You can also clear cart or orderHistory if needed:
    // localStorage.removeItem("cart");
    // localStorage.removeItem("orderHistory");
  
    alert("You have been logged out.");
    window.location.href = "login.html"; // Redirect to login
  }

  