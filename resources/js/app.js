require("./bootstrap");
import Lightbox from "bs5-lightbox";

const options = {
    keyboard: true,
    size: "fullscreen",
};

document.querySelectorAll("a").forEach((el) =>
    el.addEventListener("click", (e) => {
        e.preventDefault();
        console.log("hello");
        const lightbox = new Lightbox(el, options);
        lightbox.show();
    })
);
