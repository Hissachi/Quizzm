</main>

<footer class="bg-gray-800 text-white py-8 mt-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Área 1 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">QuizzM</h3>
                <p class="text-gray-300">Sua plataforma de quizzes interativa.</p>
            </div>
            
            <!-- Área 2 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Links Rápidos</h3>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'space-y-2',
                    'container' => false
                ));
                ?>
            </div>
            
            <!-- Área 3 -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contato</h3>
                <p class="text-gray-300">Email: contato@quizzm.com</p>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>