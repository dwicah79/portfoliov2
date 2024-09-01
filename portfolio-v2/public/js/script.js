document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(
        "[data-collapse-toggle='navbar-solid-bg']",
    );
    const navMenu = document.querySelector("#navbar-solid-bg");

    toggleButton.addEventListener("click", () => {
        navMenu.classList.toggle("hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const themeSwitcher = document.getElementById("themeSwitcherThree");
    const toggleCircle = document.getElementById("toggleCircle");

    // Load the theme from localStorage
    if (localStorage.getItem("theme") === "dark") {
        document.documentElement.classList.add("dark");
        themeSwitcher.checked = true;
        toggleCircle.classList.add("translate-x-8");
    }

    // Toggle theme and update visual state
    themeSwitcher.addEventListener("change", () => {
        if (themeSwitcher.checked) {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
            toggleCircle.classList.add("translate-x-8");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("theme", "light");
            toggleCircle.classList.remove("translate-x-8");
        }
    });
});

document.addEventListener("scroll", function () {
    const sections = document.querySelectorAll("section");
    const navbar = document.querySelector(".navbar-solid-bg"); // Sesuaikan dengan selector navbar Anda
    let currentSection = "";

    sections.forEach((section) => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        if (window.scrollY >= sectionTop - sectionHeight / 3) {
            currentSection = section.getAttribute("id");
        }
    });

    // Ganti warna navbar sesuai section aktif
    switch (currentSection) {
        case "home":
            navbar.classList.add("bg-sky-300");
            navbar.classList.remove(
                "bg-sky-300",
                "bg-project",
                "bg-certificate",
            ); // Ganti sesuai warna section lainnya
            break;
        case "about":
            navbar.classList.add("bg-about");
            navbar.classList.remove(
                "bg-sky-300",
                "bg-project",
                "bg-certificate",
            );
            break;
        case "project":
            navbar.classList.add("bg-project");
            navbar.classList.remove("bg-sky-300", "bg-about", "bg-certificate");
            break;
        case "certificate":
            navbar.classList.add("bg-certificate");
            navbar.classList.remove("bg-sky-300", "bg-about", "bg-project");
            break;
        // Tambahkan case untuk section lainnya jika ada
    }
});
