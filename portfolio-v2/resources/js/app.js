import "./bootstrap";
import Alpine from "alpinejs";
import AOS from "aos";
import "aos/dist/aos.css"; // You can also use <link> for styles
// ..
AOS.init();
window.Alpine = Alpine;

Alpine.start();
