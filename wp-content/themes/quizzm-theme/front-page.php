<?php get_header(); ?>

<section class="min-h-screen bg-gradient-to-br from-blue-900 to-purple-900 text-white">
    <div class="container mx-auto px-4 py-20">
        <div class="text-center max-w-3xl mx-auto">
            <!-- Logo/Título -->
            <h1
                class="text-5xl md:text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
                QuizzM
            </h1>

            <!-- Subtítulo -->
            <p class="text-xl md:text-2xl mb-8 text-gray-200">
                Desafie seu conhecimento com nossos quizzes interativos e divertidos!
            </p>

            <!-- Estatísticas -->
            <div class="grid grid-cols-3 gap-6 mb-12 max-w-md mx-auto">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-300">50+</div>
                    <div class="text-gray-300">Quizzes</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-300">10k+</div>
                    <div class="text-gray-300">Jogadores</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-300">95%</div>
                    <div class="text-gray-300">Diversão</div>
                </div>
            </div>

            <!-- Botão CTA -->
            <a href="<?php echo home_url('/quizzes'); ?>"
                class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-full text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                🚀 Começar a Jogar
            </a>

            <!-- Features -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-xl">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="font-semibold text-lg mb-2">Desafios Diários</h3>
                    <p class="text-gray-300">Novos quizzes toda semana</p>
                </div>
                <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-xl">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="font-semibold text-lg mb-2">Ranking Competitivo</h3>
                    <p class="text-gray-300">Compare seus scores</p>
                </div>
                <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-xl">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="font-semibold text-lg mb-2">Estatísticas Detalhadas</h3>
                    <p class="text-gray-300">Acompanhe seu progresso</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>