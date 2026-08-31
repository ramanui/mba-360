document.querySelectorAll('.track-activity')
    .forEach(link => {

        link.addEventListener('click', async function(e) {

            e.preventDefault();

            const targetUrl =
                this.getAttribute('href');

            const result =
                await trackActivity({

                    entityType:
                        this.dataset.entityType,

                    entitySlug:
                        this.dataset.entitySlug,

                    entityName:
                        this.dataset.entityName,

                    activityType:
                        this.dataset.activityType,

                    action:
                        this.dataset.action,

                    targetUrl:
                        targetUrl

                });


            if (result.success) {

                window.location.href =
                    targetUrl;

            } else {

                /*
                 * If authentication failed,
                 * send user to login.
                 */
                if (result.authenticated === false) {

                    window.location.href =
                        '/mba-html-discovery/member-login.html?redirect=' +
                        encodeURIComponent(targetUrl);

                    return;
                }

                window.location.href =
                    targetUrl;
            }

        });

    });

async function trackActivity({
    entityType,
    entitySlug,
    entityName,
    activityType,
    action,
    targetUrl = null,
    metadata = null
}) {

    try {

        const response = await fetch(
            '/mba-html-discovery/api/activity/track.php',
            {
                method: 'POST',

                headers: {
                    'Content-Type': 'application/json'
                },

                credentials: 'include',

                body: JSON.stringify({

                    entity_type: entityType,

                    entity_slug: entitySlug,

                    entity_name: entityName,

                    activity_type: activityType,

                    action: action,

                    source_url:
                        window.location.pathname,

                    target_url: targetUrl,

                    metadata: metadata

                })
            }
        );

        return await response.json();

    } catch (error) {

        console.error(
            'Activity tracking failed:',
            error
        );

        return {
            success: false
        };
    }
}