<script>
document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll(".stars");

    elements.forEach(starContainer => {
        const rating = parseInt(starContainer.getAttribute("data-rating"));
        starContainer.innerHTML = "";

        for (let i = 1; i <= 5; i++) {
            const star = document.createElement("span");
            star.classList.add("star");
            star.innerHTML = i <= rating ? "★" : "☆";
            if (i <= rating) star.classList.add("filled");
            starContainer.appendChild(star);
        }
    });
});
</script>