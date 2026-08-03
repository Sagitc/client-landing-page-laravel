export function initHeaderNavbar(): void {
    const navbar = document.querySelector('#navbar');

    if (!navbar) return;

    navbar.addEventListener('click', (event) => {

        const target = event.target as HTMLElement;

        if (target.tagName === 'A') {
            const href = target.getAttribute('href');

            if (href && href.startsWith('#')) {
                event.preventDefault();
                const section = document.querySelector(href);
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }
    });
}