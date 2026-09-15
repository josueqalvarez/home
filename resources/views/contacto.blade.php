<x-layout title="Contacto | TechFreelancer" active="contacto">
    <div class="tech-grid min-h-[80vh] py-16">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
                <!-- Hero / Intro Column -->
                <div class="lg:col-span-5 lg:pr-12 reveal">
                    <x-badge text="Contacto Directo" class="mb-6" />
                    
                    <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-6 text-center md:text-left">
                        Cuéntame qué necesitas.
                    </h1>
                    
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-12">
                        No necesitas tener claro cómo solucionarlo. Explícame el problema y lo analizamos juntos.
                    </p>

                    <!-- Direct Contact Links -->
                    <div class="space-y-4">
                        <h3 class="font-label-caps text-label-caps text-primary/60 tracking-wider">CANALES DIRECTOS</h3>
                        
                        <a href="https://wa.me/34600000000" target="_blank" rel="noopener noreferrer" 
                           class="group flex items-center gap-4 p-4 bg-surface-container-lowest border border-outline-variant/20 rounded-lg hover:border-secondary/30 transition-all shadow-sm relative overflow-hidden">
                            <div class="absolute inset-0 bg-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined">chat</span>
                            </div>
                            <div>
                                <div class="font-body-md text-body-md font-semibold text-primary">WhatsApp</div>
                                <div class="font-code-sm text-code-sm text-on-surface-variant">+34 600 00 00 00</div>
                            </div>
                        </a>

                        <a href="mailto:hola@techfreelancer.com" 
                           class="group flex items-center gap-4 p-4 bg-surface-container-lowest border border-outline-variant/20 rounded-lg hover:border-secondary/30 transition-all shadow-sm relative overflow-hidden">
                            <div class="absolute inset-0 bg-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined">mail</span>
                            </div>
                            <div>
                                <div class="font-body-md text-body-md font-semibold text-primary">Email</div>
                                <div class="font-code-sm text-code-sm text-on-surface-variant">hola@techfreelancer.com</div>
                            </div>
                        </a>

                        <a href="#" target="_blank" rel="noopener noreferrer" 
                           class="group flex items-center gap-4 p-4 bg-surface-container-lowest border border-outline-variant/20 rounded-lg hover:border-secondary/30 transition-all shadow-sm relative overflow-hidden">
                            <div class="absolute inset-0 bg-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined">link</span>
                            </div>
                            <div>
                                <div class="font-body-md text-body-md font-semibold text-primary">LinkedIn</div>
                                <div class="font-code-sm text-code-sm text-on-surface-variant">/in/techfreelancer</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="lg:col-span-7 mt-12 lg:mt-0 reveal reveal-delay-200">
                    <div class="bg-surface-container-lowest p-8 md:p-12 border border-outline-variant/20 rounded-xl relative shadow-[0_8px_30px_rgb(37,99,235,0.03)] tech-node">
                        <!-- Tech Nodes -->
                        <div class="tech-node-tl"></div>
                        <div class="tech-node-br"></div>

                        @if(session('success'))
                            <div class="mb-8 p-4 bg-emerald-50 border border-emerald-200 rounded text-emerald-800 font-body-md flex items-center gap-3">
                                <span class="material-symbols-outlined text-emerald-600">check_circle</span>
                                <div>{{ session('success') }}</div>
                            </div>
                        @endif

                        <form action="{{ route('contacto.enviar') }}" method="POST" class="space-y-8">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="relative group">
                                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre *" required
                                           class="w-full bg-surface-container-lowest border-0 border-b border-outline-variant/30 focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary placeholder-on-surface-variant/50 transition-colors">
                                    <span class="input-active-label absolute -top-4 left-0 font-code-sm text-[10px] text-secondary tracking-widest uppercase">Activo</span>
                                    @error('nombre')
                                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="relative group">
                                    <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}" placeholder="Empresa"
                                           class="w-full bg-surface-container-lowest border-0 border-b border-outline-variant/30 focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary placeholder-on-surface-variant/50 transition-colors">
                                    <span class="input-active-label absolute -top-4 left-0 font-code-sm text-[10px] text-secondary tracking-widest uppercase">Activo</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="relative group">
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email *" required
                                           class="w-full bg-surface-container-lowest border-0 border-b border-outline-variant/30 focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary placeholder-on-surface-variant/50 transition-colors">
                                    <span class="input-active-label absolute -top-4 left-0 font-code-sm text-[10px] text-secondary tracking-widest uppercase">Activo</span>
                                    @error('email')
                                        <p class="text-error text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="relative group">
                                    <input type="tel" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="WhatsApp"
                                           class="w-full bg-surface-container-lowest border-0 border-b border-outline-variant/30 focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary placeholder-on-surface-variant/50 transition-colors">
                                    <span class="input-active-label absolute -top-4 left-0 font-code-sm text-[10px] text-secondary tracking-widest uppercase">Activo</span>
                                </div>
                            </div>

                            <div class="relative group pt-4">
                                <label for="necesidad" class="block font-label-caps text-label-caps text-on-surface-variant mb-2">¿QUÉ NECESITAS?</label>
                                <select id="necesidad" name="necesidad"
                                        class="w-full bg-surface-container-lowest border-0 border-b border-outline-variant/30 focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary transition-colors appearance-none cursor-pointer">
                                    <option value="" disabled {{ old('necesidad') ? '' : 'selected' }}>Selecciona una opción</option>
                                    <option value="web" {{ old('necesidad') === 'web' ? 'selected' : '' }}>Desarrollo Web</option>
                                    <option value="automatizacion" {{ old('necesidad') === 'automatizacion' ? 'selected' : '' }}>Automatización</option>
                                    <option value="consultoria" {{ old('necesidad') === 'consultoria' ? 'selected' : '' }}>Consultoría Técnica</option>
                                    <option value="otro" {{ old('necesidad') === 'otro' ? 'selected' : '' }}>Otro</option>
                                </select>
                                <span class="absolute right-0 top-12 material-symbols-outlined text-outline-variant pointer-events-none">expand_more</span>
                                <span class="input-active-label absolute top-2 left-0 font-code-sm text-[10px] text-secondary tracking-widest uppercase">Activo</span>
                            </div>

                            <div class="relative group pt-4">
                                <textarea id="mensaje" name="mensaje" rows="4" placeholder="Cuéntame brevemente sobre tu proyecto *" required
                                          class="w-full bg-surface-container-lowest border-0 border-b border-outline-variant/30 focus:border-secondary focus:ring-0 px-0 py-3 font-body-md text-primary placeholder-on-surface-variant/50 transition-colors resize-none">{{ old('mensaje') }}</textarea>
                                <span class="input-active-label absolute top-2 left-0 font-code-sm text-[10px] text-secondary tracking-widest uppercase">Activo</span>
                                @error('mensaje')
                                    <p class="text-error text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="pt-6">
                                <x-button type="submit" variant="primary" size="lg" icon="arrow_forward" iconPosition="right">
                                    Enviar consulta
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
