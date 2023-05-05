// let services = document.querySelector(".services");
// let sub = document.querySelectorAll(".servicee");
// console.log(services);

// window.onscroll = function () {
//     if (window.scrollY >= services.offsetTop) {
//         console.log("Hala Walah");

//         sub.forEach((services) => {
//             services.classList.add("show");
//         });
//     }
// };

let services = document.querySelector(".services");
let sub = document.querySelectorAll(".servicee");

window.onscroll = function () {
    if (window.scrollY >= services.offsetTop) {
                console.log("Hala Walah");

        services.classList.add("show");
    }
};
