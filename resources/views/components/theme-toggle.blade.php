<div
    x-data="{
        darkMode: document.documentElement.classList.contains('dark'),
        toggle() {
            this.darkMode = !this.darkMode;
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: { dark: this.darkMode } }));
        }
    }"
    @theme-changed.window="darkMode = $event.detail.dark"
    class="inline-flex items-center"
>
    <button
        type="button"
        @click="toggle()"
        class="inline-flex h-11 w-11 items-center justify-center rounded-[4px] border border-[var(--border)] bg-[var(--bg-elevated)] text-[var(--text-secondary)] transition-[color,background-color,border-color] duration-200 ease-[cubic-bezier(0.2,0,0,1)] hover:border-[var(--accent)] hover:bg-[var(--bg-subtle)] hover:text-[var(--text-primary)] focus-visible:outline-2 focus-visible:outline-[var(--accent)] focus-visible:outline-offset-2"
        :aria-label="darkMode ? 'Açık temaya geç' : 'Koyu temaya geç'"
        :title="darkMode ? 'Açık temaya geç' : 'Koyu temaya geç'"
    >
        <span x-show="!darkMode" class="inline-flex items-center justify-center">
            <x-icon name="moon" size="20" />
        </span>
        <span x-show="darkMode" x-cloak class="inline-flex items-center justify-center text-[var(--accent)]">
            <x-icon name="sun" size="20" />
        </span>
    </button>
</div>
