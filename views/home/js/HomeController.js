import ExecJs from "../../../assets/js/ExecJS.js";
import ReviewsController from "../../reviews/js/ReviewsController.js";

export default class HomeController extends ExecJs {
  constructor() {
    super();
    this.handleClickMenu();
    this.sliderBestSellProduct();
    this.ReviewsController = new ReviewsController();
  }

  handleClickMenu() {
    const openBtn = document.querySelector("#open");
    const closeBtn = document.querySelector("#close");
    const menu = document.querySelector("#menu");
    [openBtn, closeBtn].forEach((el) =>
      el.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
        openBtn.classList.toggle("hidden");
        closeBtn.classList.toggle("hidden");
      })
    );
  }

  sliderBestSellProduct() {
    let direction = 0;

    document.addEventListener("DOMContentLoaded", () => {
      const carouselEl = [...document.querySelectorAll(".carousel > div")];

      const prevBtn = document.querySelector("#prev");
      const nextBtn = document.querySelector("#next");
      const arr = [prevBtn, nextBtn];

      const cardWidth = carouselEl[0].getBoundingClientRect().width;

      const gapCard = 20;

      // const allWidth = carouselEl.length * cardWidth + gapCard * (carouselEl.length - 1);
      // console.log(allWidth);
      arr.forEach((btn) =>
        btn.addEventListener("click", function () {
          console.log();
          if (direction === 0 && this.id === "prev") return false;
          console.log(direction * cardWidth, allWidth);
          // if (direction * cardWidth === -2240 && this.id === 'next') return false;

          direction = this.id === "next" ? (direction += -1) : (direction += 1);
          carouselEl.forEach(
            (card) =>
              (card.style.transform = `translateX(${
                direction * (cardWidth + gapCard)
              }px)`)
          ); // magic number 20 da calcolare);
        })
      );
    });
  }
}
