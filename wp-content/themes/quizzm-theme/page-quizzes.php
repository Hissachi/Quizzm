<?php
/**
 * Template Name: Página de Quizzes
 */
get_header(); ?>

<section class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <!-- Cabeçalho -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Nossos Quizzes
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Escolha um quiz e teste seus conhecimentos. Diversão garantida!
            </p>
        </div>

        <!-- Filtros -->
        <div class="flex justify-center mb-8">
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex flex-wrap gap-4">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition-colors">
                        Todos
                    </button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">
                        Conhecimento Geral
                    </button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">
                        Tecnologia
                    </button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 transition-colors">
                        Entretenimento
                    </button>
                </div>
            </div>
        </div>

        <!-- Grid de Quizzes -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Quiz 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-blue-400 to-purple-500 relative">
                    <div class="absolute top-4 right-4 bg-yellow-400 text-yellow-900 px-3 py-1 rounded-full text-sm font-semibold">
                        ⭐ Popular
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Conhecimento Geral #1</h3>
                    <p class="text-gray-600 mb-4">Teste seus conhecimentos em diversas áreas</p>
                    
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">10 perguntas</span>
                        <span class="text-sm text-gray-500">⏱️ 15 min</span>
                    </div>
                    
                    <div class="bg-gray-100 rounded-full h-2 mb-4">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                    </div>
                    
                    <a href="#" class="block w-full bg-blue-500 hover:bg-blue-600 text-white text-center py-3 px-4 rounded-lg font-semibold transition-colors">
                        Jogar Agora
                    </a>
                </div>
            </div>

            <!-- Quiz 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-green-400 to-blue-500"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Tecnologia & Inovação</h3>
                    <p class="text-gray-600 mb-4">Quanto você sabe sobre tech?</p>
                    
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">15 perguntas</span>
                        <span class="text-sm text-gray-500">⏱️ 20 min</span>
                    </div>
                    
                    <div class="bg-gray-100 rounded-full h-2 mb-4">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                    </div>
                    
                    <a href="#" class="block w-full bg-blue-500 hover:bg-blue-600 text-white text-center py-3 px-4 rounded-lg font-semibold transition-colors">
                        Jogar Agora
                    </a>
                </div>
            </div>

            <!-- Quiz 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-red-400 to-pink-500"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Cinema & Séries</h3>
                    <p class="text-gray-600 mb-4">Teste seu conhecimento cinematográfico</p>
                    
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">12 perguntas</span>
                        <span class="text-sm text-gray-500">⏱️ 18 min</span>
                    </div>
                    
                    <div class="bg-gray-100 rounded-full h-2 mb-4">
                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                    
                    <a href="#" class="block w-full bg-blue-500 hover:bg-blue-600 text-white text-center py-3 px-4 rounded-lg font-semibold transition-colors">
                        Jogar Agora
                    </a>
                </div>
            </div>

            <!-- Quiz 4 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 bg-gradient-to-r from-purple-400 to-pink-500 relative">
                    <div class="absolute top-4 right-4 bg-green-400 text-green-900 px-3 py-1 rounded-full text-sm font-semibold">
                        🆕 Novo
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">História do Brasil</h3>
                    <p class="text-gray-600 mb-4">Conhece nossa história?</p>
                    
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-500">8 perguntas</span>
                        <span class="text-sm text-gray-500">⏱️ 12 min</span>
                    </div>
                    
                    <div class="bg-gray-100 rounded-full h-2 mb-4">
                        <div class="bg-red-500 h-2 rounded-full" style="width: 30%"></div>
                    </div>
                    
                    <a href="#" class="block w-full bg-blue-500 hover:bg-blue-600 text-white text-center py-3 px-4 rounded-lg font-semibold transition-colors">
                        Jogar Agora
                    </a>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="max-w-2xl mx-auto mt-16 bg-white rounded-xl shadow-md p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">
                📩 Quer novos quizzes?
            </h2>
            <p class="text-gray-600 text-center mb-6">
                Cadastre-se e receba novos desafios toda semana!
            </p>
            <div class="flex gap-4">
                <input type="email" placeholder="Seu melhor email" class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
                    Inscrever
                </button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>