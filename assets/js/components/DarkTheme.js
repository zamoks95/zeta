const DarkModeToggle = () => {
    const TARGET_ELEMENT = document.getElementById('toggle-mode');
    const TARGET_PARENT = document.querySelector('html');
    const activeClass = 'dark';
    const disabledClass = 'light';

    const toggleMode = (target) => {
        if (target.classList.contains(activeClass)) {
            target.classList.add(disabledClass);
            target.classList.remove(activeClass);
            localStorage.theme = disabledClass;
        } else {
            target.classList.add(activeClass);
            target.classList.remove(disabledClass);
            localStorage.theme = activeClass;
        }
        toggleChild(TARGET_PARENT);
    }

    const toggleChild = () => {
        const lightButton = TARGET_ELEMENT.querySelector(`svg[data-action="light"]`);
        const darkButton = TARGET_ELEMENT.querySelector(`svg[data-action="dark`);
        if (localStorage.theme === 'light') {
            lightButton.classList.remove('hidden');
            darkButton.classList.add('hidden');
        } else {
            lightButton.classList.add('hidden');
            darkButton.classList.remove('hidden');
        }

    }

    const checkLocalStorage = (target) => {
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            target.classList.add('dark');
        } else {
            target.classList.remove('dark');
        }
        toggleChild(TARGET_PARENT);
    }

    // INIT STARTS HERE
    if (!TARGET_ELEMENT) return;
    checkLocalStorage(TARGET_PARENT);
    const button = TARGET_ELEMENT;
    button.addEventListener('click', () => toggleMode(TARGET_PARENT));
}
export default DarkModeToggle;