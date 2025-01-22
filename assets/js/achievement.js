$(document).ready(function () {
  showAchievementList();
});

const checkTaxonomy = (taxonomies, category) => {
  return taxonomies?.some(
    (taxonomy) => category.toLowerCase() === taxonomy.name.toLowerCase()
  );
};

function showAchievementList(category = "ALL") {
  let content = "";
  const listEl = $("#list_achievement");
  if (category === "ALL" || category == "すべて") {
    listAchievement?.map((data) => {
      content += renderAchievement(data);
    });
  } else {
    listAchievement?.forEach((data, index) => {
      if (checkTaxonomy(data.taxonomy, category)) {
        content += renderAchievement(data);
      }
    });
  }

  listEl.html(content);
}

function handleClick(name) {
  showAchievementList(name);
  console.log({ name });
}

function renderAchievement(item) {
  let indexRandom = Math.floor(Math.random() * item?.taxonomy?.length) || 0;
  return `
    <li class="w-full flex flex-col bg-transparent relative">
      <a href="${item?.guid}">
        <div class="relative w-full h-[400px] flex flex-col items-center justify-between">
          <div class="w-2/3 mt-5"><img src="${
            item?.photo_left
          }" class="rounded-tl-[50px] w-full"></div>
          <div class="absolute top-0 right-0 left-0 bottom-0  z-index-negative">
            <img src="${item?.bg}" class="w-full h-full blur-image">
            ${
              item?.taxonomy
                ? `<div class="absolute left-0 top-[20px] bg-[#D70C18] py-0.5 px-4 text-white">${item?.taxonomy[indexRandom]?.name}</div>`
                : ""
            }
          </div>
          <div class="flex justify-center mb-4 items-center flex-col">
            <div class="text-white leading-9">${item?.name_company}</div>
            <div class="text-white leading-9">${item?.post_title}</div>
          </div>
        </div>
      </a>
    </li>
  `;
}
