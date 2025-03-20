<?php 
$health_food = get_field('health_food');
?>
    <section class="pt-32 pb-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo $health_food['header']; ?></h2>
                <p class="text-secondary font-medium"><?php echo $health_food['sub_header']; ?></p>
            </div>
			
		<?php 
		if(empty($health_food)) return;
			$num = 0;
			foreach($health_food['content'] as $item):
			$num++;
		?>
			<div class="grid md:grid-cols-2 gap-8 items-center mb-24">
				<!-- Left: Illustration -->
				<div class="<?php echo $num % 2 == 0 ? "order-1 md:order-1" : "order-1 md:order-2" ?>">
					<img src="<?php echo $item['image']; ?>" alt="People communicating" class="w-full max-w-md mx-auto">
				</div>

				<!-- Right: Content -->
				<div class="mx-auto xl:mx-[48px] <?php echo $num % 2 == 0 ? "order-2 md:order-2" : "order-2 md:order-1" ?>">
					<p class="text-gray-700 leading-relaxed">
						<?php echo $item['text']; ?>
					</p>
				</div>
			</div>
		<?php endforeach; ?>
      </div>
    </section>