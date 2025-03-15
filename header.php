<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Company - Asia Soru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#00a5e2',
            secondary: '#e1ebf4',
            thirdary: '#f94886'
          }
        }
      }
    }
  </script>
</head>
<body class="font-sans">
    <!-- Header -->
    <?php 
    $field_group_id = 'group_67d581e8af915'; // Replace with your field group ID
    $field_group = acf_get_field_group($field_group_id);

    // Get the current post's URL
    $current_url = get_permalink();

    $path = parse_url($current_url, PHP_URL_PATH); // Get the path from the URL
    $slug = basename(rtrim($path, '/')); // Get the last part of the path and remove trailing slash


    $logo = get_field('logo');
    
    echo '<pre>';
    print_r(esc_html($slug));
    echo '</pre>';
    ?>
    <header class="bg-[#00a5e2] py-3 px-6 shadow-sm fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center">
                <img src="<?php echo get_field('logo'); ?>" alt="Logo" class="h-16 w-16 rounded-full">
            </div>
            
            <nav class="hidden md:flex items-center space-x-12 text-white font-bold">
                <?php 
                $header_links = get_field('header_links');
                foreach ($header_links as $link) {
                    echo '<a href="' . $link['url'] . '" class="' . (esc_html($slug) == $link['slug'] ? ' bg-gray-100 px-4 py-2 rounded-lg text-gray-600' : 'text-white') . '">' . $link['name'] . '</a>';
                }
                ?>
            </nav>
            
            <button class="bg-white text-red-500 px-6 py-2 rounded-full hover:text-primary transition-colors">
                <i class="fa-solid fa-envelope"></i>
                Contact Us
            </button>
        </div>
    </header>