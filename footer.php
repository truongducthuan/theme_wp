  <div class="hidden md:block fixed bottom-16 right-10 hover:scale-105 animate-bounce hover:animate-pulse cursor-pointer transition-all duration-300" id="scroll_top">
    <button class="py-[8px] px-[12px] bg-primary rounded-full"><i class="fa-solid fa-chevron-up text-white"></i></button>
  </div>
  <footer class="flex items-center justify-center gap-6 mt-8 mb-16">
    <div><a href="/chinh-sach-bao-mat-global-innovators-hub/">Chính sách bảo mật</a></div>
    <div class="border-r-[1px] border-solid border-primary h-4"></div>
	  <div>©Global Innovators Hub</div>
  </footer>
  <?php wp_footer(); ?>
</main>

<script>
      // scroll top
      $('#scroll_top').click(function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, 'slow');
    })
</script>
</body>
</html>
