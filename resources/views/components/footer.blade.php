<footer id="footer" class="w-full bg-white border-t border-[#dfe3e7] mt-auto">
    <div class="mz-container pt-16 pb-12 lg:pt-20 lg:pb-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-8 items-start mb-12">
            <div class="md:col-span-6 flex flex-col items-start">
                <a href="#hero" class="focus-visible:outline-2 focus-visible:outline-[#2674c8]">
                    <x-logo size="32" />
                </a>
                <p class="text-[14px] text-[#596579] font-normal leading-[1.6] mt-4 max-w-[340px]">UYAP, günlük çalışma ve yapay zekâ destekli hukuki işler için tek çalışma alanı.</p>
            </div>
            <div class="md:col-span-3 flex flex-col items-start">
                <span class="text-[13px] font-semibold text-[#172033] uppercase tracking-wider mb-4 select-none">Ürün</span>
                <ul class="space-y-2.5 text-[14px] text-[#596579]">
                    <li><a href="#product" class="hover:text-[#2674c8] transition-colors duration-150">Özellikler</a></li>
                    <li><a href="#uyap" class="hover:text-[#2674c8] transition-colors duration-150">UYAP</a></li>
                    <li><a href="#ai" class="hover:text-[#2674c8] transition-colors duration-150">Yapay Zekâ</a></li>
                    <li><a href="#work-tools" class="hover:text-[#2674c8] transition-colors duration-150">Çalışma Araçları</a></li>
                    <li><a href="#pricing" class="hover:text-[#2674c8] transition-colors duration-150">Fiyatlandırma</a></li>
                </ul>
            </div>
            <div class="md:col-span-3 flex flex-col items-start">
                <span class="text-[13px] font-semibold text-[#172033] uppercase tracking-wider mb-4 select-none">Hukuki</span>
                <ul class="space-y-2.5 text-[14px] text-[#596579]">
                    <li><a href="/gizlilik" class="hover:text-[#2674c8] transition-colors duration-150">Gizlilik Politikası</a></li>
                    <li><a href="/kvkk" class="hover:text-[#2674c8] transition-colors duration-150">KVKK Aydınlatma Metni</a></li>
                    <li><a href="/kullanim-kosullari" class="hover:text-[#2674c8] transition-colors duration-150">Kullanım Koşulları</a></li>
                </ul>
            </div>
        </div>
        <div class="pt-8 border-t border-[#e7e9ec] flex flex-col sm:flex-row items-center justify-between gap-4 text-[13px] text-[#8791a0]">
            <p>&copy; {{ date('Y') }} Mevzun. Tüm hakları saklıdır.</p>
            <p class="text-[12px]">Masaüstü Hukuk Çalışma Alanı</p>
        </div>
    </div>
</footer>
