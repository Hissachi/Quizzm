<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div class="prose prose-lg max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="bg-white rounded-lg shadow-md p-6 text-center">
                <h2 class="text-2xl font-bold text-gray-600">Nenhum conteúdo encontrado</h2>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
