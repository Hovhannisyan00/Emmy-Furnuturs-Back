<!-- Our Team -->
<section class="section section-md bg-default">
    <div class="container">
        <h2 class="text-transform-capitalize">@lang('messages.our_team')</h2>

        <!-- Owl Carousel -->
        <div id="team-carousel"
             class="owl-carousel"
             data-items="1"
             data-sm-items="2"
             data-md-items="3"
             data-margin="30"
             data-dots="true"
             data-autoplay="true">
        </div>
    </div>
</section>

<script>
    async function fetchTeamMembers() {
        const container = $('#team-carousel');

        // Loading placeholder
        container.html(`
            <article class="team-classic box-md text-center">
                <p>@lang('messages.loading_team_members')</p>
            </article>
        `);

        try {
            const response = await fetch("{{ route('web.getTeamMembers') }}");
            if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
            const data = await response.json();

            // Reset previous carousel state if exists
            if (container.hasClass('owl-loaded')) {
                container.trigger('destroy.owl.carousel');
                container.html('');
                container.removeClass('owl-loaded owl-hidden');
            } else {
                container.html('');
            }

            // If no members
            if (!data.length) {
                container.html('<p>@lang('messages.no_team_members')</p>');
                return;
            }

            // Add each member
            data.forEach((member) => {
                const imageUrl = member.photo || '/images/team/default.jpg';
                const name = member.name || 'Unnamed';
                const position = member.position || '';
                const description = member.description || '—';
                const phone = member.phone || '';
                const socials = member.socials || {};

                const html = `
                    <article class="team-classic box-md text-center">
                        <a class="team-classic-figure" href="#">
                            <img src="${imageUrl}" alt="${name}" />
                        </a>
                        <h4 class="team-classic-name"><a href="#">${name}</a></h4>
                        ${position ? `<p class="team-classic-position">${position}</p>` : ''}
                        <p class="team-classic-text">${description}</p>
                        ${phone ? `<p class="team-classic-phone"><i class="mdi mdi-phone"></i> <a href="tel:${phone}">${phone}</a></p>` : ''}

                        <ul class="list-inline team-classic-list-social list-social-2 list-inline-sm">
                            ${socials.facebook ? `<li><a class="icon mdi mdi-facebook" href="${socials.facebook}" target="_blank"></a></li>` : ''}
                            ${socials.twitter ? `<li><a class="icon mdi mdi-twitter" href="${socials.twitter}" target="_blank"></a></li>` : ''}
                            ${socials.instagram ? `<li><a class="icon mdi mdi-instagram" href="${socials.instagram}" target="_blank"></a></li>` : ''}
                            ${socials.google_plus ? `<li><a class="icon mdi mdi-google-plus" href="${socials.google_plus}" target="_blank"></a></li>` : ''}
                        </ul>
                    </article>
                `;

                container.append(html);
            });

            // Re-initialize carousel
            container.owlCarousel({
                items: 1,
                margin: 30,
                dots: true,
                autoplay: true,
                responsive: {
                    576: { items: 2 },
                    992: { items: 3 }
                }
            });

        } catch (error) {
            console.error('Error loading team members:', error);
            container.html(`
                <article class="team-classic box-md text-center text-danger">
                    <p>@lang('messages.failed_load_team')</p>
                </article>
            `);
        }
    }

    document.addEventListener('DOMContentLoaded', fetchTeamMembers);
</script>
