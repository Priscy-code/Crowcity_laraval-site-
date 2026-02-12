// Toggle mobile menu
const mobileMenuButton = document.getElementById("mobileMenuButton");
const mobileMenu = document.getElementById("mobileMenu");

mobileMenuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("opacity-100");
    mobileMenu.classList.toggle("translate-y-0");
    mobileMenu.classList.toggle("pointer-events-auto");
});

// Scroll effect
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add(
            "py-4",
            "bg-white",
            "shadow-lg",
            "border-b",
            "border-gray-100",
        );
        navbar.classList.remove("py-6", "bg-white/95", "backdrop-blur-sm");
    } else {
        navbar.classList.remove(
            "py-4",
            "bg-white",
            "shadow-lg",
            "border-b",
            "border-gray-100",
        );
        navbar.classList.add("py-6", "bg-white/95", "backdrop-blur-sm");
    }
});
