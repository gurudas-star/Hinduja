document.addEventListener("DOMContentLoaded", function () {

    const selector = document.getElementById("languageSwitcher");

    if (!selector) return;

    // Restore selected language
    const savedLang = localStorage.getItem("site_language") || "en";
    selector.value = savedLang;

    if (savedLang === "kn") {
        translatePage();
    }

    selector.addEventListener("change", function () {

        localStorage.setItem("site_language", this.value);

        if (this.value === "kn") {
            translatePage();
        } else {
            location.reload();
        }

    });

});

function translatePage() {

    const googleElement = document.querySelector(".goog-te-combo");

    if (googleElement) {
        googleElement.value = "kn";
        googleElement.dispatchEvent(new Event("change"));
    }

}