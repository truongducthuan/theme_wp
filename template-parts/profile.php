<!-- President Talk -->
<?php 
$president = get_field('president');
?>
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-2"><?php echo $president['header']; ?></h2>
                <p class="text-secondary font-medium"><?php echo $president['sub_header']; ?></p>
            </div>

			<div class="grid md:grid-cols-5 gap-8 items-center">
				<!-- Philosophy Points -->
				<div class="space-y-8 order-2 md:col-span-3">
					<?php 
						echo '<div class="flex gap-4">';
						echo '<p class="text-gray-700 yomogi-regular">';
						echo $president['text'];
						echo '</p>';
						echo '</div>';
					?>
				</div>

				<!-- Philosophy Image -->
				<div class="rounded-lg overflow-hidden shadow-lg order-1 md:col-span-2">
					<img 
						src="<?php echo $president['image']; ?>" 
						alt="Philosophy Concept" 
						class="w-full h-auto"
					>
				</div>
			</div>

        </div>
    </section>