<!-- Our brand -->
<section class="section section-md bg-default brannddlogo">
    <div class="container">
        <div id="partners-carousel"
             class="owl-carousel"
             data-items="1" data-sm-items="2" data-md-items="4" data-lg-items="5"
             data-margin="30" data-dots="true" data-autoplay="true">
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', async () => {
        const carousel = $('#partners-carousel');

        // Показываем сообщение о загрузке
        carousel.html(`
            <article class="box-md text-center">
                <p>@lang('messages.loading_partners')</p>
            </article>
        `);

        try {
            const response = await fetch('{{ route('web.our-partners') }}');
            if (!response.ok) throw new Error('Network response was not ok');
            const partners = await response.json();

            // Удаляем старые элементы (если есть)
            if (carousel.hasClass('owl-loaded')) {
                carousel.trigger('destroy.owl.carousel');
            }
            carousel.html('');

            // Если нет партнеров
            if (!partners || partners.length === 0) {
                carousel.html(`
                    <article class="box-md text-center">
                        <p>@lang('messages.no_partners')</p>
                    </article>
                `);
                return;
            }

            // Добавляем новые элементы
            partners.forEach(partner => {
                carousel.append(`
                <article class="box-md">
                    <a href="#">
                        <figure class="logo-grey-style">
                            <img src="${partner.photo_url ?? './images/logo-placeholder.png'}"
                                 alt="${partner.name}" width="146" height="132" />
                            <figcaption><h5>${partner.name}</h5></figcaption>
                        </figure>
                    </a>
                </article>
            `);
            });

            // 💥 Повторно инициализируем карусель
            carousel.owlCarousel({
                items: 5,
                margin: 30,
                dots: true,
                autoplay: true,
                loop: true,
                responsive: {
                    0: { items: 1 },
                    576: { items: 2 },
                    768: { items: 4 },
                    992: { items: 5 }
                }
            });

        } catch (error) {
            console.error('@lang('messages.partners_load_error'):', error);
            carousel.html(`
                <article class="box-md text-center text-danger">
                    <p>@lang('messages.failed_load_partners')</p>
                </article>
            `);
        }
    });
</script>
