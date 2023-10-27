const themeButton = document.getElementById("theme-btn");
const themeButtonText = document.getElementById("themebtnText");
const themeButtonIcon = document.getElementById("themebtnIcon");

// Function to set the theme
function setTheme(theme) {
    if (theme === "dark") {
        document.body.classList.add("dark-mode");
        themeButtonText.textContent = "Light";
        themeButtonIcon.innerHTML = "<i class='bx bxs-moon'></i>" //"🌙"; // Moon icon
    } else {
        document.body.classList.remove("dark-mode");
        themeButtonText.textContent = "Dark";
        themeButtonIcon.innerHTML = "<i class='bx bxs-sun'></i>"  //"☀️"; // Sun icon
    }
}

// Toggle between dark and light modes
themeButton.addEventListener("click", () => {
    if (document.body.classList.contains("dark-mode")) {
        setTheme("light");
        localStorage.setItem("theme", "light");
    } else {
        setTheme("dark");
        localStorage.setItem("theme", "dark");
    }
});

// Check for system theme preference
if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
    setTheme("dark");
} else {
    setTheme("light");
}

// Check for user's stored theme preference
const storedTheme = localStorage.getItem("theme");
if (storedTheme) {
    setTheme(storedTheme);
}