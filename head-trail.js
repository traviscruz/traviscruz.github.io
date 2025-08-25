document.addEventListener("DOMContentLoaded", () => {
    const aboutSection = document.querySelector(".about");
    const trailContainer = document.querySelector(".head-trail");

    const HEAD_SIZE = 250;   // match CSS width
    const MAX_HEADS = 12;    // number of heads visible
    const TOTAL_HEADS = 5;   // number of head images (head1.png ... head5.png)
    let headIndex = 1;       // current head number
    let lastHead = null;
    let heads = [];

    aboutSection.addEventListener("mousemove", (e) => {
        const rect = aboutSection.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        if (!lastHead) {
            lastHead = createHead(x, y);
            return;
        }

        const lastX = parseFloat(lastHead.style.left);
        const lastY = parseFloat(lastHead.style.top);

        // spacing check — adjusted to new size
        if (
            Math.abs(x - lastX) > HEAD_SIZE / 1.5 ||
            Math.abs(y - lastY) > HEAD_SIZE / 1.5
        ) {
            lastHead = createHead(x, y);

            if (heads.length > MAX_HEADS) {
                const oldHead = heads.shift();
                oldHead.remove();
            }
        }
    });

    function createHead(x, y) {
        const head = document.createElement("img");

        // cycle through head1.png → head5.png
        head.src = `assets/images/head${headIndex}.png`;
        head.classList.add("trail-head");

        // increment index, reset to 1 if past TOTAL_HEADS
        headIndex++;
        if (headIndex > TOTAL_HEADS) headIndex = 1;

        // Position at cursor (centered by CSS transform)
        head.style.left = `${x}px`;
        head.style.top = `${y}px`;

        trailContainer.appendChild(head);
        heads.push(head);

        return head;
    }
});
