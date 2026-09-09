<div class="w-full">
    @if($submitted)
        <!-- Success State (LOCKED §9.23: minimal fade, no confetti) -->
        <div class="p-4 bg-[#eaf3fb] border border-[#2674c8]/20 rounded-[4px] text-[#216bb9] text-[14px] font-medium transition-opacity duration-200">
            Teşekkürler. Erken erişim listesine eklendiniz.
        </div>
    @else
        <form wire:submit.prevent="submit" class="w-full flex flex-col gap-2">
            <label for="early-access-email" class="sr-only">E-posta adresiniz</label>
            
            <div class="flex flex-col sm:flex-row gap-2 w-full">
                <input type="email" 
                       id="early-access-email" 
                       wire:model.defer="email"
                       autocomplete="email"
                       placeholder="E-posta adresiniz"
                       class="flex-1 h-[44px] px-3.5 bg-white border border-[#dfe3e7] focus:border-[#2674c8] rounded-[4px] text-[14px] text-[#172033] placeholder-[#8791a0] focus:outline-none transition-colors duration-150 @error('email') border-red-500 @enderror"
                       aria-invalid="@error('email') true @else false @enderror" />

                <button type="submit" 
                        wire:loading.attr="disabled"
                        class="h-[44px] px-5 bg-[#2674c8] hover:bg-[#1f66b5] active:bg-[#19579b] disabled:opacity-60 text-white text-[14px] font-medium rounded-[4px] border border-transparent transition-colors duration-150 shrink-0 select-none flex items-center justify-center">
                    <span wire:loading.remove>Katıl</span>
                    <span wire:loading>Kaydediliyor…</span>
                </button>
            </div>

            <!-- Error State (LOCKED §9.24: inline text, no shake) -->
            @error('email')
                <p class="text-[12px] text-red-600 mt-1" role="alert">
                    {{ $message }}
                </p>
            @enderror

            <p class="text-[11px] text-[#8791a0] mt-1.5 leading-normal">
                Verileriniz gizlilik prensiplerimiz ve <a href="/kvkk" class="text-[#2674c8] hover:underline">KVKK Aydınlatma Metni</a> kapsamında korunur.
            </p>
        </form>
    @endif
</div>
