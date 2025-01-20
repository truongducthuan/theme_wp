<style>
@import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&family=Roboto:wght@500;700&display=swap");
:root {
  --clr-text: hsl(0, 0%, 100%);
}

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: "Quicksand", sans-serif;
}

.member-slide {
  display: flex;
  justify-content: center;
  align-items: center;
  background: radial-gradient(circle, rgb(115, 12, 50) 5%, rgb(13, 12, 12) 60%);
  min-height: 100vh;
}

section {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding: 60px;
}

.recipe-container {
  background: rgba(189, 181, 181, 0.1);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 25px;
  padding: 30px 0;
  width: min(1200px, 100%);
}

.recipe-container > h1 {
  font-size: 2rem;
  font-weight: 600;
  text-align: center;
  color: #dda3b6;
  margin: 20px 0 40px;
}

.swiper {
  width: 80%;
  height: 100%;
  margin-bottom: 30px;
}

.swiper-scrollbar {
  --swiper-scrollbar-bottom: 0;
  --swiper-scrollbar-drag-bg-color: #dda3b6;
  --swiper-scrollbar-size: 5px;
}

.post {
  max-width: 400px;
  font-size: 1rem;
  font-weight: 500;
  color: var(--clr-text);
  background: rgba(236, 149, 200, 0.2);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  padding: 16px 16px 0;
  margin-bottom: 16px;
}

.post-img {
  width: 100%;
  max-width: 400px;
  -o-object-fit: cover;
  object-fit: cover;
  overflow: hidden;
  aspect-ratio: 4/3;
  border-radius: 6px;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  pointer-events: none;
}

.post-body {
  display: grid;
  grid-template-columns: 15% 60% 20%;
  align-items: center;
  gap: 8px;
  padding: 15px 0;
  cursor: default;
}

.post-name {
  font-size: 0.9rem;
  font-weight: 600;
  margin-bottom: 2px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.post-author {
  width: -moz-fit-content;
  width: fit-content;
  font-size: 0.8rem;
  font-weight: 600;
  opacity: 0.6;
  color: var(--clr-text);
}

.post-avatar {
  width: 40px;
  aspect-ratio: 1/1;
  -o-object-fit: cover;
  object-fit: cover;
  border-radius: 5px;
  cursor: pointer;
}

.post-actions {
  position: relative;
}

.post-actions-content {
  position: absolute;
  bottom: 130%;
  right: 0;
  padding: 8px;
  border-radius: 8px;
  background: rgba(172, 172, 172, 0.2);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  box-shadow: 2px 2px 10px 2px hsla(0, 0%, 0%, 0.25);
  transition: opacity 0.25s, scale 0.25s;
  transform-origin: bottom right;
}

.post-actions-content[data-visible=false] {
  pointer-events: none;
  opacity: 0;
  scale: 0;
}

.post-actions-content[data-visible=true] {
  pointer-events: unset;
  scale: 1;
  opacity: 1;
}

.post-actions-content li {
  padding: 0.5rem 0.65rem;
  border-radius: 0.25rem;
  list-style: none;
}

.post-actions-content li:is(:hover, :focus-within) {
  background-color: rgba(248, 132, 169, 0.7);
}

.post-actions-link {
  width: -moz-max-content;
  width: max-content;
  display: grid;
  grid-template-columns: 1rem 1fr;
  align-items: center;
  gap: 0.6rem;
  color: inherit;
  text-decoration: none;
  cursor: pointer;
}

.post-like {
  text-decoration: none;
  color: var(--clr-text);
  margin-right: 5px;
  font-size: 1.1rem;
  opacity: 0.65;
  border-radius: 50%;
  overflow: hidden;
  transition: all 0.35s ease;
}

.post-actions-controller {
  border: 0;
  background: none;
  color: var(--clr-text);
  cursor: pointer;
  opacity: 0.65;
}

.post-like:hover,
.post-actions-controller:hover {
  opacity: 1;
}

.post-like:focus {
  outline: none;
}

.post-like.active {
  color: rgb(255, 0, 0);
  opacity: 1;
  transform: scale(1.2);
}

/* MEDIA QUERIES */
@media (max-width: 1200px) {
  .swiper {
    width: 80%;
  }
}
@media (max-width: 900px) {
  #recipes {
    padding: 60px 80px;
  }
  .swiper {
    width: 50%;
  }
}
@media (max-width: 765px) {
  .swiper {
    width: 70%;
  }
}
@media (max-width: 550px) {
  #recipes {
    padding: 40px 40px;
  }
  .swiper {
    width: 80%;
  }
}/*# sourceMappingURL=style.css.map */
</style>

