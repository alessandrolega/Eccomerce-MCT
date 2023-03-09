import Utils from "../../../assets/js/Utils.js";

export default class ReviewsController {
  constructor() {
    this.Utils = new Utils();
    this.getDataReviews();
  }

  async getDataReviews() {
    try {
      const result = await fetch(`${this.Utils.viewsPath}reviews/js/data.json`);
      const data = await result.json();
      return this.renderReviews(data);
    } catch (error) {
      console.error(error);
    }
  }

  renderReviews(data) {
    console.log(data);
    const reviewsContainer = document.querySelector("#reviewsContainer");
    const html = data
      .map((d) => {
        const arrStar = [];
        for (let i = 0; i < d.star; i++) {
          arrStar.push(
            `<img class="h-5 w-5" src="${this.Utils.assetsPath}images/svg/star.svg" alt="" />`
          );
        }
        return `<div class="py-4">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <div class="h-12 w-12 rounded-full bg-emerald-500">
                            <img src="" alt="">
                        </div>
                        <div>
                            <div>${d.name}</div>
                            <div class="flex items-center">
                            ${d.star ? arrStar.join("") : ""}
                            </div>
                        </div>
                    </div>
                    <p class="text-sm md:text-md italic">${d.description}</p>
                </div>
            </div>`;
      })
      .join("");
    reviewsContainer.insertAdjacentHTML("afterbegin", html);
  }
}
