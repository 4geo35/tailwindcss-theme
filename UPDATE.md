#### v1.1.12

Исправлены переменные `js` для `layouts`, нужно скопировать `Views` классы компоненты, или дописать в них переменные:
    
    php artisan vendor:publish --provider="GIS\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="layout-components" --force

#### v1.1.7

Изменены некоторые переменные в css, если в проекте не менялись переменные, то запустить:
    
    php artisan vendor:publish --provider="GIS\TailwindcssTheme\TailwindcssThemeServiceProvider" --tag="variables" --force

Если менялись, то лучше поправить размеры шрифтов: 
    
    --input-font-size: 1rem; /* 16px */
    --input-font-size-sm: .875rem; /* 14px */
    --btn-letter-spacing: 0;
