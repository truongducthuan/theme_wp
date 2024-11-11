<?php 
/* Template Name: Application Form */
get_header();
?>

<section class="mt-[120px] bg-[#7cb7ff]">
  <h1>Application Form</h1>
  <p>Application Form</p>
  <div class="flex items-center justify-center gap-2">
    <a href="<?php echo esc_url(home_url()); ?>"><i class="fa-solid fa-house-chimney text-primary"></i></a>
    <div class="border-r-[1px] border-solid border-primary h-4"></div>
    <span class="text-secondary text-sm">Application Form</span>
  </div>

  <div>Please feel free to contact us</div>

  <p>If you would like to apply for a free trial lesson for our preschool or elementary school classes, apply to participate in events or workshops, or if you have any questions or concerns, please feel free to contact us.</p>

  <form action="">
    <div>
      <div>
        <label for="last_name">Họ</label>
        <input type="text" name="last_name">
      </div>
      <div>
        <label for="first_name">Tên</label>
        <input type="text" name="first_name">
      </div>
    </div>
    <div>
      <label for="phone_number">Số điện thoại</label>
      <input type="number" name="phone_number">
    </div>
    <div>
      <label for="last_name">Họ</label>
      <input type="text" name="last_name">
    </div>
  </form>
</section>


<?php get_footer(); ?>