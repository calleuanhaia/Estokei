            <main class="flex-1 overflow-x-hidden overflow-y-auto p-4 sm:p-8 space-y-8">
                
                <!-- Page Title -->
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mb-1">Visão Geral</h2>
                    <p class="text-estokei-textMuted text-sm">Resumo do seu estoque em tempo real hoje.</p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 hover:border-estokei-accent/30 transition-all group relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-estokei-accent/10 rounded-full blur-2xl group-hover:bg-estokei-accent/20 transition-all"></div>
                        <div class="flex justify-between items-start mb-4 relative z-10">
                            <div>
                                <p class="text-estokei-textMuted text-sm font-medium mb-1">Total de Itens</p>
                                <h3 class="text-3xl font-bold text-white">12.450</h3>
                            </div>
                            <div class="p-3 bg-white/5 rounded-xl text-blue-400 group-hover:scale-110 transition-transform">
                                <i class="ph ph-package text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm relative z-10">
                            <span class="text-estokei-success flex items-center font-medium"><i class="ph ph-trend-up mr-1"></i> +4.5%</span>
                            <span class="text-estokei-textMuted">desde o mês passado</span>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 hover:border-estokei-danger/30 transition-all group relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-estokei-danger/10 rounded-full blur-2xl group-hover:bg-estokei-danger/20 transition-all"></div>
                        <div class="flex justify-between items-start mb-4 relative z-10">
                            <div>
                                <p class="text-estokei-textMuted text-sm font-medium mb-1">Estoque Baixo</p>
                                <h3 class="text-3xl font-bold text-white">34</h3>
                            </div>
                            <div class="p-3 bg-white/5 rounded-xl text-estokei-danger group-hover:scale-110 transition-transform">
                                <i class="ph ph-warning-circle text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm relative z-10">
                            <span class="text-estokei-danger flex items-center font-medium"><i class="ph ph-trend-up mr-1"></i> +12 hoje</span>
                            <span class="text-estokei-textMuted">Ação necessária</span>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 hover:border-estokei-accent/30 transition-all group relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-estokei-accent/10 rounded-full blur-2xl group-hover:bg-estokei-accent/20 transition-all"></div>
                        <div class="flex justify-between items-start mb-4 relative z-10">
                            <div>
                                <p class="text-estokei-textMuted text-sm font-medium mb-1">Valor em Estoque</p>
                                <h3 class="text-3xl font-bold text-white">R$ 145K</h3>
                            </div>
                            <div class="p-3 bg-white/5 rounded-xl text-estokei-accent group-hover:scale-110 transition-transform">
                                <i class="ph ph-currency-dollar text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm relative z-10">
                            <span class="text-estokei-success flex items-center font-medium"><i class="ph ph-trend-up mr-1"></i> +1.2%</span>
                            <span class="text-estokei-textMuted">desde o mês passado</span>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 hover:border-estokei-warning/30 transition-all group relative overflow-hidden">
                        <div class="absolute -right-6 -top-6 w-24 h-24 bg-estokei-warning/10 rounded-full blur-2xl group-hover:bg-estokei-warning/20 transition-all"></div>
                        <div class="flex justify-between items-start mb-4 relative z-10">
                            <div>
                                <p class="text-estokei-textMuted text-sm font-medium mb-1">Entradas Pendentes</p>
                                <h3 class="text-3xl font-bold text-white">12</h3>
                            </div>
                            <div class="p-3 bg-white/5 rounded-xl text-estokei-warning group-hover:scale-110 transition-transform">
                                <i class="ph ph-truck text-2xl"></i>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-sm relative z-10">
                            <span class="text-estokei-warning flex items-center font-medium">Previstos para hoje</span>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Chart -->
                    <div class="lg:col-span-2 bg-estokei-panel rounded-2xl p-6 border border-white/5">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-bold text-white">Fluxo de Movimentação (Anual)</h3>
                            <button class="text-sm text-estokei-textMuted hover:text-estokei-accent transition-colors flex items-center gap-1">
                                Exportar <i class="ph ph-download-simple"></i>
                            </button>
                        </div>
                        <div class="chart-container">
                            <canvas id="movementChart"></canvas>
                        </div>
                    </div>

                    <!-- Donut Chart -->
                    <div class="bg-estokei-panel rounded-2xl p-6 border border-white/5">
                        <h3 class="text-lg font-bold text-white mb-6">Distribuição por Categoria</h3>
                        <div class="chart-container flex justify-center items-center">
                            <canvas id="categoryChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Table & Form Section -->
                <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                    
                    <!-- Table -->
                    <div class="xl:col-span-2 bg-estokei-panel rounded-2xl border border-white/5 overflow-hidden">
                        <div class="p-6 border-b border-white/5 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
                            <h3 class="text-lg font-bold text-white">Últimas Movimentações</h3>
                            <div class="flex items-center gap-3 w-full sm:w-auto">
                                <div class="relative flex-1 sm:flex-none">
                                    <i class="ph ph-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                                    <input type="text" id="tableSearch" placeholder="Pesquisar item, SKU ou status..." class="bg-estokei-bg border border-white/10 rounded-lg py-2 pl-9 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all placeholder-estokei-textMuted text-white w-full sm:w-64">
                                </div>
                                <a href="#" class="text-sm text-estokei-accent hover:text-estokei-accentHover transition-colors font-medium whitespace-nowrap hidden sm:block">Ver todas &rarr;</a>
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-white/5 text-estokei-textMuted text-xs uppercase tracking-wider">
                                        <th class="p-4 font-semibold">Produto</th>
                                        <th class="p-4 font-semibold">Tipo</th>
                                        <th class="p-4 font-semibold">Quantidade</th>
                                        <th class="p-4 font-semibold">Data</th>
                                        <th class="p-4 font-semibold">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="movementsTableBody" class="divide-y divide-white/5 text-sm">
                                    <tr class="hover:bg-white/5 transition-colors">
                                        <td class="p-4 flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center border border-white/10">
                                                <i class="ph ph-laptop text-xl text-gray-300"></i>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-white">MacBook Pro M2</p>
                                                <p class="text-xs text-estokei-textMuted">SKU: MAC-001</p>
                                            </div>
                                        </td>
                                        <td class="p-4"><span class="flex items-center gap-1 text-estokei-success"><i class="ph ph-arrow-down-left"></i> Entrada</span></td>
                                        <td class="p-4 font-medium text-white">+ 25 unid.</td>
                                        <td class="p-4 text-estokei-textMuted">Hoje, 10:45</td>
                                        <td class="p-4">
                                            <span class="px-3 py-1 rounded-full bg-estokei-success/10 text-estokei-success text-xs font-bold border border-estokei-success/20">Concluído</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-white/5 transition-colors">
                                        <td class="p-4 flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center border border-white/10">
                                                <i class="ph ph-chair text-xl text-gray-300"></i>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-white">Cadeira Ergonômica</p>
                                                <p class="text-xs text-estokei-textMuted">SKU: MVR-042</p>
                                            </div>
                                        </td>
                                        <td class="p-4"><span class="flex items-center gap-1 text-estokei-danger"><i class="ph ph-arrow-up-right"></i> Saída</span></td>
                                        <td class="p-4 font-medium text-white">- 4 unid.</td>
                                        <td class="p-4 text-estokei-textMuted">Ontem, 16:30</td>
                                        <td class="p-4">
                                            <span class="px-3 py-1 rounded-full bg-estokei-success/10 text-estokei-success text-xs font-bold border border-estokei-success/20">Concluído</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-white/5 transition-colors">
                                        <td class="p-4 flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center border border-white/10">
                                                <i class="ph ph-mouse text-xl text-gray-300"></i>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-white">Mouse Sem Fio PRO</p>
                                                <p class="text-xs text-estokei-textMuted">SKU: PER-110</p>
                                            </div>
                                        </td>
                                        <td class="p-4"><span class="flex items-center gap-1 text-estokei-success"><i class="ph ph-arrow-down-left"></i> Entrada</span></td>
                                        <td class="p-4 font-medium text-white">+ 50 unid.</td>
                                        <td class="p-4 text-estokei-textMuted">Ontem, 09:15</td>
                                        <td class="p-4">
                                            <span class="px-3 py-1 rounded-full bg-estokei-warning/10 text-estokei-warning text-xs font-bold border border-estokei-warning/20">Pendente</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-white/5 transition-colors">
                                        <td class="p-4 flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center border border-white/10">
                                                <i class="ph ph-monitor text-xl text-gray-300"></i>
                                            </div>
                                            <div>
                                                <p class="font-semibold text-white">Monitor Ultrawide 34"</p>
                                                <p class="text-xs text-estokei-textMuted">SKU: MON-088</p>
                                            </div>
                                        </td>
                                        <td class="p-4"><span class="flex items-center gap-1 text-estokei-danger"><i class="ph ph-arrow-up-right"></i> Saída</span></td>
                                        <td class="p-4 font-medium text-white">- 2 unid.</td>
                                        <td class="p-4 text-estokei-textMuted">18 Mai, 14:20</td>
                                        <td class="p-4">
                                            <span class="px-3 py-1 rounded-full bg-estokei-success/10 text-estokei-success text-xs font-bold border border-estokei-success/20">Concluído</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Quick Add Form -->
                    <div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 flex flex-col">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="p-2 bg-estokei-accent/10 rounded-lg text-estokei-accent">
                                <i class="ph ph-lightning text-xl"></i>
                            </div>
                            <h3 class="text-lg font-bold text-white">Registro Rápido</h3>
                        </div>
                        
                        <form class="space-y-4 flex-1 flex flex-col" onsubmit="event.preventDefault();">
                            <div>
                                <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Código do Produto (SKU)</label>
                                <div class="relative">
                                    <i class="ph ph-barcode absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                                    <input type="text" placeholder="Ex: PROD-001" class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Operação</label>
                                    <select class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white appearance-none">
                                        <option value="in">Entrada</option>
                                        <option value="out">Saída</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Qtd.</label>
                                    <input type="number" placeholder="0" class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Observações</label>
                                <textarea rows="2" placeholder="Motivo da movimentação..." class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted resize-none"></textarea>
                            </div>

                            <div class="pt-4 mt-auto">
                                <button type="submit" class="w-full bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-3 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-1 flex justify-center items-center gap-2">
                                    <i class="ph ph-check-circle text-xl"></i>
                                    Registrar Movimentação
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="pt-8 pb-4 text-center text-sm text-estokei-textMuted border-t border-white/5 mt-8">
                    &copy; 2026 Estokei - Sistema de Gestão de Estoque. Todos os direitos reservados.
                </footer>

            </main>