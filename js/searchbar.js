document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("siteSearch");
    if (!searchInput) return;

    searchInput.addEventListener("input", function () {
        const query = this.value.toLowerCase().trim();
        const sections = document.querySelectorAll(".game-section");

        // Reset if search is empty or too short
        if (query.length < 2) {
            sections.forEach(section => {
                section.style.display = "block";
                section.querySelectorAll(".website-card").forEach(card => {
                    card.style.display = "block";
                });
            });
            return;
        }

        sections.forEach(section => {
            const title =
                section.querySelector(".game-info h2")?.textContent?.toLowerCase() || "";
            const year =
                section.querySelector(".game-year")?.textContent?.toLowerCase() || "";
            const cards = section.querySelectorAll(".website-card");

            // Hide section + cards first
            section.style.display = "none";
            cards.forEach(card => (card.style.display = "none"));

            // Game title / year match → show full section
            if (title.includes(query) || year.includes(query)) {
                section.style.display = "block";
                cards.forEach(card => (card.style.display = "block"));
                return;
            }

            // Otherwise filter cards
            let matched = false;
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (text.includes(query)) {
                    card.style.display = "block";
                    matched = true;
                }
            });

            if (matched) {
                section.style.display = "block";
            }
        });
    });
});
