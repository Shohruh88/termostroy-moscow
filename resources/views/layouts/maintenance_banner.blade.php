<!-- {{-- Sayt ishlab chiqilmoqda banneri --}}
<div class="maintenance-banner">
    <div class="maintenance-content">
        <span class="construction-icon">🚧</span>
        <span class="maintenance-text">
            <span class="highlight">Сайт находится в разработке</span> - Мы работаем над улучшением функционала
        </span>
        <span class="construction-icon">🚧</span>
    </div>
</div>
<style>
    .maintenance-banner {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        text-align: center;
        padding: 12px 20px;
        position: relative;
        z-index: 1000;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .maintenance-content {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .construction-icon {
        font-size: 24px;
        animation: bounce 2s infinite;
    }

    .maintenance-text {
        font-size: 16px;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .highlight {
        background: rgba(255, 255, 255, 0.2);
        padding: 2px 8px;
        border-radius: 4px;
        font-weight: 600;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-10px);
        }

        60% {
            transform: translateY(-5px);
        }
    }

    /* Mobile responsiv */
    @media (max-width: 768px) {
        .maintenance-banner {
            padding: 10px 15px;
        }

        .maintenance-content {
            flex-direction: column;
            gap: 8px;
        }

        .maintenance-text {
            font-size: 14px;
        }

        .construction-icon {
            font-size: 20px;
        }
    }
</style>
{{-- End of maintenance banner --}} -->