<?php 
  $members = get_field('members');
  ?>
<div class="member-slide">
    <section id="recipes" class="w-full">
      <div class="recipe-container">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
          <?php 
            if($members): 
              
              $counter = 0; // Initialize a counter
              foreach($members as $member):
                $counter++;
                ?>
                <div class="swiper-slide relative post h-[500px]">
                  <div class="absolute top-0 z-10 left-[9rem] lg:left-80 text-5xl lg:text-8xl font-bold text-white mix-blend-difference">0<?php echo $counter;?></div>
                  <div class="w-full h-[95%] lg:h-[90%] translate-y-5 flex flex-col relative">
                    <div class="relative w-full h-full photo flex items-center justify-center">
                      <div class="absolute top-0 right-0 left-0 bottom-0  z-index-negative">
                        <img src="<?php echo $member['photo']; ?>" class="human" >
                      </div>
                    </div>
                    <div class="absolute z-10 bottom-8 right-[32%] w-7/12 flex justify-between items-end text-white">
                      <div>
                        <p class="text-white"><?php echo $member['position']; ?></p>
                        <h3 class="text-xl lg:text-3xl font-bold text-white"><?php echo $member['name_1']; ?></h3>
                      </div>
                      <div class="text-sm"><?php echo $member['name_2']; ?></div>
                    </div>
                  </div>
                </div>
                <?php 
              endforeach;
              wp_reset_postdata();
            endif; 
            ?>
          </div>
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  const postActionsControllers = document.querySelectorAll(
  ".post-actions-controller"
);

// When post action controllers are clicked, the action content is opened and closed

postActionsControllers.forEach((btn) => {
  btn.addEventListener("click", () => {
    const targetId = btn.getAttribute("data-target");
    const postActionsContent = document.getElementById(targetId);

    if (postActionsContent) {
      const isVisible = postActionsContent.getAttribute("data-visible");

      if (isVisible === "false") {
        postActionsContent.setAttribute("data-visible", "true");
        postActionsContent.setAttribute("aria-hidden", "false");
        btn.setAttribute("aria-expanded", "true");
      } else {
        postActionsContent.setAttribute("data-visible", "false");
        postActionsContent.setAttribute("aria-hidden", "true");
        btn.setAttribute("aria-expanded", "false");
      }
    }
  });
});

// If the action content is opened, it is closed by clicking outside of it

function handleClickOutside(event) {
  postActionsControllers.forEach((btn) => {
    const targetId = btn.getAttribute("data-target");
    const postActionsContent = document.getElementById(targetId);

    if (postActionsContent && postActionsContent.getAttribute("data-visible") === "true") {
      if (!postActionsContent.contains(event.target) && event.target !== btn) {
        postActionsContent.setAttribute("data-visible", "false");
        postActionsContent.setAttribute("aria-hidden", "true");
        btn.setAttribute("aria-expanded", "false");
      }
    }
  });
}

document.addEventListener("click", handleClickOutside);

postActionsControllers.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    event.stopPropagation();
  });
});

const likeBtns = document.querySelectorAll(".post-like");

// When the like buttons are clicked, they are colored red or this action is undone

likeBtns.forEach((likeBtn) => {
  likeBtn.addEventListener("click", () => {
    if (likeBtn.classList.contains("active")) {
      likeBtn.classList.remove("active");
    } else {
      likeBtn.classList.add("active");
    }
  });
}); 

// Swiper

var swiper = new Swiper(".mySwiper3", {
  grabCursor: true,
  speed: 400,
  mousewheel: {
    invert: false,
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    900: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
  },
});
</script>