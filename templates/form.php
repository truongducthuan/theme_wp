<?php 
/* Template Name: Form Page
 * Description: A custom form page template for the robotics course website.
 */
get_header();
$form = get_the_content();
?>

<style>
    .form_input {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }
    .form_input:focus {
        border-color: #FFA500;
        box-shadow: 0 0 5px rgba(255, 165, 0, 0.5);
    }

    .form_btn {
        background-color: #FFA500;
        color: white;
        padding: 12px 16rem;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }

    #btn > p {
        text-align: center;
    }

    @media (max-width: 768px) {
        .form_btn {
            padding: 12px 10rem;
        }
    }
</style>

<main class="bg-brand-cream min-h-screen flex items-center justify-center p-4">
    <div class="container max-w-xl mx-auto px-4 py-12 max-w-6xl pb-8 pt-20 xl:pt-28 ">
        <!-- Header Section -->
        <div class="text-center mb-10">
            <h1 class="text-5xl md:text-6xl font-bold text-brand-orange mb-6">LIÊN HỆ</h1>
            <p class="text-lg md:text-xl text-gray-800">
                Có thắc mắc hay muốn biết thêm thông tin? Liên hệ với chúng tôi!
            </p>
        </div>
        
        <!-- Contact Form -->
            <?php echo do_shortcode($form); ?>

        <!-- Additional Contact Info (Optional)
        <div class="mt-12 text-center text-gray-600">
            <p>Hoặc liên hệ trực tiếp qua:</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="mailto:info@example.com" class="hover:text-brand-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
                <a href="tel:+1234567890" class="hover:text-brand-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </a>
                <a href="#" class="hover:text-brand-orange">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                    </svg>
                </a>
            </div>
        </div> -->
    </div>
</main>

<?php echo get_footer(); ?>